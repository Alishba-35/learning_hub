// Show window information
function showWindowInfo() {
  alert(
    "Window width: " + window.innerWidth + "px\n" +
    "Window height: " + window.innerHeight + "px"
  );
}

// Change text dynamically using document object
function changeText() {
  const title = document.getElementById("demo-text");
  title.textContent = "Updated Text via JavaScript!";
}
