@php
    $isEdit = isset($courses);
    
    $title = $isEdit ? 'Edit Data Kursus' : 'Tambah Data Kursus';
    $route = $isEdit ? route('courses.update', $courses->id) : route('courses.store');
    $button = $isEdit ? 'Update' : 'Create';
@endphp

@extends('admin.layouts.app')

@section('title', $title)
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            @if ($isEdit)
                @method('PUT')
            @else
                @method('POST')
            @endif
            <h3>{{ $title }}</h3>
            <div class="row">
                <div class="col-4">
                    <h6 class="">Thumbnail</h6>
                    <a href="#" class="" id="add-img">
                        <img src="{{ $isEdit ? asset('/storage/'.$courses->thumbnail) : 'https://via.placeholder.com/468x260?text=Klik+untuk+upload' }}" id="preview" class="img-fluid">
                    </a>
                    <input type="file" class="d-none" name="thumbnail" id="add-img2">
                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <h6 class="">Nama Kursus</h6>
                        <div class="input-group input-group-static">
                            <label>Masukkan Nama Kursus</label>
                            <input name="name" type="text" class="form-control" value="{{ $isEdit ? $courses->name : '' }}">
                        </div>
                    </div>
                    <div class="mt-2">
                        <h6 class="">Kategori</h6>
                        <div class="input-group input-group-static mb-4">
                            <label for="exampleFormControlSelect1" class="ms-0">Masukkan Jenis Kategori</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                @if ($isEdit)
                                    @foreach ($categories as $category)
                                        <option value="{{ $courses->category_id }}" {{ $category->id  === $courses->category_id ? 'selected': ''}}>{{ $category->name }}</option>
                                    @endforeach
                                @else
                                    <option selected disabled>Pilih</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <h6 class="">Deskripsi</h6>
                <textarea name="description">{{ $isEdit ? $courses->description : '' }}</textarea>
            </div>

            <h3>Data Tambahan</h3>
            <div class="d-flex align-items-start">
                <ul class="nav nav-pills nav-fill flex-column p-1 w-25" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link fw-bold mb-0 px-5 py-1 active" data-bs-toggle="tab" href="#v-pills-home" role="tab" aria-controls="preview" aria-selected="true">
                            Umum
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mb-0 px-5 py-1" data-bs-toggle="tab" href="#v-pills-profile" role="tab" aria-controls="code" aria-selected="false">
                            Harga
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mb-0 px-5 py-1" data-bs-toggle="tab" href="#v-pills-messages" role="tab" aria-controls="code" aria-selected="false">
                            Informasi Tambahan
                        </a>
                    </li>
                </ul>
                <div class="tab-content p-2 border border-2 rounded w-75 h-auto ms-2" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="mb-3">
                            <h6 class="">Durasi Kursus</h6>
                            <div class="d-flex">
                                <div class="input-group input-group-static">
                                    <label>Durasi Jam</label>
                                    <input name="duration_hour" type="number" class="form-control" min="0" value="{{ $isEdit ? $courses->duration_hour : '' }}">
                                </div>
                                <div class="input-group input-group-static mx-2">
                                    <label>Durasi Menit</label>
                                    <input name="duration_minute" type="number" class="form-control" min="0" max="60" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" value="{{ $isEdit ? $courses->duration_minute : '' }}">
                                </div>
                                <div class="input-group input-group-static">
                                    <label>Durasi Detik</label>
                                    <input name="duration_second" type="number" class="form-control" min="0" max="60" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" value="{{ $isEdit ? $courses->duration_second : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="">Level</h6>
                            <div class="d-flex">
                                <div class="form-check ps-0">
                                    <input class="form-check-input" type="radio" name="level" value="All" id="allLevel"
                                    {{ $isEdit && $courses->level == 'All' ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label" for="allLevel">All Level</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" value="Beginner" id="beginner"
                                    {{ $isEdit &&  $courses->level == 'Beginner' ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label" for="beginner">Beginner</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" value="Intermediate" id="intermediate"
                                    {{ $isEdit && $courses->level == 'Intermediate' ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label" for="intermediate">Intermediate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" value="Expert" id="expert"
                                    {{ $isEdit && $courses->level == 'Expert' ? 'checked' : '' }}
                                    >
                                    <label class="custom-control-label" for="expert">Expert</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="mb-3">
                            <h6 class="">Harga Normal</h6>
                            <div class="d-flex">
                                <div class="input-group input-group-static w-50">
                                    <label>Masukkan Harga Normal</label>
                                    <input name="price" type="number" class="form-control" min="0" value="{{ $isEdit ? $courses->price : '' }}">
                                </div>
                                <button  onclick="myFunction()" type="button" class="btn btn-outline-success ms-4">
                                    <i class="fas fa-plus-square"></i>
                                    Tambah Diskon
                                </button>
                            </div>
                            <p>Biarkan kosong atau 0 untuk gratis</p>
                        </div>
                        <div class="mb-3 "id="myDIV" style="display: {{ $isEdit ? 'block' : 'none'}}">
                            <h6 class="">Harga Diskon</h6>
                            <div class="d-flex">
                                <div class="input-group input-group-static">
                                    <label>Masukkan Harga Diskon</label>
                                    <input type="number" class="form-control" min="0" name="discount_price" value="{{ $isEdit ? $courses->courseDiscount->discount_price : '' }}">
                                </div>
                                <div class="input-group input-group-static mx-2">
                                    <label>Dari Tanggal</label>
                                    <input type="date" class="form-control" name="date_start" value="{{ $isEdit ? $courses->courseDiscount->date_start : '' }}">
                                </div>
                                <div class="input-group input-group-static">
                                    <label>Sampai Tanggal</label>
                                    <input type="date" class="form-control" name="date_end" value="{{ $isEdit ? $courses->courseDiscount->date_end : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="mb-3">
                            <h6 class="">Manfaat Kursus</h6>
                            <div class="input-group input-group-dynamic">
                                <textarea name="benefits" class="form-control" rows="5" placeholder="Tuliskan manfaat yang di dapat dari kursus ini." spellcheck="false">{{ $isEdit ? $courses->benefits : '' }}</textarea>
                            </div>
                            <p>Manfaat yang didapat dari kursus, pisahkan dengan enter (Satu per baris)</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="">Persyaratan</h6>
                            <div class="input-group input-group-dynamic">
                                <textarea name="requirements" class="form-control" rows="5" placeholder="Tuliskan persyaratan mengikuti kursus ini." spellcheck="false">{{ $isEdit ? $courses->requirements : '' }}</textarea>
                            </div>
                            <p>Persyaratan tambahan atau instruksi khusus untuk siswa, pisahkan dengan enter (Satu per baris)</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="">Target audiens</h6>
                            <div class="input-group input-group-dynamic">
                                <textarea name="audients" class="form-control" rows="5" placeholder="Tuliskan Target audiens dari kursus ini." spellcheck="false">{{ $isEdit ? $courses->audients : '' }}</textarea>
                            </div>
                            <p>Tentukan audiens target yang akan mendapat manfaat paling banyak dari kursus, pisahkan dengan enter. (Satu per baris)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <button class="btn btn-outline-success w-100">
                    <i class="fas fa-plus-square"></i>
                    {{ $button }} Kursus
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
        CKEDITOR.replace( 'description' );
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

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script>
        function formdata(){
            return{
                // data
                gamer_in:null,
                // method
                gamer(param){
                this.gamer_in=param;
                }
            }
        }
    </script>
    
@endpush