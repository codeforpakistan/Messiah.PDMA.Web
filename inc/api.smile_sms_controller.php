<?php
	
	require_once 'autoload.php';
	/*Message Format
	  Send this as a text message to 8333 "PDMA Full Name, Father Name, CNIC, Contact, Damage Type, Address"
	*/

	$MessagesSaved = false;
	if (isset($_POST['Insert'])) {
		$Count = $_POST['Count'];
		for ($i=1; $i <= $Count; $i++) { 
			$GID = $_POST['GID' . $i];
			$FullName = $_POST['FullName' . $i];
			$FatherName = $_POST['FatherName' . $i];
			$CNIC = $_POST['CNIC' . $i];
			$Contact = $_POST['Contact' . $i];
			$DamageType = $_POST['DamageType' . $i];
			$Address = $_POST['Address' . $i];

			$db = new \ClassLibrary\DBFunctions();

			$record = $db->initialInsertDataInTable($GID, $FullName, $FatherName, $CNIC, $Contact, $Address, $DamageType);

			if ($record == true) {
				$MessagesSaved = true;
			} else {
				$MessagesSaved = false;
			}
		}
		
	}
	$smile_API_object = new \ClassLibrary\SmileAPI();

	$msgs = $smile_API_object->receive_sms();
	$msgs2 = json_decode($msgs);
?>
	<div align="center" class="small-12">
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<thead>
				<tr>
					<th>Grievance ID</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>CNIC</th>
					<th>Contact</th>
					<th>Damage Type</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
			<?php
				if(!empty($msgs2->status)){
					$q = "SELECT * FROM gid_not_approved ORDER BY grievance_id DESC LIMIT 1";
					$r = @mysql_fetch_array(mysql_query($q));
					$j = $r['grievance_id'];
					$getYear = date('Y');
					if(strstr($j, $getYear) == true){
						$getJD = date('z') + 1;
						if(strstr($j, str_pad($getJD, 3, 0, STR_PAD_LEFT)) == true){
							$j++;	
						} else {
							$j++;
							$count = substr($j, 7, 4);
							$j = date('Y') . str_pad(date('z') + 1, 3, 0, STR_PAD_LEFT) . $count;
						}
					} else {
						$j = date('Y') . str_pad(date('z') + 1, 3, 0, STR_PAD_LEFT) . '0001';	
					}
					$count = count($msgs2->status);
					echo "<input type=\"hidden\" name=\"Count\" id=\"Count\" value=" . $count . ">";
					$i = 1;
					foreach ($msgs2->status as $record) {
						$content = explode(',', $record->text);
			?>
				<tr>
					
					<td><?php echo $j; ?></td>
					<input type="hidden" name="GID<?php echo $i; ?>" id="GID<?php echo $i; ?>" value="<?php echo $j; $j++; ?>">
					<td><?php echo $content[0]; ?></td>
					<input type="hidden" name="FullName<?php echo $i; ?>" id="FullName<?php echo $i; ?>" value="<?php echo $content[0]; ?>">
					<td><?php echo $content[1]; ?></td>
					<input type="hidden" name="FatherName<?php echo $i; ?>" id="FatherName<?php echo $i; ?>" value="<?php echo $content[1]; ?>">
					<td><?php echo $content[2]; ?></td>
					<input type="hidden" name="CNIC<?php echo $i; ?>" id="CNIC<?php echo $i; ?>" value="<?php echo $content[2]; ?>">
					<td><?php echo $content[3]; ?></td>
					<input type="hidden" name="Contact<?php echo $i; ?>" id="Contact<?php echo $i; ?>" value="<?php echo $content[3]; ?>">
					<td><?php echo $content[4]; ?></td>
					<input type="hidden" name="DamageType<?php echo $i; ?>" id="DamageType<?php echo $i; ?>" value="<?php echo $content[4]; ?>">
					<td><?php echo $content[5]; ?></td>
					<input type="hidden" name="Address<?php echo $i; ?>" id="Address<?php echo $i; ?>" value="<?php echo $content[5]; ?>">
				</tr>
			<?php
						$i++;
					}
				}
				if(!empty($msgs2->status)){
			?>
				<tr>
					<td><div align="right"><input type="submit" name="Insert" id="Insert" value="Save Records" class="button" /></div></td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</form>
</div>