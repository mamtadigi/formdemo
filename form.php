<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        input[type="text"] {
    border: 1px solid #fff;
    border-bottom: 1px solid;
    padding: 10px;
}

input[type="submit"] {
    margin: 10px;
}
    </style>
</head>
<body>
	<div class="container">
     <div class="row">
         <div class="col-3"></div>
         <div class="col-6">
            <?php
                $name = $Designation = $Spes = $Gender = "";
              ?>  
             <div class="form">
                 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    <input type="text" name="name" placeholder="Name"><br>
                    
                    <input type="text" name="digi" placeholder="Designation"><br>
                    
                    <input type="text" name="spes" placeholder="Spes"><br>
                    
                    <input type="text" name="gender" placeholder="Gender"><br>
                    <input type="submit">
                 </form>
             </div>
         </div>
         <div class="col-3"></div>
     </div>   
    </div>  


    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $Designation;
        echo "<br>";
        echo $Spes;
        echo "<br>";
        echo $Gender;

?>
  
</body>
</html>
