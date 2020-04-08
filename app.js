const hero = document.querySelector(".hero");
const headline = document.querySelector(".headline");
const logo = document.querySelector("#logo");
const hamburger = document.querySelector(".hamburger");
const slider = document.querySelector(".slider");

const logmenu1 = document.querySelector(".logmenu1");
const menubtns = document.querySelectorAll(".menubtn");
const menutrigger = document.querySelector(".menutrigger");


menutrigger.addEventListener('click', () => {
    logmenu1.classList.toggle('open');
    menubtns.forEach(bt => {
        bt.classList.toggle('fade');
    });
});

const tl = new TimelineMax();

tl
    .fromTo(hero, 0.8, { height: "0%" }, { height: "80%", ease: Power2.easeInOut })
    .fromTo(hero, 1, { width: "100%", height: "80%" }, { width: "80%", height: "100%", ease: Power2.easeInOut })
    .fromTo(slider, 1, { x: "-100%" }, { x: "0%", ease: Power2.easeInOut }, "-=1.2")
    .fromTo(logo, 0.5, { x: 30, opacity: 0 }, { x: 0, opacity: 1 }, "-=0.5")
    .fromTo(hamburger, 0.5, { x: 30, opacity: 0 }, { x: 0, opacity: 1 }, "-=0.5");
