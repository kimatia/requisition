<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title></title>

	<link rel="stylesheet" type="text/css" href="datatables.css"/>
</head>
<body>

	<div id="container-fluid">
		<table class="display" id="example" style="width:100%">
			<thead>
				<tr><th>ID NO:</th>
				<th>Name:</th>
				<th>Email:</th></tr>
			</thead>
			<tbody>
				<tr>
					<td>3258</td>
					<td>Isa</td>
					<td>8965</td>
				</tr>
				<tr>
					<td>2526</td>
					<td>happy</td>
					<td>874</td>
				</tr>
				<tr>
					<td>256</td>
					<td>Davy</td>
					<td>258</td>
				</tr>
				<tr>
					<td>5448</td>
					<td>kh</td>
					<td>9541</td>
				</tr>
				<tr>
					<td>1236</td>
					<td>Muua</td>
					<td>0000</td>
				</tr>
				<tr>
					<td>6587</td>
					<td>jkd</td>
					<td>765</td>
				</tr>
			</tbody>
		</table>
	</div>

 <script src="jquery-3.3.1.js"></script>	
 <script src="DataTables-1.10.18/js/jquery.dataTables.js"></script>

                <script> $(document).ready(function() {
                $('#example').dataTable(); }); </script>






</body>
</html>