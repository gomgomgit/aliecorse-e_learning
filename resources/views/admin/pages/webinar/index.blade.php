@extends('admin.layouts.app')

@section('title', 'Webinar')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>
                Webinar
            </h3>
            <div class="">
                <a href="{{ url('admin/webinars/settings') }}" class="border border-info border-2 px-4 py-2 rounded text-info fw-bold me-2" style="background-color: white">
                    <i class="fas fa-cog"></i>
                    Pengaturan Webinar
                </a>
                <a href="{{ url('admin/webinars/create') }}" class="border border-info border-2 px-4 py-2 rounded text-info fw-bold" style="background-color: white">
                    <i class="fas fa-plus-square"></i>
                    Tambah Webinar
                </a>
            </div>
        </div>
        <div class="border border-2 p-2 mb-2">
            <div class="row align-items-center">
                <div class="col-10">
                    <div class="d-flex align-items-center">
                        <img class="w-15" src="https://avatars.githubusercontent.com/u/58408947?v=4" alt="">
                        <div class="ps-2 w-100">
                            <span class="p-1 px-2 bg-warning text-white rounded" style="font-size: 12px">Language</span>
                            <h5 class="mt-2">Kursus bahasa asing Kursus bahasa asing Kursus bahasa asing</h5>
                            <div class="row">
                                <div class="col-3">
                                    <h6>Meeting ID :</h6>
                                    <span>7378328746</span>
                                </div>
                                <div class="col-2">
                                    <h6>Short code :</h6>
                                    <span>
                                        <a href="" class="btn btn-outline-success btn-sm mb-0">copy code</a>
                                    </span>
                                </div>
                                <div class="col-3">
                                    <h6>Start time :</h6>
                                    <span>21/12/2021 12:30 PM</span>
                                </div>
                                <div class="col-2">
                                    <h6>Meeting State :</h6>
                                    <span>Disable Join</span>
                                </div>
                                <div class="col-2">
                                    <h6>Created at :</h6>
                                    <span>21/12/2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 px-0">
                    <a href="{{ url('admin/webinars/1') }}" class="btn btn-outline-success mb-0">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="" class="btn btn-outline-info mb-0">
                        <i class="fas fa-pencil"></i>
                    </a>
                    <a href="" class="btn btn-outline-danger mb-0">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection