<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script type="text/javascript" src="../_framework/_jquery-3.4.1/dist/jquery.js"></script>
  <script type="text/javascript" src="../_framework/jquery-ui.js"></script>
  <script type="text/javascript" src="../_framework/_semantic-ui-2.4.0/semantic.min.js"></script>
  <script type="text/javascript" src="../_framework/_sweetalert2-9.5.4/sweetalert2.min.js"></script>
  <script type="text/javascript" src="../_framework/jquery.redirect.js"></script>
  <link rel="stylesheet" type="text/css" href="../_framework/_semantic-ui-2.4.0/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../_framework/_sweetalert2-9.5.4/sweetalert2.min.css">
  <style>
    @media (max-width: 1023px) {
        .lg\\:hidden {
            display: none;
        }
        .lg\\:flex {
            display: flex;
        }
    }
</style>

</head>
<body>
    
  <nav class="bg-cyan-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Tombol di sebelah kiri -->
        <div>
            <h1 class="text-white text-2xl font-arial"><a href="">INC.</a></h1>
        </div>

        <!-- Kolom pencarian di sebelah kanan -->
        <div class="flex items-center space-x-4">
            <div class="relative">
                <input type="text" placeholder="Cari..." class="px-4 py-2 border rounded-md focus:outline-none">
                <button class="absolute right-0 top-0 h-full px-3 text-white">
                    <!-- Tambahkan ikon pencarian atau sesuai kebutuhan -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-5-5m2-10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-5-13a6 6 0 100 12 6 6 0 000-12z"></path>
                    </svg>
                </button>
            </div>

            <!-- Daftar menu -->
            <button type="button" id="" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-white dark:hover:bg-blue-700 dark:focus:ring-white buttonsign">
              Sign In
            </button>
        </div>
    </div>
</nav>
<nav class="bg-cyan-900">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

        <div class="hidden sm:ml-6 sm:block">
          <div class="flex justify-center space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="beranda.html" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Beranda</a>
            <a href="economic.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Economics</a>
            <a href="food.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Tech</a>
            <a href="politics.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Food</a>
            <a href="politics.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Politics</a>
            <a href="lifestyle.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Lifestyle</a>
            <a href="health.html" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Healt</a>
          </div>
        </div>
      </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="beranda.html" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Beranda</a>
      <a href="economic.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Economics</a>
      <a href="tech.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Tech</a>
      <a href="food.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Food</a>
      <a href="politics.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Politics</a>
      <a href="lifestyle.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Lifestyle</a>
      <a href="health.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Healt</a>
    </div>
  </div>
</nav>



  <div class="p-10 bg-white"></div>
  <div class="flex items-center justify-center">
    <div class="w-[1250px] h-[339px] bg-blue-950">
      <div class="flex">
        <img src="https://s3-alpha-sig.figma.com/img/9fea/c09b/caec6c2facae94d03984edb632a0a2fa?Expires=1707696000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iDjChL8dukfGB0Q4KDCIrbfIa8cclNK862x8796aqYBtHhMHAx2EC8r-ReVnwL4oAUEAi40Z6vWYT3~EEXfHnCLxnTDa7Uhzl7cAE5wWl7PKqBAxMbEAXQ4KY0GWtwbnaWgpbMx5lgtHc4VeugGXU3p7abOzAqgEbUs0W9fVO~XL0X0RGecPX9TO1Q4plZe3B9ekyt~enw8GfFfa6FbGabjgMENY4mdxqytrg0tt4yElGRzf0JnJtED1ks7s-ftLY78~7WPz0H1ttL~4vTTBMBw7R~nK8kLVA5LJ9fK0oCoVPo1HJlOXfrzD4Hr9ALmE2HJmkBssM0rPoNS~lc7cEQ__" alt="Gambar">
      </div>
    </div>
  </div>


  <div class="w-[1250px] h-[396px] relative bg-pink-90">
    <di class="absolute inset-0 flex ml-60 items-center mt-20 justify-center">
      <div class="w-[334px] h-[294px] mr-5 bg-zinc-300 bg-center relative" style="background-image: url('https://s3-alpha-sig.figma.com/img/a7c7/be01/d52f24fd82fa117e1fb110e07d55ce9d?Expires=1707696000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=F8tEHVykW7IEIXLbtPy1RZmBvCJiU0P7gf7RvGwd7rukWRiFElhlunrHEFNu4zCgnvg3CpmIfJRhV2jIRdOw2RlSv1-yBqsSLey4tPquvXO1QERWwa2aVCLUI9-znzDmkZOPr2TU9rlyCN3Ua325y3RB8NxSt-PexfPBMa3U~BCXzWqKQWfToUBn7LmZrK7ut7MkUEoqM7L04OKUoBqwGt4xUugNvYzjhJTVM63brrypUybrXf~nWL4jlexFD6OL0ywtVJsHJdirTWbLGxwknF2Uw9mHSfnR-oDuxFVaIeFoCc4KQRrKjZ9UT5KZUkuFjO91DcfCRrygrDA-Pa7bWg__');">
        <div class="h-full w-full">
            <div class="text-black p-4">
                <p class="absolute ml-5 mb-5 bottom-0 left-0 font-secular text-bold text-1xl text-black">
                  Mau Pakai AI Microsoft Copilot di Komputer? Ini Syaratnya
                </p>
            </div>
        </div>
    </div>    
    <div class="w-[530px] h-[294px] mr-5 bg-zinc-300 relative">
      <div class="h-full w-full">
          <div class="text-black p-4">
              <p class="absolute ml-5 mb-5 bottom-0 left-0 font-secular text-bold text-xl text-black">
                  orang terkaya di dunia, kenapa Elon Musk pilih kontrak Rumah?
              </p>
          </div>
        </div>
     </div>  
     <div class="w-[334px] h-[294px] bg-zinc-300 relative">
      <div class="h-full w-full">
        <div class="text-black p-4 absolute bottom-0 left-0">
          <p class="font-secular font-bold text-xl">
            5 Fungsi Repeater dalam Jaringan Komputer dan Jenis-jenisnya Repeater 
          </p>
        </div>
      </div>
    </div>  
  </div>

  <div class="left-[43px] top-0 absolute text-black text-5xl font-normal font-['Scheherazade New']"></div>
  <div class="left-[76px] top-[1672px] absolute flex-col justify-start items-center inline-flex">
      <div class="w-[744px] h-[790px] relative">
          <div class="left-[2px] top-0 absolute text-black text-[26px] font-normal font-['Secular One'] leading-[35px]">Featured News</div>
          <div class="w-[352px] h-[147px] left-[16px] top-[253px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
          <div class="w-[310px] h-[147px] left-[422px] top-[253px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
          <div class="w-[310px] h-[147px] left-[16px] top-[643px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
          <div class="w-[310px] h-[147px] left-[422px] top-[643px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
          <div class="w-[336px] h-[186px] left-0 top-[74px] absolute bg-black"></div>
          <div class="w-[336px] h-[186px] left-0 top-[466px] absolute bg-black"></div>
          <div class="w-[336px] h-[186px] left-[408px] top-[466px] absolute bg-black"></div>
          <div class="w-[334px] h-[179px] left-[410px] top-[74px] absolute bg-black"></div>
      </div>
  </div>
  <div class="w-[310px] h-[147px] left-[102px] top-[2719px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
  <div class="w-[336px] h-[186px] left-[86px] top-[2542px] absolute bg-black"></div>
  <div class="w-[310px] h-[147px] left-[510px] top-[2719px] absolute text-black text-xl font-normal font-['Scheherazade New'] leading-[35px]">Mengatasi Hambatan Berita: Membuka Pengalaman Pengguna dengan Narasi Multimedia yang Dinamis</div>
  <div class="w-[336px] h-[186px] left-[494px] top-[2542px] absolute bg-black"></div>
  <div class="w-[454px] h-[1237px] left-[916px] top-[1672px] absolute">
      <div class="w-[454px] h-[1159px] left-0 top-[78px] absolute bg-zinc-300"></div>
      <div class="left-0 top-0 absolute text-black text-[26px] font-normal font-['Secular One'] leading-[35px]">Latest Health</div>
      <div class="w-[452px] h-[179px] left-0 top-[74px] absolute bg-slate-500"></div>
      <div class="w-[452px] h-[186px] left-[2px] top-[466px] absolute bg-slate-500"></div>
      <div class="w-[452px] h-[186px] left-0 top-[870px] absolute bg-slate-500"></div>
      <div class="left-[36px] top-[103px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">01.</div>
      <div class="left-[32px] top-[279px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">02.</div>
      <div class="left-[32px] top-[487px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">02.</div>
      <div class="left-[32px] top-[678px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">02.</div>
      <div class="left-[34px] top-[894px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">02.</div>
      <div class="left-[34px] top-[1087px] absolute text-white text-[40px] font-normal font-['Secular One'] leading-[35px]">02.</div>
      <div class="w-[389px] h-[1048px] left-[32px] top-[151px] absolute">
          <div class="w-[387px] left-[2px] top-[973px] absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Makanan Super untuk Kesehatan Jantung: Pilihan Nutrisi yang Mendukung Kardiovaskular Anda</div>
          <div class="w-[387px] left-[2px] top-[789px] absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Makanan Super untuk Kesehatan Jantung: Pilihan Nutrisi yang Mendukung Kardiovaskular Anda</div>
          <div class="w-[387px] left-0 top-[574px] absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Makanan Super untuk Kesehatan Jantung: Pilihan Nutrisi yang Mendukung Kardiovaskular Anda</div>
          <div class="w-[387px] left-0 top-0 absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Rahasia Hidup Sehat: Menjelajahi Gaya Hidup dan Kebiasaan untuk Kesejahteraan Optimal</div>
          <div class="w-[387px] left-0 top-[176px] absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Makanan Super untuk Kesehatan Jantung: Pilihan Nutrisi yang Mendukung Kardiovaskular Anda</div>
          <div class="w-[387px] left-0 top-[381px] absolute text-white text-lg font-normal font-['Secular One'] leading-[25px]">Makanan Super untuk Kesehatan Jantung: Pilihan Nutrisi yang Mendukung Kardiovaskular Anda</div>
      </div>
  </div>

  <div class="w-[1480px] h-[618px] left-[-17px] top-[3028px] absolute">
    <div class="w-[1467px] h-[618px] left-0 top-0 absolute">
        <img class="w-[1467px] h-[618px] left-0 top-0 absolute" src="https://s3-alpha-sig.figma.com/img/ad2b/7d81/713a9dfabbf8a27fc47bb74a0ef8edc3?Expires=1707091200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Jto-YLal9wssBhW3rpSjn9omE9eZ5X-qOt6oBHef3i2RAUOZUStfU~KMA-HVYANMgJryZA8t2NuDuGiCYocrKEfBheY38rKRTWEYasNN7hZ5QdcYDDCEx1Qop1hVPOmbZZUXeyXpQhmG77snls-Etk2PPSdNC2cfTj8AXRENE0Sxv13TNlmq1Z9xQbtIQTBcISpcsrdtJKO2LtoY-GLmkbhAFF6Ew1pbEarLrWq-FeBaUESnBcw4CxXlb24kQs~AQqE1KBw4k1m8fksCjeypfRAVYKBjzBJKb9vurJNrsN96AhQ0f7z2blPT7f6cQKq6MIhsM9Y5~FTgNBNDcd3sVg__" />
        <div class="w-[431px] h-[345.98px] left-[67px] top-[117.27px] absolute bg-white">
          <div class="w-[304px] text-black text-lg font-normal font-['Secular One'] leading-[25px]">Ekonomi Hijau: Peluang Baru untuk Bisnis dan Investasi!</div>
        </div>
        <div class="w-[418px] h-[345.98px] left-[529px] top-[117.27px] absolute bg-white"></div>
        <div class="w-[418px] h-[345.98px] left-[978px] top-[117.27px] absolute bg-white"></div>
        <div class="w-[431px] h-[269.57px] left-[67px] top-[117.27px] absolute bg-orange-950">
          <div class="w-[304px] text-black text-lg font-normal font-['Secular One'] leading-[25px]">Ekonomi Hijau: Peluang Baru untuk Bisnis dan Investasi!</div>
        </div>
        <div class="w-[418px] h-[269.57px] left-[529px] top-[117.27px] absolute bg-orange-950"></div>
        <div class="w-[418px] h-[269.57px] left-[978px] top-[117.27px] absolute bg-orange-950"></div>
    </div>
    <div class="w-[1321px] h-[33px] left-[67px] top-[57px] absolute">
        <div class="w-[194px] h-[27px] left-0 top-[6px] absolute text-white text-[26px] font-normal font-['Secular One'] leading-[25px]">Economics</div>
        <div class="w-[109px] h-[26.53px] left-[1212px] top-0 absolute opacity-70 text-white text-[22px] font-normal font-['Secular One'] leading-[25px]"><a href="economic.html">visit more</a></div>
    </div>
</div>

<div class="w-[1230px] h-[744px] left-[38px] top-[3722px] absolute">
  <div class="w-[405px] left-[38px] top-[256px] absolute text-black text-[22px] font-normal font-['Secular One'] leading-[25px]">Hidup Bersama AI: Teknologi Kecerdasan Buatan</div>
  <div class="left-[726px] top-[256px] absolute text-black text-[22px] font-normal font-['Secular One'] leading-[25px]">Kesehatan Mental di Era Modern</div>
  <div class="w-[1130px] h-[396px] left-0 top-[348px] absolute rounded-[5px]">
      <div class="w-[398px] h-[266px] left-[20px] top-[20px] absolute">
          <div class="w-[398px] h-[370px] left-0 top-[4px] absolute bg-zinc-50"></div>
          <div class="w-[420px] h-[370px] left-[442px] top-[4px] absolute bg-zinc-50"></div>
          <div class="w-[420px] h-[371px] left-[906px] top-[3px] absolute bg-zinc-50"></div>
          <div class="w-[398px] h-[266px] left-0 top-0 absolute bg-zinc-300"></div>
      </div>
      <div class="w-[420px] h-[266px] left-[462px] top-[20px] absolute justify-center items-center inline-flex">
          <div class="w-[420px] h-[266px] bg-zinc-300"></div>
      </div>
      <div class="w-[420px] h-[266px] left-[926px] top-[20px] absolute justify-center items-center inline-flex">
          <div class="w-[420px] h-[266px] bg-zinc-300"></div>
      </div>
  </div>
  <div class="w-[252px] left-[38px] top-[656px] absolute text-black text-[22px] font-normal font-['Secular One'] leading-[25px]">Seni sebagai Terapi: Gaya Hidup Kreatif</div>
  <div class="w-[292px] left-[496px] top-[650px] absolute text-black text-[22px] font-normal font-['Secular One'] leading-[25px]">Digital Detox: Kembali ke Kehidupan Tanpa Gadget</div>
  <div class="w-[216px] left-[964px] top-[656px] absolute text-black text-[22px] font-normal font-['Secular One'] leading-[25px]">Minimalisme: Gaya Hidup Sederhana</div>
</div>

<div class="w-[1467px] h-[612px] left-[-1px] top-[4614px] absolute">
  <div class="w-[1467px] h-[612px] left-[1px] top-0 absolute bg-zinc-300"></div>
  <img class="w-[1480px] h-[582px] left-0 top-[22px] absolute" src="https://s3-alpha-sig.figma.com/img/fdc8/f378/b439594cf372baa5788ad0efd65719bd?Expires=1707091200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=M43Ionfj65L9ZKTdBPTzklrW1KvP-C66cU2MfkCCeAlOw~AaqqK8reNeMffUN0pNPipuqgwzcCJN3LTL5lSvF1E7Np-RSPQn8pfubw7OJvCRAFXnSfQYrXBL97G~agxD7-NAxZ2KDcKJj4WZD6jpTJKqYgNpzkU75C2GFevn078mB918ic3-3eAN7FBu9jLMxx-jEdRNV7x3cF~F1-5mbI2TzKTnDhaYSpVWU4-HEAM7H5-Qt437NesD44gP6reu85kJjwDYHRjOqRa1ilLYnvNK-gl-DKVMbFVtkx26dZ~x6XDgEZbm~FFil-Q23NHshZtczk6KwHhsuQ7oJ4pdIQ__" />
  <div class="w-[294px] h-[273.06px] left-[59px] top-[105.19px] absolute bg-stone-900"></div>
  <div class="w-[294px] h-[273.06px] left-[400px] top-[105.19px] absolute bg-stone-900"></div>
  <div class="w-[294px] h-[273.06px] left-[1087px] top-[105.19px] absolute bg-stone-900"></div>
  <div class="w-[294px] h-[273.06px] left-[740px] top-[105.19px] absolute bg-stone-900"></div>
  <div class="w-[294px] h-[126px] left-[59px] top-[378px] absolute bg-white"></div>
  <div class="w-[294px] h-[126px] left-[400px] top-[378px] absolute bg-white"></div>
  <div class="w-[294px] h-[126px] left-[741px] top-[378px] absolute bg-white"></div>
  <div class="w-[294px] h-[126px] left-[1087px] top-[378px] absolute bg-white"></div>
</div>
<div class="left-[58px] top-[4658px] absolute text-white text-[34px] font-normal font-['HeadlandOne']">Technology</div>
<div class="left-[1285px] top-[4672px] absolute text-white text-[23px] font-normal font-['HeadlandOne']"><a href="tech.html">View all</a></div>


<script>

$(document).ready(function () {
  $(".buttonsign").on("click", function () {
      window.location.href = "../INCNews_Front-End/signup.php";
  });
});

</script>

</body>
</html>