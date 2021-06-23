!function () {

    for (var afficherOnglet = function (afficherOnglet, animations) {

        if (animations === undefined) {
            animations = true
        }

        var li = afficherOnglet.parentNode,
                div = afficherOnglet.parentNode.parentNode.parentNode,
                activeTab = div.querySelector(".tab-content.active"),
                aAfficher = div.querySelector(afficherOnglet.getAttribute("href"));
        if (li.classList.contains('active')) {
            return false;
        }

        if (div.querySelector(".tabs .active").classList.remove("active"), li.classList.add("active"), animations) {

            activeTab.classList.add("fade"), activeTab.classList.remove("in");

            var transitionend = function () {

                this.classList.remove("fade");
                this.classList.remove("active");
                aAfficher.classList.add("active");
                aAfficher.classList.add("fade");
                aAfficher.offsetWidth;
                aAfficher.classList.add("in");
                this.removeEventListener("transitionend", transitionend);
                this.removeEventListener("webkitTransitionEnd", transitionend);
                this.removeEventListener("oTransitionEnd", transitionend);
                this.removeEventListener("mozTransitionEnd", transitionend);
            };

            activeTab.addEventListener("transitionend", transitionend);
            activeTab.addEventListener("webkitTransitionEnd", transitionend);
            activeTab.addEventListener("oTransitionEnd", transitionend);
            activeTab.addEventListener("mozTransitionEnd", transitionend);

        } else {

            aAfficher.classList.add("active");
            activeTab.classList.remove("active");

        }


    },
            animations = document.querySelectorAll(".tabs a"),
            li = 0; li < animations.length; li++)
        animations[li].addEventListener("click", function (animations) {
            afficherOnglet(this)
        });

    var div = function (animations) {

        var li = window.location.hash,
                div = document.querySelector('a[href="' + li + '"]');

        if (div !== null && !div.classList.contains('active')) {
            afficherOnglet(div, animations !== undefined)
        }
    };

    window.addEventListener("hashchange", div), div()

}();