<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    <?php
        include('includes/menu.php');
    ?>
  <br/>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <?php
          include 'includes/dbconnect.php'; 

          $num_products_on_each_page = 4;
          // The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
          $current_page = isset($_GET['PdtID']) && is_numeric($_GET['PdtID']) ? (int)$_GET['PdtID'] : 1;
          // Select products ordered by the date added
          $stmt = $conn->prepare('SELECT * FROM products LIMIT ?,?');
          // bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
          $stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
          $stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
          $stmt->execute();
         //$product =  $stmt->fetchAll(PDO::FETCH_ASSOC);
         //$total_products = $conn->query('SELECT * FROM products')->rowCount();
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>

        <div class="col">
        <div class="card">
        <div class="row g-0">
        <div class="col-md-4">
          <svg class="bd-placeholder-img" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="<?php echo $row['PdtImage']; ?>" height="250" width="325"/></svg>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['PdtName']; ?> </h5>
            <p class="card-text"><?php echo $row['PdtDesc']; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo "Rs.".$row['PdtPrice']; ?></small></p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
          </div>
          </div>
        </div>
      </div>

      <!--<div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">    
        <div class="card" style="width: 18rem;" >
        <img src="<?php echo $row['PdtImage']; ?>"class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['PdtName']; ?> </h5>
                <p class="card-text"><?php echo $row['PdtDesc']; ?></p>
                <p class="card-text"><?php echo "Rs.".$row['PdtPrice']; ?></p>
            </div>
        </div>
      </div>-->
      <?php }?>

      <div class="buttons">
            <?php if ($current_page > 1): ?>
            <a href="product.php?page=products&PdtID=<?=$current_page-1?>">Prev</a>
            <?php endif; ?>
            <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($rows)): ?>
            <a href="product.php?page=products&PdtID=<?=$current_page+1?>">Next</a>
            <?php endif; ?>
      </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>

</html>
