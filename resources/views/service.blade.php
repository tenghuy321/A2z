@extends('layouts.app')

@section('css')
    <style>
        .service_swiper .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .service_swiper .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .service_swiper .swiper-slide img {
            display: block;
            width: 100%;
        }

        .service_swiper .swiper-slide-active {
            color: #1c408a;
            font-weight: 700;
            font-size: 20px;
        }

        .service_bg {
            background-image: url('assets/images/services/service-bg.png');
        }

        .new_swiper .swiper {
            width: 80%;
            height: 50%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .new_swiper .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 700px;
            height: 100%;
            filter: blur(2px);
        }

        .new_swiper .swiper-slide-active {
            filter: blur(0px);
        }

        .new_swiper .swiper-slide img {
            display: block;
            width: 100%;
        }

        .new_swiper .swiper-text {
            transition: opacity 0.5s ease, transform 0.5s ease;
            transform: translateY(20px);
        }

        @media screen and (max-width: 1280px) {
            .new_swiper .swiper-slide {
                width: 640px;
                height: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .service_bg {
                background: #1c408a;
                clip-path: polygon(0 10%, 100% 0, 100% 90%, 0% 100%);
            }
        }

        @media screen and (max-width: 640px) {
            .service_swiper .swiper-slide {
                width: 190px;
                height: 200px;
            }

            .new_swiper .swiper-slide {
                width: 100%;
                height: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <section class="relative -top-[30px] md:-top-[100px] bg-center bg-cover h-[300px] md:h-[570px] service_bg"
        style="background-image: url('assets/images/services/service-bg.png')">

        <img src="{{ asset('assets/images/line.png') }}" alt="" class="w-full hidden lg:block pt-4 xl:pt-0"
            data-aos="fade-up" data-aos-duration="1000">


        <div data-aos="fade-right" data-aos-duration="1500"
            class="w-full max-w-4xl mx-auto flex flex-col items-center justify-center lg:justify-start lg:pt-20 text-center h-full text-[12px] md:text-[15px] space-y-5 px-4 text-[#ffffff]">
            <h1 class="text-[20px] md:text-[30px] font-[700]">Services and Qualification</h1>
        </div>
    </section>

    <section>
        <div id="service_qualifications" class="service_swiper h-full relative -top-[50px] lg:-top-[300px]">
            <div class="service_content m-0 p-0 overflow-hidden">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col" id="value">
                            <img src="{{ asset('assets/images/services/image-1.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Electrical System</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="mission">
                            <img src="{{ asset('assets/images/services/image-2.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Fire & Plumbing System</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="vision">
                            <img src="{{ asset('assets/images/services/image-3.png') }}" alt="" class="">
                            <p class="text-center mt-1 md:mt-2">Mechanical System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dynamic-content2" class="p-4 relative mt-4 lg:mt-0 lg:-top-[200px]">
        </div>
    </section>

    <div class="w-full max-w-7xl mx-auto py-20 lg:pb-20 px-4" id="reason">
        <h1 class="text-[20px] sm:text-[25px] md:text-[30px] text-center md:text-start ml-5 lg:ml-8 xl:ml-20 text-[#1C4089] font-[700]"
            data-aos="fade-right" data-aos-duration="1500">Reasons to Choose A2Z
            M&E</h1>

        <div class="flex items-center justify-start">
            <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 py-10 overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-center overflow-hidden" data-aos="fade-right"
                    data-aos-duration="1000">
                    <p class="text-[100px] font-[700] text-[#15408a] block md:hidden">1</p>
                    <div data-aos="fade-right" data-aos-duration="1500"
                        class="relative bg-[#15408a] text-white p-4 w-60 h-60 lg:w-72 lg:h-72 flex flex-col justify-between text-[12px] md:text-[11px] lg:text-[12px] xl:text-[15px]">
                        <p>Our work methodology adheres to a high standard, ensuring consistency and reliability in
                            every
                            project we undertake.</p>
                        <p
                            class="text-[16px] sm:text-[20px] md:text-[18px] lg:text-[18px] xl:text-[25px]  font-[700] leading-none">
                            Standard - Consistency in our Approach</p>

                        {{-- arrow mobile --}}
                        <div
                            class="md:hidden absolute -top-5 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-b-[20px] border-b-[#15408a]">
                        </div>

                        {{-- arrow laptop --}}
                        <div
                            class="hidden md:block absolute top-14 -right-10 transform -translate-y-1/2 w-0 h-0 border-t-[40px] border-t-transparent border-b-[40px] border-b-transparent border-l-[40px] border-l-[#15408a]">
                        </div>
                    </div>

                    <p class="text-[150px] lg:text-[200px] font-[700] text-[#15408a] hidden md:block ml-20">1</p>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center overflow-hidden" data-aos="fade-right"
                    data-aos-duration="1000">
                    <p class="text-[100px] font-[700] text-[#deb266] block md:hidden">2</p>

                    <div data-aos="fade-right" data-aos-duration="1500"
                        class="relative bg-[#deb266] text-[#15408a] p-4 w-60 h-60 lg:w-72 lg:h-72 flex flex-col justify-between text-[12px] md:text-[11px] lg:text-[12px] xl:text-[15px]">
                        <p>We pride ourselves on delivering our services swiftly and efficiently, completing ahead of
                            schedule without any delays.</p>
                        <p
                            class="text-[16px] sm:text-[20px] md:text-[18px] lg:text-[18px] xl:text-[25px]  font-[700] leading-none">
                            Quick Services Delivery - Ahead of Schedule</p>

                        {{-- arrow mobile --}}
                        <div
                            class="md:hidden absolute -top-5 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-b-[20px] border-b-[#deb266]">
                        </div>

                        {{-- arrow laptop --}}
                        <div
                            class="hidden md:block absolute top-14 -right-10 transform -translate-y-1/2 w-0 h-0 border-t-[40px] border-t-transparent border-b-[40px] border-b-transparent border-l-[40px] border-l-[#deb266]">
                        </div>
                    </div>

                    <p class="text-[150px] lg:text-[200px] font-[700] text-[#deb266] hidden md:block  ml-20">2</p>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center overflow-hidden" data-aos="fade-left"
                    data-aos-duration="1000">
                    <p class="text-[100px] font-[700] text-[#deb266] md:hidden">3</p>

                    <p class="text-[150px] lg:text-[200px] font-[700] text-[#deb266] hidden md:block  mr-20">3</p>

                    <div data-aos="fade-left" data-aos-duration="1500"
                        class="relative bg-[#deb266] text-[#15408a] p-4 w-60 h-60 lg:w-72 lg:h-72 flex flex-col justify-between text-[12px] md:text-[11px] lg:text-[12px] xl:text-[15px]">
                        <p>To provide our clients with peace of mind, we stand by the quality of our work with 1-year
                            maintenance guarantee. Our commitment extends beyond project completion to ensure ongoing
                            satisfaction.</p>
                        <p
                            class="text-[16px] sm:text-[20px] md:text-[18px] lg:text-[18px] xl:text-[25px]  font-[700] leading-none">
                            Guarantee - 1 Year Maintenance Assurance</p>

                        {{-- arrow mobile --}}
                        <div
                            class="md:hidden absolute -top-5 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-b-[20px] border-b-[#deb266]">
                        </div>

                        {{-- arrow laptop --}}
                        <div
                            class="hidden md:block absolute top-14 -left-10 transform -translate-y-1/2 w-0 h-0 border-t-[40px] border-t-transparent border-b-[40px] border-b-transparent border-r-[40px] border-r-[#deb266]">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-center overflow-hidden" data-aos="fade-left"
                    data-aos-duration="1000">
                    <p class="text-[100px] font-[700] text-[#15408a] block md:hidden">4</p>
                    <p class="text-[150px] lg:text-[200px] font-[700] text-[#15408a] hidden md:block mr-20">4</p>

                    <div data-aos="fade-left" data-aos-duration="1500"
                        class="relative bg-[#15408a] text-white p-4 w-60 h-60 lg:w-72 lg:h-72 flex flex-col justify-between text-[12px] md:text-[11px] lg:text-[12px] xl:text-[15px]">
                        <p>Quality is at the core of our operations. We uphold an uncompromising commitment to
                            delivering
                            work of the highest standard, ensuring durability, functionality, and client satisfaction.
                        </p>
                        <p
                            class="text-[16px] sm:text-[20px] md:text-[18px] lg:text-[18px] xl:text-[25px]  font-[700] leading-none">
                            Quality - uncompromising Commitment</p>

                        {{-- arrow mobile --}}
                        <div
                            class="md:hidden absolute -top-5 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[20px] border-l-transparent border-r-[20px] border-r-transparent border-b-[20px] border-b-[#15408a]">
                        </div>

                        {{-- arrow laptop --}}
                        <div
                            class="hidden md:block absolute top-14 -left-10 transform -translate-y-1/2 w-0 h-0 border-t-[40px] border-t-transparent border-b-[40px] border-b-transparent border-r-[40px] border-r-[#15408a]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="h-[200px] relative bg-[#1C4089]" style="clip-path: polygon(0 90%, 100% 0%, 0% 100%);" data-aos="fade-up"
        data-aos-duration="1000"></div>

    <section id="our_experience"
        class="relative flex flex-col justify-center items-center h-[170vh] bg-[#DFB266] mt-[-200px] my-[-150px] 2xl:my-[-200px] new_swiper overflow-hidden"
        style="clip-path: polygon(0 18%, 100% 0, 100% 90%, 0 80%);" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="text-[20px] xl:text-[30px] text-[#1C4089] font-[700]">Project References</h1>
        </div>


        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-1.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] lg:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> CCOO AEON
                                        MALL 3
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> JASPAL FASHIONS
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> EL
                                        Conde</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> EL Conde
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Electrical
                                        and
                                        Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 3 Months
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-2.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> CHAMPION AEON MALL 3
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> JASPAL FASHIONS
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> EL
                                        Conde</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> EL Conde
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span>
                                        Electrical and
                                        Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2.5 Month</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-3.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> CPS AEON MALL 3
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> JASPAL FASHIONS
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> EL
                                        Conde</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> EL Conde
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span>
                                        Electrical and
                                        Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2.5months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-4.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Asics Chip Mong Mega Mall
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> JASPAL FASHIONS
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> EL
                                        Conde</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> EL Conde
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span>
                                        Electrical and
                                        Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2.5 Month</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-5.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> NEWERA AEON MALL 2
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> JASPAL FASHIONS
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> EL
                                        Conde</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> EL Conde
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span>
                                        Electrical and
                                        Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1 Month</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-6.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Lightning Protect System</li>
                                        <li>VRF System</li>
                                        <li>Plumbing System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Yim’s Residence
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Yim
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> BUG Studio</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Mouk Sor Construction
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> MEP Design & Build</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2.5 Year </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 3rd Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-7.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>Distribution Panel</li>
                                        <li>Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV & ELV Cable</li>
                                        <li>Data & Tel System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Firefighting System</li>
                                        <li>Air-Conditioning system</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Onion & Tada Head Office
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Onion & Tada
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> A.N Architect & Interior</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Mouk Sor Construction
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Electrical and Mechanical</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 3 Month </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 2nd Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-8.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>

                                        <div>
                                            <p class="font-[700]">Electrical (Extra Low Voltage)</p>
                                            <li>Public Addressable System</li>
                                            <li>Automatic Fire Alarm System</li>
                                            <li>Card Access Control System</li>
                                            <li>CCTV System</li>
                                            <li>CATV and MATV System</li>
                                        </div>

                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>

                                        <div>
                                            <p class="font-[700]">Plumbing System</p>
                                            <li>Cold Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> TUX GLOBAL INSTITUTE
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Japanese Sponsor
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> MEP Design & Build</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1 Years </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 2nd Building.
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-9.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside text-[9px] xl:text-[10px]">
                                        <li>Install PLC Control Panel</li>
                                        <li>Lighting Control System</li>
                                        <li>Door Management System</li>
                                        <li>Power Metering System</li>
                                        <li>Install Mian Equipment for BMS</li>
                                        <li>Install Control Cable for BMS (Optic, Cat6, 18AWG..)</li>
                                        <li>Provide and Install EMT Conduit for Technical Room</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Aeon Mall Mean Chey
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Aeon Mall Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> SEMBA</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Hyundai Engineering Co., Ltd
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Client : </span> Fuji Furukawa E&C (Japan)</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> BMS and Building Automation</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> October, 2021 to January, 2022 </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 5th Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-10.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside text-[9px] xl:text-[10px]">
                                        <li>Building Management System (Chiller, AHU &Fan)</li>
                                        <li>Mechanical Automation System (ACMV & PB)</li>
                                        <li>Waste Water Treatment System (WWTP)</li>
                                        <li>FM 200 (IT, Sever & Electrical Room)</li>
                                        <li>LPG Control System (Mall & Station)</li>
                                        <li>Firefighting and Smoke Spill Control System</li>
                                        <li>Power Supply for Mechanical System (VFR & Fan)</li>
                                        <li>Metering System (BTU, Water, LPG & KWH Meter)</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Aeon Mall Mean Chey
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Aeon Mall Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> SEMBA</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Hyundai Engineering Co., Ltd
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Client : </span> Shinryo Corporation(Japan)</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> BMS and Building Automation</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> October, 2021 to January, 2022 </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 5th Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-11.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside text-[9px] xl:text-[10px] flex flex-col space-y-1">
                                        <li>Provide and Install Control Panel Façade Lighting</li>
                                        <li>Provide and Install Flexible LED</li>
                                        <li>Provide and install Projector Light on Screen Panel</li>
                                        <li>Provide and Install Recessed Downlight for Outdoor</li>
                                        <li>Provide and Install Projector (Flood Light)</li>
                                        <li>Provide and Install Mounted Ceiling Downlight</li>
                                        <li>Provide and Install Recessed Wall Light</li>
                                        <li>Provide and Install Inground Light (Plant Boxes)</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> ORKIDE THE ROYAL MALL
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> ORKIDE VILLA 2 CO.,LTD
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Archetype
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Façade Lighting System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1 Years </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia.
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 3th Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-12.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>Data System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing System</p>
                                            <li>Cold Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Tube Coffee 2004
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Electrical and Plumbing Design & Build</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 5 Months </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 2nd Building
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-13.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Emergency Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV&ELV Cable Containment</li>
                                        <li>Lightning and Earthing System</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                        <li>Data System</li>
                                        <li>CCTV System</li>
                                        <li>Public Addressable System</li>
                                        <li>Cold and Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Storm Drainage</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Tube Coffee 60M
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span>6 Months </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-14.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing System</p>
                                            <li>Cold Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Café & Lounge
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> MEP Design & Build</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 8 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 2nd Building
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-15.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                            <li>Water Treatment Plant</li>
                                            <li>Fire Hose Reel</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical (Extra Low Voltage)</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                            <li>Kitchen Hood</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> BIC Group
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 6 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 5040m2, 2nd Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-16.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Emergency Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV&ELV Cable Containment</li>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                        <li>Data System</li>
                                        <li>CCTV System</li>
                                        <li>PA System</li>
                                        <li>Cold and Hot Water Supply</li>
                                        <li>Telephone System</li>
                                        <li>Sanitary Drainage</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Sofitel Phnom Penh
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 5 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-17.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <li>LV Distribution</li>
                                        <li>General Lighting System</li>
                                        <li>Emergency Lighting System</li>
                                        <li>Power Supply System</li>
                                        <li>LV&ELV Cable Containment</li>
                                        <li>Air-Conditioning System</li>
                                        <li>AHU and Chiller System</li>
                                        <li>Data System</li>
                                        <li>CCTV System</li>
                                        <li>PA System</li>
                                        <li>Fire Alarm System</li>
                                        <li>Telephone System</li>
                                        <li>Cold and Hot Water Supply</li>
                                        <li>Sanitary Drainage</li>
                                        <li>Fire FIghting System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Sofitel Phnom Penh
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 6 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-18.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>Automatic Fire Alarm System</li>
                                            <li>Card Access Control System</li>
                                            <li>CCTV System</li>
                                            <li>CATV and MATV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                            <li>Kitchen Hood</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> BKK Apartment
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2 Year</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 1040m2, 11rd Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-19.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside text-[9px] xl:text-[10px]">
                                        <p class="font-[700]">Mechanical System</p>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Star Gold Casino and Hotel
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 5 months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-20.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="text-left w-full mt-4 lg:mt-0 lg:pl-4">
                                    <p class="mb-2 text-[14px] md:text-[18px] font-semibold">V.Mansion Villa PROJECT</p>

                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> V.Mansion Villa
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> Staarch (Design & Build)
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Staarch (Design & Build)
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1 Year</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 464m2, 2rd Floor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-21.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="text-left w-full mt-4 lg:mt-0 lg:pl-4">
                                    <p class="mb-2 text-[14px] md:text-[18px] font-semibold">Villa Chamkamon PROJECT</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Villa Chamkamon
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> PAEK
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Soryak Construction & Development
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2 Year</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Land Area : </span> 200m2 (Approximate)
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 541.8m2, 3rd Floor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-22.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                            <li>Water Treatment Plant</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Chip Mong Grand #12
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 4 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-23.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="text-left w-full mt-4 lg:mt-0 lg:pl-4">
                                    <p class="mb-2 text-[14px] md:text-[18px] font-semibold">Queen Villa Chipmong 598 PROJECT</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Queen Villa Chipmong 598
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Esign Decoration
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 3months, Completed</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 545m2, 3rd Floor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-24.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="text-left w-full mt-4 lg:mt-0 lg:pl-4">
                                    <p class="mb-2 text-[14px] md:text-[18px] font-semibold">Queen Villa Chipmong Grand PROJECT</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Queen Villa Chipmong Grand
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Interior Designer : </span> KYSN
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> Chipmong
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MVAC Sys</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 3months, Completed</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh Province
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 540m2,2rd Floor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-25.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                            <li>Water Treatment Plant</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> BYD Show Room
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 8 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 1450m2, 3rd Floor
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-26.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                            <li>Water Treatment Plant</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> BYD Chba Ampov
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2.5months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-27.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Emergency Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>Data System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing System</p>
                                            <li>Cold Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> SUKI-YA Restaurant
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> MEP Design & Build</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 6 Months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                        class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 1st Building
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-28.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                            <li>Fire Alarm System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Belly Buger Chba Ampov
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 3months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-29.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> GEGE Kitchen Chba Ampov
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-30.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="text-left w-full mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Clinic 6A
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Finance : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Construction : </span> DeArch21
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Scope of Work : </span> Design & Installed MEP System</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 11months, Completed</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Total Floor Area : </span> 780m2, 3rd Floor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-31.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">

                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> First Care Phamacy
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 2months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-32.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Water Treatment Plant</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> KOH TANG Resort
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1.5years</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-33.jpg') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul
                                        class="max-w-md list-disc list-inside text-[9px] xl:text-[10px]">
                                        <p class="font-[700]">Mechanical System</p>
                                        <li>Air-Conditioning System</li>
                                        <li>Ventilation System</li>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Ousom Resort
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 5months</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group relative w-full h-full overflow-hidden">
                        <img src="{{ asset('assets/images/whyus/image-34.png') }}" alt="Project Image"
                            class="w-full h-full object-cover object-center rounded-[5px]" />
                        <div class="swiper-text">
                            <div id="testing"
                                class="absolute bottom-0 w-full bg-cover bg-no-repeat text-white p-2 sm:p-4 flex flex-col lg:flex-row items-start transform translate-y-full group-hover:translate-y-0 transition-transform duration-300 lg:translate-y-0 bg-[#1c408a]">
                                <div class="w-full lg:w-1/2">
                                    <h2 class="mb-2 text-[14px] md:text-[18px] font-semibold">SCOPE OF WORK</h2>
                                    <ul class="max-w-md list-disc list-inside grid grid-cols-2 gap-2 text-[9px] xl:text-[10px]">
                                        <div>
                                            <p class="font-[700]">Electrical (Low Voltage)</p>
                                            <li>LV Distribution</li>
                                            <li>General Lighting System</li>
                                            <li>Power Supply System</li>
                                            <li>LV&ELV Cable Containment</li>
                                            <li>Lightning and Earthing System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Electrical ( Extra Low Voltage)</p>
                                            <li>Data and Telephone System</li>
                                            <li>Public Addressable System</li>
                                            <li>CCTV System</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Plumbing & Firefighting System</p>
                                            <li>Cold & Hot Water Supply</li>
                                            <li>Sanitary Drainage</li>
                                            <li>Storm Drainage</li>
                                            <li>Water Treatment Plant</li>
                                        </div>
                                        <div>
                                            <p class="font-[700]">Mechanical System</p>
                                            <li>Air-Conditioning System</li>
                                            <li>Ventilation System</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="text-left lg:text-right w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-4">
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Project Name : </span> Siem Pang Resort
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Owner : </span> Private
                                    </p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Contract Period : </span> 1.5years</p>
                                    <p class="text-[9px] xl:text-[10px]"><span
                                            class="text-[10px] xl:text-[12px] font-[500]">Location : </span> Phnom Penh,
                                        Cambodia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

