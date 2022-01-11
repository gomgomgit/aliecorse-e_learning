@extends('admin.layouts.app')

@section('title', 'Buat Artikel')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>
            Buat Artikel
        </h3>
        <div class="row">
            <div class="col-4">
                <h6 class="">Thumbnail</h6>
                <a href="#" class="" id="add-img">
                    <img src="https://via.placeholder.com/468x260?text=Klik+untuk+upload" id="preview" class="img-fluid">
                </a>
                <input type="file" class="d-none" name="" id="add-img2">
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <h6 class="">Judul</h6>
                    <div class="input-group input-group-outline">
                        <label class="form-label">Masukkan Judul Artikel</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="mt-2">
                    <h6 class="">Kategori</h6>
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1" class="ms-0">Masukkan Jenis Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h6 class="">Konten</h6>
            <textarea name="editor1"></textarea>
        </div>
        <div class="py-4">
            <button class="btn btn-outline-success w-100">
                <i class="fas fa-plus-square"></i>
                Buat Artikel
            </button>
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    <script>
        $('#add-img').click(function(){
            $('#add-img2').click();
        });
    </script>

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