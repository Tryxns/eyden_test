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
                            <a href="#" class="block py-2 px-3">Our Tours</a>
                        </li>
                        <li class="border-b-4 hover:border-orange-600 border-transparent hover:text-orange-400">
                            <a href="#" class="block py-2 px-3">Review</a>
                        </li>
                        <li class="border-2 border-black rounded-full hover:text-orange-400 px-2">
                            <a href="#" class="block py-2 px-3">Contact us</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

            <section class="bg-cover bg-center bg-no-repeat " style="background-image: url({{ $jumbotron_img }})">
                <div class="px-4 ml-8 max-w-screen-xl text-center py-10 lg:pt-56 ">
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl text-left">
                        {{$jumbotron_caption}}
                    </p>
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl text-left">
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
        </div>
        
        <br>
        <br>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    </body>
</html>
