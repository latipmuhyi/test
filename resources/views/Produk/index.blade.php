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
                    <<<<<<< HEAD=======</tbody>
                        </table>
                </div> --}}
                <main>

                    <section class="py-5 text-center container">
                        <div class="row py-lg-5">
                            <div class="col-lg-6 col-md-8 mx-auto">
                                <h1 class="fw-light">Solusi Balita Sehat</h1>
                                <p class="lead text-body-secondary">Selamat datang di halaman Solusi Balita Sehat, tempat di
                                    mana
                                    kesehatan dan kebahagiaan balita Anda menjadi prioritas utama kami. Kami memahami bahwa
                                    masa
                                    balita adalah periode yang sangat penting dalam perkembangan anak, sehingga kami telah
                                    menyediakan
                                    beberapa produk khusus untuk mendukung pertumbuhan optimal mereka.
                                </p>

                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i
                                    class="bi bi-search"></i></button>
                            <input type="text" class="form-control" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </section>

                    <div class="album py-5 bg-body-tertiary">
                        <div class="container">

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#55595c" />
                                        </svg>
                                        <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary">View</button>
                                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                                                </div>
                                                <small class="text-body-secondary">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            >>>>>>> 8ae28f6e8a36ba61b6f4fd3aa82c94c9324312c4
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
