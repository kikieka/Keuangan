<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content-header">
	<h2>
		<center>UPDATE DATA OPERASIONAL</center>
	</h2>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-dashboard"></i>Home</a>
			</li>
			<li class="active">Transaksi</li>
		</ol>
<!DOCTYPE>
<html>
<head>
</head>
<body>
<?php
	foreach($financial as $transaksi){ ?>
		<form  action="<?php echo base_url();?>C_operasional/do_edit" method="POST">
		<tr>
		<td>Tanggal Operasional</td>
		<td>
		<input type="hidden" name="id_transaksi" value="<?php echo $transaksi->id_transaksi ?>"
		</td>
		<td>
		<input type="date" name="tanggal" class="form-control" value="<?php echo $transaksi->tanggal ?>"
		</td>
		<td>ID Member</td>
		<td><input type="text" name="role" class="form-control" value="<?php echo $transaksi->id_member ?>"
		</td>
		<td>ID Kategori</td>
		<td><input type="text" name="role" class="form-control" value="<?php echo $transaksi->id_kategori ?>"
		</td>
		<td>Tipe Operasional</td>
		<td><input type="text" name="role" class="form-control" value="<?php echo $transaksi->tipe ?>"
		</td>
		<td>Jumlah Transaksi</td>
		<td><input type="text" name="role" class="form-control" value="<?php echo $transaksi->jml_transaksi ?>"
		</td>
		<td>Keterangan Dana Operasional</td>
		<td><input type="text" name="role" class="form-control" value="<?php echo $transaksi->keterangan ?>"
		</td>
		<br>
		<td><button type="submit" class="btn btn-success">Update</button>
		</td>
		</tr>
		</table>
		</form>
	<?php }
?>
</div>
</body>
</html>

<?php
$this->load->view('template/js');
?>

		<!--tambahkan custom js disini-->
		<!-- jQuery UI 1.11.2 -->
		<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		    $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Morris.js charts -->
		<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
		<!-- Sparkline -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
		<!-- jvectormap -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
		<!-- daterangepicker -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
		<!-- datepicker -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>