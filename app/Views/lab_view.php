<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .container {
            max-width: 1200px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Komunitas UIN Malang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost:8080/komunitas">Komunitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/lab">Lab</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/kegiatan">Kegiatan</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- CONTAINER -->
    <div class="container">
        <!-- CARD -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Data Lab
            </div>
            <div class="card-body">
                <!-- LOKASI TEXT PENCARIAN -->
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php echo $katakunci ?>" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
                <!-- MODAL -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data Lab
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Lab</h5>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- KALAU ERROR -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- KALAU SUKSES -->
                                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                </div>
                                <!-- Form Input Data -->
                                <div class="mb-3 row">
                                    <label for="inputLab" class="col-sm-4 col-form-label">Nama Lab</label>
                                    <div class="col-sm-6">
                                        <select id="inputLab" class="form-select">
                                            <option value="Robotik">Robotik</option>
                                            <option value="multimedia">Multimedia & Smart System</option>
                                            <option value="Database">Database</option>
                                            <option value="Programming">Programming</option>
                                            <option value="Komputernetwork">Komputer Network</option>
                                            <option value="HPC">HPC</option>
                                            <option value="Intelligencesystem">Intelligence System</option>
                                            <option value="Softwareengineering">Software Engineering</option>
                                            <option value="Technopreneurship">Technopreneurship</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputDosen" class="col-sm-4 col-form-label">Ketua Lab</label>
                                    <div class="col-sm-6">
                                        <select name="inputDosen" id="inputDosen">
                                            <option value="1">Juniardi Nur Fadila, M.T</option>
                                            <option value="2">Agung Teguh Wibowo Almais, M.T</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputKapasitas" class="col-sm-4 col-form-label">Kapasitas</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputKapasitas" />
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lab</th>
                            <th>Ketua Lab</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataLab as $k => $v) {
                            $nomor = $nomor + 1;
                        ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $v['nama_lab'] ?></td>
                                <td><?php echo $v['ketua_lab'] ?></td>
                                <td><?php echo $v['kapasitas'] ?></td>
                                <td>
                                    <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="edit(<?php echo $v['id_lab'] ?>)">Edit</button> -->
                                    <button type="button" class="btn btn-success btn-sm" onclick="hapus(<?php echo $v['id_lab'] ?>)">Delete</button>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                $linkPagination = $pager->links();
                $linkPagination = str_replace('<li class="active">', '<li class="page-item active">', $linkPagination);
                $linkPagination = str_replace('<li>', '<li class="page-item">', $linkPagination);
                $linkPagination = str_replace("<a", "<a class='page-link'", $linkPagination);
                echo $linkPagination;
                ?>
            </div>
        </div>
    </div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function hapus($id) {
            var result = confirm('Yakin mau melakukan proses delete');
            if (result) {
                window.location = "<?php echo site_url("lab/hapus") ?>/" + $id;
            }
        }

        function edit($id) {
            $.ajax({
                url: "<?php echo site_url("lab/edit") ?>/" + $id,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.id != '') {
                        $('#inputId').val($obj.id);
                        $('#inputLab').val($obj.lab);
                        $('#inputDosen').val($obj.dosen);
                        $('#inputKapasitas').val($obj.kapasitas);
                    }
                }

            });
        }

        function bersihkan() {
            $('#inputId').val('');
            $('#inputLab').val('');
            $('#inputDosen').val('');
            $('#inputKapasitas').val('');
        }
        $('.tombol-tutup').on('click', function() {
            if ($('.sukses').is(":visible")) {
                window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
            }
            $('.alert').hide();
            bersihkan();
        });

        $('#tombolSimpan').on('click', function() {
            var $id = $('#inputId').val();
            var $lab = $('#inputLab').val();
            var $dosen = $('#inputDosen').val();
            var $kapasitas = $('#inputKapasitas').val();

            $.ajax({
                url: "<?php echo site_url("lab/simpan") ?>",
                type: "POST",
                data: {
                    id_lab: $id,
                    nama_lab: $lab,
                    ketua_lab: $dosen,
                    kapasitas: $kapasitas
                },
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
                        $('.sukses').hide();
                        $('.error').show();
                        $('.error').html($obj.error);
                    } else {
                        $('.error').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.sukses);
                    }
                }
            });
            bersihkan();

        });
    </script>
</body>

</html>