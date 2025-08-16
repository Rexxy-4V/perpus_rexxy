<?php

namespace App\Livewire;

use App\Models\Pinjam;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class KembaliComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $judul, $member, $tglkembali;
    public function render()
    {
        $layout['title'] = 'Pengembalian Buku';
        $data['pinjam'] = Pinjam::where('status', 'pinjam')->paginate(10);
        return view('livewire.kembali-component', $data)->layoutData($layout);
    }

    public function pilih($id)
    {
        $pinjam = Pinjam::find($id);
        $this->judul = $pinjam->buku->judul;
    }
}
