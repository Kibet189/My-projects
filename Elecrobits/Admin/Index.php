<?php
include'header.php';
include_once '../include/config.php';
$query = "SELECT * FROM items";
$result = mysqli_query($con,$query);

//$row = count($result);


?>
<style type="text/css">
    #sidebar a {
        color: grey;
    }
</style>


        <section class="midnight-blue">
        <div class="container">
            <div class="row"><center>
            <div class="center"><h2 style="color: gold"> Administrator Panel</h2></div></center>
            <div class="gap"></div><hr>
                <div class="col-sm-5" style="border-left:">
                    <h6>Administrator to access items and have the ability to manipulate,modify and change items.The changes is meant to be done strictly by admin.</h6>
                    <p></p>
                </div>
                <div class="col-sm-7" style="border-left: solid;">
                    <ul class="breadcrumb pull-right">
                        <li><a href="contact.php" class="btn btn-danger">Feedbacks</a></li>
                        <li><a href="comment.php" class="btn btn-warning">Comments</a></li>
                        <li><button type="button" class="btn btn-success"><a href="licensetable.php">License Table</a></button></li>
                        <li><button type="button" class="btn btn-primary"><a href="contact.php">Messages</a></button></li><br><br>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section><hr>
        
<div class="col-md-11 col-md-offset-1">
    <div class="panel panel-danger">
      <div class="panel-heading" style="color: blue;">
        <h3 class="panel-tittle">
        <div class="pull-right">
        <button type="button" class="btn btn-default"><a href="Additem.php">Add Item</a></button></div>
          <center><span>Items in Stock</span></center>
          
        </h3>
      </div>
      
      <div class="panel-body">
    

    <hr>
    <table class="table table-bordered">
    <thread>
    <th>Item Id</th>
        <th>Product</th>
        <th>Date</th>
        <th>Price</th>
        <th>Image</th>
        
        <th colspan="6">Action</th>
        
         </thread>
    <tbody>

    <?php
    while( $row = $result->fetch_assoc()){ ?>
        <tr class="info">
        <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Item']; ?></td>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><img class="img-circle img-responsive" width="100" height="100" src="http://localhost/sites/Elecrobits/img/<?php echo $row['avatar']; ?>" </td>
            <input type="text" name="delid" hidden value="<?php echo $row['id']; ?>">

       
            
            <td><button type="button" class="btn btn-md btn-btn-danger"><a href="EditItem.php?key=<?php echo $row['id']; ?>"><span style="color: grey">Edit</span></a></button></td>
            <td><button type="submit" name="delete" class="btn btn-md btn-btn-danger"><span style="color: red">Delete</span></button></td>
            
            </form>
        </tr>
         <?php }?>
    </tbody>
        
    </table>
</div>
    
</div>

</div>

</div>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
