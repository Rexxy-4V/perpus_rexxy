<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MemberComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public  $nama, $telepon, $email, $alamat, $password, $cari, $id;
    public function render()
    {
        if ($this->cari != "") {
            $data['member'] = User::Where('nama', 'like', '%' .$this->cari . '%')
            ->paginate(10);
        } else {
            $data['member'] = User::where('jenis', 'member')->paginate(10);
        }

        $layout['title'] = 'Kelola Member';
        return view('livewire.member-component', $data)->layoutData($layout);
    }

    public function store(){
        $this->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ],[
            'nama.required' => 'Nama Lengkap Tidak Boleh Kosong!',
            'telepon.required' => 'Telepon Tidak Boleh Kosong!',
            'email.required' => 'Email Tidak Boleh Kosong!',
            'alamat.required' => 'Alamat Tidak Boleh Kosong!'
        ]);
        User::create([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'telepon' => $this->telepon,
            'email' => $this->email,
            'jenis' => 'member',
        ]);

        session()->flash('success', 'Berhasil Simpan!');
        return redirect()->route('member');
    }
}
