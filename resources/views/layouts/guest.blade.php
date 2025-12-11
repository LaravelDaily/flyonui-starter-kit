<!doctype html>

<html lang="en" data-theme="light" data-assets-path="{{ asset('flyonui-dashboard-free/assets/') }}" data-layout-path="dashboard-free/" dir="ltr" class="scroll-smooth">
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

    <!-- Theme JS -->
    <script type="text/javascript">
      (function () {
        try {
          const root = document.documentElement;
          const layoutPath = root.getAttribute('data-layout-path')?.replace('/', '') || 'dashboard-default';
          const localStorageKey = `${layoutPath}-theme`;

          // Theme configuration loaded from page-config.json at build time
          window.THEME_CONFIG = { 'dashboard-free': { default: 'light', light: 'light', dark: 'dark', system: { light: 'light', dark: 'dark' } } };

          // Get current system theme preference
          const getSystemPreference = () => window.matchMedia('(prefers-color-scheme: dark)').matches;

          // Resolve theme based on user selection and layout configuration
          const resolveTheme = (selectedTheme, layoutPath) => {
            const layoutConfig = window.THEME_CONFIG[layoutPath];
            if (!layoutConfig) return selectedTheme === 'system' ? (getSystemPreference() ? 'dark' : 'light') : selectedTheme;

            if (selectedTheme === 'system') {
              const systemConfig = layoutConfig.system;
              const prefersDark = getSystemPreference();
              return prefersDark ? systemConfig.dark : systemConfig.light;
            }

            return layoutConfig[selectedTheme] || selectedTheme || layoutConfig.default || 'light';
          };

          const savedTheme = localStorage.getItem(localStorageKey) || 'system';
          const resolvedTheme = resolveTheme(savedTheme, layoutPath);

          root.setAttribute('data-theme', resolvedTheme);
        } catch (e) {
          console.warn('Early theme script error:', e);
        }
      })();
    </script>

    @stack('styles')
  </head>

  <body>
    <!-- Layout wrapper -->
    <!-- Content -->
    @yield('content')
    <!-- / Content -->

    @vite('resources/js/app.js')

    <button id="scrollToTopBtn" class="btn btn-circle btn-soft btn-secondary/20 bottom-15 end-15 motion-preset-slide-right motion-duration-800 motion-delay-100 fixed absolute z-[3] hidden" aria-label="Circle Soft Icon Button"><span class="icon-[tabler--chevron-up] size-5 shrink-0"></span></button>

    @stack('scripts')
  </body>
</html>
