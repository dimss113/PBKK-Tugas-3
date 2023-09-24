import "./bootstrap";
// import "flowbite";

// add display none to the element with id button-danger when clicked
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("button-danger")
        .addEventListener("click", function () {
            this.style.display = "none";
        });
});
