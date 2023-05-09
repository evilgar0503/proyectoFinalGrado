window.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector(".form");
    var style = window.getComputedStyle(form);
    var margin_Right = parseInt(style.left);
    var objetivo = 0;
    var intervalo = 0;
    var cargado = false;
    window.addEventListener("scroll", function () {
        if (window.scrollY >= 1847 && !cargado) {
            setTimeout(moverForm, intervalo * 1000);
            cargado = true;
        }
    });
    function moverForm() {
        if (margin_Right > objetivo) {
            margin_Right = margin_Right - 5;
            form.style.left = margin_Right + "px";
            setTimeout(moverForm, (intervalo * 1000) / margin_Right);
        }
    }
});

var isAnimating = false;

function scrollLeftAnimate(elem, unit) {

    if (!elem || isAnimating) {
        //if element not found / if animating, do not execute slide
        return;
    }

    var time = 300; // animation duration in MS, the smaller the faster.
    var from = elem.scrollLeft; // to continue the frame posistion
    var aframe =
        10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
    isAnimating = true; //if animating prevent double trigger animation

    var start = new Date().getTime(),
        timer = setInterval(function () {
            var step = Math.min(1, (new Date().getTime() - start) / time);
            elem.scrollLeft = ((step * unit) + from);
            if (step === 1) {
                clearInterval(timer);
                isAnimating = false;
            }
        }, aframe);
}
