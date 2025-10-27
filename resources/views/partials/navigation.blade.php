
<!-- Navigation -->
<nav class="bg-white shadow-sm fixed w-full top-0 z-50" style="font-family: Delivery, Verdana, sans-serif;">
    <!-- Contact Information Bar -->
    <div class="bg-slate-800 border-b border-slate-700 py-2" style="font-family: Delivery, Verdana, sans-serif;">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-center space-y-2 lg:space-y-0">
                <!-- Contact Info -->
                <div class="flex flex-wrap justify-center lg:justify-start items-center gap-4 lg:gap-6 text-xs">
                    <div class="flex items-center space-x-1.5 text-white">
                        <i class="fas fa-phone-alt text-red-500 text-xs"></i>
                        <span>+255 123 456 789</span>
                    </div>
                    <div class="flex items-center space-x-1.5 text-white">
                        <i class="fas fa-envelope text-red-500 text-xs"></i>
                        <span>info@simbacourier.co.tz</span>
                    </div>
                    <div class="flex items-center space-x-1.5 text-white">
                        <i class="fas fa-map-marker-alt text-red-500 text-xs"></i>
                        <span>Dar es Salaam, Tanzania</span>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="flex items-center space-x-2 text-xs">
                    <div class="flex items-center space-x-1.5 text-green-400">
                        <span class="flex h-1.5 w-1.5 rounded-full bg-green-400 animate-pulse"></span>
                        <span class="font-medium">Office Open</span>
                    </div>
                    <div class="text-gray-300">
                        Mon - Fri: 8:00 AM - 6:00 PM | Sat: 9:00 AM - 2:00 PM
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-24">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('assets/logo.png') }}" alt="Simba Courier" class="h-24 w-auto">

                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:block">
                <div class="flex items-center space-x-6">
                    <a href="#home" class="border-b-2 px-3 py-2 text-xs font-semibold transition duration-150" style="color: rgb(162, 38, 49); border-color: rgb(162, 38, 49);">
                        Home
                    </a>
                    <a href="#services" class="text-gray-600 hover:border-b-2 px-3 py-2 text-xs font-medium transition duration-150 border-b-2 border-transparent" style="hover:color: rgb(162, 38, 49); hover:border-color: rgb(162, 38, 49);">
                        Services
                    </a>
                    <a href="#tracking" class="text-gray-600 hover:border-b-2 px-3 py-2 text-xs font-medium transition duration-150 border-b-2 border-transparent" style="hover:color: rgb(162, 38, 49); hover:border-color: rgb(162, 38, 49);">
                        Tracking
                    </a>
                    <a href="#about" class="text-gray-600 hover:border-b-2 px-3 py-2 text-xs font-medium transition duration-150 border-b-2 border-transparent" style="hover:color: rgb(162, 38, 49); hover:border-color: rgb(162, 38, 49);">
                        About
                    </a>
                    <a href="#contact" class="text-gray-600 hover:border-b-2 px-3 py-2 text-xs font-medium transition duration-150 border-b-2 border-transparent" style="hover:color: rgb(162, 38, 49); hover:border-color: rgb(162, 38, 49);">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Desktop Right Side -->
            <div class="hidden lg:flex items-center space-x-3">
                <!-- Search -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none">
                        <svg class="h-3.5 w-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" placeholder="Track Package" class="block w-40 pl-9 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:border-transparent text-xs" style="focus:ring-color: rgb(162, 38, 49);">
                </div>

                <!-- Track Button -->
                <a href="#tracking" class="inline-flex items-center px-5 py-2 border-0 text-xs font-semibold rounded-md text-white transition duration-150 shadow-sm hover:opacity-90" style="background-color: rgb(162, 38, 49);">
                    Track Package
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset" style="hover:color: rgb(162, 38, 49); focus:ring-color: rgb(162, 38, 49);">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Mobile menu -->
                <div x-show="open" x-transition class="origin-top-right absolute right-4 top-16 mt-2 w-72 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" @click.away="open = false">
                    <div class="px-4 py-5 space-y-3">
                        <!-- Navigation Links -->
                        <div class="space-y-1.5">
                            <a href="#home" class="block px-3 py-2.5 text-sm font-semibold rounded-lg" style="color: rgb(162, 38, 49); background-color: rgba(162, 38, 49, 0.05);" @click="open = false">
                                Home
                            </a>
                            <a href="#services" class="text-gray-600 block px-3 py-2.5 text-sm font-medium rounded-lg transition duration-150 hover:bg-gray-50" @click="open = false">
                                Services
                            </a>
                            <a href="#tracking" class="text-gray-600 block px-3 py-2.5 text-sm font-medium rounded-lg transition duration-150 hover:bg-gray-50" @click="open = false">
                                Tracking
                            </a>
                            <a href="#about" class="text-gray-600 block px-3 py-2.5 text-sm font-medium rounded-lg transition duration-150 hover:bg-gray-50" @click="open = false">
                                About
                            </a>
                            <a href="#contact" class="text-gray-600 block px-3 py-2.5 text-sm font-medium rounded-lg transition duration-150 hover:bg-gray-50" @click="open = false">
                                Contact
                            </a>
                        </div>

                        <hr class="border-gray-200">

                        <!-- Mobile Track Button -->
                        <a href="#tracking" class="block w-full px-4 py-2.5 text-center text-sm font-semibold rounded-lg text-white transition duration-150 hover:opacity-90" style="background-color: rgb(162, 38, 49);" @click="open = false">
                            Track Package
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Red line below navigation -->
    <div class="w-full h-1" style="background-color: rgb(162, 38, 49);"></div>
</nav>
