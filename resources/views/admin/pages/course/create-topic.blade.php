@extends('admin.layouts.app')

@section('title', 'Buat Topik Baru')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>{{ $course->name }}</h3>
            </div>
            <div class="">
                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-success w-100">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
        <form action="{{ route('topics.store', $course->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="py-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-3 w-50">
                        <h6 class="">Topik</h6>
                        <div class="input-group input-group-static">
                            <label>Masukkan Nama Topik</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <button class="btn btn-outline-success mb-0" onclick="myFunction()" type="button">
                            <i class="fas fa-plus-square"></i>
                            Tambah Deskripsi
                        </button>
                    </div>
                </div>
                <div class="my-2" id="myDIV" style="display: none">
                    <h6 class="">Deskripsi</h6>
                    <div class="input-group input-group-dynamic">
                        <textarea name="description" class="form-control" rows="5" placeholder="Tuliskan deskripsi dari topik ini." spellcheck="false"></textarea>
                    </div>
                </div>
            </div>
            <button class="d-none" id="createTopic1"></button>
        </form>
        <div class="py-4">
            <div class="d-grid mt-5">
                <button id="createTopic" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                    <i class="fas fa-plus-square"></i>
                    Create Topik
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
    
    function myFunction2() {
    var x = document.getElementById("myDIV2");
    var y = document.getElementById("myButton");
        if (x.style.display === "block") {
            x.style.display = "none";
            y.style.display = "block";
        } else {
            x.style.display = "block";
            y.style.display = "none";
        }
    }

    function myFunction3() {
    var x = document.getElementById("myDIV2");
    var y = document.getElementById("myButton");

    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
    } 
</script>
<script>
    $("#next").click(function(){
        $("#next1").click();
    });

    $('#add-img').click(function(){
        $('#add-img2').click();
    });

    $('#createTopic').click(function(){
        $('#createTopic1').click();
    });
</script>
@endpush