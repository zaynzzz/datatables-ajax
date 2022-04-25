<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bootstrap Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

</head>

<body>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<h3 class="tile-title">Data List</h3>
				<div class="tile-body">
					<!-- TABLE -->
					<div class="table-responsive">
						<table class="table table-hover table-bordered" id="mytable">
							<thead>
								<tr>
									<th>Doc Id</th>
									<th>Data Type</th>
									<th>Company Name</th>
									<th>Doc No</th>
									<th>Client Name</th>
									<th>Contract Title</th>
									<th>Contract No</th>
									<th>Edit</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div> <!-- class="tile" -->
		</div> <!-- class="col-md-12" -->
	</div> <!-- class="row" -->
	<!-- ***Using Valid js Path -->
	<script>
		$(document).ready(function() {
			$.ajax({
				type: "POST",
				url: "<?= base_url('Home/getAll'); ?>",
				success: function(data) {
					// alert(data);
					const srcData = JSON.parse(data);
					// alert(srcData);
					$("#mytable").DataTable({
						data: srcData,
						columns: [{
								data: "id"
							},
							{
								data: "name"
							},
							{
								data: "email"
							},
							{
								data: "address"
							},
							{
								data: "country"
							},
							{
								data: "numberrange"
							},
							{
								data: "region"
							},
						]
					});
				}
			});

		});
	</script>
</body>

</html>
