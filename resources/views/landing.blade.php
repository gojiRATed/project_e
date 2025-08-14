<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-100">
  @include('components.landing-header')

  <main>
    {{-- Banner Section --}}
    <section id="banner" class="flex py-32 px-16">
      <div>
        <h1 class="text-5xl font-bold text-gray-900">Ekosistem Digital</h1>
        <h2 class="text-3xl font-bold text-yellow-600 mb-2">SMK NEGERI 2 MOJOKERTO</h2>
        <p class="text-xl mb-6 text-gray-800">Semua layanan sekolah, dalam satu genggaman</p>
        <p class="text-base text-gray-600">Hubungkan siswa - siswi, tata usaha, koperasi, dan kantin</p>
        <p class="text-base mb-10 text-gray-600">Dengan sistem terpadu dan pembayaran non-tunai yang praktis, aman, dan
          efisien.</p>
        <a href=""
          class="py-4 px-6 bg-sky-700 text-slate-200 hover:bg-sky-800 hover:text-white rounded-md font-semibold">Mulai
          Sekarang!</a>
      </div>
      <div>
        <img src="" alt="">
      </div>
    </section>

    {{-- Ken=unggulan Section --}}
    <section id="keunggulan" class="text-center px-16 py-16 mb-14">
      <h1 class="text-4xl font-bold text-yellow-600">Kenapa Harus Ada Ekosistem Digital?</h1>
      <p class="font-medium mb-16 text-gray-900">Lebih dari sekedar website, ini adalah jembatan antar seluruh layanan
        di sekolah.</p>
      <div class="grid grid-cols-4 gap-6">
        <div
          class="rounded-lg flex flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 text-gray-700 px-6 py-6 h-44 justify-center text-center w-full">
          <h3 class="font-bold text-lg uppercase mb-4">Terintegrasi</h3>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-qr-code-scan w-full"
            viewBox="0 0 16 16">
            <path
              d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5M.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5M4 4h1v1H4z" />
            <path d="M7 2H2v5h5zM3 3h3v3H3zm2 8H4v1h1z" />
            <path d="M7 9H2v5h5zm-4 1h3v3H3zm8-6h1v1h-1z" />
            <path
              d="M9 2h5v5H9zm1 1v3h3V3zM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8zm2 2H9V9h1zm4 2h-1v1h-2v1h3zm-4 2v-1H8v1z" />
            <path d="M12 9h2V8h-2z" />
          </svg>
        </div>
        <div
          class="rounded-lg flex flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 text-gray-700 px-6 py-6 h-44 justify-center text-center w-full">
          <h3 class="font-bold text-lg uppercase mb-4">Hemat Waktu</h3>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clock-history w-full"
            viewBox="0 0 16 16">
            <path
              d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z" />
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
            <path
              d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
          </svg>
        </div>
        <div
          class="rounded-lg flex flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 text-gray-700 px-6 py-6 h-44 justify-center text-center w-full">
          <h3 class="font-bold text-lg uppercase mb-4">Transparan</h3>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search w-full" viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
          </svg>
        </div>
        <div
          class="rounded-lg flex flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 text-gray-700 px-6 py-6 h-44 justify-center text-center w-full">
          <h3 class="font-bold text-lg uppercase mb-4">Modern</h3>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cpu w-full" viewBox="0 0 16 16">
            <path
              d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0m-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
          </svg>
        </div>
      </div>
    </section>

    {{-- Keamanan Section --}}
    <section id="keamanan"
      class="flex flex-col justify-center items-center text-center bg-gray-900 w-full px-16 py-16 mb-16 ">
      <h1 class="font-bold text-4xl text-yellow-500">Keamanan & Kepercayaan</h1>
      <p class="font-medium mb-16 text-slate-100">Data Aman, Transaksi Nyaman</p>
      <div
        class="w-3/4 rounded-md bg-gray-100 hover:bg-sky-800 text-gray-800 hover:text-slate-100 border border-gray-700 hover:border-sky-700 shadow-md hover:shadow-slate-500/90 py-3 mt-4">
        <p class="text-lg font-semibold">Sistem berbasis teknologi terkini dengan enkripsi data</p>
      </div>
      <div
        class="w-3/4 rounded-md bg-gray-100 hover:bg-sky-800 text-gray-800 hover:text-slate-100 border border-gray-700 hover:border-sky-700 shadow-md hover:shadow-slate-500/90 py-3 mt-4">
        <p class="text-lg font-semibold">Semua transaksi tercatat otomatis</p>
      </div>
      <div
        class="w-3/4 rounded-md bg-gray-100 hover:bg-sky-800 text-gray-800 hover:text-slate-100 border border-gray-700 hover:border-sky-700 shadow-md hover:shadow-slate-500/90 py-3 mt-4">
        <p class="text-lg font-semibold">Hanya pengguna resmi SMKN 2 Mojokerto yang dapat mengakses</p>
      </div>
    </section>

    <section id="fitur" class="px-16 py-16">
      <h1 class="text-4xl font-bold text-center text-yellow-600">Fitur Ekosistem Digital</h1>
      <p class="text-center font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
      <div class="grid grid-cols-3 gap-6 mt-12">
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Tata Usaha Digital</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Koperasi Digital</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Kantin Pintar</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Perpustakaan Digital</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Pembayaran Cashless</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
        <div
          class="rounded-2xl flex flex-grid border-slate-600 border border-opacity-60 opacity-80 hover:shadow-lg w-full px-2 py-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-fork-knife w-2/3 "
            viewBox="0 0 16 16">
            <path
              d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z" />
          </svg>
          <div class="flex-col">
            <h3 class="flex pt-2 px-6 font-medium">Laporan Keuangan Otomatis</h3>
            <p class=" flex px-6 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quaerat quasi sequi
              exercitationem alias,</p>
          </div>
        </div>
      </div>
    </section>

    <section class="px-16 py-16">
      <div class="flex gap-6 shadow hover:shadow-gray-600 rounded-xl bg-gray-900 transition-all duration-500">
        <div class="w-1/2">
          <img src="{{asset('asset/BC69.jpg')}}" alt=""
            class="rounded-l-xl shadow-md hover:scale-105 hover:shadow-gray-700 transition-all duration-500">
        </div>
        <div class="px-4 py-10">
          <h1 class="text-yellow-500 font-bold text-4xl">Tentang Platform</h1>
          <p class="font-medium text-slate-200">Sekolah Lebih Dekat, Layanan Lebih Cepat</p>
        </div>
      </div>
    </section>

    <section
      class="overflow-hidden bg-[url(https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2670&auto=format&fit=crop)] bg-cover bg-top bg-no-repeat mt-20">
      <div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="text-center sm:text-right flex flex-col items-end">
          <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-4xl">Saatnya SMKN 2 Mojokerto Go Digital!
          </h2>

          <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
            Nikmati layanan sekolah yang cepat, aman, dan transparan. Dengan tampilan yang interaktif, mudah digunakan,
            dan terpusat.
          </p>

          <div class="mt-4 sm:mt-8 text-center sm:text-right">
            <a href="#"
              class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
              Bergabung Sekarang
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-20 px-16 py-16 mb-16">
      <h1 class="text-yellow-600 font-bold text-4xl text-center">FAQ (Pertanyaan yang Sering Diajukan)</h1>
      <div class="space-y-4 mt-16">
        <details class="group border-s-4 bg-gray-100 p-4 border-gray-700 [&_summary::-webkit-details-marker]:hidden"
          open>
          <summary class="flex items-center justify-between gap-1.5 text-gray-900">
            <h2 class="text-lg font-medium">Lorem ipsum dolor sit amet consectetur adipisicing?</h2>

            <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>

          <p class="pt-4 text-gray-900 indent-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
            recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
            consequuntur distinctio corporis earum similique!
          </p>
        </details>
        <details class="group border-s-4 bg-gray-100 p-4 border-gray-700 [&_summary::-webkit-details-marker]:hidden"
          open>
          <summary class="flex items-center justify-between gap-1.5 text-gray-900">
            <h2 class="text-lg font-medium">Lorem ipsum dolor sit amet consectetur adipisicing?</h2>

            <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>

          <p class="pt-4 text-gray-900 indent-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
            recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
            consequuntur distinctio corporis earum similique!
          </p>
        </details>
        <details class="group border-s-4 bg-gray-100 p-4 border-gray-700 [&_summary::-webkit-details-marker]:hidden"
          open>
          <summary class="flex items-center justify-between gap-1.5 text-gray-900">
            <h2 class="text-lg font-medium">Lorem ipsum dolor sit amet consectetur adipisicing?</h2>

            <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>

          <p class="pt-4 text-gray-900 indent-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
            recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
            consequuntur distinctio corporis earum similique!
          </p>
        </details>
        <details class="group border-s-4 bg-gray-100 p-4 border-gray-700 [&_summary::-webkit-details-marker]:hidden"
          open>
          <summary class="flex items-center justify-between gap-1.5 text-gray-900">
            <h2 class="text-lg font-medium">Lorem ipsum dolor sit amet consectetur adipisicing?</h2>

            <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>

          <p class="pt-4 text-gray-900 indent-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
            recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
            consequuntur distinctio corporis earum similique!
          </p>
        </details>
      </div>
    </section>
  </main>

  @include('components.footer-landing')
</body>

</html>