<?php

require_once 'connect.php';


mysqli_query($connect,'SELECT `id`, `data-id`, `status` FROM `rooms` WHERE 1');
$mydata = mysqli_query($connect,"SELECT * FROM `rooms` WHERE 1");

$mydata = mysqli_fetch_all($mydata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Document</title>
</head>
<body>
   <h1>
   </h1>
   <div class="section">
    <div class="container">
        
    <div class="myElem">
                    <div class="row ">
  <?                  foreach ($mydata as $mydataelement){
?>
                        <div class="object id<?php echo $mydataelement[2]?>"></div>
                        
                        <? }?>
                        <div class="object teseting" id="<?php $myid?>"></div>
                    </div>
                    
                    <div class="row">
                        <div class="object " id="<?php $myid?>"></div>
                        <div class="object " id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                    </div>
                    <div class="row">
                        <div class="object alreadySelected"id="<?php $myid?>"></div>
                        <div class="object  alreadySelected"id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                    </div>
                    <div class="row">
                        <div class="object" id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                    </div>
           
    </div> 
   </div>

</body>
</html>