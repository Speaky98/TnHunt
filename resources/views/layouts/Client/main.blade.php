@extends("layouts.Client.client")
@section("content_2")
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto py-3">
                        <div class="row">
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
                                    <h5 class="mt-3">Coded Elements</h5>
                                    <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4 position-relative">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
                                    <h5 class="mt-3">Design Blocks</h5>
                                    <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
                                </div>
                                <hr class="vertical dark">
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-center">
                                    <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                                    <h5 class="mt-3">Pages</h5>
                                    <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                        <div class="rotating-card-container">
                            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                                <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                    <div class="card-body py-7 text-center">
                                        <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                        <h3 class="text-white">Feel the <br /> Material Kit</h3>
                                        <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                                    </div>
                                </div>
                                <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                    <div class="card-body pt-7 text-center">
                                        <h3 class="text-white">Discover More</h3>
                                        <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                                        <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                                    <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                                    <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                                    <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                                    <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start mt-5">
                            <div class="col-md-6 mt-3">
                                <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                                <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="info">
                                    <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                                    <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                                    <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center my-sm-5">
                        <div class="col-lg-6">
                            <span class="badge bg-primary mb-3">Infinite combinations</span>
                            <h2 class="text-dark mb-0">Huge collection of sections</h2>
                            <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-sm-5 mt-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Design Blocks</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">A selection of 45 page sections that fit perfectly in any combination</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4 mt-md-0">
                                <a href="./sections/page-sections/hero-sections.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/headers.jpg" alt="hero">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Page Headers</h6>
                                        <p class="text-secondary text-sm">10 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/page-sections/features.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/features.jpg" alt="features">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Features</h6>
                                        <p class="text-secondary text-sm">14 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pricing.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="pricing">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Pricing</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/faq.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="faq">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">FAQ</h6>
                                        <p class="text-secondary text-sm">1 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/blogs.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="blog posts">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Blog Posts</h6>
                                        <p class="text-secondary text-sm">11 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/testimonials.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="testimonials">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Testimonials</h6>
                                        <p class="text-secondary text-sm">11 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/teams.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="teams">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Teams</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/stats.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="stats">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Stats</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/call-to-action.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="CTA">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Call to Actions</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/projects.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="applications">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Applications</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/logo-area.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="logo areas">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Logo Areas</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/footers.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="footers">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Footers</h6>
                                        <p class="text-secondary text-sm">10 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/general-cards.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="general cards">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">General Cards</h6>
                                        <p class="text-secondary text-sm">9 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/content-sections.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="content sections">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Content Sections</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Navigation</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">30+ components that will help go through the pages</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="./sections/navigation/navbars.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/navbars.jpg" alt="navbars">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Navbars</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/navigation/nav-tabs.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/nav-tabs.jpg" alt="navtabs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Nav Tabs</h6>
                                        <p class="text-secondary text-sm">2 Nav Tabs</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/navigation/pagination.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pagination.jpg" alt="pagination">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Pagination</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Input Areas</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">50+ elements that you need for text manipulation and insertion</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/newsletters.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="newsletter">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Newsletters</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 m-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/contact-sections.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="contact sections">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Contact Sections</h6>
                                        <p class="text-secondary text-sm">8 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/input-areas/forms.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/forms.jpg" alt="forms">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Forms</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="./sections/input-areas/inputs.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/inputs.jpg" alt="inputs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Inputs</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-lg-6">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Attention Catchers</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">20+ Fully coded components that popup from different places of the screen</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="./sections/attention-catchers/alerts.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/alerts.jpg" alt="alerts">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Alerts</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/toasts.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="notifications">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Notifications</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/attention-catchers/tooltips-popovers.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/popovers.jpg" alt="tooltip_popover">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Tooltips & Popovers</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="./sections/attention-catchers/modals.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/modals.jpg" alt="modals">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Modals</h6>
                                        <p class="text-secondary text-sm">5 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                            <h3>Elements</h3>
                            <h6 class="text-secondary font-weight-normal pe-3">80+ carefully crafted small elements that come with multiple colors and shapes</h6>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="./sections/elements/buttons.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/buttons.jpg" alt="buttons">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Buttons</h6>
                                        <p class="text-secondary text-sm">6 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/elements/avatars.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/avatars.jpg" alt="avatars">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Avatars</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/elements/dropdowns.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/dropdowns.jpg" alt="dropdowns">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Dropdowns</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <a href="./sections/elements/toggles.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/switch.jpg" alt="toggles">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Toggles</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/social-buttons.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="social buttons">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Social Buttons</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/button-groups.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="button groups">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Button Groups</h6>
                                        <p class="text-secondary text-sm">5 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="./sections/elements/breadcrumbs.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/breadcrumbs.jpg" alt="breadcrumbs">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Breadcrumbs</h6>
                                        <p class="text-secondary text-sm">1 Example</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/elements/badges.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/badges.jpg" alt="badges">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Badges</h6>
                                        <p class="text-secondary text-sm">3 Example</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/elements/progress-bars.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/progress.jpg" alt="progress">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Progress Bars</h6>
                                        <p class="text-secondary text-sm">4 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <a href="javascript:;">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <div class="position-absolute top-0 end-0 p-2 z-index-1">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="lock-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <circle id="Oval" fill="#1F2937" cx="12" cy="12" r="12"></circle>
                                                    <g id="padlock" transform="translate(7.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <path d="M5,0 C3.16666667,0 1.66666667,1.5 1.66666667,3.33333333 L1.66666667,4.58333333 C0.666666667,5.5 0,6.83333333 0,8.33333333 C0,11.0833333 2.25,13.3333333 5,13.3333333 C7.75,13.3333333 10,11.0833333 10,8.33333333 C10,6.83333333 9.33333333,5.5 8.33333333,4.58333333 L8.33333333,3.33333333 C8.33333333,1.5 6.83333333,0 5,0 Z M5.83333333,8.91666667 L5.83333333,10.8333333 L4.16666667,10.8333333 L4.16666667,8.91666667 C3.66666667,8.66666667 3.33333333,8.08333333 3.33333333,7.5 C3.33333333,6.58333333 4.08333333,5.83333333 5,5.83333333 C5.91666667,5.83333333 6.66666667,6.58333333 6.66666667,7.5 C6.66666667,8.08333333 6.33333333,8.66666667 5.83333333,8.91666667 Z M6.66666667,3.66666667 C6.16666667,3.41666667 5.58333333,3.33333333 5,3.33333333 C4.41666667,3.33333333 3.83333333,3.41666667 3.33333333,3.66666667 L3.33333333,3.33333333 C3.33333333,2.41666667 4.08333333,1.66666667 5,1.66666667 C5.91666667,1.66666667 6.66666667,2.41666667 6.66666667,3.33333333 L6.66666667,3.66666667 Z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <img class="w-100 my-auto opacity-6" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/tables.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Pro Element" alt="tables">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Tables</h6>
                                        <p class="text-secondary text-sm">3 Examples</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="./sections/elements/typography.html">
                                    <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                                        <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/typography.jpg" alt="typography">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Typography</h6>
                                        <p class="text-secondary text-sm">2 Examples</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="row text-center my-sm-5 mt-5">
                        <div class="col-lg-6 mx-auto">
                            <span class="badge bg-primary mb-3">Boost creativity</span>
                            <h2 class="">With our coded pages</h2>
                            <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <a href="./pages/about-us.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/about-us.jpg" alt="aboutus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">About Us Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-5">
                                <a href="./pages/contact-us.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/contact-us.jpg" alt="contacus">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Contact Us Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/sign-in.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/sign-in.jpg" alt="signin">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Sign In Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-3 mt-6">
                                <a href="./pages/author.html">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/assets/img/author.jpg" alt="author">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Author Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto mt-md-0 mt-5">
                        <div class="position-sticky" style="top:100px !important">
                            <h4 class="">Presentation Pages for Company, Sign In Page, Author and Contact</h4>
                            <h6 class="text-secondary font-weight-normal">These is just a small selection of the multiple possibitilies you have. Focus on the business, not on the design.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <h4 class="mb-1">Thank you for your support!</h4>
                        <p class="lead mb-0">We deliver the best web products</p>
                    </div>
                    <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1"></i> Share
                        </a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
                            <i class="fab fa-pinterest me-1"></i> Pin it
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    </div>
@endsection
