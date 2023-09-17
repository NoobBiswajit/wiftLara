<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
     <link rel="stylesheet" href="{{asset('asset/style.css')}}" />
</head>
<body>
    <!-- =========Nav-end======== -->
    <header class="hearder-area">
        <div class="hero-slider">
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img" style="background-image: url({{asset('asset/img/hero_section.jpg')}})"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img" style="background-image: url({{asset('asset/img/slider001.jpg')}})"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-cover bg-no-repeat bg-center slider_img" style="background-image: url({{asset('asset/img/slider002.jpg')}})"></div>
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
                                <img class="lg:h-16 h-8" src="{{asset('asset/img/NEW-LOGO-white.png')}}" alt="" /> </a>
                                <button class="text-white text-3xl  " id="flip">
                                    <iconify-icon icon="ic:round-menu"></iconify-icon>
                                </button>
                            </div>
                        </div>
                        <div class="col-span-9" >
                            <div class="md:grid grid-cols-12 justify-between items-center gap-5 main md:mt-0 mt-10" id="dropdwon">
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
                                                        <a id="home-link" href="index.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Home</a>
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
                                                   href="about.html">About</a>
                                            </div>
                                            <div class="md:hidden block">
                                                <div class="flex-col justify-center">
                                                    <div class="flex justify-center items-center">
                                                        <a id="about-link" href="about.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">About</a>
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
                                                        <a id="services-link" href="services.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Services</a>
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
                                                        <a id="blog-link" href="blog.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Blogs</a>
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
                                                        <a id="portfolio-link" href="portfolio.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Portfolio</a>
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
                                                        <a id="career-link" href="career.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Career</a>
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
                                                        <a id="contact-link" href="contact.html" class="text-base font-rlw text-white font-semibold hover:text-white text-center">Contact Us</a>
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
                                    <div class="flex md:justify-end justify-center md:mt-0 mt-5"> <a class="font-rlw text-black font-base py-1 px-3 rounded-md font-semibold bg-white" href="signup.html">Sign Up</a> </div>
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
                                    <h2 class="text-xl xl:text-5xl font-rlw font-bold text-white"> Unleash Your <br /> <span class="text-rpigment">Potential</span> with NEXWIFT </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <h2 class="text-xl  xl:text-5xl font-rlw font-bold text-white"> Empowering Your <br /> <span class="text-rpigment">Digital</span> Journey with NEXWIFT </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <h2 class="text-xl  xl:text-5xl font-rlw font-bold text-white"> Experience<br /> <span class="text-rpigment">Innovation </span>at NEXWIFT</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
        <div class="slogan_text hidden lg:flex">
            <p class="text-sm font-rlw text-white">"Welcome to NEXWIFT, where innovation and creativity converge to <br> craft your digital success. Join us on a journey to
            elevate your brand, <br> one pixel at a time." </p>
        </div>
     </div>
    </header>
   <!-- ======Header-end=========== -->
    <section>
        <div class="about-area bg-white px-3 lg:px-10">
            <div class="container mx-auto lg:pt-20 py-10">
                <div class="grid md:grid-cols-2 md:gap-4 xl:gap-10 items-center lg:items-start">
                    <div class="">
                        <div class="flex justify-center lg:justify-start">
                            <div class="heading_text">
                                <h2 class="text-Nblue font-rlw text-3xl font-semibold"> <span class="text-white">Ab</span>out Us </h2>
                                <div class="round_shep"></div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <p class="text-base font-rlw text-black font-medium text-justify md:text-left"> We are more than just a digital company; we are your partners in success. With a passionate team of experts in web
                            development, software solutions, graphic design, digital marketing, video editing, animation production, and more, we
                            specialize in transforming your vision into reality. Our mission is to empower businesses with creative solutions,
                            innovative strategies, and unmatched dedication. Welcome to NEXWIFT, where your success is our driving force. </p>

                        </div>
                        <div class="mt-10 flex justify-center md:justify-start"> <a class="text-white bg-Nblue px-2 py-1 text-sm md:text-base md:px-4 md:py-3 rounded-md font-rlw font-medium hover:bg-[#F25B62]" href="">Contact Us</a> </div>
                    </div>
                    <div class="">
                        <div class="flex md:justify-center xl:justify-end"> <img src="{{asset('asset/img/freelancing.png')}}" alt="" /> </div>
                    </div>
                </div>
            </div>
            <div class="about_doth hidden md:flex"> <img src="{{asset('asset/img/bluedoth.png')}}" alt="" /> </div>
            <div class="about_doth_red hidden xl:flex"> <img src="{{asset('asset/img/reddoth.png')}}" alt="" /> </div>
        </div>
    </section>
    <!-- About us end -->
    <section>
        <div class="py-10 xl:py-32 bg-bubbles solution_area px-3 lg:px-10 xl:px-0">
            <div class="container mx-auto">
                <div class="chalenges_text">
                    <h2 class="text-Nblue font-rlw text-2xl lg:text-3xl font-semibold text-center lg:text-left"> Challenges We Have Taken </h2>
                    <div class="chalenges_text_line"></div>
                    <div class="chalenges_text_line_small"></div>
                </div>
                <div class="mt-6 lg:mt-10">
                    <div class="grid lg:grid-cols-3 xl:grid-cols-3 md:grid-cols-2 gap-2 md:gap-5">
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Energy Efficiency </a> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Redundancy and High Availability </a> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Data Backup and Recovery </a> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Hardware Maintenance and Upgrades </a> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Monitoring and Analytics </a> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="bg-white rounded-md shadow-smallS py-6 px-3 solution_card">
                                <div class="flex justify-center text-rpigment text-6xl solution_info">
                                    <p>
                                        <iconify-icon icon="carbon:hybrid-networking-alt"></iconify-icon>
                                    </p>
                                </div>
                                <div class="flex justify-center"> <a href="" class="text-Nblue font-rlw font-semibold md:text-lg text-base"> Technological Advancements </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="solution_round_top1"> <img class="w-60" src="{{asset('asset/img/GVs.png')}}" alt="" /> </div>
            <div class="solution_round_top2"> <img class="w-60" src="{{asset('asset/img/GVs.png')}}" alt="" /> </div>
            <div class="solution_round_top3"> <img class="w-20" src="{{asset('asset/img/sadgwq.png')}}" alt="" /> </div>
        </div>
    </section>
    <!-- =====Solution-end======== -->
    <section>
        <div class="py-10 lg:py-20 bg-white px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
            <div class="chalenges_text">
                <h2 class="text-Nblue font-rlw text-2xl lg:text-3xl font-semibold  lg:text-left">Services</h2>
                <div class="chalenges_text_line"></div>
                <div class="chalenges_text_line_small"></div>
            </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2  gap-5 mt-10">
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                        <div class=" flex justify-center">
                            <img class=" w-[60px]"
                                 src="{{asset('asset/img/Icons/APP.png')}}"
                                 alt="">
                        </div>
                        <div class=" mt-6">
                            <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">Web Development</h2>
                            <div class=" lg:w-4/5 mx-auto mt-5">
                                <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Craft stunning, user-friendly websites that drive engagement and conversions.</p>

                            </div>
                            <div class=" flex justify-center mt-5">
                                <a href="#"
                                   class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                    Services</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                        <div class=" flex justify-center">
                            <img class=" w-[60px]"
                                 src="{{asset('asset/img/Icons/APP.png')}}"
                                 alt="">
                        </div>
                        <div class=" mt-6">
                            <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">Application Development</h2>
                            <div class=" lg:w-4/5 mx-auto mt-5">
                                <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Create mobile and web applications that enhance user experiences and business processes.</p>

                            </div>
                            <div class=" flex justify-center mt-5">
                                <a href="#"
                                   class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                    Services</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                        <div class=" flex justify-center">
                            <img class=" w-[60px]"
                                 src="{{asset('asset/img/Icons/APP.png')}}"
                                 alt="">
                        </div>
                        <div class=" mt-6">
                            <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">Video & Animation</h2>
                            <div class=" lg:w-4/5 mx-auto mt-5">
                                <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Produce captivating video content and animations that leave a lasting impression.</p>

                            </div>
                            <div class=" flex justify-center mt-5">
                                <a href="#"
                                   class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                    Services</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                            <div class=" flex justify-center">
                                <img class=" w-[60px]"
                                     src="{{asset('asset/img/Icons/APP.png')}}"
                                     alt="">
                            </div>
                            <div class=" mt-6">
                                <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">Digital Marketing & Consulting:</h2>
                                <div class=" lg:w-4/5 mx-auto mt-5">
                                    <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Elevate your online presence, reach your target audience, and outperform competitors with our digital marketing
                                    strategies and consulting services.</p>

                                </div>
                                <div class=" flex justify-center mt-5">
                                    <a href="#"
                                       class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                        Services</a>
                                </div>
                            </div>
                    </div>
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                            <div class=" flex justify-center">
                                <img class=" w-[60px]"
                                     src="{{asset('asset/img/Icons/APP.png')}}"
                                     alt="">
                            </div>
                            <div class=" mt-6">
                                <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">Graphic Design</h2>
                                <div class=" lg:w-4/5 mx-auto mt-5">
                                    <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Communicate your brand's identity effectively through eye-catching graphics and designs.</p>

                                </div>
                                <div class=" flex justify-center mt-5">
                                    <a href="#"
                                       class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                        Services</a>
                                </div>
                            </div>
                    </div>
                    <div class=" bg-bubbles px-2 py-6 rounded-md flex flex-col justify-between">
                            <div class=" flex justify-center">
                                <img class=" w-[60px]"
                                     src="{{asset('asset/img/Icons/APP.png')}}"
                                     alt="">
                            </div>
                            <div class=" mt-6">
                                <h2 class=" text-2xl text-Nblue text-center font-semibold font-rlw">App Development</h2>
                                <div class=" w-4/5 mx-auto mt-5">
                                    <p class="text-base text-center text-Nblue  font-semibold font-rlw ">Transform your ideas into powerful software solutions. Our skilled team specializes in custom software development,
                                    crafting intuitive applications that meet your unique business needs.</p>

                                </div>
                                <div class=" flex justify-center mt-5">
                                    <a href="#"
                                       class="text-white bg-Nblue hover:bg-black px-4 py-2 font-semibold  text-sm font-rlw ">Get
                                        Services</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============service-end================ -->
    <section>
        <div class="py-10 px-3 lg:px-10 xl:px-0">
            <div class="container mx-auto">
                <div class="flex justify-center lg:justify-start">
                    <div class="heading_text">
                        <h2 class="text-Nblue font-rlw text-3xl font-semibold"> <span class="text-white">Sta</span>tistcs </h2>
                        <div class="round_shep" ></div>
                    </div>
                </div>
                <div class="mt-20">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10">
                        <div class="">
                            <div class="flex justify-center">
                                <p class="text-6xl text-Nblue">
                                    <iconify-icon icon="fa-solid:medal"></iconify-icon>
                                </p>
                            </div>
                            <div class="flex justify-center mt-3">
                                <ul class="flex items-center">
                                    <li class="text-xl text-orange-400">
                                        <iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-xl text-orange-400">
                                        <iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-xl text-orange-400">
                                        <iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-xl text-orange-400">
                                        <iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-xl text-orange-400">
                                        <iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <h2 class="text-3xl font-rlw text-Nblue text-center font-bold"> 50+ </h2>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-center">
                                <p class="text-6xl text-Nblue">
                                    <iconify-icon icon="carbon:task-approved"></iconify-icon>
                                </p>
                            </div>
                            <div class="">
                                <h2 class="text-3xl font-semibold text-Nblue text-center font-rlw"> 20 <span class="text-xl">years</span> </h2>
                                <h2 class="text-xl font-semibold text-Nblue text-center font-rlw"> Proven Track Record </h2>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-center">
                                <p class="text-6xl text-Nblue">
                                    <iconify-icon icon="tdesign:dissatisfaction"></iconify-icon>
                                </p>
                            </div>
                            <div class="">
                                <h2 class="text-3xl font-semibold text-Nblue text-center font-rlw"> 98 <span class="text-xl">%</span> </h2>
                                <h2 class="text-xl font-semibold text-Nblue text-center font-rlw"> Customer Satisfaction </h2>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex justify-center">
                                <p class="text-6xl text-Nblue">
                                    <iconify-icon icon="octicon:tracked-by-closed-completed-24"></iconify-icon>
                                </p>
                            </div>
                            <div class="">
                                <h2 class="text-3xl font-semibold text-Nblue text-center font-rlw"> 1500 <span class="text-xl">+</span> </h2>
                                <h2 class="text-xl font-semibold text-Nblue text-center font-rlw"> We Have Completed </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Statistics========= -->
    <section>
        <div class="py-10 lg:py-32 bg-bubbles px-3 lg:px-10 xl:px-0">
            <div class="container mx-auto">
                <div class="xl:w-4/5 mx-auto shadow-smallS contact_area">
                    <div class="grid md:grid-cols-2">
                        <div class="bg-Nblue py-10 px-6 flex flex-col justify-between contact_content">
                            <div class="">
                                <p class="text-white font-rlw text-base lg:text-center text-justify"> We’re happy to answer any questions you may have and help you determine which of our services best fit your needs. We’re happy to answer any questions you may have and help you determine which of our services best fit your needs </p>
                            </div>
                            <div class="mt-10 lg:mt-0">
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-3 text-center md:text-left">
                                            <iconify-icon icon="material-symbols:call"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs text-center md:text-left">+880 1794 070778</h2>
                                    </div>
                                </div>
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-2">
                                            <iconify-icon icon="material-symbols:mail"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs font-rlw">info@nexwift.com </h2>
                                    </div>
                                </div>
                                <div class="mt-2 flex gap-2">
                                    <div class="">
                                        <p class="text-apink lg:text-3xl text-xl mt-2">
                                            <iconify-icon icon="bx:map"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <h2 class="text-white lg:text-xl text-xs font-rlw">
                                        4C-Mishal Palace 30/04, KDA Outer Bypass Road,Sonadanga-9000 </h2>
                                        <h2 class="text-white lg:text-xl text-xs font-rlw">  Khulna, Bangladesh </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0">
                                <ul class="flex gap-3 items-center">
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                        </a> </li>
                                    <li> <a class="text-2xl text-white hover:text-apink" href="#">
                                            <iconify-icon icon="mdi:twitter"></iconify-icon>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="dcircle hidden xl:flex"> <img class="w-60" src="{{asset('asset/img/awe.png')}}" alt="" /> </div>
                        </div>
                        <div class="p-6 bg-white">
                            <h2 class="text-2xl font-rlw text-Nblue font-semibold mb-10"> Asked For A Schedule </h2>
                            <form action="">
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Your Name:</p> <input class="bg-transparent focus:outline-none border-none w-full px-3" type="text" />
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Your Email:</p> <input class="bg-transparent focus:outline-none border-none w-full px-3" type="text" />
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium"> Slect Your Topic: </p> <select class="bg-transparent focus:outline-none border-none w-full px-3 py-3 font-rlw ont-medium" name="" id="">
                                        <option value="">Option 01</option>
                                        <option value="">Option 01</option>
                                        <option value="">Option 01</option>
                                        <option value="">Option 01</option>
                                    </select>
                                </div>
                                <div class="border-b border-b-Nblue mb-5">
                                    <p class="font-rlw text-lg font-medium">Short Message:</p> <textarea class="bg-transparent focus:outline-none border-none w-full px-3" name="" id="" cols="30" rows="5"></textarea>
                                </div>
                                <div class="">
                                    <p class="font-rlw text-lg font-medium"> Meting Season Link : </p>
                                    <div class="flex gap-10 mb-5 mt-3">
                                        <div class=""> <input type="radio" id="html" name="fav_language" value="HTML" />   <label class="font-rlw text-Nblue font-medium" for="html"> Google Meet</label><br /> </div>
                                        <div class=""> <input type="radio" id="html" name="fav_language" value="HTML" />   <label class="font-rlw text-Nblue font-medium" for="html">Zoom</label><br /> </div>
                                    </div>
                                </div>
                                <div class="mt-3 flex justify-center"> <button class="text-white bg-Nblue px-4 py-2 rounded-md font-rlw font-medium hover:bg-[#F25B62]" href=""> Submit </button> </div>
                            </form>
                        </div>
                    </div>
                    <div class="contact_circle hidden xl:flex"> <img class="w-36" src="./img/GVs.png" alt="" /> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============Why-chose-us========== -->
    <section>
        <div class="py-10 lg:py-20 bg-white px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid lg:grid-cols-2 lg:gap-20 items-center">
                    <div class=" flex justify-center">
                         <img class="" src="{{asset('asset/img/whychoose.jpg')}}" alt=""> </div>
                    <div class="">
                        <div class="chalenges_text">
                            <h2 class="text-Nblue font-rlw text-3xl font-semibold">Why Chose Us ?</h2>
                            <div class="chalenges_text_line"></div>
                            <div class="chalenges_text_line_small"></div>
                        </div>
                        <div class="mt-6 lg:mt-10">
                            <div class="grid md:grid-cols-2 gap-3 md:gap-10">
                                <div class="">
                                    <div class=" flex justify-center"> <img class="w-[50px] lg:[100px]" src="{{asset('asset/img/cost.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center"> Cost-effectiveness<h2>
                                                <p class="text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" flex justify-center"> <img class=" w-[50px] lg:[100px]" src="{{asset('asset/img/inovative.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center">Innovative Technology<h2>
                                                <p class=" text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" flex justify-center"> <img class=" w-[50px]
                                        lg:[100px]" src="{{asset('asset/img/industry.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center">Industry Expertise<h2>
                                                <p class=" text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" flex justify-center"> <img class="w-[50px]
                                        lg:[100px]" src="{{asset('asset/img/marketing.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center">Top Marketing Plan<h2>
                                                <p class=" text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" flex justify-center"> <img class=" w-[50px]
                                        lg:[100px]" src="{{asset('asset/img/design.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center">Creative Design <h2>
                                                <p class=" text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" flex justify-center"> <img class=" w-[50px] lg:[100px]" src="{{asset('asset/img/scalable.png')}}" alt=""> </div>
                                    <div class=" mt-3">
                                        <h2 class=" text-base md:text-xl font-rlw text-Nblue font-medium text-center">Scalability<h2>
                                                <p class=" text-sm md:text-base text-black text-center mt-2">We offer affordable IT solutions that help you reduce costs and improve your bottom line. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ============what-happened-next=============== -->
    <section>
        <div class=" py-10 lg:py-20 bg-bubbles happend_area px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class=" md:grid grid-cols-2 gap-6 lg:gap-16">
                    <div class="">
                        <div class="chalenges_text">
                            <h2 class="text-Nblue font-rlw text-xl lg:text-3xl font-semibold">What happens next?</h2>
                            <div class="chalenges_text_line"></div>
                            <div class="chalenges_text_line_small"></div>
                        </div>
                        <div class=" mt-10">
                            <div class=" lg:w-1/2 bg-white px-10 py-6 rounded-md happend_card mb-10">
                                <h2 class=" text-xl text-Nblue font-semibold text-center font-rlw">We Schedule a call at your convenience</h2>
                                <div class="happend_sl">
                                    <div class=" bg-Nblue w-10 h-10 rounded-full flex justify-center items-center">
                                        <h2 class=" text-white text-2xl font-rlw font-bold">1</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=" flex justify-end">
                                <div class=" lg:w-1/2 bg-white px-10 py-6 rounded-md happend_card mb-10">
                                    <h2 class=" text-xl text-Nblue font-semibold text-center font-rlw">We prepare a proposal For You</h2>
                                    <div class="happend_sl">
                                        <div class=" bg-red-500 w-10 h-10 rounded-full flex justify-center items-center">
                                            <h2 class=" text-white text-2xl font-rlw font-bold">2</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" lg:w-1/2 bg-white px-10 py-6 rounded-md happend_card mb-10">
                                <h2 class=" text-xl text-Nblue font-semibold text-center font-rlw">We Schedule a call at your convenience</h2>
                                <div class="happend_sl">
                                    <div class=" bg-apink w-10 h-10 rounded-full flex justify-center items-center">
                                        <h2 class=" text-white text-2xl font-rlw font-bold">3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex justify-center"> <img src="{{asset('asset/img/happend-next.png')}}" alt=""> </div>
                </div>
            </div>
            <div class="happend_doth hidden lg:flex"> <img src="{{asset('asset/img/bluedoth.png')}}" alt=""> </div>
            <div class=" happend_shadow lg:block hidden"> <img class=" w-20" src="{{asset('asset/img/sadgwq.png')}}" alt=""> </div>
            <div class="happend_round lg:block hidden"> <img class=" w-48" src="{{asset('asset/img/GVs.png')}}" alt=""> </div>
        </div>
    </section>
    <!-- =============== happend-end========== -->
    <section>
        <div class="py-6 lg:py-20 bg-white px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="chalenges_text">
                            <h2 class="text-Nblue font-rlw text-xl lg:text-3xl font-semibold">Get Updates</h2>
                            <div class="chalenges_text_line"></div>
                            <div class="chalenges_text_line_small"></div>
                        </div>
                <div class="grid md:grid-cols-2 items-center gap-6 lg:gap-10 mt-6 lg:mt-20">
                    <div class=""> <img src="{{asset('asset/img/email.png')}}" alt=""> </div>
                    <div class="">
                        <div class="">
                            <form action="">
                                <div class=" border-b border-b-Nblue mb-3"> <input class=" focus:outline-none px-3 py-2 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent" type="text" placeholder="Enter Your Name"> </div>
                                <div class=" border-b border-b-Nblue mb-3"> <input class=" focus:outline-none px-3 py-2 font-rlw text-lg font-medium placeholder:text-Nblue bg-transparent" type="email" placeholder="Enter Your Email"> </div>
                                <div class=" bg-Nblue flex justify-center mt-6 hover:bg-apink"> <button class="py-2 font-rlw text-lg font-medium text-white ">Subscribe</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ============SubsCribe-area-end========= -->
    <section>
        <div class=" bg-bubbles px-6 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                 <div class="flex justify-center lg:justify-start">
                    <div class="heading_text">
                        <h2 class="text-Nblue font-rlw lg:text-3xl text-xl font-semibold"> <span class="text-white">Te</span>am Member </h2>
                        <div class="round_shep"></div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="swiper teamSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-white py-6 px-3 rounded-md teamcard">
                                    <div class="flex justify-center">
                                        <div class="w-36 h-36 bg-center bg-no-repeat bg-cover rounded-full shadow-smallS" style="background-image: url({{asset('asset/img/team01.jpg')}})"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h2 class="lg:text-xl text-base font-rlw text-Nblue font-semibold text-center"> Tony Blear </h2>
                                        <p class="text-Nblue lg:text-base text-sm font-medium font-rlw mt-1 text-center"> Managing Director </p>
                                    </div>
                                    <div class="flex justify-center mt-6">
                                        <ul class="flex gap-2">
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                                </a> </li>
                                            <li> <a class="lg:text-3xl text-xl text-Nblue hover:text-azure" href="#">
                                                    <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================team-member================ -->
    <section>
        <div class=" py-10 bg-white px-3 lg:px-12 xl:px-0">
            <div class="container mx-auto">
               <div class="chalenges_text">
                 <h2 class="text-Nblue font-rlw text-xl lg:text-3xl font-semibold">Do You Know ?</h2>
                 <div class="chalenges_text_line"></div>
                 <div class="chalenges_text_line_small"></div>
                </div>
                <div class="mt-6 lg:mt-10">
                    <div class="swiper blogSwiper pb-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog02.jpg')}});"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hasan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Why Your Website is Vital for a Strong Digital Presence</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">Any effective digital presence must have an excellent website. Customers and prospective customers may learn about your business, its services and goods, contact information, and more by visiting your website, which serves as a central information center...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog02.jpg')}});"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hasan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Exploring the Impact of Social Media on Digital Ventures</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">A digital transformation initiative is the utilization of technology and digital processes to enhance business operations and customer experiences. Adoption of new technology like social media platforms, artificial intelligence (AI), and analytics as well as...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog03.jpg')}});"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hassan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Unlocking the Power of SEO: Your Guide to Digital Success</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">In today's digital landscape, it's essential to stand out from the crowd; it's not just an option. SEO (Search Engine Optimization) plays a role in this as well and it's the secret sauce behind online visibility, increased traffic, and ultimately, digital success...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog02.jpg')}})"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hasan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Why Your Website is Vital for a Strong Digital Presence</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">Any effective digital presence must have an excellent website. Customers and prospective customers may learn about your business, its services and goods, contact information, and more by visiting your website, which serves as a central information center...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog02.jpg')}})"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hasan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Exploring the Impact of Social Media on Digital Ventures</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">A digital transformation initiative is the utilization of technology and digital processes to enhance business operations and customer experiences. Adoption of new technology like social media platforms, artificial intelligence (AI), and analytics as well as...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shadow-smallS">
                                    <div class=" bg-cover bg-center bg-no-repeat blog_banner  " style="background-image: url({{asset('asset/./img/blog02.jpg')}});"></div>
                                    <div class="">
                                        <div class="px-6 mt-2 flex justify-between items-center">
                                            <div class="flex gap-6 items-center">
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="bx:user"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">Jahid Hassan</h2>
                                                    </div>
                                                </div>
                                                <div class=" flex items-center gap-3">
                                                    <div class="">
                                                        <p class=" text-base text-Nblue">
                                                            <iconify-icon icon="fontisto:date"></iconify-icon>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="lg:text-base text-[11px] text-Nblue   font-rlw font-medium">12 Sep 2023
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                            <div class=" flex items-center gap-3">
                                                <div class="">
                                                    <p class=" text-base text-Nblue">
                                                        <iconify-icon icon="mdi:eye"></iconify-icon>
                                                        </iconify-icon>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h2 class=" text-Nblue  lg:text-base text-xs font-rlw font-medium">2.3k</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white py-4 px-6">
                                        <h2 class=" text-Nblue font-rlw lg:text-xl text-base font-semibold">Unlocking the Power of SEO: Your Guide to Digital Success</h2>
                                        <p class="text-black  lg:text-sm text-xs font-rlw font-medium mt-3">In today's digital landscape, it's essential to stand out from the crowd; it's not just an option. SEO (Search Engine Optimization) plays a role in this as well and it's the secret sauce behind online visibility, increased traffic, and ultimately, digital success...
                                        </p>
                                        <div class=" flex justify-end mt-2"> <a class="text-apink hover:text-Nblue  lg:text-sm text-xs font-rlw font-medium "
                                               href="blogDitails.html">Read more >></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Blog-section=========== -->
    <section>
        <div class="py-10 lg:py-20 bg-bubbles patner_area px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="flex justify-center lg:justify-start">
                    <div class="heading_text">
                        <h2 class="text-Nblue font-rlw lg:text-3xl text-xl font-semibold"> <span class="text-white">Ou</span>r Patners</h2>
                        <div class="round_shep"></div>
                    </div>
                </div>
            </div>
            <div class="mt-10 lg:mt-16">
                <div class="marquee">
                    <div class="marquee-content">
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/1.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/2.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/3.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/4.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/5.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/6.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/7.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/8.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/9.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/10.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/11.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/1.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/2.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/3.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/5.png')}}" alt="" /> </div>
                        <div class="marquee-item"> <img class="" src="{{asset('asset/img/logo/5.png')}}" alt="" /> </div>
                    </div>
                </div>
            </div>
            <div class="patnerCircle hidden lg:flex"> <img class="w-36" src="{{asset('asset/img/GVs.png')}}" alt="" /> </div>
            <div class="patnerCircle2 hidden lg:flex"> <img class="w-36" src="{{asset('asset/img/GVs.png')}}" alt="" /> </div>
            <div class="patnerCircle3 hidden lg:flex"> <img class="w-36" src="{{asset('asset/img/sadgwq.png')}}" alt="" /> </div>
        </div>
    </section>
    <!-- ==========partner-area================= -->
    <footer>
        <div class="bg-black py-10 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
                    <div class="">
                        <div class="flex justify-center lg:justify-start"> <a href="#"> <img class="lg:w-40 w-32" src="{{asset('asset/img/NEW-LOGO-white.png')}}" alt="" /> </a> </div>
                        <div class="">
                            <h2 class="text-white font-rlw lg:font-medium font-light text-center lg:text-justify mt-3"> "Connecting Futures with NEXWIFT: Where Innovation Takes Flight" </h2>
                        </div>
                        <div class="">
                            <ul class="flex gap-3 justify-center lg:justify-start items-center  mt-3">
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="mdi:linkedin"></iconify-icon>
                                    </a> </li>
                                <li> <a class="lg:text-2xl text-xl text-white hover:text-apink" href="#">
                                        <iconify-icon icon="mdi:twitter"></iconify-icon>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold"> Contact Info</h2>
                        <div class="mt-3 lg:mt-10 footer_item">
                            <div class="mt-2 flex items-center gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="material-symbols:call"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">+880 1794 070778</h2>
                                </div>
                            </div>
                            <div class="mt-2 flex items-center gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="material-symbols:mail"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">info@nexwift.com </h2>
                                </div>
                            </div>
                            <div class="mt-2 flex gap-2">
                                <div class="">
                                    <p class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        <iconify-icon icon="bx:map"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs">
                                        4C-Mishal Palace 30/04, KDA Outer Bypass Road,Sonadanga-9000 </h2>
                                    <h2 class="text-white hover:text-apink font-rlw lg:text-base text-xs"> Khulna, Bangladesh </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold">Services</h2>
                        <div class="mt-3 lg:mt-10 footer_item">
                            <ul>
                                <li class="text-center lg:text-left"> <a class="text-white hover:text-apink font-rlw lg:text-base text-xs" href="#">Web Design</a> </li>
                                <li class="text-center lg:text-left"> <a class="text-white hover:text-apink font-rlw lg:text-base text-xs" href="#">Graphic Design</a> </li>
                                <li class="text-center lg:text-left"> <a class="text-white hover:text-apink font-rlw lg:text-base text-xs" href="#">Digital Marketing</a> </li>
                                <li class="text-center lg:text-left"> <a class="text-white hover:text-apink font-rlw lg:text-base text-xs" href="#">Software Development</a> </li>
                                <li class="text-center lg:text-left"> <a class="text-white hover:text-apink font-rlw lg:text-base text-xs"
                                       href="#">Video And Animation</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-white lg:text-xl text-base font-rlw text-center lg:text-start font-bold"> Gets Updates </h2>
                        <div class="mt-3 lg:mt-12 footer_item ">
                            <form action="">
                                <div class=" border border-white">
                                    <input class="w-full px-2 py-2 bg-transparent focus:outline-none text-rlw placeholder:text-white text-white" type="text" placeholder="Enter Your Email" />
                                 </div>
                                <div class="bg-white flex justify-center mt-2 hover:bg-apink"> <button class="py-1 font-rlw text-lg font-medium text-Nblue hover:text-white"> Subscribe </button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-Nblue py-2 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="">
                        <p class="text-white font-rlw lg:text-sm text-xs"> All Copyright preserve by Nexwift </p>
                    </div>
                    <div class=""> <a class="text-white font-rlw lg:text-sm text-xs hover:text-apink" href="#">Privacy And Policy</a> </div>
                </div>
            </div>
        </div>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{asset ('asset/jquery.min.js')}}"></script>
    <script src="{{asset(asset('asset/coustom.js'))}}"></script>
</body>
</html>
