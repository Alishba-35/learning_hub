document.addEventListener("DOMContentLoaded", function () {
    let btn = document.querySelector("#btn");
    let para = document.querySelector("#para");

    // Hide paragraph initially
    para.style.display = "none";

    btn.addEventListener("click", () => {
        para.style.display = "block"; // Show paragraph

        setTimeout(() => {
            btn.innerHTML = '<a href="/login" class="text-dark" style="text-decoration: none;">Go to Login</a>';
        }, 2000);
    });
});
