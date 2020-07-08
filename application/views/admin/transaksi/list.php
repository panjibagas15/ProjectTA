<p>
	<a href="<?php echo base_url('admin/transaksi/tambah') ?>" class="btn btn-success btn-sm">
		<i class="nav-icon fa fa-plus"></i> Tambah Kasir</a>
</p>
<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA BAJU</th>
			<th>USERNAME</th>
			<th>BAYAR</th>
			<th>TANGGAL</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($transaksi as $transaksi) { ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $transaksi->NAMA_OBAT ?></td>
				<td><?php echo $transaksi->USERNAME ?></td>
				<td><?php echo $transaksi->BAYAR ?></td>
				<td><?php echo $transaksi->TGL_TRANSAKSI ?></td>
			</tr>
		<?php $no++; } ?>
	</tbody>
</table>