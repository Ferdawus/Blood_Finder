<?php
include('../db.php');
$Query = "SELECT * FROM donors";
$Result = mysqli_query($Connection,$Query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <title>List Page</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">Doner List</h2>
        </div>
        
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Location </th>
                <th>BloodGroup</th>
                <th>LastDonated</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php while($Row = mysqli_fetch_array($Result,MYSQLI_ASSOC)){?>
              
                <tr>
                  <td><?php echo $Row['Id'];?></td>
                  <td><?php echo $Row['Name'];?></td>
                  <td><?php echo $Row['Email'];?></td>
                  <td><?php echo $Row['Phone'];?></td>
                  <td><?php echo $Row['Location'];?></td>
                  <td><?php echo $Row['BloodGroup'];?></td>
                  <td><?php echo $Row['LastDonated']?></td>
                  <td><?php if ($Row['Status'] == 1) {
                    echo "Active";
                  }else echo "Inactive";?></td>
                  <td><a href="index.php?page=edit&Action=Edit&Id=<?php echo $Row['Id'];?>" class="">Edit</a>
                  <span><a href="index.php?page=delete&Action=Delete&Id=<?php echo $Row['Id'];?>" class="">Delete</a></span>
                  </td>
                  
                 <?php }?>
              </tr>
          </tbody>
      </table>
    </div>
    

    
    <!-- bootstrap js link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    </script>

  </body>
</html>
