<!DOCTYPE html>
<?php include 'header.php'; ?>
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="contact-us">
    <div class="container">

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <?php if ($items) : ?>

                    <table class="table"> 
                        <th></th>
                        <th>
                            <strong>Quantity</strong>
                        </th>
                        <th>
                            <strong>Price </strong>
                        </th>
                        <th>
                            <strong> Total </strong>

                        </th>
                        <?php foreach ($items as $item) : ?>

                            <tr>
                                <td>
                                    <img src="assets/images/<?php echo $item['product_img']; ?>" alt="" class="img-fluid wc-image" style="max-width: 20%;">
                                    <br><strong><?php echo $item['name']; ?></strong>
                                </td>
                                <td>
                                    <strong> <?php echo $item['quantity']; ?></strong>
                                </td>
                                <td >
                                    <strong> <?php echo $item['price']; ?></strong>
                                </td>
                                <td >
                                    <strong> <?php echo $total = $item['price'] * $item['quantity']; ?></strong>
                                </td>
                                <?php $sub_total += $total ?>
                            </tr>

                            <?php
                        endforeach;
                    endif;
                    ?>
                </table>    
            </li>
        </ul>

        <div class="inner-content">
            <div class="contact-us">
                <div class="contact-form">
                    <div class="clearfix">
                        <strong class="filled-button pull-left"> Sub Total : <?php echo '$' . $sub_total; ?></strong>
                        <strong class="filled-button pull-right"> <button type="submit" id="paynow" class="main-button">Checkout</button></strong>
                    </div>
                    <br>
                </div>
                <iframe id="payment" name="payment" width="100%" height="500" style="border:0;display:hidden"></iframe>
            </div>
        </div>


    </div>
</section>

<?php include 'footer.php'; ?>
 