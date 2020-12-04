<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>
                        Copyright © 2020 </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/rxp-hpp.js"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }

</script>
<script>
    $(document).ready(function () {
        $('#payment').toggle('show');
        $.getJSON("Charge", function (jsonFromRequestEndpoint) {
            RealexHpp.setHppUrl("https://pay.sandbox.realexpayments.com/pay");
            RealexHpp.embedded.init("paynow", "payment", "Thankyou", jsonFromRequestEndpoint);
            if (window.addEventListener) {
                window.addEventListener('message', receiveMessage, false);
            } else {
                window.attachEvent('message', receiveMessage);
            }
        });
    });
   
</script>

</body>
</html>