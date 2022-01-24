@extends('admin.layouts.app')

@section('title', 'Detail Instruktur | '.$instructor->name )
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Detail Instruktur | {{ $instructor->name }}</h3>
        <div class="row">
            <div class="col-3">
                <div class="">
                    <p class="fw-bold">Tanggal Registrasi</p>
                    <p class="fw-bold">Nama</p>
                    <p class="fw-bold">Email</p>
                    <p class="fw-bold">No HP </p>
                    <p class="fw-bold">Kursus Di Beli</p>
                    <p class="fw-bold">Kursus Di Miliki</p>
                </div>
            </div>
            <div class="col-9">
                <div class="">
                    <p class="fw-bold">{{ $instructor->created_at->isoFormat('dddd, D MMMM Y') }}</p>
                    <p class="fw-bold">{{ $instructor->name }}</p>
                    <p class="fw-bold">{{ $instructor->email }}</p>
                    <p class="fw-bold">{{ $instructor->phone }}</p>
                    <p class="fw-bold">0</p>
                    <p class="fw-bold">0</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection