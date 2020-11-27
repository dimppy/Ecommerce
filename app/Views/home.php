<!DOCTYPE html>
<?php include 'header.php'; ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Products</h4>
                <h2>Choose the best product for you!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row">
              <?php foreach ($product_list as $row){ ?>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/<?php echo $row->product_img; ?>" alt="">
                </div>
                <div class="down-content">
                  <span> $<?php echo $row->price; ?> </span>
                  <a href="Product_details?id=<?php echo $row->id; ?>"><h4><?php echo $row->name; ?></h4></a>
                  <p><?php  echo implode(' ', array_slice(explode(' ',  $row->description), 0, 20)); ?></p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <li><a href="Product_details?id=<?php echo $row->id; ?>">View Product</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </section>
<?php include 'footer.php'; ?>