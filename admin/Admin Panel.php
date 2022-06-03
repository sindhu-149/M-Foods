<?php
require("Connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8ed35a3507.js" crossorigin="anonymous"></script></head>
<body>

<div class="header">
    <h2  style="margin-top: 50px;" class="text-center">ADMIN PANEL</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <button style="float: right; margin-right: 20px;" type="submit" name="Logout">LOG OUT</button>
</form>
</div>
<table style="margin: 100px; width: 90%" class="table table-dark text-center">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query="SELECT * FROM `order_manager`";
      $user_result = mysqli_query($con,$query);
      while($user_fetch=mysqli_fetch_assoc($user_result)){
        echo "
          <tr>
            <td>$user_fetch[Order_Id]</td>
            <td>$user_fetch[Full_Name]</td>
            <td>$user_fetch[Phone_No]</td>
            <td>$user_fetch[Address]</td>
            <td>$user_fetch[Pay_Mode]</td>
            <td>

              <table class='table table-dark text-center'>
                <thead>
                  <tr>
                    <th scope='col'>Item name</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Quantity</th>
                  </tr>
                </thead>
                <tbody>
            ";
            $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
            $order_result=mysqli_query($con,$order_query);
            while($order_fetch=mysqli_fetch_assoc($order_result))
            {
              echo "
                <tr>
                <td>$order_fetch[Item_Name]</td>
                <td>$order_fetch[Price]</td>
                <td>$order_fetch[Quantity]</td>
                </tr>
              ";
            }
            echo "
            </tbody>
            </table>
            </td>
          </tr>

        ";
      }
    ?>

  </tbody>
</table>

<?php
if(isset($_POST['Logout'])){
    session_destroy();
    echo"<script>
      window.location.href='Admin Login.php';</script>
    ";
}
?>

</body>
</html>
