<?php
require_once 'autoload.php';

$db = new \ClassLibrary\DBFunctions();	
$query = $db->getReportByValue($_GET['GID']);
while ($row = mysql_fetch_array($query)) {
	?>
	<div align="center" class="small-12">
		<table>
			<thead>
				<tr>
					<th>Grievance ID: <?php echo $row['grievance_id']; ?></th>
					<th>Name: <?php echo $row['full_name']; ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Father Name</td>
					<td><?php echo $row['father_name']; ?></td>
				</tr>
				<tr>
					<td>CNIC</td>
					<td><?php echo $row['cnic']; ?></td>
				</tr>
				<tr>
					<td>Phone No</td>
					<td><?php echo $row['contact']; ?></td>
				</tr>
				<tr>
					<td>Damage Type</td>
					<td><?php echo $row['damage_type']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $row['address']; ?></td>
				</tr>
				<tr>
					<td>Date Of Reporting</td>
					<td><?php echo date('d-m-Y', strtotime($row['date'])); ?></td>
				</tr>
				<tr>
					<td>Survey Details</td>
					<td><?php echo $row['details']; ?></td>
				</tr>
				<tr>
					<td>Map Location</td>
					<?php
					$location = explode(',', $row['location']);
					$lat = $location[0];
					$lon = $location[1];
					?>
					<script>
						function initialize() {
							var mapCanvas = document.getElementById('map_canvas');
							var myLatlng = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lon; ?>);
							var mapOptions = {
								center: myLatlng,
								zoom: 10,
								mapTypeId: google.maps.MapTypeId.ROADMAP
							}
							var map = new google.maps.Map(mapCanvas, mapOptions);

							var marker = new google.maps.Marker({
								position: myLatlng,
								map: map,
								title: 'Hello World!'
							});
						}
						google.maps.event.addDomListener(window, 'load', initialize);
					</script>
					<td>
						<div id="map_canvas"></div>
					</td>
				</tr>
				<tr>
					<td>Survey</td>
					<td>
						<?php 
						if($row['in_field'] == 1){ echo "Completed";}
						else {echo "In Progress";}
						?>
					</td>
				</tr>
				<?php if($row['in_field'] == 1){ ?>
				<tr>
					<td>Survey Completion Date</td>
					<td>
						<?php 
						echo date('d-m-Y', strtotime($row['in_field_date']))
						?>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td>Approval Status</td>
					<td>
						<?php 
						if($row['approved'] == 1){ echo "Approved";}
						else {echo "Waiting for approval";}
						?>
					</td>
				</tr>
				<?php if($row['approved'] == 1){ ?>
				<tr>
					<td>Approval Date</td>
					<td>
						<?php 
						echo date('d-m-Y', strtotime($row['approved_date']))
						?>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<td>Pictures</td>
					<td>
						<?php
							$directory = '\\..\\img\\pdma-survey-images\\' . $_GET['GID'] . '\\';

							$fi = new FilesystemIterator(__DIR__ . $directory, FilesystemIterator::SKIP_DOTS);
							$count = iterator_count($fi);

							for ($i=1; $i <= $count; $i++) { 
								echo "<img width=\"500\" height=\"auto\" src=\"http://www.messiahapp.com\\messiah-pdma\\img\\pdma-survey-images\\" . $_GET['GID'] . "\\" . $_GET['GID'] . "-" . $i . "\">";
								echo "<br>";
							}

						?>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php } ?>