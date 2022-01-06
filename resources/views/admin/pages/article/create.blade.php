@extends('admin.layouts.app')

@section('title', 'Buat Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>
            Buat Artikel
        </h3>
        <div class="row">
            <div class="col-4">
                <h6 class="">Gambar</h6>
                <div class="">
                    <img class="w-100" src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <h6 class="">Judul</h6>
                    <div class="input-group input-group-outline">
                        <label class="form-label">Masukkan Judul Artikel</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mt-2">
                    <h6 class="">Kategori</h6>
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Masukkan Jenis Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h6 class="">Konten</h6>
            <textarea name="editor1"></textarea>
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endpush