<?php

namespace App\Livewire;

use App\Models\Buku;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BukuComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $kategori, $judul, $penulis, $penerbit, $isbn, $tahun, $jumlah, $cari;
    public function render()
    {
        if ($this->cari != ""){
            $data['buku'] = Buku::where('judul', 'like', '%' .$this->cari . '%')->paginate(10);
        } else {
            $data['buku'] = Buku::paginate(10);
        }
        $data['category'] = Kategori::all();
        $layout['title'] = 'Kelola Buku';
        return view('livewire.buku-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'isbn' => 'required',
            'jumlah' => 'required',
        ],[
            'judul.required' => 'Judul Buku Tidak Boleh Kosong!',
            'kategori.required' => 'Kategori Tidak Boleh Kosong!',
            'penulis.required' => 'Penulis Tidak Boleh Kosong!',
            'penerbit.required' => 'Penerbit Tidak Boleh Kosong!',
            'tahun.required' => 'tahun Tidak Boleh Kosong!',
            'isbn.required' => 'ISBN Tidak Boleh Kosong!',
            'jumlah.required' => 'Jumlah Tidak Boleh Kosong!',
        ]);
    }
}
