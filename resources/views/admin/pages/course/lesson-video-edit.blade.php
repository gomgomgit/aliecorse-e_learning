<form action="{{ route('lessons.video-update', $lesson->id) }}" method="POST">
    @csrf
    @method('POST')
    <h6 class="mt-2 mb-0">Nama</h6>
    <div class="input-group input-group-static">
        {{-- <label class="form-label">Masukkan Nama Video</label> --}}
        <input name="name" type="text" class="form-control" value="{{ $lesson->name }}">
    </div>
    <h6 class="mt-2 mb-0">Tipe Video</h6>
    <div class="input-group input-group-static">
        <select name="type" class="form-control" id="tipeVideo">
            <option value="Youtube" {{ $lesson->type == 'Youtube' ? 'selected': ''}}>Youtube</option>
            <option value="Embed" {{ $lesson->type == 'Embed' ? 'selected': ''}}>Embed Video</option>
        </select>
    </div>
    <h6 class="mt-2 mb-0">Video Link / Embed</h6>
    <div class="input-group input-group-static">
        {{-- <label class="form-label">Masukkan Video Link / Embed</label> --}}
        <textarea name="link" type="text" class="form-control">{{ $lesson->link }}</textarea>
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>