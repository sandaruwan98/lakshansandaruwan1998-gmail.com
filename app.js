const hero = document.querySelector(".hero");
const headline = document.querySelector(".headline");

const slider = document.querySelector(".slider");

const logmenu1 = document.querySelector(".logmenu1");
const menubtns = document.querySelectorAll(".menubtn");
const menutrigger = document.querySelector(".menutrigger");

// const nav = document.querySelector(".navbar");

//* logout menu pop up ------------------------------
const typo = document.querySelector(".typo");
const words = ["Lakshan", "Sandaruwan", "Jayasinghe"];
let leters = "";
let count = 0;
let index = 0;
(function type() {
    if (count === words.length) {
        count = 0;
    }
    current = words[count];
    leters = current.slice(0, ++index);
    typo.textContent = leters;
    if (leters.length === current.length) {
        count++;
        index = 0;
        // setInterval("", 300);
    }
    setTimeout(type, 300);
}()
);



//* logout menu pop up ------------------------------
menutrigger.addEventListener('click', () => {
    var nav = $(".navbar");
    $(".logmenu1").css("top", nav.css("height"));
    logmenu1.classList.toggle('open');
    menubtns.forEach(bt => {
        bt.classList.toggle('fade');
    });
});


//*opening animations -------------------------------
const tl = new TimelineMax();

tl
    .fromTo(hero, 0.8, { height: "0%" }, { height: "80%", ease: Power2.easeInOut })
    .fromTo(hero, 1, { width: "100%", height: "80%" }, { width: "80%", height: "100%", ease: Power2.easeInOut })
    .fromTo(slider, 1, { x: "-100%" }, { x: "0%", ease: Power2.easeInOut }, "-=1.2");
    // .fromTo(logo, 0.5, { x: 30, opacity: 0 }, { x: 0, opacity: 1 }, "-=0.5");
