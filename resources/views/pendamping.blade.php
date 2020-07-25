@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md d-flex justify-content-center">
                <div class="card shadow" style="width:18rem">
                    <div class="card-header">
                        Jumlah Pendamping Desa
                    </div>
                    <div class="card-body bg-primary d-inline-flex justify-content-between text-white">
                        <span class="material-icons" style="font-size:40px">person</span>
                        <p class="h2">{{ $pendamping -> total() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card shadow" style="width:18rem">
                    <div class="card-header">
                        Jumlah Pendamping Desa Pria
                    </div>
                    <div class="card-body bg-danger">
                        <p class="h3"></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="card shadow" style="width:18rem">
                    <div class="card-header">
                        Jumlah Pendamping Desa Wanita
                    </div>
                    <div class="card-body bg-warning">
                        <p class="h3"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-primary mt-4 d-inline-flex justify-content-between" onClick="window.open('/tambah_pendamping');">
                <span class="material-icons">add</span>Tambah
            </button>
            <table class="table table-striped table-dark mt-2">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($pendamping as $p)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $p -> nama }}</td>
                        <td>{{ $p -> pendidikan }}</td>
                        <td>{{ $p -> alamat }}</td>
                        <td>{{ $p -> email }}</td>
                        <td class="d-inline-flex justify-content-between">
                            <button type="button" class="btn btn-primary mr-2 d-flex align-items-center shadow" data-toggle="modal" data-target="#exampleModal{{ $p -> id}}">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" class="btn btn-warning mr-2 d-flex align-items-center text-white shadow"  onClick="window.open('/pendamping_desa/update/{{ $p -> id }}');">
                                <i class="material-icons">create</i>
                            </button>
                            <button type="button" class="btn btn-danger d-flex align-items-center shadow">
                                <i class="material-icons">delete</i>        
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                @foreach($pendamping as $p)
                <div class="modal fade" id="exampleModal{{ $p -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Pendamping Desa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Nama :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> nama}}</p>
                                </div>
                         </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Gender :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> gender }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Agama :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> agama }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Tempat, Tanggal Lahir :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> tempat_lahir }}, {{ $p -> tanggal_lahir }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Alamat :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> alamat }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Pendidikan :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> pendidikan }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Email :</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $p -> email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $pendamping->links() }}
        </div>
    </div>
@endsection