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
            <h4>List Bab</h4>
            <x-laravel-blade-sortable::sortable
                as="div"
            >
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="1" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="fw-bold">Latihan menari</span>
                        <span>23 Lesson</span>
                        <div class="">
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
                </x-laravel-blade-sortable::sortable-item>
            </x-laravel-blade-sortable::sortable>
            <x-laravel-blade-sortable::sortable
                as="div"
            >
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="3" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="fw-bold">Latihan menari</span>
                        <span>23 Lesson</span>
                        <div class="">
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
                </x-laravel-blade-sortable::sortable-item>
            </x-laravel-blade-sortable::sortable>
            <x-laravel-blade-sortable::sortable
                as="div"
            >
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="2" {{-- this is important. set a key for each entry --}}
                >
                    <div class="d-flex justify-content-between align-items-center border border-2 rounded p-2 mb-1">
                        <span class="fw-bold">Latihan menari</span>
                        <span>23 Lesson</span>
                        <div class="">
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
                </x-laravel-blade-sortable::sortable-item>
            </x-laravel-blade-sortable::sortable>
            <div class="d-flex justify-content-between mt-4">
                <div>
                    <a href="{{ url('admin/courses/1/topic') }}" class="btn btn-info align-end">
                        <i class="fas fa-save"></i>
                        Simpan Urutan Bab
                    </a>
                </div>
                <div>
                    <a href="{{ url('admin/courses/1/topic') }}" class="btn btn-success align-end">
                        <i class="fas fa-plus"></i>
                        Tambah Bab
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('end-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-zYXldzJsDrNKV+odAwFYiDXV2Cy37cwizT+NkuiPGsa9X1dOz04eHvUWVuxaJ299GvcJT31ug2zO4itXBjFx4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <x-laravel-blade-sortable::scripts/>

    <script src="{{ asset('/js/app.js') }}"></script>
@endsection