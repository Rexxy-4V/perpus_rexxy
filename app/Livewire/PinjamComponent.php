<?php

namespace App\Livewire;

use App\Models\Buku;
use App\Models\Pinjam;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class PinjamComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $id, $user, $buku, $tgl_pinjam, $tgl_kembali;
    public function render()
    {
        $data['member'] = User::where('jenis', 'member')->get();
        $data['book'] = Buku::all();
        $data['pinjam'] = Pinjam::paginate(0);
        $layout['title'] = 'Pinjam Buku';

        return view('livewire.pinjam-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'user' => 'required',
            'buku' => 'required',
        ],[
            'user.required' => 'User harus dipilih.',
            'buku.required' => 'Buku harus dipilih.',
        ]);

        $now = date('Y-m-d');
        $kembali = date('Y-m-d', strtotime($now . ' + 7 days'));

        // Pinjam::create([
        //     'user_id' => $this->user,
        //     'buku_id' => $this->buku,
        //     'tgl_pinjam' => $this->tgl_pinjam,
        //     'tgl_kembali' => $this->tgl_kembali,
        // ]);

        // session()->flash('message', 'Data pinjam buku berhasil disimpan.');
        // $this->reset();
    }
}
