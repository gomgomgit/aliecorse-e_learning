@extends('admin.layouts.app')

@section('title', 'Sertifikat')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Sertifikat</h3>
        <div class="border border-2 rounded">
            <img src="https://www.ubm.ac.id/wp-content/uploads/2019/02/sertifikat-billy.png" class="img-fluid w-100" alt="sertificate">
        </div>
        <div class="py-4 text-center">
            <a href="{{ url('admin/sertificates/1') }}" class="btn btn-success">
                <i class="fas fa-edit"></i>
                Edit Sertifikat
            </a>
        </div>
    </div>
</div>
@endsection