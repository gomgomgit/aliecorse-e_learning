@php
    $isEdit = isset($articles);
    
    $title = $isEdit ? 'Edit Data Artikel' : 'Tambah Data Artikel';
    $route = $isEdit ? route('articles.update', $articles->id) : route('articles.store');
    $button = $isEdit ? 'Update' : 'Create';
@endphp

@extends('admin.layouts.app')

@section('title', $title)
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>
            {{ $title }}
        </h3>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isEdit)
                @method('PUT')
            @else
                @method('POST')
            @endif
            <div class="row">
                <div class="col-4">
                    <h6 class="">Thumbnail</h6>
                    <a href="#" class="" id="add-img">
                        <img src="{{ $isEdit ? asset('/storage/'.$articles->thumbnail) : 'https://via.placeholder.com/468x260?text=Klik+untuk+upload' }}" id="preview" class="img-fluid">
                    </a>
                    <input type="file" class="d-none" name="thumbnail" id="add-img2">
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <h6 class="">Judul</h6>
                        <div class="input-group input-group-static">
                            <label>Masukkan Judul Artikel</label>
                            <input name="title" type="text" class="form-control" value="{{ $isEdit ? $articles->title : '' }}">
                        </div>
                    </div>
                    <div class="mt-2">
                        <h6 class="">Kategori</h6>
                        <div class="input-group input-group-static mb-4">
                            <label for="exampleFormControlSelect1" class="ms-0">Masukkan Jenis Kategori</label>
                            <select name="category_article_id" class="form-control" id="exampleFormControlSelect1">
                                @if ($isEdit)
                                @foreach ($articleCategories as $articleCategory)
                                <option value="{{ $articles->category_article_id }}" {{ $articleCategory->id  === $articles->category_article_id ? 'selected': ''}}>{{ $articleCategory->name }}</option>
                                @endforeach
                                @else
                                    <option selected disabled>Pilih</option>
                                    @foreach ($articleCategories as $articleCategory)
                                        <option value="{{ $articleCategory->id }}">{{ $articleCategory->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <h6 class="">Konten</h6>
                <textarea name="content">{{ $isEdit ? $articles->content : '' }}</textarea>
            </div>
            <div class="py-4">
                <button class="btn btn-outline-success w-100">
                    <i class="fas fa-plus-square"></i>
                    {{ $button }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>

    <script>
        $('#add-img').click(function(){
            $('#add-img2').click();
        });
    </script>

    <script>
        $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        });
    </script>
@endpush