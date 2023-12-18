<?php 

include ('vendor/konek.php')

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="lg.css">
  </head>

  <body>

      <?php 

      $data_siswa = mysqli_query($kon, "SELECT * FROM tb_siswa where NO =".$_GET[ 'id']);
      foreach ($data_siswa as $key) {
		$id = $key['NO'];
        $nama = $key['NAMA'];
        $kelas = $key['KELAS'];
 	    $jurusan = $key['JURUSAN'];
 	    $alamat = $key['ALAMAT'];
 	    $jk = $key['JK'];
 	    			
      }
      ?>

      <div id="liveAlertPlaceholder"></div>

      <h1>
        <?= $nama; ?>
      </h1>

  <!-- form -->
  <h4 class="text-center m-3">Input Data siswa</h4>
	 <form action="vendor/sistem.php?id=<?=$id;?>" method="post" class="container rounded mt-3 p-3" style=" width:500px; border:solid black 2px; ">
		<div class="mb-3"> 
			<label for="exampleInputEmail1" class="form-label">Nama </label>
			<input type="text" value="<?= $nama; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="enamaweb"> 
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Kelas</label>
			<input type="text" value="<?= $kelas; ?>" class="form-control" id="exampleInputPassword1" name="ekelasweb">
		</div> 
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Jurusan</label>
			<input type="text" value="<?= $jurusan; ?>" class="form-control" id="exampleInputPassword1" name="ejurusanweb">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Alamat</label>
			<input type="text" value="<?= $alamat; ?>" class="form-control" id="exampleInputPassword1" name="ealamatweb">
		</div> 
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Jk</label>
			<input type="text" value="<?= $jk; ?>" class="form-control" id="exampleInputPassword1" name="ejkweb">
		</div>
		
		<button type="submit" class="btn btn-outline-info" id="liveAlertBtn">Simpan</button>

		
	</form> 
<!-- form end -->

    














</form>





















  </body>
