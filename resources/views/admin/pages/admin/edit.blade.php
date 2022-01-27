<form action="{{ route('admins.update', $admin->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="input-group input-group-static mb-2">
            <label>Nama</label>
            <input name="name" type="text" class="form-control" value="{{ $admin->name }}">
        </div>
        <div class="input-group input-group-static mb-2">
            <label>Email</label>
            <input name="email" type="email" class="form-control" value="{{ $admin->email }}">
        </div>
        <div class="input-group input-group-static mb-2">
            <label>No HP</label>
            <input name="phone" type="text" class="form-control" value="{{ $admin->phone }}">
        </div>
        <div class="input-group input-group-static mb-2">
            <label>Password</label>
            <input name="password" type="password" class="form-control" value="{{ $admin->password }}">
        </div>
        <input type="hidden" name="role" value="Admin">
    </div>
    <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update
    </button>
</form>