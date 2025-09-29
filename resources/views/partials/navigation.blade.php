<!-- Navigation -->
<nav class="bg-white shadow-sm fixed w-full top-0 z-50">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('assets/logo.png') }}" alt="Simba Courier" class="h-16 w-auto">
                        <div class="flex flex-col">
                            <span class="text-lg font-bold text-gray-900 leading-tight logo-text">Simba Courier</span>
                            <span class="text-xs text-neutral-600 font-medium -mt-0.5">Fast & Reliable</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:block">
                <div class="flex items-center space-x-8">
                    <a href="#home" class="text-primary-600 border-b-2 border-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">
                        Home
                    </a>
                    <a href="#services" class="text-gray-600 hover:text-primary-600 hover:border-b-2 hover:border-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out border-b-2 border-transparent">
                        Services
                    </a>
                    <a href="#tracking" class="text-gray-600 hover:text-primary-600 hover:border-b-2 hover:border-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out border-b-2 border-transparent">
                        Tracking
                    </a>
                    <a href="#about" class="text-gray-600 hover:text-primary-600 hover:border-b-2 hover:border-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out border-b-2 border-transparent">
                        About
                    </a>
                    <a href="#contact" class="text-gray-600 hover:text-primary-600 hover:border-b-2 hover:border-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out border-b-2 border-transparent">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Desktop Right Side -->
            <div class="hidden lg:flex items-center space-x-4">
                <!-- Search -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" placeholder="Track Package" class="block w-48 pl-10 pr-4 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500 text-sm">
                </div>

                <!-- Track Button -->
                <a href="#tracking" class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out shadow-sm">
                    Track Package
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-primary-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Mobile menu -->
                <div x-show="open" x-transition class="origin-top-right absolute right-4 top-16 mt-2 w-80 max-w-sm rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" @click.away="open = false">
                    <div class="px-4 py-6 space-y-4">
                        <!-- Navigation Links -->
                        <div class="space-y-2">
                            <a href="#home" class="text-primary-600 bg-primary-50 block px-4 py-3 text-base font-medium rounded-lg" @click="open = false">
                                Home
                            </a>
                            <a href="#services" class="text-gray-600 hover:text-primary-600 hover:bg-primary-50 block px-4 py-3 text-base font-medium rounded-lg transition duration-150" @click="open = false">
                                Services
                            </a>
                            <a href="#tracking" class="text-gray-600 hover:text-primary-600 hover:bg-primary-50 block px-4 py-3 text-base font-medium rounded-lg transition duration-150" @click="open = false">
                                Tracking
                            </a>
                            <a href="#about" class="text-gray-600 hover:text-primary-600 hover:bg-primary-50 block px-4 py-3 text-base font-medium rounded-lg transition duration-150" @click="open = false">
                                About
                            </a>
                            <a href="#contact" class="text-gray-600 hover:text-primary-600 hover:bg-primary-50 block px-4 py-3 text-base font-medium rounded-lg transition duration-150" @click="open = false">
                                Contact
                            </a>
                        </div>

                        <hr class="border-gray-200">

                        <!-- Mobile Search -->
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <input type="text" placeholder="Track Package" class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg text-base placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>

                        <!-- Mobile Track Button -->
                        <a href="#tracking" class="block w-full px-4 py-3 text-center text-base font-medium rounded-lg text-white bg-primary-500 hover:bg-primary-600 transition duration-150" @click="open = false">
                            Track Package
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Red line below navigation -->
    <div class="w-full h-1 bg-primary-600"></div>
</nav>
