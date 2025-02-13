<section class="relative">
    <div class="flex items-center justify-between p-5 lg:px-5 lg:py-2">

        {{-- labtop screen --}}
        <div class="ml-10 lg:ml-24 text-[10px] hidden lg:block text-[#ffffff]">
            <h1>No G 169 , Street ARATA, Sangkat Khmounh, Khan Sen Sok Phnom Penh Cambodia.</h1>
            <div class="flex space-x-10">
                <p>a2zengineering.kh@gmail.com</p>
                <p>(+855) 67 39 3333 </p>
                {{-- / (+855) 78 878 888 --}}
            </div>
        </div>

        {{-- <div class="lg:flex items-center justify-center hidden">
            <div class="relative">
                <input type="text"
                    class="w-64 px-4 py-[3px] pr-10 bg-[#3095f2] rounded-[30px] border-[#3095f2] focus:outline-none focus:ring-[#3095f2]" />
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-[#ffffff]">
                    <svg id="Layer_2_00000041273001625784970160000010331032815685675944_" class="w-5 h-5"
                        enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs">
                        <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                            <g id="Icon">
                                <path id="_02"
                                    d="m413.8 383-81.5-81.5c37-51.8 32.2-124.1-14.2-170.6-51.7-51.7-135.6-51.7-187.4 0s-51.7 135.6 0 187.4c46.6 46.6 119.4 51.2 171.1 13.8l81.4 81.4c8.4 8.4 22.1 8.4 30.5 0s8.5-22.1.1-30.5zm-247.7-100c-32.2-32.2-32.2-84.4 0-116.7s84.4-32.2 116.7 0 32.2 84.4 0 116.7-84.5 32.2-116.7 0z"
                                    fill="#ffffff" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                    stroke-opacity="1" />
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
        </div> --}}



        {{-- mobile screen --}}
        <div class="lg:hidden">
            <img src="{{ asset('assets/images/logo-1.png') }}" alt="" class="w-20">
        </div>

        <button id="drawer-toggle" class="lg:hidden p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Drawer -->
        <div id="drawer"
            class="fixed inset-0 z-50 hidden lg:hidden transition-transform duration-500 ease-in-out transform -translate-x-full">
            <!-- Drawer Content -->
            <div class="w-72 md:w-96 bg-[#1C4089] h-full p-5 flex flex-col">
                <div class="flex justify-between items-center">
                    <img src="{{ asset('assets/images/logo-1.png') }}" alt="" class="w-20">
                    <button id="close-drawer" class="text-[#ffffff]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>


                <ul class="space-y-6 pt-10">
                    <li>
                        <a href="{{ route('home') }}" class="text-[18px] sm:text-[20px] text-[#ffffff] hover:text-[#deb266] {{ Route::is('home') ? 'font-[700] text-[#deb266] text-[20px] tracking-[0.5px] underline' : ''  }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}" class="text-[18px] sm:text-[20px] text-[#ffffff] hover:text-[#deb266] {{ Route::is('about') ? 'font-[700] text-[#deb266] text-[20px] tracking-[0.5px] underline' : ''  }}">About Us</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-[18px] sm:text-[20px] text-[#ffffff] hover:text-[#deb266] {{ Route::is('service') ? 'font-[700] text-[#deb266] text-[20px] tracking-[0.5px] underline' : ''  }}">Professional Services</a></li>
                    <li><a href="{{ route('career') }}" class="text-[18px] sm:text-[20px] text-[#ffffff] hover:text-[#deb266] {{ Route::is('career') ? 'font-[700] text-[#deb266] text-[20px] tracking-[0.5px] underline' : ''  }}">Career
                            </a></li>
                </ul>


            </div>
        </div>
    </div>
</section>


<script>
    // Get elements
    const drawerToggle = document.getElementById('drawer-toggle');
    const drawer = document.getElementById('drawer');
    const closeDrawer = document.getElementById('close-drawer');

    drawerToggle.addEventListener('click', () => {
        drawer.classList.remove('hidden');
        setTimeout(() => {
            drawer.classList.remove('-translate-x-full');
        }, 10);
    });

    // Close the drawer when the close button is clicked
    closeDrawer.addEventListener('click', () => {
        drawer.classList.add('-translate-x-full'); // Slide out
        setTimeout(() => {
            drawer.classList.add('hidden'); // Hide after sliding out
        }, 300); // Wait for the transition to finish before hiding
    });

    // Close the drawer when clicking outside (on the overlay)
    drawer.addEventListener('click', (e) => {
        if (e.target === drawer) {
            drawer.classList.add('-translate-x-full'); // Slide out
            setTimeout(() => {
                drawer.classList.add('hidden'); // Hide after transition
            }, 300); // Wait for the transition to finish before hiding
        }
    });
</script>
