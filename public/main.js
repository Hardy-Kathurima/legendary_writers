const cookieContainer = document.querySelector(".cookie-container");
const cookieBtn = document.querySelector(".cookie-btn");


cookieBtn.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
})

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }

}, 2000);