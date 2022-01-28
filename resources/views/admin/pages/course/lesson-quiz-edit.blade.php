
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

        <form action="{{ route('lessons.quiz-update', $lessonQuiz->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="tab-content p-2 border border-2 rounded mt-3" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h6>Nama Kuis</h6>
                    <div class="input-group input-group-static mb-3">
                        <label>Masukkan Nama Kuis</label>
                        <input name="name" type="text" class="form-control" value="{{ $lessonQuiz->name }}">
                    </div>
                    <h6 class="mb-0">Detail Kuis</h6>
                    <div class="input-group input-group-dynamic">
                        <textarea name="detail" class="form-control" rows="5" placeholder="Detail Kuis Tulis Disini." spellcheck="false"></textarea>
                    </div>
                    <div class="float-end mt-4">
                        <button type="button" class="btn btn-outline-success" id="next">
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
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                            <i class="fas fa-plus-square"></i>
                            Tambah Soal
                        </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h6>Batas Waktu</h6>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="w-40">
                            <div class="input-group input-group-static">
                                <label>Masukkan Batas Waktu</label>
                                <input name="time_limit" type="number" class="form-control" min="0">
                            </div>
                        </div>
                        <div class="w-25">
                            <select name="limit_type" id="" class="form-select px-2">
                                <option value="Menit" class="form-input">Menit</option>
                                <option value="Detik" class="form-input">Detik</option>
                            </select>
                        </div>
                        <div class="form-check form-switch">
                            <input name="show_timeout" class="form-check-input mt-1" type="checkbox" id="flexSwitchCheckDefault1">
                            <label class="form-check-label m-0 ms-1" for="flexSwitchCheckDefault1">Tampilkan Batas Waktu</label>
                        </div>
                    </div>
                    <h6>Passing Grade</h6>
                    <div class="w-40 mb-2">
                        <div class="input-group input-group-static">
                            <label>Masukkan Passing Grade (%)</label>
                            <input name="passing_grade" type="number" class="form-control" min="0">
                        </div>
                    </div>
                    <h6 class="mb-0">Urutan Pertanyaan</h6>
                    <div class="input-group input-group-static">
                        <label for="urutanpertanyaan" class="ms-0">Pilih Urutan Pertanyaan</label>
                        <select name="question_order" class="form-control" id="urutanpertanyaan">
                            <option value="Berurutan">Berurutan</option>
                            <option value="Random">Random</option>
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
        </form>
    </div>
    {{-- <button class="btn btn-outline-success mb-0 mt-3 float-end">
        Update Kuis
    </button> --}}