"use strict";
document.addEventListener("DOMContentLoaded", function () {
// ------------------------------------------------------- //
    // Sidebar Functionality
    // ------------------------------------------------------ //
    var sidebarToggler = document.querySelector(".sidebar-toggle");
    var sidebar = document.querySelector("#sidebar");
    var pageContent = document.querySelector(".page-content");
    var navBrand = document.querySelector(".navbar-brand");
    if (sidebarToggler) {
        sidebarToggler.addEventListener("click", function () {
            this.classList.toggle("active");
            navBrand.classList.toggle("active");

            sidebar.classList.toggle("shrinked");
            pageContent.classList.toggle("active");
            document.dispatchEvent(new Event("sidebarChanged"));
        });
    }

    function bsValidationBehavior(errorInputs, form) {
        function watchError() {
            errorInputs.forEach((input) => {
                if (input.classList.contains("js-validate-error-field")) {
                    input.classList.add("is-invalid");
                    input.classList.remove("is-valid");
                } else {
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                }
            });
        }
        watchError();
    }
});