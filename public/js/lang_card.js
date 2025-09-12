document.querySelectorAll(".card").forEach((card) => {
  const text = card.querySelector("p");
  const button = card.querySelector("button");

  card.addEventListener("mouseenter", () => {
    // Hide all others first
    document.querySelectorAll(".card p, .card button").forEach((el) => {
      el.style.opacity = "0";
      el.style.maxHeight = "0";
    });

    // Show only current card
    text.style.opacity = "1";
    text.style.maxHeight = "200px";
    button.style.opacity = "1";
    button.style.maxHeight = "50px";
  });

  card.addEventListener("mouseleave", () => {
    text.style.opacity = "0";
    text.style.maxHeight = "0";
    button.style.opacity = "0";
    button.style.maxHeight = "0";
  });
});
