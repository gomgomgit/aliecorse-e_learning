<form action="{{ route('lessons.video-update', $lessonVideo->id) }}" method="POST">
    @csrf
    {{-- @method('POST') --}}
    <input type="hidden" name="lesson_id" value="{{ $lessonVideo->lesson->id }}">
    <h6 class="mt-2 mb-0">Nama</h6>
    <div class="input-group input-group-static">
        {{-- <label class="form-label">Masukkan Nama Video</label> --}}
        <input name="name" type="text" class="form-control" value="{{ $lessonVideo->name }}">
    </div>
    <h6 class="mt-2 mb-0">Tipe Video</h6>
    <div class="input-group input-group-static">
        <select name="type" class="form-control" id="tipeVideo">
            <option value="Youtube" {{ $lessonVideo->type == 'Youtube' ? 'selected': ''}}>Youtube</option>
            <option value="Embed" {{ $lessonVideo->type == 'Embed' ? 'selected': ''}}>Embed Video</option>
        </select>
    </div>
    <h6 class="mt-2 mb-0">Video Link / Embed</h6>
    <div class="input-group input-group-static">
        {{-- <label class="form-label">Masukkan Video Link / Embed</label> --}}
        <textarea name="link" type="text" class="form-control">{{ $lessonVideo->link }}</textarea>
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>