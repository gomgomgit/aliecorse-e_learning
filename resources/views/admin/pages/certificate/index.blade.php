@extends('admin.layouts.app')

@section('title', 'Sertifikat')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Sertifikat</h3>
        <div class="border border-2 rounded">
            <img src="{{ $certificate ? asset('/storage/'.$certificate->image) : '' }}" class="img-fluid w-100" alt="sertificate">
        </div>
        <div class="py-4 text-center">
            <a href="{{ route('certificate.edit', $certificate->id) }}" class="btn btn-outline-success px-12 py-3 text-md">
                <i class="fas fa-edit"></i>
                Edit Sertifikat
            </a>
        </div>
    </div>
</div>
@endsection