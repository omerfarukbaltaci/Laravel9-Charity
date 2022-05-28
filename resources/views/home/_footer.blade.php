<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    <p><i class="fa fa-map-marker-alt"></i>{{$setting->address}}</p>
                    <p><i class="fa fa-phone-alt"></i>{{$setting->phone}}</p>
                    <p><i class="fa fa-envelope"></i>{{$setting->smtpemail}}</p>
                    <div class="footer-social">
                        <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="{{route('about')}}">About Us</a>
                    <a href="{{route('contact')}}">Contact Us</a>
                    <a href="{{route('references')}}">References</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="{{route('faq')}}">FAQs</a>
                </div>
            </div>

        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-12">
                <p>© <a href="#">{{$setting->company}}</a>, All Right Reserved.</p>
            </div>

        </div>
    </div>
</div>

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('assets')}}/lib/counterup/counterup.min.js"></script>
<script src="{{asset('assets')}}/lib/parallax/parallax.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('assets')}}/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('assets')}}/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets')}}/js/main.js"></script>

