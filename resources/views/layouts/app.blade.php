<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('components.side-nav-app')

    <!-- Page Heading -->
    @isset($header)
      <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endisset

    <!-- Page Content -->
    <main class="p-4 md:ml-48 h-auto pt-20">
      {{ $slot }}
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <script>
    const html = document.documentElement;
    const toggleBtn = document.getElementById('toggle-theme');
    const themeName = document.getElementById('theme-name');
    const themeIcon = document.getElementById('theme-icon');
    const toggleBtnsm = document.getElementById('toggle-themesm');
    const themeNamesm = document.getElementById('theme-namesm');
    const themeIconsm = document.getElementById('theme-iconsm');

    // Fungsi set ikon sesuai tema
    function updateIcon() {
      if (html.classList.contains('dark')) {
        themeIcon.src = 'https://img.icons8.com/emoji/48/sun-emoji.png';
        themeIcon.alt = 'Sun';
        themeName.textContent = 'Siang';
        themeIconsm.src = 'https://img.icons8.com/emoji/48/sun-emoji.png';
        themeIconsm.alt = 'Sun';
        themeNamesm.textContent = 'Siang';

      } else {
        themeIcon.src = 'https://img.icons8.com/emoji/48/new-moon-emoji.png';
        themeIcon.alt = 'Moon';
        themeName.textContent = 'Malam';
        themeIconsm.src = 'https://img.icons8.com/emoji/48/new-moon-emoji.png';
        themeIconsm.alt = 'Moon';
        themeNamesm.textContent = 'Malam';
      }
    }

    // Set awal dari localStorage
    if (localStorage.getItem('theme') === 'dark') {
      html.classList.add('dark');
    }

    updateIcon();

    toggleBtn.addEventListener('click', () => {
      html.classList.toggle('dark');
      const theme = html.classList.contains('dark') ? 'dark' : 'light';
      localStorage.setItem('theme', theme);
      updateIcon();
    });
    toggleBtnsm.addEventListener('click', () => {
      html.classList.toggle('dark');
      const theme = html.classList.contains('dark') ? 'dark' : 'light';
      localStorage.setItem('theme', theme);
      updateIcon();
    });
  </script>
</body>

</html>
