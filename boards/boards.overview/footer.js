"use strict";
document.addEventListener("DOMContentLoaded", function () {
// ------------------------------------------------------- //
    // Footer
    // ------------------------------------------------------ //
    let footer = document.querySelector("#footer");
    if (footer) {
        document.addEventListener("sidebarChanged", function () {
            adjustFooter();
        });
        window.addEventListener("resize", function () {
            adjustFooter();
        });
    }

    function adjustFooter() {
        var footerBlockHeight = document.querySelector("#footer").outerHeight;
        pageContent.style.paddingBottom = `${footerBlockHeight}px`;
    }
});



