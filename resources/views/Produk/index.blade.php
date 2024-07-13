@extends('Header.master')
@section('content')
    <div class=" mt-3">
        <main>

            <section class="py-5 text-center container">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i
                            class="bi bi-search"></i></button>
                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                        aria-describedby="button-addon1">
                </div>
            </section>
            <div class="album py-5 bg-body-tertiary">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($items as $index => $item)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('uploads/' . $item->foto) }}" alt="{{ $item->nama_makanan }}"
                                        class="img-fluid rounded-top"
                                        style="object-fit: cover; object-position: center; height: 225px;">

                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 for="">{{ $item->nama_makanan }}</h5>
                                            <label for="">Rp. {{ $item->harga }}</label>
                                        </div>
                                        <p class="card-text">{{ $item->deskripsi }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </main>
        <footer class="text-body-secondary py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#" class="btn btn-primary"><i class="bi bi-arrow-up"></i></a>
                </p>
            </div>
        </footer>
    </div>
@endsection
