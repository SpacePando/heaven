let logoparallax1 = document.getElementById("logoparallax1");
let logoparallax2 = document.getElementById("logoparallax2");
let logoparallax3 = document.getElementById("logoparallax3");

window.addEventListener("scroll", function () {
    let value = window.scrollY;
    logoparallax1.style.bottom = value * 0.5 + "px";
    logoparallax2.style.bottom = value * -0.05 + "px";
    logoparallax3.style.bottom = value * 5 + "px";
});

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
