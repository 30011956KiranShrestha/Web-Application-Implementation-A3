<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Update detail of Page</title>
  </head>
  <body class="container bg-dark">
        <h1 class="text-light">Web Application Implementation</h1>

        <a href="index.php" class="btn btn-warning">Back to home</a>

        <h2 class="text-light">Use the form to update a page record</h2>



        <?php

        

            include 'addition.php';

            $id = $_GET['update'];

            $record = $connection->query("select * from pages where id=$id") or die($connection->error());

            $row = $record->fetch_assoc();



        ?>



        <form class="form-group bg-light text-dark p-5" method="post" action="process.php">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-row">
                <div class="col">
                    <p>Page Name:</p>
                    <input type="text" class="form-control" name="pg" placeholder="Page Name" require value="<?php echo $row['pg']; ?>">
                </div>
                <div class="col">
                    <p>Heading:</p>
                    <input type="text" class="form-control" name="h1" placeholder="Heading" require value="<?php echo $row['h1']; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Paragraph:</p> 
                    <textarea name="pl" required class="form-control"><?php echo $row['p1']; ?>
                    </textarea>
                </div>
                <div class="col">
                    <p>Image:</p>
                    <input type="text" class="form-control" name="image" placeholder="image" require value="<?php echo $row['image']; ?>">
                </div>
            </div>

           <div class="form-row">
                <div class="col">
                    <p>Special Containment Procedure:</p>
                    <textarea name="process" row="5" required class="form-control"><?php echo $row['process']?></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Description:</p> 
                    <textarea name="description" row="5" required class="form-control"><?php echo $row['description']?></textarea>
                </div>
            </div><div class="form-row">
                <div class="col">
                    <p>Reference:</p> 
                    <textarea name="reference" row="5" required class="form-control"><?php echo $row['reference']?></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Additional exercise:</p> 
                    <textarea name="additional_exercise" row="5" required class="form-control"><?php echo $row['additional_exercise']?></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Extra note:</p> 
                    <textarea name="extra_note" row="5" required class="form-control"><?php echo $row['extra_note']?></textarea>
                </div>
            </div>

        <br><br>

               <input type="submit" class="btn btn-warning" name="update" value="Update SCP Page Data">

        

        </form>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>