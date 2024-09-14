@extends('gondowangi.layouts.hr.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <h4>Table Kelola Materi</h4>
                        <a href="/manajemenmodul/create" class="btn btn-primary">Tambahkan Modul</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Deksripsi</th>
                                <th scope="col">Konten</th>
                                <th scope="col">Dibuat oleh</th>
                                <th scope="col">Dibuat pada</th>
                                <th scope="col">Diperbaharui pada</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <a href="#" class="btn btn-outline-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    {{-- modal add modul --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Modul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>dibuat oleh</label>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
@endsection
