<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">
        <title> about </title>
    </head>
    <?php require "../blocks/header.php";
    ?>
    <body>
<?php

   require '../phpfunction/connect.php'

 ?>
 
    <section>
    <div class="main">
        <div class="intro">
            <div class="container">
                <h1>Hello,how its going?</h1>
                <h2>You have selected <span id="selectedNum">0</span> sure ?</h2>

                <div class="myElem">
                    <div class="row">
                        <div class="object" id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
                    </div>
                    <div class="row">
                        <div class="object" id="<?php $myid?>"></div>
                        <div class="object" id="<?php $myid?>"></div>
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

                <input type="text" class="input1">
                <button> Push me</button>
                <h1 id="output"></h1>
            </div>
        </div>
    </div>
    </section>
    <section>
        <table class='database'>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
            <?php
            $mydata = mysqli_query($connect,"SELECT * FROM `myorders`");

            $mydata = mysqli_fetch_all($mydata);
            foreach ($mydata as $mydataelement){
            ?>  

            <tr>
                <td><?=$mydataelement[0]?></td>
                <td><?=$mydataelement[1]?></td>
                <td><?=$mydataelement[2]?></td>
            </tr>
            <?php } ?>
        </table>
        <form action="/phpfunction/create.php" method="post">
        <p>name</p>
        <input type="text" name="name" >
        <p>status</p>
        <input type="text" name="status" >
        <button type="submit">Knopka
        </button>
        </form>
    </section>
    <script src="../javascript/main.js"></script>
    </body>
</html>