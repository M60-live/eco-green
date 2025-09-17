@extends('layouts.home')

@section('content')
    <!-- Start banner
====================================================-->
    <div id="particles-js" class="w-100 vh-100 overlay-white"
         style="background: url(images/header.jpg) no-repeat center center / cover fixed;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-12 col-lg-12 h-100">
                    <div class="banner-content y-middle color-dark z-index-1 w-60 lg-w-80 position-relative">
                        <h3>Africa's leading provider</h3>
                        <h1 class="banner-title cd-headline clip is-full-width">
                            in
                            <span class="cd-words-wrapper color-primary">
                            <b class="is-visible">sustainable</b>
                            <b>smart</b>
                            <b>integrated</b>
                            </span>
                            solutions
                        </h1>
                        <p class="my-15">
                            Providing solutions across critical sectors, supporting environmental protection, public health, and industrial growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner
    ====================================================-->
    <!-- Start About Us
    ====================================================-->
    <section class="about-us bg-light position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div
                        class="box-style-4 py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                        <div class="round-xl-radius flat-large icon-white bg-primary">
                            <i class="flaticon-banking"></i>
                        </div>
                        <h4 class="box-title-4 my-20 color-secondery">Our History</h4>
                        <div class="text-area">
                            <p>
                                A multi-disciplinary consulting and service company delivering innovative,
                                sustainable, and high-quality solutions across Africa.
                                We representatives of global technology and product manufacturers.
                            </p>
                        </div>
                        <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="#">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="box-style-4 py-40 px-30 lg-mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                        <div class="round-xl-radius flat-large icon-white bg-primary">
                            <i class="flaticon-arrow"></i>
                        </div>
                        <h4 class="box-title-4 my-20 color-secondery">Our Mission</h4>
                        <div class="text-area">
                            <p>
                                To deliver efficient, compliant, and innovative services that empower our clients to
                                meet environmental,
                                safety, operational, and development goals—while driving sustainability and value.
                            </p>
                        </div>
                        <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="#">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="box-style-4 py-40 px-30 lg-mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                        <div class="round-xl-radius flat-large icon-white bg-primary">
                            <i class="flaticon-insight"></i>
                        </div>
                        <h4 class="box-title-4 my-20 color-secondery">Our Vision</h4>
                        <div class="text-area">
                            <p>
                                To become Africa’s leading provider of sustainable, smart, and integrated solutions
                                across critical sectors,
                                supporting environmental protection, public health, and industrial growth.
                            </p>
                        </div>
                        <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="#">
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us
    ====================================================-->
    <!-- Grow Your Business Start
    ====================================================-->
    <div class="grow-business py-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-5">
                    <div class="grow-business-img z-index-1 position-relative">
                        <img src="images/partnership.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-7">
                    <div class="grow-info">
                        <div class="inner-title">
                            <h3 class="color-secondery mb-30">Strategic Partnerships</h3>
                        </div>
                        <p>
                            ECO GREEN GUARD LTD partners with global manufacturers, research institutions, and technology
                            firms to bring world-class solutions to Africa. We act as exclusive representatives and
                            agents, ensuring local presence and after-sales support for premium international
                            brands.
                        </p>
                        <a href="#" class="btn btn-window box-shodow-all mt-30">
                            <span class="top">Read More</span><span class="show">Click Here</span><span class="bottom">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Grow Your Business End
    ====================================================-->
    <!-- Start Services
    ====================================================-->
    <section class="bg-light position-relative z-index-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="box-style">
                        <div class="row">
                            <!-- Box Style Two
                            ===================================================-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="title md-mb-30">
                                    <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Our Core
                                        Services</h2>
                                    <p>Our services but not limited to the following.</p>
                                    <div class="table-footer pt-30">
                                        <a class="btn btn-secondery" href="/services">All Services</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="box-style-3 position-relative flat-large icon-primary py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 md-mt-30">
                                    <a href="service-details.html">
                                        <h4 class="box-title-3 my-20 d-inline-block">Environmental & Water Management</h4>
                                    </a>
                                    <ul class="list-group">
                                        <li class="list-group-item">Environmental Impact Assessments (EIA)</li>
                                        <li class="list-group-item">Water Resource Assessment & Hydrogeological Surveys</li>
                                        <li class="list-group-item">Groundwater Monitoring & Modelling</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="box-style-3 position-relative xl-mt-30 lg-mt-30 flat-large icon-primary py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                                    <a href="service-details.html">
                                        <h4 class="box-title-3 my-20 d-inline-block">EHS & Waste Management</h4>
                                    </a>
                                    <ul>
                                        <li class="list-group-item">Environmental, Health & Safety (EHS) Audits and Systems Design</li>
                                        <li class="list-group-item">Hazardous and Non-Hazardous Waste Management</li>
                                        <li class="list-group-item">Medical Waste Handling and Disposal</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="box-style-3 position-relative flat-large icon-primary py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                                    <a href="service-details.html">
                                        <h4 class="box-title-3 my-20 d-inline-block">Mining & Industrial Logistics</h4>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li class="list-group-item">Supply of Mining Inputs and Equipment</li>
                                        <li class="list-group-item">PPE and Safety Gear Supply</li>
                                        <li class="list-group-item">Specialized Logistics and Freight Services</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="box-style-3 position-relative flat-large icon-primary py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                                    <a href="service-details.html">
                                        <h4 class="box-title-3 my-20 d-inline-block">Construction & Project Management</h4>
                                    </a>
                                    <ul class="list-group">
                                        <li class="list-group-item">Civil and Structural Works</li>
                                        <li class="list-group-item">Turnkey Project Implementation</li>
                                        <li class="list-group-item">Site Supervision and Quality Assurance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="box-style-3 position-relative flat-large icon-primary py-40 px-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                                    <a href="service-details.html">
                                        <h4 class="box-title-3 my-20 d-inline-block">Laboratory Services</h4>
                                    </a>
                                    <ul class="list-group">
                                        <li class="list-group-item">Water, Soil, and Air Quality Testing</li>
                                        <li class="list-group-item">Analytical Chemistry and Microbiology</li>
                                        <li class="list-group-item">Laboratory Installation, Calibration & Training</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services
    ====================================================-->
    <!-- Choose Us Start
    ====================================================-->
    <section class="choose-us-one bg-secondery">
        <div class="container">
            <div class="position-relative z-index-1">
                <div class="row justify-content-start">
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="title color-white mb-30">
                            <span class="color-primary">Why Choose us</span>
                            <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30 w-75 color-white">We Provide The Best Service & Support.</h2>
                            <ul>
                                <li>Multisectoral Expertise</li>
                                <li>Compliance with International Standards (ISO, IFC, WHO, etc.)</li>
                                <li>Local Insight with Continental Reach</li>
                                <li>Reliable Procurement & Logistics Network</li>
                                <li>Commitment to Sustainability and Innovation</li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="col-md-12 col-lg-12 col-xl-8 offset-lg-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="box-style-7 color-white flat-medium mt-30 icon-primary">
                                    <h4 class="box-title mb-20 color-white">Provide Trust</h4>
                                    <p>Ridiculus integer dignissim morbi ferment facilis faucibus turpis amet dictum tortor tempu posuer montes urna facilisis urna lobortis aliquet.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="box-style-7 color-white flat-medium mt-30 icon-primary">
                                    <h4 class="box-title mb-20 color-white">Business grow</h4>
                                    <p>Ridiculus integer dignissim morbi ferment facilis faucibus turpis amet dictum tortor tempu posuer montes urna facilisis urna lobortis aliquet.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="box-style-7 color-white flat-medium mt-30 icon-primary">
                                    <h4 class="box-title mb-20 color-white">Safe Planning</h4>
                                    <p>Ridiculus integer dignissim morbi ferment facilis faucibus turpis amet dictum tortor tempu posuer montes urna facilisis urna lobortis aliquet.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="box-style-7 color-white flat-medium mt-30 icon-primary">
                                    <h4 class="box-title mb-20 color-white">24/7 Support</h4>
                                    <p>Ridiculus integer dignissim morbi ferment facilis faucibus turpis amet dictum tortor tempu posuer montes urna facilisis urna lobortis aliquet.</p>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Us Start
    ====================================================-->
    <!-- Testimonial Start
    ====================================================-->

    <!-- Start Partners one
    ====================================================-->
    <div class="our-partners-one bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel partners-1 flat-big icon-secondery text-center">
                        <i class="flaticon-envato"></i>
                        <i class="flaticon-themeforest"></i>
                        <i class="flaticon-codecanyon"></i>
                        <i class="flaticon-graphicriver"></i>
                        <i class="flaticon-audiojungle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partners one
    ====================================================-->

@endsection
