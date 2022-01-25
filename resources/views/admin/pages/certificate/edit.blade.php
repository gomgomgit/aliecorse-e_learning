@extends('admin.layouts.app')

@section('title', 'Sertifikat')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Edit Sertifikat</h3>
        <form action="{{ route('certificate.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8">
                    <h6 class="">Preview Sertifikat</h6>
                    <div class="">
                        <img src="{{ $certificate->image ? asset('/storage/'.$certificate->image) : 'http://via.placeholder.com/760x430' }}" id="preview" class="img-fluid">
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
            <div class="py-4">
                <button class="btn btn-outline-success w-100">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </div>
        </form>
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