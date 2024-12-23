<?php include_once 'header.php' ?>
<?php include_once 'data.php'; ?>
<?php
$title = $_POST['s_title'];
echo'
<h1>'.$title.'</h1>
';
$sql = "
SELECT 
*
FROM `product` 
where `product_id` = ".$title."
";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['product_id'];
        echo '
       
        
        <div class="imgview">
        
        <img class="img1" src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" alt="">
    
      <p class="p">'. $row["product_name"].'<br>
          Price : '. $row["product_price"].'<br>
          Description : '. $row["product_dec"].'<br>
         
         
          
</p>
</form>
  </div>
  
        ';
       }
   } else {
       echo "0 results";
   }
   ?>


<img src="">
<?php include_once'footer.php' ?>