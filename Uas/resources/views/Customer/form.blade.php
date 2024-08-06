@extends('layouts.master')
@section('title','Tambah Customer')
@section('heading','Tambah Customer')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Tambah Customer</li>
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
                    <form method="POST" action="/Customer/store/">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">nama Customer</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">telp</label>
                            <input type="text" name="hp" class="form-control" id="exampleInputPassword1">
                            
                           
                        
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Tambah Customer</button>
                    </form>
                </div>
                <!-- /.card-body -->
               
    </div>
@endsection