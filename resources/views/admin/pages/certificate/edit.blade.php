@extends('admin.layouts.app')

@section('title', 'Sertifikat')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Edit Sertifikat</h3>
        <div class="row">
            <div class="col-8">
                <h6 class="">Preview Sertifikat</h6>
                <div class="">
                    {{-- <img class="img-fluid w-100" src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt=""> --}}
                    <img src="http://via.placeholder.com/760x430" id="preview" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <h6 class="">Upload Background</h6>
                    <input type="file" name="image">
                    <p>Unggah background sertifikat dengan ukuran kertas A4.</p>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-4 mb-1">
                <img src="https://placehold.it/100x100" id="preview" class="img-fluid">
            </div>
            <div class="col-sm-8 mb-1">
                <div class="form-group">
                    <div class="fw-bold pb-2">Pilih Thumbnail</div>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label class="fw-bold fs-6" for="exampleInputPassword4">Judul</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword4" placeholder="Judul">
                </div>
            </div>
        </div> --}}
        <div class="py-4">
            <button class="btn btn-outline-success w-100">
                <i class="fas fa-save"></i>
                Simpan
            </button>
        </div>
    </div>
</div>
@endsection

@push('after-script')
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