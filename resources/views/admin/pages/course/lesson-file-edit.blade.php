<form action="{{ route('lessons.file-update', $lessonFile->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <h6>Nama</h6>
    <div class="input-group input-group-static">
        {{-- <label class="form-label">Masukkan Nama</label> --}}
        <input name="name" type="text" class="form-control" value="{{ $lessonFile->name }}">
    </div>
    <h6 class="mt-2 mb-0">Deskripsi</h6>
    <div class="input-group input-group-dynamic">
        <textarea name="description" class="form-control" rows="5" placeholder="Masukkan Deskripsi" spellcheck="false">{{ $lessonFile->description }}</textarea>
    </div>
    <h6 class="mt-2 mb-0">Upload File</h6>
    <div class="input-group input-group-static">
        <label>Pilih File</label>
        <input name="file" type="file" class="form-control">
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>