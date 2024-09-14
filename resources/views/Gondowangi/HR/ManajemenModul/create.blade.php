@extends('gondowangi.layouts.hr.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Menambahkan Materi</h5>
                <small class="text-muted float-end">
                    <div class="col-sm-10">
                        <a href="/kelolakegiatan" class="btn btn-sm btn-secondary d-none d-md-inline-flex align-items-center">
                            <i class="bx bx-arrow-back me-1"></i> Kembali
                        </a>
                    </div>
                </small>
            </div>
            <hr>
            <div class="card-body">
                <form action="/kelolakegiatan" method="POST" enctype="multipart/form-data">
                    @csrf
        
                    {{-- judul Materi --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Judul Materi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" id="basic-default-company"/>
                        </div>
                    </div>
        
                    {{-- deskripsi Materi --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi Materi</label>
                        <div class="col-sm-10">
                            <textarea id="body" name="deskripsi" class="form-control"
                                aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                    </div>
        
                    {{-- gambar Materi --}}
                    <div class="row mt-3 mb-3">
                        <label class="col-sm-2 col-form-label" for="inputGroupFile02">Gambar</label>
                        <div class="col-sm-10">
                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                    </div>
        
                    {{-- Keuntungan Materi --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Keuntungan Materi</label>
                        <div class="col-sm-10">
                            <textarea  name="keuntungan" class="form-control col-12"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            <div class="form-text">Jika lebih dari satu, pisahkan menggunakan slash(/)</div>
                        </div>
                    </div>
        
                    {{-- syarat Materi --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Syarat Materi</label>
                        <div class="col-sm-10">
                            <textarea  name="syarat" class="form-control col-12"
                                    aria-describedby="basic-icon-default-message2"></textarea>
                            <div class="form-text">Jika lebih dari satu, pisahkan menggunakan slash(/)</div>
                        </div>
                    </div>
        
                    {{-- penulis --}}
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Dibuat oleh</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" name="instruktur" id="basic-default-email" class="form-control" value="{{Auth::user()->profile->nama}}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Menambahkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
    
@endsection