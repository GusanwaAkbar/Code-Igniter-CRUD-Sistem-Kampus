<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kegiatan</title>
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
                Data Kegiatan
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
                    + Tambah Data Kegiatan
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Kegiatan</h5>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- KALAU ERROR -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- KALAU SUKSES -->
                                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                </div>
                                <!-- FORM INPUT DATA -->
                                <input type="hidden" id="inputId">
                                <div class="mb-3 row">
                                    <label for="inputKegiatan" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputKegiatan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputKomunitas" class="col-sm-4 col-form-label">ID Komunitas</label>
                                    <div class="col-sm-6">
                                        <select id="inputKomunitas" class="form-select">
                                            <option value="1">Ontaki</option>
                                            <option value="2">Weboender</option>
                                            <option value="3">ETH0</option>
                                            <option value="4">Mamud</option>
                                            <option value="5">Mocap</option>
                                            <option value="6">Fun Java</option>
                                            <option value="7">Uinbuntu</option>
                                            <option value="8">Uinux</option>
                                            <option value="9">Al-fataa</option>
                                            <option value="10">ISC</option>
                                            <option value="11">DSE</option>
                                            <option value="12">DSC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputDosen" class="col-sm-4 col-form-label">ID Dosen</label>
                                    <div class="col-sm-6">
                                        <select name="inputDosen" id="inputDosen">
                                            <option value="1">Juniardi Nur Fadila, M.T</option>
                                            <option value="2">Agung Teguh Wibowo Almais, M.T</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputLab" class="col-sm-4 col-form-label">ID Lab</label>
                                    <div class="col-sm-6">
                                        <select name="inputLab" id="inputLab">
                                            <option value="1">Laboratory of Digital & Robotic</option>
                                            <option value="2">Database Laboratory</option>
                                            <option value="3">Multimedia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputProposal" class="col-sm-4 col-form-label">Proposal</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputProposal">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputRencana" class="col-sm-4 col-form-label">Rencana Program</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputRencana">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPeserta" class="col-sm-4 col-form-label">Jumlah Peserta</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputPeserta">
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
                            <th>Nama Kegiatan</th>
                            <th>ID Komunitas</th>
                            <th>ID Dosen</th>
                            <th>ID Lab</th>
                            <th>Proposal</th>
                            <th>Rencana</th>
                            <th>Peserta</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataKegiatan as $k => $v) {
                            $nomor = $nomor + 1;
                        ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $v['nama_kegiatan'] ?></td>
                                <td><?php echo $v['komunitas_id'] ?></td>
                                <td><?php echo $v['dosen_id'] ?></td>
                                <td><?php echo $v['lab_id'] ?></td>
                                <td><?php echo $v['proposal'] ?></td>
                                <td><?php echo $v['rencana_program'] ?></td>
                                <td><?php echo $v['jumlah_peserta'] ?></td>
                                <td>
                                    <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="edit(<?php echo $v['id_kegiatan'] ?>)">Edit</button> -->
                                    <button type="button" class="btn btn-success btn-sm" onclick="hapus(<?php echo $v['id_kegiatan'] ?>)">Delete</button>

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
                window.location = "<?php echo site_url("Kegiatan/hapus") ?>/" + $id;
            }
        }

        function edit($id) {
            $.ajax({
                url: "<?php echo site_url("Kegiatan/edit") ?>/" + $id,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.id != '') {
                        $('#inputId').val($obj.id);
                        $('#inputKegiatan').val($obj.kegiatan);
                        $('#inputKomunitas').val($obj.komunitas);
                        $('#inputDosen').val($obj.dosen);
                        $('#inputLab').val($obj.lab);
                        $('#inputProposal').val($obj.proposal);
                        $('#inputRencana').val($obj.rencana);
                        $('#inputPeserta').val($obj.peserta);
                    }
                }

            });
        }

        function bersihkan() {
            $('#inputId').val('');
            $('#inputKegiatan').val('');
            $('#inputKomunitas').val('');
            $('#inputDosen').val('');
            $('#inputLab').val('');
            $('#inputProposal').val('');
            $('#inputRencana').val('');
            $('#inputPeserta').val('');
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
            var $kegiatan = $('#inputKegiatan').val();
            var $komunitas = $('#inputKomunitas').val();
            var $dosen = $('#inputDosen').val();
            var $lab = $('#inputLab').val();
            var $proposal = $('#inputProposal').val();
            var $rencana = $('#inputRencana').val();
            var $peserta = $('#inputPeserta').val();

            $.ajax({
                url: "<?php echo site_url("Kegiatan/simpan") ?>",
                type: "POST",
                data: {
                    id_dosen: $id,
                    nama_kegiatan: $kegiatan,
                    komunitas_id: $komunitas,
                    dosen_id: $dosen,
                    lab_id: $lab,
                    proposal: $proposal,
                    rencana_kegiatan: $rencana,
                    jumlah_peserta: $peserta,
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