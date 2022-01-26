@extends('admin.layouts.app')

@section('title', 'Kategori Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>Kategori Artikel</h3>
            </div>
            <div class="">
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-plus-square"></i>
                    Tambah Kategori
                </button>
            </div>
        </div>
        <div class="py-2">
            @foreach ($articleCategories as $articleCategory)
            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                <div class="w-40 d-flex justify-content-between">
                    <span class="fw-bold">{{ $articleCategory->name }}</span>
                    <span>{{ $articleCategory->article->count() }} Kursus</span>
                </div>
                <div class="">
                    <button class="btn btn-outline-success mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Detail">
                        <i class="fas fa-eye"></i>
                    </button>
                    <a href="#mymodal"
                        data-remote="{{ route('article-categories.edit', $articleCategory->id) }}"
                        data-toggle="modal"
                        data-target="#mymodal"
                        data-title="Edit {{$articleCategory->name }}" 
                        class="btn btn-outline-info mb-0"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('article-categories.destroy', $articleCategory->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger mb-0" 
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form action="{{ route('article-categories.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Nama</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="sumbit" class="btn btn-success">
                        <i class="fas fa-plus-square"></i>
                        Tambah Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection