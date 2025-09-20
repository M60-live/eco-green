@extends('layouts.layout')

@section('content')

    <div class="page-banner overlay-secondery-8" style="background: url(images/about.jpg) bottom center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">About</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
{{--                            <p>Velit adipiscing primis nostra magna conubia risus viverra rhoncus scelerisque consequat eget sit lacus. Ipsum posuere enim. Habitas varius blandit curae cubilia vehicula.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title mb-30 w-50 lg-w-80 text-center mx-auto">
{{--                        <span class="color-primary">History</span>--}}
                        <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">Company Story</h2>
                        <p>
                            ECO GREEN GUARD LTD is a multidisciplinary consulting and service company committed to
                            delivering innovative, sustainable, and high-quality solutions across Africa.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="owl-carousel history-timeline mt-30 owl-nav-style-one">

                        <div class="history-item bg-white">
                            <div class="row">
                                <div class="col-lg-5"><div style="background: url(images/find_us.jpg); background-position: bottom right; width: 100%; height: 100%"></div></div>
                                <div class="col-lg-7">
                                    <div class="text-area py-40 pr-30 lg-pl-30">
                                        <span class="color-primary">Overview</span>
                                        <h4 class="mb-20">Find Us Everywhere</h4>
                                        <p>
                                            Headquartered in Ghana, with operational reach across the continent, we offer integrated
                                            services in water and environmental management, EHS, waste management, mining logistics,
                                            healthcare supply, infrastructure, and procurement. We also serve as a trusted representative of
                                            global technology and product manufacturers, bringing cutting-edge solutions to our clients across various sectors.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="history-item bg-white">
                            <div class="row">
                                <div class="col-lg-6"><div style="background: url(images/geographic.jpg); background-position: bottom right; width: 100%; height: 100%"></div></div>
                                <div class="col-lg-6">
                                    <div class="text-area py-40 pr-30 lg-pl-30">
                                        <span class="color-primary">Location</span>
                                        <h4 class="mb-20">Geographic Coverage</h4>
                                        <p>
                                            Ghana (Head Office)<br><br>
                                            Operations and representation across:<br>
                                            <span class="color-primary">Nigeria | Côte d’Ivoire | Senegal | Kenya | DRC | South Africa | Zambia</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
