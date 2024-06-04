<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace Katering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        .container-center {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container-center d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/image/login.jpg') }}" class="img-fluid" alt="Login Image">
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="card" style="width: 18rem;">
                    <div class="mx-auto">
                        <h5 class="card-title mt-4">Login</h5>
                    </div>
                    <form id="loginForm">
                        @csrf
                        <div class="card-body">
                            <label for="Username" class="float-start">Username</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" value="latipmuhyi">
                            </div>
                            <label for="Password" class="float-start">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    aria-label="Password" value="12345678" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="mx-5 mb-4">
                            <button type="submit" class="btn btn-primary px-4">Login</button>
                            <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Daftar
                            </button>
                        </div>
                    </form>
                    <div class="mx-auto mb-2">

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrasi Akun</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="registrationForm">
                                            @csrf
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Name" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Username" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    placeholder="Confirm Password" required>
                                            </div>
                                            <select name="role" class="form-select mb-2"
                                                aria-label="Default select example" required>
                                                <option selected disabled>-Select-</option>
                                                <option value="Merchant">Merchant</option>
                                                <option value="Customer">Customer</option>
                                            </select>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal for Success -->
                        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="successModalLabel">Berhasil!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Pendaftaran akun berhasil! Silahkan lakukan login
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal for Success Login -->
                        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="LoginSuccess"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    {{-- <div class="modal-header">
                                        <h5 class="modal-title" id="LoginSuccess">Berhasil!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div> --}}
                                    <div class="modal-body">
                                        Login Berhasil
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kontakInput').on('input', function() {
                if (this.value.length > 12) {
                    this.value = this.value.slice(0, 12);
                }
            });

            $('select[name="role"]').on('change', function() {
                if (this.value === 'Merchant') {
                    $('#merchantFields').show();
                    $('#customerFields').hide();
                } else if (this.value === 'Customer') {
                    $('#merchantFields').hide();
                    $('#customerFields').show();
                } else {
                    $('#merchantFields').hide();
                    $('#customerFields').hide();
                }
            });

            $('#registrationForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('register') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#exampleModal').modal('hide');
                            $('#registrationForm')[0].reset();
                            $('#successModal').modal('show');
                        } else {
                            if (response.errors) {
                                let errorMessage = '';
                                $.each(response.errors, function(key, value) {
                                    errorMessage += value + '<br>';
                                });
                                alert('Registrasi Gagal!\n' + errorMessage);
                            } else {
                                alert('Registrasi Gagal!\n' + response.message);
                            }
                        }
                    },
                    error: function(response) {
                        alert('Registrasi Gagal!\nTolong periksa kembali inputan anda.');
                    }
                });
            });

            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('login') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#LoginSuccess').modal('show');
                        window.location.href = "{{ route('home') }}";
                    },
                    error: function(response) {
                        alert(
                            'Login Gagal!\nTolong periksa kembali username dan password anda.'
                        );
                    }
                });
            });

        });
    </script>

</body>

</html>
