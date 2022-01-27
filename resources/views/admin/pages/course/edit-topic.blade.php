@php
    $isEdit = isset($topics);
    
    $title = $isEdit ? 'Edit Data Topik' : 'Tambah Data Topik';
    $route = $isEdit ? route('topics.update', [$course->id, $topics->id]) : route('topics.store', $course->id);
    $button = $isEdit ? 'Update' : 'Create';
@endphp

@extends('admin.layouts.app')

@section('title', $title)
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>{{ $course->name }}</h3>
            </div>
            <div class="">
                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-success w-100">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
        <form action="{{ $route }}" method="POST">
            @csrf
            @method('POST')
            {{-- <input type="hidden" name="course_id" value="{{ $course->id }}">
            <input type="hidden" name="order" value="{{ $course->id }}"> --}}
            <div class="py-4 border-bottom border-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-3 w-50">
                        <h6 class="">Topik</h6>
                        <div class="input-group input-group-static">
                            <label>Masukkan Nama Topik</label>
                            <input name="name" type="text" class="form-control" value="{{ $isEdit ? $topics->name : '' }}">
                        </div>
                    </div>
                    <div class="">
                        <button class="btn btn-outline-success mb-0" onclick="myFunction()" type="button">
                            <i class="fas fa-plus-square"></i>
                            Tambah Deskripsi
                        </button>
                    </div>
                </div>
                <div class="my-2" id="myDIV" style="display: {{ $isEdit ? 'block' : 'none'}}">
                    <h6 class="">Deskripsi</h6>
                    <div class="input-group input-group-dynamic">
                        <textarea name="description" class="form-control" rows="5" placeholder="Tuliskan deskripsi dari topik ini." spellcheck="false">{{ $isEdit ? $topics->description : '' }}</textarea>
                    </div>
                </div>
            </div>
            <button class="d-none" id="createTopic1"></button>
        </form>
        <div class="py-4">
            <h6>Pelajaran</h6>
            
            <x-laravel-blade-sortable::sortable
                as="div"
            >
                @foreach ($topics->lesson as $lesson)
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="1" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex align-items-center border border-2 rounded p-2 mb-1">
                        <span class="flex-shrink-0 ps-2 pe-3"><i class="fas fa-sort"></i></span>
                        {{-- @foreach ($lesson as $item) --}}
                        <div class="w-100 d-flex justify-content-between align-items-center">
                            <div class="fw-bold d-flex justify-content-between align-items-center w-100">
                                <div class="">
                                    <span class="badge
                                        @if ($lesson->type == 'File')
                                            bg-success
                                        @elseif($lesson->type == 'Quiz')
                                            bg-info
                                        @else
                                            bg-warning
                                        @endif
                                        ml-2">{{ $lesson->type }}
                                    </span>
                                </div>
                                <div class="mr-2 w-100">
                                    @if ($lesson->type == 'File')
                                        @foreach ($lesson->lessonFile as $item)
                                            <div class="d-flex justify-content-between align-items-center w-100 px-2">
                                                {{ $item->name }}
                                                <a href="#mymodal"
                                                    data-remote="{{ route('lessons.file-edit', $item->id) }}"
                                                    data-toggle="modal"
                                                    data-target="#mymodal"
                                                    data-title="Edit" 
                                                    class="btn btn-outline-info mb-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                    @elseif ($lesson->type == 'Quiz')
                                        @foreach ($lesson->lessonQuiz as $item)
                                            <div class="d-flex justify-content-between align-items-center w-100 px-2">
                                                {{ $item->name }}
                                                <a href="#mymodal"
                                                    data-remote="{{ route('lessons.quiz-edit', $item->id) }}"
                                                    data-toggle="modal"
                                                    data-target="#mymodal"
                                                    data-title="Edit" 
                                                    class="btn btn-outline-info mb-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach ($lesson->lessonVideo as $item)
                                            <div class="d-flex justify-content-between align-items-center w-100 px-2">
                                                {{ $item->name }}
                                                <a href="#mymodal"
                                                    data-remote="{{ route('lessons.video-edit', $item->id) }}"
                                                    data-toggle="modal"
                                                    data-target="#mymodal"
                                                    data-title="Edit" 
                                                    class="btn btn-outline-info mb-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                                
                            <div>
                                {{-- <a href="#mymodal"
                                    data-remote="{{ route('lessons.file-edit', $lesson->id) }}"
                                    data-toggle="modal"
                                    data-target="#mymodal"
                                    data-title="Edit" 
                                    class="btn btn-outline-info mb-0"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                    <i class="fas fa-edit"></i>
                                </a> --}}
                                <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger mb-0" 
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        {{-- @endforeach --}}
                        </div>
                    </div>
                </x-laravel-blade-sortable::sortable-item>
                @endforeach
            </x-laravel-blade-sortable::sortable>
            <div class="mt-4">
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fab fa-youtube"></i>
                    Tambah Video
                </button>
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                    <i class="fas fa-file-alt"></i>
                    Tambah File
                </button>
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    <i class="fas fa-question"></i>
                    Tambah Quiz
                </button>
            </div>
            <div class="d-grid mt-5">
                <button id="createTopic" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                    <i class="fas fa-plus-square"></i>
                    {{ $button }} Topik
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Video -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Video</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form action="{{ route('lessons.video-store', $topics) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <h6 class="mt-2 mb-0">Nama</h6>
                    <div class="input-group input-group-outline">
                        <label class="form-label">Masukkan Nama Video</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <h6 class="mt-2 mb-0">Tipe Video</h6>
                    <div class="input-group input-group-static">
                        <select name="type" class="form-control" id="tipeVideo">
                            <option value="Youtube">Youtube</option>
                            <option value="Embed">Embed Video</option>
                        </select>
                    </div>
                    <h6 class="mt-2 mb-0">Video Link / Embed</h6>
                    <div class="input-group input-group-static">
                        {{-- <label class="form-label">Masukkan Video Link / Embed</label> --}}
                        <textarea name="link" type="text" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="sumbit" class="btn btn-outline-success">
                        <i class="fas fa-plus-square"></i>
                        Tambah Video
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal File -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdrop1Label">Tambah File</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <form action="{{ route('lessons.file-store', $topics) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <h6>Nama</h6>
                    <div class="input-group input-group-outline">
                        <label class="form-label">Masukkan Nama</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <h6 class="mt-2 mb-0">Deskripsi</h6>
                    <div class="input-group input-group-dynamic">
                        <textarea name="description" class="form-control" rows="5" placeholder="Masukkan Deskripsi" spellcheck="false"></textarea>
                    </div>
                    <h6 class="mt-2 mb-0">Upload File</h6>
                    <div class="input-group input-group-static">
                        <label>Pilih File</label>
                        <input name="file" type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="sumbit" class="btn btn-outline-success">
                        <i class="fas fa-plus-square"></i>
                        Tambah File
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Kuis -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdrop2Label">Tambah Kuiz</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fw-bold mb-0 px-5 py-1 active" data-bs-toggle="tab" href="#v-pills-home" role="tab" aria-controls="preview" aria-selected="true">
                                <span class="material-icons align-middle mb-1">
                                    quiz
                                </span>
                                Info Kuis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold mb-0 px-5 py-1" data-bs-toggle="tab" href="#v-pills-profile" role="tab" aria-controls="code" aria-selected="false">
                                <span class="material-icons align-middle mb-1">
                                    question_mark
                                </span>
                                Pertanyaan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold mb-0 px-5 py-1" data-bs-toggle="tab" href="#v-pills-messages" role="tab" aria-controls="code" aria-selected="false">
                                <span class="material-icons align-middle mb-1">
                                    settings
                                </span>
                                Pengaturan
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content p-2 border border-2 rounded mt-3" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h6>Nama Kuis</h6>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Masukkan Nama Kuis</label>
                                <input type="text" class="form-control">
                            </div>
                            <h6 class="mb-0">Detail Kuis</h6>
                            <div class="input-group input-group-dynamic">
                                <textarea class="form-control" rows="5" placeholder="Detail Kuis Tulis Disini." spellcheck="false"></textarea>
                            </div>
                            <div class="float-end mt-4">
                                <button type="sumbit" class="btn btn-outline-success" id="next">
                                    <i class="fas fa-arrow-right"></i>
                                    Lanjut
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                                <span class="fw-bold">Soal satu</span>
                                <div class="">
                                    <span class="badge bg-warning">Single choice</span>
                                    <button class="btn btn-outline-info mb-0">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                                <span class="fw-bold">Soal satu</span>
                                <div class="">
                                    <span class="badge bg-warning">Single choice</span>
                                    <button class="btn btn-outline-info mb-0">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="float-end mt-4">
                                <button type="sumbit" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                    <i class="fas fa-plus-square"></i>
                                    Tambah Soal
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h6>Batas Waktu</h6>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="w-40">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Masukkan Batas Waktu</label>
                                        <input type="number" class="form-control" min="0">
                                    </div>
                                </div>
                                <div class="w-25">
                                    <select name="" id="" class="form-select px-2">
                                        <option value="" class="form-input">Menit</option>
                                        <option value="" class="form-input">Detik</option>
                                    </select>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input mt-1" type="checkbox" id="flexSwitchCheckDefault1">
                                    <label class="form-check-label m-0 ms-1" for="flexSwitchCheckDefault1">Tampilkan Batas Waktu</label>
                                </div>
                            </div>
                            <h6>Passing Grade</h6>
                            <div class="w-40 mb-2">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Masukkan Passing Grade (%)</label>
                                    <input type="number" class="form-control" min="0">
                                </div>
                            </div>
                            <h6 class="mb-0">Urutan Pertanyaan</h6>
                            <div class="input-group input-group-static">
                                <label for="urutanpertanyaan" class="ms-0">Pilih Urutan Pertanyaan</label>
                                <select class="form-control" id="urutanpertanyaan">
                                    <option>Berurutan</option>
                                    <option>Random</option>
                                </select>
                            </div>
                            <div class="float-end mt-4">
                                <button type="sumbit" class="btn btn-outline-success">
                                    <i class="fas fa-save"></i>
                                    Simpan Kuis
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button> --}}
                {{-- <button type="sumbit" class="btn btn-outline-success" id="next">
                    <i class="fas fa-arrow-right"></i>
                    Lanjut
                </button> --}}
            </div>
        </div>
    </div>
</div>

<!-- Modal Pertanyaan -->
<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop4Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdrop4Label">Tambah Pertanyaan</h5>
                {{-- <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button> --}}
                <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </button>
            </div>
            <div class="modal-body">
                <h6 class="mb-0">Pertanyaan</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Pertanyaan</label>
                    <input type="text" class="form-control">
                </div>
                <h6 class="mt-2 mb-0">Tipe Pertanyaan</h6>
                <div class="input-group input-group-static">
                    <label for="tipePertanyaan" class="ms-0">Pilih Tipe Pertanyaan</label>
                    <select class="form-control" id="tipePertanyaan">
                        <option>Benar / Salah</option>
                        <option>Single Choice</option>
                    </select>
                </div>
                <h6 class="mt-2 mb-0">Nilai Dari Pertanyaan</h6>
                <div class="input-group input-group-outline">
                    <label class="form-label">Masukkan Nilai Dari Pertanyaan</label>
                    <input type="number" class="form-control" min="0">
                </div>
                <div class="d-flex mt-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Harus Dijawab</label>
                    </div>
                    <div class="form-check form-switch ms-3">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1">
                        <label class="form-check-label" for="flexSwitchCheckDefault1">Acak Jawaban</label>
                    </div>
                    <div class="form-check form-switch ms-3">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2">
                        <label class="form-check-label" for="flexSwitchCheckDefault2">Tampilkan Nilai</label>
                    </div>
                </div>

                <div class="mt-3">
                    <h6>Opsi Jawaban</h6>
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                        <span class="fw-bold">Ini jawaban benar</span>
                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                            </div>
                            <button class="btn btn-outline-info mb-0 mx-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger mb-0">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-2">
                        <span class="fw-bold">Ini jawaban salah</span>
                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                            </div>
                            <button class="btn btn-outline-info mb-0 mx-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-outline-danger mb-0">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button type="sumbit" class="btn btn-outline-success" onclick="myFunction2()" id="myButton">
                            <i class="fas fa-plus-square"></i>
                            Tambah Jawaban
                        </button>
                    </div>
                </div>
                
                <div class="mt-3 border border-2 p-2 rounded" id="myDIV2" style="display: none">
                    <h6 class="mb-0">Jawaban</h6>
                    <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Masukkan Jawaban</label>
                        <input type="text" class="form-control">
                    </div>
                    <h6 class="mt-2 mb-0">Tambah Gambar</h6>
                    <div class="w-100">
                        <a href="#" class="" id="add-img">
                            <img src="https://via.placeholder.com/468x260?text=Klik+untuk+upload" id="preview" class="img-fluid">
                        </a>
                        <input type="file" class="d-none" name="" id="add-img2">
                    </div>
                    <div class="mt-4">
                        <h6 class="mb-0">Format Jawaban</h6>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="form-check ps-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                    <label class="custom-control-label" for="customRadio1">Text</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                    <label class="custom-control-label" for="customRadio2">Gambar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                    <label class="custom-control-label" for="customRadio3">Keduanya</label>
                                </div>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-outline-danger" onclick="myFunction3()">
                                    <i class="fas fa-times"></i>
                                    Batal
                                </button>
                                <button type="sumbit" class="btn btn-outline-success">
                                    <i class="fas fa-save"></i>
                                    Simpan Jawaban
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 d-grid">
                    <button type="sumbit" class="btn btn-outline-block btn-outline-success">
                        <i class="fas fa-save"></i>
                        Simpan Pertanyaan
                    </button>
                </div>
                
            </div>
            {{-- <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="sumbit" class="btn btn-outline-success">
                    <i class="fas fa-plus-square"></i>
                    Tambah Video
                </button>
            </div> --}}
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-zYXldzJsDrNKV+odAwFYiDXV2Cy37cwizT+NkuiPGsa9X1dOz04eHvUWVuxaJ299GvcJT31ug2zO4itXBjFx4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <x-laravel-blade-sortable::scripts/>

    {{-- <script src="{{ asset('/js/app.js') }}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/basic.css"></script> --}}

    <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        } 
        
        function myFunction2() {
        var x = document.getElementById("myDIV2");
        var y = document.getElementById("myButton");
            if (x.style.display === "block") {
                x.style.display = "none";
                y.style.display = "block";
            } else {
                x.style.display = "block";
                y.style.display = "none";
            }
        }

        function myFunction3() {
        var x = document.getElementById("myDIV2");
        var y = document.getElementById("myButton");

        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
            y.style.display = "block";
        }
        } 
    </script>
    <script>
        $("#next").click(function(){
            $("#next1").click();
        });

        $('#add-img').click(function(){
            $('#add-img2').click();
        });

        $('#createTopic').click(function(){
            $('#createTopic1').click();
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