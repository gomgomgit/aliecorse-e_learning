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

        <div class="row mt-5">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-radial-blue">
                    <div class="p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-radial-blue shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">school</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="mb-0 text-capitalize">Kursus Diambil</p>
                        <h4 class="mb-0">53</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("admin/reports/1") }}" class="btn btn-outline-info mb-0">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-radial-green">
                <div class="p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-radial-green shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">money</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="mb-0 text-capitalize">Pendapatan</p>
                        <h4 class="mb-0">Rp 2.300.000</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("admin/reports/1") }}" class="btn btn-outline-info mb-0">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card bg-radial-indigo">
                    <div class="p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-radial-indigo shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="mb-0 text-capitalize">Siswa Mendaftar</p>
                            <h4 class="mb-0">3.462</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="text-end card-footer p-3">
                        <a href="{{ url("admin/reports/1") }}" class="btn btn-outline-info mb-0">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <h5>Kursus paling banyak diambil</h5>
            <div class="card p-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Kursus</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus Diambil</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendapatan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Instruktur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Kursus Menggambar</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">Rp 1.600.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">Joko anwar</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Kursus Menjahit</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">Rp 1.600.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">Joko anwar</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Kursus Menari</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">Rp 1.600.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">Joko anwar</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Kursus Bahasa Inggris</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">Rp 1.600.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">Joko anwar</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Kursus Bahasa Arab</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-xs font-weight-bold mb-0">4</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">Rp 1.600.000</span>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">Joko anwar</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <h5>Grafik Pendapatan</h5>
            <div class="col-12">
                <div class="card bg-gradient-info">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
