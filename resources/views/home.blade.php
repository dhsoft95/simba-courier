@extends('layouts.app')

@section('content')
 @include('partials.hero-slider')
 <!-- Services Section -->
 <div id="services" class="w-full bg-gradient-to-b from-gray-50 to-white py-16 relative overflow-hidden" style="font-family: Delivery, Verdana, sans-serif;">
     <!-- Background Pattern -->
     <div class="absolute inset-0 opacity-5">
         <div class="absolute top-10 left-10 w-32 h-32 border border-red-400 rounded-full"></div>
         <div class="absolute bottom-10 right-10 w-48 h-48 border border-red-400 rounded-full"></div>
         <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 border border-red-400 rounded-full"></div>
     </div>

     <div class="relative z-10">
         <!-- Header Section -->
         <div class="text-center mb-16" id="trackingHeader">
             <h3 class="text-4xl md:text-6xl font-extrabold mb-6 heading text-[#151f34]">
                 Our <span class="bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent">Services</span>
             </h3>
             <div class="flex items-center justify-center gap-2 mb-6">
                 <div class="w-16 h-0.5 bg-gradient-to-r from-transparent via-red-500 to-red-500 rounded-full"></div>
                 <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                 <div class="w-32 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
                 <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                 <div class="w-16 h-0.5 bg-gradient-to-r from-red-500 via-red-500 to-transparent rounded-full"></div>
             </div>
             <p class="text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed px-4">
                 Comprehensive logistics solutions tailored to meet your every need, from local courier to international freight.
             </p>
         </div>

         <!-- Services Container -->
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="space-y-20">
                 <!-- Service 1: Warehouse Management -->
                 <div class="service-item group">
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                         <div class="relative">
                             <div class="absolute -inset-1 bg-gradient-to-r from-red-400 to-red-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                             <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                                 <img src="{{ asset('assets/images/services/Warehouse.jpg') }}"
                                      alt="Warehouse Management"
                                      class="w-full h-80 lg:h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                                 <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                                 <div class="absolute top-6 right-6">
                                     <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center shadow-lg backdrop-blur-sm">
                                         <i class="fas fa-warehouse text-white text-lg"></i>
                                     </div>
                                 </div>
                                 <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                                     <h4 class="text-2xl font-bold text-white mb-2">Warehouse Management</h4>
                                     <p class="text-white/80 text-sm">Professional storage solutions</p>
                                 </div>
                             </div>
                         </div>

                         <div class="space-y-6">
                             <p class="text-gray-600 leading-relaxed text-base lg:text-lg">
                                 Professional inventory management with climate-controlled facilities, real-time tracking systems, and flexible storage solutions.
                             </p>

                             <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-shield-alt text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">24/7 Security & Monitoring</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-temperature-low text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Climate Control Systems</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-laptop-code text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Inventory Management Software</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-boxes text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Flexible Storage Options</span>
                                 </div>
                             </div>

                             <button onclick="openModal('warehouseModal')" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-semibold text-sm lg:text-base rounded-xl hover:bg-red-700 transition-all duration-300 shadow-lg hover:shadow-xl group">
                                 <span>Learn More</span>
                                 <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Service 2: Local & International Courier -->
                 <div class="service-item group">
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                         <div class="lg:order-2 relative">
                             <div class="absolute -inset-1 bg-gradient-to-r from-gray-300 to-gray-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                             <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                                 <img src="{{ asset('assets/images/services/International.jpg') }}"
                                      alt="Courier Service"
                                      class="w-full h-80 lg:h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                                 <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                                 <div class="absolute top-6 right-6">
                                     <div class="w-12 h-12 bg-gray-700 rounded-xl flex items-center justify-center shadow-lg backdrop-blur-sm">
                                         <i class="fas fa-shipping-fast text-white text-lg"></i>
                                     </div>
                                 </div>
                                 <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                                     <h4 class="text-2xl font-bold text-white mb-2">Local & International Courier</h4>
                                     <p class="text-white/80 text-sm">Fast & reliable delivery</p>
                                 </div>
                             </div>
                         </div>

                         <div class="lg:order-1 space-y-6">
                             <p class="text-gray-600 leading-relaxed text-base lg:text-lg">
                                 Fast, reliable delivery services across Tanzania and to over 200 countries worldwide. Safe and timely delivery guaranteed.
                             </p>

                             <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-clock text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Same-Day Local Delivery</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-plane text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Express International Shipping</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-map-marker-alt text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Real-Time Tracking</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-cog text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Custom Delivery Solutions</span>
                                 </div>
                             </div>

                             <button onclick="openModal('courierModal')" class="inline-flex items-center px-6 py-3 bg-gray-700 text-white font-semibold text-sm lg:text-base rounded-xl hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl group">
                                 <span>Learn More</span>
                                 <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Service 3: Packaging -->
                 <div class="service-item group">
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                         <div class="relative">
                             <div class="absolute -inset-1 bg-gradient-to-r from-red-400 to-red-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                             <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                                 <img src="{{ asset('assets/images/services/Packaging.jpg') }}"
                                      alt="Packaging Service"
                                      class="w-full h-80 lg:h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                                 <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                                 <div class="absolute top-6 right-6">
                                     <div class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center shadow-lg backdrop-blur-sm">
                                         <i class="fas fa-box-open text-white text-lg"></i>
                                     </div>
                                 </div>
                                 <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                                     <h4 class="text-2xl font-bold text-white mb-2">Packaging</h4>
                                     <p class="text-white/80 text-sm">Premium protection solutions</p>
                                 </div>
                             </div>
                         </div>

                         <div class="space-y-6">
                             <p class="text-gray-600 leading-relaxed text-base lg:text-lg">
                                 Expert packing services using premium materials and industry-best techniques to protect your valuables during transit and storage.
                             </p>

                             <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-hammer text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Custom Crating Solutions</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-wine-glass text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Fragile Item Specialists</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-certificate text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Premium Packing Materials</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-red-50 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-paint-brush text-red-500 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Custom Packaging Design</span>
                                 </div>
                             </div>

                             <button onclick="openModal('packagingModal')" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-semibold text-sm lg:text-base rounded-xl hover:bg-red-700 transition-all duration-300 shadow-lg hover:shadow-xl group">
                                 <span>Learn More</span>
                                 <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Service 4: Movers & Relocation -->
                 <div class="service-item group">
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                         <div class="lg:order-2 relative">
                             <div class="absolute -inset-1 bg-gradient-to-r from-gray-300 to-gray-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                             <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                                 <img src="{{ asset('assets/images/services/Relocation.jpg') }}"
                                      alt="Movers and Relocation"
                                      class="w-full h-80 lg:h-96 object-cover transition-transform duration-700 group-hover:scale-105">
                                 <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                                 <div class="absolute top-6 right-6">
                                     <div class="w-12 h-12 bg-gray-700 rounded-xl flex items-center justify-center shadow-lg backdrop-blur-sm">
                                         <i class="fas fa-truck-moving text-white text-lg"></i>
                                     </div>
                                 </div>
                                 <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                                     <h4 class="text-2xl font-bold text-white mb-2">Movers & Relocation</h4>
                                     <p class="text-white/80 text-sm">Seamless moving experience</p>
                                 </div>
                             </div>
                         </div>

                         <div class="lg:order-1 space-y-6">
                             <p class="text-gray-600 leading-relaxed text-base lg:text-lg">
                                 Comprehensive moving services for residential and corporate relocations. We handle every detail of your move from planning to execution.
                             </p>

                             <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-home text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Residential Moving</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-building text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Corporate Relocation</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-globe text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">International Moving</span>
                                 </div>
                                 <div class="flex items-start space-x-3 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all duration-300">
                                     <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center">
                                         <i class="fas fa-warehouse text-gray-600 text-sm"></i>
                                     </div>
                                     <span class="text-gray-700 text-sm lg:text-base">Storage & Setup Services</span>
                                 </div>
                             </div>

                             <button onclick="openModal('relocationModal')" class="inline-flex items-center px-6 py-3 bg-gray-700 text-white font-semibold text-sm lg:text-base rounded-xl hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl group">
                                 <span>Learn More</span>
                                 <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- CTA Button -->
             <div class="text-center mt-20 pt-12 border-t border-gray-200">
                 <a href="#contact" class="inline-flex items-center px-10 py-5 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold text-base rounded-2xl hover:from-red-600 hover:to-red-800 transition-all duration-300 shadow-2xl hover:shadow-red-500/50 hover:scale-105">
                     <span>Get a Free Quote Today</span>
                     <i class="fas fa-arrow-right ml-3"></i>
                 </a>
             </div>
         </div>
     </div>
 </div>

 <!-- Modals -->
 <!-- Warehouse Modal -->
 <div id="warehouseModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
     <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all">
         <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white p-6 rounded-t-2xl">
             <div class="flex items-center justify-between">
                 <div class="flex items-center space-x-3">
                     <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                         <i class="fas fa-warehouse text-2xl"></i>
                     </div>
                     <h3 class="text-2xl font-bold">Warehouse Management</h3>
                 </div>
                 <button onclick="closeModal('warehouseModal')" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all">
                     <i class="fas fa-times text-xl"></i>
                 </button>
             </div>
         </div>
         <div class="p-8">
             <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                 Our state-of-the-art warehouse facilities provide comprehensive storage solutions for businesses of all sizes. With advanced inventory management systems and round-the-clock security, your goods are in safe hands.
             </p>

             <h4 class="text-xl font-bold text-gray-900 mb-4">Key Features</h4>
             <div class="space-y-4 mb-6">
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">24/7 Security & Monitoring</h5>
                         <p class="text-gray-600 text-sm">Advanced surveillance systems and on-site security personnel ensure your inventory is protected at all times.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Climate Control Systems</h5>
                         <p class="text-gray-600 text-sm">Temperature and humidity-controlled environments for sensitive items and specialized storage needs.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Real-Time Inventory Tracking</h5>
                         <p class="text-gray-600 text-sm">Cloud-based management system allowing you to monitor your stock levels anytime, anywhere.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Flexible Storage Options</h5>
                         <p class="text-gray-600 text-sm">From short-term to long-term storage, we offer customizable solutions to meet your specific requirements.</p>
                     </div>
                 </div>
             </div>

             <div class="bg-red-50 rounded-xl p-6 mb-6">
                 <h4 class="text-lg font-bold text-gray-900 mb-2">Why Choose Our Warehouse?</h4>
                 <p class="text-gray-600 text-sm">
                     With over 50,000 sq ft of storage space, modern loading facilities, and a strategic location, we provide efficient logistics solutions that help your business grow.
                 </p>
             </div>

             <div class="flex gap-4">
                 <button onclick="closeModal('warehouseModal')" class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all">
                     Close
                 </button>
                 <a href="#contact" onclick="closeModal('warehouseModal')" class="flex-1 px-6 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-xl hover:from-red-600 hover:to-red-800 transition-all text-center">
                     Get a Quote
                 </a>
             </div>
         </div>
     </div>
 </div>

 <!-- Courier Modal -->
 <div id="courierModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
     <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all">
         <div class="sticky top-0 bg-gradient-to-r from-gray-700 to-gray-800 text-white p-6 rounded-t-2xl">
             <div class="flex items-center justify-between">
                 <div class="flex items-center space-x-3">
                     <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                         <i class="fas fa-shipping-fast text-2xl"></i>
                     </div>
                     <h3 class="text-2xl font-bold">Local & International Courier</h3>
                 </div>
                 <button onclick="closeModal('courierModal')" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all">
                     <i class="fas fa-times text-xl"></i>
                 </button>
             </div>
         </div>
         <div class="p-8">
             <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                 Reliable courier services connecting Tanzania to the world. Whether you need same-day local delivery or express international shipping, we've got you covered with our extensive network.
             </p>

             <h4 class="text-xl font-bold text-gray-900 mb-4">Service Highlights</h4>
             <div class="space-y-4 mb-6">
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Same-Day Local Delivery</h5>
                         <p class="text-gray-600 text-sm">Express delivery within Tanzania's major cities. Order before noon for same-day delivery.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Express International Shipping</h5>
                         <p class="text-gray-600 text-sm">Fast, reliable shipping to over 200 countries worldwide with competitive rates and customs clearance support.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Real-Time Tracking</h5>
                         <p class="text-gray-600 text-sm">Track your shipment every step of the way with our advanced GPS tracking system and notifications.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Custom Delivery Solutions</h5>
                         <p class="text-gray-600 text-sm">Specialized handling for fragile, high-value, or time-sensitive shipments with tailored delivery options.</p>
                     </div>
                 </div>
             </div>

             <div class="bg-gray-50 rounded-xl p-6 mb-6">
                 <h4 class="text-lg font-bold text-gray-900 mb-2">Global Network</h4>
                 <p class="text-gray-600 text-sm">
                     Partnered with leading international carriers, we ensure your packages reach their destination safely and on time, every time.
                 </p>
             </div>

             <div class="flex gap-4">
                 <button onclick="closeModal('courierModal')" class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all">
                     Close
                 </button>
                 <a href="#contact" onclick="closeModal('courierModal')" class="flex-1 px-6 py-3 bg-gradient-to-r from-gray-700 to-gray-800 text-white font-semibold rounded-xl hover:from-gray-800 hover:to-gray-900 transition-all text-center">
                     Get a Quote
                 </a>
             </div>
         </div>
     </div>
 </div>

 <!-- Packaging Modal -->
 <div id="packagingModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
     <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all">
         <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white p-6 rounded-t-2xl">
             <div class="flex items-center justify-between">
                 <div class="flex items-center space-x-3">
                     <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                         <i class="fas fa-box-open text-2xl"></i>
                     </div>
                     <h3 class="text-2xl font-bold">Packaging Services</h3>
                 </div>
                 <button onclick="closeModal('packagingModal')" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all">
                     <i class="fas fa-times text-xl"></i>
                 </button>
             </div>
         </div>
         <div class="p-8">
             <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                 Professional packaging services using premium materials and industry-best techniques. We ensure your items are protected during transit and storage with custom solutions for every need.
             </p>

             <h4 class="text-xl font-bold text-gray-900 mb-4">Packaging Solutions</h4>
             <div class="space-y-4 mb-6">
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Custom Crating Solutions</h5>
                         <p class="text-gray-600 text-sm">Specially designed wooden crates for oversized, heavy, or irregularly shaped items requiring extra protection.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Fragile Item Specialists</h5>
                         <p class="text-gray-600 text-sm">Expert handling of delicate items like glassware, electronics, artwork, and antiques with specialized padding techniques.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Premium Packing Materials</h5>
                         <p class="text-gray-600 text-sm">High-quality bubble wrap, foam inserts, corrugated boxes, and eco-friendly packaging options available.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-red-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Custom Packaging Design</h5>
                         <p class="text-gray-600 text-sm">Branded packaging solutions for businesses looking to create memorable unboxing experiences for their customers.</p>
                     </div>
                 </div>
             </div>

             <div class="bg-red-50 rounded-xl p-6 mb-6">
                 <h4 class="text-lg font-bold text-gray-900 mb-2">Professional Expertise</h4>
                 <p class="text-gray-600 text-sm">
                     Our trained packaging specialists use proven methods to ensure maximum protection, reducing the risk of damage during transportation or storage.
                 </p>
             </div>

             <div class="flex gap-4">
                 <button onclick="closeModal('packagingModal')" class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all">
                     Close
                 </button>
                 <a href="#contact" onclick="closeModal('packagingModal')" class="flex-1 px-6 py-3 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-xl hover:from-red-600 hover:to-red-800 transition-all text-center">
                     Get a Quote
                 </a>
             </div>
         </div>
     </div>
 </div>

 <!-- Relocation Modal -->
 <div id="relocationModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
     <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all">
         <div class="sticky top-0 bg-gradient-to-r from-gray-700 to-gray-800 text-white p-6 rounded-t-2xl">
             <div class="flex items-center justify-between">
                 <div class="flex items-center space-x-3">
                     <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                         <i class="fas fa-truck-moving text-2xl"></i>
                     </div>
                     <h3 class="text-2xl font-bold">Movers & Relocation</h3>
                 </div>
                 <button onclick="closeModal('relocationModal')" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-lg flex items-center justify-center transition-all">
                     <i class="fas fa-times text-xl"></i>
                 </button>
             </div>
         </div>
         <div class="p-8">
             <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                 Comprehensive moving and relocation services for homes and businesses. From planning to execution, we handle every detail to make your move stress-free and seamless.
             </p>

             <h4 class="text-xl font-bold text-gray-900 mb-4">Moving Services</h4>
             <div class="space-y-4 mb-6">
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Residential Moving</h5>
                         <p class="text-gray-600 text-sm">Complete household moving services including packing, loading, transportation, and unpacking at your new home.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Corporate Relocation</h5>
                         <p class="text-gray-600 text-sm">Minimize downtime with our efficient office relocation services, including IT equipment handling and furniture installation.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">International Moving</h5>
                         <p class="text-gray-600 text-sm">Cross-border relocation services with customs documentation, shipping coordination, and destination delivery.</p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-3">
                     <i class="fas fa-check-circle text-gray-500 mt-1"></i>
                     <div>
                         <h5 class="font-semibold text-gray-900">Storage & Setup Services</h5>
                         <p class="text-gray-600 text-sm">Temporary storage options and complete furniture assembly and setup at your new location.</p>
                     </div>
                 </div>
             </div>

             <div class="bg-gray-50 rounded-xl p-6 mb-6">
                 <h4 class="text-lg font-bold text-gray-900 mb-2">Stress-Free Moving</h4>
                 <p class="text-gray-600 text-sm">
                     Our experienced team uses modern equipment and proven techniques to ensure your belongings arrive safely. We handle everything so you can focus on settling into your new space.
                 </p>
             </div>

             <div class="flex gap-4">
                 <button onclick="closeModal('relocationModal')" class="flex-1 px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all">
                     Close
                 </button>
                 <a href="#contact" onclick="closeModal('relocationModal')" class="flex-1 px-6 py-3 bg-gradient-to-r from-gray-700 to-gray-800 text-white font-semibold rounded-xl hover:from-gray-800 hover:to-gray-900 transition-all text-center">
                     Get a Quote
                 </a>
             </div>
         </div>
     </div>
 </div>

 {{-- Why Choose Us Section --}}
 <section id="why-choose-us" class="relative py-20 overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
     {{-- Animated Background Elements --}}
     <div class="absolute inset-0 overflow-hidden">
         <div class="absolute top-20 left-10 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
         <div class="absolute bottom-20 right-10 w-96 h-96 bg-red-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
     </div>

     {{-- Subtle Background Pattern --}}
     <div class="absolute inset-0 opacity-5">
         <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
     </div>

     <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         {{-- Section Header --}}
         <div class="text-center mb-12">
             <div class="inline-flex items-center gap-2 bg-red-500/10 backdrop-blur-sm px-4 py-2 rounded-full border border-red-500/20 mb-4">
                 <span class="w-2 h-2 bg-red-500 rounded-full animate-ping"></span>
                 <span class="text-red-500 font-semibold tracking-wider uppercase text-sm">Our Promise</span>
             </div>
             <h2 class="text-4xl md:text-5xl font-bold text-white mt-3 mb-4">
                 Why Choose <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-700">Simba Courier</span>?
             </h2>
             <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                 Trusted by thousands across Tanzania for reliable, professional moving solutions.
             </p>
         </div>

         {{-- Main Content --}}
         <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
             {{-- Left Side - Features (4 columns) --}}
             <div class="lg:col-span-4 space-y-6">
                 {{-- Feature 1 --}}
                 <div class="group relative">
                     <div class="absolute right-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 flex-row-reverse p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-trophy text-white text-lg"></i>
                             </div>
                         </div>
                         <div class="text-right">
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 19+ Years of Excellence
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 Nearly two decades of trusted experience delivering peace of mind through thousands of successful moves.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <span>Learn more</span>
                                 <i class="fas fa-arrow-left text-xs"></i>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- Feature 2 --}}
                 <div class="group relative">
                     <div class="absolute right-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 flex-row-reverse p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-box-open text-white text-lg"></i>
                             </div>
                         </div>
                         <div class="text-right">
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 Your Belongings Matter
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 Professional care using premium materials and proven techniques to protect everything you value.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <span>Learn more</span>
                                 <i class="fas fa-arrow-left text-xs"></i>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- Feature 3 --}}
                 <div class="group relative">
                     <div class="absolute right-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 flex-row-reverse p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-globe-africa text-white text-lg"></i>
                             </div>
                         </div>
                         <div class="text-right">
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 Truly Global Reach
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 Connect with over 200 countries worldwide through our comprehensive network and customs expertise.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <span>Learn more</span>
                                 <i class="fas fa-arrow-left text-xs"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             {{-- Middle - Image (4 columns) --}}
             <div class="lg:col-span-4">
                 <div class="relative">
                     {{-- Connecting Lines --}}
                     <div class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 -translate-x-full w-8">
                         <div class="h-px bg-gradient-to-r from-transparent via-red-500/50 to-red-500"></div>
                     </div>
                     <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-full w-8">
                         <div class="h-px bg-gradient-to-l from-transparent via-red-500/50 to-red-500"></div>
                     </div>

                     {{-- Image Container --}}
                     <div class="relative overflow-hidden rounded-2xl shadow-2xl group">
                         <img src="{{ asset('assets/images/why-choose/funny-3d-illustration-american-referee.jpg') }}"
                              alt="Simba Courier Services"
                              class="w-full h-[520px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                         <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>

                         {{-- Corner Accents --}}
                         <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-red-500 rounded-tl-2xl"></div>
                         <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-red-500 rounded-br-2xl"></div>

                         {{-- Floating Stats --}}
                         <div class="absolute bottom-6 left-6 right-6">
                             <div class="grid grid-cols-2 gap-3">
                                 <div class="group/stat bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 text-center hover:bg-white/20 hover:border-red-500/50 transition-all duration-300">
                                     <div class="text-3xl font-bold text-white mb-1 group-hover/stat:text-red-400 transition-colors">19+</div>
                                     <div class="text-xs text-gray-300">Years Experience</div>
                                 </div>
                                 <div class="group/stat bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 text-center hover:bg-white/20 hover:border-red-500/50 transition-all duration-300">
                                     <div class="text-3xl font-bold text-white mb-1 group-hover/stat:text-red-400 transition-colors">5000+</div>
                                     <div class="text-xs text-gray-300">Happy Clients</div>
                                 </div>
                             </div>
                         </div>

                         {{-- Trust Badge --}}
                         <div class="absolute top-6 left-6">
                             <div class="flex items-center gap-2 bg-red-500 px-4 py-2 rounded-full shadow-lg">
                                 <i class="fas fa-shield-alt text-white text-sm"></i>
                                 <span class="text-white text-xs font-bold">Trusted Partner</span>
                             </div>
                         </div>
                     </div>

                     {{-- Decorative Elements --}}
                     <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-br from-red-500/30 to-transparent rounded-2xl -z-10 blur-xl"></div>
                     <div class="absolute -top-6 -left-6 w-32 h-32 bg-gradient-to-tr from-red-500/20 to-transparent rounded-2xl -z-10 blur-xl"></div>
                 </div>
             </div>

             {{-- Right Side - Features (4 columns) --}}
             <div class="lg:col-span-4 space-y-6">
                 {{-- Feature 4 --}}
                 <div class="group relative">
                     <div class="absolute left-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-warehouse text-white text-lg"></i>
                             </div>
                         </div>
                         <div>
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 Protected Every Step
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 State-of-the-art facilities with climate control and 24/7 security monitoring for your peace of mind.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <i class="fas fa-arrow-right text-xs"></i>
                                 <span>Learn more</span>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- Feature 5 --}}
                 <div class="group relative">
                     <div class="absolute left-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-route text-white text-lg"></i>
                             </div>
                         </div>
                         <div>
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 Stress-Free Experience
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 Our dedicated project managers handle every detail so you can focus on what matters most.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <i class="fas fa-arrow-right text-xs"></i>
                                 <span>Learn more</span>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- Feature 6 --}}
                 <div class="group relative">
                     <div class="absolute left-0 top-0 w-32 h-32 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-all duration-500"></div>
                     <div class="relative flex items-start gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                         <div class="flex-shrink-0">
                             <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg shadow-red-500/20">
                                 <i class="fas fa-headset text-white text-lg"></i>
                             </div>
                         </div>
                         <div>
                             <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition-colors duration-300">
                                 Always Here for You
                             </h3>
                             <p class="text-gray-400 text-sm leading-relaxed">
                                 Round-the-clock support and emergency assistance—we're always ready to help whenever you need us.
                             </p>
                             <div class="mt-3 inline-flex items-center gap-2 text-red-400 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                 <i class="fas fa-arrow-right text-xs"></i>
                                 <span>Learn more</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- clients Section -->
 <div class="w-full py-12 relative overflow-hidden bg-white">
     <!-- Background Pattern -->
     <div class="absolute inset-0 opacity-5">
         <div class="absolute top-10 left-10 w-32 h-32 border border-gray-300 rounded-full"></div>
         <div class="absolute bottom-10 right-10 w-48 h-48 border border-gray-300 rounded-full"></div>
         <div class="absolute top-1/2 right-1/4 w-24 h-24 border border-gray-300 rounded-full"></div>
         <div class="absolute top-1/3 right-20 w-16 h-16 bg-gray-200 rounded-lg transform rotate-45"></div>
         <div class="absolute bottom-1/3 left-20 w-20 h-20 bg-gray-200 rounded-lg transform rotate-12"></div>
         <div class="absolute top-3/4 right-1/3 w-12 h-12 border border-gray-300 transform rotate-45"></div>
         <div class="absolute top-1/4 left-1/3 w-14 h-14 border border-gray-300 transform -rotate-12"></div>
     </div>

     <div class="relative z-10">
         <!-- Header -->
         <div class="text-center mb-10 px-4 sm:px-6 lg:px-8">
             <p class="text-sm font-semibold text-red-600 uppercase tracking-wider mb-2">Trusted Partners</p>
             <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">
                 Powering Tanzania's <span class="text-red-600">Leading Brands</span>
             </h2>
         </div>

         <!-- Full Width Logos Slider -->
         <div class="relative w-full">
             <!-- Fade Edges -->
             <div class="absolute left-0 top-0 bottom-0 w-24 sm:w-32 z-10 pointer-events-none bg-gradient-to-r from-white via-white to-transparent"></div>
             <div class="absolute right-0 top-0 bottom-0 w-24 sm:w-32 z-10 pointer-events-none bg-gradient-to-l from-white via-white to-transparent"></div>

             <!-- Logos Container -->
             <div class="overflow-hidden py-6">
                 <div class="flex gap-16 animate-slide items-center">
                     @php
                         $clients = [
                             'tz-crdb-logo.png',
                             'tz-nmb-logo.png',
                             'Vodacom-1.png',
                             'Airtel_Tanzania-Logo.wine.png',
                             'Yas_Tanzania.svg.png',
                         ];
                     @endphp

                     @foreach($clients as $logo)
                         <div class="flex-shrink-0 w-48 h-28 flex items-center justify-center bg-gray-50 rounded-lg px-6 border border-gray-100 hover:bg-white hover:shadow-lg hover:border-gray-200 transition-all duration-300 group">
                             <img src="{{ asset('assets/images/clients/' . $logo) }}"
                                  alt="Client Logo"
                                  class="max-w-full max-h-16 object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                         </div>
                     @endforeach

                     <!-- Duplicate for loop -->
                     @foreach($clients as $logo)
                         <div class="flex-shrink-0 w-48 h-28 flex items-center justify-center bg-gray-50 rounded-lg px-6 border border-gray-100 hover:bg-white hover:shadow-lg hover:border-gray-200 transition-all duration-300 group">
                             <img src="{{ asset('assets/images/clients/' . $logo) }}"
                                  alt="Client Logo"
                                  class="max-w-full max-h-16 object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
 <style>
     @keyframes slide {
         from { transform: translateX(0); }
         to { transform: translateX(-50%); }
     }

     .animate-slide {
         animation: slide 30s linear infinite;
         will-change: transform;
     }

     .animate-slide:hover {
         animation-play-state: paused;
     }
 </style>

    <!-- Tracking Section -->
 <div id="tracking" class="py-20" style="background: linear-gradient(135deg, #0b152c 0%, #1e293b 100%);">

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
 <div id="contact" class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
     <!-- Background Decoration -->
     <div class="absolute top-0 right-0 w-96 h-96 bg-red-50 rounded-full blur-3xl opacity-30 -z-10"></div>
     <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-30 -z-10"></div>
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

         <!-- Section Header -->
         <div class="text-center mb-16" id="Header">
             <h3 class="text-4xl md:text-6xl font-extrabold mb-6 heading text-[#151f34] ">
                 Get In  <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Touch</span>
             </h3>
             <div class="flex items-center justify-center gap-2 mb-6">
                 <div class="w-16 h-1 bg-gradient-to-r from-transparent via-red-500 to-transparent rounded-full"></div>
                 <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                 <div class="w-32 h-1.5 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
                 <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                 <div class="w-16 h-1 bg-gradient-to-r from-red-600 via-red-500 to-transparent rounded-full"></div>
             </div>
{{--             <h2 class="text-5xl font-bold text-gray-900 mb-4">Let's Start a Conversation</h2>--}}
             <p class="text-lg text-black text-opacity-90 max-w-2xl mx-auto leading-relaxed">
                 Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
             </p>
         </div>


         <!-- Main Grid -->
         <div class="grid lg:grid-cols-2 gap-8 mb-16">

             <!-- Left: Image -->
             <div class="relative h-full">
                 <img
                     src="{{ asset('assets/images/customer-care.jpg') }}"
                     alt="Customer Support"
                     class="w-full h-[700px] object-cover rounded-2xl shadow-2xl"
                 >
                 <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent rounded-2xl"></div>

                 <!-- Contact Info Overlay -->
                 <div class="absolute bottom-0 left-0 right-0 p-8 text-white space-y-4">
                     <h3 class="text-3xl font-bold mb-6">Get in Touch</h3>

                     <div class="space-y-4">
                         <div class="flex items-start space-x-3">
                             <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                             </svg>
                             <div>
                                 <p class="text-sm text-gray-300">Email</p>
                                 <a href="mailto:info@simbacourier.co.tz" class="font-medium hover:text-red-400 transition-colors">
                                     info@simbacourier.co.tz
                                 </a>
                             </div>
                         </div>

                         <div class="flex items-start space-x-3">
                             <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                             </svg>
                             <div>
                                 <p class="text-sm text-gray-300">Phone</p>
                                 <a href="tel:+255123456789" class="font-medium hover:text-red-400 transition-colors">
                                     +255 123 456 789
                                 </a>
                                 <p class="text-sm text-gray-400 mt-1">P.O.Box 40451</p>
                             </div>
                         </div>

                         <div class="flex items-start space-x-3">
                             <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                             </svg>
                             <div>
                                 <p class="text-sm text-gray-300">Address</p>
                                 <p class="font-medium">
                                     Plot 71 Siwa Road<br>
                                     Mikocheni Industrial Area<br>
                                     Dar es Salaam, Tanzania
                                 </p>
                             </div>
                         </div>
                     </div>

                     <div class="pt-4 border-t border-white/20 mt-6">
                         <div class="flex items-center space-x-2">
                             <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                             <span class="text-sm font-medium">24/7 Customer Support Available</span>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Right: Form -->
             <div>
                 <div class="bg-white rounded-2xl p-10 shadow-xl border border-gray-100">
                     <h3 class="text-3xl font-bold text-gray-900 mb-2">Send us a Message</h3>
                     <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>

                     <form action="" method="POST" class="space-y-6">
                         @csrf

                         <div class="grid md:grid-cols-2 gap-6">
                             <div>
                                 <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                     Full Name *
                                 </label>
                                 <input
                                     type="text"
                                     id="name"
                                     name="name"
                                     placeholder="John Doe"
                                     class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none transition-all"
                                     required
                                 >
                             </div>

                             <div>
                                 <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                     Email Address *
                                 </label>
                                 <input
                                     type="email"
                                     id="email"
                                     name="email"
                                     placeholder="john@example.com"
                                     class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none transition-all"
                                     required
                                 >
                             </div>
                         </div>

                         <div class="grid md:grid-cols-2 gap-6">
                             <div>
                                 <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                     Phone Number *
                                 </label>
                                 <input
                                     type="tel"
                                     id="phone"
                                     name="phone"
                                     placeholder="+255 123 456 789"
                                     class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none transition-all"
                                     required
                                 >
                             </div>

                             <div>
                                 <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                     Subject *
                                 </label>
                                 <input
                                     type="text"
                                     id="subject"
                                     name="subject"
                                     placeholder="How can we help?"
                                     class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none transition-all"
                                     required
                                 >
                             </div>
                         </div>

                         <div>
                             <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                 Your Message *
                             </label>
                             <textarea
                                 id="message"
                                 name="message"
                                 rows="5"
                                 placeholder="Tell us more about your inquiry..."
                                 class="w-full px-4 py-3.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent outline-none resize-none transition-all"
                                 required
                             ></textarea>
                         </div>

                         <button
                             type="submit"
                             class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl"
                         >
                            <span class="flex items-center justify-center space-x-2">
                                <span>Send Message</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                         </button>
                     </form>
                 </div>
             </div>

         </div>

         <!-- Map Section -->
         <div class="mt-8">
             <div class="w-full h-[450px] rounded-2xl overflow-hidden shadow-2xl border-8 border-white">
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.693!2d39.235!3d-6.795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDcnNDIuMCJTIDM5wrAxNCcwNi4wIkU!5e0!3m2!1sen!2stz!4v1234567890"
                     width="100%"
                     height="100%"
                     style="border:0;"
                     allowfullscreen=""
                     loading="lazy"
                     referrerpolicy="no-referrer-when-downgrade"
                 ></iframe>
             </div>
         </div>

     </div>
 </div>
 <!-- footer Section -->
 <div class="w-full h-px" style="background-color: rgb(162, 38, 49);"></div>
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
                            <img src="{{ asset('assets/logo.png') }}" alt="Simba Courier" class="h-24 ">
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
