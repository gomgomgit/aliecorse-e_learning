@extends('admin.layouts.app')

@section('title', 'Pembelian')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between mb-2">
            <h3>Pembelian</h3>
            <div class="d-flex gap-3">
                <div class="float-end">
                    {{-- <h6 class="">Bulan</h6> --}}
                    <div class="input-group input-group-static">
                        <label for="exampleFormControlSelect1" class="ms-0 text-xs text-dark fw-bold">Bulan</label>
                        <select class="form-control pt-0" id="exampleFormControlSelect1">
                            <option>Jan</option>
                            <option>Feb</option>
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
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Kursus</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Siswa</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Instruktur</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold">21 September 2021</span>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Indra frimawan</p>
                            </td>
                            <td class="align-middle">
                                <p  class="text-center text-xs font-weight-bold mb-0">
                                    Rp 300.000
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="float-end">
                                    <a href="" class="btn btn-outline-success mb-0">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-info mb-0">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold">21 September 2021</span>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Indra frimawan</p>
                            </td>
                            <td class="align-middle">
                                <p  class="text-center text-xs font-weight-bold mb-0">
                                    Rp 300.000
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="float-end">
                                    <a href="" class="btn btn-outline-success mb-0">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-info mb-0">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold">21 September 2021</span>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Indra frimawan</p>
                            </td>
                            <td class="align-middle">
                                <p  class="text-center text-xs font-weight-bold mb-0">
                                    Rp 300.000
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="float-end">
                                    <a href="" class="btn btn-outline-success mb-0">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-info mb-0">
                                        <i class="fas fa-pencil"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger mb-0">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection