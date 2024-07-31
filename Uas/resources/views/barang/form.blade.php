@extends('layouts.master')
@section('title','Tambah Barang')
@section('heading','Tambah Barang')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Tambah Barang</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">

        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
                    <form method="POST" action="/barang/store/">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_brg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Gas</label>
                            <select name="jenis" class="form-control" id="">
                                <option value="">-Pilih Jenis Gas -</option>
                                <option value="5.5 KG">5.5 KG</option>
                                <option value="12 KG">12 KG</option>
                            </select>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
                <!-- /.card-body -->
               
    </div>
@endsection