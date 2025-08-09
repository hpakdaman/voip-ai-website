/*!-----------------------------------------------------------------------------
 * easy_background
 * v2.0 - built 2017-10-30
 * Licensed under the MIT License.
 * http://www.testersite.it/github/easy_background/v3/
 * ----------------------------------------------------------------------------
 * Copyright (C) 2017 Eugenio Segala
 * --------------------------------------------------------------------------*/

window.easy_background = function(selector, sld_args) {
    function empty_img(x) {
        return x ? "<img src='" + x + "'>" : "";
    }

    const def_del = 3000;
    const p = document.createElement("div");
    p.innerHTML = " ";
    p.classList.add("easy_slider");
    document.body.insertBefore(p, document.body.firstChild);

    sld_args.slide.forEach((v, i) => {
        if (v) {
            document.querySelector(".easy_slider").innerHTML += empty_img(v);
            if (typeof sld_args.delay[i] === 'undefined' || sld_args.delay[i] === '' || sld_args.delay[i] == 0) {
                sld_args.delay[i] = def_del;
            }
        }
    });

    document.querySelector(".easy_slider").style.display = "none";
    document.querySelector(selector).style.backgroundSize = "cover";
    document.querySelector(selector).style.backgroundRepeat = "no-repeat";
    document.querySelector(selector).style.backgroundPosition = "center center";

    setTimeout(() => {
        sld_args.transition_timing = sld_args.transition_timing || "ease-in";
        sld_args.transition_duration = sld_args.transition_duration || 500;
        const transition = `all ${sld_args.transition_duration}ms ${sld_args.transition_timing}`;
        ["Webkit", "Moz", "Ms", "O", ""].forEach(prefix => {
            document.querySelector(selector).style[prefix + (prefix ? "Transition" : "transition")] = transition;
        });
    }, 100);

    let n = 1;
    let li = 0;

    function slider() {
        sld_args.slide.forEach((vvv, iii) => {
            if (n > 1) {
                const delay = li;
                setTimeout(() => {
                    document.querySelector(selector).style.backgroundImage = `url('${vvv}')`;
                }, delay);
                li += sld_args.delay[iii];
            } else {
                n++;
                li = sld_args.delay[iii];
                document.querySelector(selector).style.backgroundImage = `url('${vvv}')`;
            }
        });
    }

    slider();
    setInterval(slider, sld_args.delay.reduce((a, b) => a + b, 0));
};