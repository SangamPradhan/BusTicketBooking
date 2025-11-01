
@extends('layouts.app')
@section('content')

<!-- start banner Area -->
<section class="relative banner-area">
    <div class="overlay overlay-bg"></div>

    <!-- make banner background full width, but keep content centered -->
    <div class="container-fluid no-padding">
        <div class="container">
            <div class="align-items-center justify-content-between row fullscreen">
                <div class="banner-left col-lg-6 col-md-6">
                    <h6 class="text-white">Away from monotonous life</h6>
                    <h1 class="text-white">Magical Travel</h1>
                    <p class="text-white">
                        If you are looking at blank cassettes on the web, you may be very confused at the difference
                        in price. You may see some for as low as $.17 each.
                    </p>
                    <a href="/booking" class="text-uppercase primary-btn">Book Seats</a>
                </div>
                <div class="banner-right col-lg-4 col-md-6">
                    <!-- ...existing tab/form content... -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight"
                                role="tab" aria-controls="flight" aria-selected="true">Flights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                aria-controls="hotel" aria-selected="false">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday"
                                role="tab" aria-controls="holiday" aria-selected="false">Holidays</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- flight tab -->
                        <div class="tab-pane fade show active" id="flight" role="tabpanel"
                            aria-labelledby="flight-tab">
                            <form class="form-wrap">
                                <input type="text" class="form-control" name="name" placeholder="From ">
                                <input type="text" class="form-control" name="to" placeholder="To ">
                                <input type="text" class="form-control date-picker" name="start" placeholder="Date">
                                <input type="text" class="form-control date-picker" name="return" placeholder="To ">
                                <a href="/booking" class="text-uppercase primary-btn">Search Bus</a>
                            </form>
                        </div>
                        <!-- hotel / holiday tabs (unchanged) -->
                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <form class="form-wrap">
                                <input type="text" class="form-control" name="name" placeholder="From ">
                                <input type="text" class="form-control" name="to" placeholder="To ">
                                <input type="text" class="form-control date-picker" name="start" placeholder="Start ">
                                <input type="text" class="form-control date-picker" name="return" placeholder="Return ">
                                <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults ">
                                <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child ">
                                <a href="#" class="text-uppercase primary-btn">Search Hotels</a>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                            <form class="form-wrap">
                                <input type="text" class="form-control" name="name" placeholder="From ">
                                <input type="text" class="form-control" name="to" placeholder="To ">
                                <input type="text" class="form-control date-picker" name="start" placeholder="Start ">
                                <input type="text" class="form-control date-picker" name="return" placeholder="Return ">
                                <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults ">
                                <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child ">
                                <a href="#" class="text-uppercase primary-btn">Search Holidays</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End banner Area -->

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pb-70 menu-content col-lg-8">
                <div class="text-center title">
                    <h1 class="mb-10">Popular Destinations</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely
                        fast, day.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="relative single-destination">
                    <div class="relative thumb">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{ asset('assets/img/d1.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$150</a>
                        <h4>Mountain River</h4>
                        <p>Paraguay</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="relative single-destination">
                    <div class="relative thumb">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{ asset('assets/img/d2.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$250</a>
                        <h4>Dream City</h4>
                        <p>Paris</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="relative single-destination">
                    <div class="relative thumb">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{ asset('assets/img/d3.jpg') }}" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$350</a>
                        <h4>Cloud Mountain</h4>
                        <p>Sri Lanka</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular-destination Area -->


<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pb-70 menu-content col-lg-8">
                <div class="text-center title">
                    <h1 class="mb-10">We Provide Affordable Prices</h1>
                    <p>Well educated, intellectual people, especially scientists at all times demonstrate
                        considerably.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Cheap Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex align-items-center justify-content-between">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Luxury Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex align-items-center justify-content-between">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Camping Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex align-items-center justify-content-between">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End price Area -->


<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pb-70 menu-content col-lg-9">
                <div class="text-center title">
                    <h1 class="mb-10">Other issues we can help you with</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/o1.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Rent a Car</h4>
                    </a>
                    <p>
                        The preservation of human life is the ultimate value, a pillar of ethics and the
                        foundation.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/o2.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Cruise Booking</h4>
                    </a>
                    <p>
                        I was always somebody who felt quite sorry for myself, what I had not got compared.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/o3.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>To Do List</h4>
                    </a>
                    <p>
                        The following article covers a topic that has recently moved to center stage–at least it
                        seems.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/o4.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Food Features</h4>
                    </a>
                    <p>
                        There are many kinds of narratives and organizing principles. Science is driven by
                        evidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End other-issue Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pb-70 menu-content col-lg-8">
                <div class="text-center title">
                    <h1 class="mb-10">Testimonial from our Clients</h1>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a
                        fall from </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user1.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more
                            effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user2.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you
                            just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user1.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more
                            effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user2.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you
                            just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user1.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more
                            effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row single-testimonial item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/elements/user2.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you
                            just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="align-items-center justify-content-end row">
            <div class="home-about-left col-lg-6 col-md-12">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                    conduct standards especially in the workplace. That’s why it’s crucial that, as women, our
                    behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="text-uppercase primary-btn">request custom price</a>
            </div>
            <div class="home-about-right col-lg-6 col-md-12 no-padding">
                <img class="img-fluid" src="{{ asset('assets/img/about-img.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="d-flex justify-content-center row">
            <div class="pb-60 menu-content col-lg-9">
                <div class="text-center title">
                    <h1 class="mb-10">Latest from Our Blog</h1>
                    <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity
                        as has.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-blog-carusel">
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b1.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Low Cost Advertising</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b2.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Creative Outdoor Ads</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b3.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">It's Classified How To Utilize Free</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b1.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Low Cost Advertising</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b2.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">Creative Outdoor Ads</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('assets/img/b3.jpg') }}" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">It's Classified How To Utilize Free</h4>
                        </a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you.
                            A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End recent-blog Area -->

@endsection
