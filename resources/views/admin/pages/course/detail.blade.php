@extends('admin.layouts.app')

@section('title', 'Kursus Saya | bla bla bla')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>Latihan berkaca pada dirimu sendiri</h3>
            </div>
            <div class="">
                <button class="btn btn-success w-100">
                    <i class="fas fa-plus"></i>
                    Lihat Detail Kursus
                </button>
            </div>
        </div>
        <div class="py-4">
            <h4>List Topik</h4>
            <x-laravel-blade-sortable::sortable
                as="div"
            >
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="2" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="flex-shrink-0 ps-2 pe-3"><i class="fas fa-sort"></i></span>
                        <div class="w-100 row d-flex justify-content-between align-items-center">
                            <span class="fw-bold col-6">Latihan Menggambar 1</span>
                            <span class="col-3">23 Pelajaran</span>
                            <div class="col-3 d-flex justify-content-end gap-2">
                                <button class="btn btn-info mb-0">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href='/admin/courses/1/topic' class="btn btn-warning mb-0">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button class="btn btn-danger mb-0">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </x-laravel-blade-sortable::sortable-item>
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="2" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="flex-shrink-0 ps-2 pe-3"><i class="fas fa-sort"></i></span>
                        <div class="w-100 row d-flex justify-content-between align-items-center">
                            <span class="fw-bold col-6">Latihan Menggambar 1</span>
                            <span class="col-3">23 Pelajaran</span>
                            <div class="col-3 d-flex justify-content-end gap-2">
                                <button class="btn btn-info mb-0">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href='/admin/courses/1/topic' class="btn btn-warning mb-0">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button class="btn btn-danger mb-0">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </x-laravel-blade-sortable::sortable-item>
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="2" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="flex-shrink-0 ps-2 pe-3"><i class="fas fa-sort"></i></span>
                        <div class="w-100 row d-flex justify-content-between align-items-center">
                            <span class="fw-bold col-6">Latihan Menggambar 1</span>
                            <span class="col-3">23 Pelajaran</span>
                            <div class="col-3 d-flex justify-content-end gap-2">
                                <button class="btn btn-info mb-0">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href='/admin/courses/1/topic' class="btn btn-warning mb-0">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <button class="btn btn-danger mb-0">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </x-laravel-blade-sortable::sortable-item>
            </x-laravel-blade-sortable::sortable>
            <div class="d-flex justify-content-between mt-4">
                <div>
                    <a href="{{ url('admin/courses/1/topic') }}" class="btn btn-info align-end">
                        <i class="fas fa-save"></i>
                        Simpan Urutan Topik
                    </a>
                </div>
                <div>
                    <a href="{{ url('admin/courses/1/topic') }}" class="btn btn-success align-end">
                        <i class="fas fa-plus"></i>
                        Tambah Topik
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-zYXldzJsDrNKV+odAwFYiDXV2Cy37cwizT+NkuiPGsa9X1dOz04eHvUWVuxaJ299GvcJT31ug2zO4itXBjFx4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <x-laravel-blade-sortable::scripts/>

    <script src="{{ asset('/js/app.js') }}"></script>
@endpush