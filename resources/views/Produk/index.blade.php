@extends('Header.master')
@section('content')
    <div class="container mt-3">
        <h5>Data Produk</h5>
        <button class="btn btn-primary my-2" data-bs-target="#modalTambah" data-bs-toggle="modal">Tambah</button>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col" class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                        <td class="text-center">

                            <button class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                        <td class="text-center">

                            <button class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                        <td class="text-center">

                            <button class="btn btn-success">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="registrationForm">
                                        @csrf

                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="nama_produk"
                                                placeholder="Nama Produk" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="nama_produk"
                                                placeholder="Harga" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" name="nama_produk"
                                                placeholder="Desakripsi" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection
