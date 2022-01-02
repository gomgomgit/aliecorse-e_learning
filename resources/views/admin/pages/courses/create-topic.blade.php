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
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </button>
            </div>
        </div>
        <div class="py-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-3 w-50">
                    <h6 class="">Nama Topik</h6>
                    <div class="input-group input-group-outline">
                        <label class="form-label">Masukkan Nama Topik</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="">
                    <button class="btn btn-success mb-0" onclick="myFunction()" type="button">
                        <i class="fas fa-plus-square"></i>
                        Tambah Deskripsi
                    </button>
                </div>
            </div>
            <div class="my-2" id="myDIV" style="display: none">
                <h6 class="">Deskripsi</h6>
                <div class="input-group input-group-dynamic">
                    <textarea class="form-control" rows="5" placeholder="Tuliskan deskripsi dari topik ini." spellcheck="false"></textarea>
                </div>
            </div>
        </div>
        <div class="py-4">
            <h6>Pelajaran</h6>
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                <span class="fw-bold">Video pengembangan Diri</span>
                <div class="">
                    <span class="btn btn-info mb-0">
                        Video
                    </span>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2">
                <span class="fw-bold">Quiz Satu</span>
                <div class="">
                    <span class="btn btn-info mb-0">
                        Quiz
                    </span>
                </div>
            </div>
            <div class="mt-4">
                <button class="btn btn-success align-end">
                    <i class="fab fa-youtube"></i>
                    Tambah Video
                </button>
                <button class="btn btn-success align-end">
                    <i class="fas fa-file-alt"></i>
                    Tambah File
                </button>
                <button class="btn btn-success align-end">
                    <i class="fas fa-question"></i>
                    Tambah Quiz
                </button>
            </div>
            <div class="float-end mt-5">
                <button class="btn btn-success align-end">
                    <i class="fas fa-plus-square"></i>
                    Tambah Topik
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        } 
    </script>
@endpush