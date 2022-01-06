@extends('admin.layouts.app')

@section('title', 'Kategori Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>Kategori Artikel</h3>
            </div>
            <div class="">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus-square"></i>
                    Tambah Kategori
                </button>
            </div>
        </div>
        <div class="py-2">
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                <div class="w-40 d-flex justify-content-between">
                    <span class="fw-bold">Perpajakan</span>
                    <span>23 Kursus</span>
                </div>
                <div class="">
                    <button class="btn btn-success mb-0">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-info mb-0">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger mb-0">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                <div class="w-40 d-flex justify-content-between">
                    <span class="fw-bold">IT</span>
                    <span>23 Kursus</span>
                </div>
                <div class="">
                    <button class="btn btn-success mb-0">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-info mb-0">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger mb-0">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                <div class="w-40 d-flex justify-content-between">
                    <span class="fw-bold">Bisnis</span>
                    <span>23 Kursus</span>
                </div>
                <div class="">
                    <button class="btn btn-success mb-0">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-info mb-0">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger mb-0">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="input-group input-group-outline">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer mx-auto">
                <button type="sumbit" class="btn btn-success">
                    <i class="fas fa-plus-square"></i>
                    Tambah Kategori
                </button>
            </div>
        </div>
    </div>
</div>
@endsection