<?php 
$db = new mysqli('localhost','root','','pos_project');

if(isset($_POST['btnSubmit'])){
	$catname = $_POST['catname'];
	// $address =$_POST['address'];
	// $contact = $_POST['contact'];
	$db->query(" call add_category('$catname')");
}


if(isset($_POST['add_subcat'])){
		
	$cid = $_POST['catid'];
	$sname = $_POST['sname'];
	$db->query(" call add_subcategory('$cid','$sname',) ");
}


if(isset($_POST['delcatid'])){
	$cid = $_POST['catid'];
	$db->query(" delete from category where id='$cid ' ");
}


?>

<h3>Add Category</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="catname">Category Name:</label></td>
			<td><input type="text" name="catname" /></td>
		</tr>
		<!-- <tr>
			<td><label for="address">Address</label></td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td><label for="contact">Contact</label></td>
			<td><input type="text" name="contact" /></td>
		</tr> -->
		<tr> 
			<td></td>
			<td><input type="submit" value="submit" name="btnSubmit"  /></td>
		</tr>
	</table>
</form>

<h3>Add Subcategory</h3>
<form action="#" method="post">
	<table>
		
		
		<tr>
			<td><label for="catid">Category Name:</label></td>
			<td>
				<select name="catid">
					<?php 
						$manufac = $db->query("select * from category");
						while(list($_cid,$_catname) = $manufac->fetch_row()){
							echo "<option value='$_cid'>$_catname</option>";
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td><label for="sname">Subcategory Name:</label></td>
			<td><input type="text" name="sname" /></td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" value="submit" name="add_subcat"  /></td>
		</tr>
	</table>
</form>


<form action="#" method="post">
	<table>
		<tr>
			<td><label for="catid">Delete Category Id</label></td>
			<td>
				<select name="catid">
					<?php 
						$manufac = $db->query("select * from sub_category");
						while(list($_cid,$_catname) = $manufac->fetch_row()){
							echo "<option value='$_cid'>$_catname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="delcatid" value="delete" /></td>
		</tr>
	</table>
</form>

<hr>
<center>
<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Category Name</th>
		<th>Subcategory Name</th>
		
	</tr>
	<?php 
		$product = $db->query(" select * from  view_cat ");
		while(list($_id,$_catname,$_subcatname) = $product->fetch_row()){
			echo "<tr> 
					<td>$_id</td>
					<td>$_catname</td>
					<td>$_subcatname</td>
					
				</tr>";
		}
	
	?>
</table>
</center>





