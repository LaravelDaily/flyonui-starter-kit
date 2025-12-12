<!doctype html>

<html lang="en" data-theme="light" dir="ltr" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&ampdisplay=swap" rel="stylesheet" />

    @vite('resources/css/app.css')

    @stack('styles')
</head>

<body>
    <!-- Layout wrapper -->
    <!-- Content -->
    @yield('content')
    <!-- / Content -->

    @vite('resources/js/app.js')

    <button id="scrollToTopBtn" class="btn btn-circle btn-soft btn-secondary/20 bottom-15 end-15 motion-preset-slide-right motion-duration-800 motion-delay-100 fixed absolute z-[3] hidden" aria-label="Circle Soft Icon Button">
        <span class="icon-[tabler--chevron-up] size-5 shrink-0"></span></button>

    @stack('scripts')
</body>
</html>
