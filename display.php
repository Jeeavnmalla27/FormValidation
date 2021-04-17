<?php
include('add.php');
$stock="select * from form";
$show=mysqli_query($server,$stock);
?>
<table border="1px" bgcolor="red">
<tr>
<th>sn</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact no</th>
<th>No of Guest</th>
<th>Payment Method</th>
<th>Country</th>
<th>File</th>
<th>Action</th>
</tr>
<?php
while($fetch=mysqli_fetch_array($show))
	{
	?>
	
	<tr>
    <td><?php echo $fetch['sn'];?></td>
    <td><?php echo $fetch['Name'];?></td>
	<td><?php echo $fetch['Email'];?></td>
    <td><?php echo $fetch['Address'];?></td>
	<td><?php echo $fetch['Contact'];?></td>
	<td><?php echo $fetch['Nog'];?></td>
	<td><?php echo $fetch['pay'];?></td> 
	<td><?php echo $fetch['Country'];?></td>
	<td><?php echo $fetch['Image'];?></td>
	<td><a href="delete.php?id=<?php echo $fetch['sn']?>">Delete</a></td>
	</tr>
	<?php
	}
?>
</table>