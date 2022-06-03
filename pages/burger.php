<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>M-Foods</title>
  <link rel="stylesheet" href="../css/page.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8ed35a3507.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- Title -->

  <section id="title"><div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="">M-Foods</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php#footer">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php#categories">Categories</a>
          </li>
          <li class="nav-item">
            <?php
              $count = 0;
              if(isset($_SESSION['cart']))
              {
                $count = count($_SESSION['cart']);
              }
            ?>
            <a class="nav-link" class="btn btn-outline-success" href="../mycart.php"><img src="../images/shopping-cart.png" style="width: 25px; height: 25px ; margin-top: -2px;">(<?php echo $count;?>)</a>
          </li>

        </ul>
      </div>
    </nav>
</section>


  <div class="container items-cont">

    <div class="row ">
      <div class="col-sm-4">
          <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/cheesy.jpg" class="card-img-top " alt="...">
          <div class="card-body item-body">
            <h5 class="card-title">Cheesy Veggie Burger</h5>
            <p class="card-text">₹75</p>
            <input type="hidden" name="Item_Name" value="Cheesy Veggie Burger">
            <input type="hidden" name="Price" value="75">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
        </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/chicken.jpg" class="card-img-top" alt="...">
          <div class="card-body item-body">
            <h5 class="card-title">Chicken Burger</h5>
            <p class="card-text">₹129</p>
            <input type="hidden" name="Item_Name" value="Chicken Burger">
            <input type="hidden" name="Price" value="129">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
          </div>
        </div>
        </form>
      </div>
      <div class="col-sm-4">
      <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/corn.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Corn Burger</h5>
            <p class="card-text">₹98</p>
            <input type="hidden" name="Item_Name" value="Corn Burger">
            <input type="hidden" name="Price" value="98">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
          </div>
        </div>
        </form>
      </div>
      <div class="col-sm-4">
      <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/paneer.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Paneer burger</h5>
            <p class="card-text">₹119</p>
            <input type="hidden" name="Item_Name" value="Paneer burger">
            <input type="hidden" name="Price" value="119">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
          </div>
        </form>
        </div>

      </div>
      <div class="col-sm-4">
      <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/pizza.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pizza Burger</h5>
            <p class="card-text">₹129</p>
            <input type="hidden" name="Item_Name" value="Pizza Burger">
            <input type="hidden" name="Price" value="129">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
          </div>
        </div>
        </form>
      </div>
      <div class="col-sm-4">
      <form action="../manage-cart.php" method="POST">
        <div class="card items-card">
          <img src="../images/burgers/vegan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vegan Mushroom Burger</h5>
            <p class="card-text">₹112</p>
            <input type="hidden" name="Item_Name" value="Vegan Mushroom Burger">
            <input type="hidden" name="Price" value="112">
            <button type="submit" name="Add_To_Cart"  class="btn btn-info">Add to Cart</button>
          </div>
        </div>
      </form>
      </div>
      </div>
    </div>

    <hr>

    <!-- footer -->
    <footer id="footer">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p class="Copyright">© Copyright M-Foods</p>

    </footer>

  </body>

  </html>
