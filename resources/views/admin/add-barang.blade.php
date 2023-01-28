@extends('layouts.admin.add-barang-layout')

@section('content')
<div class="container">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-9 col-md-7 col-lg-5 my-auto mx-auto">
            <div class="trasparent-card card shadow rounded-3 mt-5 "">
                <div class=" card-title text-center mt-2 fs-2">{{ __('Tambah Barang') }}</div>
            <div class="card-header">
            </div>

            <div class="card-body">
                <form method="POST" action="{{ url('add-barang') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nama" required placeholder="name" autofocus>
                        <label for="floatingInput`">{{ __('Nama Barang') }}</label>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Merk</label>
                        <select class="form-select" id="merk" name="merk">
                            <option selected>Pilih Merk..</option>
                            @foreach($merk as $merk)
                            <option value="{{$merk->id}}">{{$merk->merk}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori">
                            <option selected>Pilih Kategori..</option>
                            @foreach($kategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="spec" type="text" class="form-control @error('spec') is-invalid @enderror" name="spec" required placeholder="spec" autofocus>
                        <label for="floatingInput">{{ __('Spesifikasi') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="stock" type="number" class="form-control @error('stok') is-invalid @enderror" name="stock" required placeholder="stock" autofocus>
                        <label for="floatingInput">{{ __('Stok') }}</label>

                    </div>
                    <div class="form-floating mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="harga" required placeholder="Harga" autofocus>
                            <span class="input-group-text">,00</span>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div>
                            <button type="submit" class="btn btn-primary fw-bold">
                                {{ __('Tambah') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection