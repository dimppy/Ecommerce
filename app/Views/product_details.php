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
                  <h4><?php echo '$'.$product_list->price; ?></h4>
                <h2><?php echo $product_list->name; ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="assets/images/<?php echo $product_list->product_img; ?>" alt="" class="img-fluid wc-image">
            </div>

            <br>
          </div>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">

                <div class="content">
                  <form id="contact" action="Checkout?id=<?php echo $product_list->id; ?>" method="post">

                    <div class="row">
                      <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" name="add_to_cart" id="form-submit" class="main-button">Add to Cart</button>
                          <br><p id="demo"></p>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </section>

    <div class="section contact-us">
      <div class="container">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2>Description</h2>
          </div>

          <div class="content">
              <p><?php echo $product_list->description; ?></p></div>

          <br>
          <br>
        </div>
      </div>
    </div>
    
    
    
<?php include 'footer.php'; ?>