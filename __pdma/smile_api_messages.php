<?php

					'{"status":
						[
							{"id":"453",
							 "sender_num":"+923443282683",
							 "receiver_num":"8333",
							 "gsm_network":"Telenor-PK",
							 "time":"1406103392",
							 "text":"zahid, zahoor, 1620201133609, flood, old bara road"
							}
						]
					}'
	require_once "../inc/class.smile.api.inc.php";
	$smile_API_object = new SmileAPI();

	$msgs = $smile_API_object->receive_sms();

	echo "<br><p>-----------</p><br>";
	print_r($msgs->status[0]);
?>
<div class="small-12">
	<table>
		<thead>
			<tr>
				<th width="50">S.NO</th>
				<th width="150">Name</th>
				<th width="150">Father Name</th>
				<th width="150">Contact</th>
				<th witdth="200">CNIC</th>
				<th>Address</th>
				<th width="200">Damage Type</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Content Goes Here</td>
				<td>Content Goes Here</td>
				<td>Content Goes Here</td>
				<td>Content Goes Here</td>
				<td>Content Goes Here</td>
				<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
				<td>Content Goes Here</td>
			</tr>
		</tbody>
	</table>
</div>