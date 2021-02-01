<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3><span>.</span>{{setting()->site_name}}<span>.</span></h3>
                        <p><br>
                            <strong>Phone:</strong> {{setting()->phone}}<br>
                            <strong>Email:</strong> {{setting()->email}}<br>
                        </p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#register">Register</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#download">Download</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#store">Store</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                    </ul>
                </div>


                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Social Media</h4>
                    <p>Feel free to contact us on the way you like.</p>
                    <div class="social-links mt-3">
                        <a href="{{setting()->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="{{setting()->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{setting()->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{setting()->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="{{setting()->youtube}}" class="linkedin"><i class="bx bxl-youtube"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{setting()->site_name}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{setting()->url}}">{{setting()->site_name}}</a>
        </div>
    </div>
</footer>
<!-- End Footer -->
