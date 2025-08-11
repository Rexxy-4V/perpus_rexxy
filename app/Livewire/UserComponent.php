<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme ='bootstrap';
    public $id, $nama, $email, $password;
    public function render()
    {
        $layout['title'] = "Kelola User";
        $data['user'] = User::paginate(10);
        return view('livewire.user-component', $data)->layoutData($layout);
    }
    public function store(){
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email|',
            'password' => 'required|min:6',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        User::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'password' => $this->password,
            'jenis' => 'admin',
        ]);

        session()->flash('success', 'Berhasil Simpan');
        $this->reset();
    }
    public function edit($id){
        $user = User::find($id);
        $this->nama = $user->nama;
        $this->email = $user->email;
        $this->id = $user->id;
    }

    public function update()
    {
        $user = User::find($this->id);
        if ($this->password == ""){
            $user->update([
                'nama' => $this->nama,
                'email' => $this->email
            ]);
        } else {
            $user->update([
                'nama' => $this->nama,
                'email' => $this->email,
                'password' => $this->password
            ]);
        }
        session()->flash('success', 'Berhasil Diubah!');
        $this->reset();
    }
}
