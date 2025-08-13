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
    <section class="flex py-28 px-16">
      <div>
        <h1 class="text-4xl font-bold text-gray-900">Digital Ecosystem</h1>
        <h2 class="text-2xl font-bold text-yellow-600 mb-2">SMK NEGERI 2 MOJOKERTO</h2>
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

    <section class="text-center px-16 py-14">
      <h1 class="text-3xl font-bold text-yellow-600">Kenapa Harus Ada Ekosistem Digital?</h1>
      <p class="font-medium mb-16 text-gray-900">Lebih dari sekedar website, ini adalah jembatan antar seluruh layanan
        di sekolah.</p>
      <div class="grid grid-cols-4 gap-6">
        <div
          class="rounded-lg flex flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 text-gray-700 px-6 py-10 h-40 justify-center text-center w-full">
          <h3 class="font-semibold mb-4">Terintegrasi</h3>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class=" bi bi-qr-code-scan" viewBox="0 0 16 16">
            <path
              d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5M.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5M4 4h1v1H4z" />
            <path d="M7 2H2v5h5zM3 3h3v3H3zm2 8H4v1h1z" />
            <path d="M7 9H2v5h5zm-4 1h3v3H3zm8-6h1v1h-1z" />
            <path
              d="M9 2h5v5H9zm1 1v3h3V3zM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8zm2 2H9V9h1zm4 2h-1v1h-2v1h3zm-4 2v-1H8v1z" />
            <path d="M12 9h2V8h-2z" />
          </svg>
        </div>
        <div class="rounded-lg flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 p-6">
          <h3 class="font-semibold">Hemat Waktu</h3>

        </div>
        <div class="rounded-lg flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 p-6">
          <h3 class="font-semibold">Transparan</h3>

        </div>
        <div class="rounded-lg flex-col bg-gray-200 hover:bg-sky-800 border border-gray-200 hover:text-slate-100 p-6">
          <h3 class="font-semibold">Modern</h3>

        </div>
      </div>
    </section>
  </main>
</body>

</html>