@extends('Header.master')

@section('content')
    <div class="container mt-3">
        <h5>Data Produk</h5>
        <button class="btn btn-primary my-2" data-bs-target="#modalTambah" data-bs-toggle="modal">Tambah</button>

        <!-- Modal Tambah Produk -->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formTambahProduk" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="nama_makanan" class="mb-1">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_makanan" placeholder="Nama Produk"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="harga" class="mb-1">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga"
                                    required>
                            </div>
                            <div class="mb-2">
                                <label for="deskripsi" class="mb-1">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                    required>
                            </div>
                            <label for="kategori" class="mb-1">Kategori</label>
                            <select name="kategori" class="form-select mb-2" aria-label="Default select example" required>
                                <option selected disabled>-Kategori-</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Makanan">Makanan</option>
                            </select>
                            <div class="mb-2">
                                <label for="stok" class="mb-1">Stok</label>
                                <input type="number" class="form-control" name="stok" placeholder="Stok" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="foto" id="inputGroupFile02">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="simpanProduk">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Gambar</th>
                        <th scope="col" class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_makanan }}</td>
                            <td>Rp. {{ $item->harga }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td><img src="{{ asset('uploads/' . $item->foto) }}" alt="{{ $item->nama_makanan }}"
                                    width="100"></td>
                            <td class="text-center">
                                <button class="btn btn-success btn-edit" data-id="{{ $item->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-danger btn-delete" data-id="{{ $item->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Success Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Data Berhasil Disimpan
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Produk -->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditProduk" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="edit-id">
                            <div class="mb-2">
                                <label for="edit-nama_makanan" class="mb-1">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_makanan" id="edit-nama_makanan"
                                    placeholder="Nama Produk" required>
                            </div>
                            <div class="mb-2">
                                <label for="edit-harga" class="mb-1">Harga</label>
                                <input type="text" class="form-control" name="harga" id="edit-harga"
                                    placeholder="Harga" required>
                            </div>
                            <div class="mb-2">
                                <label for="edit-deskripsi" class="mb-1">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="edit-deskripsi"
                                    placeholder="Deskripsi" required>
                            </div>
                            <label for="edit-kategori" class="mb-1">Kategori</label>
                            <select name="kategori" id="edit-kategori" class="form-select mb-2"
                                aria-label="Default select example" required>
                                <option value="" disabled selected>- Pilih Kategori -</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Makanan">Makanan</option>
                            </select>
                            <div class="mb-2">
                                <label for="edit-stok" class="mb-1">Stok</label>
                                <input type="number" class="form-control" name="stok" id="edit-stok"
                                    placeholder="Stok" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit-foto" class="mb-1">Gambar</label><br>
                                <img id="preview-edit-foto" src="#" alt="Preview Gambar" width="100">
                                <input type="file" class="form-control" name="foto" id="edit-foto">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="updateProduk">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function formatRupiah(angka) {
                var number_string = angka.toString().replace(/[^,\d]/g, '');
                var split = number_string.split(',');
                var sisa = split[0].length % 3;
                var rupiah = split[0].substr(0, sisa);
                var ribuan = split[0].substr(sisa).match(/\d{3}/g);

                if (ribuan) {
                    var separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1].substr(0, 2) : rupiah;
                return rupiah;
            }

            $('#harga, #edit-harga').keyup(function() {
                $(this).val(formatRupiah($(this).val()));
            });

            $('#simpanProduk').click(function() {
                var formData = new FormData($('#formTambahProduk')[0]);
                sendData('{{ route('insert_produk') }}', formData);
            });

            $('.btn-edit').click(function() {
                var id = $(this).data('id');

                // Request data produk by id dan isi form edit
                $.ajax({
                    url: '/produk/' + id + '/edit',
                    type: 'GET',
                    success: function(response) {
                        var produk = response.produk;
                        $('#edit-id').val(produk.id);
                        $('#edit-nama_makanan').val(produk.nama_makanan);
                        $('#edit-harga').val(produk.harga);
                        $('#edit-deskripsi').val(produk.deskripsi);
                        $('#edit-kategori').val(produk.kategori);
                        $('#edit-stok').val(produk.stok);
                        $('#modalEdit').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error({
                            error
                        });
                    }
                });
            });

            $('#updateProduk').click(function() {
                var formData = new FormData($('#formEditProduk')[0]);
                var id = $('#edit-id').val();
                sendData('/produk/' + id, formData);
            });

            function sendData(url, formData) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        $('#modalTambah, #modalEdit').modal('hide');
                        $('#successModal').modal('show');
                        // Refresh table atau lakukan tindakan lain sesuai kebutuhan
                    },
                    error: function(xhr, status, error) {
                        console.error({
                            error
                        });
                    }
                });
            }
        });
    </script>
@endsection
