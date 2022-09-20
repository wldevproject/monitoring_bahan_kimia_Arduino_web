<?= $this->extend('templetes/admin_templete') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Asisten Lab</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Asisten Lab</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid px-4">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-address-card mr-2"></i>
                        Tambah Asisten Lab
                    </h3>
                </div>
                <div class="card-body">
                    <form id="addStudent" method="POST" action="">
                        <div class="row">
                            <div class="col-md-3 col-12 my-2 my-md-0">
                                <label for="npm" class="sr-only">NPM</label>
                                <input id="npm" type="text" class="form-control" name="npm" placeholder="NPM" required autofocus>
                            </div>
                            <div class="col-md-3 col-12 my-2 my-md-0">
                                <label for=" nama" class="sr-only">Nama</label>
                                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Siswa" required autofocus>
                            </div>
                            <div class="col-md-3 col-12 my-2 my-md-0">
                                <label for=" no_hp" class="sr-only">No Tlp</label>
                                <input id="no_hp" type="text" class="form-control" name="no_hp" placeholder="No Tlp" required autofocus>
                            </div>
                            <div class="col-md-3 col-12 my-2 my-md-0">
                                <label for=" password" class="sr-only">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button id="submitStudent" type="button" class="btn btn-outline-primary float-right btn-lg" style="margin-right: 5px;">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </div>

            <br>

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-address-card mr-2"></i>
                        Data Asisten Lab
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>No Tlp</th>
                            <th>Status</th>
                            <th>Password</th>
                            <th width="180" class="text-center">Action</th>
                        </tr>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Update Model -->
<form action="" method="POST" class="users-update-record-model form-horizontal">
    <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Update</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body" id="updateBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-success updateStudent">Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Delete Model -->
<form action="" method="POST" class="users-remove-record-model">
    <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-danger waves-effect waves-light deleteStudent">Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Skripsi.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>


<script>
    let data3 = sessionStorage.getItem('status');
    if (data3 != 'admin') {
        location.replace('<?= base_url() ?>/dashboard')
    }
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

    var lastIndex = 0;
    var keyNPM = "";
    const role = "Asisten Lab";

    // Get Data
    firebase.database().ref('users/').on('value', function(snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function(index, value) {
            if (value.status !== 'admin') {
                if (value) {
                    htmls.push('<tr>\
                    <td>' + value.npm + '</td>\
                    <td>' + value.nama + '</td>\
                    <td>' + value.no_hp + '</td>\
                    <td>' + value.status + '</td>\
                    <td>' + value.password + '</td>\
                    <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateStudent" data-id="' + index + '">Update</button>\
                    <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeStudent" data-id="' + index + '">Delete</button></td>\
                </tr>');
                }
            }
            // lastIndex = index;
        });
        $('#tbody').html(htmls);
        $("#submitStudent").removeClass('disabled');
    });

    // Add Data
    $('#submitStudent').on('click', function() {
        var values = $("#addStudent").serializeArray();
        var npm = values[0].value;
        var nama = values[1].value;
        var no_hp = values[2].value;
        var password = values[3].value;
        var status = role;

        firebase.database().ref('users/' + npm).set({
            npm: npm,
            nama: nama,
            no_hp: no_hp,
            password: password,
            status: status,
        });

        // Reassign lastID value
        // lastIndex = userID;
        $("#addStudent input").val("");
        // menampilkan alert
        alert("Berhasil menambah data");
    });

    // Update Data
    var updateID = 0;
    $('body').on('click', '.updateStudent', function() {
        updateID = $(this).attr('data-id');
        firebase.database().ref('users/' + updateID).on('value', function(snapshot) {
            var values = snapshot.val();
            var updateData = '<div class="form-group">\
                <label for="edit_nama" class="col-md-12 col-form-label">Nama</label>\
                <div class="col-md-12">\
                    <input id="edit_nama" type="text" class="form-control" name="edit_nama" value="' + values.nama + '" placeholder="Nama" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="edit_no_hp" class="col-md-12 col-form-label">No. Tlp</label>\
                <div class="col-md-12">\
                    <input id="edit_no_hp" type="text" class="form-control" name="edit_no_hp" value="' + values.no_hp + '" placeholder="No. Tlp" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="edit_password" class="col-md-12 col-form-label">Password</label>\
                <div class="col-md-12">\
                    <input id="edit_password" type="text" class="form-control" name="edit_password" value="' + values.password + '" placeholder="Password" required autofocus>\
                </div>\
            </div>';

            keyNPM = values.npm

            $('#updateBody').html(updateData);
        });
    });

    $('.updateStudent').on('click', function() {
        var values = $(".users-update-record-model").serializeArray();
        var postData = {
            nama: values[0].value,
            no_hp: values[1].value,
            password: values[2].value,
            npm: keyNPM,
            status: role
        };
        var updates = {};
        updates['/users/' + updateID] = postData;
        firebase.database().ref().update(updates);
        // menyembunyikan modal 
        $("#update-modal").modal('hide');
        // menampilkan alert
        alert("Berhasil mengubah data");
    });

    // Remove Data
    $("body").on('click', '.removeStudent', function() {
        var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });

    $('.deleteStudent').on('click', function() {
        var values = $(".users-remove-record-model").serializeArray();
        var id = values[0].value;
        firebase.database().ref('users/' + id).remove();
        $('body').find('.users-remove-record-model').find("input").remove();
        // menyembunyikan modal
        $("#remove-modal").modal('hide');
        // menampilkan alert
        alert("Berhasil menghapus data");
    });
    $('.remove-data-from-delete-form').click(function() {
        $('body').find('.users-remove-record-model').find("input").remove();
    });
</script>

<?= $this->endSection() ?>