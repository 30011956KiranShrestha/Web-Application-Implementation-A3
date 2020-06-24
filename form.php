<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add page</title>
  </head>
  <body class="container bg-dark">
        <h1 class="text-light"> Web Application Implementation</h1>
        <a href="index.php" class="btn btn-warning">Back to home</a>
        <h2 class="text-light">Use the form to enter a new page record</h2>

        <form class="form-group bg-light text-dark p-5"method="post"action="process.php">
            <div class="form-row">
                <div class="col">
                    <p>Page Name:</p>
                    <input type="text" class="form-control" name="pg" placeholder="Page Name" require>
                </div>
                <div class="col">
                    <p>Heading:</p>
                    <input type="text" class="form-control" name="h1" placeholder="Heading" require>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Paragraph:</p> 
                    <textarea name="pl" required class="form-control">
                    </textarea>
                </div>
                <div class="col">
                    <p>Image:</p>
                    <input type="text" class="form-control" name="image" placeholder="image" require>
                </div>
            </div>

           <div class="form-row">
                <div class="col">
                    <p>Special Containment Procedure:</p>
                    <textarea name="process" row="5" required class="form-control">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Description:</p> 
                    <textarea name="description" row="5" required class="form-control">
                    </textarea>
                </div>
            </div><div class="form-row">
                <div class="col">
                    <p>Reference:</p> 
                    <textarea name="reference" row="5" required class="form-control">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Additional exercise:</p> 
                    <textarea name="additional_exercise" row="5" required class="form-control">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <p>Extra note:</p> 
                    <textarea name="extra_note" row="5" required class="form-control">
                    </textarea>
                </div>
            </div>
            <br>
            <hr width="75%">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit SCP page data">
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>