@extends('layouts.master')
@section('title','Edit Barang')
@section('heading','Edit Barang')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Edit Barang</li>
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
            <form method="POST" action="/barang/{{$brg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_brg" value="{{$brg->nama_brg}}" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" name="harga" value="{{$brg->harga}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Gas</label>
                     <select name="jenis" class="form-control" id="">
                        <option value="5.5 KG" {{ $brg->jenis == '5.5 KG' ? 'selected' : '' }}>5.5 KG</option>
                        <option value="12 KG" {{ $brg->Jenis == '12 KG' ? 'selected' : '' }}>12 KG</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection