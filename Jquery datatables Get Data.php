      <div class="row">
      	<div class="col-md-12">
      		<div class="tile">
      			<h3 class="tile-title">mstServiceAgreement List</h3>
      			<div class="tile-footer">
      				<a href="<?= base_url('/Mst_service_agreement/ins_view'); ?>">
      					<button class="btn btn-primary my-3" type="button">
      						<i class="fa fa-fw fa-lg fas fa-plus-circle "></i>New
      					</button>
      				</a>
      			</div>
      			<div class="tile-body">
      				<!-- TABLE -->
      				<div class="table-responsive">
      					<table class="table table-hover table-bordered" id="mstServiceAgreement">
      						<thead>
      							<tr>
      								<th>Doc Id</th>
      								<th>Data Type</th>
      								<th>Company Name</th>
      								<th>Doc No</th>
      								<th>Client Name</th>
      								<th>Contract Title</th>
      								<th>Contract No</th>
      								<th>Amount</th>
      								<th>Explanation</th>
      								<th>Start Period</th>
      								<th>Expired Period</th>
      								<th>Filename</th>
      								<th>Edit</th>
      							</tr>
      						</thead>
      						<tbody>
      							<!-- <tr> -->
      							<!-- <td>doc_id</td> -->
      							<!-- <td>data_type</td> -->
      							<!-- <td>company_name</td> -->
      							<!-- <td>doc_no</td> -->
      							<!-- <td>client_name</td> -->
      							<!-- <td>contract_title</td> -->
      							<!-- <td>contract_no</td> -->
      							<!-- <td>amount</td> -->
      							<!-- <td>explanation</td> -->
      							<!-- <td>start_period</td> -->
      							<!-- <td>expired_period</td> -->
      							<!-- <td>file_remarks</td> -->
      							<!-- <td>file_original</td> -->
      							<!-- <td>finished_project</td> -->
      							<!-- <td>filename</td> -->
      							<!-- <td>remarks</td> -->
      							<!-- <td>upload_time</td> -->
      							<!-- <td>pic_input</td> -->
      							<!-- <td>input_time</td> -->
      							<!-- <td>pic_edit</td> -->
      							<!-- <td>edit_time</td> -->
      							<!-- <td>Link Edit</td> -->
      							<!-- </tr> -->
      						</tbody>
      					</table>
      				</div>
      			</div>
      		</div> <!-- class="tile" -->
      	</div> <!-- class="col-md-12" -->
      </div> <!-- class="row" -->
      <!-- ***Using Valid js Path -->
<script>
      	$(document).ready(function() {
      		var baseUrl = '<?php echo base_url() ?>';
      		/* START AJAX FOR LOAD DATA */
      		$.ajax({
      			/* ***Url is here */
      			url: "<?= base_url(); ?>/Mst_service_agreement/getAll",
      			method: "POST",
      			success: function(data) {
      				// alert(data);
      				let srcData = JSON.parse(data);
      				/* Edit Url Controller is here */
      				/* ***Using Valid Path */
      				let updUrl = "<?= base_url(); ?>/Mst_service_agreement/upd_view/";
      				/* START TABLE */
      				let mstServiceAgreement = $("#mstServiceAgreement").DataTable({
      					"paging": true,
      					"ordering": true,
      					"info": true,
      					"filter": true,
      					"autoWidth": true,
      					"columnDefs": [{
      							/* Hide Table Id */
      							"targets": [0],
      							"visible": false,
      							"searchable": false
      						},
      						{
      							/* Column For Edit Link, (ex : 5) depend on last column no */
      							"targets": 12,
      							"data": "download_link",
      							"render": function(data, type, row, meta) {
      								/* Change table_id with primary key of your table  */
      								return '<a class="btn btn-success" href="' + updUrl + row['doc_id'] + '">Edit</a>';
      							}
      						},
      						{
      							/* Column For Edit Link, (ex : 5) depend on last column no */
      							"targets": 11,
      							"data": "download_link",
      							"render": function(data, type, row, meta) {
      								/* Change table_id with primary key of your table  */
      								return '<a class="btn btn-success" href="<?= base_url(); ?>/uploads/berkas/Agreement/' + row['filename'] + '" download>' + row['filename'] + '</a>';
      							}
      						}
      					],
      					data: srcData,
      					columns: [{
      							data: "doc_id"
      						},
      						{
      							data: "data_type"
      						},
      						{
      							data: "company_name"
      						},
      						{
      							data: "doc_no"
      						},
      						{
      							data: "client_name"
      						},
      						{
      							data: "contract_title"
      						},
      						{
      							data: "contract_no"
      						},
      						{
      							data: "amount"
      						},
      						{
      							data: "explanation"
      						},
      						{
      							data: "start_period"
      						},
      						{
      							data: "expired_period"
      						},
      						{
      							data: "filename"
      						},

      					]
      				})
      				/* END TABLE */
      			}
      		});
      		/* END AJAX FOR LOAD DATA */
      	});
      </script>
