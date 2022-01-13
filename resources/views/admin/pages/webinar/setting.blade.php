@extends('admin.layouts.app')

@section('title', 'Pengaturan Webinar')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <form action="" class="">
            <h3>Pengaturan Webinar</h3>
            <div class="mb-3">
                <h6 class="">API Key</h6>
                <div class="d-flex">
                    <div class="w-100">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Masukkan API Key</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-outline-success ms-2">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">API Secret Key</h6>
                <div class="d-flex">
                    <div class="w-100">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Masukkan API Secret Key</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-outline-success ms-2">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Vanity Url</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Vanity Url</label>
                    <input type="text" class="form-control">
                </div>
                <p>if you're using vanity url then please insert it here else leave it empty</p>
            </div>
            <div class="mb-3 mt-5">
                <h6 class="">Meeting started text</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Meeting started text</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Meeting going to started text</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Meeting going to started text</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Meeting ended text</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Meeting ended text</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="my-2">
                <span class="text-danger">After you enter your keys, Do save changes before doing  "Check API Connection"</span>
            </div>
            <div class="py-4">
                <button class="btn btn-outline-success">
                    <i class="fas fa-save"></i>
                    Save Changes
                </button>
                <button class="btn btn-outline-success">
                    <i class="fas fa-check"></i>
                    Check API Connection
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after-script')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

    {{-- <script>
        new Vue({
        el:'#v-pills-profile',
        data:{
            seen: false
        }
        });
    </script> --}}

    <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        } 
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