<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Nazwa</title>

   
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])


</head>

<body
  style="
        background-image: url('{{ asset('img/WhatsApp Image 2026-05-16 at 13.21.24.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    "
    class="min-h-[90vh] relative">

    <div id="app"></div>

    <!-- isi portfolio -->
    <section class="relative z-10">
       
    </section>

    <div id="particles"></div>

<!-- Loader Start -->
<div id="loader"
class="fixed inset-0 z-[9999] flex items-center justify-center
bg-no-repeat bg-center overflow-hidden
transition-all duration-700"

style="
background-image:
url('{{ asset('img/WhatsApp Image 2026-05-15 at 22.32.25.jpeg') }}');
background-size: cover;
background-position: center;
">

<!-- WHITE PARTICLES -->
<div id="loader-particles" class="absolute inset-0 z-0"></div>

<!-- FLOATING LINES -->
<div class="floating-lines">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- AURORA LINES -->
<div class="aurora-lines">
    <div class="line line1"></div>
    <div class="line line2"></div>
    <div class="line line3"></div>
</div>

<!-- MAGIC RINGS -->
<div class="absolute w-[500px] h-[500px] rounded-full border border-pink-100/30 animate-spin-slow"></div>
<div class="absolute w-[420px] h-[420px] rounded-full border border-pink-200/20 animate-spin-reverse blur-[1px]"></div>
<div class="absolute w-[550px] h-[550px] rounded-full border border-pink-300/10 blur-sm"></div>

<!-- SAKURA -->
<div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="sakura">💮</div>
    <div class="sakura">💮</div>
    <div class="sakura">💮</div>
    <div class="sakura">💮</div>
    <div class="sakura">💮</div>
</div>

<div id="sakura-container" class="absolute inset-0 overflow-hidden pointer-events-none"></div>

<!-- FLOATING RING -->
<div class="absolute w-[600px] h-[600px] border border-pink-100/20 rounded-full animate-spin-slow"></div>

<!-- CARD -->
<div class="relative w-[240px] sm:w-[320px] md:w-[340px] lg:w-[360px]
aspect-[4/5] overflow-hidden rounded-[30px] shadow-1xl z-10">

    <!-- 🔥 PLASMA BACKGROUND (TAMBAHAN BARU) -->
    <div id="plasma-loader" class="absolute inset-0 z-0"></div>

    <!-- ORBITAL RING -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-[120%] h-[120%] rounded-full border border-pink-200/30 animate-spin-slow"></div>
    </div>

    <!-- PLASMA GLOW -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-[130%] h-[130%] rounded-full blur-2xl
                    border border-pink-300/40
                    shadow-[0_0_40px_rgba(255,182,193,0.6)]
                    animate-pulse">
        </div>
    </div>

    <!-- ORBITAL PARTICLES -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="relative w-[120%] h-[120%] animate-spin-slow">
            <div class="absolute top-0 left-1/2 w-2 h-2 bg-pink-300 rounded-full"></div>
            <div class="absolute bottom-0 left-1/2 w-2 h-2 bg-pink-200 rounded-full"></div>
            <div class="absolute left-0 top-1/2 w-1.5 h-1.5 bg-pink-400 rounded-full"></div>
            <div class="absolute right-0 top-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>
        </div>
    </div>

    <!-- GLASS REFLECTION -->
    <div class="absolute top-0 left-[-40%] w-[60%] h-full bg-white/10 rotate-12 blur-xl z-20"></div>

    <!-- IMAGE -->
    <img src="{{ asset('img/WhatsApp_Image_2026-05-15_at_22.57.08-removebg-preview.png') }}"
    class="absolute inset-2 w-[calc(100%-16px)] h-[calc(100%-16px)]
    object-cover rounded-[42px] z-10
    drop-shadow-[0_0_30px_rgba(255,182,193,0.6)]">

    <!-- GRADIENT -->
    <div class="absolute inset-0 bg-gradient-to-t from-pink-500/10 via-transparent to-white/5 z-10"></div>

    <!-- INNER GOLD RING -->
    <div class="absolute w-[360px] h-[360px] rounded-full border border-yellow-200/30 shadow-[0_0_25px_rgba(255,215,0,0.3)] animate-spin-reverse"></div>

    <!-- GOLD PARTICLES -->
    <div class="absolute w-[8px] h-[8px] bg-yellow-300 rounded-full shadow-[0_0_20px_rgba(255,215,0,0.9)] animate-orbit1"></div>
    <div class="absolute w-[6px] h-[6px] bg-yellow-400 rounded-full shadow-[0_0_18px_rgba(255,215,0,0.8)] animate-orbit2"></div>

    <!-- CONTENT -->
    <div class="absolute inset-0 flex flex-col items-center justify-end pb-10 text-center z-20">

        <div id="loading-number"
        class="text-transparent text-xl font-bold
        bg-gradient-to-r from-rose-600 via-pink-500 via-orange-400 to-yellow-400
        bg-clip-text
        drop-shadow-[0_0_22px_rgba(244,114,182,0.9)]">
            0%
        </div>

        <!-- PROGRESS BAR (FIXED: hanya satu, tidak dobel) -->
        <div class="w-56 h-3 rounded-full overflow-hidden mt-3
        bg-black/20 border border-pink-500/40 backdrop-blur-md">

            <div id="loading-bar"
            class="h-full w-0 bg-gradient-to-r from-fuchsia-500 via-pink-600 to-rose-500
            shadow-[0_0_30px_rgba(236,72,153,1)]">
            </div>

        </div>

    </div>

</div>

</div>
<!-- Loader End -->







        <!-- Navbar Start -->
<header class="fixed top-0 left-0 w-full z-50">

    <div class="container mx-auto px-6">

        <div class="mt-4 bg-white/70 backdrop-blur-xl border border-pink shadow-xl rounded-3xl px-6 py-4">

            <div class="flex items-center justify-between">

                <!-- Logo -->
                <a href="#home"
                   class="text-2xl text-dark font-aesthetic">
                    Nazwa
                </a>

                <!-- Desktop Menu -->
               <nav class="hidden lg:flex items-center gap-4">

    <a href="#home"
       class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
              hover:bg-rose hover:text-white hover:scale-105
              transition duration-300">
        ♡ Beranda ♡
    </a>

    <a href="#about"
       class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
              hover:bg-rose hover:text-white hover:scale-105
              transition duration-300">
        ♡ About Me ♡
    </a>

    <a href="#project"
       class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
              hover:bg-rose hover:text-white hover:scale-105
              transition duration-300">
        ♡ Project ♡
    </a>

    <a href="#certificate"
       class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
              hover:bg-rose hover:text-white hover:scale-105
              transition duration-300">
        ♡ Certificate ♡
    </a>


<a href="#activities"
   class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
          hover:bg-rose hover:text-white hover:scale-105
          transition duration-300">
    ♡ Activities ♡
</a>

    <a href="#contact"
   class="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md
          hover:bg-rose hover:text-white hover:scale-105
          transition duration-300">
    ♡ Contact ♡
</a>

</nav>
                <!-- Hamburger Button -->
                <button id="menu-btn"
                        class="lg:hidden text-dark text-3xl">

                    ☰

                </button>

                       </div>

        </div>

    </div>
  </header>


  


<!-- Mobile Menu -->
<div id="mobile-menu"
     class="hidden lg:hidden absolute top-24 right-6 w-64 z-50">

    <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-4
                shadow-2xl border border-pink flex flex-col gap-3">

        <a href="#home"
           class="font-aesthetic text-dark text-center py-3 rounded-2xl
                  hover:bg-pink hover:text-white transition duration-300">
            ♡ Beranda ♡
        </a>

        <a href="#about"
           class="font-aesthetic text-dark text-center py-3 rounded-2xl
                  hover:bg-pink hover:text-white transition duration-300">
            ♡ About Me ♡
        </a>

        <a href="#project"
           class="font-aesthetic text-dark text-center py-3 rounded-2xl
                  hover:bg-pink hover:text-white transition duration-300">
            ♡ Project ♡
        </a>

        <a href="#certificate"
           class="font-aesthetic text-dark text-center py-3 rounded-2xl
                  hover:bg-pink hover:text-white transition duration-300">
            ♡ Certificate ♡
        </a>


    <a href="#activities"
   class="font-aesthetic text-dark text-center py-3 rounded-2xl
          hover:bg-pink hover:text-white transition duration-300">
    ♡ Activities ♡
</a>

      <a href="#contact"
   class="font-aesthetic text-dark text-center py-3 rounded-2xl
          hover:bg-pink hover:text-white transition duration-300">
    ♡ Contact ♡
</a>
    </div>

</div>


    <!-- Hero Section Start -->
<section id="home"
class="min-h-[90vh] flex items-center justify-center
pt-28 lg:pt-24 pb-10 relative overflow-hidden">

    <!-- React Tech Stack -->
    <div id="app"
         class="absolute bottom-20 left-0 w-full z-[999]">
    </div>


       <!-- CURVED TEXT -->
<div class="curved-top mt-6">

    <svg viewBox="0 0 1200 220"
         class="curved-svg translate-y-4">

        <defs>

            <path id="curve"
                  d="M 100 180 Q 600 -20 1100 180" />

            <linearGradient id="pinkGradient">

                <stop offset="0%" stop-color="#f9a8d4"/>
                <stop offset="50%" stop-color="#fbcfe8"/>
                <stop offset="100%" stop-color="#fdba74"/>

            </linearGradient>

        </defs>

        <text class="curved-text">

            <textPath href="#curve" startOffset="0%">

                ✦ 𝓜𝓮𝓮𝓽 𝓝𝓪𝔃𝘄𝓪 ✦ 𝓜𝓮𝓮𝓽 𝓝𝓪𝔃𝘄𝓪

            </textPath>

        </text>

    </svg>

</div>
</div>      
                <div class="flex flex-col lg:flex-row-reverse
            items-center justify-center
            gap-6 lg:gap-10">

                <!-- Hero Text -->
<div class="w-full lg:w-1/2 mt-36 lg:mt-24">

    <h1 class="text-lg md:text-xl font-semibold text-primary">

    (っ◔◡◔)っ ♥ 𝙃𝙖𝙡𝙡𝙤 👋, 𝙎𝙖𝙮𝙖 ♥ 
       <span class="block text-4xl md:text-6xl text-dark mt-2 font-cantik">
    Nazwa Putri Aulia
    </span>
    </h1>

  <h2 class="mt-4 text-xl md:text-2xl text-dark font-aesthetic tracking-widest">
    Web Developer & UI Designer
</h2>


<p id="about-text"
   class="about-text typing-cursor mt-6 text-rose leading-relaxed max-w-md">

    I am a Web Developer and UI Designer who focuses on building modern,
    interactive, and responsive websites using Laravel, React, Tailwind CSS,
    and JavaScript. I enjoy creating aesthetic user interfaces with elegant
    animations while maintaining performance and user experience. Besides
    designing interfaces, I am also experienced in deploying projects using
    platforms such as Vercel and GitHub.

</p>


<div class="flex flex-wrap items-center gap-4 mt-8">

    <!-- HUBUNGI SAYA -->
    <a href="#contact"
       class="inline-block bg-dark text-pink
              px-8 py-3 rounded-full shadow-md
              hover:bg-rose hover:shadow-xl hover:scale-105
              transition duration-300">

        ♡💖♡ 𝓗𝓾𝓫𝓾𝓷𝓰𝓲 𝓢𝓪𝔂𝓪 ♡💖♡

    </a>

    <!-- DOWNLOAD CV -->
    <a href="{{ asset('assets/cv-nazwa.pdf') }}"
       target="_blank"
       download
       class="inline-block bg-dark text-pink
              px-8 py-3 rounded-full shadow-md
              hover:bg-rose hover:shadow-xl hover:scale-105
              transition duration-300">

        ♡📄♡ 𝓓𝓸𝔀𝓷𝓵𝓸𝓪𝓭 𝓒𝓥 ♡📄♡

    </a>

</div>

</div>





                <!-- Hero Image -->
                <div class="w-full lg:w-1/2 flex justify-center">

                      <div id="react-card-swap" class="absolute bottom-0 right-0 z-30"></div>
                       

                    <div class="relative w-full max-w-md">

                         <!-- My Journey Text -->
<div class="absolute left-[-180px] top-6 hidden lg:block z-20 max-w-[260px]">

    <!-- glow background -->
    <div class="absolute -inset-6 
                bg-rose-300/20 
                blur-3xl 
                rounded-full 
                -z-10">
    </div>

    <!-- sparkle -->
    <span class="absolute -top-4 left-10 text-pink-300 text-xl animate-pulse">
        ✦
    </span>

    <span class="absolute bottom-0 right-0 text-rose-300 text-lg animate-pulse">
        ✧
    </span>

    <!-- line -->
    <div class="w-20 h-[2px] bg-gradient-to-r from-rose-300 to-transparent mb-4">
    </div>

    <p class="mt-3
          font-['Great_Vibes'] 
          text-[39px]
          text-black
          leading-[1.1]
          drop-shadow-[0_0_10px_rgba(255,182,193,0.5)]">

    My journey path began <br>
    with a love for curiosity, <br>
    art, and dreamy form.

</p>

</div>


                        <!-- Glow Background -->
                        <div class="absolute inset-0 bg-glow blur-3xl opacity-40 rounded-full"></div>
                        
<!-- Card -->


<div class="absolute -top-14 left-1/2 -translate-x-1/2
            w-[3px] h-14 rounded-full
            bg-gradient-to-b
            from-yellow-200
            via-yellow-400
            to-amber-600
            shadow-[0_0_12px_rgba(255,215,0,0.8)]
            z-50">
</div>


<div class="card-swing relative w-[300px] h-[400px]
            bg-white/10 backdrop-blur-md
            border border-white/20
            rounded-[40px]
            shadow-2xl
            overflow-hidden
            mx-auto flex flex-col items-center justify-center">

    <!-- Glow -->
    <div class="absolute inset-0 bg-pink-300/10"></div>

    <!-- Saturn Ring -->
<div class="absolute w-[420px] h-[420px]
            border border-yellow-200/30
            rounded-full
            rotate-[20deg]
            animate-spin-slow
            shadow-[0_0_35px_rgba(255,215,180,0.35)]
            z-0">
</div>

<!-- Dusty Rose Ring -->
<div class="absolute w-[340px] h-[340px]
            border border-rose-300/30
            rounded-full
            rotate-[-15deg]
            animate-spin-reverse
            shadow-[0_0_30px_rgba(244,172,183,0.35)]
            z-0">
</div>

<!-- Golden Glow -->
<div class="absolute w-[260px] h-[260px]
            rounded-full
            bg-gradient-to-r from-yellow-200/10 via-pink-200/10 to-rose-300/10
            blur-3xl animate-pulse z-0">
</div>

<!-- Orbit Particles -->
<div class="absolute inset-0 flex items-center justify-center z-0">

    <div class="relative w-[120%] h-[120%] animate-spin-slow">

        <div class="absolute top-0 left-1/2 w-3 h-3
                    bg-yellow-200 rounded-full
                    shadow-[0_0_20px_rgba(255,215,0,0.9)]">
        </div>

        <div class="absolute bottom-0 left-1/2 w-2 h-2
                    bg-rose-300 rounded-full
                    shadow-[0_0_18px_rgba(244,172,183,0.9)]">
        </div>

        <div class="absolute left-0 top-1/2 w-2 h-2
                    bg-pink-200 rounded-full">
        </div>

        <div class="absolute right-0 top-1/2 w-2 h-2
                    bg-yellow-100 rounded-full">
        </div>

    </div>

</div>

    <div id="profile-card"
     class="profile-glow profile-spin relative rounded-full p-1">

    <img src="{{ asset('img/WhatsApp_Image_2026-05-14_at_22.06.22-removebg-preview.png') }}"
         alt="Nazwa"
         class="w-[190px] h-[190px] object-cover rounded-full relative z-10">

</div>

<!-- SPOTIFY MUSIC CARD -->
<a href="https://open.spotify.com/track/1fDFHXcykq4iw8Gg7s5hG9"
   target="_blank"
   class="group relative z-20 mt-6
          flex items-center gap-4
          px-6 py-4
          rounded-[28px]
          overflow-hidden
          border border-rose-200/30
          bg-[#c98f9f]/20
          backdrop-blur-xl
          shadow-[0_0_35px_rgba(201,143,159,0.35)]
          hover:scale-105
          transition duration-500">

    <!-- GLOW -->
    <div class="absolute inset-0
                bg-gradient-to-r
                from-[#c98f9f]/20
                via-[#e7b8c4]/20
                to-[#d9a3b3]/20
                opacity-80">
    </div>

    <!-- BLUR ORB -->
    <div class="absolute -left-10 w-32 h-32
                bg-rose-300/30
                rounded-full blur-3xl">
    </div>

    <!-- SPOTIFY ICON -->
    <div class="relative z-10
                w-14 h-14
                rounded-full
                bg-[#d9a3b3]/40
                flex items-center justify-center
                shadow-[0_0_20px_rgba(255,182,193,0.45)]">

        <i class="fa-brands fa-spotify text-white text-2xl"></i>

    </div>

    <!-- TEXT -->
    <div class="relative z-10 flex-1">

        <p class="text-[11px]
                  uppercase
                  tracking-[3px]
                  text-rose-100/80">

            Now Playing

        </p>

        <h4 class="text-white
                   text-lg
                   font-semibold
                   leading-tight">

            About You

        </h4>

        <span class="text-rose-100 text-sm">
            The 1975
        </span>

        <!-- AUDIO WAVE -->
        <div class="flex items-end gap-[3px] mt-3 h-8">

            <span class="wave-bar h-3"></span>
            <span class="wave-bar h-6"></span>
            <span class="wave-bar h-4"></span>
            <span class="wave-bar h-7"></span>
            <span class="wave-bar h-5"></span>
            <span class="wave-bar h-3"></span>
            <span class="wave-bar h-6"></span>

        </div>

    </div>

</a>


         

    <!-- Title -->
    <div class="relative z-20 text-center mt-2">

        <h2 class="text-primary text-2xl tracking-widest font-semibold">
            <span class="font-[cursive] text-pink-200">
                𝓟𝓻𝓸𝓯𝓲𝓵𝓮
            </span>
        </h2>

        <p class="text-pink-100 text-sm mt-2 tracking-wide">
            <span class="font-[cursive]">
                𝓝𝓪𝔃𝔀𝓪 𝓦𝓮𝓫 𝓓𝓮𝓿𝓮𝓵𝓸𝓹𝓮𝓻
            </span>
        </p>

    </div>

    <!-- Blob -->
    <span class="absolute inset-0 flex items-center justify-center -z-10">
        <svg width="320" height="320"
             viewBox="0 0 200 200"
             xmlns="http://www.w3.org/2000/svg">

            <path fill="#fda4af"
                d="M53.4,-57.8C66.6,-52.5,73.1,-33.3,71.8,-16.2C70.6,0.8,61.8,15.7,53.5,31.7C45.2,47.6,37.5,64.7,25.8,67.4C14.2,70,-1.3,58.2,-17.5,51.1C-33.7,43.9,-50.5,41.4,-61.5,31.2C-72.5,21.1,-77.6,3.2,-73.1,-11.2C-68.5,-25.6,-54.3,-36.7,-40.5,-41.8C-26.7,-47,-13.3,-46.3,3.4,-50.3C20.1,-54.4,40.2,-63.1,53.4,-57.8Z"
                transform="translate(100 100) scale(1.2)" />
        </svg>
    </span>

</div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Hero Section End -->


    <!-- About & Social Section Start -->

    
    <section id="about" class="py-24 relative overflow-hidden">

    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- About Me -->
            <div class="about-card bg-bgn backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-pink">

               <h2 class="text-3xl md:text-4xl text-dark font-aesthetic mb-6">
    ♡ About Me ♡
</h2>


<p class="text-rose leading-relaxed">

    𝐂𝐮𝐫𝐫𝐞𝐧𝐭𝐥𝐲 𝐬𝐭𝐮𝐝𝐲𝐢𝐧𝐠 𝐚𝐭 
    𝐔𝐧𝐢𝐯𝐞𝐫𝐬𝐢𝐭𝐚𝐬 𝐌𝐚𝐥𝐢𝐤𝐮𝐬𝐬𝐚𝐥𝐞𝐡 
    𝐰𝐢𝐭𝐡 𝐚 𝐬𝐭𝐫𝐨𝐧𝐠 𝐢𝐧𝐭𝐞𝐫𝐞𝐬𝐭 
    𝐢𝐧 𝐔𝐗 𝐃𝐞𝐬𝐢𝐠𝐧, 
    𝐌𝐨𝐛𝐢𝐥𝐞 𝐀𝐩𝐩𝐥𝐢𝐜𝐚𝐭𝐢𝐨𝐧 
    𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭, 𝐚𝐧𝐝 
    𝐖𝐞𝐛 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭, 
    𝐚𝐧𝐝 𝐜𝐨𝐦𝐦𝐢𝐭𝐭𝐞𝐝 𝐭𝐨 
    𝐜𝐨𝐧𝐭𝐢𝐧𝐮𝐨𝐮𝐬𝐥𝐲 𝐢𝐦𝐩𝐫𝐨𝐯𝐢𝐧𝐠 
    𝐬𝐤𝐢𝐥𝐥𝐬 𝐢𝐧 𝐭𝐡𝐞𝐬𝐞 𝐟𝐢𝐞𝐥𝐝𝐬.

    <br><br>

    𝐀𝐛𝐥𝐞 𝐭𝐨 𝐮𝐬𝐞 𝐅𝐢𝐠𝐦𝐚, 
    𝐮𝐧𝐝𝐞𝐫𝐬𝐭𝐚𝐧𝐝 𝐛𝐚𝐬𝐢𝐜 
    𝐔𝐈/𝐔𝐗 𝐩𝐫𝐢𝐧𝐜𝐢𝐩𝐥𝐞𝐬, 
    𝐚𝐧𝐝 𝐡𝐚𝐯𝐞 𝐚 𝐬𝐭𝐫𝐨𝐧𝐠 
    𝐬𝐞𝐧𝐬𝐞 𝐨𝐟 𝐮𝐬𝐞𝐫 
    𝐞𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐞. 
    𝐎𝐩𝐞𝐧 𝐭𝐨 𝐟𝐞𝐞𝐝𝐛𝐚𝐜𝐤 
    𝐚𝐧𝐝 𝐜𝐨𝐧𝐭𝐢𝐧𝐮𝐨𝐮𝐬 
    𝐢𝐦𝐩𝐫𝐨𝐯𝐞𝐦𝐞𝐧𝐭, 
    𝐰𝐢𝐭𝐡 𝐞𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐞 
    𝐢𝐧 𝐟𝐫𝐨𝐧𝐭𝐞𝐧𝐝 
    𝐝𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭 𝐚𝐧𝐝 
    𝐩𝐫𝐨𝐟𝐢𝐜𝐢𝐞𝐧𝐜𝐲 𝐢𝐧 
    𝐇𝐓𝐌𝐋, 𝐂𝐒𝐒, 
    𝐚𝐧𝐝 𝐉𝐚𝐯𝐚𝐒𝐜𝐫𝐢𝐩𝐭.

    <br><br>

    𝐄𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐞𝐝 𝐢𝐧 
    𝐮𝐬𝐢𝐧𝐠 𝐦𝐨𝐝𝐞𝐫𝐧 
    𝐟𝐫𝐨𝐧𝐭𝐞𝐧𝐝 
    𝐟𝐫𝐚𝐦𝐞𝐰𝐨𝐫𝐤𝐬 
    𝐬𝐮𝐜𝐡 𝐚𝐬 𝐑𝐞𝐚𝐜𝐭 
    𝐨𝐫 𝐬𝐢𝐦𝐢𝐥𝐚𝐫 
    𝐭𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐢𝐞𝐬, 
    𝐚𝐧𝐝 𝐮𝐧𝐝𝐞𝐫𝐬𝐭𝐚𝐧𝐝 
    𝐫𝐞𝐬𝐩𝐨𝐧𝐬𝐢𝐯𝐞 𝐝𝐞𝐬𝐢𝐠𝐧 
    𝐩𝐫𝐢𝐧𝐜𝐢𝐩𝐥𝐞𝐬 𝐚𝐬 
    𝐰𝐞𝐥𝐥 𝐚𝐬 
    𝐜𝐫𝐨𝐬𝐬-𝐛𝐫𝐨𝐰𝐬𝐞𝐫 
    𝐜𝐨𝐦𝐩𝐚𝐭𝐢𝐛𝐢𝐥𝐢𝐭𝐲.

    <br><br>

    𝐅𝐚𝐦𝐢𝐥𝐢𝐚𝐫 𝐰𝐢𝐭𝐡 
    𝐯𝐞𝐫𝐬𝐢𝐨𝐧 𝐜𝐨𝐧𝐭𝐫𝐨𝐥 
    𝐬𝐲𝐬𝐭𝐞𝐦𝐬 𝐬𝐮𝐜𝐡 
    𝐚𝐬 𝐆𝐢𝐭, 𝐩𝐨𝐬𝐬𝐞𝐬𝐬 
    𝐬𝐭𝐫𝐨𝐧𝐠 
    𝐩𝐫𝐨𝐛𝐥𝐞𝐦-𝐬𝐨𝐥𝐯𝐢𝐧𝐠 
    𝐬𝐤𝐢𝐥𝐥𝐬 𝐚𝐧𝐝 
    𝐚𝐭𝐭𝐞𝐧𝐭𝐢𝐨𝐧 𝐭𝐨 
    𝐝𝐞𝐭𝐚𝐢𝐥, 𝐚𝐛𝐥𝐞 
    𝐭𝐨 𝐰𝐨𝐫𝐤 
    𝐢𝐧𝐝𝐞𝐩𝐞𝐧𝐝𝐞𝐧𝐭𝐥𝐲 
    𝐚𝐧𝐝 
    𝐜𝐨𝐥𝐥𝐚𝐛𝐨𝐫𝐚𝐭𝐢𝐯𝐞𝐥𝐲 
    𝐢𝐧 𝐚 𝐟𝐚𝐬𝐭-𝐩𝐚𝐜𝐞𝐝 
    𝐞𝐧𝐯𝐢𝐫𝐨𝐧𝐦𝐞𝐧𝐭, 
    𝐚𝐧𝐝 𝐡𝐚𝐯𝐞 𝐚 
    𝐬𝐭𝐫𝐨𝐧𝐠 𝐬𝐞𝐧𝐬𝐞 
    𝐨𝐟 𝐫𝐞𝐬𝐩𝐨𝐧𝐬𝐢𝐛𝐢𝐥𝐢𝐭𝐲 
    𝐚𝐧𝐝 𝐨𝐰𝐧𝐞𝐫𝐬𝐡𝐢𝐩 
    𝐢𝐧 𝐝𝐞𝐥𝐢𝐯𝐞𝐫𝐢𝐧𝐠 
    𝐡𝐢𝐠𝐡-𝐪𝐮𝐚𝐥𝐢𝐭𝐲 
    𝐰𝐨𝐫𝐤 ✨

</p>
            </div>
<div class="sparkle sparkle1">✦</div>
<div class="sparkle sparkle2">✧</div>
<div class="sparkle sparkle3">♡</div>
            <!-- Mari Berteman -->
<div id="contact"
     class="contact-card
            w-full max-w-[420px]
            mx-auto
            bg-bgn backdrop-blur-lg
            rounded-3xl shadow-xl
            p-8 border border-pink
            relative overflow-hidden">

                <h2 class="text-3xl md:text-4xl text-dark font-aesthetic mb-6">
                    ♡ Mari Berteman ♡
                </h2>

                <p class="text-rose leading-relaxed mb-8">
                    𝐀𝐲𝐨𝐨 𝐦𝐚𝐫𝐢 𝐛𝐞𝐫𝐭𝐞𝐦𝐚𝐧 𝐝𝐚𝐧
                    𝐬𝐚𝐥𝐢𝐧𝐠 𝐭𝐞𝐫𝐡𝐮𝐛𝐮𝐧𝐠 💕
                    𝐊𝐚𝐦𝐮 𝐛𝐢𝐬𝐚 𝐡𝐮𝐛𝐮𝐧𝐠𝐢 𝐚𝐤𝐮
                    𝐝𝐢 𝐬𝐨𝐬𝐢𝐚𝐥 𝐦𝐞𝐝𝐢𝐚 𝐝𝐢 𝐛𝐚𝐰𝐚𝐡 𝐢𝐧𝐢 ✨
                </p>

                <div class="flex justify-center flex-wrap gap-4 mt-6"> 

                    <!-- WhatsApp -->
                    <div class="flex justify-center flex-wrap gap-4 mt-6">

    <!-- WhatsApp -->
    <a href="https://wa.me/6289654521599"
       target="_blank"
       class="bg-dark text-pink w-14 h-14 rounded-full flex items-center justify-center
              hover:bg-rose hover:scale-110 transition duration-300 text-2xl">

        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Instagram -->
    <a href="https://instagram.com/nzwaulia.03"
       target="_blank"
       class="bg-dark text-pink w-14 h-14 rounded-full flex items-center justify-center
              hover:bg-rose hover:scale-110 transition duration-300 text-2xl">

        <i class="fa-brands fa-instagram"></i>
    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/nazwa-putri-aulia-86b88b311?utm_source=share_via&utm_content=profile&utm_medium=member_android"
       target="_blank"
       class="bg-dark text-pink w-14 h-14 rounded-full flex items-center justify-center
              hover:bg-rose hover:scale-110 transition duration-300 text-2xl">

        <i class="fa-brands fa-linkedin-in"></i>
    </a>

  <!-- YouTube -->
<a href="https://youtube.com/@nzwaulia.03?si=3CFkS3UK-gLQUn-F"
   target="_blank"
   class="bg-dark text-pink w-14 h-14 rounded-full flex items-center justify-center
          hover:bg-rose hover:scale-110 transition duration-300">

    <svg role="img"
         width="24"
         viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg"
         fill="currentColor">

        <title>YouTube</title>

        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
    </svg>

</a>
   

</div>
                </div>

            </div>

        </div>

    </div>

    <div class="sparkle sparkle1">✦</div>
<div class="sparkle sparkle2">♡</div>
<div class="sparkle sparkle3">✧</div>



</section>


 
<!-- TITLE -->
<div class="text-center mt-16 mb-10">

    <h2 class="font-['Great_Vibes']
               text-[40px]
               md:text-[78px]
               text-[#6b213f]
               drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

        UKM - Himpunan

    </h2>

</div>

<!-- CIRCULAR GALLERY -->
<div id="circular-gallery" class="w-full h-[600px]"></div>

<!-- About & Social Section End -->

<!-- Project Section Start -->
<section id="project"
class="min-h-[90vh] py-24 relative overflow-hidden">

    <!-- Background Blur -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px]
                bg-pink-200/30 blur-3xl rounded-full">
    </div>

    <div class="absolute bottom-0 right-0 w-[400px] h-[400px]
                bg-rose-200/30 blur-3xl rounded-full">
    </div>

    <!-- Floating Sakura -->
    <div class="absolute top-20 left-20 text-4xl animate-bounce">
        🌸
    </div>

    <div class="absolute bottom-32 right-24 text-3xl animate-pulse">
        ✦
    </div>

    <div class="container mx-auto px-6 relative z-10">

        <!-- Title -->
        <div class="text-center mb-16">

            <h2 class="text-4xl md:text-5xl
                       font-['Great_Vibes']
                       text-[#6b213f]
                       drop-shadow-lg">

                Welcome to Nazwa’s
                <br>
                Creative Corner
            </h2>

            <p class="mt-6 text-lg text-rose-700 max-w-2xl mx-auto">

                 𝕳𝖊𝖗𝖊 𝖆𝖗𝖊 𝖘𝖔𝖒𝖊 𝖆𝖊𝖘𝖙𝖍𝖊𝖙𝖎𝖈 𝖕𝖗𝖔𝖏𝖊𝖈𝖙𝖘
    𝖆𝖓𝖉 𝖒𝖔𝖉𝖊𝖗𝖓 𝖀𝕴 𝖉𝖊𝖘𝖎𝖌𝖓𝖘
    𝖙𝖍𝖆𝖙 𝕴 𝖈𝖗𝖊𝖆𝖙𝖊𝖉
    𝖚𝖘𝖎𝖓𝖌
    𝕷𝖆𝖗𝖆𝖛𝖊𝖑 &
    𝕿𝖆𝖎𝖑𝖜𝖎𝖓𝖉 𝕮𝕾𝕾 ✨

            </p>

        </div>

        <!-- Project Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <!-- CARD 1 -->

            <div class="group relative bg-white/50
                        backdrop-blur-xl
                        rounded-[28px]
                        border border-white/40
                        shadow-2xl
                        overflow-hidden
                        hover:scale-105
                        transition duration-500">

                <!-- Glow -->
                <div class="absolute inset-0
                            bg-pink-300/10
                            opacity-0
                            group-hover:opacity-100
                            transition duration-500">
                </div>

                <!-- Image -->
                     <img src="{{ asset('img/Screenshot (637).png') }}"
     class="w-full h-44 object-cover">

                <!-- Content -->
                <div class="p-4 relative z-10">

                    <h3 class="text-xl font-semibold text-dark">
                        Portofolio Version1
                    </h3>

                    <p class="mt-3 text-rose">
                     UI design with dreamy
                        modern aesthetic concept.
                    </p>

                   <a href="https://nazwa240170020-lang.github.io/myportofolio/"
   target="_blank"
   class="inline-block mt-5
          px-5 py-1.5 text-sm
          rounded-full
          bg-dark text-pink
          hover:bg-rose hover:text-white
          transition">

    View Project ✦

</a>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="group relative bg-white/50
                        backdrop-blur-xl
                        rounded-[28px]
                        border border-white/40
                        shadow-2xl
                        overflow-hidden
                        hover:scale-105
                        transition duration-500">

                <div class="absolute inset-0
                            bg-pink-300/10
                            opacity-0
                            group-hover:opacity-100
                            transition duration-500">
                </div>

                     <img src="{{ asset('img/Screenshot (638).png') }}"
     class="w-full h-44 object-cover">

                <div class="p-4 relative z-10">

                    <h3 class="text-xl font-semibold text-dark">
                        Portfolio UI Version 2
                    </h3>

                    <p class="mt-3 text-rose">
                        Elegant web portfolio with glassmorphism
                        and luxury pink style.
                    </p>
<a href="#project"
   class="inline-block mt-5
          px-5 py-1.5 text-sm
          rounded-full
          bg-dark text-pink
          hover:bg-rose hover:text-white
          transition">

    View Project ✦
</a>

                </div>

            </div>
<!-- CARD 3 -->
<div class="group relative bg-white/50
            backdrop-blur-xl
            rounded-[28px]
            border border-white/40
            shadow-2xl
            overflow-hidden
            hover:scale-105
            transition duration-500">

    <div class="absolute inset-0
                bg-pink-300/10
                opacity-0
                group-hover:opacity-100
                transition duration-500">
    </div>

    <img src="{{ asset('img/Screenshot (642).png') }}"
         class="w-full h-44 object-cover">

    <div class="p-4 relative z-10">

        <h3 class="text-xl font-semibold text-dark">
            Web Rawat Inap Rumah Sakit
        </h3>

        <p class="mt-3 text-rose">
             Project ini untuk proses administrasi pasien
    rawat inap💕
        </p>

        <a href="/rawat-inap"
           class="inline-block mt-5 px-5 py-1.5 text-sm rounded-full bg-dark text-pink hover:bg-rose hover:text-white transition">
            View Project ✦
        </a>

    </div>

</div>

<!-- CARD 4 -->
<div class="group relative bg-white/50
            backdrop-blur-xl
            rounded-[28px]
            border border-white/40
            shadow-2xl
            overflow-hidden
            hover:scale-105
            transition duration-500">

    <div class="absolute inset-0
                bg-pink-300/10
                opacity-0
                group-hover:opacity-100
                transition duration-500"></div>

    <img src="{{ asset('img/Screenshot (643).png') }}"
         class="w-full h-44 object-cover">

    <div class="p-4 relative z-10">

        <h3 class="text-xl font-semibold text-dark">
            Web Sistem Informasi Akademik
        </h3>

        <p class="mt-3 text-rose">
              Website ini dibuat untuk data akademik dengan tampilan modern terorganisir ✨
        </p>

        <a href="/sia"
           class="inline-block mt-5 px-5 py-1.5 text-sm rounded-full
                  bg-dark text-pink
                  hover:bg-rose hover:text-white
                  transition">
            View Project ✦
        </a>

    </div>
</div>

<!-- CARD 5 -->
<div class="group relative bg-white/50
            backdrop-blur-xl
            rounded-[28px]
            border border-white/40
            shadow-2xl
            overflow-hidden
            hover:scale-105
            transition duration-500">

    <div class="absolute inset-0
                bg-pink-300/10
                opacity-0
                group-hover:opacity-100
                transition duration-500"></div>

    <img src="{{ asset('img/Screenshot (644).png') }}"
         class="w-full h-44 object-cover">

    <div class="p-4 relative z-10">

        <h3 class="text-xl font-semibold text-dark">
            Web Rawat Inap RS 
        </h3>

        <p class="mt-3 text-rose">
            Sistem ini dirancang untuk pengelolaan data pasien rawat inap, menggunakan Java NetBeans✨
        </p>

        <a href="/netbeans"
           class="inline-block mt-5 px-5 py-1.5 text-sm rounded-full
                  bg-dark text-pink
                  hover:bg-rose hover:text-white
                  transition">
            View Project ✦
        </a>

    </div>
</div>
        </div>

    </div>

</section>
<!-- Project Section End -->

<!-- Certificate Section Start -->
<section id="certificate"
class="min-h-screen overflow-hidden relative
       flex items-center justify-center
       py-10 md:py-24">

    <!-- TITLE -->
    <div class="absolute top-8 w-full text-center z-20">
        <h2 class="font-['Great_Vibes']
                   text-[40px]
                   sm:text-[55px]
                   md:text-[80px]
                   text-[#6b213f]
                   drop-shadow-[0_0_15px_rgba(0,0,0,0.5)]">

            A Gilded Gallery of Achievement

        </h2>
    </div>

    <!-- COLLAGE AREA -->
    <div class="relative w-full max-w-7xl
                h-[760px] sm:h-[900px] md:h-[1100px]
                scale-[0.55] sm:scale-[0.75] md:scale-100
                origin-top">

        <!-- CARD 1 CIRCLE -->
        <div class="absolute
                    left-[-8%] top-[26%]
                    sm:left-[-5%] sm:top-[25%]
                    md:left-[-3%] md:top-[24%]

                    w-[320px] h-[320px]
                    rounded-full overflow-hidden
                    border-[10px] border-yellow-300
                    shadow-[0_0_60px_rgba(255,215,0,0.9)]
                    rotate-[-6deg]
                    hover:scale-105 transition duration-500">

            <div class="gold-animated pointer-events-none rounded-full"></div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 06.19.51.jpeg') }}"
                 class="w-full h-full object-cover">

        </div>


        <!-- CARD 2 -->
        <div class="absolute
                    left-[8%] top-[8%]
                    sm:left-[18%] sm:top-[4%]
                    md:left-[20%] md:top-[2%]

                    w-[280px] h-[430px]
                    bg-[#f8f1e7]
                    rounded-[38px]
                    shadow-2xl p-5 rotate-[-3deg]
                    flex flex-col
                    border-[4px] border-[#d6b36a]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[88%] h-[28px]
                        bg-[#e7d3b8]
                        rounded-b-[40px]
                        shadow-md">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[88%] h-[28px]
                        bg-[#e7d3b8]
                        rounded-t-[40px]
                        shadow-md">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.05.33.jpeg') }}"
                 class="w-full h-[315px] object-cover rounded-[24px] mt-4 relative z-10">

            <p class="text-center text-[18px] mt-4 text-black font-bold relative z-10">
                Pythagoras Fisika
            </p>

        </div>


        <!-- CARD 3 -->
        <div class="absolute
                    left-[28%] top-[38%]
                    sm:left-[32%] sm:top-[42%]
                    md:left-[34%] md:top-[44%]

                    w-[320px] h-[540px]
                    bg-[#f8f1e7]
                    rounded-[42px]
                    shadow-2xl p-5 rotate-[4deg]
                    flex flex-col
                    border-[4px] border-[#d6b36a]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[90%] h-[30px]
                        bg-[#e7d3b8]
                        rounded-b-[45px]
                        shadow-md">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[90%] h-[30px]
                        bg-[#e7d3b8]
                        rounded-t-[45px]
                        shadow-md">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.19.47.jpeg') }}"
                 class="w-full h-[390px] object-cover rounded-[28px] mt-5 relative z-10">

            <p class="text-center text-[20px] mt-4 text-black font-bold relative z-10">
                Gypem Medical
            </p>

            <p class="text-center text-[14px] text-black/70 italic mt-1 relative z-10">
                Olympiade
            </p>

        </div>


        <!-- CENTER -->
        <div class="absolute
                    left-[48%] top-[18%]
                    sm:left-[54%] sm:top-[18%]
                    md:left-[57%] md:top-[18%]

                    w-[290px] h-[390px]
                    bg-[#f8f1e7]
                    rounded-[38px]
                    shadow-2xl p-4 flex flex-col
                    border-[4px] border-[#d6b36a]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[88%] h-[26px]
                        bg-[#e7d3b8]
                        rounded-b-[38px]">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[88%] h-[26px]
                        bg-[#e7d3b8]
                        rounded-t-[38px]">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.05.32.jpeg') }}"
                 class="w-full h-[250px] object-cover rounded-2xl mt-4 relative z-10">

            <h3 class="text-center mt-3 text-black text-lg font-semibold relative z-10">
                Lomba Menulis Opini
            </h3>

            <p class="text-center text-[11px] text-black/60 italic relative z-10">
                Universitas Malikussaleh
            </p>

        </div>


        <!-- RIGHT TOP -->
        <div class="absolute
                    right-[2%] top-[6%]
                    sm:right-[-1%] sm:top-[4%]
                    md:right-[-3%] md:top-[3%]

                    w-[300px] h-[500px]
                    bg-[#f8f1e7]
                    rounded-[40px]
                    shadow-2xl p-5 rotate-[6deg]
                    flex flex-col
                    border-[3px] border-[#d6c2a8]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[26px]
                        bg-[#e7d3b8]
                        rounded-b-[40px]">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[26px]
                        bg-[#e7d3b8]
                        rounded-t-[40px]">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.19.56.jpeg') }}"
                 class="w-full h-[360px] object-cover rounded-[24px] mt-4 relative z-10">

            <p class="text-center text-[18px] mt-4 text-black font-semibold relative z-10">
                Gypem Biology
            </p>

        </div>


        <!-- LEFT BOTTOM -->
        <div class="absolute
                    left-[2%] bottom-[6%]
                    sm:left-[5%] sm:bottom-[2%]
                    md:left-[6%] md:bottom-[1%]

                    w-[280px] h-[320px]
                    bg-[#f8f1e7]
                    rounded-[32px]
                    shadow-2xl p-4 rotate-[4deg]
                    flex flex-col
                    border-[3px] border-[#d6c2a8]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[24px]
                        bg-[#e7d3b8]
                        rounded-b-[35px]">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[24px]
                        bg-[#e7d3b8]
                        rounded-t-[35px]">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.41.09.jpeg') }}"
                 class="w-full h-[230px] object-cover rounded-[22px] mt-4 relative z-10">

            <p class="text-center text-[15px] mt-4 text-black font-semibold relative z-10">
                Kementerian Koordinator
            </p>

        </div>


        <!-- RIGHT BOTTOM -->
        <div class="absolute
                    right-[1%] bottom-[3%]
                    sm:right-[4%] sm:bottom-[1%]
                    md:right-[5%] md:bottom-[0%]

                    w-[270px] h-[400px]
                    bg-[#f8f1e7]
                    rounded-[32px]
                    shadow-2xl p-4 rotate-[-5deg]
                    flex flex-col
                    border-[3px] border-[#d6c2a8]
                    hover:scale-105 transition duration-500
                    overflow-hidden">

            <div class="gold-animated pointer-events-none"></div>

            <div class="absolute top-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[24px]
                        bg-[#e7d3b8]
                        rounded-b-[35px]">
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2
                        w-[85%] h-[24px]
                        bg-[#e7d3b8]
                        rounded-t-[35px]">
            </div>

            <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 01.41.21.jpeg') }}"
                 class="w-full h-[300px] object-cover rounded-[22px] mt-4 relative z-10">

            <p class="text-center text-[16px] mt-4 text-black font-semibold relative z-10">
                Olimpiade SKD
            </p>

        </div>

    </div>

</section>
<!-- Certificate Section End -->


<!-- Activities Section Start -->
<section id="activities"
class="min-h-screen py-24 relative overflow-hidden">

    <!-- BACKGROUND BLUR -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px]
                bg-pink-200/30 blur-3xl rounded-full">
    </div>

    <div class="absolute bottom-0 right-0 w-[450px] h-[450px]
                bg-rose-200/30 blur-3xl rounded-full">
    </div>

    <div class="container mx-auto px-4 relative z-10">

        <!-- TITLE -->
        <div class="text-center mb-14">

            <h2 class="font-['Great_Vibes']
                       text-[40px]
                       md:text-[78px]
                       text-[#6b213f]
                       drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

                A Narrative of Creative Evolution

            </h2>

        </div>

        <!-- MAIN BOARD -->
        <div class="relative
                    max-w-7xl mx-auto
                    bg-[#f8dede]/70
                    backdrop-blur-xl
                    border border-white/40
                    rounded-[45px]
                    shadow-2xl
                    p-4 md:p-8
                    overflow-hidden">

            <!-- FLOATING DECOR -->
            <div class="absolute top-8 left-10 text-4xl animate-pulse">
                🌸
            </div>

            <div class="absolute bottom-8 right-12 text-3xl animate-bounce">
                ✦
            </div>

            <!-- DESKTOP LAYOUT -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                <!-- LEFT BIG CARD -->
                <div class="col-span-5">

    <div class="bg-[#fff3f3]
                rounded-[35px]
                border-[4px] border-[#f2c5c5]
                shadow-2xl
                p-5
                relative
                h-full
                overflow-hidden">

        <!-- ORBIT GLOW RINGS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <!-- OUTER RING -->
            <div class="w-[150%] h-[150%] rounded-full
                        border-[3px] border-rose-300/40
                        shadow-[0_0_50px_rgba(244,172,183,0.6)]
                        animate-spin-slow">
            </div>

        </div>

        <!-- INNER RING -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="w-[125%] h-[125%] rounded-full
                        border-[2px] border-[#d9a3b3]/40
                        blur-[1px]
                        shadow-[0_0_40px_rgba(217,163,179,0.5)]
                        animate-spin-reverse">
            </div>

        </div>

        <!-- SPARKLE ORBIT DOTS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="relative w-[140%] h-[140%] animate-spin-slow">

                <div class="absolute top-0 left-1/2 w-2 h-2 bg-rose-300 rounded-full shadow-[0_0_15px_rgba(244,172,183,0.9)]"></div>

                <div class="absolute bottom-0 left-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>

                <div class="absolute left-0 top-1/2 w-1.5 h-1.5 bg-[#d9a3b3] rounded-full"></div>

                <div class="absolute right-0 top-1/2 w-2 h-2 bg-rose-200 rounded-full shadow-[0_0_12px_rgba(244,172,183,0.8)]"></div>

            </div>

        </div>

        <!-- CONTENT WRAPPER -->
        <div class="relative z-10">

            <!-- TOP -->
            <div class="flex gap-4">

                <!-- PROFILE -->
                <div class="bg-white
                            rounded-[24px]
                            p-2
                            shadow-lg
                            w-[120px]
                            shrink-0">

                    <img src="{{ asset('img/image.png') }}"
                         class="w-full h-[150px]
                                object-cover
                                rounded-[18px]">

                    <div class="text-center mt-3">

                        <h4 class="text-[#6b213f] font-bold text-sm">
                            WEB DESIGN
                        </h4>

                        <p class="text-[11px] text-rose-500">
                            Activities
                        </p>

                    </div>

                </div>

                <!-- TEXT -->
                <div class="flex-1">

                    <h3 class="text-[28px] leading-tight text-[#6b213f] font-semibold">
                        WEB DESIGN ACTIVITIES
                    </h3>

                    <ul class="mt-4 text-rose-700 space-y-2 text-[15px]">

                        <li>✦ Creative Web Experience</li>
                        <li>✦ Responsive Web Design</li>
                        <li>✦ Landing Page Design</li>

                    </ul>

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="mt-6">

                <h4 class="text-[#6b213f] text-xl font-semibold mb-3">
                    Activities Showcase
                </h4>

                <div class="grid grid-cols-3 gap-3">

                    <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 17.13.21.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                    <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 17.13.22.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                    <img src="{{ asset('img/WhatsApp Image 2026-05-17 at 17.13.22.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                </div>

            </div>

        </div>

    </div>

</div>
           <!-- CENTER SMALL CARD -->
<div class="col-span-2 flex items-center">

    <div class="bg-[#fceaea]
                rounded-[35px]
                border-[4px] border-[#f2c5c5]
                shadow-2xl
                p-4
                rotate-[-2deg]
                h-[420px]
                flex flex-col justify-center items-center
                relative
                overflow-hidden">

        <!-- ORBIT GLOW OUTER -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="w-[160%] h-[160%] rounded-full
                        border-[3px] border-rose-300/40
                        shadow-[0_0_50px_rgba(244,172,183,0.5)]
                        animate-spin-slow">
            </div>

        </div>

        <!-- ORBIT INNER -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="w-[130%] h-[130%] rounded-full
                        border-[2px] border-[#d9a3b3]/30
                        blur-[1px]
                        animate-spin-reverse
                        shadow-[0_0_40px_rgba(217,163,179,0.4)]">
            </div>

        </div>

        <!-- SPARKLE DOTS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="relative w-[140%] h-[140%] animate-spin-slow">

                <div class="absolute top-0 left-1/2 w-2 h-2 bg-rose-300 rounded-full shadow-[0_0_12px_rgba(244,172,183,0.8)]"></div>

                <div class="absolute bottom-0 left-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>

                <div class="absolute left-0 top-1/2 w-1.5 h-1.5 bg-[#d9a3b3] rounded-full"></div>

                <div class="absolute right-0 top-1/2 w-2 h-2 bg-rose-200 rounded-full shadow-[0_0_10px_rgba(244,172,183,0.7)]"></div>

            </div>

        </div>

        <!-- CONTENT WRAPPER -->
        <div class="relative z-10 flex flex-col justify-center items-center">

            <img src="{{ asset('img/A1.jpeg') }}"
                 class="w-full h-[280px]
                        object-cover
                        rounded-[24px]
                        shadow-lg">

            <h3 class="mt-4 text-[#6b213f] text-xl font-semibold text-center">
                Artistic Vibes
            </h3>

        </div>

    </div>

</div>

                <!-- RIGHT BIG CARD -->
                <div class="col-span-5">

    <div class="bg-[#fff3f3]
                rounded-[35px]
                border-[4px] border-[#f2c5c5]
                shadow-2xl
                p-5
                relative
                h-full
                overflow-hidden">

        <!-- ORBIT GLOW RINGS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <!-- OUTER RING -->
            <div class="w-[150%] h-[150%] rounded-full
                        border-[3px] border-rose-300/40
                        shadow-[0_0_50px_rgba(244,172,183,0.6)]
                        animate-spin-slow">
            </div>

        </div>

        <!-- INNER RING -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="w-[125%] h-[125%] rounded-full
                        border-[2px] border-[#d9a3b3]/40
                        blur-[1px]
                        shadow-[0_0_40px_rgba(217,163,179,0.5)]
                        animate-spin-reverse">
            </div>

        </div>

        <!-- SPARKLE ORBIT DOTS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="relative w-[140%] h-[140%] animate-spin-slow">

                <div class="absolute top-0 left-1/2 w-2 h-2 bg-rose-300 rounded-full shadow-[0_0_15px_rgba(244,172,183,0.9)]"></div>

                <div class="absolute bottom-0 left-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>

                <div class="absolute left-0 top-1/2 w-1.5 h-1.5 bg-[#d9a3b3] rounded-full"></div>

                <div class="absolute right-0 top-1/2 w-2 h-2 bg-rose-200 rounded-full shadow-[0_0_12px_rgba(244,172,183,0.8)]"></div>

            </div>

        </div>

        <!-- CONTENT WRAPPER -->
        <div class="relative z-10">

                        <div class="flex gap-4">

                            <!-- PROFILE -->
                            <div class="bg-white
                                        rounded-[24px]
                                        p-2
                                        shadow-lg
                                        w-[120px]
                                        shrink-0">

                                <img src="{{ asset('img/jpg1.png.jpeg') }}"
                                     class="w-full h-[150px]
                                            object-cover
                                            rounded-[18px]">

                                <div class="text-center mt-3">

                                    <h4 class="text-[#6b213f]
                                               font-bold text-sm">
                                        FRONTEND
                                    </h4>

                                    <p class="text-[11px] text-rose-500">
                                        Activities
                                    </p>

                                </div>

                            </div>
<!-- TEXT -->
                            <div class="flex-1">

                                <h3 class="text-[28px]
                                           leading-tight
                                           text-[#6b213f]
                                           font-semibold">

                                    FRONTEND ACTIVITIES

                                </h3>

                                <ul class="mt-4
                                           text-rose-700
                                           space-y-2
                                           text-[15px]">

                                    <li>✦ Website Performance Optimization</li>
                                    <li>✦ APIIntegration UI </li>
                                    <li>✦ Responsive Website Development</li>
                                    

                                </ul>

                            </div>

                        </div>

                        <!-- BOTTOM -->
                        <div class="mt-6">

                            <h4 class="text-[#6b213f]
                                       text-xl
                                       font-semibold mb-3">

                                Activities Showcase

                            </h4>

                            <div class="grid grid-cols-3 gap-3">

                                <img src="{{ asset('img/F1.jpeg') }}"
                                     class="rounded-2xl h-[110px] object-cover shadow-lg">

                                <img src="{{ asset('img/F2.jpeg') }}"
                                     class="rounded-2xl h-[110px] object-cover shadow-lg">

                                <img src="{{ asset('img/F3.jpeg') }}"
                                     class="rounded-2xl h-[110px] object-cover shadow-lg">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            
        </div>

       <!-- SECOND ROW ACTIVITIES -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">

    <!-- LEFT CARD -->
    <div class="col-span-5">
        <div class="bg-[#fff3f3]
                    rounded-[35px]
                    border-[4px] border-[#f2c5c5]
                    shadow-2xl
                    p-5
                    relative
                    h-full
                    overflow-hidden">

            <!-- ORBIT -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="w-[150%] h-[150%] rounded-full border-[3px] border-rose-300/40 shadow-[0_0_50px_rgba(244,172,183,0.6)] animate-spin-slow"></div>
            </div>

            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="w-[125%] h-[125%] rounded-full border-[2px] border-[#d9a3b3]/40 blur-[1px] shadow-[0_0_40px_rgba(217,163,179,0.5)] animate-spin-reverse"></div>
            </div>

            <div class="relative z-10">

                <div class="flex gap-4">
                    <div class="bg-white rounded-[24px] p-2 shadow-lg w-[120px] shrink-0">
                        <img src="{{ asset('img/M1.jpeg') }}" class="w-full h-[150px] object-cover rounded-[18px]">
                        <div class="text-center mt-3">
                            <h4 class="text-[#6b213f] font-bold text-sm">MOBILE APP</h4>
                            <p class="text-[11px] text-rose-500">Activities</p>
                        </div>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-[28px] leading-tight text-[#6b213f] font-semibold">
                            MOBILE APP DEVELOPMENT ACTIVITIES
                        </h3>

                        <ul class="mt-4 text-rose-700 space-y-2 text-[15px]">
                            <li>✦ Social Media App UI Design</li>
                            <li>✦ iOS App Concept</li>
                            <li>✦ Modern Mobile Dashboard</li>
                        </ul>
                    </div>
                </div>

                <div class="my-6 border-t border-dashed border-[#e9b7b7]"></div>

                <h4 class="text-[#6b213f] text-xl font-semibold mb-3">
                    Activities Showcase
                </h4>

                <div class="grid grid-cols-3 gap-3">
                    <img src="{{ asset('img/M2.jpeg') }}" class="rounded-2xl h-[110px] object-cover shadow-lg">
                    <img src="{{ asset('img/M3.jpeg') }}" class="rounded-2xl h-[110px] object-cover shadow-lg">
                    <img src="{{ asset('img/M4.jpeg') }}" class="rounded-2xl h-[110px] object-cover shadow-lg">
                </div>

            </div>
        </div>
    </div>

    <!-- CENTER CARD -->
    <div class="col-span-2 flex items-center">
        <div class="bg-[#fceaea]
                    rounded-[35px]
                    border-[4px] border-[#f2c5c5]
                    shadow-2xl
                    p-4
                    h-[420px]
                    flex flex-col justify-center items-center
                    relative
                    overflow-hidden">

            <!-- ORBIT -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="w-[160%] h-[160%] rounded-full border-[3px] border-rose-300/40 animate-spin-slow"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center">
                <img src="{{ asset('img/A1.jpeg') }}" class="w-full h-[280px] object-cover rounded-[24px] shadow-lg">
                <h3 class="mt-4 text-[#6b213f] text-xl font-semibold text-center">
                    Elegant Creativity
                </h3>
            </div>

        </div>
    </div>

   <!-- RIGHT CARD (UX DESIGN - FINAL VERSION) -->
<div class="col-span-5">

    <div class="bg-[#fff3f3]
                rounded-[35px]
                border-[4px] border-[#f2c5c5]
                shadow-2xl
                p-5
                relative
                h-full
                overflow-hidden">

        <!-- ORBIT GLOW RINGS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <!-- OUTER RING -->
            <div class="w-[150%] h-[150%] rounded-full
                        border-[3px] border-rose-300/40
                        shadow-[0_0_50px_rgba(244,172,183,0.6)]
                        animate-spin-slow">
            </div>

        </div>

        <!-- INNER RING -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="w-[125%] h-[125%] rounded-full
                        border-[2px] border-[#d9a3b3]/40
                        blur-[1px]
                        shadow-[0_0_40px_rgba(217,163,179,0.5)]
                        animate-spin-reverse">
            </div>

        </div>

        <!-- SPARKLE DOTS -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

            <div class="relative w-[140%] h-[140%] animate-spin-slow">

                <div class="absolute top-0 left-1/2 w-2 h-2 bg-rose-300 rounded-full shadow-[0_0_15px_rgba(244,172,183,0.9)]"></div>

                <div class="absolute bottom-0 left-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>

                <div class="absolute left-0 top-1/2 w-1.5 h-1.5 bg-[#d9a3b3] rounded-full"></div>

                <div class="absolute right-0 top-1/2 w-2 h-2 bg-rose-200 rounded-full shadow-[0_0_12px_rgba(244,172,183,0.8)]"></div>

            </div>

        </div>

        <!-- CONTENT -->
        <div class="relative z-10">

            <div class="flex gap-4">

                <!-- PROFILE -->
                <div class="bg-white
                            rounded-[24px]
                            p-2
                            shadow-lg
                            w-[120px]
                            shrink-0">

                    <img src="{{ asset('img/U1.jpeg') }}"
                         class="w-full h-[150px]
                                object-cover
                                rounded-[18px]">

                    <div class="text-center mt-3">

                        <h4 class="text-[#6b213f] font-bold text-sm">
                            UX DESIGN
                        </h4>

                        <p class="text-[11px] text-rose-500">
                            Activities
                        </p>

                    </div>

                </div>

                <!-- TEXT -->
                <div class="flex-1">

                    <h3 class="text-[28px]
                               leading-tight
                               text-[#6b213f]
                               font-semibold">

                        UX DESIGN ACTIVITIES

                    </h3>

                    <ul class="mt-4
                               text-rose-700
                               space-y-2
                               text-[15px]">

                        <li>✦ Interactive Testing</li>
                        <li>✦ Interactive Prototype</li>
                        <li>✦ User Flow Design</li>

                    </ul>

                </div>

            </div>

            <!-- BOTTOM -->
            <div class="mt-6">

                <h4 class="text-[#6b213f]
                           text-xl
                           font-semibold mb-3">

                    Activities Showcase

                </h4>

                <div class="grid grid-cols-3 gap-3">

                    <img src="{{ asset('img/U2.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                    <img src="{{ asset('img/U3.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                    <img src="{{ asset('img/U4.jpeg') }}"
                         class="rounded-2xl h-[110px] object-cover shadow-lg">

                </div>

            </div>

        </div>

        

    </div>


    
</div>
</div> <!-- END RIGHT CARD -->
</div> <!-- END SECOND ROW GRID -->
</div> <!-- END CONTAINER -->
</section>
<!-- Activities Section End -->

<!-- TECH STACK TITLE -->
<div class="text-center mt-16 mb-14">

    <h2 class="font-['Great_Vibes']
               text-[40px]
               md:text-[78px]
               text-[#6b213f]
               drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">

        Tech Stack

    </h2>

</div>

<!-- LOGO LOOP -->
<div id="logo-loop-section"></div>


<!-- Closing Section Start -->
<section id="closing"
class="min-h-screen flex items-center justify-center
relative overflow-hidden px-6 py-20">

    <!-- Soft Background Glow -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px]
                bg-pink-200/30 blur-3xl rounded-full">
    </div>

    <div class="absolute bottom-0 right-0 w-[400px] h-[400px]
                bg-rose-200/30 blur-3xl rounded-full">
    </div>

    <!-- Floating Sparkles -->
    <div class="absolute top-24 left-16 text-3xl animate-pulse">
        ✦
    </div>

    <div class="absolute top-40 right-24 text-4xl animate-bounce">
        🌸
    </div>

    <div class="absolute bottom-24 left-1/4 text-2xl animate-pulse">
        ♡
    </div>

   <!-- Main Card -->
<div class="relative z-10
            max-w-2xl w-full
            rounded-[40px]
            p-[2px]
            overflow-hidden">

    <!-- RAINBOW BORDER -->
    <div class="absolute inset-[-200%]
                animate-spin-slow
                bg-[conic-gradient(from_0deg,#ffd6e7,#ffc9a9,#fff1b8,#d4ffd6,#cfe8ff,#e5d4ff,#ffd6e7)]">
    </div>

    <!-- OUTER GLOW -->
    <div class="absolute inset-0
                rounded-[40px]
                blur-3xl
                opacity-60
                bg-gradient-to-r
                from-pink-300
                via-rose-200
                to-orange-200">
    </div>

    <!-- ORBIT RING -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

        <!-- ring 1 -->
        <div class="w-[135%] h-[135%]
                    rounded-full
                    border border-pink-200/40
                    animate-spin-slow
                    shadow-[0_0_40px_rgba(255,182,193,0.5)]">
        </div>

    </div>

    <!-- ring 2 -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

        <div class="w-[115%] h-[115%]
                    rounded-full
                    border border-rose-200/30
                    animate-spin-reverse
                    blur-[1px]">
        </div>

    </div>

    <!-- SPARKLES -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-10 left-1/2
                    w-3 h-3 rounded-full
                    bg-pink-200
                    shadow-[0_0_20px_rgba(255,182,193,0.9)]
                    animate-pulse">
        </div>

        <div class="absolute bottom-12 left-10
                    w-2 h-2 rounded-full
                    bg-rose-300
                    animate-pulse">
        </div>

        <div class="absolute top-20 right-12
                    w-2 h-2 rounded-full
                    bg-orange-200
                    animate-bounce">
        </div>

    </div>

    <!-- REAL CARD -->
    <div class="relative
                bg-white/45
                backdrop-blur-2xl
                border border-white/40
                shadow-[0_0_50px_rgba(255,182,193,0.35)]
                rounded-[40px]
                px-8 py-14
                text-center
                overflow-hidden">


                <!-- MOVING AURORA -->
<div class="absolute inset-0 opacity-40">

    <div class="absolute -top-20 -left-20
                w-[300px] h-[300px]
                bg-pink-300/30
                rounded-full
                blur-3xl
                animate-aurora">
    </div>

    <div class="absolute bottom-0 right-0
                w-[260px] h-[260px]
                bg-orange-200/30
                rounded-full
                blur-3xl
                animate-aurora-delay">
    </div>

</div>

<!-- SHINE EFFECT -->
<div class="absolute inset-0 overflow-hidden pointer-events-none">

    <div class="absolute top-0 -left-[120%]
                w-[60%] h-full
                bg-gradient-to-r
                from-transparent
                via-white/40
                to-transparent
                rotate-12
                animate-shine">
    </div>

</div>

<!-- FLOATING MINI STARS -->
<div class="absolute inset-0 pointer-events-none">

    <span class="absolute top-[18%] left-[12%]
                 text-pink-300 text-xl
                 animate-float-slow">
        ✦
    </span>

    <span class="absolute top-[30%] right-[14%]
                 text-rose-300 text-lg
                 animate-float-delay">
        ♡
    </span>

    <span class="absolute bottom-[22%] left-[18%]
                 text-orange-200 text-xl
                 animate-pulse">
        ✦
    </span>

    <span class="absolute bottom-[18%] right-[16%]
                 text-pink-200 text-2xl
                 animate-float-slow">
        🌸
    </span>

</div>

        <!-- Glow -->
        <div class="absolute inset-0
                    bg-gradient-to-br
                    from-pink-200/20
                    via-white/10
                    to-rose-200/20">
        </div>

        <!-- Floating Flowers -->
        <span class="absolute top-6 left-8 text-3xl animate-float">
            🌸
        </span>

        <span class="absolute top-8 right-10 text-2xl animate-pulse">
            ✦
        </span>

        <span class="absolute bottom-8 left-10 text-2xl animate-pulse">
            ♡
        </span>

        <span class="absolute bottom-8 right-10 text-3xl animate-float">
            🌸
        </span>

        <!-- Content -->
<div class="relative z-10">

    <!-- TOP ICON -->
    <div class="flex justify-center mb-5">

        <div class="w-20 h-20 rounded-full
                    bg-gradient-to-br
                    from-pink-200/70
                    via-rose-100/70
                    to-orange-100/70
                    border border-white/40
                    shadow-[0_0_35px_rgba(255,182,193,0.5)]
                    flex items-center justify-center
                    backdrop-blur-xl
                    animate-pulse">

            <span class="text-4xl">
                🌸
            </span>

        </div>

    </div>

    <!-- MINI TEXT -->
    <p class="uppercase tracking-[0.4em]
              text-[11px]
              text-rose-400
              mb-4">

        Portfolio Closing Section

    </p>

    <!-- TITLE -->
    <h2 class="font-['Great_Vibes']
               text-[48px]
               md:text-[68px]
               leading-[1.1]
               text-[#5d3142]
               drop-shadow-[0_0_12px_rgba(255,182,193,0.5)]">

        Thank you for visiting
        <br>

        <span class="bg-gradient-to-r
                     from-rose-400
                     via-pink-500
                     to-orange-300
                     bg-clip-text
                     text-transparent">

            Nazwa’s Creative Corner ♡

        </span>

    </h2>

    <!-- DECORATION LINE -->
    <div class="flex items-center justify-center gap-3 mt-6">

        <div class="w-16 h-[2px]
                    bg-gradient-to-r
                    from-transparent
                    to-rose-300">
        </div>

        <span class="text-rose-400 text-xl">
            ✦
        </span>

        <div class="w-16 h-[2px]
                    bg-gradient-to-l
                    from-transparent
                    to-rose-300">
        </div>

    </div>

    <!-- DESCRIPTION -->
  <p class="mt-7
          text-[#7a5563]
          text-[15px] md:text-lg
          leading-relaxed
          max-w-xl mx-auto">

    𝕰𝖛𝖊𝖗𝖞 𝖉𝖊𝖘𝖎𝖌𝖓
    𝖙𝖊𝖑𝖑𝖘 𝖆
    𝖑𝖎𝖙𝖙𝖑𝖊 𝖘𝖙𝖔𝖗𝖞,
    𝖆𝖓𝖉 𝕴’𝖒
    𝖙𝖗𝖚𝖑𝖞 𝖍𝖆𝖕𝖕𝖞
    𝖞𝖔𝖚 𝖜𝖊𝖗𝖊
    𝖕𝖆𝖗𝖙 𝖔𝖋
    𝖒𝖎𝖓𝖊 ✨

</p>

    <p class="mt-7
          text-[#7a5563]
          text-[15px] md:text-lg
          leading-relaxed
          max-w-xl mx-auto
          font-[cursive]">

    𝓣𝓱𝓪𝓷𝓴 𝔂𝓸𝓾 𝓯𝓸𝓻 𝓼𝓬𝓻𝓸𝓵𝓵𝓲𝓷𝓰
    𝓽𝓱𝓻𝓸𝓾𝓰𝓱 𝓶𝔂 𝓳𝓸𝓾𝓻𝓷𝓮𝔂,
    𝓹𝓻𝓸𝓳𝓮𝓬𝓽𝓼, 𝓬𝓻𝓮𝓪𝓽𝓲𝓿𝓲𝓽𝔂,
    𝓪𝓷𝓭 𝓭𝓻𝓮𝓪𝓶𝔂 𝓲𝓭𝓮𝓪𝓼 💕

</p>

    <!-- BUTTONS -->
    <div class="flex flex-wrap justify-center gap-4 mt-10">

        <!-- HOME -->
        <a href="#home"
           class="group inline-flex items-center gap-2
                  px-8 py-3
                  rounded-full
                  bg-gradient-to-r
                  from-pink-300
                  via-rose-300
                  to-orange-200
                  text-[#5d3142]
                  shadow-[0_0_25px_rgba(255,182,193,0.5)]
                  hover:scale-105
                  hover:shadow-[0_0_40px_rgba(255,182,193,0.8)]
                  transition duration-300">

            <span class="group-hover:rotate-12 transition">
                ✿
            </span>

            See You Again

        </a>

        <!-- CONTACT -->
        <a href="#contact"
           class="inline-flex items-center gap-2
                  px-8 py-3
                  rounded-full
                  border border-rose-200
                  bg-white/40
                  backdrop-blur-xl
                  text-[#5d3142]
                  hover:bg-rose-100/70
                  hover:scale-105
                  transition duration-300">

            ♡ Contact Me

        </a>

    </div>

</div>

    </div> <!-- END REAL CARD -->
</div> <!-- END MAIN WRAPPER -->
</section>
<!-- Closing Section End -->


<!-- Footer Start -->
<footer class="pt-2 pb-4 text-center relative z-10 -mt-26">

    <!-- Menu -->
    <div class="flex flex-wrap justify-center gap-6
                text-[#5d3142] text-sm md:text-base">

        <a href="#about"
           class="hover:text-rose-500 transition">
            About
        </a>

        <span>|</span>

        <a href="#project"
           class="hover:text-rose-500 transition">
            Projects
        </a>

        <span>|</span>

        <a href="#certificate"
           class="hover:text-rose-500 transition">
            Process
        </a>

        <span>|</span>

        <a href="#contact"
           class="hover:text-rose-500 transition">
            Contact
        </a>

    </div>

    <!-- Social -->
    <div class="flex justify-center gap-5 mt-6 text-[#5d3142] text-xl">

        <a href="https://wa.me/6289654521599"
           target="_blank"
           class="hover:text-rose-500 transition">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a href="https://instagram.com/nzwaulia.03"
           target="_blank"
           class="hover:text-rose-500 transition">
            <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="https://www.linkedin.com/"
           target="_blank"
           class="hover:text-rose-500 transition">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>

    </div>

</footer>
<!-- Footer End -->










@vite('resources/js/script.js')

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<script>
window.addEventListener("load", () => {
    console.log("tes particles jalan");

    tsParticles.load("particles", {
        particles: {
            number: { value: 30 },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.8 },
            size: { value: 2 },
            move: { enable: true, speed: 1 }
        }

        
    });
});
</script>

<script>
window.addEventListener("load", () => {

    tsParticles.load("loader-particles", {
        fullScreen: false,

        particles: {
            number: {
                value: 80
            },

            color: {
                value: "#ffffff"
            },

            shape: {
                type: "circle"
            },

            opacity: {
                value: 0.5,
                random: true
            },

            size: {
                value: { min: 1, max: 4 }
            },

            move: {
                enable: true,
                speed: 0.8,
                direction: "bottom",
                random: true,
                straight: false,
                outModes: {
                    default: "out"
                }
            }
        },

        background: {
            color: "transparent"
        }
    });

});
</script>

<script>
const loader = document.getElementById("loader");
const loadingNumber = document.getElementById("loading-number");
const loadingBar = document.getElementById("loading-bar");

let count = 0;

const interval = setInterval(() => {

    count++;

    loadingNumber.innerText = count + "%";
    loadingBar.style.width = count + "%";

    if (count >= 100) {

        clearInterval(interval);

        loader.classList.add("opacity-0");

        setTimeout(() => {
            loader.style.display = "none";
        }, 700);

    }

}, 25);
</script>

<script>
const sakuraContainer = document.getElementById("sakura-container");

// emoji / bisa diganti svg juga
const sakuraEmoji = ["💮", "💮", "💮", "💮"];

function createSakura() {
    const el = document.createElement("div");
    el.classList.add("sakura");

    el.innerText = sakuraEmoji[Math.floor(Math.random() * sakuraEmoji.length)];

    // posisi random
    el.style.left = Math.random() * 100 + "vw";

    // size random (biar natural)
    const size = Math.random() * 18 + 10;
    el.style.fontSize = size + "px";

    // durasi random
    const duration = Math.random() * 5 + 4;
    el.style.animationDuration = duration + "s";

  
    el.style.animationDelay = Math.random() * 1 + "s";

    sakuraContainer.appendChild(el);


    setTimeout(() => {
        el.remove();
    }, duration * 1000);
}


setInterval(() => {
    for (let i = 0; i < 5; i++) {
        createSakura();
    }
}, 150);
</script>

<script src="https://unpkg.com/scrollreveal"></script>

<script>
    ScrollReveal().reveal('.reveal-text', {
        distance: '40px',
        duration: 1000,
        origin: 'bottom',
        interval: 200,
        opacity: 0,
        easing: 'ease-in-out',
        reset: false
    });
</script>

<script>

const loadingNumber = document.getElementById("loading-number");
const loadingBar = document.getElementById("loading-bar");
const loader = document.getElementById("loader");

let count = 0;

const loading = setInterval(() => {

    count++;

    /* ANGKA */
    loadingNumber.innerText = count + "%";

    /* BAR */
    loadingBar.style.width = count + "%";

    /* selesai */
    if(count >= 100){

        clearInterval(loading);

        setTimeout(() => {

            loader.classList.add("opacity-0");

            setTimeout(() => {

                loader.style.display = "none";

            },700);

        },500);
    }

},35);

</script>



@viteReactRefresh
@vite('resources/js/app.jsx')


<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    let isOpen = false;

    menuBtn.addEventListener("click", () => {
        isOpen = !isOpen;

        if (isOpen) {
            mobileMenu.classList.remove("hidden");
        } else {
            mobileMenu.classList.add("hidden");
        }
    });

    // optional: close menu kalau klik link
    document.querySelectorAll("#mobile-menu a").forEach(link => {
        link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            isOpen = false;
        });
    });
</script>

</body>

</html>  