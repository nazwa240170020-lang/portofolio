import { Head } from '@inertiajs/react';
import { useEffect, useState } from 'react';

import CircularGallery from '@/Components/CircularGallery';
import LogoLoop from '@/Components/LogoLoop';
import Plasma from '@/Components/Plasma';
import LiquidEther from '@/Components/LiquidEther';



import {
    SiReact,
    SiLaravel,
    SiTailwindcss,
    SiJavascript,
    SiPhp,
    SiFigma,
} from 'react-icons/si';




// ===================== ACTIVITY CARD COMPONENT =====================
function ActivityCard({ title, profileImage, category, items, showcaseImages }) {
    return (
        <div className="bg-[#fff3f3] rounded-[35px] border-[4px] border-[#f2c5c5] shadow-2xl p-5 relative h-full overflow-hidden">
            <div className="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div className="w-[150%] h-[150%] rounded-full border-[3px] border-rose-300/40 shadow-[0_0_50px_rgba(244,172,183,0.6)] animate-spin-slow" />
            </div>
            <div className="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div className="w-[125%] h-[125%] rounded-full border-[2px] border-[#d9a3b3]/40 blur-[1px] shadow-[0_0_40px_rgba(217,163,179,0.5)] animate-spin-reverse" />
            </div>
            <div className="relative z-10">
                <div className="flex gap-4">
                    <div className="bg-white rounded-[24px] p-2 shadow-lg w-[120px] shrink-0">
                        <img
                            src={profileImage}
                            alt={category}
                            className="w-full h-[150px] object-cover rounded-[18px]"
                        />
                        <div className="text-center mt-3">
                            <h4 className="text-[#6b213f] font-bold text-sm">{category}</h4>
                            <p className="text-[11px] text-rose-500">Activities</p>
                        </div>
                    </div>
                    <div className="flex-1">
                        <h3 className="text-[28px] leading-tight text-[#6b213f] font-semibold">{title}</h3>
                        <ul className="mt-4 text-rose-700 space-y-2 text-[15px]">
                            {items.map((item, i) => (
                                <li key={i}>✦ {item}</li>
                            ))}
                        </ul>
                    </div>
                </div>
                <div className="mt-6">
                    <h4 className="text-[#6b213f] text-xl font-semibold mb-3">Activities Showcase</h4>
                    <div className="grid grid-cols-3 gap-3">
                        {showcaseImages.map((img, i) => (
                            <img
                                key={i}
                                src={img}
                                alt={`Showcase ${i + 1}`}
                                className="rounded-2xl h-[110px] object-cover shadow-lg"
                            />
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
}

// ===================== MAIN HOME COMPONENT =====================
export default function Home() {
    const [loading, setLoading] = useState(true);
    const [loadingPercent, setLoadingPercent] = useState(0);
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

    // ===================== LOADING BAR =====================
    useEffect(() => {
        const interval = setInterval(() => {
            setLoadingPercent((prev) => {
                if (prev >= 100) {
                    clearInterval(interval);
                    setTimeout(() => setLoading(false), 700);
                    return 100;
                }
                return prev + 1;
            });
        }, 25);
        return () => clearInterval(interval);
    }, []);

    // ===================== TYPING EFFECT =====================
    useEffect(() => {
        if (loading) return;

        const text =
            `𝕸𝖊𝖒𝖎𝖑𝖎𝖐𝖎 𝖒𝖎𝖓𝖆𝖙 𝖕𝖆𝖉𝖆 𝕻𝖊𝖓𝖌𝖊𝖒𝖇𝖆𝖓𝖌𝖆𝖓 𝖂𝖊𝖇 𝖒𝖔𝖉𝖊𝖗𝖓.\n` +
            `𝕿𝖊𝖗𝖙𝖆𝖗𝖎𝖐 𝖒𝖊𝖒𝖇𝖆𝖓𝖌𝖚𝖓 𝖘𝖔𝖑𝖚𝖘𝖎 𝖉𝖎𝖌𝖎𝖙𝖆𝖑 𝖞𝖆𝖓𝖌 𝖇𝖊𝖗𝖋𝖔𝖐𝖚𝖘 𝖕𝖆𝖉𝖆 𝖚𝖘𝖊𝖗,\n` +
            `𝖇𝖊𝖗𝖘𝖎𝖋𝖆𝖙 𝖘𝖈𝖆𝖑𝖆𝖇𝖑𝖊, 𝖘𝖊𝖗𝖙𝖆 𝖊𝖋𝖎𝖘𝖎𝖊𝖓 𝖉𝖆𝖓\n` +
            `𝖒𝖊𝖒𝖇𝖊𝖗𝖎𝖐𝖆𝖓 𝖓𝖎𝖑𝖆𝖎 𝖕𝖗𝖆𝖐𝖙𝖎𝖘.\n` +
            `𝕾𝖊𝖉𝖆𝖓𝖌 𝖒𝖊𝖓𝖌𝖊𝖒𝖇𝖆𝖓𝖌𝖐𝖆𝖓 𝖐𝖊𝖙𝖊𝖗𝖆𝖒𝖕𝖎𝖑𝖆𝖓\n` +
            `𝖉𝖆𝖑𝖆𝖒 𝕻𝕳𝕻 𝖉𝖆𝖓 𝕵𝖆𝖛𝖆𝕾𝖈𝖗𝖎𝖕𝖙, 𝖍𝖎𝖓𝖌𝖌𝖆\n` +
            `𝖙𝖊𝖗𝖙𝖆𝖗𝖎𝖐 𝖕𝖆𝖉𝖆 𝕬𝖗𝖙𝖎𝖋𝖎𝖈𝖎𝖆𝖑 𝕴𝖓𝖙𝖊𝖑𝖑𝖎𝖌𝖊𝖓𝖈𝖊.`;

        const aboutText = document.getElementById('about-text');
        if (!aboutText) return;

   
        aboutText.innerHTML = '';
        let index = 0;
        let timeout;

        function typeText() {
            if (index < text.length) {
                const char = text.charAt(index);
             
                aboutText.innerHTML += char === '\n' ? '<br>' : char;
                index++;
                timeout = setTimeout(typeText, 35);
            }
        }
        typeText();

        return () => clearTimeout(timeout);
    }, [loading]);

    // ===================== PROFILE CARD SWING =====================
    useEffect(() => {
        if (loading) return;
        const profileCard = document.getElementById('profile-card');
        if (profileCard) {
            profileCard.classList.add('swing-animation');
        }
    }, [loading]);

    // ===================== SCROLL REVEAL =====================
    useEffect(() => {
        if (loading) return;
        if (typeof window !== 'undefined' && window.ScrollReveal) {
            window.ScrollReveal().reveal('.about-card', {
                distance: '40px',
                duration: 1000,
                origin: 'bottom',
                opacity: 0,
                delay: 200,
            });
            window.ScrollReveal().reveal('.contact-card', {
                distance: '40px',
                duration: 1000,
                origin: 'bottom',
                opacity: 0,
                delay: 300,
            });
        }
    }, [loading]);

    // ===================== SAKURA EFFECT =====================
    useEffect(() => {
        if (loading) return;

        const sakuraContainer = document.getElementById('sakura-container-main');
        if (!sakuraContainer) return;

        const sakuraEmoji = ['💮', '🌸', '✿', '❀'];

        const createSakura = () => {
            const el = document.createElement('div');
            el.className = 'sakura-petal';
            el.innerText = sakuraEmoji[Math.floor(Math.random() * sakuraEmoji.length)];
            el.style.left = Math.random() * 100 + 'vw';
            el.style.fontSize = Math.random() * 18 + 10 + 'px';
            el.style.animationDuration = Math.random() * 5 + 4 + 's';
            el.style.animationDelay = Math.random() * 1 + 's';
            sakuraContainer.appendChild(el);
            setTimeout(() => el.remove(), 9000);
        };

        const interval = setInterval(() => {
            for (let i = 0; i < 3; i++) createSakura();
        }, 300);

        return () => clearInterval(interval);
    }, [loading]);

    // ===================== TS PARTICLES =====================
    useEffect(() => {
        if (loading) return;
        if (typeof window !== 'undefined' && window.tsParticles) {
            window.tsParticles.load('particles', {
                particles: {
                    number: { value: 30 },
                    color: { value: '#ffffff' },
                    shape: { type: 'circle' },
                    opacity: { value: 0.8 },
                    size: { value: 2 },
                    move: { enable: true, speed: 1 },
                },
            });
        }
    }, [loading]);

    // ===================== DATA =====================
    const navLinks = [
        { href: '#home', label: 'Beranda' },
        { href: '#about', label: 'About Me' },
        { href: '#project', label: 'Project' },
        { href: '#certificate', label: 'Certificate' },
        { href: '#activities', label: 'Activities' },
        { href: '#contact', label: 'Contact' },
    ];

    const techLogos = [
        { node: <SiReact size={40} color="#61DAFB" />, ariaLabel: 'React' },
        { node: <SiLaravel size={40} color="#FF2D20" />, ariaLabel: 'Laravel' },
        { node: <SiTailwindcss size={40} color="#38BDF8" />, ariaLabel: 'Tailwind CSS' },
        { node: <SiJavascript size={40} color="#F7DF1E" />, ariaLabel: 'JavaScript' },
        { node: <SiPhp size={40} color="#777BB4" />, ariaLabel: 'PHP' },
        { node: <SiFigma size={40} color="#F24E1E" />, ariaLabel: 'Figma' },
    ];

    const projects = [
        {
            title: 'Portofolio Version1',
            description: 'UI design with dreamy modern aesthetic concept.',
            image: '/img/Screenshot (637).png',
            link: 'https://nazwa240170020-lang.github.io/myportofolio/',
            external: true,
        },
        {
            title: 'Portfolio UI Version 2',
            description: 'Elegant web portfolio with glassmorphism and luxury pink style.',
            image: '/img/Screenshot (638).png',
            link: '#project',
            external: false,
        },
        {
            title: 'Web Rawat Inap Rumah Sakit',
            description: 'Project ini untuk proses administrasi pasien rawat inap💕',
            image: '/img/Screenshot (642).png',
            link: '/rawat-inap',
            external: false,
        },
        {
            title: 'Web Sistem Informasi Akademik',
            description: 'Website ini dibuat untuk data akademik dengan tampilan modern terorganisir ✨',
            image: '/img/Screenshot (643).png',
            link: '/sia',
            external: false,
        },
        {
            title: 'Web Rawat Inap RS',
            description: 'Sistem ini dirancang untuk pengelolaan data pasien rawat inap, menggunakan Java NetBeans✨',
            image: '/img/Screenshot (644).png',
            link: '/netbeans',
            external: false,
        },
    ];

    const certificates = [
        { image: '/img/WhatsApp Image 2026-05-17 at 06.19.51.jpeg', title: null, isCircle: true },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.05.33.jpeg', title: 'Pythagoras Fisika' },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.19.47.jpeg', title: 'Gypem Medical', subtitle: 'Olympiade' },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.05.32.jpeg', title: 'Lomba Menulis Opini', subtitle: 'Universitas Malikussaleh' },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.19.56.jpeg', title: 'Gypem Biology' },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.41.09.jpeg', title: 'Kementerian Koordinator' },
        { image: '/img/WhatsApp Image 2026-05-17 at 01.41.21.jpeg', title: 'Olimpiade SKD' },
    ];

    const socialLinks = [
        { href: 'https://wa.me/6289654521599', icon: 'fa-whatsapp' },
        { href: 'https://instagram.com/nzwaulia.03', icon: 'fa-instagram' },
        { href: 'https://www.linkedin.com/in/nazwa-putri-aulia-86b88b311', icon: 'fa-linkedin-in' },
        { href: 'https://youtube.com/@nzwaulia.03', icon: 'youtube' },
    ];

    return (
        <>
            <Head title="Portfolio Nazwa" />

            {/* ===================== LOADER ===================== */}
            {loading && (
                <div
                    id="loader"
                    className={`fixed inset-0 z-[9999] flex items-center justify-center bg-cover bg-center overflow-hidden transition-all duration-700 ${loadingPercent >= 100 ? 'opacity-0 pointer-events-none' : ''}`}
                    style={{ backgroundImage: `url('/img/WhatsApp Image 2026-05-15 at 22.32.25.jpeg')` }}
                >
                    <div id="loader-particles" className="absolute inset-0 z-0" />

                    <div className="floating-lines">
                        {[...Array(5)].map((_, i) => <span key={i} />)}
                    </div>

                    <div className="aurora-lines">
                        <div className="line line1" />
                        <div className="line line2" />
                        <div className="line line3" />
                    </div>

                    <div className="absolute w-[500px] h-[500px] rounded-full border border-pink-100/30 animate-spin-slow" />
                    <div className="absolute w-[420px] h-[420px] rounded-full border border-pink-200/20 animate-spin-reverse blur-[1px]" />
                    <div className="absolute w-[550px] h-[550px] rounded-full border border-pink-300/10 blur-sm" />

                    <div className="absolute inset-0 overflow-hidden pointer-events-none">
                        {[...Array(5)].map((_, i) => (
                            <div key={i} className="sakura">💮</div>
                        ))}
                    </div>

                    {/* Card Loader */}
                    <div className="relative w-[240px] sm:w-[320px] md:w-[340px] lg:w-[360px] aspect-[4/5] overflow-hidden rounded-[30px] shadow-xl z-10">
                        {/* Plasma Background */}
                        <div className="absolute inset-0 z-0">
                            <Plasma />
                        </div>

                        <div className="absolute inset-0 flex items-center justify-center">
                            <div className="w-[120%] h-[120%] rounded-full border border-pink-200/30 animate-spin-slow" />
                        </div>

                        <img
                            src="/img/WhatsApp_Image_2026-05-15_at_22.57.08-removebg-preview.png"
                            alt="Loader"
                            className="absolute inset-2 w-[calc(100%-16px)] h-[calc(100%-16px)] object-cover rounded-[42px] z-10 drop-shadow-[0_0_30px_rgba(255,182,193,0.6)]"
                        />

                        <div className="absolute inset-0 flex flex-col items-center justify-end pb-10 text-center z-20">
                            <div className="text-transparent text-xl font-bold bg-gradient-to-r from-rose-600 via-pink-500 via-orange-400 to-yellow-400 bg-clip-text drop-shadow-[0_0_22px_rgba(244,114,182,0.9)]">
                                {loadingPercent}%
                            </div>
                            <div className="w-56 h-3 rounded-full overflow-hidden mt-3 bg-black/20 border border-pink-500/40 backdrop-blur-md">
                                <div
                                    className="h-full bg-gradient-to-r from-fuchsia-500 via-pink-600 to-rose-500 shadow-[0_0_30px_rgba(236,72,153,1)] transition-all duration-100"
                                    style={{ width: `${loadingPercent}%` }}
                                />
                            </div>
                        </div>
                    </div>
                </div>
            )}

            {/* ===================== MAIN CONTENT ===================== */}
            <div
                className="min-h-[90vh] relative"
                style={{
                    backgroundImage: `url('/img/WhatsApp Image 2026-05-16 at 13.21.24.jpeg')`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center',
                    backgroundRepeat: 'no-repeat',
                    backgroundAttachment: 'fixed',
                }}
            >
                <div id="particles" />
                <div id="sakura-container-main" className="fixed inset-0 overflow-hidden pointer-events-none z-[5]" />

                {/* ===================== NAVBAR ===================== */}
                <header className="fixed top-0 left-0 w-full z-50">
                    <div className="container mx-auto px-6">
                        <div className="mt-4 bg-white/70 backdrop-blur-xl border border-pink shadow-xl rounded-3xl px-6 py-4">
                            <div className="flex items-center justify-between">
                                <a href="#home" className="text-2xl text-dark font-aesthetic">
                                    Nazwa
                                </a>

                                <nav className="hidden lg:flex items-center gap-4">
                                    {navLinks.map((link) => (
                                        <a
                                            key={link.href}
                                            href={link.href}
                                            className="font-aesthetic bg-dark text-pink px-5 py-2 rounded-full shadow-md hover:bg-rose hover:text-white hover:scale-105 transition duration-300"
                                        >
                                            ♡ {link.label} ♡
                                        </a>
                                    ))}
                                </nav>

                                {/* Hamburger - pakai React state */}
                                <button
                                    className="lg:hidden text-dark text-3xl"
                                    aria-label="Toggle menu"
                                    onClick={() => setMobileMenuOpen((prev) => !prev)}
                                >
                                    {mobileMenuOpen ? '✕' : '☰'}
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                {/* Mobile Menu */}
                {mobileMenuOpen && (
                    <div className="lg:hidden fixed top-24 right-6 w-64 z-50">
                        <div className="bg-white/95 backdrop-blur-xl rounded-3xl p-4 shadow-2xl border border-pink flex flex-col gap-3">
                            {navLinks.map((link) => (
                                <a
                                    key={link.href}
                                    href={link.href}
                                    onClick={() => setMobileMenuOpen(false)}
                                    className="font-aesthetic text-dark text-center py-3 rounded-2xl hover:bg-pink hover:text-white transition duration-300"
                                >
                                    ♡ {link.label} ♡
                                </a>
                            ))}
                        </div>
                    </div>
                )}

{/* ===================== HERO SECTION ===================== */}
<section
    id="home"
    className="min-h-screen flex items-center justify-center
    pt-32 lg:pt-24 pb-16 relative overflow-hidden"
>

    {/* PARTICLES */}
    <div id="particles"></div>

    {/* LIQUID EFFECT */}
    <div className="absolute bottom-0 left-0 w-full z-[1] opacity-70">
        <LiquidEther />
    </div>

    {/* CURVED TEXT */}
    <div className="absolute top-0 left-0 w-full z-10">
        <div className="curved-top mt-6">
            <svg viewBox="0 0 1200 220" className="curved-svg translate-y-4">

                <defs>

                    <path
                        id="curve"
                        d="M 100 180 Q 600 -20 1100 180"
                    />

                    <linearGradient id="pinkGradient">
                        <stop offset="0%" stopColor="#f9a8d4" />
                        <stop offset="50%" stopColor="#fbcfe8" />
                        <stop offset="100%" stopColor="#fdba74" />
                    </linearGradient>

                </defs>

                <text
                    className="fill-pink-100 text-[28px]
                    tracking-[8px] font-aesthetic"
                >
                    <textPath href="#curve" startOffset="0%">
                        ✦ 𝓜𝓮𝓮𝓽 𝓝𝓪𝔃𝘄𝓪 ✦ 𝓜𝓮𝓮𝓽 𝓝𝓪𝔃𝘄𝓪 ✦
                    </textPath>
                </text>

            </svg>
        </div>
    </div>

    <div className="container mx-auto px-6 relative z-20">

        <div
            className="flex flex-col lg:flex-row-reverse
            items-center justify-center
            gap-10"
        >

            {/* ===================== PROFILE CARD ===================== */}
            <div
                id="profile-card"
                className="relative flex justify-center items-center"
            >

                {/* MAGIC RINGS */}
                <div className="absolute w-[500px] h-[500px] rounded-full border border-pink-100/30 animate-spin-slow"></div>

                <div className="absolute w-[420px] h-[420px] rounded-full border border-pink-200/20 animate-spin-reverse blur-[1px]"></div>

                <div className="absolute w-[550px] h-[550px] rounded-full border border-pink-300/10 blur-sm"></div>

                {/* CARD */}
                <div
                    className="relative w-[250px] sm:w-[320px]
                    md:w-[340px] lg:w-[360px]
                    aspect-[4/5] overflow-hidden
                    rounded-[35px] shadow-2xl z-10"
                >

                    {/* PLASMA */}
                    <div className="absolute inset-0 z-0">
                        <Plasma />
                    </div>

                    {/* GLOW */}
                    <div className="absolute inset-0 flex items-center justify-center">
                        <div
                            className="w-[130%] h-[130%]
                            rounded-full blur-2xl
                            border border-pink-300/40
                            shadow-[0_0_40px_rgba(255,182,193,0.6)]
                            animate-pulse"
                        ></div>
                    </div>

                    {/* ORBIT */}
                    <div className="absolute inset-0 flex items-center justify-center">
                        <div className="relative w-[120%] h-[120%] animate-spin-slow">

                            <div className="absolute top-0 left-1/2 w-2 h-2 bg-pink-300 rounded-full"></div>

                            <div className="absolute bottom-0 left-1/2 w-2 h-2 bg-pink-200 rounded-full"></div>

                            <div className="absolute left-0 top-1/2 w-1.5 h-1.5 bg-pink-400 rounded-full"></div>

                            <div className="absolute right-0 top-1/2 w-1.5 h-1.5 bg-pink-200 rounded-full"></div>

                        </div>
                    </div>

                    {/* IMAGE */}
                    <img
                        src="/img/WhatsApp_Image_2026-05-15_at_22.57.08-removebg-preview.png"
                        alt="Nazwa"
                        className="absolute inset-2
                        w-[calc(100%-16px)]
                        h-[calc(100%-16px)]
                        object-cover rounded-[42px]
                        z-10
                        drop-shadow-[0_0_30px_rgba(255,182,193,0.6)]"
                    />

                    {/* OVERLAY */}
                    <div
                        className="absolute inset-0
                        bg-gradient-to-t
                        from-pink-500/10
                        via-transparent
                        to-white/5 z-10"
                    ></div>

                </div>

            </div>

            {/* ===================== HERO TEXT ===================== */}
            <div className="w-full lg:w-1/2 text-center lg:text-left">

                <h1
                    className="text-lg md:text-xl
                    font-semibold text-pink-100"
                >

                    (っ◔◡◔)っ ♥ 𝙃𝙖𝙡𝙡𝙤 👋, 𝙎𝙖𝙮𝙖 ♥

                    <span
                        className="block text-5xl md:text-6xl
                        text-white mt-3
                        font-aesthetic
                        leading-tight
                        drop-shadow-[0_0_20px_rgba(255,192,203,0.8)]"
                    >
                        Nazwa Putri Aulia
                    </span>

                </h1>

                <h2
                    className="mt-5 text-2xl md:text-3xl
                    text-pink-100 font-aesthetic
                    tracking-[5px]"
                >
                    Web Developer & UI Designer
                </h2>

                {/* ABOUT TEXT */}
              <p
    id="about-text"
    className="typing-cursor mt-8
    text-pink-50 leading-[2]
    max-w-xl
    text-lg
    whitespace-pre-line
    font-aesthetic
    drop-shadow-[0_0_10px_rgba(255,255,255,0.4)]"
>
    𝕻𝖆𝖘𝖘𝖎𝖔𝖓𝖆𝖙𝖊 𝖆𝖇𝖔𝖚𝖙 𝖒𝖔𝖉𝖊𝖗𝖓 𝖜𝖊𝖇
    𝖉𝖊𝖛𝖊𝖑𝖔𝖕𝖒𝖊𝖓𝖙 𝖆𝖓𝖉
    𝖈𝖗𝖊𝖆𝖙𝖎𝖓𝖌 𝖊𝖑𝖊𝖌𝖆𝖓𝖙
    𝖉𝖎𝖌𝖎𝖙𝖆𝖑 𝖊𝖝𝖕𝖊𝖗𝖎𝖊𝖓𝖈𝖊𝖘.
    {'\n\n'}

    𝕴𝖓𝖙𝖊𝖗𝖊𝖘𝖙𝖊𝖉 𝖎𝖓 𝖇𝖚𝖎𝖑𝖉𝖎𝖓𝖌
    𝖚𝖘𝖊𝖗-𝖋𝖔𝖈𝖚𝖘𝖊𝖉,
    𝖘𝖈𝖆𝖑𝖆𝖇𝖑𝖊, 𝖆𝖓𝖉
    𝖊𝖋𝖋𝖎𝖈𝖎𝖊𝖓𝖙 𝖜𝖊𝖇
    𝖆𝖕𝖕𝖑𝖎𝖈𝖆𝖙𝖎𝖔𝖓𝖘
    𝖜𝖎𝖙𝖍 𝖆𝖊𝖘𝖙𝖍𝖊𝖙𝖎𝖈
    𝖆𝖓𝖉 𝖎𝖓𝖙𝖊𝖗𝖆𝖈𝖙𝖎𝖛𝖊
    𝖉𝖊𝖘𝖎𝖌𝖓𝖘.
    {'\n\n'}

    𝕮𝖚𝖗𝖗𝖊𝖓𝖙𝖑𝖞 𝖎𝖒𝖕𝖗𝖔𝖛𝖎𝖓𝖌
    𝖘𝖐𝖎𝖑𝖑𝖘 𝖎𝖓
    𝕻𝕳𝕻, 𝕵𝖆𝖛𝖆𝕾𝖈𝖗𝖎𝖕𝖙,
    𝕽𝖊𝖆𝖈𝖙, 𝕷𝖆𝖗𝖆𝖛𝖊𝖑,
    𝖆𝖓𝖉 𝖀𝕴/𝖀𝖃 𝕯𝖊𝖘𝖎𝖌𝖓.
    {'\n\n'}

    𝕬𝖑𝖘𝖔 𝖊𝖝𝖕𝖑𝖔𝖗𝖎𝖓𝖌
    𝖙𝖍𝖊 𝖜𝖔𝖗𝖑𝖉 𝖔𝖋
    𝕬𝖗𝖙𝖎𝖋𝖎𝖈𝖎𝖆𝖑
    𝕴𝖓𝖙𝖊𝖑𝖑𝖎𝖌𝖊𝖓𝖈𝖊 ✨
</p>

                {/* BUTTON */}
                <div
                    className="flex flex-wrap
                    justify-center lg:justify-start
                    items-center gap-5 mt-10"
                >

                    {/* CONTACT */}
                    <a
                        href="#contact"
                        className="inline-block
                        bg-dark text-pink
                        px-8 py-4 rounded-full
                        shadow-lg
                        hover:bg-rose
                        hover:shadow-2xl
                        hover:scale-105
                        transition duration-300
                        font-aesthetic"
                    >
                        ♡💖♡ 𝓗𝓾𝓫𝓾𝓷𝓰𝓲 𝓢𝓪𝔂𝓪 ♡💖♡
                    </a>

                    {/* CV */}
                    <a
                        href="/assets/cv-nazwa.pdf"
                        target="_blank"
                        rel="noopener noreferrer"
                        download
                        className="inline-block
                        bg-dark text-pink
                        px-8 py-4 rounded-full
                        shadow-lg
                        hover:bg-rose
                        hover:shadow-2xl
                        hover:scale-105
                        transition duration-300
                        font-aesthetic"
                    >
                        ♡📄♡ 𝓓𝓸𝔀𝓷𝓵𝓸𝓪𝓭 𝓒𝓥 ♡📄♡
                                    </a>
                                </div>
                            </div>

                            {/* Hero Image / Profile Card */}
                            <div className="w-full lg:w-1/2 flex justify-center">
                                <div className="relative w-full max-w-md">

                                    <div className="absolute left-[-180px] top-6 hidden lg:block z-20 max-w-[260px]">
                                        <div className="absolute -inset-6 bg-rose-300/20 blur-3xl rounded-full -z-10" />
                                        <span className="absolute -top-4 left-10 text-pink-300 text-xl animate-pulse">✦</span>
                                        <span className="absolute bottom-0 right-0 text-rose-300 text-lg animate-pulse">✧</span>
                                        <div className="w-20 h-[2px] bg-gradient-to-r from-rose-300 to-transparent mb-4" />
                                        <p className="mt-3 font-['Great_Vibes'] text-[39px] text-black leading-[1.1] drop-shadow-[0_0_10px_rgba(255,182,193,0.5)]">
                                            My journey path began <br />
                                            with a love for curiosity, <br />
                                            art, and dreamy form.
                                        </p>
                                    </div>

                                    <div className="absolute inset-0 bg-glow blur-3xl opacity-40 rounded-full" />
                                    <div className="absolute -top-14 left-1/2 -translate-x-1/2 w-[3px] h-14 rounded-full bg-gradient-to-b from-yellow-200 via-yellow-400 to-amber-600 shadow-[0_0_12px_rgba(255,215,0,0.8)] z-50" />

                                    <div className="card-swing relative w-[300px] h-[400px] bg-white/10 backdrop-blur-md border border-white/20 rounded-[40px] shadow-2xl overflow-hidden mx-auto flex flex-col items-center justify-center">
                                        <div className="absolute inset-0 bg-pink-300/10" />
                                        <div className="absolute w-[420px] h-[420px] border border-yellow-200/30 rounded-full rotate-[20deg] animate-spin-slow shadow-[0_0_35px_rgba(255,215,180,0.35)] z-0" />
                                        <div className="absolute w-[340px] h-[340px] border border-rose-300/30 rounded-full rotate-[-15deg] animate-spin-reverse shadow-[0_0_30px_rgba(244,172,183,0.35)] z-0" />
                                        <div className="absolute w-[260px] h-[260px] rounded-full bg-gradient-to-r from-yellow-200/10 via-pink-200/10 to-rose-300/10 blur-3xl animate-pulse z-0" />

                                        <div className="absolute inset-0 flex items-center justify-center z-0">
                                            <div className="relative w-[120%] h-[120%] animate-spin-slow">
                                                <div className="absolute top-0 left-1/2 w-3 h-3 bg-yellow-200 rounded-full shadow-[0_0_20px_rgba(255,215,0,0.9)]" />
                                                <div className="absolute bottom-0 left-1/2 w-2 h-2 bg-rose-300 rounded-full shadow-[0_0_18px_rgba(244,172,183,0.9)]" />
                                                <div className="absolute left-0 top-1/2 w-2 h-2 bg-pink-200 rounded-full" />
                                                <div className="absolute right-0 top-1/2 w-2 h-2 bg-yellow-100 rounded-full" />
                                            </div>
                                        </div>

                                        {/* profile-card id untuk swing animation */}
                                        <div id="profile-card" className="profile-glow profile-spin relative rounded-full p-1">
                                            <img
                                                src="/img/WhatsApp_Image_2026-05-14_at_22.06.22-removebg-preview.png"
                                                alt="Nazwa"
                                                className="w-[190px] h-[190px] object-cover rounded-full relative z-10"
                                            />
                                        </div>

                                        <a
                                            href="https://open.spotify.com/track/1fDFHXcykq4iw8Gg7s5hG9"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="group relative z-20 mt-6 flex items-center gap-4 px-6 py-4 rounded-[28px] overflow-hidden border border-rose-200/30 bg-[#c98f9f]/20 backdrop-blur-xl shadow-[0_0_35px_rgba(201,143,159,0.35)] hover:scale-105 transition duration-500"
                                        >
                                            <div className="absolute inset-0 bg-gradient-to-r from-[#c98f9f]/20 via-[#e7b8c4]/20 to-[#d9a3b3]/20 opacity-80" />
                                            <div className="absolute -left-10 w-32 h-32 bg-rose-300/30 rounded-full blur-3xl" />
                                            <div className="relative z-10 w-14 h-14 rounded-full bg-[#d9a3b3]/40 flex items-center justify-center shadow-[0_0_20px_rgba(255,182,193,0.45)]">
                                                <i className="fa-brands fa-spotify text-white text-2xl" />
                                            </div>
                                            <div className="relative z-10 flex-1">
                                                <p className="text-[11px] uppercase tracking-[3px] text-rose-100/80">Now Playing</p>
                                                <h4 className="text-white text-lg font-semibold leading-tight">About You</h4>
                                                <span className="text-rose-100 text-sm">The 1975</span>
                                                <div className="flex items-end gap-[3px] mt-3 h-8">
                                                    {[3, 6, 4, 7, 5, 3, 6].map((h, i) => (
                                                        <span key={i} className="wave-bar" style={{ height: `${h * 4}px` }} />
                                                    ))}
                                                </div>
                                            </div>
                                        </a>

                                        <div className="relative z-20 text-center mt-2">
                                            <h2 className="text-primary text-2xl tracking-widest font-semibold">
                                                <span className="font-[cursive] text-pink-200">𝓟𝓻𝓸𝓯𝓲𝓵𝓮</span>
                                            </h2>
                                            <p className="text-pink-100 text-sm mt-2 tracking-wide">
                                                <span className="font-[cursive]">𝓝𝓪𝔃𝔀𝓪 𝓦𝓮𝓫 𝓓𝓮𝓿𝓮𝓵𝓸𝓹𝓮𝓻</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                {/* ===================== ABOUT SECTION ===================== */}
                <section id="about" className="py-24 relative overflow-hidden">
                    <div className="container mx-auto px-6">
                        <div className="grid grid-cols-1 lg:grid-cols-2 gap-10">

                            <div className="about-card bg-bgn backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-pink">
                                <h2 className="text-3xl md:text-4xl text-dark font-aesthetic mb-6">♡ About Me ♡</h2>
                                <p className="text-rose leading-relaxed">
                                    𝐂𝐮𝐫𝐫𝐞𝐧𝐭𝐥𝐲 𝐬𝐭𝐮𝐝𝐲𝐢𝐧𝐠 𝐚𝐭 𝐔𝐧𝐢𝐯𝐞𝐫𝐬𝐢𝐭𝐚𝐬 𝐌𝐚𝐥𝐢𝐤𝐮𝐬𝐬𝐚𝐥𝐞𝐡 𝐰𝐢𝐭𝐡 𝐚 𝐬𝐭𝐫𝐨𝐧𝐠 𝐢𝐧𝐭𝐞𝐫𝐞𝐬𝐭 𝐢𝐧 𝐔𝐗 𝐃𝐞𝐬𝐢𝐠𝐧,
                                    𝐌𝐨𝐛𝐢𝐥𝐞 𝐀𝐩𝐩𝐥𝐢𝐜𝐚𝐭𝐢𝐨𝐧 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭, 𝐚𝐧𝐝 𝐖𝐞𝐛 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐦𝐞𝐧𝐭.
                                    <br /><br />
                                    𝐀𝐛𝐥𝐞 𝐭𝐨 𝐮𝐬𝐞 𝐅𝐢𝐠𝐦𝐚, 𝐮𝐧𝐝𝐞𝐫𝐬𝐭𝐚𝐧𝐝 𝐛𝐚𝐬𝐢𝐜 𝐔𝐈/𝐔𝐗 𝐩𝐫𝐢𝐧𝐜𝐢𝐩𝐥𝐞𝐬, 𝐚𝐧𝐝 𝐡𝐚𝐯𝐞 𝐚 𝐬𝐭𝐫𝐨𝐧𝐠 𝐬𝐞𝐧𝐬𝐞 𝐨𝐟 𝐮𝐬𝐞𝐫 𝐞𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐞.
                                    <br /><br />
                                    𝐄𝐱𝐩𝐞𝐫𝐢𝐞𝐧𝐜𝐞𝐝 𝐢𝐧 𝐮𝐬𝐢𝐧𝐠 𝐦𝐨𝐝𝐞𝐫𝐧 𝐟𝐫𝐨𝐧𝐭𝐞𝐧𝐝 𝐟𝐫𝐚𝐦𝐞𝐰𝐨𝐫𝐤𝐬 𝐬𝐮𝐜𝐡 𝐚𝐬 𝐑𝐞𝐚𝐜𝐭 𝐨𝐫 𝐬𝐢𝐦𝐢𝐥𝐚𝐫 𝐭𝐞𝐜𝐡𝐧𝐨𝐥𝐨𝐠𝐢𝐞𝐬.
                                    <br /><br />
                                    𝐅𝐚𝐦𝐢𝐥𝐢𝐚𝐫 𝐰𝐢𝐭𝐡 𝐯𝐞𝐫𝐬𝐢𝐨𝐧 𝐜𝐨𝐧𝐭𝐫𝐨𝐥 𝐬𝐲𝐬𝐭𝐞𝐦𝐬 𝐬𝐮𝐜𝐡 𝐚𝐬 𝐆𝐢𝐭, 𝐩𝐨𝐬𝐬𝐞𝐬𝐬 𝐬𝐭𝐫𝐨𝐧𝐠 𝐩𝐫𝐨𝐛𝐥𝐞𝐦-𝐬𝐨𝐥𝐯𝐢𝐧𝐠 𝐬𝐤𝐢𝐥𝐥𝐬 ✨
                                </p>
                            </div>

                            {/* Contact Card */}
                            <div
                                id="contact"
                                className="contact-card w-full max-w-[420px] mx-auto bg-bgn backdrop-blur-lg rounded-3xl shadow-xl p-8 border border-pink relative overflow-hidden"
                            >
                                <h2 className="text-3xl md:text-4xl text-dark font-aesthetic mb-6">♡ Mari Berteman ♡</h2>
                                <p className="text-rose leading-relaxed mb-8">
                                    𝐀𝐲𝐨𝐨 𝐦𝐚𝐫𝐢 𝐛𝐞𝐫𝐭𝐞𝐦𝐚𝐧 𝐝𝐚𝐧 𝐬𝐚𝐥𝐢𝐧𝐠 𝐭𝐞𝐫𝐡𝐮𝐛𝐮𝐧𝐠 💕 𝐊𝐚𝐦𝐮 𝐛𝐢𝐬𝐚 𝐡𝐮𝐛𝐮𝐧𝐠𝐢 𝐚𝐤𝐮 𝐝𝐢 𝐬𝐨𝐬𝐢𝐚𝐥 𝐦𝐞𝐝𝐢𝐚 𝐝𝐢 𝐛𝐚𝐰𝐚𝐡 𝐢𝐧𝐢 ✨
                                </p>
                                <div className="flex justify-center flex-wrap gap-4 mt-6">
                                    {socialLinks.map((social, i) => (
                                        <a
                                            key={i}
                                            href={social.href}
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="bg-dark text-pink w-14 h-14 rounded-full flex items-center justify-center hover:bg-rose hover:scale-110 transition duration-300 text-2xl"
                                        >
                                            {social.icon === 'youtube' ? (
                                                <svg
                                                    role="img"
                                                    width="24"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor"
                                                >
                                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                                </svg>
                                            ) : (
                                                <i className={`fa-brands ${social.icon}`} />
                                            )}
                                        </a>
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="sparkle sparkle1">✦</div>
                    <div className="sparkle sparkle2">♡</div>
                    <div className="sparkle sparkle3">✧</div>
                </section>

                {/* ===================== UKM + CIRCULAR GALLERY ===================== */}
                <div className="text-center mt-16 mb-10">
                    <h2 className="font-['Great_Vibes'] text-[40px] md:text-[78px] text-[#6b213f] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                        UKM - Himpunan
                    </h2>
                </div>

                <div className="w-full h-[600px]">
                    <CircularGallery />
                </div>

                {/* ===================== PROJECT SECTION ===================== */}
                <section id="project" className="min-h-[90vh] py-24 relative overflow-hidden">
                    <div className="absolute top-0 left-0 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full" />
                    <div className="absolute bottom-0 right-0 w-[400px] h-[400px] bg-rose-200/30 blur-3xl rounded-full" />
                    <div className="absolute top-20 left-20 text-4xl animate-bounce">🌸</div>
                    <div className="absolute bottom-32 right-24 text-3xl animate-pulse">✦</div>

                    <div className="container mx-auto px-6 relative z-10">
                        <div className="text-center mb-16">
                            <h2 className="text-4xl md:text-5xl font-['Great_Vibes'] text-[#6b213f] drop-shadow-lg">
                                Welcome to Nazwa's<br />Creative Corner
                            </h2>
                            <p className="mt-6 text-lg text-rose-700 max-w-2xl mx-auto">
                                𝕳𝖊𝖗𝖊 𝖆𝖗𝖊 𝖘𝖔𝖒𝖊 𝖆𝖊𝖘𝖙𝖍𝖊𝖙𝖎𝖈 𝖕𝖗𝖔𝖏𝖊𝖈𝖙𝖘 𝖆𝖓𝖉 𝖒𝖔𝖉𝖊𝖗𝖓 𝖀𝕴 𝖉𝖊𝖘𝖎𝖌𝖓𝖘 𝖙𝖍𝖆𝖙 𝕴 𝖈𝖗𝖊𝖆𝖙𝖊𝖉 𝖚𝖘𝖎𝖓𝖌 𝕷𝖆𝖗𝖆𝖛𝖊𝖑 &amp; 𝕿𝖆𝖎𝖑𝖜𝖎𝖓𝖉 𝕮𝕾𝕾 ✨
                            </p>
                        </div>
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                            {projects.map((project, i) => (
                                <div
                                    key={i}
                                    className="group relative bg-white/50 backdrop-blur-xl rounded-[28px] border border-white/40 shadow-2xl overflow-hidden hover:scale-105 transition duration-500"
                                >
                                    <div className="absolute inset-0 bg-pink-300/10 opacity-0 group-hover:opacity-100 transition duration-500" />
                                    <img
                                        src={project.image}
                                        alt={project.title}
                                        className="w-full h-44 object-cover"
                                    />
                                    <div className="p-4 relative z-10">
                                        <h3 className="text-xl font-semibold text-dark">{project.title}</h3>
                                        <p className="mt-3 text-rose">{project.description}</p>
                                        <a
                                            href={project.link}
                                            target={project.external ? '_blank' : undefined}
                                            rel={project.external ? 'noopener noreferrer' : undefined}
                                            className="inline-block mt-5 px-5 py-1.5 text-sm rounded-full bg-dark text-pink hover:bg-rose hover:text-white transition"
                                        >
                                            View Project ✦
                                        </a>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                {/* ===================== CERTIFICATE SECTION ===================== */}
                <section
                    id="certificate"
                    className="min-h-screen overflow-hidden relative flex items-center justify-center py-10 md:py-24"
                >
                    <div className="absolute top-8 w-full text-center z-20">
                        <h2 className="font-['Great_Vibes'] text-[40px] sm:text-[55px] md:text-[80px] text-[#6b213f] drop-shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                            A Gilded Gallery of Achievement
                        </h2>
                    </div>

                    <div className="relative w-full max-w-7xl h-[760px] sm:h-[900px] md:h-[1100px] scale-[0.55] sm:scale-[0.75] md:scale-100 origin-top">

                        {/* CARD 1 - Circle */}
                        <div className="absolute left-[-3%] top-[24%] w-[320px] h-[320px] rounded-full overflow-hidden border-[10px] border-yellow-300 shadow-[0_0_60px_rgba(255,215,0,0.9)] rotate-[-6deg] hover:scale-105 transition duration-500">
                            <div className="gold-animated pointer-events-none rounded-full" />
                            <img src={certificates[0].image} alt="Certificate 1" className="w-full h-full object-cover" />
                        </div>

                        {/* CARD 2 */}
                        <div className="absolute left-[20%] top-[2%] w-[280px] h-[430px] bg-[#f8f1e7] rounded-[38px] shadow-2xl p-5 rotate-[-3deg] flex flex-col border-[4px] border-[#d6b36a] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[1].image} alt={certificates[1].title} className="w-full h-[315px] object-cover rounded-[24px] mt-4 relative z-10" />
                            <p className="text-center text-[18px] mt-4 text-black font-bold relative z-10">{certificates[1].title}</p>
                        </div>

                        {/* CARD 3 */}
                        <div className="absolute left-[34%] top-[44%] w-[320px] h-[540px] bg-[#f8f1e7] rounded-[42px] shadow-2xl p-5 rotate-[4deg] flex flex-col border-[4px] border-[#d6b36a] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[2].image} alt={certificates[2].title} className="w-full h-[390px] object-cover rounded-[28px] mt-5 relative z-10" />
                            <p className="text-center text-[20px] mt-4 text-black font-bold relative z-10">{certificates[2].title}</p>
                            <p className="text-center text-[14px] text-black/70 italic mt-1 relative z-10">{certificates[2].subtitle}</p>
                        </div>

                        {/* CARD 4 */}
                        <div className="absolute left-[57%] top-[18%] w-[290px] h-[390px] bg-[#f8f1e7] rounded-[38px] shadow-2xl p-4 flex flex-col border-[4px] border-[#d6b36a] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[3].image} alt={certificates[3].title} className="w-full h-[250px] object-cover rounded-2xl mt-4 relative z-10" />
                            <h3 className="text-center mt-3 text-black text-lg font-semibold relative z-10">{certificates[3].title}</h3>
                            <p className="text-center text-[11px] text-black/60 italic relative z-10">{certificates[3].subtitle}</p>
                        </div>

                        {/* CARD 5 */}
                        <div className="absolute right-[-3%] top-[3%] w-[300px] h-[500px] bg-[#f8f1e7] rounded-[40px] shadow-2xl p-5 rotate-[6deg] flex flex-col border-[3px] border-[#d6c2a8] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[4].image} alt={certificates[4].title} className="w-full h-[360px] object-cover rounded-[24px] mt-4 relative z-10" />
                            <p className="text-center text-[18px] mt-4 text-black font-semibold relative z-10">{certificates[4].title}</p>
                        </div>

                        {/* CARD 6 */}
                        <div className="absolute left-[6%] bottom-[1%] w-[280px] h-[320px] bg-[#f8f1e7] rounded-[32px] shadow-2xl p-4 rotate-[4deg] flex flex-col border-[3px] border-[#d6c2a8] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[5].image} alt={certificates[5].title} className="w-full h-[230px] object-cover rounded-[22px] mt-4 relative z-10" />
                            <p className="text-center text-[15px] mt-4 text-black font-semibold relative z-10">{certificates[5].title}</p>
                        </div>

                        {/* CARD 7 */}
                        <div className="absolute right-[5%] bottom-[0%] w-[270px] h-[400px] bg-[#f8f1e7] rounded-[32px] shadow-2xl p-4 rotate-[-5deg] flex flex-col border-[3px] border-[#d6c2a8] hover:scale-105 transition duration-500 overflow-hidden">
                            <div className="gold-animated pointer-events-none" />
                            <img src={certificates[6].image} alt={certificates[6].title} className="w-full h-[300px] object-cover rounded-[22px] mt-4 relative z-10" />
                            <p className="text-center text-[16px] mt-4 text-black font-semibold relative z-10">{certificates[6].title}</p>
                        </div>
                    </div>
                </section>

                {/* ===================== ACTIVITIES SECTION ===================== */}
                <section id="activities" className="min-h-screen py-24 relative overflow-hidden">
                    <div className="absolute top-0 left-0 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full" />
                    <div className="absolute bottom-0 right-0 w-[450px] h-[450px] bg-rose-200/30 blur-3xl rounded-full" />

                    <div className="container mx-auto px-4 relative z-10">
                        <div className="text-center mb-14">
                            <h2 className="font-['Great_Vibes'] text-[40px] md:text-[78px] text-[#6b213f] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                                A Narrative of Creative Evolution
                            </h2>
                        </div>

                        <div className="relative max-w-7xl mx-auto bg-[#f8dede]/70 backdrop-blur-xl border border-white/40 rounded-[45px] shadow-2xl p-4 md:p-8 overflow-hidden">
                            <div className="absolute top-8 left-10 text-4xl animate-pulse">🌸</div>
                            <div className="absolute bottom-8 right-12 text-3xl animate-bounce">✦</div>

                            {/* ROW 1 */}
                            <div className="grid grid-cols-1 lg:grid-cols-12 gap-6">
                                <div className="col-span-5">
                                    <ActivityCard
                                        title="WEB DESIGN ACTIVITIES"
                                        profileImage="/img/image.png"
                                        category="WEB DESIGN"
                                        items={['Creative Web Experience', 'Responsive Web Design', 'Landing Page Design']}
                                        showcaseImages={[
                                            '/img/WhatsApp Image 2026-05-17 at 17.13.21.jpeg',
                                            '/img/WhatsApp Image 2026-05-17 at 17.13.22.jpeg',
                                            '/img/WhatsApp Image 2026-05-17 at 17.13.22.jpeg',
                                        ]}
                                    />
                                </div>

                                <div className="col-span-2 flex items-center">
                                    <div className="bg-[#fceaea] rounded-[35px] border-[4px] border-[#f2c5c5] shadow-2xl p-4 rotate-[-2deg] h-[420px] flex flex-col justify-center items-center relative overflow-hidden">
                                        <div className="absolute inset-0 flex items-center justify-center pointer-events-none">
                                            <div className="w-[160%] h-[160%] rounded-full border-[3px] border-rose-300/40 animate-spin-slow" />
                                        </div>
                                        <div className="relative z-10 flex flex-col items-center">
                                            <img src="/img/A1.jpeg" alt="Artistic Vibes" className="w-full h-[280px] object-cover rounded-[24px] shadow-lg" />
                                            <h3 className="mt-4 text-[#6b213f] text-xl font-semibold text-center">Artistic Vibes</h3>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-span-5">
                                    <ActivityCard
                                        title="FRONTEND ACTIVITIES"
                                        profileImage="/img/jpg1.png.jpeg"
                                        category="FRONTEND"
                                        items={['Website Performance Optimization', 'API Integration UI', 'Responsive Website Development']}
                                        showcaseImages={['/img/F1.jpeg', '/img/F2.jpeg', '/img/F3.jpeg']}
                                    />
                                </div>
                            </div>

                            {/* ROW 2 */}
                            <div className="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                                <div className="col-span-5">
                                    <ActivityCard
                                        title="MOBILE APP DEVELOPMENT ACTIVITIES"
                                        profileImage="/img/M1.jpeg"
                                        category="MOBILE APP"
                                        items={['Social Media App UI Design', 'iOS App Concept', 'Modern Mobile Dashboard']}
                                        showcaseImages={['/img/M2.jpeg', '/img/M3.jpeg', '/img/M4.jpeg']}
                                    />
                                </div>

                                <div className="col-span-2 flex items-center">
                                    <div className="bg-[#fceaea] rounded-[35px] border-[4px] border-[#f2c5c5] shadow-2xl p-4 h-[420px] flex flex-col justify-center items-center relative overflow-hidden">
                                        <div className="absolute inset-0 flex items-center justify-center pointer-events-none">
                                            <div className="w-[160%] h-[160%] rounded-full border-[3px] border-rose-300/40 animate-spin-slow" />
                                        </div>
                                        <div className="relative z-10 flex flex-col items-center">
                                            <img src="/img/A1.jpeg" alt="Elegant Creativity" className="w-full h-[280px] object-cover rounded-[24px] shadow-lg" />
                                            <h3 className="mt-4 text-[#6b213f] text-xl font-semibold text-center">Elegant Creativity</h3>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-span-5">
                                    <ActivityCard
                                        title="UX DESIGN ACTIVITIES"
                                        profileImage="/img/U1.jpeg"
                                        category="UX DESIGN"
                                        items={['Interactive Testing', 'Interactive Prototype', 'User Flow Design']}
                                        showcaseImages={['/img/U2.jpeg', '/img/U3.jpeg', '/img/U4.jpeg']}
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* ===================== TECH STACK + LOGO LOOP ===================== */}
                <div className="text-center mt-16 mb-14">
                    <h2 className="font-['Great_Vibes'] text-[40px] md:text-[78px] text-[#6b213f] drop-shadow-[0_0_15px_rgba(0,0,0,0.25)]">
                        Tech Stack
                    </h2>
                </div>

                <LogoLoop logos={techLogos} speed={120} direction="left" />

                {/* ===================== CLOSING SECTION ===================== */}
                <section id="closing" className="min-h-screen flex items-center justify-center relative overflow-hidden px-6 py-20">
                    <div className="absolute top-0 left-0 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full" />
                    <div className="absolute bottom-0 right-0 w-[400px] h-[400px] bg-rose-200/30 blur-3xl rounded-full" />
                    <div className="absolute top-24 left-16 text-3xl animate-pulse">✦</div>
                    <div className="absolute top-40 right-24 text-4xl animate-bounce">🌸</div>
                    <div className="absolute bottom-24 left-1/4 text-2xl animate-pulse">♡</div>

                    <div className="relative z-10 max-w-2xl w-full rounded-[40px] p-[2px] overflow-hidden">
                        <div className="absolute inset-[-200%] animate-spin-slow bg-[conic-gradient(from_0deg,#ffd6e7,#ffc9a9,#fff1b8,#d4ffd6,#cfe8ff,#e5d4ff,#ffd6e7)]" />
                        <div className="absolute inset-0 rounded-[40px] blur-3xl opacity-60 bg-gradient-to-r from-pink-300 via-rose-200 to-orange-200" />

                        <div className="relative bg-white/45 backdrop-blur-2xl border border-white/40 shadow-[0_0_50px_rgba(255,182,193,0.35)] rounded-[40px] px-8 py-14 text-center overflow-hidden">
                            <span className="absolute top-6 left-8 text-3xl animate-float">🌸</span>
                            <span className="absolute top-8 right-10 text-2xl animate-pulse">✦</span>
                            <span className="absolute bottom-8 left-10 text-2xl animate-pulse">♡</span>
                            <span className="absolute bottom-8 right-10 text-3xl animate-float">🌸</span>

                            <div className="relative z-10">
                                <div className="flex justify-center mb-5">
                                    <div className="w-20 h-20 rounded-full bg-gradient-to-br from-pink-200/70 via-rose-100/70 to-orange-100/70 border border-white/40 shadow-[0_0_35px_rgba(255,182,193,0.5)] flex items-center justify-center backdrop-blur-xl animate-pulse">
                                        <span className="text-4xl">🌸</span>
                                    </div>
                                </div>
                                <p className="uppercase tracking-[0.4em] text-[11px] text-rose-400 mb-4">Portfolio Closing Section</p>
                                <h2 className="font-['Great_Vibes'] text-[48px] md:text-[68px] leading-[1.1] text-[#5d3142] drop-shadow-[0_0_12px_rgba(255,182,193,0.5)]">
                                    Thank you for visiting<br />
                                    <span className="bg-gradient-to-r from-rose-400 via-pink-500 to-orange-300 bg-clip-text text-transparent">
                                        Nazwa's Creative Corner ♡
                                    </span>
                                </h2>
                                <div className="flex items-center justify-center gap-3 mt-6">
                                    <div className="w-16 h-[2px] bg-gradient-to-r from-transparent to-rose-300" />
                                    <span className="text-rose-400 text-xl">✦</span>
                                    <div className="w-16 h-[2px] bg-gradient-to-l from-transparent to-rose-300" />
                                </div>
                                <p className="mt-7 text-[#7a5563] text-[15px] md:text-lg leading-relaxed max-w-xl mx-auto">
                                    𝕰𝖛𝖊𝖗𝖞 𝖉𝖊𝖘𝖎𝖌𝖓 𝖙𝖊𝖑𝖑𝖘 𝖆 𝖑𝖎𝖙𝖙𝖑𝖊 𝖘𝖙𝖔𝖗𝖞, 𝖆𝖓𝖉 𝕴'𝖒 𝖙𝖗𝖚𝖑𝖞 𝖍𝖆𝖕𝖕𝖞 𝖞𝖔𝖚 𝖜𝖊𝖗𝖊 𝖕𝖆𝖗𝖙 𝖔𝖋 𝖒𝖎𝖓𝖊 ✨
                                </p>
                                <p className="mt-7 text-[#7a5563] text-[15px] md:text-lg leading-relaxed max-w-xl mx-auto font-[cursive]">
                                    𝓣𝓱𝓪𝓷𝓴 𝔂𝓸𝓾 𝓯𝓸𝓻 𝓼𝓬𝓻𝓸𝓵𝓵𝓲𝓷𝓰 𝓽𝓱𝓻𝓸𝓾𝓰𝓱 𝓶𝔂 𝓳𝓸𝓾𝓻𝓷𝓮𝔂, 𝓹𝓻𝓸𝓳𝓮𝓬𝓽𝓼, 𝓬𝓻𝓮𝓪𝓽𝓲𝓿𝓲𝓽𝔂, 𝓪𝓷𝓭 𝓭𝓻𝓮𝓪𝓶𝔂 𝓲𝓭𝓮𝓪𝓼 💕
                                </p>
                                <div className="flex flex-wrap justify-center gap-4 mt-10">
                                    <a
                                        href="#home"
                                        className="group inline-flex items-center gap-2 px-8 py-3 rounded-full bg-gradient-to-r from-pink-300 via-rose-300 to-orange-200 text-[#5d3142] shadow-[0_0_25px_rgba(255,182,193,0.5)] hover:scale-105 hover:shadow-[0_0_40px_rgba(255,182,193,0.8)] transition duration-300"
                                    >
                                        <span className="group-hover:rotate-12 transition">✿</span>
                                        See You Again
                                    </a>
                                    <a
                                        href="#contact"
                                        className="inline-flex items-center gap-2 px-8 py-3 rounded-full border border-rose-200 bg-white/40 backdrop-blur-xl text-[#5d3142] hover:bg-rose-100/70 hover:scale-105 transition duration-300"
                                    >
                                        ♡ Contact Me
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* ===================== FOOTER ===================== */}
                <footer className="pt-2 pb-4 text-center relative z-10 -mt-26">
                    <div className="flex flex-wrap justify-center gap-6 text-[#5d3142] text-sm md:text-base">
                        <a href="#about" className="hover:text-rose-500 transition">About</a>
                        <span>|</span>
                        <a href="#project" className="hover:text-rose-500 transition">Projects</a>
                        <span>|</span>
                        <a href="#certificate" className="hover:text-rose-500 transition">Process</a>
                        <span>|</span>
                        <a href="#contact" className="hover:text-rose-500 transition">Contact</a>
                    </div>
                    <div className="flex justify-center gap-5 mt-6 text-[#5d3142] text-xl">
                        <a href="https://wa.me/6289654521599" target="_blank" rel="noopener noreferrer" className="hover:text-rose-500 transition">
                            <i className="fa-brands fa-whatsapp" />
                        </a>
                        <a href="https://instagram.com/nzwaulia.03" target="_blank" rel="noopener noreferrer" className="hover:text-rose-500 transition">
                            <i className="fa-brands fa-instagram" />
                        </a>
                        <a href="https://www.linkedin.com/in/nazwa-putri-aulia-86b88b311" target="_blank" rel="noopener noreferrer" className="hover:text-rose-500 transition">
                            <i className="fa-brands fa-linkedin-in" />
                        </a>
                    </div>
                </footer>
            </div>
        </>
    );
}
