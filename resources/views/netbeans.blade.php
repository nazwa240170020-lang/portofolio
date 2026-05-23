<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>
    @vite('resources/css/app.css')
</head>

<body
style="
background-image: url('{{ asset('img/WhatsApp Image 2026-05-16 at 13.21.24.jpeg') }}');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
"
class="min-h-screen flex items-center justify-center"
>
<div id="particles" class="fixed inset-0 pointer-events-none"></div>
    <div class="text-center max-w-5xl w-full px-6">

        <!-- TITLE (SAMA STYLE DENGAN HOME) -->
        <h2 class="text-4xl md:text-5xl
                   font-['Great_Vibes']
                   text-[#6b213f]
                   drop-shadow-lg mb-10">
  Rawat Inap RS
            <br>
          Berbasis Netbeans
        </h2>

        

<div class="relative w-full max-w-4xl mx-auto mb-6">

    <!-- OUTER GOLD RING (TEBAL & JELAS) -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-[104%] h-[104%] rounded-2xl
                    border-[4px] border-yellow-300
                    animate-spin-slow
                    shadow-[0_0_35px_rgba(255,215,0,0.7)]">
        </div>
    </div>

    <!-- SECOND GOLD LAYER (DEPTH) -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-[101%] h-[101%] rounded-2xl
                    border-[2px] border-amber-400/80
                    animate-spin-reverse
                    shadow-[0_0_20px_rgba(255,200,100,0.6)]">
        </div>
    </div>

   <a href="http://localhost/nama_project" target="_blank">
    <img src="{{ asset('img/Screenshot (644).png') }}"
         class="w-full h-[400px] object-cover rounded-2xl shadow-2xl relative z-10">
</a>

</div>

        <!-- DESCRIPTION -->
        <p class="text-rose leading-relaxed mb-14">
    𝐈𝐧𝐢 𝐚𝐝𝐚𝐥𝐚𝐡 𝐭𝐚𝐦𝐩𝐢𝐥𝐚𝐧 𝐟𝐮𝐥𝐥 𝐝𝐚𝐫𝐢 𝐩𝐫𝐨𝐣𝐞𝐜𝐭 𝐫𝐚𝐰𝐚𝐭 𝐢𝐧𝐚𝐩 𝐫𝐮𝐦𝐚𝐡 𝐬𝐚𝐤𝐢𝐭
𝐝𝐞𝐧𝐠𝐚𝐧 𝐝𝐞𝐬𝐚𝐢𝐧 𝐦𝐨𝐝𝐞𝐫𝐧 𝐔𝐈 ✨
𝐲𝐚𝐧𝐠 𝐝𝐢𝐛𝐚𝐧𝐠𝐮𝐧 𝐦𝐞𝐧𝐠𝐠𝐮𝐧𝐚𝐤𝐚𝐧 𝐛𝐚𝐡𝐚𝐬𝐚 𝐩𝐞𝐦𝐫𝐨𝐠𝐫𝐚𝐦𝐚𝐧 𝐉𝐚𝐯𝐚 𝐝𝐢 𝐍𝐞𝐭𝐁𝐞𝐚𝐧𝐬 💻
</p>

<!-- INFO + CONTACT BUTTON -->
<div class="mt-10 flex flex-col items-center gap-4">

    

    <a href="https://wa.me/6289654521599"
   target="_blank"
   class="inline-flex items-center justify-center gap-2
          px-7 py-3 rounded-full
         bg-gradient-to-r from-yellow-100 via-amber-200 to-[#6b213f]
          text-[#6b213f] font-medium
          shadow-md border border-yellow-300/60
          hover:scale-105 hover:shadow-lg
          transition duration-300">

    <!-- ICON -->
    <svg xmlns="http://www.w3.org/2000/svg"
         width="18"
         viewBox="0 0 24 24"
         fill="currentColor">
        <path d="M20.52 3.48A11.86 11.86 0 0 0 12.05 0C5.42 0 .05 5.37.05 12c0 2.12.55 4.2 1.6 6.04L0 24l6.2-1.63A11.9 11.9 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.18-1.24-6.17-3.48-8.52ZM12 22a9.9 9.9 0 0 1-5.07-1.39l-.36-.21-3.68.97.98-3.59-.23-.37A9.9 9.9 0 1 1 12 22Z"/>
    </svg>

    Info Lebih Lanjut Hubungi Saya
</a>
</div>

    <a href="/#project"
   class="inline-block px-6 py-2 rounded-full
          text-[#5a2a3a]
          bg-gradient-to-r from-rose-200 via-amber-100 to-orange-100
          shadow-sm border border-white/30
          hover:shadow-md hover:scale-105
          transition duration-300">
    ← Kembali
</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<script>
window.addEventListener("load", () => {
    tsParticles.load("particles", {
        fullScreen: { enable: false },

        particles: {
            number: { value: 80 },

            color: { value: "#ffffff" },

            shape: { type: "circle" },

            opacity: {
                value: 0.6,
                random: true
            },

            size: {
                value: { min: 1, max: 3 }
            },

            move: {
                enable: true,
                direction: "bottom",
                speed: 1.2,
                random: true,
                straight: false,
                outModes: {
                    default: "out"
                }
            }
        },

        detectRetina: true
    });
});
</script>
</body>


</html>