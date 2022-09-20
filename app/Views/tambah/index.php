<?= $this->extend('templetes/admin_templete') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Bahan Kimia</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Bahan Kimia</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid px-4">
      <h5 class="mb-2">Info Box</h5>
      <div class="flex row">
        <!-- /.col -->
        <div class="col-sm rounded-3 mx-2">
          <div class="info-box rounded-3">
            <div class="p-2 align-content-center">
              <img id="myImgA" src="dist/img/ic_low_a.svg" alt="img" height="100" width="120" />
              <p class="text-center mt-2">Alkohol</p>
            </div>
            <div class="info-box-content ">
              <span class="h1 info-box-number alkohol" id="box1"></span>
              <span class="info-box-text ">Sisa Bahan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm rounded-3 mx-2">
          <div class="info-box rounded-3">
            <div class="p-2 align-content-center">
              <img id="myImgB" src="dist/img/ic_low_b.svg" alt="img" height="100" width="120" />
              <p class="text-center mt-2">Spirtus</p>
            </div>
            <div class="info-box-content ">
              <span class="h1 info-box-number spirtus" id="box2"></span>
              <span class="info-box-text">Sisa Bahan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm rounded-3 mx-2">
          <div class="info-box rounded-3">
            <div class="p-2 align-content-center">
              <img id="myImgC" src="dist/img/ic_low_c.svg" alt="img" height="100" width="120" />
              <p class="text-center mt-2">Akuades</p>
            </div>
            <div class="info-box-content ">
              <span class="h1 info-box-number akuades" id="box3"></span>
              <span class="info-box-text">Sisa Bahan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid px-4">
      <h5 class="mb-2">Manajemen Data</h5>
      <div class="flex row">
        <div class="col-md-3">
          <div class="flex row">
            <!-- /.col -->
            <div class="col-sm-12 h-75 my-2">
              <input id="toggle-event-b1" type="checkbox" data-onstyle="primary" checked data-toggle="toggle" data-on="Box 1 Terkunci" data-style="slow" data-off="Box 1 Terbuka" data-width="200" data-height="100">
              <!-- <input id="toggle-silent" type="checkbox" data-toggle="toggle" onchange="$('#chgConsole').text(new Date().toISOString()+' ... change event fired!')"> -->
              <div id="waktu"></div>
            </div>
            <!-- /.col -->
            <div class="col-sm-12 h-75 my-2">
              <input id="toggle-event-b2" type="checkbox" data-onstyle="success" checked data-toggle="toggle" data-on="Box 2 Terkunci" data-style="slow" data-off="Box 2 Terbuka" data-width="200" data-height="100">
            </div>
            <!-- /.col -->
            <div class="col-sm-12 h-75 my-2">
              <input id="toggle-event-b3" type="checkbox" data-onstyle="danger" checked data-toggle="toggle" data-on="Box 3 Terkunci" data-style="slow" data-off="Box 3 Terbuka" data-width="200" data-height="100">
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Penambahan Bahan kimia</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Alkohol</th>
                    <th>Spirtus</th>
                    <th>Akuades</th>
                    <th>Waktu</th>
                    <th width="100" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
                <tfoot>
                  <tr>
                    <th>Alkohol</th>
                    <th>Spirtus</th>
                    <th>Akuades</th>
                    <th>Waktu</th>
                    <th width="100" class="text-center">Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper -->

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
  var idT = moment().format().toLocaleString().slice(0, 10);

  var datawaktu = "";
  $(document).ready(function() {
    var interval = setInterval(function() {
      var momentNow = moment();
      // $("#waktu").html(momentNow.format("hh:mm:ss"));
      datawaktu = (idT + momentNow.format("hh:mm:ss")).replace(/-|T|:/gi, '');
    }, 100);
  });

  let nama = sessionStorage.getItem('nama');
  let npm = sessionStorage.getItem('npm');
  let status = sessionStorage.getItem('status');

  var lastIndex = 0;
  var keyNPM = "";
  const role = "Asisten Lab";

  var boxA = 0;
  var boxB = 0;
  var box3 = 0;

  firebase.database().ref('sensors/LoadCell').on('value', function(snapshot) {
    var value = snapshot.val();
    boxA = parseInt(value.box1)
    boxB = parseInt(value.box2)
    boxC = parseInt(value.box3)

    $('#box1').html(boxA + "ml");
    $('#box2').html(boxB + "ml");
    $('#box3').html(boxC + "ml");

    if (boxA > 700) {
      document.getElementById("myImgA").src = "dist/img/ic_full_a.svg";
    } else if (boxA > 500) {
      document.getElementById("myImgA").src = "dist/img/ic_medium_a.svg";
    } else if (boxA > 0) {
      document.getElementById("myImgA").src = "dist/img/ic_low_a.svg";
    }
    if (boxB > 700) {
      document.getElementById("myImgB").src = "dist/img/ic_full_b.svg";
    } else if (boxB > 500) {
      document.getElementById("myImgB").src = "dist/img/ic_medium_b.svg";
    } else if (boxB > 0) {
      document.getElementById("myImgB").src = "dist/img/ic_low_b.svg";
    }
    if (boxC > 700) {
      document.getElementById("myImgC").src = "dist/img/ic_full_c.svg";
    } else if (boxC > 500) {
      document.getElementById("myImgC").src = "dist/img/ic_medium_c.svg";
    } else if (boxC > 0) {
      document.getElementById("myImgC").src = "dist/img/ic_low_c.svg";
    }
  });

  // Get Data
  firebase.database().ref('penambahan/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value) {
      if (value) {
        if (data3 != 'admin') {
          htmls.push('<tr>\
                <td>' + value.alkohol + '</td>\
                <td>' + value.spirtus + '</td>\
                <td>' + value.aquades + '</td>\
                <td>' + value.waktu + '</td>\
                <td class="text-center"><button id="testing" data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeStudent" data-id="' + index + '" disabled>Delete</button></td>\
            </tr>');
        } else {
          htmls.push('<tr>\
                <td>' + value.alkohol + '</td>\
                <td>' + value.spirtus + '</td>\
                <td>' + value.aquades + '</td>\
                <td>' + value.waktu + '</td>\
                <td class="text-center"><button id="testing" data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeStudent" data-id="' + index + '">Delete</button></td>\
            </tr>');
        }
      }
      // lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitStudent").removeClass('disabled');

    var box1Status = 0;
    var box2Status = 0;
    var box3Status = 0;
    var box1Data = 0
    var box2Data = 0
    var box3Data = 0
    var box1Result = 0
    var box2Result = 0
    var box3Result = 0

    $(function() {
      $('#toggle-event-b1').change(function() {
        let hasil = '';
        if ($(this).is(':checked')) {
          if (box1Status == 1) {
            box1Status = 0;
            box1Result = boxA - box1Data
            if (box1Result != 0) {
              // console.log(box1Result, box2Result, box3Result)
              writeUserData(nama, npm, box1Result, box2Result, box3Result)
            }
          } else {
            box1Data = boxA;
          }
          box1Result = 0;
          hasil = 0;
        } else {
          box1Status = 1
          box1Data = boxA;
          hasil = 1;
        }
        firebase.database().ref('control/' + 'door1').set(hasil);
      })
    });

    $(function() {
      $('#toggle-event-b2').change(function() {
        let hasil = '';
        if ($(this).is(':checked')) {
          if (box2Status == 1) {
            box2Status = 0;
            box2Result = boxB - box2Data
            if (box2Result != 0) {
              // console.log(box1Result, box2Result, box3Result)
              writeUserData(nama, npm, box1Result, box2Result, box3Result)
            }
          } else {
            box2Data = boxB;
          }
          box2Result = 0;
          hasil = 0;
        } else {
          box2Status = 1
          box2Data = boxB;
          hasil = 1;
        }
        firebase.database().ref('control/' + 'door2').set(hasil);
      })
    });

    $(function() {
      $('#toggle-event-b3').change(function() {
        let hasil = '';
        if ($(this).is(':checked')) {
          if (box3Status == 1) {
            box3Status = 0;
            box3Result = boxC - box3Data
            if (box3Result != 0) {
              // console.log(box1Result, box2Result, box3Result)
              writeUserData(nama, npm, box1Result, box2Result, box3Result)
            }
          } else {
            box3Data = boxC;
          }
          box3Result = 0;
          hasil = 0;
        } else {
          box3Status = 1
          box3Data = boxC;
          hasil = 1;
        }
        firebase.database().ref('control/' + 'door3').set(hasil);
      })
    });

    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "retrieve": true,
        "lengthChange": false,
        "autoWidth": false,
        "order": [
          [3, "desc"]
        ],
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  });

  function writeUserData(name, npm, alkohol, spirtus, aquades) {
    firebase.database().ref('penambahan/' + datawaktu).set({
      nama: name,
      npm: npm,
      alkohol: alkohol,
      spirtus: spirtus,
      aquades: aquades,
      waktu: moment().format().toLocaleString().slice(0, 16).replace(/T/, ' ')
    });
  }

  firebase.database().ref('control').on('value', function(snapshot) {
    var value = snapshot.val();
    var doorA = value.door1
    var doorB = value.door2
    var doorC = value.door3

    if (doorA == 0) {
      $('#toggle-event-b1').bootstrapToggle('on');
    } else {
      $('#toggle-event-b1').bootstrapToggle('off');
    }
    if (doorB == 0) {
      $('#toggle-event-b2').bootstrapToggle('on');
    } else {
      $('#toggle-event-b2').bootstrapToggle('off');
    }
    if (doorC == 0) {
      $('#toggle-event-b3').bootstrapToggle('on');
    } else {
      $('#toggle-event-b3').bootstrapToggle('off');
    }
  });

  // Remove Data
  if (status == 'admin') {
    $("body").on('click', '.removeStudent', function() {
      var id = $(this).attr('data-id');
      $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });

    $('.deleteStudent').on('click', function() {
      var values = $(".users-remove-record-model").serializeArray();
      var id = values[0].value;
      firebase.database().ref('penambahan/' + id).remove();
      $('body').find('.users-remove-record-model').find("input").remove();
      // menyembunyikan modal
      $("#remove-modal").modal('hide');
      // menampilkan alert
      // alert("Berhasil menghapus data");
    });
    $('.remove-data-from-delete-form').click(function() {
      $('body').find('.users-remove-record-model').find("input").remove();
    });
  }
</script>
<?= $this->endSection() ?>