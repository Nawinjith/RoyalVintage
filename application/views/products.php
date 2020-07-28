<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
    <div class="container">
        <h2 class="mt-5 py-5">Products</h2>
        
        
        <!-- List all products -->
        <div class="row">
            <?php if(!empty($products)){ foreach($products as $row){ ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo ($row['image']); ?>" class="rounded"/>
                        <div class="caption">
                            <h4 class="pull-right">$<?php echo $row['price']; ?> USD</h4>
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['description']; ?></p>


                        </div>
                        <div class="atc">
                            <a href="<?php echo base_url('products/addToCart/'.$row['id']); ?>" class="btn btn-success">
                                Add to Cart
                            </a>
                        </div>
                    </div> 
                </div>
            <?php } }else{ ?>
                <p>Product(s) not found...</p>
            <?php } ?>
        </div>
    </div>

</span>




  </body>
</html>