@extends('admin.layouts.app')

@section('title', 'Admin')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>
                Admin
            </h3>
            <div class="">
                <button class="border border-info border-2 px-4 py-2 rounded text-info fw-bold" style="background-color: white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus-square"></i>
                    Tambah Admin
                </button>
            </div>
        </div>
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Kursus</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus Dimiliki</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus Dibeli</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Bergabung</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No HP</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                        <tr>
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $admin->name }}</h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-center text-xs font-weight-bold mb-0">4</p>
                            </td>
                            <td>
                                <p class="text-center text-xs font-weight-bold mb-0">4</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold">{{ $admin->created_at->format('d M Y') }}</span>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">{{ $admin->email }}</p>
                            </td>
                            <td class="align-middle">
                                <p class="text-center text-xs font-weight-bold mb-0">{{ $admin->phone }}</p>
                            </td>
                            <td class="align-middle">
                                <div class="text-center">
                                    <a href="" class="btn btn-outline-success mb-0">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#mymodal"
                                        data-remote="{{ route('admins.edit', $admin->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Edit {{$admin->name }}" 
                                        class="btn btn-outline-info mb-0"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger mb-0" 
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Admin</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form action="{{ route('admins.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Nama</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-2">
                        <label class="form-label">No HP</label>
                        <input name="phone" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <input type="hidden" name="role" value="Admin">
                </div>
                <div class="modal-footer mx-auto">
                    <button type="sumbit" class="btn btn-outline-success">
                        <i class="fas fa-plus-square"></i>
                        Tambah Admin
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection