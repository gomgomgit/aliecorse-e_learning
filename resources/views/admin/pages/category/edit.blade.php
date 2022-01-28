<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group input-group-static">
        <label>Nama</label>
        <input name="name" type="text" class="form-control" value="{{ $category->name }}">
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>