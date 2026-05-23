import React from "react";
import ReactDOM from "react-dom/client";

import LiquidEther from "./components/LiquidEther";
import LogoLoop from "./components/LogoLoop";
import CircularGallery from "./components/CircularGallery";
import Plasma from "./components/Plasma";

import {
    SiReact,
    SiLaravel,
    SiTailwindcss,
    SiJavascript,
    SiPhp,
    SiFigma,
} from "react-icons/si";

/* ================= APP BACKGROUND ================= */
function App() {
    return (
        <div
            style={{
                width: "100%",
                height: "100vh",
                position: "fixed",
                inset: 0,
                zIndex: -1,
            }}
        >
            <LiquidEther />
        </div>
    );
}

/* ================= MAIN ROOT ================= */
ReactDOM.createRoot(document.getElementById("app")).render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);

/* ================= PLASMA ================= */
const plasmaEl = document.getElementById("plasma-loader");

if (plasmaEl) {
    ReactDOM.createRoot(plasmaEl).render(
        <Plasma
            color="#B497CF"
            speed={1}
            direction="forward"
            scale={1}
            opacity={1}
            mouseInteractive={false}
        />
    );
}

/* ================= LOGO LOOP (FIX BRAND COLOR) ================= */
const logoLoopEl = document.getElementById("logo-loop-section");

if (logoLoopEl) {
    ReactDOM.createRoot(logoLoopEl).render(
        <LogoLoop
            logos={[
                { node: <SiReact color="#61DBFB" />, ariaLabel: "React" },
                { node: <SiLaravel color="#FF2D20" />, ariaLabel: "Laravel" },
                { node: <SiTailwindcss color="#38BDF8" />, ariaLabel: "Tailwind CSS" },
                { node: <SiJavascript color="#F7DF1E" />, ariaLabel: "JavaScript" },
                { node: <SiPhp color="#777BB4" />, ariaLabel: "PHP" },
                { node: <SiFigma color="#F24E1E" />, ariaLabel: "Figma" },
            ]}
            speed={120}
            direction="left"
        />
    );
}

/* ================= CIRCULAR GALLERY ================= */
const galleryEl = document.getElementById("circular-gallery");

if (galleryEl) {
    ReactDOM.createRoot(galleryEl).render(
        <CircularGallery />
    );
}