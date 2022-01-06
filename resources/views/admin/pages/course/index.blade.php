@extends('admin.layouts.app')

@section('title', 'Kursus')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Kursus</h3>
        <div class="border border-2 p-2">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <img class="w-20" src="https://avatars.githubusercontent.com/u/58408947?v=4" alt="">
                        <div class="ps-2">
                            <span class="p-1 px-2 bg-warning text-white rounded" style="font-size: 12px">Language</span>
                            <h4 class="mt-2">Kursus bahasa asing</h4>
                            <span>Rp 300.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <div>
                            <i class="text-warning fas fa-star"></i>
                            <i class="text-warning fas fa-star"></i>
                            <i class="text-warning fas fa-star"></i>
                            <i class="text-warning fas fa-star"></i>
                            <i class="text-warning far fa-star"></i>
                        </div>
                        <span class="px-2">
                            4.0
                        </span>
                        <div class="d-flex align-items-center ps-3">
                            <i class="material-icons opacity-10">person</i>
                            <span class="">43</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <span>21 Pelajaran</span>
                    </div>
                    <div class="">
                        <a href="" class="px-2">
                            <i class="material-icons opacity-10">visibility</i>
                        </a>
                        <a href="" class="px-2">
                            <i class="material-icons opacity-10">edit</i>
                        </a>
                        <a href="" class="px-2">
                            <i class="material-icons opacity-10">delete</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection