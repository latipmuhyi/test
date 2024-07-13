@extends('Header.master')
@section('content')
    <div class="container">
        <div class="container px-4 py-5" id="featured-3">
            <div class="row g-4  row-cols-1 row-cols-lg-12">
                <div class="feature col">
                    <div class="float-start">
                        <h3 class="fs-2 text-body-emphasis">Profil Perusahaan</h3>
                    </div>
                    <div class="float-end">
                        @if ($data)
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditProfile">
                                <label for="">Edit Profil</label>
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        @else
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahProfile">
                                <label for="">Tambah Profil</label>
                                <i class="bi bi-plus"></i>
                            </button>
                        @endif

                    </div>
                </div>
            </div>
            <div class="modal fade" tabindex="-1" id="modalTambahProfile">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Profil Perusahaan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('simpan.profile') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama_perusahaan" class="mb-1">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan"
                                        placeholder="Nama Perusahaan" aria-label="Nama Perusahaan"
                                        aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="mb-1">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                        placeholder="Deskripsi Perusahaan" aria-label="Deskripsi Perusahaan"
                                        aria-describedby="basic-addon1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_jalan" class="mb-1">Alamat</label>
                                    <input type="text" class="form-control" name="nama_jalan" id="nama_jalan"
                                        placeholder="Nama Jalan" aria-label="Nama Jalan" aria-describedby="basic-addon1"
                                        required>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="rt" id="rt"
                                                placeholder="Rt" aria-label="Rt" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="rw" id="rw"
                                                placeholder="Rw" aria-label="Rw" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="desa" id="desa"
                                                placeholder="Desa/Kelurahan" aria-label="Desa/Kelurahan"
                                                aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                                placeholder="Kecamatan" aria-label="Kecamatan"
                                                aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                                                placeholder="Kabupaten" aria-label="Kabupaten"
                                                aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="provinsi" id="provinsi"
                                                placeholder="Provinsi" aria-label="Provinsi"
                                                aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kontak" class="mb-1">Kontak</label>
                                    <input type="number" class="form-control" name="kontak" id="kontak"
                                        placeholder="Kontak Perusahaan" aria-label="Kontak Perusahaan"
                                        aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" tabindex="-1" id="modalEditProfile">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Profil Perusahaan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('edit.profile', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama_perusahaan" class="mb-1">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="nama_perusahaan"
                                        id="nama_perusahaan" placeholder="Nama Perusahaan" aria-label="Nama Perusahaan"
                                        aria-describedby="basic-addon1" value="{{ $data->nama_perusahaan ?? '' }}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="mb-1">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                        placeholder="Deskripsi Perusahaan" aria-label="Deskripsi Perusahaan"
                                        aria-describedby="basic-addon1" value="{{ $data->deskripsi ?? '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_jalan" class="mb-1">Alamat</label>
                                    <input type="text" class="form-control" name="nama_jalan" id="nama_jalan"
                                        placeholder="Nama Jalan" aria-label="Nama Jalan" aria-describedby="basic-addon1"
                                        value="{{ explode('-', $data->alamat)[0] ?? '' }}" required>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="rt" id="rtEdit"
                                                placeholder="Rt" aria-label="Rt" aria-describedby="basic-addon1"
                                                value="{{ explode('-', $data->alamat)[1] ?? '' }}" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="rw" id="rwEdit"
                                                placeholder="Rw" aria-label="Rw" aria-describedby="basic-addon1"
                                                value="{{ explode('-', $data->alamat)[2] ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="desa" id="desa"
                                                placeholder="Desa/Kelurahan" aria-label="Desa/Kelurahan"
                                                value="{{ explode('-', $data->alamat)[3] ?? '' }}" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                                placeholder="Kecamatan" aria-label="Kecamatan"
                                                value="{{ explode('-', $data->alamat)[4] ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                                                placeholder="Kabupaten" aria-label="Kabupaten"
                                                value="{{ explode('-', $data->alamat)[5] ?? '' }}" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="provinsi" id="provinsi"
                                                placeholder="Provinsi" aria-label="Provinsi"
                                                value="{{ explode('-', $data->alamat)[6] ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kontak" class="mb-1">Kontak</label>
                                        <input type="number" class="form-control" name="kontak" id="kontakEdit"
                                            placeholder="Kontak Perusahaan" aria-label="Kontak Perusahaan"
                                            aria-describedby="basic-addon1"
                                            value="{{ explode('-', $data->kontak)[0] ?? '' }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-12">
                <div class="feature col">
                    <div class="container-fluid">
                        @if ($data)
                            <label for="">{{ $data->nama_perusahaan }}</label>
                            <h5 class="mt-2">Deskripsi</h5>
                            <p>{{ $data->deskripsi }}</p>
                            <h5 class="mt-2">Alamat</h5>
                            <div class="d-flex">
                                <p class="mx-1">{{ explode('-', $data->alamat)[0] ?? '' }} </p>
                                <p class="mx-1">RT. {{ explode('-', $data->alamat)[1] ?? '' }}/RW
                                    {{ explode('-', $data->alamat)[2] ?? '' }}</p>
                                <p class="mx-1">Desa {{ explode('-', $data->alamat)[3] ?? '' }}</p>
                                <p class="mx-1">Kecamatan {{ explode('-', $data->alamat)[4] ?? '' }}</p>
                                <p class="mx-1">Kabupaten {{ explode('-', $data->alamat)[5] ?? '' }}</p>
                                <p class="mx-1">Provinsi {{ explode('-', $data->alamat)[6] ?? '' }}</p>
                            </div>
                            <h5 class="mt-2">Kontak</h5>
                            <p>{{ $data->kontak }}</p>
                        @else
                            <label for="">Toko Sejahtera</label>
                            <h5 class="mt-2">Deskripsi</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas delectus est iusto adipisci
                                excepturi, eligendi temporibus accusantium magnam deserunt magni quam dolorem voluptas omnis
                                aliquid
                                nemo aperiam amet, aut culpa?</p>
                            <h5 class="mt-2">Alamat</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas delectus est iusto adipisci
                                excepturi, eligendi temporibus accusantium magnam deserunt magni quam dolorem voluptas omnis
                                aliquid
                                nemo aperiam amet, aut culpa?</p>
                            <h5 class="mt-2">Kontak</h5>
                            <p>087846689500</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Custom cards</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('{{ asset('assets/image/toko.jpg') }}');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>Earth</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>3d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('{{ asset('assets/image/toko.jpg') }}');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple
                                lines
                            </h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>Pakistan</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('{{ asset('assets/image/toko.jpg') }}');">

                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>California</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kontak').on('input', function() {
                if ($(this).val().length > 12) {
                    $(this).val($(this).val().slice(0, 12));
                }
            });
            $('#rt').on('input', function() {
                if ($(this).val().length > 3) {
                    $(this).val($(this).val().slice(0, 3));
                }
            });
            $('#rw').on('input', function() {
                if ($(this).val().length > 3) {
                    $(this).val($(this).val().slice(0, 3));
                }
            });
            $('#kontakEdit').on('input', function() {
                if ($(this).val().length > 12) {
                    $(this).val($(this).val().slice(0, 12));
                }
            });
            $('#rtEdit').on('input', function() {
                if ($(this).val().length > 3) {
                    $(this).val($(this).val().slice(0, 3));
                }
            });
            $('#rwEdit').on('input', function() {
                if ($(this).val().length > 3) {
                    $(this).val($(this).val().slice(0, 3));
                }
            });
        });
    </script>
@endsection
