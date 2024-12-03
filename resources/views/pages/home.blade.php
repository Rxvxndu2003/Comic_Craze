@extends('Layout.layouthome')

@section('carousel')
<div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/marvelw.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Comic Craze //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Unleash Your Inner Hero</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/hulkw.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/marvaelf.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Comic Craze //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Unleash Your Inner Hero</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/spiderman.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>  
@endsection

@section('service')
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="d-flex py-5 px-4">
        <i class="fa fa-tshirt fa-3x text-primary flex-shrink-0"></i>
        <div class="ps-4">
            <h5 class="mb-3">Quality Cosplay Costumes</h5>
            <p>Comic Craze offers high-quality, detailed cosplay costumes that bring your favorite characters to life.</p>
            <a class="text-secondary border-bottom" href="">Read More</a>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
    <div class="d-flex bg-light py-5 px-4">
        <i class="fa fa-handshake fa-3x text-primary flex-shrink-0"></i>
        <div class="ps-4">
            <h5 class="mb-3">Expert Craftsmanship</h5>
            <p>Our skilled designers and craftsmen ensure each costume is meticulously created for authenticity and comfort.</p>
            <a class="text-secondary border-bottom" href="">Read More</a>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <div class="d-flex py-5 px-4">
        <i class="fa fa-cogs fa-3x text-primary flex-shrink-0"></i>
        <div class="ps-4">
            <h5 class="mb-3">Premium Materials</h5>
            <p>Comic Craze uses only the best materials, ensuring your cosplay looks stunning and lasts through countless events.</p>
            <a class="text-secondary border-bottom" href="">Read More</a>
        </div>
    </div>
</div>  
@endsection

@section('about')
<div class="col-lg-6 pt-4" style="min-height: 400px;">
    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
        <img class="position-absolute img-fluid w-100 h-100" src="img/comic-about.jpg" style="object-fit: cover;" alt="Cosplay Costumes">
        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
            <h1 class="display-4 text-white mb-0">10 <span class="fs-4">Years</span></h1>
            <h4 class="text-white">Experience</h4>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <h6 class="text-primary text-uppercase">// About Us //</h6>
    <h1 class="mb-4"><span class="text-primary">Comic Craze</span> Is Your One-Stop Shop for Cosplay</h1>
    <p class="mb-4">At Comic Craze, we bring your favorite characters to life with premium-quality cosplay costumes and accessories. With over 10 years of experience, our team of designers and craftsmen ensures that every detail is perfect, from the fabric to the smallest accessories. Whether you're gearing up for a convention or a photoshoot, we have the right outfit for you!</p>
    <div class="row g-4 mb-3 pb-3">
        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
            <div class="d-flex">
                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <span class="fw-bold text-secondary">01</span>
                </div>
                <div class="ps-3">
                    <h6>Expert Cosplay Designers</h6>
                    <span>Our team brings your character vision to life with precision and creativity.</span>
                </div>
            </div>
        </div>
        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
            <div class="d-flex">
                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <span class="fw-bold text-secondary">02</span>
                </div>
                <div class="ps-3">
                    <h6>Quality Materials</h6>
                    <span>We use premium materials to ensure durability, comfort, and accuracy in every costume.</span>
                </div>
            </div>
        </div>
        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
            <div class="d-flex">
                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                    <span class="fw-bold text-secondary">03</span>
                </div>
                <div class="ps-3">
                    <h6>Unmatched Attention to Detail</h6>
                    <span>From stitching to props, our costumes are crafted with the utmost attention to every detail.</span>
                </div>
            </div>
        </div>
    </div>
    <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
</div>
@endsection


@section('fact')
<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
    <i class="fa fa-check fa-2x text-white mb-3"></i>
    <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
    <p class="text-white mb-0">Years of Cosplay Expertise</p>
</div>
<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
    <h2 class="text-white mb-2" data-toggle="counter-up">50</h2>
    <p class="text-white mb-0">Expert Cosplay Designers</p>
</div>
<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
    <i class="fa fa-users fa-2x text-white mb-3"></i>
    <h2 class="text-white mb-2" data-toggle="counter-up">500</h2>
    <p class="text-white mb-0">Happy Cosplayers</p>
</div>
<div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
    <i class="fa fa-tshirt fa-2x text-white mb-3"></i>
    <h2 class="text-white mb-2" data-toggle="counter-up">1,000</h2>
    <p class="text-white mb-0">Cosplay Costumes Created</p>
</div>
@endsection


@section('service1')
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary text-uppercase">// Our Services //</h6>
        <h1 class="mb-5">Explore Our Cosplay Services</h1>
    </div>
    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-lg-4">
            <div class="nav w-100 nav-pills me-4">
                <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                    <i class="fa fa-mask fa-2x me-3"></i>
                    <h4 class="m-0">Custom Cosplay Design</h4>
                </button>
                <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                    <i class="fa fa-paint-brush fa-2x me-3"></i>
                    <h4 class="m-0">Cosplay Accessories</h4>
                </button>
                <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                    <i class="fa fa-cogs fa-2x me-3"></i>
                    <h4 class="m-0">Cosplay Prop Creation</h4>
                </button>
                <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                    <i class="fa fa-certificate fa-2x me-3"></i>
                    <h4 class="m-0">Cosplay Costume Alterations</h4>
                </button>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="tab-content w-100">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/girl.jpg" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Custom Cosplay Design</h3>
                            <p class="mb-4">Our designers work with you to create the perfect custom cosplay. Whether it's your favorite anime, superhero, or video game character, we'll bring it to life with meticulous detail and care.</p>
                            <p><i class="fa fa-check text-success me-3"></i>Personalized Design</p>
                            <p><i class="fa fa-check text-success me-3"></i>Detailed Craftsmanship</p>
                            <p><i class="fa fa-check text-success me-3"></i>High-Quality Materials</p>
                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/jocker.jpg" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Cosplay Accessories</h3>
                            <p class="mb-4">We offer a variety of cosplay accessories to complement your costumes. From weapons to wigs, armor to shields, we craft every accessory with precision to match the character.</p>
                            <p><i class="fa fa-check text-success me-3"></i>Authentic Replicas</p>
                            <p><i class="fa fa-check text-success me-3"></i>High-Quality Materials</p>
                            <p><i class="fa fa-check text-success me-3"></i>Comfort and Durability</p>
                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/cow.jpg" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Cosplay Prop Creation</h3>
                            <p class="mb-4">Create stunning props that complete your cosplay look. From swords to shields, guns to magical staffs, we bring your favorite character’s weapons and gear to life with high precision.</p>
                            <p><i class="fa fa-check text-success me-3"></i>Custom Crafting</p>
                            <p><i class="fa fa-check text-success me-3"></i>Authentic Detailing</p>
                            <p><i class="fa fa-check text-success me-3"></i>Lightweight and Functional</p>
                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-4">
                    <div class="row g-4">
                        <div class="col-md-6" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/king.jpg" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Cosplay Costume Alterations</h3>
                            <p class="mb-4">We provide professional alterations for your cosplay costumes to ensure a perfect fit. Whether it's resizing, adjusting seams, or adding custom details, we ensure every piece fits you like a glove.</p>
                            <p><i class="fa fa-check text-success me-3"></i>Tailored Fit</p>
                            <p><i class="fa fa-check text-success me-3"></i>Quality Adjustments</p>
                            <p><i class="fa fa-check text-success me-3"></i>Comfort and Style</p>
                            <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('contact')
    <div class="col-lg-6 py-5">
        <div class="py-5">
            <h1 class="text-white mb-4">Get In Touch With Us</h1>
            <p class="text-white mb-0">Whether you have a question about our cosplay services, need advice on your next project, or want to discuss your custom design, we're here to help! Reach out to us using the form below, and our team will get back to you as soon as possible.</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
            <h1 class="text-white mb-4">Contact Us</h1>
            <form action="#" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="form-group">
                        <input type="text" name="full_name" id="full_name" class="form-control border-0" placeholder="Full Name" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" name="email" id="email" class="form-control border-0" placeholder="Email Address" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" name="subject" id="subject" class="form-control border-0" placeholder="Subject" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <textarea name="message" id="message" class="form-control border-0" placeholder="Your Message" rows="4" style="height: 150px;"></textarea>
                    </div>
                    <div class="col-12 ">
                        <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('team')
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Designers //</h6>
                <h1 class="mb-5">Our Expert Designers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Ravindu Bandara</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Ravishka Nimsara</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Krishan Danushka</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Sarindu Amarathunga</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('testimonial')
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sarah Jones</h5>
                    <p>Teacher</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">M&N's service is top-notch! They diagnosed the weird noise in my car quickly and the repairs were done right the first time. My car feels brand new again! </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">David Lee</h5>
                    <p>Engineer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Taking my truck to M&N for oil changes is a breeze. Their technicians are friendly and thorough, always checking everything under the hood. Plus, their prices are very reasonable.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Dr. Emily Chen</h5>
                    <p>Doctor</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">As a busy doctor, I don't have time to deal with car troubles. M&N makes it easy. They were upfront about the cost of repairs for my brakes and even offered a loaner car while mine was in the shop.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mark Wilson</h5>
                    <p>Bussiness Man</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">M&N's tire experts are lifesavers! They helped me choose the perfect new tires for my winter driving needs, and the installation was quick and professional. Now I feel confident and safe on the road.</p>
                    </div>
                </div>
            </div>
@endsection