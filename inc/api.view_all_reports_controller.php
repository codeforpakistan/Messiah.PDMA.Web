<?php
	require_once 'autoload.php';
	$db = new \ClassLibrary\DBFunctions();

	$a = \ClassLibrary\UsableFunctions::get_current_url();
?>
<script type="text/javascript">
	function callPopulate(var1, var2){
		var getURL = "<?php echo $a; ?>";
		window.open(getURL + "&" + var2 + "=" + escape(var1), '_self')
	}
</script>
	<div class="large-10 medium-10 small-10 large-offset-1 medium-offset-1 small-offset-1">
		<form method="GET">
			<div class="row">
				<div class="large-5 columns">
					<div class="row collapse">
						<label>
							<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-credit-card"></span> NIC</span></div>
							<div class="small-9 large-10 columns"><input name="CNIC" id="CNIC" type="text" placeholder="Enter your CNIC" onchange="if(this.value == '000'){location.reload();} else {callPopulate(this.value, 'CNIC');}"></div>
						</label>
					</div>
				</div>
				<div class="large-5 columns">
					<div class="row collapse">
						<label>
							<div class="small-3 large-2 columns"><span class="prefix"><span class="fa fa-barcode"></span> GID</span></div>
							<div class="small-9 large-10 columns"><input type="text" name="GID" id="GID" placeholder="Enter the Grievance ID provided to you" onchange="if(this.value == '000'){location.reload();} else {callPopulate(this.value, 'GID');}"></div>
						</label>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div align="center" class="small-12">
		<table>
			<thead>
				<tr>
					<th>Grievance ID</th>
					<th>Assigned To</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>CNIC</th>
					<th>Contact</th>
					<th>Damage Type</th>
					<th>Address</th>
					<th>Full Report</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$query = NULL;
					if(isset($_GET['GID'])){ 
						$query = $db->getReportByValue($_GET['GID']);
					} else if(isset($_GET['CNIC'])){ 
						$query = $db->getReportByValue($_GET['CNIC']); 
					} else {
						$query = $db->getAllReports();
					}
					// var_dump($row = mysql_fetch_array($query));
					while ($row = mysql_fetch_array($query)) { 
						
				?>
					<tr>
						<td><?php echo $row['grievance_id']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['full_name']; ?></td>
						<td><?php echo $row['father_name']; ?></td>
						<td><?php echo $row['cnic']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['damage_type']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><a href="pdma.php?table=view_detailed_report&GID=<?php echo $row['grievance_id']; ?>">View</a></td>
					</tr>
				 <?php } ?>
			</tbody>
		</table>
	</div>