<?php
  //Errro upload
  
	// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

	// Form Open
echo form_open_multipart(base_url('admin/transaksi/tambah'),' class="form_horizontal"');
?>

<div class="card card-primary">
	<div class="card-header"></div>
	<form role="form">
		<div class="card-body">
			<div class="form-group">
				<label>Nama Obat</label>
				<select name="ID_OBAT"class="form-control">
					<?php foreach ($obat as $obat) {?>
						<option value="<?php echo $obat->ID_OBAT ?>">
							<?php echo $obat->NAMA_OBAT ?>
						</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Username</label>
				<select name="ID_USER"class="form-control">
					<?php foreach ($user as $user) {?>
						<option value="<?php echo $user->ID_USER ?>">
							<?php echo $user->USERNAME?>
						</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Total Harga</label>
				<input type="text" name="BAYAR" class="form-control" placeholder="harga Total" value="<?php echo set_value('BAYAR') ?>" required>
			</div>
			
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
				<button type="reset" name="reset" class="btn btn-danger"><i class="fa fa-times"></i> Reset</button>
			</div>
		</div>
	</form>
</div>

<?php echo form_close(); ?>