@extends('admin.layouts.app')

@section('title', 'Webinar | Webinar Perpajakan')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Webinar Perpajakan</h3>
        <div class="row">
            <div class="col-8">
                <img src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt="">
                <div class="py-3">
                    <p>
                        Ini deskripsi dslkfjdsalfjsl sdlfosdf sdlfkjl sdlkfja lsdlk sdlfj kl fl dsfkl 
                        Ini deskripsi dslkfjdsalfjsl sdlfosdf sdlfkjl sdlkfja lsdlk sdlfj kl fl dsfkl 
                        Ini deskripsi dslkfjdsalfjsl sdlfosdf sdlfkjl sdlkfja lsdlk sdlfj kl fl dsfkl 
                        Ini deskripsi dslkfjdsalfjsl sdlfosdf sdlfkjl sdlkfja lsdlk sdlfj kl fl dsfkl 
                        Ini deskripsi dslkfjdsalfjsl sdlfosdf sdlfkjl sdlkfja lsdlk sdlfj kl fl dsfkl .
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-3">
                        <div class="card text-center p-2 border border-2">
                            <h3>6</h3>
                            <span>Hari</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-center p-2 border border-2">
                            <h3>6</h3>
                            <span>Jam</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-center p-2 border border-2">
                            <h3>34</h3>
                            <span>Menit</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card text-center p-2 border border-2">
                            <h3>23</h3>
                            <span>Detik</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="card px-4 py-2 border border-2">
                        <h3 class="border-bottom border-2">Detail</h3>
                        <div class="py-1">
                            <h6 class="mb-0">Host By :</h6>
                            <span>Pak mulyadi tahir</span>
                        </div>
                        <div class="py-1">
                            <h6 class="mb-0">Mulai Pada :</h6>
                            <span>12 desember 2022 14:30 PM</span>
                        </div>
                        <div class="py-1">
                            <h6 class="mb-0">Durasi :</h6>
                            <span>45 menit</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-success w-100">
                        <i class="fas fa-plus-square"></i>
                        Join Via Zoom App
                    </button>
                    <button class="btn btn-outline-success w-100">
                        <i class="fas fa-plus-square"></i>
                        Join Via Web Browser
                    </button>
                    <button class="btn btn-outline-success w-100">
                        <i class="fas fa-plus-square"></i>
                        Start meeting
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
@endpush