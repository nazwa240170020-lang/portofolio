<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Nazwa</title>

    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>



    <body class="bg-gradient-to-b from-slate-50 to-slate-100 text-slate-800 font-sans antialiased">

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

    </div>

<!-- Mobile Menu -->
<div id="mobile-menu"
     class="hidden lg:hidden fixed top-24 right-6 w-64 z-50 max-h-[70vh] overflow-y-auto">

    <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-5
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

        <a href="#contact"
           class="font-aesthetic text-dark text-center py-3 rounded-2xl
                  hover:bg-pink hover:text-white transition duration-300">
            ♡ Contact ♡
        </a>

    </div>

</div>

</header>
<!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="home" class="min-h-screen flex items-center pt-20">
        <div class="container mx-auto px-6">

            <div class="flex flex-col-reverse lg:flex-row items-center gap-12">

                <!-- Hero Text -->
<div class="w-full lg:w-1/2">

    <h1 class="text-lg md:text-xl font-semibold text-primary">

    (っ◔◡◔)っ ♥ 𝙃𝙖𝙡𝙡𝙤 👋, 𝙎𝙖𝙮𝙖 ♥ 
        <span class="block text-4xl md:text-6xl text-dark mt-2 font-cantik [Great_Vibes]">
    Nazwa Putri Aulia
    </span>
    </h1>

  <h2 class="mt-4 text-xl md:text-2xl text-dark font-aesthetic tracking-widest">
    Web Developer & UI Designer
</h2>

    <p class="mt-6 text-rose leading-relaxed max-w-md">
    𝕾𝖆𝖞𝖆 𝖘𝖚𝖐𝖆 𝖒𝖊𝖒𝖇𝖆𝖓𝖌𝖚𝖓 𝖜𝖊𝖇𝖘𝖎𝖙𝖊 𝖒𝖔𝖉𝖊𝖗𝖓 𝖞𝖆𝖓𝖌 𝖈𝖑𝖊𝖆𝖓,
    𝖗𝖊𝖘𝖕𝖔𝖓𝖘𝖎𝖛𝖊, 𝖉𝖆𝖓 𝖋𝖔𝖐𝖚𝖘 𝖕𝖆𝖉𝖆 𝖚𝖘𝖊𝖗 𝖊𝖝𝖕𝖊𝖗𝖎𝖊𝖓𝖈𝖊
    𝖒𝖊𝖓𝖌𝖌𝖚𝖓𝖆𝖐𝖆𝖓 𝕷𝖆𝖗𝖆𝖛𝖊𝖑 & 𝕿𝖆𝖎𝖑𝖜𝖎𝖓𝖉 𝕮𝕾𝕾.
</p>

<a href="#contact"
   class="inline-block mt-8 bg-dark text-pink px-8 py-3 rounded-full shadow-md
          hover:bg-rose hover:shadow-xl hover:scale-105 transition duration-300">
    ♡💖♡ 𝓗𝓾𝓫𝓾𝓷𝓰𝓲 𝓢𝓪𝔂𝓪 ♡💖♡
</a>

</div>

                <!-- Hero Image -->
                <div class="w-full lg:w-1/2 flex justify-center">

                    <div class="relative w-full max-w-md">

                        <!-- Glow Background -->
                        <div class="absolute inset-0 bg-glow blur-3xl opacity-40 rounded-full"></div>
                        

                        <!-- Image -->
                        <img src="{{ asset('img/WhatsApp_Image_2026-05-14_at_22.06.22-removebg-preview.png') }}"alt="Nazwa"
                         class="max-w-full mx-auto relative z-10 drop-shadow-2xl">
                        <span class="absolute inset-0 flex items-center justify-center -z-10">
                            <svg width="400"  height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fda4af"
                        d="M53.4,-57.8C66.6,-52.5,73.1,-33.3,71.8,-16.2C70.6,0.8,61.8,15.7,53.5,31.7C45.2,47.6,37.5,64.7,25.8,67.4C14.2,70,-1.3,58.2,-17.5,51.1C-33.7,43.9,-50.5,41.4,-61.5,31.2C-72.5,21.1,-77.6,3.2,-73.1,-11.2C-68.5,-25.6,-54.3,-36.7,-40.5,-41.8C-26.7,-47,-13.3,-46.3,3.4,-50.3C20.1,-54.4,40.2,-63.1,53.4,-57.8Z"
                    transform="translate(100 100) scale(1.2)" />
                        </svg></span>
                    </div>

                </div>

            </div>

        </div>
    </section> 
    <!-- Hero Section End -->


    <!-- About & Social Section Start -->
    <section id="about" class="py-24">

    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- About Me -->
            <div class="bg-bgn backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-pink">

                <h2 class="text-3xl md:text-4xl text-dark font-aesthetic mb-6">
                    ♡ About Me ♡
                </h2>

                <p class="text-rose leading-relaxed">
                    𝐇𝐚𝐥𝐥𝐨𝐨𝐨! 𝐀𝐤𝐮 𝐚𝐝𝐚𝐥𝐚𝐡 𝐍𝐚𝐳𝐰𝐚 𝐏𝐮𝐭𝐫𝐢 𝐀𝐮𝐥𝐢𝐚, 
                    𝐬𝐞𝐨𝐫𝐚𝐧𝐠 𝐲𝐚𝐧𝐠 𝐬𝐮𝐤𝐚 𝐝𝐞𝐬𝐚𝐢𝐧,
                    𝐰𝐞𝐛 𝐝𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭, 𝐝𝐚𝐧
                    𝐡𝐚𝐥-𝐡𝐚𝐥 𝐚𝐞𝐬𝐭𝐡𝐞𝐭𝐢𝐜 💖💖
                </p>

            </div>

            <!-- Mari Berteman -->
            <div class="bg-bgn backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-pink">

                <h2 class="text-3xl md:text-4xl text-dark font-aesthetic mb-6">
                    ♡ Mari Berteman ♡
                </h2>

                <p class="text-rose leading-relaxed mb-8">
                    𝐀𝐲𝐨𝐨 𝐦𝐚𝐫𝐢 𝐛𝐞𝐫𝐭𝐞𝐦𝐚𝐧 𝐝𝐚𝐧
                    𝐬𝐚𝐥𝐢𝐧𝐠 𝐭𝐞𝐫𝐡𝐮𝐛𝐮𝐧𝐠 💕
                    𝐊𝐚𝐦𝐮 𝐛𝐢𝐬𝐚 𝐡𝐮𝐛𝐮𝐧𝐠𝐢 𝐚𝐤𝐮
                    𝐝𝐢 𝐬𝐨𝐬𝐢𝐚𝐥 𝐦𝐞𝐝𝐢𝐚 𝐝𝐢 𝐛𝐚𝐰𝐚𝐡 𝐢𝐧𝐢 ✨
                </p>

                <div class="flex flex-wrap gap-4"> 

                    <!-- WhatsApp -->
                    <div class="flex flex-wrap gap-4">

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

</section>
...
<!-- About & Social Section End -->

@vite('resources/js/script.js')

</body>
</html> 