<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/tabelcuti.css">

	</head>

	
	<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sistem Cuti</a>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/approvecuti"> Pengajuan Mahasiswa Cuti</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/mahasiswacuti"> Mahasiswa Cuti</a>
      </li>
    
    </ul>
  </div>
</nav>

	
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Cuti Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


			<form action="<?= base_url('Cuticontroller/create') ?>" method="post">
				
				<?= csrf_field(); ?>

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
					<input  name="nama" class="form-control" id="nama" placeholder="Nama">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">NIM</label>
					<div class="col-sm-10">
					<input name="nim" class="form-control" id="nim" placeholder="NIM">
					</div>
				</div>
				
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">No telp</label>
					<div class="col-sm-10">
					<input name="no_telp" class="form-control" id="no_telp" placeholder="No telp">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Semester cuti</label>
					<div class="col-sm-10">
					<input name="semester" class="form-control" id="semester" placeholder="Semester cuti">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Alasan cuti</label>
					<div class="col-sm-10">
					<input name="alasan" class="form-control" id="alasan" placeholder="Alasan cuti">
					</div>
				</div>

				

				<div class="form-group row">

					<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Tambahkan Pengajuan</button>
					</div>
				</div>

			</form>



      </div>
      
    </div>
  </div>
</div>
	

		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					
					<h4 class="text-center mb-4">List Mahasiswa Cuti</h4>

					<br><br>

					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Nama</th>
					        <th>NIM</th>
					        <th>No telp</th>
					        <th>Semester cuti</th>
					        <th>Alasan cuti</th>
					        
					      </tr>
					    </thead>
					    <tbody>

						<?php foreach ($cuti as $cuti_item): ?>
							<tr>
					        <th scope="row" class="scope" ><?= $cuti_item['nama'] ?></th>
							<td><?= $cuti_item['nim'] ?></td>
					        <td><?= $cuti_item['no_telp'] ?></td>
					        <td><?= $cuti_item['semester'] ?></td>
					        <td><?= $cuti_item['alasan'] ?></td>
							
					      </tr>								
						<?php endforeach; ?>


					      
					      
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tablecuti.js"></script>

	</body>
</html>

