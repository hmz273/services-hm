<div>
    
<!-- About Start -->
<div class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{asset('assets/img/about.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="about-text">
                    <h2><span>10</span> Years Experience</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<div class="newsletter">
    <div class="container">
        {{-- <div class="row align-items-center"> --}}
            {{-- <div class="col-lg-3 col-md-6"> --}}
                <livewire:search-user/>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>

<!-- Service Start --
<div class="service" id="service">
    <div class="container">
        <div class="section-header">
            <p>Our Services</p>
            <h2>Provide Services Worldwide</h2>
        </div>
        <div class="row">
            {{-- @foreach ($jobs as $jb) --}}
              <div class="col-lg-3 col-md-6">
                  <div class="service-item">
                      <img src="{asset('assets/img/service-1.jpg')}}" alt="Service">
                      {{-- <img src="{{asset('public/images/public')}}"> --}}
                      <h3>{ $jb->service }}</h3>
                      {{-- <p>
                        {{ $jb->slug }}
                      </p> --}}
                      {{-- <a class="btn" href="">Learn More</a> --}}
                  </div>
              </div>
              {{-- @endforeach --}}
          </div>
    </div>
</div>
 Service End -->


<!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-header left">
                    <p>Why Choose Us</p>
                    <h2>Expert Cleaners and World Class Services</h2>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                </p>
                <a class="btn" href="">Learn More</a>
            </div>
            <div class="col-md-7">
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <img src="{{asset('assets/img/feature-1.jpg')}}" alt="Feature">
                    </div>
                    <div class="col-7">
                        <h3>Expert Cleaners</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <img src="{{asset('assets/img/feature-2.jpg')}}" alt="Feature">
                    </div>
                    <div class="col-7">
                        <h3>Reasonable Prices</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <img src="{{asset('assets/img/feature-3.jpg')}}" alt="Feature">
                    </div>
                    <div class="col-7">
                        <h3>Quick & Best Services</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header">
            <p>Team Member</p>
            <h2>Meet Our Expert Cleaners</h2>
        </div>
        <div class="row">
            @foreach ($jobs as $jb)
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>{{ $jb->name }}</h2>
                        {{-- @foreach ($doctors as $doctor) --}}
                        <h3>{{ $jb->ville }}</h3>
                        <h3>{{ $jb->service }}</h3>
                        
                        
                        <div class="team-social">
                            <a class="social-tw" value="{{ $jb->phone }}"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="tel:{{ $jb->phone }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    {{ $jobs->links() }}
</div>
<!-- Team End -->


<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-header left">
                    <p>You Might Ask</p>
                    <h2>Frequently Asked Questions</h2>
                </div>
                <img src="{{asset('assets/img/faqs.jpg')}}" alt="Image">
            </div>
            <div class="col-md-7">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                <span>1</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                <span>2</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                <span>3</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                <span>4</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                <span>5</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div> 
                </div>
                {{-- <a class="btn" href="">Ask more</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->


<!-- Pricing Plan Start -->
{{-- <div class="price">
    <div class="container">
        <div class="section-header">
            <p>Pricing Plan</p>
            <h2>No Extra Hidden Charges</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="price-title">
                            <h2>Standard</h2>
                        </div>
                        <div class="price-pricing">
                            <h2><small>$</small>99</h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-des">
                            <ul>
                                <li>3 Bedrooms cleaning</li>
                                <li>2 Bathrooms cleaning</li>
                                <li>1 Living room Cleaning</li>
                                <li>Vacuum Cleaning</li>
                                <li>Within 6 Hours</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <div class="price-icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="price-title">
                            <h2>Premium</h2>
                        </div>
                        <div class="price-pricing">
                            <h2><small>$</small>149</h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-des">
                            <ul>
                                <li>5 Bedrooms cleaning</li>
                                <li>3 Bathrooms cleaning</li>
                                <li>2 Living room Cleaning</li>
                                <li>Vacuum Cleaning</li>
                                <li>Within 6 Hours</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-icon">
                            <i class="fa fa-gift"></i>
                        </div>
                        <div class="price-title">
                            <h2>Enterprise</h2>
                        </div>
                        <div class="price-pricing">
                            <h2><small>$</small>199</h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-des">
                            <ul>
                                <li>8 Bedrooms cleaning</li>
                                <li>5 Bathrooms cleaning</li>
                                <li>3 Living room Cleaning</li>
                                <li>Vacuum Cleaning</li>
                                <li>Within 12 Hours</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Pricing Plan End -->


<!-- Newsletter Start
<div class="newsletter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2>Get A Free Quote</h2>
                <p>
                    Lorem ipsum dolor sit amet adipiscing elit
                </p>
            </div>
            <div class="col-md-4">
                <div class="form">
                    <input class="form-control" placeholder="Email here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
 Newsletter End 


 Testimonial Start 
<div class="testimonial">
    <div class="container">
        <div class="section-header">
            <p>Client Review</p>
            <h2>Client Says About Service</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    {{-- <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt=""> --}}
                </div>
                <div class="testimonial-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    {{-- <img src="{{asset('assets/img/testimonial-2.jpg')}}" alt=""> --}}
                </div>
                <div class="testimonial-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    {{-- <img src="{{asset('assets/img/testimonial-3.jpg')}}" alt=""> --}}
                </div>
                <div class="testimonial-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    {{-- <img src="{{asset('assets/img/testimonial-4.jpg')}}" alt=""> --}}
                </div>
                <div class="testimonial-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
        </div>
    </div>
</div>
 Testimonial End 


 Call to Action Start 
<div class="call-to-action">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h2>Get A Free Cleaning Service</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </p>
            </div>
            <div class="col-md-3">
                <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
            </div>
        </div>
    </div>
</div>
</div>