<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
        rel="stylesheet"
      />
        <link href="assets/css/login-styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets\img\favicon.png" />
        <script
            data-search-pseudo-elements=""
            defer=""
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- Basic login form-->
                                <div
                                    class="card shadow-lg border-0 rounded-lg mt-5"
                                >
                                    <div
                                        class="card-header justify-content-center"
                                    >
                                        <h3 class="font-weight-light my-4">
                                            Login
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Login form-->
                                        <form
                                            method="post"
                                            action="/loginproses"
                                        >
                                            @csrf
                                            <!-- Form Group (email address)-->
                                            <div class="form-group">
                                                <label
                                                    class="small mb-1"
                                                    for="email"
                                                    >Email</label
                                                >
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    type="email"
                                                    placeholder="Enter email address"
                                                    name="email"
                                                    required
                                                />
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="form-group">
                                                <label
                                                    class="small mb-1"
                                                    for="inputPassword"
                                                    >Password</label
                                                >
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    placeholder="Enter password"
                                                    name="password"
                                                    required
                                                />
                                            </div>
                                            <!-- Form Group (remember password checkbox)-->

                                            <!-- Form Group (login box)-->
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"
                                            >                                
                                                <button
                                                    class="btn btn-dark"
                                                    type="submit"
                                                >
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col">
                                                <div class="small">
                                                    <a href="/"
                                                        >Go back to homepage?</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="small">
                                                    <a href="/register"
                                                        >Need an account? Sign
                                                        up!</a
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer mt-auto footer-dark">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">
                                Copyright &#xA9; D'Barbershop
                            </div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="js\scripts.js"></script>

        <script src="js\sb-customizer.js"></script>
        <!-- <sb-customizer project="sb-admin-pro"></sb-customizer> -->
    </body>
</html>
