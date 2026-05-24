import { useEffect } from "react";
import { Link } from "@inertiajs/react";

export default function Sia() {

    useEffect(() => {

        const loadParticles = async () => {

            const { tsParticles } = await import("@tsparticles/engine");

            await import("tsparticles");

            await tsParticles.load("particles", {

                fullScreen: {
                    enable: false,
                },

                particles: {

                    number: {
                        value: 80,
                    },

                    color: {
                        value: "#ffffff",
                    },

                    shape: {
                        type: "circle",
                    },

                    opacity: {
                        value: 0.6,
                        random: true,
                    },

                    size: {
                        value: {
                            min: 1,
                            max: 3,
                        },
                    },

                    move: {
                        enable: true,
                        direction: "bottom",
                        speed: 1.2,
                        random: true,
                        straight: false,

                        outModes: {
                            default: "out",
                        },
                    },
                },

                detectRetina: true,
            });
        };

        loadParticles();

        return () => {
            tsParticles.dom().forEach((p) => p.destroy());
        };

    }, []);

    return (

        <div
            style={{
                backgroundImage: "url('/img/background.jpeg')",
                backgroundSize: "cover",
                backgroundPosition: "center",
                backgroundRepeat: "no-repeat",
                backgroundAttachment: "fixed",
            }}
            className="relative min-h-screen flex items-center justify-center overflow-hidden"
        >

            {/* PARTICLES */}
            <div
                id="particles"
                className="fixed inset-0 pointer-events-none"
            ></div>

            {/* CONTENT */}
            <div className="text-center max-w-5xl w-full px-6 relative z-10">

                {/* TITLE */}
                <h2
                    className="
                    text-4xl md:text-5xl
                    font-['Great_Vibes']
                    text-[#6b213f]
                    drop-shadow-lg mb-10
                "
                >
                    Web Sistem Informasi
                    <br />
                    Akademik
                </h2>

                {/* IMAGE */}
                <div className="relative w-full max-w-4xl mx-auto mb-6">

                    {/* OUTER GOLD RING */}
                    <div className="absolute inset-0 flex items-center justify-center">

                        <div
                            className="
                            w-[104%] h-[104%]
                            rounded-2xl
                            border-[4px] border-yellow-300
                            animate-spin-slow
                            shadow-[0_0_35px_rgba(255,215,0,0.7)]
                        "
                        ></div>

                    </div>

                    {/* SECOND GOLD LAYER */}
                    <div className="absolute inset-0 flex items-center justify-center">

                        <div
                            className="
                            w-[101%] h-[101%]
                            rounded-2xl
                            border-[2px] border-amber-400/80
                            animate-spin-reverse
                            shadow-[0_0_20px_rgba(255,200,100,0.6)]
                        "
                        ></div>

                    </div>

                    {/* IMAGE */}
                    <img
                        src="/img/Screenshot-643.png"
                        alt="Sistem Informasi Akademik"
                        className="
                        w-full h-[400px]
                        object-cover
                        rounded-2xl
                        shadow-2xl
                        relative z-10
                    "
                    />

                </div>

                {/* DESCRIPTION */}
                <p className="text-rose leading-relaxed mb-14">

                    𝐈𝐧𝐢 𝐚𝐝𝐚𝐥𝐚𝐡 𝐭𝐚𝐦𝐩𝐢𝐥𝐚𝐧 𝐟𝐮𝐥𝐥 𝐝𝐚𝐫𝐢 𝐩𝐫𝐨𝐣𝐞𝐜𝐭
                    𝐬𝐢𝐬𝐭𝐞𝐦 𝐢𝐧𝐟𝐨𝐫𝐦𝐚𝐬𝐢 𝐚𝐤𝐚𝐝𝐞𝐦𝐢𝐤
                    𝐝𝐚𝐧 𝐬𝐞𝐝𝐚𝐧𝐠 𝐝𝐚𝐥𝐚𝐦 𝐩𝐞𝐫𝐛𝐚𝐢𝐤𝐚𝐧
                    𝐝𝐞𝐧𝐠𝐚𝐧 𝐝𝐞𝐬𝐚𝐢𝐧 𝐦𝐨𝐝𝐞𝐫𝐧 ✨✨

                </p>

                {/* BUTTON */}
                <div className="mt-10 flex flex-col items-center gap-4">

                    <a
                        href="https://wa.me/6289654521599"
                        target="_blank"
                        rel="noopener noreferrer"
                        className="
                        inline-flex items-center justify-center gap-2
                        px-7 py-3 rounded-full
                        bg-gradient-to-r
                        from-yellow-100
                        via-amber-200
                        to-[#6b213f]
                        text-[#6b213f]
                        font-medium
                        shadow-md
                        border border-yellow-300/60
                        hover:scale-105
                        hover:shadow-lg
                        transition duration-300
                    "
                    >

                        {/* ICON */}
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <path d="M20.52 3.48A11.86 11.86 0 0 0 12.05 0C5.42 0 .05 5.37.05 12c0 2.12.55 4.2 1.6 6.04L0 24l6.2-1.63A11.9 11.9 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.18-1.24-6.17-3.48-8.52ZM12 22a9.9 9.9 0 0 1-5.07-1.39l-.36-.21-3.68.97.98-3.59-.23-.37A9.9 9.9 0 1 1 12 22Z" />
                        </svg>

                        Info Lebih Lanjut Hubungi Saya

                    </a>

                </div>

                {/* BACK BUTTON */}
                <Link
                    href="/#project"
                    className="
                    inline-block px-6 py-2 rounded-full
                    text-[#5a2a3a]
                    bg-gradient-to-r
                    from-rose-200
                    via-amber-100
                    to-orange-100
                    shadow-sm
                    border border-white/30
                    hover:shadow-md
                    hover:scale-105
                    transition duration-300
                "
                >
                    ← Kembali
                </Link>

            </div>

        </div>
    );
}