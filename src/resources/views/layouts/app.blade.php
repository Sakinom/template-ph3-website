<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
  href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
  rel="stylesheet">

  {{-- scripts --}}
  @vite(['resources/css/app.css', 'resources/js/test.js'])
</head>

<body>
  <header class="l-header p-header flex items-center bg-white z-50 py-15 fixed top-0 left-0 right-0">
    <div class="p-header_logo w-37"><img src="{{ asset('images/logo.svg')}}" alt="POSSE">
    </div>
    <div class="hamburger-menu">
      <input type="checkbox" id="menu-btn-check" class="hidden">
      <label for="menu-btn-check" class="menu-btn"><span></span></label>
      <div class="menu-content hidden">
        <ul>
          <li>
            <a href="../toppage/index.html" class="menu-item_1">POSSEとは</a>
          </li>
          <li>
            <a href="../quizpage/index.html" class="menu-item_2">クイズ</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="p-header_nav ml-auto">
      <ul class="p-header_nav_list flex gap-8">
        <li class="p-header_nav_item">
        </li>
        <li class="p-header_nav_item">
        </li>
      </ul>
    </nav>
    <ul class="p-header_sns p-sns flex gap-4 ml-8">
      <li class="p-sns_item">
        <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="p-sns_item_link items-center border-gray-300 border-1 text-[#adadad] inline-flex text-6 justify-center w-12 h-12 rounded-full" aria-label="Twitter">
          <i class="u-icon_twitter"></i>
        </a>
      </li>
      <li class="p-sns_item">
        <a href="http://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer" class="p-sns_item_link" aria-label="instagram">
          <i class="u-icon_instagram"></i>
        </a>
      </li>
    </ul>
  </header>
  
  <main class="pt-20">
    {{ $content }}
</main>

{{ $line }}

    <footer class="border-t border-1 border-gray-300 text-center mt-20">
      <div class="bottom-4 fixed right-4" id="js-fixedLine">
        <a href="http://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="items-center bg-[#5fdf5b] rounded-lg shadow-lg flex py-5 pr-5 pl-6" id="js-lineLink">
          <i class="text-4xl"></i>
          <p class="text-white text-sm ml-3 text-left font-bold" id="js-iconLine">POSSE公式LINEで<br>最新情報をGET！</p>
          <i class="text-white text-lg ml-9"></i>
        </a>
        <div class="p-fixedIcon" id="js-fixedIcon"></div>
      </div>
      <div class="pr-14 py-6 pl-12">
        <div class="p-footer_siteinfo">
          <span class="block flex justify-center">
            {{-- <img src="../assets-ph1-website-main/img/logo.svg" alt="POSSE"> --}}
            <img src="{{ asset('images/logo.svg')}}" alt="POSSE">
          </span>
          <a href="http://posse-ap.com/" target="_blank" rel="noopener noreferrer" class="mt-6 inline-block text-[#666] text-sm">POSSE公式サイト</a>
          <i class="p-footer_icon_link"></i>
        </div>
        <div class="p-footer_sns">
          <ul class="p-sns_list mt-8 flex justify-center gap-2">
            <li class="p-sns_item js-snsItem">
              <a href="http://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="p-sns_item_link" aria-label="Twitter">
                <i class="u-icon_twitter"></i>
              </a>
            </li>
            <li class="p-sns_item js-snsItem">
              <a href="http://www.instagram.com/posse_programming/" target="_blank" rel="noopener noreferrer" class="p-sns_item_link" aria-label="instagram">
                <i class="u-icon_instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="pr-9 py-6 pl-8 border-t border-gray-300 text-xs text-[#666]">
        <small lang="en">©︎2022 POSSE</small>
      </div>
    </footer>
    <script src="./toppage.js"></script>
  </body>
  </html>

{{-- 
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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/test.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}
