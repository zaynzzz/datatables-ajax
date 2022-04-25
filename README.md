# datatables-ajax


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
