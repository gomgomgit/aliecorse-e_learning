@extends('admin.layouts.app')

@section('title', 'Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>
                Artikel
            </h3>
            <div class="">
                <a href="{{ url('admin/articles/create') }}" class="border border-info border-2 px-4 py-2 rounded text-info fw-bold" style="background-color: white">
                    <i class="fas fa-plus-square"></i>
                    Tambah Artikel
                </a>
            </div>
        </div>
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Thumbnail</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Konten</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <img src="https://avatars.githubusercontent.com/u/58408947?v=4" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                            </td>
                            <td>
                                <p class="text-center text-xs font-weight-bold mb-0">John Michael</p>
                            </td>
                            <td>
                                <p class="text-center text-xs font-weight-bold mb-0">John Michael John Michael John Michael John Michael</p>
                            </td>
                            <td class="align-middle">
                                <div class="float-end">
                                    <a href="" class="btn btn-outline-success mb-0">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-info mb-0">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection