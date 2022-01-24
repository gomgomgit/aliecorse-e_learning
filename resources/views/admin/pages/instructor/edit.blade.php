<form action="{{ route('instructors.update', $instructor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="input-group input-group-outline mb-2">
            {{-- <label class="form-label">Nama</label> --}}
            <input name="name" type="text" class="form-control" value="{{ $instructor->name }}">
        </div>
        <div class="input-group input-group-outline mb-2">
            {{-- <label class="form-label">Email</label> --}}
            <input name="email" type="email" class="form-control" value="{{ $instructor->email }}">
        </div>
        <div class="input-group input-group-outline mb-2">
            {{-- <label class="form-label">No HP</label> --}}
            <input name="phone" type="text" class="form-control" value="{{ $instructor->phone }}">
        </div>
        <div class="input-group input-group-outline mb-2">
            {{-- <label class="form-label">Password</label> --}}
            <input name="password" type="password" class="form-control" value="{{ $instructor->password }}">
        </div>
        <input type="hidden" name="role" value="Instructor">
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>