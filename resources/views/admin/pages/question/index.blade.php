@extends('admin.layouts.app')

@section('title', 'Pertanyaan')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <h3>Pertanyaan</h3>
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Kursus</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Siswa</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pertanyaan</th>
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
                            <td class="align-middle">
                                <p  class="text-xs text-secondary mb-0">
                                    With DataTables you can alter the ordering characteristics of With DataTables you can alter
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="text-center">
                                    <a href="" class="px-2">
                                        <i class="material-icons opacity-10">visibility</i>
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
                            <td class="align-middle">
                                <p  class="text-xs text-secondary mb-0">
                                    With DataTables you can alter the ordering characteristics of With DataTables you can alter
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="text-center">
                                    <a href="" class="px-2">
                                        <i class="material-icons opacity-10">visibility</i>
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
                            <td class="align-middle">
                                <p  class="text-xs text-secondary mb-0">
                                    With DataTables you can alter the ordering characteristics of With DataTables you can alter
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="text-center">
                                    <a href="" class="px-2">
                                        <i class="material-icons opacity-10">visibility</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection