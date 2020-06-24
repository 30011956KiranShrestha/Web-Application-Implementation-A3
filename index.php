<?php include "addition.php"?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Web programming</title>
  
    <style>

      /*for background color */

      body,html{

        height: 100%;

        width: 100%;

        font-family: 'Lato', sans-serif;
        margin:0px;
       color:whitesmoke;
       padding:0px 10px;
       background-color:dimgray;
       height:auto;
       width:auto;
       overflow: auto;
       overflow-x: hidden;
      }
      header{
           text-align:center;
           margin:2px;
           background-attachment: fixed;
           background-color:snow;
           color:black;
           border:1px solid black;
       }
       .nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:darkgray;
        width: 100%;
      }

      .nav li {
        float: left;
      }

      .nav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

       .nav li a:hover {
        background-color:snow;
        color: black;
      }
      h1 a:hover {
          color: black;
          text-decoration: none;
      }
      h1 a {
          color: black;
          text-decoration: none;
          background-color: transparent;
      }
      /*navbar styling */
      .navbar{padding: .8rem;}

      .navbar-nav li{padding-right: 5px;}

      .nav-link{font-size: 1.1em !important;}



       /*sticky footer */

       .footer{

         /* position:fixed; */

         width: 100%;

         bottom: 0;}
         .img-home{
          width: 70%
         }

    </style>
  </head>
  <body>
    <header>
      <h1><a href="index.php">Special Containment Procedures-SCP</a></h1>
    </header>  
  <!--menu row -->
    <div class="row">
      <div class="col">
        <nav class="nav navbar-light bg-light">
          <ul>
            <!--RUN PHP LOOP THROUGH DATABASE AND DISPLAY PAGE-->
            <?php foreach($result as $page):?>
            <li class="nav-item active">
              <a href="index.php?page='<?php echo $page['pg'];?>'" class="nav-link"><?php echo $page['pg'];?></a>
            </li>
            <?php endforeach;?>
           <li class="nav-item active">
           <a href="form.php" class="nav-link">Entera  a new SCP file </a>
           </li>

          </ul>
        </nav>
       </div>
    </div>
    <div class="row">
    <div class="col">
<?php
if(isset($_GET['page']))
{
  // remove single quote from page get value
  $pg=trim($_GET['page'],"'");  // to remove ' ' from scp-2 file in above www site

  //run sql command to select record based on get value
  $record=$connection->query("SELECT * from  pages where pg='$pg'") or die($connection->error());

  //convert $record into an array for us to echo out the individual fields on screen
  $row=$record->fetch_assoc();

  //create variable that hold data from all table fields
 $pg=$row['pg'];
  $h1=$row['h1'];
  $p1=$row['p1'];
  $update=$row['id'];
  $delete = $update;
  $image=$row['image'];
  $process=$row['process'];
  $description=$row['description'];

  $reference=$row['reference'];
  $additional_exercise=$row['additional_exercise'];
  $extra_note=$row['extra_note'];

//display information on screen
echo"
<h1>Item #:{$h1}</h1>";

echo "<h1>{$p1}</h1>";

if ($row['image']) { echo "<br><p><img src='Image/{$image}' class='img-fluid shadow p-3 mb-5 mx-auto d-block' ></p>";}

echo "<p><h3 >Special Containment Procedures:</h3>{$process}</p>";

echo "<p><h3>Description:</h3>{$description}</p>";

if ($row['reference'])  {echo "<p><h3>Reference:</h3>{'$reference'}</p>"; }

if ($row['additional_exercise']) {echo "<p><h3>Additional Notes:</h3>{$additional_exercise}</p> ";}

echo "<p> {$extra_note} </p> ";

if ($row['extra_note']) { echo "<p> <h3>Space Time Anomalies:</h3>{$extra_note}</p> ";}


  //Display update and delete buttons

echo "

                <p>

                <a href='update.php?update={$update}' class='btn btn-warning'>Update</a>

                <a href='process.php?delete={$delete}' class='btn btn-danger'>Delete</a>

                </p>

";
}
else
{
  echo"
  <h1>Welcome to this database driven website</h1>
  <p class='text-center'>Use the links above to view pages stored in the database</p>
  <p class='text-center'><img class='img-home' src='Image/logo.jpg'></p>
  ";
}
?>
   </div>
    </div>
    <footer class="footer mt-auto py-3">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://toiohomai.ac.nz/user/login">30021935@student.toiohomai.ac.nz</a>
</div>

<!-- /.container -->

</footer>

<!--database content here-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>