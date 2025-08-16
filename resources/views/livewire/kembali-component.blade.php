<div>
    <div class="card">
        <div class="card-header">
            Pengembalian Buku
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <input type="text" wire:model.live="cari" class="from-control w-50" placeholder="Cari...">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Member</th>
                            <th scope="col">Tangal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $pinjam as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->buku->judul }}</td>
                                <td>{{ $data->user->nama }}</td>
                                <td>{{ $data->tgl_pinjam }}</td>
                                <td>{{ $data->tgl_kembali }}</td>
                                <td>
                                    <a href="#" wire:click="pilih({{$data->id}})" class="btn btn-sm btn-success" data-toggle="modal" data-target="#pilih">Pilih</a>
                                    {{-- <a href="#" wire:click="edit({{ $data->id }})" class="btn btn-sm btn-info"
                                        data-toggle="modal" data-target="#editPage">Ubah</a>
                                    <a href="#" wire:click="confirm({{ $data->id }})" data-toggle="modal"
                                        data-target="#deletePage" class="btn btn-sm btn-danger">Hapus</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pinjam->links() }}
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="pilih" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">From Pengembalian Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            Judul Buku :
                        </div>
                        <div class="col-md-9">
                            {{ $judul }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:click="store" class="btn btn-primary">Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
