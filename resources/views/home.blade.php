@extends('layouts.app')

@section('css')
    <style>
        .card1,
        .card2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            clip-path: polygon(0 28%, 100% 15%, 100% 94.6%, 0 58%);
        }

        .content {
            position: absolute;
            top: 0;
            right: 0;
            /* width: 100%; */
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            z-index: 3;
            color: white;
            /* padding: 0 20px; */
        }

        .home_clip {
            clip-path: polygon(35% 12%, 100% 0, 100% 78%, 0 100%, 0 0);
        }

        .bg_clip {
            clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 83%);
        }

        @keyframes scrollleft{
            to{
                left: -200px;
            }
        }

        .item{
            width: 200px;
            height: 150px;
            border-radius: 6px;
            position: absolute;
            left: max(calc(200px * 16), 100%);
            animation-name: scrollleft;
            animation-duration: 60s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .item1{
            animation-delay: calc(60s / 16 * (16 - 1) * -1);
        }
        .item2{
            animation-delay: calc(60s / 16 * (16 - 2) * -1);
        }
        .item3{
            animation-delay: calc(60s / 16 * (16 - 3) * -1);
        }
        .item4{
            animation-delay: calc(60s / 16 * (16 - 4) * -1);
        }
        .item5{
            animation-delay: calc(60s / 16 * (16 - 5) * -1);
        }
        .item6{
            animation-delay: calc(60s / 16 * (16 - 6) * -1);
        }
        .item7{
            animation-delay: calc(60s / 16 * (16 - 7) * -1);
        }
        .item8{
            animation-delay: calc(60s / 16 * (16 - 8) * -1);
        }
        .item9{
            animation-delay: calc(60s / 16 * (16 - 9) * -1);
        }
        .item10{
            animation-delay: calc(60s / 16 * (16 - 10) * -1);
        }
        .item11{
            animation-delay: calc(60s / 16 * (16 - 11) * -1);
        }
        .item12{
            animation-delay: calc(60s / 16 * (16 - 12) * -1);
        }
        .item13{
            animation-delay: calc(60s / 16 * (16 - 13) * -1);
        }
        .item14{
            animation-delay: calc(60s / 16 * (16 - 14) * -1);
        }
        .item15{
            animation-delay: calc(60s / 16 * (16 - 15) * -1);
        }
        .item16{
            animation-delay: calc(60s / 16 * (16 - 16) * -1);
        }


        @media screen and (max-width: 1023px) {
            .home_clip {
                clip-path: polygon(0 4%, 100% 0, 100% 94%, 0% 100%);
            }

            .bg_clip {
                clip-path: polygon(0 0, 100% 20%, 100% 100%, 0 80%);
            }
        }

        @media screen and (max-width: 640px) {
            .item {
                width: 100px;
                height: 100px;
                border-radius: 6px;
                position: absolute;
                left: max(calc(100px * 16), 100%);
                animation-name: scrollleft;
                animation-duration: 20s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }
        }
    </style>
@endsection

@section('content')
    {{-- company background --}}
    <div class="relative -top-[30px] lg:-top-[100px] bg-[#1C4089] h-[550px] lg:h-[800px] home_clip">

        <img src="{{ asset('assets/images/line.png') }}" alt="" class="w-full hidden lg:block pt-4 xl:pt-0"
            data-aos="fade-up" data-aos-duration="1000">

        <div id="company_background"
            class="w-full max-w-4xl mx-auto flex flex-col items-center justify-center lg:justify-start lg:pt-10 text-start h-full text-[12px] md:text-[15px] font-[400] space-y-5 px-4 text-[#ffffff] overflow-hidden">
            <h1 class="text-[20px] md:text-[30px] font-[700] self-start" data-aos="fade-right" data-aos-duration="1500">
                Company’s Background</h1>
            <p data-aos="fade-left" data-aos-duration="1500">A2Z M&E is a company located in Phnom Penh, and it commenced
                operations in early 2020, founded by a trio of
                engineers with expertise in Mechanical and electrical design, Supplies and installation of engineering
                solutions, and technical services for industrial and commercial buildings.</p>
            <p data-aos="fade-right" data-aos-duration="1500">We officially registered with the Ministry of Commerce on
                April 12, 2022, under the name A2Z M&E Engineering
                Co., Ltd. The establishment of the company aimed to contribute to the thriving construction industry and
                create valuable job opportunities for the younger generation.</p>
            <p data-aos="fade-left" data-aos-duration="1500">At present, A2Z M&E operates with a workforce exceeding 70
                employees, all of whom are highly skilled and
                experienced in construction and management practices.</p>
        </div>
    </div>

    {{-- meesage from ceo --}}
    <div class="relative w-full max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div>
            <img src="{{ asset('assets/images/people/ceo.png') }}" alt="CEO"
                class="max-w-full h-auto relative object-center object-cover" data-aos="fade-right"
                data-aos-duration="1500" />
        </div>
        <div id="message_from_ceo"
            class="text-start text-[12px] md:text-[15px] font-[400] space-y-2 px-4 text-[#1C4089] overflow-hidden col-span-1 sm:col-span-2 py-10 sm:py-0">
            <h1 class="text-[20px] md:text-[30px] font-[700]" data-aos="fade-right" data-aos-duration="1500">
                Message From CEO</h1>
            <h2 class="text-[#deb266] font-[700]" data-aos="fade-left" data-aos-duration="1500">Dear Valued
                Stakeholders,</h2>
            <p data-aos="fade-right" data-aos-duration="1500">I trust this message finds you well. As we reflect on our
                journey, I am compelled to express our sincere
                appreciation for the valuable partnership.</p>
            <p data-aos="fade-left" data-aos-duration="1500">Your unwavering support, collaboration, and shared commitment
                to excellence have played a pivotal role in our
                mutual success. Together, we have achieved remarkable milestones and faced challenges with resilience,
                reinforcing the
                strength of our partnership.
            </p>
            <p data-aos="fade-right" data-aos-duration="1500">As we look to the future, I am excited about the opportunities
                that lie ahead for both our entities. The
                trust and synergy we have built serve as a solid foundation for continued growth and innovation.
            </p>
            <p data-aos="fade-left" data-aos-duration="1500">Thank you for being an integral part of our journey. We look
                forward to further strengthening our
                collaboration
                and achieving even greater success projects together.</p>
            <p class="" data-aos="fade-right" data-aos-duration="1500">Best regards,</p>

            <div>
                <h2 class="text-[20px] md:text-[30px] font-[700]" data-aos="fade-left" data-aos-duration="1500">CEO's
                    Background</h2>
                <div class="text-[12px] md:text-[15px] font-[400]">
                    <div class="" data-aos="fade-right" data-aos-duration="1500">
                        <p class="font-[700] text-[14px] lg:text-[18px] xl:text-[20px] my-1 text-[#DFB266]">Mr. Phan Tola
                        </p>
                        <p class="mt-2">CEO, AZZ M&E</p>
                    </div>
                    <div class="" data-aos="fade-left" data-aos-duration="1500">
                        <h1 class="text-[14px] lg:text-[18px] xl:text-[20px] text-[#DFB266] font-[700]">2013 - 2018</h1>
                        <p class="mt-1">Bachelor Degree of Electrical Engineer at ITC.</p>
                        <p class="mt-1">Experience: 10 Years in the construction sector.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#DFB266] h-[150px]" style="clip-path: polygon(100% 81%, 0 0, 100% 100%);">

    </div>

    {{-- notable clients --}}
    {{-- <section id="notable_clients" class="">
        <h1 class="text-center text-[20px] md:text-[30px] text-[#1C4089] font-[700]">Our Notable Clients</h1>
        <img src="{{ asset('assets/images/services/clients.png') }}" alt="" class="object-cover object-center">
    </section> --}}

    <section id="notable_clients" class="">
        <h1 class="text-center text-[20px] md:text-[30px] text-[#1C4089] font-[700]">Our Notable Clients</h1>
        <div class="wrapper w-full max-w-7xl mx-auto relative h-[150px] sm:h-[200px] mt-[5rem] overflow-hidden">
            <div class="item item1 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-1.jpg')"></div>
            <div class="item item2 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-4.png')"></div>
            <div class="item item3 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-5.jpg')"></div>
            <div class="item item4 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-6.jpg')"></div>
            <div class="item item5 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-7.jpg')"></div>
            <div class="item item6 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-8.jpg')"></div>
            <div class="item item7 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-9.jpg')"></div>
            <div class="item item8 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-10.jpg')"></div>
            <div class="item item9 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-11.png')"></div>
            <div class="item item10 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-12.jpg')"></div>
            <div class="item item11 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-13.png')"></div>
            <div class="item item12 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-2.jpg')"></div>
            <div class="item item13 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-3.jpg')"></div>
            <div class="item item14 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-14.jpg')"></div>
            <div class="item item15 bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-15new.png')"></div>
            <div class="item item16 bg-contain bg-center bg-no-repeat" style="background-image: url('assets/images/services/client-16.png')"></div>
        </div>

    </section>

    {{--  --}}
    <section class="h-screen section_clip">
        <div class="w-full h-full relative top-[2rem] flex items-center justify-center bg-cover bg-center bg-scroll md:bg-fixed bg_clip"
            style="background-image: url('assets/images/home/bg-home.jpg');">
            <div class="absolute inset-0 bg-[#DFB266] mix-blend-multiply opacity-75"></div>

            <h1 class="text-center text-[20px] md:text-[30px] lg:text-[40px] text-[#ffffff] z-10 font-[500] w-[978px]"
                data-aos="fade-up" data-aos-duration="1000">Together, we have achieved remarkable milestones
                and faced challenges with resilience, reinforcing
                the strength of our partnership. </h1>
        </div>
    </section>
@endsection
