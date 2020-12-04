<!DOCTYPE html>
<?php

include 'header.php';
?>
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Thank you <?= $res['HPP_CUSTOMER_EMAIL']; ?> </h4>
                        <h2>Stay in Touch</h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <div class="row">
                    <?= "</br><b>Transaction Success your transaction Id is: ".$res['ORDER_ID']."</b>" ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
<!--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(document).ready(function () {
        $.getJSON("Charge", function (jsonFromRequestEndpoint) {
            console.log(jsonFromRequestEndpoint);
        });
    });

</script>-->