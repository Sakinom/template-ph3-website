<x-app-layout>
  <x-slot name="content">
    <section class="p-top-hero">
      <div class="p-top-hero_inner flex my-0 max-w-7xl relative">
        <div class="p-top-hero_body self-center bg-[#eff2f5] rounded-3xl inline-block relative py-12 px-12 whitespace-nowrap">
          <h1 class="p-top-hero_body_title text-[#0071bc] text-4 font-bold">学生プログラミングコミュニティ POSSE（ポッセ）</h1>
          <span class="p-top-hero_body_catchcopy inline-block text-6xl font-bold mt-2 flex-wrap">自分史上最高<br>を仲間と。</span>
        </div>
        <picture class="p-top-hero_image rounded-l-lg block mx-auto max-h-[680px] overflow-hidden right-0">
          <img src="{{asset('images/img-hero.jpg')}}" alt="" class="block h-full w-full object-cover">
        </picture>
        <div class="p-top-hero_scroll items-center bottom-6 inline-flex text-sm gap-1 left-8 absolute before:bg-[#ccc] before:rounded-full before:content-[''] before:inlne-block before:w-2 before:h-2">Scroll Down</div>
      </div>
    </section>
    
    <div class="p-top-container mt-24">
      <section class="l-section p-top-about">
        <div class="l-container mx-auto my-0 max-w-5xl w-full">
          <h2 class="p-heading text-9 font-bold text-center">
            POSSEとは<span class="p-heading_caption text-[#0071bc] block text-sm mt-2" lang="en" aria-hidden="true">About POSSE</span>
          </h2>
          <div class="p-top-about_body grid gap-10 mt-10 py-0 px-6 grid-cols-2">
            <picture class="p-top-about_image rounded-lg overflow-hidden">
              <img src="{{asset('images/img-about.jpg')}}" alt="POSSEメンバー集合写真">
            </picture>
            <div class="p-top-about_content self-center text-sm">
              <p>学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br>プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br>それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </x-slot>

  <x-slot name="line">
    <div class="p-line mt-36">
      <div class="l-container">
        <div class="p-line_body bg-[url('/public/images/bg-line.jpg')] rounded-lg relative overflow-hidden my-0 mx-6 py-7 px-6 flex justify-center before:bg-[#0071bce6] before:h-full before:w-full before:absolute before:left-0 before:top-0 before:content-['']">
          <div class="p-line_body_inner relative">
            <h2 class="p-heading -light p-line_title text-white justify-center items-center flex gap-2"><i class="u-icon_line text-[40px]"></i>POSSE 公式LINE</h2>
            <div class="p-line_content text-white text-sm text-center mt-4">
              <p>公式LINEにてご質問を随時受け付けております。<br>詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>下記ボタンより友達追加をお願いします！</p></div>
              <div class="p-line_footer text-center mt-4">
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-line_button bg-white rounded-lg text-[#333] inline-block text-3 font-bold max-w-xs p-3 relative w-full">LINE追加<i class="u-icon_link absolute right-5 top-2/4 translate-x-0 translate-y-2/4"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </x-slot>
</x-app-layout>


{{-- template --}}

{{-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
  href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
  rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>POSSE 初めてのWeb制作</title>
  @vite(['resources/css/app.css', 'resources/js/test.js'])

</head>

<body>
  <header class="l-header p-header">
    <div class="p-header_logo"><img src="../assets-ph1-website-main/img/logo.svg" alt="POSSE"></div>
    <div class="hamburger-menu">
      <input type="checkbox" id="menu-btn-check">
      <label for="menu-btn-check" class="menu-btn"><span></span></label>
      <div class="menu-content">
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
    <nav class="p-header_nav">
      <ul class="p-header_nav_list">
        <li class="p-header_nav_item">
        </li>
        <li class="p-header_nav_item">
        </li>
      </ul>
    </nav>
    <ul class="p-header_sns p-sns">
      <li class="p-sns_item">
        <a href="https://twitter.com/posse_program" target="_blank" rel="noopener noreferrer" class="p-sns_item_link" aria-label="Twitter">
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
  
  <main class="l-main">
    <section>
      <input id="users" type="hidden" value='@json($users)'>
      @foreach($users as $user)
        <p>{{$user->name}}</p>
      @endforeach
    </section>
    <section class="p-top-hero">
      <div class="p-top-hero_inner">
        <div class="p-top-hero_body">
          <h1 class="p-top-hero_body_title">学生プログラミングコミュニティ POSSE（ポッセ）</h1>
          <span class="p-top-hero_body_catchcopy">自分史上最高<br>を仲間と。</span>
        </div>
        <picture class="p-top-hero_image">
          <img src="../assets-ph1-website-main/img/img-hero.jpg" alt="">
        </picture>
        <div class="p-top-hero_scroll">Scroll Down</div>
      </div>
    </section>
    
    <div class="p-top-container">
      <section class="l-section p-top-about">
        <div class="l-container">
          <h2 class="p-heading">
            POSSEとは<span class="p-heading_caption" lang="en" aria-hidden="true">About POSSE</span>
          </h2>
          <div class="p-top-about_body">
            <picture class="p-top-about_image">
              <img src="../assets-ph1-website-main/img/img-about.jpg" alt="POSSEメンバー集合写真">
            </picture>
            <div class="p-top-about_content">
              <p>学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。<br>プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！<br>それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  
  <div class="p-line">
    <div class="l-container">
      <div class="p-line_body">
        <div class="p-line_body_inner">
          <h2 class="p-heading -light p-line_title"><i class="u-icon_line"></i>POSSE 公式LINE</h2>
          <div class="p-line_content">
            <p>公式LINEにてご質問を随時受け付けております。<br>詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br>下記ボタンより友達追加をお願いします！</p></div>
            <div class="p-line_footer">
              <a href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-line_button">LINE追加<i class="u-icon_link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="l-footer p-footer">
      <div class="p-fixedLine" id="js-fixedLine">
        <a href="http://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer" class="p-fixedLine_link" id="js-lineLink">
          <i class="u-icon_line"></i>
          <p class="p-fixedLine_line_text" id="js-iconLine">POSSE公式LINEで<br>最新情報をGET！</p>
          <i class="u-icon_link"></i>
        </a>
        <div class="p-fixedIcon" id="js-fixedIcon"></div>
      </div>
      <div class="l-footer_inner">
        <div class="p-footer_siteinfo">
          <span class="p-footer_logo">
            <img src="../assets-ph1-website-main/img/logo.svg" alt="POSSE">
          </span>
          <a href="http://posse-ap.com/" target="_blank" rel="noopener noreferrer" class="p-footer_siteinfo_link">POSSE公式サイト</a>
          <i class="p-footer_icon_link"></i>
        </div>
        <div class="p-footer_sns">
          <ul class="p-sns_list p-footer_sns_list">
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
      <div class="p-footer_copyright">
        <small lang="en">©︎2022 POSSE</small>
      </div>
    </footer>
    <script src="./toppage.js"></script>
  </body>
  </html> --}}