<?php 
$db = new mysqli('localhost','root','','pos_project');

if(isset($_POST['btnSubmit'])){
	$catname = $_POST['catname'];
	// $address =$_POST['address'];
	// $contact = $_POST['contact'];
	$db->query(" call add_category('$catname')");
}


if(isset($_POST['add_subcat'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$mid = $_POST['manufac'];
	$db->query(" call add_product('$pname','$price','$mid') ");
}


if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query(" delete from manufacturer where id='$mid ' ");
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

<h3>Product table</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="pname">Name</label></td>
			<td><input type="text" name="pname" /></td>
		</tr>
		<tr>
			<td><label for="price">Price</label></td>
			<td><input type="text" name="price" /></td>
		</tr>
		<tr>
			<td><label for="manufac">Manufacturer Name</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from category");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
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
			<td><label for="manufac">Manufacturer Id</label></td>
			<td>
				<select name="manufac">
					<?php 
						$manufac = $db->query("select * from manufacturer");
						while(list($_mid,$_mname) = $manufac->fetch_row()){
							echo "<option value='$_mid'>$_mname</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="delmanufact" value="delete" /></td>
		</tr>
	</table>
</form>

<hr>
<center>
<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>M Name</th>
		<th>Contact</th>
	</tr>
	<?php 
		$product = $db->query(" select * from show_data ");
		while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
			echo "<tr> 
					<td>$_id</td>
					<td>$_name</td>
					<td>$_price</td>
					<td>$_mname</td>
					<td>$_mcont</td>
				</tr>";
		}
	
	?>
</table>
</center>





