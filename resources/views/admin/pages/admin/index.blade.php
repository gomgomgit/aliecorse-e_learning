@extends('admin.layouts.app')

@section('title', 'Admin')
    
@section('content')
<div class="container-fluid">
    <div class="py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>
                Admin
            </h3>
            <div class="">
                <a href="" class="border border-info border-2 px-4 py-2 rounded text-info fw-bold" style="background-color: white">
                    <i class="fas fa-plus-square"></i>
                    Tambah Admin
                </a>
            </div>
        </div>
        <div class="card p-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 opacity-7">Kursus</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus Dimiliki</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kursus Dibeli</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Bergabung</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No HP</th>
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
                                <p class="text-center text-xs font-weight-bold mb-0">4</p>
                            </td>
                            <td>
                                <p class="text-center text-xs font-weight-bold mb-0">4</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-secondary text-xs font-weight-bold">21 September 2021</span>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">jokoirawan@email.com</p>
                            </td>
                            <td class="align-middle">
                                <p class="text-center text-xs font-weight-bold mb-0">0237493824243</p>
                            </td>
                            <td class="align-middle">
                                <div class="text-center">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection