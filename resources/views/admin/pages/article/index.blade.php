@extends('admin.layouts.app')

@section('title', 'Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>
                Artikel
            </h3>
            <div class="">
                <a href="{{ route('articles.create') }}" class="border border-info border-2 px-4 py-2 rounded text-info fw-bold" style="background-color: white">
                    <i class="fas fa-plus-square"></i>
                    Tambah Artikel
                </a>
            </div>
        </div>
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Thumbnail</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Konten</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>
                                <div>
                                    <img src="{{ asset('/storage/'.$article->thumbnail) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $article->title }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $article->articleCategory->name }}</p>
                            </td>
                            <td>
                                <div class="text-xs font-weight-bold mb-0">
                                    {{ Str::limit($article->content, 70, '...') }}
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="float-end">
                                    <a href="#mymodal"
                                        data-remote="{{ route('articles.show', $article->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="{{ $article->title }}" 
                                        class="btn btn-outline-success mb-0"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-outline-info mb-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger mb-0" 
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection