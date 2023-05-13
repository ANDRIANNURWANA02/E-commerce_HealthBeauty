<?php
require_once './templetes/nav.php';
?>

<?php
// // Membuat koneksi ke database
require_once 'dbkoneksi.php';
?>
<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
	// ambil data order berdasarkan id
	$sql = "SELECT * FROM pembelian WHERE id=?";
	$st = $dbh->prepare($sql);
	$st->execute([$_id]);
	$row = $st->fetch();
} else {
	// jika tidak ada parameter id pada URL, maka dianggap input data baru
	// inisialisasi variabel $row sebagai array kosong
	$row = [];
}
?>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 ftco-animate">
				<div class="col-md-12">
					<div class="cart-detail billing-form p-3 p-md-4">

						<form class="billing-form" method="post" action="proses-beli.php">
							<input type="hidden" name="id_produk" value="123">
							<input type="hidden" name="nama_produk" value="Produk A">
							<h3 class="billing-heading mb-4">Metode Pembayaran</h3>
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="form-group">
										<label for="nama_pelanggan">Nama pelanggan:</label>
										<input class="form-control" type="text" name="nama_pelanggan"
											id="nama_pelanggan">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">									
									<label for="jumlah_beli">Jumlah beli:</label>
										<input class="form-control" type="number" name="jumlah_beli" id="jumlah_beli">
									</div>
								</div>
							</div>
							<div class="row align-items-end">

								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="harga_satuan">Harga Satuan:</label>
										<input class="form-control" type="number" name="harga_satuan" id="harga_satuan">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="total_harga">Total harga:</label>
										<input class="form-control" type="number" name="total_harga" id="total_harga">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat_pelanggan">Alamat pelanggan:</label>
										<textarea class="form-control" name="alamat_pelanggan"
											id="alamat_pelanggan"></textarea>
									</div>
								</div>
								<?php
								$button = (empty($_id)) ? "Simpan" : "Update";
								?>
								<input class="btn btn-primary py-3 px-4" type="submit" name="submit" id="submit"
									value="Beli sekarang">
						</form>
					</div>
				</div>
			</div>
		</div> <!-- .col-md-8 -->
	</div>
	</div>
</section> <!-- .section -->


<?php
require_once './templetes/foot.php';
?>