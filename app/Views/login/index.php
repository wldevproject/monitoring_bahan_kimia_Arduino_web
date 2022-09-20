<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Monitoring Bahan Kimia| Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>LOGIN</b> USER</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">Web Monitoring Bahan Kimia</p>
                <!-- <?= base_url() ?>/dashboard -->
                <form action="" id="getStudent" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukan NPM" name="username" required id="username" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required id="password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <!-- /.col -->
                        <div class="col">
                            <button id="submitStudent" type="button" class="btn btn-block btn-primary">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.card-body -->
        </div>

        <span id="getUser"></span>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

    <script>
        // Initialize Firebase
        var firebaseConfig = {
            apiKey: "<?= ENV('apiKey') ?>",
            authDomain: "<?= ENV('authDomain') ?>",
            databaseURL: "<?= ENV('databaseURL') ?>",
            storageBucket: "<?= ENV('storageBucket') ?>",
            messagingSenderId: "<?= ENV('messagingSenderId') ?>",
            appId: "<?= ENV('appId') ?>",
            measurementId: "<?= ENV('measurementId') ?>",
            appId: "<?= ENV('appId') ?>"
        };
        firebase.initializeApp(firebaseConfig);

        var database = firebase.database();
        var base_url = '<?= base_url() ?>';
        var lastIndex = 0;
        var keyNPM = "";
        const role = "Asisten Lab";

        // Add Data
        $('#submitStudent').on('click', function() {
            var values = $("#getStudent").serializeArray();
            var userId = values[0].value;
            var password = values[1].value;

            let pesan = '';
            const dbRef = firebase.database().ref();
            dbRef.child("users").child(userId).get().then((snapshot) => {
                var value = snapshot.val();
                if (snapshot.exists()) {
                    if (password == value.password) {
                        Cookies.set('test', value.nama)

                        if (typeof(Storage) !== "undefined") {
                            // Store
                            sessionStorage.setItem("nama", value.nama);
                            sessionStorage.setItem("npm", value.npm);
                            sessionStorage.setItem("status", value.status);
                            location.replace(base_url + "/dashboard")

                            // console.log(value);
                            // $('#getUser').html(value);
                            pesan = ' Test Selamat Datang : ' + value.nama
                        } else {
                            document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
                        }
                    } else if (password == '' || password == null) {
                        pesan = 'Kata sandi tidak boleh kosong'
                    } else {
                        pesan = 'Kata sandi Salah'
                    }
                } else {
                    console.log("No data available");
                    pesan = 'Data Tidak ada'
                }
                alert(pesan);
            }).catch((error) => {
                console.error(error);
                pesan = 'error gan'
                alert(pesan);
            })

        });
    </script>

</body>

</html>