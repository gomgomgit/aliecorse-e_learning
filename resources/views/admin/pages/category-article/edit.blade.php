<form action="{{ route('article-categories.update', $articleCategory->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group input-group-outline">
        {{-- <label class="form-label">Nama</label> --}}
        <input name="name" type="text" class="form-control" value="{{ $articleCategory->name }}">
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>