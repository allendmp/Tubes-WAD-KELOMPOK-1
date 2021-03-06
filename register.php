<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bansos - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">FORM PENDAFTARAN</h1>
                                    </div>
                                    <form class="user" method="post" action="act-register.php">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                Nama Lengkap<br>
                                                <input type="text" name="nama" class="form-control form-control-user" 
                                                    placeholder="Nama Lengkap" required>
                                            </div>
                                            <div class="col-sm-6">
                                                NIK<br>
                                                <input type="text" name="nik" class="form-control form-control-user" 
                                                    placeholder="NIK" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            Alamat<br>
                                            <input type="text" name="alamat" class="form-control form-control-user" 
                                                placeholder="Alamat" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                No HP<br>
                                                <input type="text" name="no_hp" class="form-control form-control-user" 
                                                    placeholder="No HP" required>
                                            </div>
                                            <div class="col-sm-6">
                                                Email<br>
                                                <input type="email" name="email" class="form-control form-control-user"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                Password<br>
                                                <input type="password" name="pass1" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password" required>
                                            </div>
                                            <div class="col-sm-6">
                                                Ulangi Password<br>
                                                <input type="password" name="pass2" class="form-control form-control-user"
                                                    id="exampleRepeatPassword" placeholder="Ulangi Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="role" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Daftar Sebagai RT</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">
                                                Daftar
                                            </button>
                                        </div>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Form Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>