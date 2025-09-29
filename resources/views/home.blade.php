@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    {{-- Hero Section --}}
    <section id="home" class="relative min-h-screen flex items-center overflow-hidden">

        <div class="hero-slider relative w-full h-screen">

            {{-- Slide 1: Express Delivery --}}
            <div class="slide active absolute inset-0 flex items-center" data-slide="0">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/slider01.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-600/80 via-primary-500/60 to-primary-700/80"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                        <div class="text-white space-y-6">
                            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10h5l3 4v6h-1a3 3 0 11-6 0H9a3 3 0 11-6 0H2v-6l3-4h5V4a2 2 0 112 0v6z"/>
                                </svg>
                                19+ Years of Excellence
                            </div>

                            <h1 class="hero-title text-5xl md:text-7xl font-bold">
                                Here Today,
                                <span class="block text-neutral-100">There Today</span>
                            </h1>

                            <p class="text-xl md:text-2xl text-gray-100 leading-relaxed max-w-2xl">
                                Tanzania's premier express courier service. Same-day, next-day, and customized delivery solutions across all regions.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <button class="btn-primary px-8 py-4 bg-white text-primary-600 rounded-xl font-semibold hover:bg-neutral-50 transition-all shadow-lg">
                                    Get Express Quote
                                </button>
                                <button class="btn-secondary px-8 py-4 border-2 border-white text-white rounded-xl font-semibold hover:bg-white hover:text-primary-500 transition-all">
                                    Our Services
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="w-80 h-80 bg-white/15 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/10">
                                <div class="flex flex-col items-center text-center h-full justify-center space-y-6">
                                    <div class="bg-neutral-50/20 w-20 h-20 rounded-2xl flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Express Delivery</h3>
                                        <p class="text-gray-100">Same-day delivery across Tanzania</p>
                                    </div>
                                    <div class="bg-white/20 rounded-xl p-4 w-full">
                                        <div class="text-3xl font-bold text-neutral-100">19+</div>
                                        <div class="text-sm text-gray-100">Years of trusted service</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Slide 2: Secure Document Handling --}}
            <div class="slide absolute inset-0 flex items-center opacity-0 pointer-events-none transition-opacity duration-700" data-slide="1">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/secure-documents.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-br from-neutral-800/70 via-neutral-700/60 to-primary-600/50"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                        <div class="text-white space-y-6">
                            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z"/>
                                </svg>
                                Banking & Corporate Trust
                            </div>

                            <h1 class="hero-title text-5xl md:text-7xl font-bold">
                                Secure Document
                                <span class="block text-primary-300">Handling</span>
                            </h1>

                            <p class="text-xl md:text-2xl text-gray-100 leading-relaxed max-w-2xl">
                                Trusted by Tanzania's leading banks, corporations, and healthcare institutions for critical document delivery.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <button class="btn-primary px-8 py-4 bg-white text-primary-600 rounded-xl font-semibold hover:bg-neutral-50 transition-all shadow-lg">
                                    Secure Delivery
                                </button>
                                <button class="btn-secondary px-8 py-4 border-2 border-white text-white rounded-xl font-semibold hover:bg-white hover:text-primary-500 transition-all">
                                    Learn More
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="w-80 h-80 bg-white/15 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/10">
                                <div class="flex flex-col items-center text-center h-full justify-center space-y-4">
                                    <div class="bg-primary-300/80 w-20 h-20 rounded-2xl flex items-center justify-center">
                                        <svg class="w-10 h-10 text-primary-800" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Chain of Custody</h3>
                                        <p class="text-gray-100">Full documentation & tracking</p>
                                    </div>
                                    <div class="w-full space-y-2">
                                        <div class="bg-white/20 rounded-xl p-3 flex items-center">
                                            <div class="w-3 h-3 bg-primary-400 rounded-full mr-3 flex-shrink-0"></div>
                                            <span class="text-sm">Banking Documents</span>
                                        </div>
                                        <div class="bg-white/20 rounded-xl p-3 flex items-center">
                                            <div class="w-3 h-3 bg-primary-600 rounded-full mr-3 flex-shrink-0"></div>
                                            <span class="text-sm">Legal Papers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Slide 3: Multimodal Transport --}}
            <div class="slide absolute inset-0 flex items-center opacity-0 pointer-events-none transition-opacity duration-700" data-slide="2">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/multimodal-transport.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-700/75 via-neutral-800/60 to-primary-600/70"></div>
                </div>

                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                        <div class="text-white space-y-6">
                            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                                </svg>
                                Road, Air & Sea
                            </div>

                            <h1 class="hero-title text-5xl md:text-7xl font-bold">
                                Complete
                                <span class="block text-neutral-200">Coverage</span>
                            </h1>

                            <p class="text-xl md:text-2xl text-gray-100 leading-relaxed max-w-2xl">
                                Multimodal transport solutions across Tanzania. Road, air, and sea freight for comprehensive logistics coverage.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 pt-2">
                                <button class="btn-primary px-8 py-4 bg-white text-primary-600 rounded-xl font-semibold hover:bg-neutral-50 transition-all shadow-lg">
                                    Get Coverage Quote
                                </button>
                                <button class="btn-secondary px-8 py-4 border-2 border-white text-white rounded-xl font-semibold hover:bg-white hover:text-primary-500 transition-all">
                                    Transport Options
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-center lg:justify-end">
                            <div class="w-80 h-80 bg-white/15 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/10">
                                <div class="flex flex-col items-center text-center h-full justify-center space-y-4">
                                    <div class="bg-neutral-200/80 w-20 h-20 rounded-2xl flex items-center justify-center">
                                        <svg class="w-10 h-10 text-primary-700" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Nationwide</h3>
                                        <p class="text-gray-100">From Dar es Salaam to remote regions</p>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2 w-full">
                                        <div class="bg-white/20 rounded-xl p-3">
                                            <div class="text-2xl mb-1">🚛</div>
                                            <div class="text-xs text-gray-100">Road</div>
                                        </div>
                                        <div class="bg-white/20 rounded-xl p-3">
                                            <div class="text-2xl mb-1">✈️</div>
                                            <div class="text-xs text-gray-100">Air</div>
                                        </div>
                                        <div class="bg-white/20 rounded-xl p-3">
                                            <div class="text-2xl mb-1">🚢</div>
                                            <div class="text-xs text-gray-100">Sea</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{-- Slider Navigation Dots --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20">
            <div class="flex gap-3">
                <button class="slide-nav w-3 h-3 rounded-full bg-white transition-all duration-300 hover:bg-white/80"
                        data-slide="0"
                        aria-label="Go to slide 1"></button>
                <button class="slide-nav w-3 h-3 rounded-full bg-white/40 transition-all duration-300 hover:bg-white/80"
                        data-slide="1"
                        aria-label="Go to slide 2"></button>
                <button class="slide-nav w-3 h-3 rounded-full bg-white/40 transition-all duration-300 hover:bg-white/80"
                        data-slide="2"
                        aria-label="Go to slide 3"></button>
            </div>
        </div>

        {{-- Navigation Arrows --}}
        <button class="prev-slide absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm hover:bg-white/40 p-3 rounded-full transition-all duration-300"
                aria-label="Previous slide">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
            </svg>
        </button>

        <button class="next-slide absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm hover:bg-white/40 p-3 rounded-full transition-all duration-300"
                aria-label="Next slide">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
            </svg>
        </button>
    </section>
    <!-- About Us Section -->
    <section id="about" class="py-20" style="background: linear-gradient(135deg, #0b152c 0%, #1e293b 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="relative text-center mb-16">
            <span class="inline-block px-4 py-2 text-xs font-semibold text-red-300 tracking-wider uppercase bg-red-900 bg-opacity-30 rounded-full mb-4 border border-red-400 border-opacity-30">
                <i class="fas fa-star mr-2"></i>
                About Simba Courier
            </span>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight bg-gradient-to-r from-red-400 to-white bg-clip-text text-transparent mb-6">
                    Here Today, There Today
{{--                    <span class="block">For Over 19 Years</span>--}}
                </h2>
                <p class="max-w-3xl mx-auto text-lg text-white text-opacity-90 leading-relaxed">
                    As a subsidiary of Simba Logistic Equipment Supply Co. Ltd, we're Tanzania's premier moving, relocation, and international courier specialists, making life's transitions seamless across the nation and beyond.
                </p>
                <div class="mt-8 h-1 w-24 bg-gradient-to-r from-red-500 to-white mx-auto rounded-full"></div>
            </div>

            <!-- Main Content with Image -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Image Side -->
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-red-900 bg-opacity-20 rounded-2xl transform rotate-3"></div>
                        <img src="{{ asset('assets/images/about-hero01.webp') }}"
                             alt="Simba Courier Moving Team"
                             class="relative w-full h-80 object-cover rounded-2xl shadow-xl">
                        <!-- Stats Overlay -->
                        <div class="absolute -bottom-6 -right-6 bg-white rounded-xl p-4 shadow-xl">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-red-600 mb-1">19+</div>
                                <div class="text-xs text-gray-600">Years Strong</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Side -->
                <div class="order-1 lg:order-2 space-y-6">
                    <!-- Our Story -->
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-4 heading">Our Story</h3>
                        <p class="text-white text-opacity-80 leading-relaxed mb-4">
                            For over 19 years, Simba Courier Services has been helping families and businesses navigate life's biggest transitions. From residential relocations to corporate moves and international shipping, we've made "Here Today, There Today" more than just a slogan—it's our promise.
                        </p>
                        <p class="text-white text-opacity-80 leading-relaxed">
                            What started as a vision to simplify relocations has grown into Tanzania's most trusted moving and courier service, handling everything from precious family heirlooms to critical business relocations with equal care.
                        </p>
                    </div>

                    <!-- Key Stats Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-10">
                            <div class="text-2xl font-bold text-red-400 mb-1">5000+</div>
                            <div class="text-xs text-white text-opacity-70">Successful Moves</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-10">
                            <div class="text-2xl font-bold text-red-400 mb-1">200+</div>
                            <div class="text-xs text-white text-opacity-70">Countries Reached</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-10">
                            <div class="text-2xl font-bold text-red-400 mb-1">24/7</div>
                            <div class="text-xs text-white text-opacity-70">Service Support</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 text-center border border-white border-opacity-10">
                            <div class="text-2xl font-bold text-red-400 mb-1">100%</div>
                            <div class="text-xs text-white text-opacity-70">Secure Handling</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-16">
                <!-- Mission Card -->
                <div class="relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-600 via-red-700 to-red-800"></div>
                    <div class="absolute inset-0 opacity-10 bg-pattern"></div>

                    <div class="relative p-10 text-white">
                        <div class="flex items-start mb-8">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-bullseye text-white text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold mb-2 heading">Our Mission</h4>
                                <div class="w-12 h-1 bg-white/40 rounded-full"></div>
                            </div>
                        </div>

                        <p class="text-red-50 text-lg leading-relaxed mb-6">
                            To provide comprehensive moving, relocation, and international courier services that make life's transitions seamless, allowing our clients to focus on their new beginnings while we handle the logistics with precision and care.
                        </p>

                        <div class="flex items-center space-x-4 text-red-100">
                            <div class="flex items-center">
                                <i class="fas fa-home mr-2"></i>
                                <span class="text-sm">Relocation</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-globe mr-2"></i>
                                <span class="text-sm">Global Reach</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-heart mr-2"></i>
                                <span class="text-sm">Care</span>
                            </div>
                        </div>

                        <!-- Decorative corner element -->
                        <div class="absolute top-6 right-6 w-20 h-20 border-2 border-white/20 rounded-full flex items-center justify-center">
                            <div class="w-12 h-12 border-2 border-white/30 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 bg-white/40 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-800 via-gray-900 to-black"></div>
                    <div class="absolute inset-0 opacity-10 bg-pattern"></div>

                    <div class="relative p-10 text-white">
                        <div class="flex items-start mb-8">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <i class="fas fa-eye text-white text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold mb-2 heading">Our Vision</h4>
                                <div class="w-12 h-1 bg-red-500 rounded-full"></div>
                            </div>
                        </div>

                        <p class="text-gray-200 text-lg leading-relaxed mb-6">
                            To be East Africa's most trusted partner for relocations and international shipping, known for care, reliability, and global connectivity that transforms how people and businesses make life's important moves.
                        </p>

                        <div class="flex items-center space-x-4 text-gray-300">
                            <div class="flex items-center">
                                <i class="fas fa-star mr-2 text-red-400"></i>
                                <span class="text-sm">Trust</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-handshake mr-2 text-red-400"></i>
                                <span class="text-sm">Partnership</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-expand-arrows-alt mr-2 text-red-400"></i>
                                <span class="text-sm">Growth</span>
                            </div>
                        </div>

                        <!-- Decorative corner element -->
                        <div class="absolute top-6 right-6 w-20 h-20 border-2 border-red-500/30 rounded-full flex items-center justify-center">
                            <div class="w-12 h-12 border-2 border-red-400/40 rounded-full flex items-center justify-center">
                                <div class="w-4 h-4 bg-red-400/60 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="bg-white bg-opacity-5 backdrop-blur-sm rounded-3xl p-10 mb-12 relative overflow-hidden border border-white border-opacity-10">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute top-10 left-10 w-32 h-32 border border-white rounded-full"></div>
                    <div class="absolute bottom-10 right-10 w-48 h-48 border border-white rounded-full"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 border border-white rounded-full"></div>
                </div>

                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <h3 class="text-4xl font-bold text-white mb-4 heading">Why Choose Simba Courier?</h3>
                        <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-white mx-auto mb-6 rounded-full"></div>
                        <p class="text-lg text-white text-opacity-80 max-w-3xl mx-auto leading-relaxed">
                            When life's biggest transitions matter most, families and businesses across Tanzania trust Simba Courier Services.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Moving Expertise -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-home text-red-400 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-star text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-red-400 transition-colors duration-300">19+ Years of Excellence</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    Nearly two decades of trusted experience delivering peace of mind through thousands of successful moves across Tanzania and internationally.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Packing -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-box text-gray-300 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gray-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-shield-alt text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-gray-300 transition-colors duration-300">Your Belongings Matter</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    Professional care using premium materials and proven techniques to protect everything from delicate antiques to sensitive electronics with the attention they deserve.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Global Network -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-globe text-red-400 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-plane text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-red-400 transition-colors duration-300">Truly Global Reach</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    Connect with over 200 countries worldwide through our comprehensive network, backed by customs expertise and reliable door-to-door delivery solutions.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Secure Warehousing -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-warehouse text-gray-300 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gray-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-lock text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-gray-300 transition-colors duration-300">Protected Every Step</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    State-of-the-art facilities with climate control and 24/7 security monitoring ensure your items remain safe and secure for both short and long-term needs.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        <!-- End-to-End Service -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-route text-red-400 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-red-400 transition-colors duration-300">Stress-Free Experience</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    From first contact to final placement, our dedicated project managers handle every detail of your journey so you can focus on what matters most.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 24/7 Support -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-2 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-2xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-headset text-gray-300 text-2xl"></i>
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gray-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-white text-xs"></i>
                                    </div>
                                </div>

                                <h4 class="text-xl font-bold text-white mb-4 heading group-hover:text-gray-300 transition-colors duration-300">Always Here for You</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm mb-6">
                                    Round-the-clock support and emergency assistance mean you're never alone—we're always monitoring and ready to help whenever you need us.
                                </p>

                                <div class="flex justify-center space-x-2">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-gray-600 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <div  id="services" class="max-w-7xl mx-auto bg-white rounded-3xl p-10 mb-12 relative overflow-hidden shadow-xl">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 border-2 border-red-400 rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-48 h-48 border-2 border-red-400 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 border-2 border-red-400 rounded-full"></div>
            <div class="absolute top-20 right-1/4 w-24 h-24 border-2 border-gray-400 rounded-full"></div>
            <div class="absolute bottom-20 left-1/4 w-40 h-40 border-2 border-gray-400 rounded-full"></div>
            <div class="absolute top-1/3 right-20 w-16 h-16 bg-red-300 rounded-lg transform rotate-45"></div>
            <div class="absolute bottom-1/3 left-20 w-20 h-20 bg-gray-300 rounded-lg transform rotate-12"></div>
            <div class="absolute top-3/4 right-1/3 w-12 h-12 border-2 border-red-400 transform rotate-45"></div>
            <div class="absolute top-1/4 left-1/3 w-14 h-14 border-2 border-gray-400 transform -rotate-12"></div>
        </div>

        <div class="relative z-10">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-900 mb-4 heading">Our Services</h3>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-red-700 mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive logistics solutions tailored to meet your every need, from local courier to international freight.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Warehouse Management -->
                <div class="group relative bg-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl"></div>

                    <div class="flex items-start space-x-6">
                        <div class="relative flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-red-200">
                                <i class="fas fa-warehouse text-red-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-star text-white text-xs"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-3 heading group-hover:text-red-600 transition-colors duration-300">Warehouse Management</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-4">
                                Professional inventory management with climate-controlled facilities, real-time tracking systems, and flexible storage solutions for businesses of all sizes.
                            </p>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    24/7 Security & Monitoring
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    Climate Control Systems
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    Inventory Management Software
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Local & International Courier -->
                <div class="group relative bg-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-2xl"></div>

                    <div class="flex items-start space-x-6">
                        <div class="relative flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-gray-300">
                                <i class="fas fa-shipping-fast text-gray-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-globe text-white text-xs"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-3 heading group-hover:text-gray-700 transition-colors duration-300">Local & International Courier</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-4">
                                Fast, reliable delivery services across Tanzania and to over 200 countries worldwide. From documents to packages, we ensure safe and timely delivery.
                            </p>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    Same-Day Local Delivery
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    Express International Shipping
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    Real-Time Tracking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Packaging -->
                <div class="group relative bg-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl"></div>

                    <div class="flex items-start space-x-6">
                        <div class="relative flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-red-200">
                                <i class="fas fa-box-open text-red-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-shield-alt text-white text-xs"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-3 heading group-hover:text-red-600 transition-colors duration-300">Packaging</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-4">
                                Expert packing services using premium materials and industry-best techniques to protect your valuables during transit and storage.
                            </p>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    Custom Crating Solutions
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    Fragile Item Specialists
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2"></i>
                                    Premium Packing Materials
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Movers & Relocation -->
                <div class="group relative bg-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-2xl"></div>

                    <div class="flex items-start space-x-6">
                        <div class="relative flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-gray-300">
                                <i class="fas fa-truck-moving text-gray-600 text-2xl"></i>
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-gray-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-home text-white text-xs"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 mb-3 heading group-hover:text-gray-700 transition-colors duration-300">Movers & Relocation</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-4">
                                Comprehensive moving services for residential and corporate relocations. From planning to execution, we handle every detail of your move.
                            </p>
                            <ul class="space-y-2 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    Residential Moving
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    Corporate Relocation
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2"></i>
                                    International Moving
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <a href="#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-full hover:from-red-600 hover:to-red-800 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    <span>Get a Free Quote</span>
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- clients Section -->
    <div class="max-w-7xl mx-auto rounded-3xl p-10 mb-12 relative overflow-hidden shadow-xl" style="background-color: rgb(139, 31, 41);">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 left-10 w-32 h-32 border-2 border-white rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-48 h-48 border-2 border-white rounded-full"></div>
            <div class="absolute top-1/2 right-1/4 w-24 h-24 border-2 border-white rounded-full"></div>
            <div class="absolute top-1/3 right-20 w-16 h-16 bg-white rounded-lg transform rotate-45"></div>
            <div class="absolute bottom-1/3 left-20 w-20 h-20 bg-white rounded-lg transform rotate-12"></div>
            <div class="absolute top-3/4 right-1/3 w-12 h-12 border-2 border-white transform rotate-45"></div>
            <div class="absolute top-1/4 left-1/3 w-14 h-14 border-2 border-white transform -rotate-12"></div>
        </div>

        <div class="relative z-10">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-white mb-4 heading">Our Trusted Clients</h3>
                <div class="w-24 h-1 bg-gradient-to-r from-white to-gray-200 mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-white text-opacity-90 max-w-3xl mx-auto leading-relaxed">
                    Trusted by leading companies across Tanzania and beyond. Join hundreds of satisfied clients who rely on our services.
                </p>
            </div>

            <!-- Slider Container -->
            <div class="relative overflow-hidden">
                <!-- Gradient Overlays -->
                <div class="absolute left-0 top-0 bottom-0 w-32 z-10" style="background: linear-gradient(to right, rgb(139, 31, 41), transparent);"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 z-10" style="background: linear-gradient(to left, rgb(139, 31, 41), transparent);"></div>

                <!-- Sliding Track -->
                <div class="flex animate-slide">
                    <!-- Logo Item -->

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/tz-crdb-logo.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/tz-nmb-logo.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Vodacom-1.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Airtel_Tanzania-Logo.wine.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Yas_Tanzania.svg.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Duplicate logos for seamless loop -->
                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/tz-crdb-logo.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/tz-nmb-logo.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Vodacom-1.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Airtel_Tanzania-Logo.wine.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>

                    <!-- Logo Item -->
                    <div class="flex-shrink-0 w-48 h-32 mx-6 flex items-center justify-center bg-gray-50 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/clients/Yas_Tanzania.svg.png') }}" alt="Client Logo" class="max-w-full max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tracking Section -->
    <div id="tracking" class="py-20" style="background: linear-gradient(135deg, #0b152c 0%, #1e293b 100%);">
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-40 h-40 border-2 border-white rounded-full animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-56 h-56 border-2 border-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 border-2 border-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 right-16 w-20 h-20 bg-white rounded-xl transform rotate-45 opacity-40"></div>
            <div class="absolute bottom-1/3 left-16 w-24 h-24 bg-white rounded-xl transform rotate-12 opacity-30"></div>
            <div class="absolute top-20 right-1/3 w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-full blur-xl opacity-20"></div>
            <div class="absolute bottom-20 left-1/3 w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full blur-xl opacity-20"></div>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-red-600/5 via-transparent to-blue-600/5"></div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16" id="trackingHeader">
                <div class="inline-block mb-6">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-white bg-opacity-10 backdrop-blur-sm border border-white border-opacity-20 text-white text-sm font-semibold">
                    <i class="fas fa-shipping-fast mr-2 text-red-500"></i>
                    Real-Time Tracking
                </span>
                </div>
                <h3 class="text-4xl md:text-6xl font-extrabold text-white mb-6 heading">
                    Track Your <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Shipment</span>
                </h3>
                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="w-16 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent rounded-full"></div>
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <div class="w-32 h-1.5 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <div class="w-16 h-1 bg-gradient-to-r from-red-600 via-red-500 to-transparent rounded-full"></div>
                </div>
                <p class="text-lg text-white text-opacity-90 max-w-2xl mx-auto leading-relaxed">
                    Enter your waybill number to get real-time updates on your shipment location and delivery status.
                </p>
            </div>

            <!-- Tracking Form Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center" id="trackingFormSection">
                <!-- Left Side - Laptop Mockup -->
                <div class="order-2 lg:order-1">
                    <div class="relative group">
                        <!-- Glow Effect -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-600 to-blue-600 rounded-3xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>

                        <div class="relative">
                            <img
                                src="{{ asset('assets/images/tracking-system.png') }}"
                                alt="Tracking System"
                                class="w-full h-auto object-contain drop-shadow-2xl transform group-hover:scale-105 transition-transform duration-500"
                            >
                        </div>

                        <!-- Floating Stats -->
                        <div class="absolute -top-6 -right-6 bg-white rounded-2xl p-4 shadow-2xl hidden md:block transform hover:scale-110 transition-transform duration-300">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-gray-900">98%</p>
                                    <p class="text-xs text-gray-600">On-Time Delivery</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-2xl hidden md:block transform hover:scale-110 transition-transform duration-300">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-box text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-gray-900">50K+</p>
                                    <p class="text-xs text-gray-600">Shipments/Month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="order-1 lg:order-2">
                    <div class="bg-white rounded-3xl p-8 md:p-10 shadow-2xl backdrop-blur-sm border border-gray-100 hover:shadow-red-500/10 transition-all duration-500">
                        <div class="mb-8">
                            <h4 class="text-3xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                                <span class="w-2 h-8 bg-gradient-to-b from-red-500 to-red-700 rounded-full"></span>
                                Track Now
                            </h4>
                            <p class="text-gray-600 ml-5">Enter your tracking details below</p>
                        </div>

                        <form id="trackingForm" class="space-y-6">
                            @csrf

                            <!-- Waybill Input -->
                            <div>
                                <label for="waybill" class="block text-gray-900 font-semibold mb-3 text-sm uppercase tracking-wide">
                                    <i class="fas fa-barcode mr-2 text-red-600"></i>
                                    Waybill Number
                                </label>
                                <div class="relative group">
                                    <input
                                        type="text"
                                        id="waybill"
                                        name="waybill"
                                        placeholder="e.g., SIM123456789"
                                        class="w-full px-5 py-4 pl-12 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300"
                                        required
                                    >
                                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-hashtag text-gray-400 group-focus-within:text-red-600 transition-colors duration-300"></i>
                                    </div>
                                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                        <i class="fas fa-search text-gray-400 group-focus-within:text-red-600 transition-colors duration-300"></i>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2 ml-1">
                                    <i class="fas fa-info-circle mr-1"></i>
                                    Your waybill number can be found on your shipping receipt
                                </p>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full group relative inline-flex items-center justify-center px-6 py-5 text-white text-lg font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-red-600/30 transform hover:scale-105 hover:-translate-y-1 overflow-hidden"
                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);"
                            >
                                <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                                <i class="fas fa-map-marker-alt mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                                <span>Track Shipment</span>
                                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                            </button>

                            <!-- Features List -->
                            <div class="pt-4 border-t border-gray-100">
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i class="fas fa-clock text-red-600"></i>
                                        <span>Real-time Updates</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i class="fas fa-bell text-red-600"></i>
                                        <span>SMS Alerts</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i class="fas fa-map text-red-600"></i>
                                        <span>GPS Tracking</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-600">
                                        <i class="fas fa-shield-alt text-red-600"></i>
                                        <span>Secure & Safe</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Alternative Tracking Methods -->
                    <div class="mt-8">
                        <p class="text-white text-center mb-5 font-medium text-lg">
                            Need assistance?
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="tel:+255123456789" class="group inline-flex items-center bg-white bg-opacity-10 backdrop-blur-sm px-6 py-3 rounded-xl text-white hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-30 hover:border-opacity-50 hover:scale-105 transform shadow-lg">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-xs text-white text-opacity-70">Call Us</p>
                                    <p class="font-semibold">+255 123 456</p>
                                </div>
                            </a>
                            <a href="mailto:support@simbacourier.com" class="group inline-flex items-center bg-white bg-opacity-10 backdrop-blur-sm px-6 py-3 rounded-xl text-white hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-30 hover:border-opacity-50 hover:scale-105 transform shadow-lg">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-xs text-white text-opacity-70">Email Us</p>
                                    <p class="font-semibold">Support</p>
                                </div>
                            </a>
                            <a href="#" class="group inline-flex items-center bg-white bg-opacity-10 backdrop-blur-sm px-6 py-3 rounded-xl text-white hover:bg-opacity-20 transition-all duration-300 border border-white border-opacity-30 hover:border-opacity-50 hover:scale-105 transform shadow-lg">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-xs text-white text-opacity-70">WhatsApp</p>
                                    <p class="font-semibold">Chat Now</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tracking Progress Section (Hidden by default) -->

            <div id="trackingProgressSection" class="hidden">
                <!-- Progress Header -->
                <div class="bg-white rounded-2xl p-6 shadow-xl mb-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                <span class="w-1.5 h-6 bg-gradient-to-b from-red-500 to-red-700 rounded-full"></span>
                                Tracking Details
                            </h4>
                            <p class="text-sm text-gray-600 ml-3.5 mt-1">
                                Waybill: <span id="displayWaybill" class="font-semibold text-red-600"></span>
                            </p>
                        </div>
                        <button onclick="resetTracking()" class="px-5 py-2.5 bg-gradient-to-r from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-lg text-sm">
                            <i class="fas fa-search mr-2"></i>
                            New Search
                        </button>
                    </div>

                    <!-- Horizontal Divider -->
                    <div class="my-5 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>

                    <!-- Shipment Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs text-gray-600 font-medium mb-1">Status</div>
                                    <div class="text-gray-900 font-bold text-lg">In Transit</div>
                                </div>
                                <div class="w-11 h-11 bg-gradient-to-br from-red-500 to-red-700 rounded-lg flex items-center justify-center shadow-md">
                                    <i class="fas fa-truck text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs text-gray-600 font-medium mb-1">Est. Delivery</div>
                                    <div class="text-gray-900 font-bold text-lg">Oct 5, 2025</div>
                                </div>
                                <div class="w-11 h-11 bg-gradient-to-br from-gray-700 to-gray-900 rounded-lg flex items-center justify-center shadow-md">
                                    <i class="fas fa-calendar-alt text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-xs text-gray-600 font-medium mb-1">Location</div>
                                    <div class="text-gray-900 font-bold text-lg">Dar es Salaam</div>
                                </div>
                                <div class="w-11 h-11 bg-gradient-to-br from-red-500 to-red-700 rounded-lg flex items-center justify-center shadow-md">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Horizontal Progress Timeline -->
                <div class="bg-white rounded-2xl p-6 shadow-xl">
                    <h5 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-gradient-to-b from-red-500 to-red-700 rounded-full"></span>
                        Shipment Journey
                    </h5>

                    <!-- Desktop Horizontal Timeline -->
                    <div class="hidden lg:block">
                        <div class="relative pt-2">
                            <!-- Progress Line -->
                            <div class="absolute top-8 left-0 right-0 h-1 bg-gray-200 rounded-full"></div>
                            <div class="absolute top-8 left-0 h-1 bg-gradient-to-r from-gray-700 via-gray-700 to-red-600 rounded-full transition-all duration-500" style="width: 60%;"></div>

                            <!-- Timeline Items -->
                            <div class="grid grid-cols-5 gap-2">
                                <!-- Item 1 - Completed -->
                                <div class="relative flex flex-col items-center">
                                    <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-900 rounded-full flex items-center justify-center shadow-lg z-10 mb-4">
                                        <i class="fas fa-check text-white text-lg"></i>
                                    </div>
                                    <div class="text-center w-full">
                                        <h6 class="font-bold text-gray-900 text-sm mb-1">Picked Up</h6>
                                        <p class="text-xs text-gray-600 mb-1">Oct 1, 2025</p>
                                        <p class="text-xs text-gray-500">10:30 AM</p>
                                    </div>
                                </div>

                                <!-- Item 2 - Completed -->
                                <div class="relative flex flex-col items-center">
                                    <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-900 rounded-full flex items-center justify-center shadow-lg z-10 mb-4">
                                        <i class="fas fa-warehouse text-white text-lg"></i>
                                    </div>
                                    <div class="text-center w-full">
                                        <h6 class="font-bold text-gray-900 text-sm mb-1">Sorting</h6>
                                        <p class="text-xs text-gray-600 mb-1">Oct 2, 2025</p>
                                        <p class="text-xs text-gray-500">08:15 AM</p>
                                    </div>
                                </div>

                                <!-- Item 3 - In Progress -->
                                <div class="relative flex flex-col items-center">
                                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center shadow-lg z-10 mb-4 animate-pulse ring-4 ring-red-200">
                                        <i class="fas fa-truck text-white text-lg"></i>
                                    </div>
                                    <div class="text-center w-full">
                                        <h6 class="font-bold text-gray-900 text-sm mb-1 flex items-center justify-center gap-1">
                                            In Transit
                                            <span class="px-2 py-0.5 bg-red-500 text-white text-xs font-semibold rounded-full">Now</span>
                                        </h6>
                                        <p class="text-xs text-gray-600 mb-1">Oct 3, 2025</p>
                                        <p class="text-xs text-gray-500">02:45 PM</p>
                                    </div>
                                </div>

                                <!-- Item 4 - Pending -->
                                <div class="relative flex flex-col items-center opacity-50">
                                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center shadow-lg z-10 mb-4">
                                        <i class="fas fa-box text-white text-lg"></i>
                                    </div>
                                    <div class="text-center w-full">
                                        <h6 class="font-bold text-gray-600 text-sm mb-1">Out for Delivery</h6>
                                        <p class="text-xs text-gray-500 mb-1">Pending</p>
                                        <p class="text-xs text-gray-400">--:--</p>
                                    </div>
                                </div>

                                <!-- Item 5 - Pending -->
                                <div class="relative flex flex-col items-center opacity-50">
                                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center shadow-lg z-10 mb-4">
                                        <i class="fas fa-home text-white text-lg"></i>
                                    </div>
                                    <div class="text-center w-full">
                                        <h6 class="font-bold text-gray-600 text-sm mb-1">Delivered</h6>
                                        <p class="text-xs text-gray-500 mb-1">Pending</p>
                                        <p class="text-xs text-gray-400">--:--</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal Divider -->
                    <div class="my-6 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent hidden lg:block"></div>

                    <!-- Mobile/Tablet Vertical Timeline -->
                    <div class="lg:hidden relative">
                        <!-- Progress Line -->
                        <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                        <div class="absolute left-6 top-0 w-0.5 bg-gradient-to-b from-gray-700 to-red-600" style="height: 60%;"></div>

                        <!-- Timeline Items -->
                        <div class="space-y-6">
                            <!-- Item 1 - Completed -->
                            <div class="relative flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-full flex items-center justify-center shadow-lg flex-shrink-0 z-10">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="flex-1 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                                    <h6 class="font-bold text-gray-900 text-sm mb-1">Package Picked Up</h6>
                                    <p class="text-xs text-gray-600 mb-1">Oct 1, 2025 - 10:30 AM</p>
                                    <p class="text-xs text-gray-700">Collected from Dar es Salaam</p>
                                </div>
                            </div>

                            <!-- Item 2 - Completed -->
                            <div class="relative flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-full flex items-center justify-center shadow-lg flex-shrink-0 z-10">
                                    <i class="fas fa-warehouse text-white"></i>
                                </div>
                                <div class="flex-1 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                                    <h6 class="font-bold text-gray-900 text-sm mb-1">Sorting Facility</h6>
                                    <p class="text-xs text-gray-600 mb-1">Oct 2, 2025 - 08:15 AM</p>
                                    <p class="text-xs text-gray-700">Processed at sorting center</p>
                                </div>
                            </div>

                            <!-- Item 3 - In Progress -->
                            <div class="relative flex items-start gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center shadow-lg flex-shrink-0 z-10 animate-pulse ring-4 ring-red-200">
                                    <i class="fas fa-truck text-white"></i>
                                </div>
                                <div class="flex-1 bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-4 border border-red-300">
                                    <h6 class="font-bold text-gray-900 text-sm mb-1 flex items-center gap-2">
                                        In Transit
                                        <span class="px-2 py-0.5 bg-red-500 text-white text-xs font-semibold rounded-full">Current</span>
                                    </h6>
                                    <p class="text-xs text-gray-600 mb-1">Oct 3, 2025 - 02:45 PM</p>
                                    <p class="text-xs text-gray-700">On the way to destination</p>
                                </div>
                            </div>

                            <!-- Item 4 - Pending -->
                            <div class="relative flex items-start gap-4 opacity-50">
                                <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center shadow-lg flex-shrink-0 z-10">
                                    <i class="fas fa-box text-white"></i>
                                </div>
                                <div class="flex-1 bg-gray-50 rounded-xl p-4 border border-gray-200">
                                    <h6 class="font-bold text-gray-600 text-sm mb-1">Out for Delivery</h6>
                                    <p class="text-xs text-gray-500 mb-1">Pending</p>
                                    <p class="text-xs text-gray-600">Will be out soon</p>
                                </div>
                            </div>

                            <!-- Item 5 - Pending -->
                            <div class="relative flex items-start gap-4 opacity-50">
                                <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center shadow-lg flex-shrink-0 z-10">
                                    <i class="fas fa-home text-white"></i>
                                </div>
                                <div class="flex-1 bg-gray-50 rounded-xl p-4 border border-gray-200">
                                    <h6 class="font-bold text-gray-600 text-sm mb-1">Delivered</h6>
                                    <p class="text-xs text-gray-500 mb-1">Pending</p>
                                    <p class="text-xs text-gray-600">Will be delivered to recipient</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Section -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                            <div class="flex items-center justify-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-clock text-red-600"></i>
                                <span>Real-time Updates</span>
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-bell text-red-600"></i>
                                <span>SMS Notifications</span>
                            </div>
                            <div class="flex items-center justify-center gap-2 text-sm text-gray-600">
                                <i class="fas fa-shield-alt text-red-600"></i>
                                <span>Secure Tracking</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Section -->
    <div class="py-20 md:p-16 relative overflow-hidden shadow-2xl" style="background: linear-gradient(135deg, rgb(162, 38, 49) 0%, rgb(142, 28, 39) 100%);">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 border-2 border-white rounded-full animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-56 h-56 border-2 border-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 border-2 border-white rounded-full"></div>
            <div class="absolute top-1/3 right-16 w-20 h-20 bg-white rounded-xl transform rotate-45 opacity-30"></div>
            <div class="absolute bottom-1/3 left-16 w-24 h-24 bg-white rounded-xl transform rotate-12 opacity-20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-block mb-6">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-white bg-opacity-20 backdrop-blur-sm border border-white border-opacity-30 text-white text-sm font-semibold">
                    <i class="fas fa-envelope mr-2"></i>
                    Get In Touch
                </span>
                </div>
                <h3 class="text-4xl md:text-6xl font-extrabold text-white mb-6 heading">
                    Contact Us
                </h3>
                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="w-16 h-1 bg-gradient-to-r from-transparent via-white to-transparent rounded-full"></div>
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <div class="w-32 h-1.5 bg-white rounded-full"></div>
                    <div class="w-2 h-2 bg-white rounded-full"></div>
                    <div class="w-16 h-1 bg-gradient-to-r from-white via-white to-transparent rounded-full"></div>
                </div>
                <p class="text-lg text-white text-opacity-95 max-w-2xl mx-auto leading-relaxed">
                    Have questions? We're here to help. Reach out to us and we'll get back to you as soon as possible.
                </p>
            </div>

            <!-- Contact Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left Side - Customer Care Image -->
                <div>
                    <div class="relative group h-full flex items-center">
                        <!-- Glow Effect -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-white/20 to-white/10 rounded-3xl blur-2xl opacity-30 group-hover:opacity-40 transition-opacity duration-500"></div>

                        <div class="relative w-full">
                            <img
                                src="{{ asset('assets/images/customer-care.webp') }}"
                                alt="Customer Care"
                                class="w-full h-[600px] object-cover rounded-3xl shadow-2xl transform group-hover:scale-105 transition-transform duration-500"
                            >
                        </div>
                    </div>
                </div>

                <!-- Right Side - Contact Form -->
                <div>
                    <div class="bg-white rounded-3xl p-8 md:p-10 shadow-2xl">
                        <div class="mb-8">
                            <h4 class="text-3xl font-bold text-gray-900 mb-3 flex items-center gap-3">
                                <span class="w-2 h-8 bg-gradient-to-b from-red-500 to-red-700 rounded-full"></span>
                                Send Message
                            </h4>
                            <p class="text-gray-600 ml-5">Fill out the form below and we'll be in touch</p>
                        </div>

                        <form action="" method="POST" class="space-y-6">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-gray-900 font-semibold mb-3">
                                    Full Name
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your full name"
                                    class="w-full px-5 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300"
                                    required
                                >
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-gray-900 font-semibold mb-3">
                                    Email Address
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="your.email@example.com"
                                    class="w-full px-5 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300"
                                    required
                                >
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-gray-900 font-semibold mb-3">
                                    Phone Number
                                </label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="+255 XXX XXX XXX"
                                    class="w-full px-5 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300"
                                    required
                                >
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-gray-900 font-semibold mb-3">
                                    Subject
                                </label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="How can we help you?"
                                    class="w-full px-5 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300"
                                    required
                                >
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-gray-900 font-semibold mb-3">
                                    Message
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us more about your inquiry..."
                                    class="w-full px-5 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent focus:bg-white transition-all duration-300 resize-none"
                                    required
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full group relative inline-flex items-center justify-center px-6 py-5 text-white text-lg font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-red-600/30 transform hover:scale-105 hover:-translate-y-1 overflow-hidden"
                                style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);"
                            >
                                <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                                <i class="fas fa-paper-plane mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                                <span>Send Message</span>
                                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-300"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="mt-16 text-center">
                <p class="text-white text-lg font-semibold mb-6">Follow Us On Social Media</p>
                <div class="flex justify-center gap-4">
                    <a href="#" class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-opacity-30 hover:scale-110 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-opacity-30 hover:scale-110 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-opacity-30 hover:scale-110 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-opacity-30 hover:scale-110 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="#" class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center text-white hover:bg-opacity-30 hover:scale-110 transition-all duration-300 border border-white border-opacity-30">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer Section -->
    <footer class="relative overflow-hidden bg-white">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-40 h-40 border-2 border-gray-300 rounded-full animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-56 h-56 border-2 border-gray-300 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 border-2 border-gray-300 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/3 right-16 w-20 h-20 bg-gray-300 rounded-xl transform rotate-45 opacity-40"></div>
            <div class="absolute bottom-1/3 left-16 w-24 h-24 bg-gray-300 rounded-xl transform rotate-12 opacity-30"></div>
        </div>

        <div class="relative z-10">
            <!-- Main Footer -->
            <div class="max-w-7xl mx-auto px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Company Info -->
                    <div>
                        <div class="mb-6">
                            <img src="{{ asset('assets/Simba_Courier_Logo.png') }}" alt="Simba Courier" class="h-24 ">
                            <p class="text-gray-600 leading-relaxed">
                                Your trusted logistics partner in Tanzania. Delivering excellence with every shipment since 2005.
                            </p>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-red-600 rounded-lg flex items-center justify-center text-gray-700 hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-red-600 rounded-lg flex items-center justify-center text-gray-700 hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-red-600 rounded-lg flex items-center justify-center text-gray-700 hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-red-600 rounded-lg flex items-center justify-center text-gray-700 hover:text-white transition-all duration-300 shadow-sm">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-gray-900 text-lg font-bold mb-6 flex items-center gap-2">
                            <span class="w-1 h-6 bg-gradient-to-b from-red-600 to-red-700 rounded-full"></span>
                            Quick Links
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="#about" class="text-gray-600 hover:text-red-600 hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                                    <i class="fas fa-chevron-right text-xs text-red-600"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-600 hover:text-red-600 hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                                    <i class="fas fa-chevron-right text-xs text-red-600"></i>
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#tracking" class="text-gray-600 hover:text-red-600 hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                                    <i class="fas fa-chevron-right text-xs text-red-600"></i>
                                    Track Shipment
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="text-gray-600 hover:text-red-600 hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                                    <i class="fas fa-chevron-right text-xs text-red-600"></i>
                                    Get Quote
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-600 hover:text-red-600 hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                                    <i class="fas fa-chevron-right text-xs text-red-600"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-gray-900 text-lg font-bold mb-6 flex items-center gap-2">
                            <span class="w-1 h-6 bg-gradient-to-b from-red-600 to-red-700 rounded-full"></span>
                            Contact Info
                        </h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 group">
                                <div class="w-10 h-10 bg-red-50 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-red-100 transition-all duration-300">
                                    <i class="fas fa-map-marker-alt text-red-600"></i>
                                </div>
                                <span class="text-gray-600 text-sm leading-relaxed">
                                P.O.Box 40451 Dar Es Salaam<br>
                                Plot 71 Siwa Road<br>
                                Mikocheni Industrial Area
                            </span>
                            </li>
                            <li class="flex items-center gap-3 group">
                                <div class="w-10 h-10 bg-red-50 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-red-100 transition-all duration-300">
                                    <i class="fas fa-phone-alt text-red-600"></i>
                                </div>
                                <a href="tel:+255677222605" class="text-gray-600 hover:text-red-600 transition-colors text-sm">
                                    +255 677 222 605
                                </a>
                            </li>
                            <li class="flex items-center gap-3 group">
                                <div class="w-10 h-10 bg-red-50 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-red-100 transition-all duration-300">
                                    <i class="fas fa-envelope text-red-600"></i>
                                </div>
                                <a href="mailto:info@simbacourier.co.tz" class="text-gray-600 hover:text-red-600 transition-colors text-sm break-all">
                                    info@simbacourier.co.tz
                                </a>
                            </li>
                            <li class="flex items-start gap-3 group">
                                <div class="w-10 h-10 bg-red-50 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-red-100 transition-all duration-300">
                                    <i class="fas fa-clock text-red-600"></i>
                                </div>
                                <span class="text-gray-600 text-sm leading-relaxed">
                                Monday-Friday: 08:00–17:00<br>
                                Saturday: 08:00–12:30<br>
                                Sunday: Closed
                            </span>
                            </li>
                        </ul>
                    </div>

                    <!-- ISO Certifications -->
                    <div>
                        <h4 class="text-gray-900 text-lg font-bold mb-6 flex items-center gap-2">
                            <span class="w-1 h-6 bg-gradient-to-b from-red-600 to-red-700 rounded-full"></span>
                            Certifications
                        </h4>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                            Certified and trusted by international standards for quality and safety.
                        </p>
                        <div class="space-y-4">
                            <div class="bg-gray-50 rounded-xl p-4 border border-gray-200 hover:border-red-600 hover:shadow-lg transition-all duration-300">
                                <img
                                    src="{{ asset('assets/images/iso.png') }}"
                                    alt="ISO 9001"
                                    class="h-16 w-auto mx-auto object-contain"
                                >
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-200">
                <div class="max-w-7xl mx-auto px-8 py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-gray-600 text-sm text-center md:text-left">
                            © 2025 Simba Courier Services. All rights reserved.
                        </p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="#" class="text-gray-500 hover:text-red-600 text-sm transition-colors hover:underline">
                                Privacy Policy
                            </a>
                            <a href="#" class="text-gray-500 hover:text-red-600 text-sm transition-colors hover:underline">
                                Terms of Service
                            </a>
                            <a href="#" class="text-gray-500 hover:text-red-600 text-sm transition-colors hover:underline">
                                Cookie Policy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
