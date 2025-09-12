@extends('layouts.appjs')

@section('title', 'Events')

@section('content')
   



    <!-- Page content -->









    <!-- ==============================
       MAIN CONTENT START
  =============================== -->
    <div id="event" class="container" style=" justify-content: center;">
        <h1 class="mb-4">Events in JavaScript</h1>
        <div class="container" style="display: flex; justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_i-uLJAh79U?si=32umfx3OwdEG6BuV"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p>
            In JavaScript, <strong>events</strong> are actions or occurrences that happen in the browser or user
            interface.
            Events are how the browser lets you know that something happened, like when a user clicks a button, hovers
            over
            an element, presses a key, or submits a form.
            JavaScript can listen to these events and run specific code in response.
        </p>

        <p>
            By using events, you can make your website interactive and dynamic.
            Think of events as “signals” that something has happened, and your JavaScript code can decide what to do
            when
            it hears these signals.
        </p>

        <hr>

        <h2>Common Types of Events</h2>
        <table class="table table-dark table-bordered mt-3">
            <thead>
                <tr>
                    <th>Event Type</th>
                    <th>Description</th>
                    <th>Examples</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mouse Events</td>
                    <td>Triggered by mouse actions</td>
                    <td><code>click</code>, <code>dblclick</code>, <code>mouseover</code>, <code>mouseout</code></td>
                </tr>
                <tr>
                    <td>Keyboard Events</td>
                    <td>Triggered by keyboard actions</td>
                    <td><code>keydown</code>, <code>keyup</code>, <code>keypress</code></td>
                </tr>
                <tr>
                    <td>Form Events</td>
                    <td>Triggered when interacting with forms</td>
                    <td><code>submit</code>, <code>change</code>, <code>input</code></td>
                </tr>
                <tr>
                    <td>Window Events</td>
                    <td>Triggered by changes to the window or document</td>
                    <td><code>load</code>, <code>resize</code>, <code>scroll</code></td>
                </tr>
            </tbody>
        </table>

        <p>
            Events are handled using <code>Event Listeners</code>.
            The most common way to attach an event listener is by using the method:
        </p>

        <pre><code>element.addEventListener("eventName", function() {
  // Code to run when event happens
});</code></pre>

        <hr>

        <!-- Example 1: Click Event -->
        <section class="mb-5">
            <h2>1. Click Event</h2>
            <p>
                The <strong>click event</strong> is triggered when a user clicks on an element like a button or link.
                It is one of the most commonly used events in JavaScript.
            </p>
            <button id="clickBtn" class="btn">Click Me</button>
            <p id="clickMsg" class="mt-2"></p>
            <pre><code>document.getElementById("clickBtn").addEventListener("click", function() {
  alert("Button was clicked!");
});</code></pre>
        </section>

        <!-- Example 2: Mouse Events -->
        <section class="mb-5">
            <h2>2. Mouse Events</h2>
            <p>
                Mouse events are triggered by interactions with the mouse, such as hovering, moving, or clicking.
            </p>
            <button id="hoverBtn" class="btn">Hover Over Me</button>
            <pre><code>hoverBtn.addEventListener("mouseover", function() {
  console.log("Mouse is over the button!");
});
hoverBtn.addEventListener("mouseout", function() {
  console.log("Mouse left the button!");
});</code></pre>
        </section>

        <!-- Example 3: Keyboard Events -->
        <section class="mb-5">
            <h2>3. Keyboard Events</h2>
            <p>
                Keyboard events are triggered when the user presses or releases a key on their keyboard.
            </p>
            <input type="text" id="keyboardInput" class="form-control mb-2" placeholder="Type something here...">
            <pre><code>keyboardInput.addEventListener("keydown", function(event) {
  console.log("Key down: " + event.key);
});
keyboardInput.addEventListener("keyup", function(event) {
  console.log("Key up: " + event.key);
});</code></pre>
        </section>

        <!-- Example 4: Prevent Default Action -->
        <section class="mb-5">
            <h2>4. Prevent Default Action</h2>
            <p>
                The <code>preventDefault()</code> method stops the default behavior of an event from happening.
                For example, clicking on a link usually redirects to another page, but we can prevent that:
            </p>
            <a href="https://google.com" id="googleLink">Go to Google</a>
            <pre><code>googleLink.addEventListener("click", function(event) {
  event.preventDefault();
  alert("Link behavior stopped!");
});</code></pre>
        </section>

        <!-- Example 5: Form Submit Event -->
        <section class="mb-5">
            <h2>5. Form Submission</h2>
            <p>
                Submitting a form usually reloads the page, but with <code>preventDefault()</code>,
                we can stop that behavior and handle the form with JavaScript instead.
            </p>
            <form id="myForm">
                <input type="text" placeholder="Enter your name" required class="form-control mb-2">
                <button type="submit" class="btn">Submit</button>
            </form>
            <p id="formMsg" class="mt-2"></p>
            <pre><code>myForm.addEventListener("submit", function(event) {
  event.preventDefault();
  console.log("Form submitted!");
});</code></pre>
        </section>

        <!-- Example 6: Event Delegation -->
        <section class="mb-5">
            <h2>6. Event Delegation</h2>
            <p>
                Event delegation allows you to attach a single event listener to a parent element and handle events
                for its child elements.
            </p>
            <ul id="list" style="background-color:#07173c; color:white" class="list-group">
                <li class="list-group-item">Item A</li>
                <li class="list-group-item">Item B</li>
                <li class="list-group-item">Item C</li>
            </ul>
            <pre><code>list.addEventListener("click", function(event) {
  if(event.target.tagName === "LI") {
    alert("You clicked on " + event.target.textContent);
  }
});</code></pre>
        </section>

        <!-- Example 7: Event Propagation -->
        <section class="mb-5">
            <h2>7. Event Propagation (Bubbling & Capturing)</h2>
            <p>
                Event propagation determines how events move through the DOM hierarchy.
                There are two main phases:
            </p>
            <ul>
                <li><strong>Bubbling:</strong> The event starts from the innermost element and bubbles up to the parent.
                </li>
                <li><strong>Capturing:</strong> The event starts from the parent and goes down to the innermost element.
                </li>
            </ul>

            <div id="outerDiv" class="p-3 bg-secondary">
                Outer Div
                <div id="innerDiv" class="p-3 bg-dark mt-2">
                    Inner Div
                </div>
            </div>

            <pre><code>outerDiv.addEventListener("click", function() {
  alert("Outer Div clicked!");
});

innerDiv.addEventListener("click", function(event) {
  alert("Inner Div clicked!");
  // event.stopPropagation(); // Uncomment to stop bubbling
});</code></pre>
        </section>
          <div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/event.png') }}" alt="Event" class="content-image">
    </div>
    </div>
    <!-- ==============================
       MAIN CONTENT END
  =============================== -->


  <!-- ==========================
       MAIN CONTAINER START
  =========================== -->
  <div class="container mt-4">
    <h1 class="mb-4">JavaScript Event Listeners</h1>

    <p>
      An <strong>Event Listener</strong> in JavaScript allows you to <strong>listen for events</strong> on a specific HTML element 
      and then <strong>run a piece of code</strong> whenever that event occurs.
      <br><br>
      Think of it like a <em>doorbell system</em>:
    </p>
    <ul>
      <li>The <strong>event</strong> is someone pressing the doorbell button.</li>
      <li>The <strong>event listener</strong> is you listening for the doorbell sound.</li>
      <li>The <strong>callback function</strong> is what you do when you hear the sound, like opening the door.</li>
    </ul>

    <hr>

    <!-- Why use event listeners -->
    <h2>Why Use Event Listeners?</h2>
    <p>
      Event listeners are better than inline event attributes like 
      <code>onclick="functionName()"</code> for several reasons:
    </p>
    <ol>
      <li><strong>Clean Code:</strong> Keeps your HTML and JavaScript separate.</li>
      <li><strong>Multiple Events:</strong> You can attach more than one listener to the same element.</li>
      <li><strong>Flexibility:</strong> You can add or remove listeners dynamically as needed.</li>
    </ol>

    <hr>

    <!-- Syntax -->
    <h2>Syntax of <code>addEventListener()</code></h2>
    <pre><code>element.addEventListener(event, callback, useCapture);</code></pre>

    <table >
      <thead>
        <tr>
          <th>Parameter</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><code>event</code></td>
          <td>The type of event to listen for, such as <code>"click"</code>, <code>"mouseover"</code>, or <code>"keydown"</code>.</td>
        </tr>
        <tr>
          <td><code>callback</code></td>
          <td>The function that runs when the event happens.</td>
        </tr>
        <tr>
          <td><code>useCapture</code> (optional)</td>
          <td>
            A boolean value that determines the phase of event propagation:<br>
            <strong>false</strong> → Bubbling phase (default)<br>
            <strong>true</strong> → Capturing phase
          </td>
        </tr>
      </tbody>
    </table>

    <hr>

    <!-- Basic Example -->
    <h2>Basic Example</h2>
    <p>Here is a simple example of a button click event:</p>
    <div class="mb-3">
      <button id="basicBtn" class="btn">Click Me</button>
      <p id="basicMsg" class="mt-2"></p>
    </div>

    <pre><code>
document.getElementById("basicBtn").addEventListener("click", function() {
  document.getElementById("basicMsg").textContent = "Button was clicked!";
});
    </code></pre>

    <hr>

    <!-- Named Function Example -->
    <h2>Example with a Named Function</h2>
    <p>Using a named function instead of an anonymous function makes your code easier to maintain:</p>
    <div class="mb-3">
      <button id="namedBtn" class="btn">Click Me Too</button>
    </div>
    <pre><code>
function showMessage() {
  alert("Hello! You clicked the button!");
}

document.getElementById("namedBtn").addEventListener("click", showMessage);
    </code></pre>

    <hr>

    <!-- Multiple Event Listeners -->
    <h2>Handling Multiple Events</h2>
    <p>You can attach multiple listeners to the same element, even for the same event type: <br>
<b> For this open the console screen</b></p>
    <div class="mb-3">
      <button id="multiBtn" class="btn">Click Me Multiple Times</button>
    </div>
    <pre><code>
const btn = document.getElementById("multiBtn");

btn.addEventListener("click", function() {
  console.log("First action triggered");
});

btn.addEventListener("click", function() {
  console.log("Second action triggered");
});
    </code></pre>

    <hr>

    <!-- Removing Event Listener -->
    <h2>Removing an Event Listener</h2>
    <p>
      You can remove an event listener, but you <strong>must use a named function</strong> so that JavaScript knows which function to remove.
    </p>
    <pre><code>
function greet() {
  console.log("Hello there!");
}

btn.addEventListener("click", greet);

// Later in the code:
btn.removeEventListener("click", greet);
    </code></pre>

    <hr>

    <!-- Event Object -->
    <h2>The Event Object</h2>
    <p>
      When an event occurs, JavaScript automatically passes an <strong>event object</strong> to the callback function. 
      This object contains details about the event such as:
    </p>
    <ul>
      <li>Which key was pressed</li>
      <li>Which mouse button was clicked</li>
      <li>Which element triggered the event</li>
    </ul>
    <pre><code>
btn.addEventListener("click", function(event) {
  console.log("Event type:", event.type);
  console.log("Target element:", event.target);
});
    </code></pre>

    <hr>

    <!-- Practical Example -->
    <h2>Practical Example: Click vs Double Click</h2>
    <p>Click or double-click the button below to see different actions:</p>
    <div class="mb-3">
      <button id="actionBtn" class="btn">Click or Double Click Me</button>
      <p id="output" class="mt-2"></p>
    </div>
    <pre><code>
const output = document.getElementById("output");
const actionBtn = document.getElementById("actionBtn");

actionBtn.addEventListener("click", function() {
  output.textContent = "You single clicked the button!";
});

actionBtn.addEventListener("dblclick", function() {
  output.textContent = "You double clicked the button!";
});
    </code></pre>

    <hr>
   <div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/Ehandling.png') }}" alt="Event" class="content-image">
    </div>
    <!-- Inline vs addEventListener -->
    <h2>Inline Events vs Event Listeners</h2>
    <table >
      <thead>
        <tr>
          <th>Inline Event</th>
          <th>Event Listener</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><code>&lt;button onclick="sayHello()"&gt;Click&lt;/button&gt;</code></td>
          <td>
            <code>
              const btn = document.getElementById("btn");<br>
              btn.addEventListener("click", sayHello);
            </code>
          </td>
        </tr>
        <tr>
          <td>HTML and JavaScript are mixed together.</td>
          <td>HTML and JavaScript are separated, making it easier to maintain.</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <!-- Summary -->
    <h2>Summary</h2>
    <ul>
      <li><code>addEventListener()</code> lets you listen for and respond to user actions.</li>
      <li>You can attach multiple listeners to the same element.</li>
      <li>Use named functions if you plan to remove listeners later.</li>
      <li>The event object provides extra details about the event.</li>
      <li>Separating HTML and JavaScript makes your code cleaner and easier to manage.</li>
    </ul>

  </div>
  <!-- ==========================
       MAIN CONTAINER END
  =========================== -->

  <!-- ==========================
       SCRIPT SECTION
  =========================== -->

 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.dom') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.class') }}'">
  Next =&gt;
</button>


    <!-- Custom JS -->
    <script src="{{asset('js/event.js')}}"></script>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection