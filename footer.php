    
    <section class="bg-dark py-5 text-white mt-5">
        <!-- add 'footer' snippet in css -->
        <div class="footer-v1 bg-img">
            <div class="footer no-margin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="headline"><p>About Us</p></div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur dolor eaque maiores mollitia quo aliquid dolorem quaerat, quidem incidunt vero doloremque delectus! Eaque sequi iusto laborum accusantium corrupti dolore asperiores.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Resources</p></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                  <div class="headline"><p>Support</p></div>
                  <address>
                    <ul class="list-unstyled link-list">
                      <li><a href="#">Contact Us</a></li>
                      <li>
                        <a href="#"><i class="fa fa-envelope"></i>support@company.com</a>
                      </li>
                    </ul>
                  </address>
                </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Company</p></div>
                            <ul class="list-unstyled link-list">
                    <li><a href="#">About Us</a></li>
                    <li> <a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Cancellation/Rescheduling policy</a></li>
                  </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src="js/bootstrap.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.js'></script>
    <script>
        $(document).ready(function () {
            $('.card').hover(function () {
                   $(this).attr('class','border-primary shadow card')
                    
                }, function () {
                    $(this).attr('class','card')
                }
            );
        });

    </script>
</body>
</html>