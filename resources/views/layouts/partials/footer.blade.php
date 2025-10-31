<!-- ======= Footer ======= -->
<!--Main Footer-->
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Agency</h6>
                    <p>
                        The world has become so fast paced that people don’t want to stand by reading a page of
                        information, they would much rather look at a presentation and understand the message. It has
                        come to a point
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>
                        For business professionals caught between high OEM price and mediocre print and graphic output.
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="relative subscription">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">InstaFeed</h6>
                    <ul class="d-flex flex-wrap instafeed">
                        <li><img src="{{ asset('assets/img/i1.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i2.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i3.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i4.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i5.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i6.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i7.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i8.jpg') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom d-flex align-items-center justify-content-between row">
            <p class="m-0 col-lg-8 col-sm-12 footer-text">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | Made with <i class="fas solid fa-lightbulb"
                    aria-hidden="true"></i> by <a href="#" target="_blank">Sangam Pradhan</a>
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <span class="fa fa-angle-up"></span>
    </button>

    <script>
        //Scroll to top
        function scrollToTop() {
            if ($('.scroll-top').length) {

                //Check to see if the window is top if not then display button
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 200) {
                        $('.scroll-top').fadeIn();
                    } else {
                        $('.scroll-top').fadeOut();
                    }
                });

                //Click event to scroll to top
                $('.scroll-top').on('click', function() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 1500);
                    return false;
                });
            }
        }
    </script>
</footer>
