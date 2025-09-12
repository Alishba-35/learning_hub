
    // Example 1: Click Event
    document.getElementById("clickBtn").addEventListener("click", function() {
      document.getElementById("clickMsg").textContent = "Button was clicked!";
    });

    // Example 2: Mouse Events
    const hoverBtn = document.getElementById("hoverBtn");
    hoverBtn.addEventListener("mouseover", function() {
      hoverBtn.textContent = "Mouse is over the button!";
    });
    hoverBtn.addEventListener("mouseout", function() {
      hoverBtn.textContent = "Hover Over Me";
    });

    // Example 3: Keyboard Events
    const keyboardInput = document.getElementById("keyboardInput");
    keyboardInput.addEventListener("keydown", function(event) {
      console.log("Key Down: " + event.key);
    });
    keyboardInput.addEventListener("keyup", function(event) {
      console.log("Key Up: " + event.key);
    });

    // Example 4: Prevent Default
    document.getElementById("googleLink").addEventListener("click", function(event) {
      event.preventDefault();
      alert("Default action prevented. Link won't open.");
    });

    // Example 5: Form Submit Event
    const form = document.getElementById("myForm");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      document.getElementById("formMsg").textContent = "Form submitted successfully!";
    });

    // Example 6: Event Delegation
    document.getElementById("list").addEventListener("click", function(event) {
      if (event.target.tagName === "LI") {
        alert("You clicked on " + event.target.textContent);
      }
    });

    // Example 7: Event Propagation
    const outerDiv = document.getElementById("outerDiv");
    const innerDiv = document.getElementById("innerDiv");

    outerDiv.addEventListener("click", function() {
      alert("Outer Div clicked!");
    });

    innerDiv.addEventListener("click", function(event) {
      alert("Inner Div clicked!");
      // event.stopPropagation(); // Uncomment to stop bubbling
    });
  


    // Example for Basic Event Listener
    document.getElementById("basicBtn").addEventListener("click", function() {
      document.getElementById("basicMsg").textContent = "Button was clicked!";
    });

    // Example for Named Function
    function showMessage() {
      alert("Hello! You clicked the button!");
    }
    document.getElementById("namedBtn").addEventListener("click", showMessage);

    // Multiple Event Listeners Example
    const multiBtn = document.getElementById("multiBtn");
    multiBtn.addEventListener("click", function() {
      console.log("First action triggered");
    });
    multiBtn.addEventListener("click", function() {
      console.log("Second action triggered");
    });

    // Practical Example: Click vs Double Click
    const output = document.getElementById("output");
    const actionBtn = document.getElementById("actionBtn");

    actionBtn.addEventListener("click", function() {
      output.textContent = "You single clicked the button!";
    });

    actionBtn.addEventListener("dblclick", function() {
      output.textContent = "You double clicked the button!";
    });