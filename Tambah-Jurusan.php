<?php
if (isset($_POST['nama_jurusan'])) {
	$nm_jurusan = $_POST['nama_jurusan'];

	$query = mysqli_query($koneksi, "INSERT INTO jurusan (nm_jurusan) VALUES('$nm_jurusan')");

	if ($query) {
		echo '<script>alert("Data Berhasil di Tambah");location.href="?page=jurusan"</script>';
	}
}
?>



<h1 class="h3 mb-3">Tambah Jurusan</h1>

					

					<div class="row">
						<div class="col-12">
							<div class="card flex-fill">
							 
							<div>
								<div class="card-body">
								    <form method="post">
								    	<div class="mb-3">
								    		<label class="form-label">Nama Jurusan</label>
								    		<div class="col-12">
								    			<input type="text" name="nama_jurusan" class="form-control">
								    		</div>
								    	</div>
								    	<div class="mb-3">
								    		<button class="btn btn-primary">Simpan</button>
								    	</div>
								    </form>
								</div>
							</div>
                        </div>
                    </div>  