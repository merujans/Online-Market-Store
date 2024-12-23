<?php include_once 'header.php' ?>
<?php include_once 'data.php'; ?>
   <table class="tb">
      
       <td>
       <h2>Men's Items.</h2><br><br>
       <h4>Trending Items</h4>
           <div class="flex-container">
              
 
  
  <?php
$sql = "
SELECT 
*
FROM `product1` 
where `type` = 'trending'
";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['product_id'];
        echo '
      
        <div class="content">
        <form id ="GFG" action="view.php" method="post">
       <img onclick="submit();"  class="img" src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" alt=""> 
      <p class="p">'. $row["product_name"].'<br>
          Price : '. $row["product_price"].'<br>
          <input type="hidden" name="s_title" value=" '.$id.'">
         
          
         
          
</p>
</form>
  </div>
        ';
       }
   } else {
       echo "0 results";
   }
   ?>
 
       </div>
    </td>
    
</tr>
<tr>
  
       <td>
         <h4>Trending Items</h4>
         <div class="flex-container">
       
       <?php
$sql = "
SELECT 
*
FROM `product1` 
where `type` = 'trending'
";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['product_id'];
        echo '
      
        <div class="content">
        <form id ="GFG" action="view.php" method="post">
       <img onclick="submit();"  class="img" src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" alt=""> 
      <p class="p">'. $row["product_name"].'<br>
          Price : '. $row["product_price"].'<br>
          <input type="hidden" name="s_title" value=" '.$id.'">
         
          
         
          
</p>
</form>
  </div>
        ';
       }
   } else {
       echo "0 results";
   }
   ?>
  
</div>
       </div>
    </td>
    
</tr>
<tr>
       <td><div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div>  
  <div>4</div>
  <div>5</div>
  
</div>
       </div>
    </td>
    
</tr>
<tr>
       <td><div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div>  
  <div>4</div>
  <div>5</div>
  
</div>
       </div>
    </td>
    
</tr>
<tr>
       <td><div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div>  
  <div>4</div>
  <div>5</div>
  
</div>
       </div>
    </td>
    
</tr>

</table>
<p id="td"></p>
<script>
  function submit(){
    document.getElementById("GFG").submit();
  }
  
  </script>
<?php include_once 'footer.php' ?>