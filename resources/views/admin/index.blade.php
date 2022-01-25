@extends('admin.layouts.app')

@section('title', 'Dashboard')
    
@push('after-style')
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet"/>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 mt-3 mb-4">
            <div class="card bg-radial-yellow z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-yellow rounded-circle fs-1">school</i>
                    <h4>Jumlah Kursus</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3 mb-4">
            <div class="card bg-radial-green z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-green rounded-circle fs-1">emoji_events</i>
                    <h4>Kursus Selesai</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3 mb-4">
            <div class="card bg-radial-blue z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-blue rounded-circle fs-1">menu_book</i>
                    <h4>Jumlah Sertifikat</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6 mt-2 mb-4">
            <div class="card bg-radial-blue z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-info rounded-circle fs-1">group</i>
                    <h4>Total Students</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 mb-4">
            <div class="card bg-radial-yellow z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-warning rounded-circle fs-1">widgets</i>
                    <h4>Total Courses</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-2 mb-4">
            <div class="card bg-radial-green z-index-2 ">
                <div class="card-body">
                <div class="text-center">
                    <i class="material-icons opacity-10 text-light p-3 bg-success rounded-circle fs-1">paid</i>
                    <h4>Total Earnings</h4>
                    <h1>12</h1>
                </div>
                </div>
            </div>
        </div> --}}
    </div>
    
    <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Kursus terakhir yang di ikuti</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Instruktur</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Pelajaran</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-3">
                                        <h6 class="mb-0 text-sm ">Material XD Version</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">Pak Irwandi</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">23</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">60%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-radial-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-3">
                                        <h6 class="mb-0 text-sm ">Add Progress Track</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">Pak Irwandi</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">23</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">10%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-radial-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-3">
                                        <h6 class="mb-0 text-sm ">Fix Platform Errors</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">Pak Irwandi</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">23</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                <span class="text-xs font-weight-bold">100%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-radial-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-3">
                                        <h6 class="mb-0 text-sm ">Redesign New Online Shop</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">Pak Irwandi</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">23</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-wrapper w-75 mx-auto">
                                            <div class="progress-info">
                                                <div class="progress-percentage">
                                                    <span class="text-xs font-weight-bold">40%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-radial-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Pembelian terakhir</h6>
                </div>
                <div class="card-body p-3">
                    
                    <div class="my-3 mx-2 d-flex justify-content-between">
                        <div>
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Kursus Design changes</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                        <div class="">
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Rp 300.000</p>
                        </div>
                    </div>
                    <div class="my-3 mx-2 d-flex justify-content-between">
                        <div>
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Kursus Design changes</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                        <div class="">
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Rp 300.000</p>
                        </div>
                    </div>
                    <div class="my-3 mx-2 d-flex justify-content-between">
                        <div>
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Kursus Design changes</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                        <div class="">
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Rp 300.000</p>
                        </div>
                    </div>
                    <div class="my-3 mx-2 d-flex justify-content-between">
                        <div>
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Kursus Design changes</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                        <div class="">
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Rp 300.000</p>
                        </div>
                    </div>
                    <div class="my-3 mx-2 d-flex justify-content-between">
                        <div>
                            <h6 class="text-dark text-sm font-weight-bold mb-0">Kursus Design changes</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                        </div>
                        <div class="">
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Rp 300.000</p>
                        </div>
                    </div>
                    {{-- <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-success text-radial">notifications</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-danger text-radial">code</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-dark text-radial">shopping_cart</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-warning text-radial">credit_card</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-primary text-radial">key</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <i class="material-icons text-dark text-radial">payments</i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Rekomendasi Kursus</h6>
                </div>
                <div class="card-body px-4 py-0">
                    <div class="row">
                        <div class="col-4 my-3">
                            <a href="/admin/my-course/1">
                                <div class="p-2 border border-2 rounded">
                                    <div class="w-100">
                                        <img class="img-fluid" src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge bg-warning">Language</span>
                                        <h6>Kursus Bahasa Asing</h6>
                                        <span>12 Pelajaran</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 my-3">
                            <a href="/admin/my-course/1">
                                <div class="p-2 border border-2 rounded">
                                    <div class="w-100">
                                        <img class="img-fluid" src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge bg-warning">Language</span>
                                        <h6>Kursus Bahasa Asing</h6>
                                        <span>12 Pelajaran</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 my-3">
                            <a href="/admin/my-course/1">
                                <div class="p-2 border border-2 rounded">
                                    <div class="w-100">
                                        <img class="img-fluid" src="https://s3.amazonaws.com/creativetim_bucket/products/50/original/material-dashboard.jpg?1634648873" alt="">
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge bg-warning">Language</span>
                                        <h6>Kursus Bahasa Asing</h6>
                                        <span>12 Pelajaran</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection