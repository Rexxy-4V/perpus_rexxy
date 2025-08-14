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
        $data['member'] = User::where('role', 'member')->get();
        $data['buku'] = Buku::all();
        $data['pinjam'] = Pinjam::paginate(0);
        $layout['title'] = 'Pinjam Buku';
        return view('livewire.pinjam-component');
    }
}
