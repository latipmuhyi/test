@extends('Header.master')
@section('content-umum')
    <div class="container " style="margin-top: 5%">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                    height="57">
                <h2>Formulir Konsultasi Produk Balita Sehat </h2>
                <p class="lead">Halo Ayah dan Bunda,
                </p>
                <p class="lead">
                    Kami senang Anda tertarik untuk memberikan yang terbaik bagi buah hati Anda. Untuk membantu kami
                    merekomendasikan produk yang paling sesuai dengan kebutuhan si kecil, silakan isi formulir konsultasi di
                    bawah ini dengan informasi yang lengkap dan akurat.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Rekomendasi Produk</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-body-secondary">Brief description</small>
                            </div>
                            <span class="text-body-secondary">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-lg-4">
                    <h4 class="mb-3">Data Diri</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Tinggi Badan</label>
                                <input type="text" class="form-control" id="firstName" placeholder="50" value=""
                                    required>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Berat Badan</label>
                                <input type="text" class="form-control" id="lastName" placeholder="15" value=""
                                    required>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
