<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
	<style>
		table ,th,td{
			border:2px solid;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Mobile</th>
				<th colspan="2">Approve/Reject</th>
			</tr>

		</thead>

		<tbody>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
			?>

					<tr>
						<td><?php echo $row->fname;?></td>
						<td><?php echo $row->lname;?></td>
						<td><?php echo $row->mobile;?></td>
						
						

						<?php
							if($row->status==1)
							{
							?>
								<td>Approved</td>
								<td><a href="<?php echo base_url();?>main/reject_item/<?php echo $row->id;?>">Reject</a></td>
							<?php

							}
							elseif($row->status==0)
							{
							?>
								<td>Rejected</td>
								<td><a href="<?php echo base_url();?>main/approve_item/<?php echo $row->id;?>">Approve</a></td>
							<?php	
							}
							else
							{
							?>
								
							
						
							<td><a href="<?php echo base_url();?>main/approve_item/<?php echo $row->id;?>">Approve</a></td>
							<td><a href="<?php echo base_url();?>main/reject_item/<?php echo $row->id;?>">Reject</a></td>
							<?php
							}
							?>

					</tr>

			<?php
				}
			}
			?>		
		</tbody>
	</table>

</body>
</html>