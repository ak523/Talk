<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Coding help-Helping programmers</title>
  </head>
  <body>
    <?php include 'partials/_header.php';?>
      <?php include 'partials/_dbconnect.php';?>
  
      <style>
          #ques{
              
              min-height: 433px;
          }
      
      
      </style
 
    
 <?php
      $id = $_GET['threadid'];
      $sql = "SELECT * FROM threads WHERE thread_id='$id'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
      
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
      }
      ?>
      
      
      
      <div class="container my-4">
        <div class="jumbotron">
  <h1 class="display-4"><?php echo $title?></h1>
  <p class="lead"><?php echo $catdesc?></p>
  <hr class="my-4">
  <p>This forum helps people to share and gain knowledge freely.
            No Spam / Advertising / Self-promote in the forums.
            Do not post copyright-infringing material.
            Do not post “offensive” posts, links or images.
            Do not cross post questions.
            Remain respectful of other members at all times.</p>
        <p><b>Posted by: Aryan</b></p>
        </div>
      
      </div>

          
    <div class="container py-2" id="ques" > 
      <h1>Disscusions</h1>
     
    
    <?php
      $id = $_GET['catid'];
      $sql = "SELECT * FROM threads WHERE thread_cat_id='$id'";
      $result = mysqli_query($conn, $sql);
      $noResult = true;
          while($row = mysqli_fetch_assoc($result)){
      
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $id = $row['thread_id'];
    
    
    
    
    
echo'    <div class="media my-3">
  <img src="img/userdefault.jpg" width="40px" class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0"><a class="text-dark" href="thread.php">'. $title .'</a></h5>
   '. $desc .'
  </div>
</div>';

      }
      ?>
          
</div>

      
    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>