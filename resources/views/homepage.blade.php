<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="">
        <div class="container mx-auto grid-cols-12">
            <nav class="bg-white border-gray-200">
                <div class=" flex flex-wrap items-center justify-between p-4">
                    <a href="/" class="flex items-center space-x-3">
                        <img src="travel_logo.jpg" class="h-8" alt="Travel Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:border-gray-700">
                        <li class="border-b-4 hover:border-orange-600 border-transparent hover:text-orange-400">
                            <a href="#" class="block py-2 px-3" aria-current="page">Home</a>
                        </li>
                        <li class="border-b-4 hover:border-orange-600 border-transparent hover:text-orange-400">
                            <a href="#ourtour" class="block py-2 px-3">Our Tours</a>
                        </li>
                        <li class="border-b-4 hover:border-orange-600 border-transparent hover:text-orange-400">
                            <a href="#review" class="block py-2 px-3">Review</a>
                        </li>
                        <li class="border-2 border-black rounded-full hover:text-orange-400 px-2">
                            <a href="#contactus" class="block py-2 px-3">Contact us</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

            <section class="bg-cover bg-center bg-no-repeat" style="background-image: url({{ $jumbotron_img }})">
                <div class="px-4 ml-8 max-w-screen-xl text-center py-10 lg:pt-56 ">
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl text-left">
                        {{$jumbotron_caption}}
                    </p>
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-left grid grid-cols-3">
                        {{$jumbotron_headline}}
                    </h1>                    
                </div>

                <div class="grid grid-flow-col auto-cols-max ml-10 lg:pb-56">
                    <div class="bg-white border border-gray-200 rounded-full shadow grid grid-flow-col auto-cols-max px-6 py-4 shadow-2xl drop-shadow-2xl divide-x">
                        <div class="px-3">
                            <div class="inline-block mr-2">
                                <svg class="w-6 h-6 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                </svg>
                            </div>
                            <div class="inline-block">
                                <label class="inline-block" for="countries">Location</label>
                                <svg class="w-6 h-6 text-orange-400 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                                </svg>
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7">
                                    <option selected>Choose destination</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                            </div>

                        </div>
                        <div class="px-3">
                            <div class="inline-block mr-2">
                                <svg class="w-6 h-6 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                </svg>
                            </div>
                            <div class="inline-block">
                                <label class="inline-block" for="departure-datepicker">Departure</label>
                                <svg class="w-6 h-6 text-orange-400 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                                </svg>
                                <div class="relative max-w-sm">
                                    <input datepicker id="departure-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Select date">
                                </div>
                            </div>

                        </div>
                        <div class="px-3">
                            <div class="inline-block mr-2">
                                <svg class="w-6 h-6 text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                </svg>
                            </div>
                            <div class="inline-block">
                                <label class="inline-block" for="return-datepicker">Return</label>
                                <svg class="w-6 h-6 text-orange-400 inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                                </svg>
                                <div class="relative max-w-sm">
                                    <input datepicker id="return-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Select date">
                                </div>
                            </div>

                        </div>
                        <button type="button" class="text-white bg-orange-400 hover:bg-orange-600 font-small rounded-full text-sm text-center inline-flex items-center px-7">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                    </div>                    
                </div>
            </section>

            <div class="grid grid-cols-4 py-24">
                <div class="px-8 mx-8">
                    <p class="font-bold text-orange-400">WHAT WE SERVE</p>
                    <h4 class="font-bold text-3xl">TOP VALUES FOR YOU</h4>
                    <p class="mt-4">Try a variety benefits when using our service</p>
                </div>
                <div class="px-8 mx-8">
                    <img class="h-20 max-w-xs" src="/icons/planet-earth_921490.png" alt="image description">
                    <h4 class="font-bold py-4">Lots of choice</h4>
                    <p>Total 460++ destinations that we work with</p>
                </div>
                <div class="px-8 mx-8 pt-16">
                    <img class="h-20 max-w-xs" src="/icons/suitcase.png" alt="image description">
                    <h4 class="font-bold py-4">Best Tour Guide</h4>
                    <p>Our Tour Guide with 15+ years of experience</p>   
                </div>
                <div class="px-8 mx-8">
                    <img class="h-20 max-w-xs" src="/icons/ticket.png" alt="image description">
                    <h4 class="font-bold py-4">Easy Booking</h4>
                    <p>With an easy and fast ticket purchase process</p>
                </div>
            </div>

            <div id="ourtour" class="py-20">
                <h2 class="text-3xl mb-10">Our Tour</h2>
                <div class="grid grid-cols-2">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 inline-block">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/eiffeltwr.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Paris, France</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here is the eiffel tower.</p>
                        </div>
                    </a>

                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 inline-block">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/timessquare.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Manhattan, United States</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here is the Times Square.</p>
                        </div>
                    </a>
                </div>

            </div>

            <div id="review" class="py-6 mt-10">
            <h2 class="text-3xl text-center">Our Reviews</h2>
            
            <div id="default-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out pt-10" data-carousel-item>
                        <h3 class="text-4xl text-center">Lorem ipsum odor amet, consectetuer adipiscing elit. Dui viverra posuere purus aenean quisque, blandit malesuada. Enim erat non lacus urna quisque? Mauris ad facilisis; interdum fusce mollis amet tristique. Non per dui lobortis lobortis pharetra, metus a natoque phasellus. Dictum nam eget ac posuere ac, maximus fames</h3>
                        <h2 class="text-2xl text-center mt-10">~Pak Tatang</h2>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out pt-10" data-carousel-item>
                        <h3 class="text-4xl text-center">Lorem ipsum odor amet, consectetuer adipiscing elit. Dui viverra posuere purus aenean quisque, blandit malesuada. Enim erat non lacus urna quisque? Mauris ad facilisis; interdum fusce mollis amet tristique. Non per dui lobortis lobortis pharetra, metus a natoque phasellus. Dictum nam eget ac posuere ac, maximus fames</h3>
                        <h2 class="text-2xl text-center mt-10">~Bu Ijah</h2>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out pt-10" data-carousel-item>
                        <h3 class="text-4xl text-center">Lorem ipsum odor amet, consectetuer adipiscing elit. Dui viverra posuere purus aenean quisque, blandit malesuada. Enim erat non lacus urna quisque? Mauris ad facilisis; interdum fusce mollis amet tristique. Non per dui lobortis lobortis pharetra, metus a natoque phasellus. Dictum nam eget ac posuere ac, maximus fames</h3>
                        <h2 class="text-2xl text-center mt-10">~Bang Doel</h2>
                    </div>

                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            </div>

            <div id="contactus" class="py-52">
                <h2 class="text-3xl">Contact Us</h2>
                <p>+62 812 123 4567</p>
                <p>Jakarta, Indonesia</p>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    </body>
</html>
