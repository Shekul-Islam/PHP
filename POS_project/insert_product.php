
<?php 
    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/nav.php");
?>
<?php 
$conn = mysqli_connect('localhost','root','','pos_project');

if (isset($_POST['submit'])){ 

    $product = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $image_upload  = 'image/'.$product;


    $name = $_POST['pname'];
    $p_id = $_POST['cname'];
    $subcatname = $_POST['subcatname'];
    $price = $_POST['price'];
    $manufac = $_POST['manufacturer_id'];

     $sql = "INSERT INTO product(image,pname,cat_id,sub_category_id,price,manufacturer_id)
                VALUES('$product','$name','$p_id','$subcatname','$price','$manufac')";

     if(mysqli_query($conn, $sql) == TRUE){
        echo "DATA INSERTED";
        move_uploaded_file($temp,"$image_upload");
        header('location:view.php');
     }else{ 
        echo "not inserted";
     }
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


   <div class="container"> 

    <div class="row">

<h1 class="btn btn-dark">PRODUCT ADD</h1>
<center>
    <div class="row"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-8 pt-2 mt-4 border border-success "> 
    
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class= "bg-dark text-white" enctype="multipart/form-data" >
            <br>  
            <label for="image">Image</label>
            <input type="file" accept="image" name="image" required> <br><br>
                
            Product Name:<br>
                <input type ="text" name ="pname"><br><br>

                <div>Category<br/>
                    <select name="cname">
                        <?php
                            $role_table=$conn->query("SELECT id,catname FROM category");
                            while(list($id,$name)=$role_table->fetch_row()){
                                echo "<option value='$id'>$name</option>";
                                }
                        
                        ?>
                    </select>
                </div>

                <div>Subcategory<br/>
                    <select name="subcatname">
                        <?php
                            $role_table=$conn->query("SELECT id,subcatname FROM sub_category");
                            while(list($sid,$sname)=$role_table->fetch_row()){
                                echo "<option value='$sid'>$sname</option>";
                                }
                        
                        ?>
                    </select>
                </div>

                Price:<br>
                <input type ="text" name ="price"><br><br>
                manufacturer id:<br>
                <input type ="text" name ="manufacturer_id"><br><br>
                <input type ="submit" name ="submit" value="insert" class="btn btn-info">
                <a href="view.php" class="btn btn-info">Viewresult</a>
                <br> <br>
            </form>
        </div>
        <div class="col-sm-2 "></div>
    </div>

    </center>

        </div>
   
    

   </div>

<?php 
    include("includes/footer.php");
?>