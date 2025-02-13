@extends('layouts.app')

@section('css')
    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        .swiper-slide-active {
            color: #1c408a;
            font-weight: 700;
            font-size: 20px;
        }

        .people_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 100%, 0 100%, 0 0);
        }

        @media screen and (max-width: 1023px) {
            .people_clip {
                clip-path: polygon(0 4%, 100% 0, 100% 94%, 0% 100%);
            }
        }

        @media screen and (max-width: 768px) {
            .swiper-slide-active {
                font-size: 18px;
            }

            .swiper-slide-active p {
                padding-top: 10px;
            }
        }

        @media screen and (max-width: 640px) {
            .swiper-slide {
                width: 190px;
                height: 200px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="relative -top-[30px] md:-top-[90px] bg-[#ffffff] hidden lg:block h-[200px] people_clip">

        <img src="{{ asset('assets/images/line.png') }}" alt="" class="w-full pt-4 xl:pt-0" data-aos="fade-up"
            data-aos-duration="1000">
    </div>


    <div class="w-full max-w-7xl mx-auto relative mt-5 lg:-top-[100px] px-4">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] font-[700] py-10">About Us</h1>
        <video class="w-full h-full object-cover px-4" controls autoplay>
            <source src="{{ asset('assets/images/video-1.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/images/video-1.ogg') }}" type="video/ogg">
        </video>
    </div>


    <div>
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] font-[700] py-10 max-w-7xl mx-auto px-4">Vision, Mission Statement, Core Values</h1>

        <div class="home_swiper h-full relative">
            <div class="home_content m-0 p-0">
                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col" id="value">
                            <img src="{{ asset('assets/images/home/value.png') }}" alt="">
                            <p class="text-center uppercase tracking-[1px] mt-2">Core Values</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="mission">
                            <img src="{{ asset('assets/images/home/mission.png') }}" alt="">
                            <p class="text-center uppercase tracking-[1px] mt-2">Mission</p>
                        </div>
                        <div class="swiper-slide flex flex-col" id="vision">
                            <img src="{{ asset('assets/images/home/vision.png') }}" alt="">
                            <p class="text-center uppercase tracking-[1px] mt-2">Vision</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dynamic-content1" class="p-4 relative mt-4 lg:mt-0">
        </div>
    </div>


    {{-- <div class="home_swiper h-full relative lg:-top-[300px]">
        <div class="home_content m-0 p-0">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col" id="value">
                        <img src="{{ asset('assets/images/home/value.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Core Values</p>
                    </div>
                    <div class="swiper-slide flex flex-col" id="mission">
                        <img src="{{ asset('assets/images/home/mission.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Mission</p>
                    </div>
                    <div class="swiper-slide flex flex-col" id="vision">
                        <img src="{{ asset('assets/images/home/vision.png') }}" alt="">
                        <p class="text-center uppercase tracking-[1px] mt-2">Vision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dynamic-content1" class="p-4 relative mt-4 lg:mt-0 lg:-top-[200px]">
    </div> --}}

    <div id="chart" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] leading-none font-[700]">Organizational<br> Chart
        </h1>

        <div class="my-5">
            <img src="{{ asset('assets/images/people/chart.png') }}" alt="">
        </div>
    </div>

    <div id="business_registration" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] leading-none font-[700]">Business Registration <br>
            Certifications</h1>
        <div class="grid grid-cols-3 gap-2 mt-10">
            <div class="p-0 col-span-2">
                <img src="{{ asset('assets/images/people/Certification-1.png') }}" alt="">
            </div>
            <div class="">
                <img src="{{ asset('assets/images/people/Certification-2.png') }}" alt="">

            </div>
        </div>
    </div>

    <div id="future_business" class="w-full max-w-7xl mx-auto overflow-hidden px-4 mt-10">
        <h1 class="text-start text-[20px] md:text-[30px] text-[#1C4089] leading-none font-[700]">Future<br> Business Plan
        </h1>
        <div class="relative group w-full h-auto overflow-hidden mt-10">
            <img src="{{ asset('assets/images/people/future_plan.png') }}" alt="Image Description"
                class="w-full h-full object-contain transition-transform duration-300" />
            <div
                class="absolute bottom-0 left-0 w-full bg-black bg-opacity-70 text-white text-start p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                <div class="w-full max-w-4xl mx-auto">
                    <h1 class="text-[16px] md:text-[20px] font-[700] text-[#deb266]">Own Land & Buildings by 2025 (Chhouk
                        Meas Area)</h1>
                    <p class="text-[12px] md:text-[16px]">We are strategically working towards acquiring dedicated land and
                        constructing our own facilities in the Chhouk Meas Area by 2025.</p>
                </div>
            </div>
        </div>

    </div>
@endsection
