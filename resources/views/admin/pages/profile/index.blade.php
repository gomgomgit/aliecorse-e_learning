@extends('admin.layouts.app')

@section('title', 'Profile')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Profile</h3>
        <div class="row">
            <div class="col-3">
                <div class="">
                    <p class="fw-bold">Tanggal Registrasi</p>
                    <p class="fw-bold">Nama</p>
                    <p class="fw-bold">Email</p>
                    <p class="fw-bold">No HP </p>
                    <p class="fw-bold">Skill</p>
                </div>
            </div>
            <div class="col-9">
                <div class="">
                    <p class="fw-bold">Rabu, 21 januari 2021</p>
                    <p class="fw-bold">Yanuar Budi Utomo </p>
                    <p class="fw-bold">yanuarbu@email.com</p>
                    <p class="fw-bold">098289472398</p>
                    <p class="fw-bold">Perpajakan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
</div> --}}
@endsection