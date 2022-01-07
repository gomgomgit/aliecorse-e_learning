@extends('admin.layouts.app')

@section('title', 'Kursus Saya | bla bla bla')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>Latihan berkaca pada dirimu sendiri</h3>
            </div>
            <div class="">
                <button class="btn btn-success w-100">
                    <i class="fas fa-plus-square"></i>
                    Lihat Detail Kursus
                </button>
            </div>
        </div>
        <div class="py-4">
            <h4>List Topik</h4>
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2">
                <span class="fw-bold">Latihan menari</span>
                <span>23 Lesson</span>
                <div class="">
                    <button class="btn btn-info mb-0">
                        <i class="fas fa-eye"></i>
                        Lihat
                    </button>
                    <a href='/admin/courses/1/topic' class="btn btn-warning mb-0">
                        <i class="fas fa-pen"></i>
                        Edit
                    </a>
                    <button class="btn btn-danger mb-0">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </div>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-success align-end">
                    <i class="fas fa-plus-square"></i>
                    Tambah Topik
                </button>
            </div>
        </div>
    </div>
</div>
@endsection