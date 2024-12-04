document.addEventListener("DOMContentLoaded", () => {
    const bookNowButton = document.querySelector(".bookNowBTN");
    const bookTitle = document.querySelector(".bookCard");

    bookNowButton.addEventListener("click", () => {
        bookTitle.scrollIntoView({ behavior: "smooth" });
    });
});