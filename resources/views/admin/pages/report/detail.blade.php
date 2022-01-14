@extends('admin.layouts.app')

@section('title', 'Detail Laporan')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Detail Laporan</h3>
        <h5>Januari 2022</h5>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection