$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const galleryItems = document.querySelectorAll(".gallery_item img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const lightboxName = document.getElementById("lightbox-name");
    const lightboxDescription = document.getElementById("lightbox-description");
    const closeBtn = document.querySelector(".close");

    galleryItems.forEach(item => {
        item.addEventListener("click", function () {
            lightbox.style.display = "flex";
            lightboxImg.src = this.src;
            lightboxName.textContent = this.getAttribute("data_name");
            lightboxDescription.textContent = this.getAttribute("description");
        });
    });

    closeBtn.addEventListener("click", function () {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", function (e) {
        if (e.target !== lightboxImg && e.target !== lightboxName && e.target !== lightboxDescription) {
            lightbox.style.display = "none";
        }
    });
});

