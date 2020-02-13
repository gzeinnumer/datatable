<!DOCTYPE html>
<html>
<head>
	<title>Latihan Datatable</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

<style type="text/css">

.container{
	margin-top: 50px;
}

</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<table class="table table-striped table-desa">
					<thead>
						<tr>
							<th style="width:50px">No</th>
							<th>Nama Desa/Kelurahan</th>
						</tr>
					</thead>
				</table>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.min.js') ?>"></script>

	<script type="text/javascript">

	$(".table-desa").DataTable({
		ordering: false,
		processing: true,
		serverSide: true,
		ajax: {
			url: "<?php echo base_url('index.php/table/ambil_data') ?>",
			type:'POST',
		}
	});

	</script>


</body>
</html>