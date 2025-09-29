<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Simba Courier - Fast & Reliable Courier Service in Tanzania' }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Simba Courier offers professional courier and logistics services in Tanzania. Same-day delivery, international shipping, warehouse management, and secure document handling across Dar es Salaam and nationwide.">
    <meta name="keywords" content="courier service Tanzania, delivery service Dar es Salaam, express delivery Tanzania, international shipping Tanzania, warehouse management, package tracking, same-day delivery, logistics Tanzania, freight forwarding, Simba Courier, moving services Tanzania, relocation services, document courier, secure delivery, cargo services, air freight Tanzania, sea freight, road transport Tanzania">
    <meta name="author" content="Simba Courier Services">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="geo.region" content="TZ-02">
    <meta name="geo.placename" content="Dar es Salaam, Tanzania">
    <meta name="geo.position" content="-6.792354;39.208328">
    <meta name="ICBM" content="-6.792354, 39.208328">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Simba Courier - Fast & Reliable Courier Service in Tanzania">
    <meta property="og:description" content="Professional courier and logistics services in Tanzania. Same-day delivery, international shipping, and secure document handling.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:locale" content="en_TZ">
    <meta property="og:site_name" content="Simba Courier">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Simba Courier - Fast & Reliable Courier Service in Tanzania">
    <meta property="twitter:description" content="Professional courier and logistics services in Tanzania. Same-day delivery, international shipping, and secure document handling.">
    <meta property="twitter:image" content="{{ asset('assets/images/twitter-image.jpg') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Additional SEO -->
    <meta name="theme-color" content="#a22631">
    <link rel="shortlink" href="{{ url('/') }}">

    <!-- Fonts - Professional Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#f8d7dd',
                            500: '#a22631',
                            600: '#8b1f29',
                            700: '#741a21',
                            800: '#5d1419',
                            900: '#460f12'
                        },
                        neutral: {
                            50: '#f4f4f4',
                            100: '#e8e8e8',
                            200: '#d1d1d1',
                            300: '#bababa',
                            400: '#a3a3a3',
                            500: '#8c8c8c',
                            600: '#757575',
                            700: '#5e5e5e',
                            800: '#474747',
                            900: '#303030'
                        }
                    },
                    fontFamily: {
                        'heading': ['Poppins', 'sans-serif'],
                        'body': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5, h6, .heading {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 600;
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        /* Custom components for Simba Courier */
        .btn-primary {
            @apply bg-primary-500 hover:bg-primary-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .btn-secondary {
            @apply border-2 border-primary-500 text-primary-600 hover:bg-primary-500 hover:text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .section-padding {
            @apply py-16 px-4;
        }

        @media (min-width: 640px) {
            .section-padding {
                @apply px-6;
            }
        }

        @media (min-width: 1024px) {
            .section-padding {
                @apply px-8;
            }
        }

        /* Typography improvements */
        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            letter-spacing: -0.025em;
            line-height: 1.1;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .nav-link {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .animate-slide {
            animation: slide 30s linear infinite;
        }

        .animate-slide:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-neutral-50 text-gray-900 antialiased">
@include('partials.navigation')

<!-- Main Content -->
<main class="pt-16">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
