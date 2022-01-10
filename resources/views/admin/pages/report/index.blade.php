@extends('admin.layouts.app')

@section('title', 'Laporan')
    
@push('after-style')
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet"/>
@endpush
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between mb-2">
            <h3>Laporan</h3>
            <div class="d-flex gap-3">
                <div class="float-end">
                    {{-- <h6 class="">Bulan</h6> --}}
                    <div class="input-group input-group-static">
                        <label for="exampleFormControlSelect1" class="ms-0 text-xs text-dark fw-bold">Bulan</label>
                        <select class="form-control pt-0" id="exampleFormControlSelect1">
                            <option>Januari</option>
                            <option>Februari</option>
                        </select>
                    </div>
                </div>
                <div class="ms-2">
                    {{-- <h6 class="">Tahun</h6> --}}
                    <div class="input-group input-group-static">
                        <label for="exampleFormControlSelect1" class="ms-0 text-xs text-dark fw-bold">Tahun</label>
                        <select class="form-control pt-0" id="exampleFormControlSelect1">
                            <option>2020</option>
                            <option>2021</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row gap-4">
            <div class="p-8 col-4 bg-radial-green">
                <h3>sdafdsjklfh</h3>
            </div>
        </div> --}}

        <div class="row mt-5">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">school</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="mb-0 text-capitalize">Kursus Diambil</p>
                        <h4 class="mb-0">53</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("admin/reports/1") }}" class="btn btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">money</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="mb-0 text-capitalize">Pendapatan</p>
                        <h4 class="mb-0">Rp 2.300.000</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("adminreports1") }}" class="btn btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="mb-0 text-capitalize">Siswa Mendaftar</p>
                            <h4 class="mb-0">3.462</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("adminreports1") }}" class="btn btn-outline-info">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h3>Grafik Pendapatan</h3>
            <div class="card">
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="line-chart" class="chart-canvas" height="300px"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
