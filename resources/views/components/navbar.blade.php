{{-- @section('css')
    <style>
        .nav-item .active {
            font-weight: 700;
            color: #deb266;
        }

        .nav-item .active::before {
            content: "";
            position: absolute;
            bottom: -14px;
            left: -10px;
            width: calc(100% + 20px);
            height: 6px;
            background-color: #deb266;
        }
    </style>
@endsection --}}
<section class="relative bg-cover bg-center h-[70px] hidden lg:block"
    style="background-image: url('assets/images/bg-1.png');">
    <div class="w-full max-w-7xl mx-auto">
        <div class="flex items-center justify-between px-5 py-4">
            <ul class="flex justify-center nav-menu relative nav space-x-6 text-[16px] xl:text-[20px] -mt-2">
                <li class="relative nav-item {{ Route::is('home') ? 'group' : '' }}">
                    <a href="{{ route('home') }}"
                        class="text-[#ffffff] hover:text-[#deb266] group-hover:text-[#deb266] px-4 py-3 w-full nav_link tracking-[1px] {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    <div class="absolute -left-[10px] -bottom-[96px] hidden group-hover:block -mt-1 z-20">
                        <div
                            class="py-1 relative text-[14px] grid grid-cols-2 gap-2 w-[24rem] bg-[#ffffff] px-4 space-x-4">
                            <div>
                                <div>
                                    <a href="#company_background"
                                        class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                        onclick="scrollToCenter('#company_background')">Company's
                                        background</a>
                                    <hr class="border-b-[1px] border-[#d6d6d6]">
                                </div>
                                <a href="#message_from_ceo"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                    onclick="scrollToCenter('#message_from_ceo')">Massage From CEO</a>
                            </div>
                            <div>
                                <div>
                                    <a href="#ceo_background"
                                        class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                        onclick="scrollToCenter('#ceo_background')">CEO’s
                                        Background</a>
                                    <hr class="border-b-[1px] border-[#d6d6d6]">
                                </div>
                                <a href="#"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                    onclick="scrollToCenter('#notable_clients')">Notable
                                    Clients</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="relative nav-item {{ Route::is('about') ? 'group' : '' }}">
                    <a href="{{ route('about') }}"
                        class="text-[#ffffff] hover:text-[#deb266] group-hover:text-[#deb266] px-4 py-3 w-full nav_link tracking-[1px] {{ Route::is('about') ? 'active' : '' }}">About
                        Us</a>
                    <div class="absolute -left-[10px] -bottom-[96px] hidden group-hover:block -mt-1 z-20">
                        <div
                            class="py-1 relative text-[14px] grid grid-cols-2 gap-2 w-[24rem] bg-[#ffffff] px-4 space-x-4">
                            <div>
                                <div>
                                    <a href="#mission"
                                        class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                        onclick="scrollToCenter('#mission')">Mission</a>
                                    <hr class="border-b-[1px] border-[#d6d6d6]">
                                </div>
                                <a href="#vision"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                    onclick="scrollToCenter('#vision')">Vision</a>
                            </div>
                            <div>
                                <div>
                                    <a href="#value"
                                        class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                        onclick="scrollToCenter('#value')">Core value</a>
                                    <hr class="border-b-[1px] border-[#d6d6d6]">
                                </div>
                                <a href="#business_registration"
                                    class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                    onclick="scrollToCenter('#business_registration')">Business Registration</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="relative nav-item {{ Route::is('service') ? 'group' : '' }}">
                    <a href="{{ route('service') }}"
                        class="text-[#ffffff] hover:text-[#deb266] group-hover:text-[#deb266] px-4 py-3 w-full nav_link tracking-[1px] {{ Route::is('service') ? 'active' : '' }}">Professional
                        Services</a>
                    <div class="absolute -left-[10px] -bottom-[96px] hidden group-hover:block -mt-1 z-20">
                        <div
                            class="py-1 relative text-[14px] grid grid-cols-2 gap-2 w-[24rem] bg-[#ffffff] px-4 space-x-4">
                            <div>
                                <div>
                                    <a href="#service_qualifications"
                                        class="block px-4 py-2 w-[14rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                        onclick="scrollToCenter('#service_qualifications')">Service
                                        Qualifications</a>
                                    <hr class="border-b-[1px] border-[#d6d6d6]">
                                </div>
                                <a href="#reason"
                                    class="block px-4 py-2 w-[15rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                    onclick="scrollToCenter('#reason')">Reasons to Choose A2Z M&E</a>
                            </div>

                            <a href="#our_experience"
                                class="block px-4 py-2 w-[15rem] duration-500 text-[#385796] hover:text-[#deb266]"
                                onclick="scrollToCenter('#our_experience')">Project References</a>

                        </div>
                    </div>
                </li>

                <li class="relative nav-item {{ Route::is('career') ? 'group' : '' }}">
                    <a href="{{ route('career') }}"
                        class="text-[#ffffff] hover:text-[#deb266] group-hover:text-[#deb266] px-4 py-3 w-full nav_link tracking-[1px] {{ Route::is('career') ? 'active' : '' }}">Career</a>
                    <div class="absolute -left-[10px] -bottom-[96px] hidden group-hover:block -mt-1 z-20">
                        {{-- <div
                            class="py-1 relative text-[14px] grid grid-cols-2 gap-2 w-[16rem] bg-[#ffffff] px-4 space-x-4">
                            <div>
                                <div>
                                    <a href="#"
                                        class="block px-4 py-2 w-[15rem] duration-500 text-[#385796] hover:text-[#deb266]" onclick="scrollToCenter('#reason')">Reasons to Choose A2Z M&E</a>
                                        <hr class="border-b-[1px] border-[#d6d6d6] w-[14rem]">
                                </div>
                                <a href="#" class="block px-4 py-2 w-[15rem] duration-500 text-[#385796] hover:text-[#deb266]" onclick="scrollToCenter('#our_experience')">Project References</a>
                            </div>
                        </div> --}}
                    </div>
                </li>
            </ul>

            <div class="mr-[7rem] xl:mr-[14rem] -mt-2">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-32">
            </div>
        </div>
    </div>
</section>


@section('js')
    <script>
        function scrollToCenter(target) {
            // Prevent the default action of the link
            event.preventDefault();

            // Get the target element
            var element = document.querySelector(target);

            // Calculate the position to center the element in the viewport
            var elementTop = element.getBoundingClientRect().top + window.pageYOffset;
            var elementHeight = element.offsetHeight;
            var viewportHeight = window.innerHeight;

            // Calculate the scroll position to center the element
            var scrollPosition = elementTop - (viewportHeight / 2) + (elementHeight / 2);

            // Scroll to the calculated position
            window.scrollTo({
                top: scrollPosition,
                behavior: 'smooth' // Smooth scroll
            });
        }
    </script>
@endsection
