const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});



ScrollReveal().reveal('.about-text', {
    distance: '40px',
    duration: 1000,
    origin: 'bottom',
    opacity: 0,
    delay: 200
});

const text = `𝕸𝖊𝖒𝖎𝖑𝖎𝖐𝖎 𝖒𝖎𝖓𝖆𝖙 𝖕𝖆𝖉𝖆 𝕻𝖊𝖓𝖌𝖊𝖒𝖇𝖆𝖓𝖌𝖆𝖓 𝖂𝖊𝖇 𝖒𝖔𝖉𝖊𝖗𝖓.
𝕿𝖊𝖗𝖙𝖆𝖗𝖎𝖐 𝖒𝖊𝖒𝖇𝖆𝖓𝖌𝖚𝖓 𝖘𝖔𝖑𝖚𝖘𝖎 𝖉𝖎𝖌𝖎𝖙𝖆𝖑 𝖞𝖆𝖓𝖌 𝖇𝖊𝖗𝖋𝖔𝖐𝖚𝖘 𝖕𝖆𝖉𝖆 𝖚𝖘𝖊𝖗,
𝖇𝖊𝖗𝖘𝖎𝖋𝖆𝖙 𝖘𝖈𝖆𝖑𝖆𝖇𝖑𝖊, 𝖘𝖊𝖗𝖙𝖆 𝖊𝖋𝖎𝖘𝖎𝖊𝖓 𝖉𝖆𝖓
𝖒𝖊𝖒𝖇𝖊𝖗𝖎𝖐𝖆𝖓 𝖓𝖎𝖑𝖆𝖎 𝖕𝖗𝖆𝖐𝖙𝖎𝖘.
𝕾𝖊𝖉𝖆𝖓𝖌 𝖒𝖊𝖓𝖌𝖊𝖒𝖇𝖆𝖓𝖌𝖐𝖆𝖓 𝖐𝖊𝖙𝖊𝖗𝖆𝖒𝖕𝖎𝖑𝖆𝖓
𝖉𝖆𝖑𝖆𝖒 𝕻𝕳𝕻 𝖉𝖆𝖓 𝕵𝖆𝖛𝖆𝕾𝖈𝖗𝖎𝖕𝖙, 𝖍𝖎𝖓𝖌𝖌𝖆
𝖙𝖊𝖗𝖙𝖆𝖗𝖎𝖐 𝖕𝖆𝖉𝖆 𝕬𝖗𝖙𝖎𝖋𝖎𝖈𝖎𝖆𝖑 𝕴𝖓𝖙𝖊𝖑𝖑𝖎𝖌𝖊𝖓𝖈𝖊.`;
const aboutText = document.getElementById("about-text");

if (aboutText) {

    let index = 0;

    function typeText() {
        if (index < text.length) {
            aboutText.innerHTML += text.charAt(index);
            index++;

            setTimeout(typeText, 35);
        }
    }

    typeText();
}

const profileCard = document.getElementById("profile-card");

window.addEventListener("load", () => {
    profileCard.classList.add("swing-animation");
});

const cuteText = document.querySelector(".cute-text");

cuteText.innerHTML = cuteText.textContent
.split("")
.map((char, i) =>
`<span style="animation-delay:${i * 0.05}s">${char}</span>`
).join("");