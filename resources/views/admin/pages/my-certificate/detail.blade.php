@extends('admin.layouts.app')

@section('title', 'Sertifikat Saya')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Detail Sertifikat</h3>
        <div class="border border-2 rounded">
            <img src="https://www.ubm.ac.id/wp-content/uploads/2019/02/sertifikat-billy.png" class="img-fluid w-100" alt="sertificate">
        </div>
        <div class="py-4 text-center">
            <a href="#" class="btn btn-success px-12 py-3 text-md">
                <i class="fas fa-download"></i>
                Download Sertifikat
            </a>
        </div>
    </div>
</div>
@endsection