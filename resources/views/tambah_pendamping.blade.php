@extends('layouts.app')
@section('content')
<div class="container">
    <form method="post" action="/add_partner">
        @csrf
        <div class="row">
            <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-12">
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="gender">Jenis Kelamin :</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="agama">Agama :</label>
                <select class="form-control" name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                </select>
            </div>      
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
            </div>
            <div class="col-md-3">
                <label for="tanggal_lahir">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="pendidikan">Pendidikan Terakhir :</label>
                <select name="pendidikan" id="pendidikan" class="form-control">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div calss="col-md-3">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email"class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" class="form-control" id="alamat"></textarea>
            </div>
        </div>
        <!-- <div class="row mt-4">
            <div class="col-md-2 mx-auto">
                <span class="mx-auto">Foto :</span>
            </div>
            <div class="col-md-10">
                <input type="file" class="form-control" id="customFile" name="foto">
                <label for="customFile" class="custom-file-label">Choose File</label>
            </div>
        <div> -->
        <div class="row mt-4 d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-primary d-inline-flex justify-content-center">
                    Simpan&nbsp;&nbsp;&nbsp;
                    <i class="material-icons">send</i>
                </button>
        </div>
    </form>
</div>
@endsection