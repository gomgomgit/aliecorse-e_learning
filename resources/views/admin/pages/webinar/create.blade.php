@extends('admin.layouts.app')

@section('title', 'Buat Webinar Baru')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <form action="/admin/webinars/1" class="">
            <h3>Tambah Webinar</h3>
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
                        <h6 class="">Nama Webinar</h6>
                        <div class="input-group input-group-outline">
                            <label class="form-label">Masukkan Nama Webinar</label>
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
                <h6 class="">Deskripsi</h6>
                <textarea name="editor1"></textarea>
            </div>

            <div class="mb-3">
                <h6 class="">Meeting Host</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Meeting Host</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Start Time </h6>
                <div class="input-group input-group-static">
                    <input class="flatpickr flatpickr-input form-control" type="text" placeholder="Select Date.." data-id="datetime" readonly="readonly">
                    {{-- <input class="form-control datepicker" placeholder="Please select date" type="text" onfocus="focused(this)" onfocusout="defocused(this)"> --}}
                </div>
  
                {{-- <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Start Time </label>
                    <input type="text" class="form-control">
                </div> --}}
                {{-- <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div> --}}
            </div>
            <div class="mb-3">
                <h6 class="">Meeting Password</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Meeting Password</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Nama Webinar</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Nama Webinar</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <h6>Join Before Host</h6>
                    <h6>Host Join start</h6>
                    <h6>Participants Video</h6>
                    <h6>Mute Participants upon entry</h6>
                    <h6>Enforce Login</h6>
                    <h6>Auto Recording</h6>
                </div>
                <div class="col-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">
                            Join Before Host join meeting, Only for scheduled or recurring meetings.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">
                            Start video when host join meeting.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">
                            Start video when participants join meeting.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">
                            Mutes Participants when entering the meeting.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">
                            Only signed-in users cab join this meeting.
                        </label>
                    </div>
                    <div class="mt-2 ps-4">
                        <div class="input-group input-group-static mb-4">
                            <label for="exampleFormControlSelect1" class="ms-0">Set what type of auto recording feature you want to add. Default is none</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>No Recordings</option>
                                <option>Recordings</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <button class="btn btn-outline-success w-100">
                    <i class="fas fa-plus-square"></i>
                    Buat Webinar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"> --}}
@endpush
    
@push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    <script>
        $(".flatpickr").flatpickr(
            {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            }
        );
    </script>


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
    
    <script>
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'DD-MM-YYYY LT'
            });
            $('#datetimepicker2').datetimepicker({
                format: 'DD-MM-YYYY'
            });
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
    </script>
@endpush