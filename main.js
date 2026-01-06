document.addEventListener("DOMContentLoaded", () => {

    /* ===== HEADER & NAV ===== */
    const header = document.querySelector('header');
    const menu = document.querySelector('#menu');
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        header.classList.toggle('active', window.scrollY > 0);
        navbar.classList.remove('active');
    });

    if (menu && navbar) {
        menu.onclick = () => navbar.classList.toggle('active');
    }

    /* ===== POPUP DETAIL PRODUK ===== */
    const shopBoxes = document.querySelectorAll('.shop-box');

    shopBoxes.forEach(box => {
        const popup = box.querySelector('.product-popup');
        const cartIcon = box.querySelector('.bx-cart');
        const closeBtn = box.querySelector('.close-popup');

        if (!popup || !cartIcon || !closeBtn) return;

        cartIcon.addEventListener('click', () => {
            popup.classList.add('show');
        });

        closeBtn.addEventListener('click', () => {
            popup.classList.remove('show');
        });
    });

    /* ===== FEEDBACK POPUP ===== */
    const form = document.getElementById("feedbackForm");
    const popupSuccess = document.getElementById("popupSuccess");
    const popupResult = document.getElementById("popupResult");
    const closeResult = document.getElementById("closeResult");
    const btnText = document.querySelector(".btn-submit span");

    if (form && popupSuccess && btnText) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const rating = document.querySelector('input[name="rate"]:checked');
            if (!rating) {
                alert("Please select your satisfaction level ⭐");
                return;
            }

            btnText.innerText = "Sending...";

            /* Ambil data form */
            const name = form.querySelector('input[name="name"]').value;
            const email = form.querySelector('input[name="email"]').value;
            const favorite = form.querySelector('select[name="favorite_menu"]').value;
            const type = form.querySelector('input[name="type"]:checked').value;
            const suggestion = form.querySelector('textarea[name="suggestion"]').value;
            const recommendation = form.querySelector('textarea[name="recommendation"]').value;

            /* Isi ke popup output (kalau ada) */
            if (popupResult) {
                document.getElementById("outName").innerText = name;
                document.getElementById("outEmail").innerText = email;
                document.getElementById("outFavorite").innerText = favorite;
                document.getElementById("outRating").innerText = rating.value + " ⭐";
                document.getElementById("outType").innerText = type;
                document.getElementById("outSuggestion").innerText = suggestion;
                document.getElementById("outRecommendation").innerText = recommendation;
            }

            /* STEP 1: popup sukses */
            setTimeout(() => {
                popupSuccess.classList.add("active");
                btnText.innerText = "Send Feedback";
            }, 400);

            /* STEP 2: pindah ke popup hasil */
            if (popupResult) {
                setTimeout(() => {
                    popupSuccess.classList.remove("active");
                    popupResult.classList.add("active");
                    form.reset();
                }, 1400);
            }
        });
    }

    if (closeResult && popupResult && form) {
        closeResult.addEventListener("click", () => {
            popupResult.classList.remove("active");
            form.reset();
        });
    }

    /* ===== RATING TEXT ===== */
    const ratingText = document.getElementById("ratingText");
    const rates = document.querySelectorAll('input[name="rate"]');

    const ratingMessages = {
        5: "😍 Excellent! We are very happy!",
        4: "😊 Very Good, thank you!",
        3: "🙂 Good enough!",
        2: "😐 We'll try to improve",
        1: "😢 Sorry to hear that"
    };

    if (ratingText && rates.length) {
        rates.forEach(rate => {
            rate.addEventListener("change", () => {
                ratingText.innerText = ratingMessages[rate.value];
            });
        });
    }

});
