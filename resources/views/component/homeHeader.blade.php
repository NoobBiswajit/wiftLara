    <header class="hearder-area">
        <div class="hero-slider">
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img"
                            style="background-image: url({{ asset('asset/img/hero_section.jpg') }})"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img"
                            style="background-image: url({{ asset('asset/img/slider001.jpg') }})"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img"
                            style="background-image: url({{ asset('asset/img/slider002.jpg') }})"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <nav class="px-3 lg:px-0 nav_area bg-black" id="navbar">
            <div class="py-4">
                <div class="container mx-auto">
                    <div class="md:grid grid-cols-12 gap-10 items-center justify-between">
                        <div class="col-span-3">
                            <div class=" flex justify-between items-center"> <a href="#">
                                    <img class="lg:h-16 h-8" src="{{ asset('asset/img/NEW-LOGO-white.png') }}"
                                        alt="" /> </a>
                                <button class="text-white text-3xl  " id="flip">
                                    <iconify-icon icon="ic:round-menu"></iconify-icon>
                                </button>
                            </div>
                        </div>
                        <div class="col-span-9">
                            <div class="md:grid grid-cols-12 justify-between items-center gap-5 main md:mt-0 mt-10"
                                id="dropdwon">
                                <div class="col-span-10 ">
                                    <ul class="md:flex justify-between items-center ">
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="home-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="index.html">Home</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="home-link" href="index.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Home</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="about-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="{{ url('about') }}">About</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="about-link" href="about.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">About</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="services-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="services.html">Services</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="services-link" href="services.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Services</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="blog-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="blog.html">Blogs</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="blog-link" href="blog.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Blogs</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="portfolio-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="portfolio.html">Portfolio</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="portfolio-link" href="portfolio.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Portfolio</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="career-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="career.html">Career</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="career-link" href="career.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Career</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="flex justify-center">
                                            <div class="md:block hidden">
                                                <a id="contact-link"
                                                    class="text-base font-rlw text-white font-semibold hover:text-white"
                                                    href="contact.html">Contact Us</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="contact-link" href="contact.html"
                                                            class="text-base font-rlw text-white font-semibold hover:text-white text-center">Contact
                                                            Us</a>
                                                    </div>
                                                    <div class="flex justify-center ">
                                                        <div class="bg-white w-40 h-[2px]"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex md:justify-end justify-center md:mt-0 mt-5"> <a
                                            class="font-rlw text-black font-base py-1 px-3 rounded-md font-semibold bg-white"
                                            href="signup.html">Sign Up</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="text-slider px-3 lg:px-10 xl:px-0 drelative -top-5 ">
            <div class="container mx-auto">
                <div class=" ">
                    <div class="swiper mySwiper h-[100px] md:h-[200px]">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="">
                                    <h2 class="text-xl xl:text-5xl font-rlw font-bold text-white"> Unleash Your <br />
                                        <span class="text-rpigment">Potential</span> with NEXWIFT </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <h2 class="text-xl  xl:text-5xl font-rlw font-bold text-white"> Empowering Your
                                        <br /> <span class="text-rpigment">Digital</span> Journey with NEXWIFT </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <h2 class="text-xl  xl:text-5xl font-rlw font-bold text-white"> Experience<br />
                                        <span class="text-rpigment">Innovation </span>at NEXWIFT</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="slogan_text hidden lg:flex">
                <p class="text-sm font-rlw text-white">"Welcome to NEXWIFT, where innovation and creativity converge to
                    <br> craft your digital success. Join us on a journey to
                    elevate your brand, <br> one pixel at a time." </p>
            </div>
        </div>
    </header>
