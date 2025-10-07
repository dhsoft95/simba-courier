@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative h-[85vh] min-h-[700px] overflow-hidden" style="font-family: Delivery, Verdana, sans-serif;">

        {{-- Enhanced Tracking Form with Better Visibility --}}
        <div class="absolute top-20 left-0 right-0 z-30 px-4 sm:px-6">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-xl shadow-2xl p-5 backdrop-blur-sm bg-white/98 border-2 border-gray-100">
                    <div class="flex items-center gap-2 mb-3">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color: rgb(162, 38, 49);">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-base font-bold">Track Your Shipment</h2>
                    </div>

                    <form class="flex flex-col sm:flex-row gap-2">
                        <div class="flex-1 relative">
                            <input
                                type="text"
                                placeholder="Enter tracking number(s) - separate multiple with commas"
                                class="w-full px-4 py-3 text-sm rounded-lg border-2 border-gray-200 focus:outline-none focus:border-[rgb(162,38,49)] transition-colors"
                            />
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                </svg>
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="px-6 py-3 text-white text-sm font-bold rounded-lg hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200"
                            style="background-color: rgb(162, 38, 49);"
                        >
                            Track Package
                        </button>
                    </form>

                    <div class="mt-3 flex items-center gap-3 text-xs text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Real-time updates
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            SMS notifications
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Delivery proof
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider relative w-full h-full">

            {{-- Slide 1: Express Delivery --}}
            <div class="slide active absolute inset-0" data-slide="0">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/homeSlider.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-transparent"></div>
                </div>

                <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-6 pt-40">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/15 backdrop-blur-md rounded-full text-xs text-white mb-3 border border-white/20">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">19+ Years of Trusted Service</span>
                        </div>

                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-3 leading-tight">
                            Here Today,<br>
                            <span class="bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">There Today</span>
                        </h1>

                        <p class="text-white/95 text-base mb-5 leading-relaxed max-w-xl">
                            Tanzania's premier express courier service delivering speed, reliability, and security. From same-day rush to next-day nationwide coverage.
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <button class="group px-6 py-3 text-sm font-bold rounded-lg transition-all duration-300 hover:shadow-2xl hover:shadow-red-900/50 transform hover:-translate-y-1 flex items-center gap-2" style="background-color: rgb(162, 38, 49); color: white;">
                                Get Instant Quote
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                            <button class="px-6 py-3 border-2 text-white text-sm font-bold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm" style="border-color: white;">
                                Our Services
                            </button>
                        </div>

                        {{-- Quick Stats --}}
                        <div class="mt-6 grid grid-cols-3 gap-4 pt-5 border-t border-white/20">
                            <div>
                                <div class="text-2xl font-bold text-white">99.8%</div>
                                <div class="text-xs text-white/80">On-Time Delivery</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white">24/7</div>
                                <div class="text-xs text-white/80">Customer Support</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white">50K+</div>
                                <div class="text-xs text-white/80">Packages Monthly</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2: Secure Documents --}}
            <div class="slide absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-700" data-slide="1">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/secure-documents.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-transparent"></div>
                </div>

                <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-6 pt-40">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/15 backdrop-blur-md rounded-full text-xs text-white mb-3 border border-white/20">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">Banking & Corporate Trust</span>
                        </div>

                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-3 leading-tight">
                            Secure Document<br>
                            <span class="bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">Handling</span>
                        </h1>

                        <p class="text-white/95 text-base mb-5 leading-relaxed max-w-xl">
                            Trusted by Tanzania's leading banks and corporations for critical, time-sensitive documents. Chain-of-custody tracking, sealed pouches, and signature verification.
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <button class="group px-6 py-3 text-sm font-bold rounded-lg transition-all duration-300 hover:shadow-2xl hover:shadow-red-900/50 transform hover:-translate-y-1 flex items-center gap-2" style="background-color: rgb(162, 38, 49); color: white;">
                                Secure Delivery
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                            <button class="px-6 py-3 border-2 text-white text-sm font-bold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm" style="border-color: white;">
                                Learn More
                            </button>
                        </div>

                        {{-- Security Features --}}
                        <div class="mt-6 grid grid-cols-3 gap-4 pt-5 border-t border-white/20">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs text-white/90 font-medium">Encrypted</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs text-white/90 font-medium">Tracked</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-xs text-white/90 font-medium">Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3: Coverage --}}
            <div class="slide absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-700" data-slide="2">
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('assets/images/multimodal-transport.webp') }}');">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-transparent"></div>
                </div>

                <div class="relative z-10 h-full flex items-center max-w-7xl mx-auto px-6 pt-40">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/15 backdrop-blur-md rounded-full text-xs text-white mb-3 border border-white/20">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                            </svg>
                            <span class="font-semibold">Road, Air & Sea Solutions</span>
                        </div>

                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-3 leading-tight">
                            Complete<br>
                            <span class="bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">Coverage</span>
                        </h1>

                        <p class="text-white/95 text-base mb-5 leading-relaxed max-w-xl">
                            Multimodal transport solutions tailored to your needs. Whether it's express road delivery, air freight, or sea cargo, we've got you covered.
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <button class="group px-6 py-3 text-sm font-bold rounded-lg transition-all duration-300 hover:shadow-2xl hover:shadow-red-900/50 transform hover:-translate-y-1 flex items-center gap-2" style="background-color: rgb(162, 38, 49); color: white;">
                                Get Quote Now
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </button>
                            <button class="px-6 py-3 border-2 text-white text-sm font-bold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300 backdrop-blur-sm" style="border-color: white;">
                                View Options
                            </button>
                        </div>

                        {{-- Transport Modes --}}
                        <div class="mt-6 grid grid-cols-3 gap-4 pt-5 border-t border-white/20">
                            <div class="text-center">
                                <svg class="w-7 h-7 text-white mx-auto mb-1.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3z"/>
                                </svg>
                                <div class="text-xs text-white/90 font-medium">Road Freight</div>
                            </div>
                            <div class="text-center">
                                <svg class="w-7 h-7 text-white mx-auto mb-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                <div class="text-xs text-white/90 font-medium">Air Cargo</div>
                            </div>
                            <div class="text-center">
                                <svg class="w-7 h-7 text-white mx-auto mb-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                                <div class="text-xs text-white/90 font-medium">Sea Freight</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Enhanced Slider Controls --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2.5 bg-black/30 backdrop-blur-md px-3 py-2.5 rounded-full border border-white/20">
            <button class="slide-nav w-8 h-1 rounded-full bg-white transition-all duration-300" data-slide="0" aria-label="Slide 1"></button>
            <button class="slide-nav w-8 h-1 rounded-full bg-white/40 hover:bg-white/60 transition-all duration-300" data-slide="1" aria-label="Slide 2"></button>
            <button class="slide-nav w-8 h-1 rounded-full bg-white/40 hover:bg-white/60 transition-all duration-300" data-slide="2" aria-label="Slide 3"></button>
        </div>

        {{-- Improved Nav Arrows --}}
        <button class="prev-slide absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/10 hover:bg-white/25 backdrop-blur-md p-2.5 rounded-full transition-all duration-300 border border-white/20 group" aria-label="Previous">
            <svg class="w-5 h-5 text-white group-hover:-translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
            </svg>
        </button>

        <button class="next-slide absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/10 hover:bg-white/25 backdrop-blur-md p-2.5 rounded-full transition-all duration-300 border border-white/20 group" aria-label="Next">
            <svg class="w-5 h-5 text-white group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
            </svg>
        </button>

    </section>
    <!-- About Us Section -->
    <section id="about" class="py-16" style="background: linear-gradient(135deg, #0b152c 0%, #1e293b 100%); font-family: Delivery, Verdana, sans-serif;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="relative text-center mb-12">
            <span class="inline-block px-3 py-1.5 text-xs font-semibold text-red-300 tracking-wider uppercase bg-red-900 bg-opacity-30 rounded-full mb-3 border border-red-400 border-opacity-30">
                <i class="fas fa-star mr-1.5"></i>
                About Simba Courier
            </span>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight bg-gradient-to-r from-red-400 to-white bg-clip-text text-transparent mb-4">
                    Here Today, There Today
                </h2>
                <p class="max-w-3xl mx-auto text-base text-white text-opacity-90 leading-relaxed">
                    As a subsidiary of Simba Logistic Equipment Supply Co. Ltd, we're Tanzania's premier moving, relocation, and international courier specialists, making life's transitions seamless across the nation and beyond.
                </p>
                <div class="mt-6 h-1 w-20 bg-gradient-to-r from-red-500 to-white mx-auto rounded-full"></div>
            </div>

            <!-- Main Content with Image -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-12">
                <!-- Image Side -->
                <div class="order-2 lg:order-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-red-900 bg-opacity-20 rounded-2xl transform rotate-3"></div>
                        <img src="{{ asset('assets/images/about-hero01.webp') }}"
                             alt="Simba Courier Moving Team"
                             class="relative w-full h-72 object-cover rounded-2xl shadow-xl">
                        <!-- Stats Overlay -->
                        <div class="absolute -bottom-4 -right-4 bg-white rounded-xl p-3 shadow-xl">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-red-600 mb-0.5">19+</div>
                                <div class="text-xs text-gray-600">Years Strong</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Side -->
                <div class="order-1 lg:order-2 space-y-5">
                    <!-- Our Story -->
                    <div>
                        <h3 class="text-xl font-bold text-white mb-3">Our Story</h3>
                        <p class="text-white text-opacity-80 leading-relaxed mb-3 text-sm">
                            For over 19 years, Simba Courier Services has been helping families and businesses navigate life's biggest transitions. From residential relocations to corporate moves and international shipping, we've made "Here Today, There Today" more than just a slogan—it's our promise.
                        </p>
                        <p class="text-white text-opacity-80 leading-relaxed text-sm">
                            What started as a vision to simplify relocations has grown into Tanzania's most trusted moving and courier service, handling everything from precious family heirlooms to critical business relocations with equal care.
                        </p>
                    </div>

                    <!-- Key Stats Grid -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-3 text-center border border-white border-opacity-10">
                            <div class="text-xl font-bold text-red-400 mb-0.5">5000+</div>
                            <div class="text-xs text-white text-opacity-70">Successful Moves</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-3 text-center border border-white border-opacity-10">
                            <div class="text-xl font-bold text-red-400 mb-0.5">200+</div>
                            <div class="text-xs text-white text-opacity-70">Countries Reached</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-3 text-center border border-white border-opacity-10">
                            <div class="text-xl font-bold text-red-400 mb-0.5">24/7</div>
                            <div class="text-xs text-white text-opacity-70">Service Support</div>
                        </div>
                        <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-3 text-center border border-white border-opacity-10">
                            <div class="text-xl font-bold text-red-400 mb-0.5">100%</div>
                            <div class="text-xs text-white text-opacity-70">Secure Handling</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-12">
                <!-- Mission Card -->
                <div class="relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-600 via-red-700 to-red-800"></div>
                    <div class="absolute inset-0 opacity-10 bg-pattern"></div>

                    <div class="relative p-8 text-white">
                        <div class="flex items-start mb-6">
                            <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mr-5 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-bullseye text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-1.5">Our Mission</h4>
                                <div class="w-10 h-0.5 bg-white/40 rounded-full"></div>
                            </div>
                        </div>

                        <p class="text-red-50 text-base leading-relaxed mb-5">
                            To provide comprehensive moving, relocation, and international courier services that make life's transitions seamless, allowing our clients to focus on their new beginnings while we handle the logistics with precision and care.
                        </p>

                        <div class="flex items-center space-x-3 text-red-100 text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-home mr-1.5"></i>
                                <span>Relocation</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-globe mr-1.5"></i>
                                <span>Global Reach</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-heart mr-1.5"></i>
                                <span>Care</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-800 via-gray-900 to-black"></div>
                    <div class="absolute inset-0 opacity-10 bg-pattern"></div>

                    <div class="relative p-8 text-white">
                        <div class="flex items-start mb-6">
                            <div class="w-14 h-14 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mr-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <i class="fas fa-eye text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold mb-1.5">Our Vision</h4>
                                <div class="w-10 h-0.5 bg-red-500 rounded-full"></div>
                            </div>
                        </div>

                        <p class="text-gray-200 text-base leading-relaxed mb-5">
                            To be East Africa's most trusted partner for relocations and international shipping, known for care, reliability, and global connectivity that transforms how people and businesses make life's important moves.
                        </p>

                        <div class="flex items-center space-x-3 text-gray-300 text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-star mr-1.5 text-red-400"></i>
                                <span>Trust</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-handshake mr-1.5 text-red-400"></i>
                                <span>Partnership</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-expand-arrows-alt mr-1.5 text-red-400"></i>
                                <span>Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="bg-white bg-opacity-5 backdrop-blur-sm rounded-2xl p-8 mb-10 relative overflow-hidden border border-white border-opacity-10">
                <div class="relative z-10">
                    <div class="text-center mb-10">
                        <h3 class="text-3xl font-bold text-white mb-3">Why Choose Simba Courier?</h3>
                        <div class="w-20 h-0.5 bg-gradient-to-r from-red-500 to-white mx-auto mb-4 rounded-full"></div>
                        <p class="text-base text-white text-opacity-80 max-w-3xl mx-auto leading-relaxed">
                            When life's biggest transitions matter most, families and businesses across Tanzania trust Simba Courier Services.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Moving Expertise -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 to-red-700 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-home text-red-400 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-red-400 transition-colors duration-300">19+ Years of Excellence</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    Nearly two decades of trusted experience delivering peace of mind through thousands of successful moves across Tanzania and internationally.
                                </p>
                            </div>
                        </div>

                        <!-- Professional Packing -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-box text-gray-300 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-gray-300 transition-colors duration-300">Your Belongings Matter</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    Professional care using premium materials and proven techniques to protect everything from delicate antiques to sensitive electronics.
                                </p>
                            </div>
                        </div>

                        <!-- Global Network -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 to-red-700 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-globe text-red-400 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-red-400 transition-colors duration-300">Truly Global Reach</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    Connect with over 200 countries worldwide through our comprehensive network, backed by customs expertise and reliable delivery solutions.
                                </p>
                            </div>
                        </div>

                        <!-- Secure Warehousing -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-warehouse text-gray-300 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-gray-300 transition-colors duration-300">Protected Every Step</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    State-of-the-art facilities with climate control and 24/7 security monitoring ensure your items remain safe and secure.
                                </p>
                            </div>
                        </div>

                        <!-- End-to-End Service -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 to-red-700 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-red-900 to-red-800 bg-opacity-30 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-red-400 border-opacity-30">
                                        <i class="fas fa-route text-red-400 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-red-400 transition-colors duration-300">Stress-Free Experience</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    From first contact to final placement, our dedicated project managers handle every detail so you can focus on what matters most.
                                </p>
                            </div>
                        </div>

                        <!-- 24/7 Support -->
                        <div class="group relative bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 shadow-lg border border-white border-opacity-10 hover:bg-opacity-15 hover:-translate-y-1 transition-all duration-500">
                            <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-xl"></div>

                            <div class="text-center">
                                <div class="relative inline-block mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 bg-opacity-40 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-lg border border-gray-400 border-opacity-30">
                                        <i class="fas fa-headset text-gray-300 text-xl"></i>
                                    </div>
                                </div>

                                <h4 class="text-lg font-bold text-white mb-3 group-hover:text-gray-300 transition-colors duration-300">Always Here for You</h4>
                                <p class="text-white text-opacity-70 leading-relaxed text-sm">
                                    Round-the-clock support and emergency assistance mean you're never alone—we're always ready to help whenever you need us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <div id="services" class="max-w-7xl mx-auto bg-white rounded-2xl p-8 mb-10 relative overflow-hidden shadow-xl" style="font-family: Delivery, Verdana, sans-serif;">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 border-2 border-red-400 rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-48 h-48 border-2 border-red-400 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 border-2 border-red-400 rounded-full"></div>
        </div>

        <div class="relative z-10">
            <div class="text-center mb-10">
                <h3 class="text-3xl font-bold text-gray-900 mb-3">Our Services</h3>
                <div class="w-20 h-0.5 bg-gradient-to-r from-red-500 to-red-700 mx-auto mb-4 rounded-full"></div>
                <p class="text-base text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive logistics solutions tailored to meet your every need, from local courier to international freight.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Warehouse Management -->
                <div class="group relative bg-gray-50 rounded-xl p-6 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 to-red-700 rounded-t-xl"></div>

                    <div class="flex items-start space-x-5">
                        <div class="relative flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-red-50 to-red-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-red-200">
                                <i class="fas fa-warehouse text-red-600 text-xl"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-300">Warehouse Management</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-3">
                                Professional inventory management with climate-controlled facilities, real-time tracking systems, and flexible storage solutions.
                            </p>
                            <ul class="space-y-1.5 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    24/7 Security & Monitoring
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    Climate Control Systems
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    Inventory Management Software
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Local & International Courier -->
                <div class="group relative bg-gray-50 rounded-xl p-6 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-xl"></div>

                    <div class="flex items-start space-x-5">
                        <div class="relative flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-gray-300">
                                <i class="fas fa-shipping-fast text-gray-600 text-xl"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-gray-700 transition-colors duration-300">Local & International Courier</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-3">
                                Fast, reliable delivery services across Tanzania and to over 200 countries worldwide. Safe and timely delivery guaranteed.
                            </p>
                            <ul class="space-y-1.5 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    Same-Day Local Delivery
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    Express International Shipping
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    Real-Time Tracking
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Packaging -->
                <div class="group relative bg-gray-50 rounded-xl p-6 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 to-red-700 rounded-t-xl"></div>

                    <div class="flex items-start space-x-5">
                        <div class="relative flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-red-50 to-red-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-red-200">
                                <i class="fas fa-box-open text-red-600 text-xl"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-300">Packaging</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-3">
                                Expert packing services using premium materials and industry-best techniques to protect your valuables during transit and storage.
                            </p>
                            <ul class="space-y-1.5 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    Custom Crating Solutions
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    Fragile Item Specialists
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-red-500 mr-2 text-xs"></i>
                                    Premium Packing Materials
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Movers & Relocation -->
                <div class="group relative bg-gray-50 rounded-xl p-6 shadow-lg border border-gray-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-gray-400 to-gray-600 rounded-t-xl"></div>

                    <div class="flex items-start space-x-5">
                        <div class="relative flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-md border border-gray-300">
                                <i class="fas fa-truck-moving text-gray-600 text-xl"></i>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-gray-700 transition-colors duration-300">Movers & Relocation</h4>
                            <p class="text-gray-600 leading-relaxed text-sm mb-3">
                                Comprehensive moving services for residential and corporate relocations. We handle every detail of your move from planning to execution.
                            </p>
                            <ul class="space-y-1.5 text-gray-700 text-sm">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    Residential Moving
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    Corporate Relocation
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-gray-500 mr-2 text-xs"></i>
                                    International Moving
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-10">
                <a href="#contact" class="inline-flex items-center px-7 py-3.5 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold text-sm rounded-full hover:from-red-600 hover:to-red-800 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    <span>Get a Free Quote</span>
                    <i class="fas fa-arrow-right ml-2.5"></i>
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
    <div id="contact" class="py-20 md:p-16 relative overflow-hidden shadow-2xl" style="background: linear-gradient(135deg, rgb(162, 38, 49) 0%, rgb(142, 28, 39) 100%);">
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
