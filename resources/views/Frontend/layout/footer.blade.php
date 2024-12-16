{{-- <footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        123 Consectetur at ligula 10660
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Luxury</a></li>
                    <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                    <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                    <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                    <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                    <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                    <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Home</a></li>
                    <li><a class="text-decoration-none" href="#">About Us</a></li>
                    <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                    <li><a class="text-decoration-none" href="#">FAQs</a></li>
                    <li><a class="text-decoration-none" href="#">Contact</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail">Email address</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                    <div class="input-group-text btn-success text-light">Subscribe</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 Company Name
                        | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="{{asset('frontend/assets/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/templatemo.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
<!-- End Script -->
</body>

</html> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div style="background-color: #000; color: white; padding: 40px 20px; font-family: Arial, sans-serif; font-size: 12px;">
    <div style="display: flex; justify-content: space-between; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
        <!-- Our Categories -->
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3 style="padding-bottom: 10px; margin-bottom: 20px; font-size: 16px;">OUR CATEGORIES</h3>
            <ul style="list-style: none; padding: 0; line-height: 1.6;">
                {{-- <li>Bracelet</li>
                <li>Crystal Coin</li>
                <li>Rudraksha and Tumbled Stone</li>
                <li>Shriyantra</li>
                <li>Crystal Ring's</li>
                <li>Malas</li> --}}
            </ul>
        </div>
        <!-- Our Story -->
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3 style="padding-bottom: 10px; margin-bottom: 20px; font-size: 16px;">OUR STORY</h3>
            <ul style="list-style: none; padding: 0; line-height: 1.6;">
                <li><a href="{{ url('/') }}" style="color: white; text-decoration: none;">Home</a></li>
                <li><a href="{{ url('/About') }}" style="color: white; text-decoration: none;">About Us</a></li>
                <li><a href="{{ url('/Contact') }}" style="color: white; text-decoration: none;">Contact Us</a></li>
            </ul>
        </div>
        <!-- Registered Address -->
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3 style="padding-bottom: 10px; margin-bottom: 20px; font-size: 16px;">ADDRESS</h3>
            <p style="line-height: 1.6; font-size: 12px;">
                Innobrain Deals<br>
                313, 3rd Floor, Bakrol Square,<br>
                Bakrol Rd, V.V.Nagar-388120,<br>
                Dist. Anand, Gujarat<br>
                {{-- Contact us:<br>
                +91-9998202023<br>
                +91-7990523663<br>
                Email: inquiry@innobraintechnologies.in --}}
            </p>
        </div>
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">

                <h3 style="padding-bottom: 10px; margin-bottom: 20px; font-size: 16px;">CONTACT US</h3>
                <h5>
                    <a class="hvr-forward col" style="color: white; text-decoration: none;">+91-9998202023</a>
                </h5>

                <h5>
                    <a class="hvr-forward col" style="color: white; text-decoration: none;">+91-7990523663</a>
                </h5>
                <h5>
                    <a class="hvr-forward col" style="color: white; text-decoration: none;" >Email: inquiry@innobraintechnologies.in</a>
                </h5>

            </div>
        </div>
        <!-- Social Links -->
        {{-- <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h3 style="padding-bottom: 10px; margin-bottom: 20px; font-size: 16px;">SOCIAL LINKS</h3>
            <div style="display: flex; gap: 10px; align-items: center;">
                <a href="#" style="color: white; font-size: 18px; text-decoration: none;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" style="color: white; font-size: 18px; text-decoration: none;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" style="color: white; font-size: 18px; text-decoration: none;">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
            </div>
        </div>
    </div> --}}
    <div style="text-align: center; margin-top: 20px; font-size: 12px;">
        © 2024 Developed By InnoBrain Technologies
    </div>
</div>
