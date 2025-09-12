
@extends('layouts.appjs')

@section('title', 'introduction of js')

@section('content')
   

  <!-- Page Content -->




  <!-- Introduction -->

  <div id=" Introduction" class="container mt-4">
    <h1 class="mb-3">Introduction to JavaScript</h1>
     <div class="container" style="display: flex; justify-content: center;">
           <iframe width="650" height="335" src="https://www.youtube.com/embed/B7wHpNUUT4Y?si=x_Pj3kD8duux3QVX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <p>
      JavaScript (JS) is a <strong>high-level, versatile, and widely used programming language</strong>
      primarily known for making websites interactive and dynamic. It was created by
      <strong>Brendan Eich in 1995</strong> while working at <strong>Netscape</strong>, initially designed to add simple
      interactivity to web pages. Over time, it has evolved into one of the core technologies of web
      development, alongside <strong>HTML</strong> and <strong>CSS</strong>.
    </p>
</div>
<div class="card">
    <h2 class="mt-4">Key Characteristics</h2>
    <ul>
      <li><strong>High-level language:</strong> Easy to read and write with human-friendly syntax.</li>
      <li><strong>Interpreted language:</strong> Executes directly in the browser without needing compilation.</li>
      <li><strong>Event-driven:</strong> Perfect for handling user interactions like clicks, form submissions, and
        animations.</li>
      <li><strong>Versatile:</strong> Runs on both <em>client-side</em> and <em>server-side</em> using environments like
        Node.js.</li>
      <li><strong>Object-oriented and functional:</strong> Supports both programming paradigms.</li>
    </ul>

    <h2 class="mt-4">Why JavaScript is Important</h2>
    <ul>
      <li><strong>Web Interactivity:</strong> Adds animations, form validations, dropdown menus, sliders, and more.</li>
      <li><strong>Full-Stack Development:</strong> With Node.js, developers can use JavaScript for both front-end and
        back-end.</li>
      <li><strong>Huge Ecosystem:</strong> Includes libraries and frameworks like React, Angular, Vue.js, and
        Express.js.</li>
      <li><strong>Cross-Platform:</strong> Powers web apps, mobile apps, desktop apps, and even IoT devices.</li>
    </ul>

</div>
<div class="card">
    <h2 class="mt-4">Common Use Cases</h2>
    <ul>
      <li><strong>Front-End Development</strong> – Creating dynamic and responsive user interfaces.</li>
      <li><strong>Back-End Development</strong> – Building APIs and server-side applications with Node.js.</li>
      <li><strong>Web Animation & Graphics</strong> – Using libraries like GSAP or Three.js.</li>
      <li><strong>Mobile Apps</strong> – Developing mobile apps with frameworks like React Native.</li>
      <li><strong>Game Development</strong> – Building browser-based games using Canvas and WebGL.</li>
    </ul>
</div>
<div class="card">
    <h2 class="mt-4">Basic Example</h2>
    <p>Here is a simple JavaScript example:</p>
    <pre><code>
//console.log() is use for the print the valarible or data in the console screen

// Display a greeting in the browser console 
console.log("Hello, JavaScript!");

//the alert is use to popup the massege in the web page
// Display a message in an alert box
alert("Welcome to JavaScript!");
    </code></pre>

    <h2 class="mt-4">Try It Yourself!</h2>
    <p>Modify the code below and click <strong>Run Code</strong> to see the result:</p>

    <!-- Code Editor -->
    <textarea id="code-editor">
// Display a greeting in the console
console.log("Hello, JavaScript!");

// Show a welcome alert
alert("Welcome to JavaScript!");
    </textarea>

    <!-- Run Button -->
    <br>
    <button class="run-btn" onclick="runCode()">Run Code</button>

    <h3 class="mt-3">Console Output:</h3>
    <div id="output">Your console messages will appear here...</div>
  </div>

<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('card') }}'">
  &lt;=Back  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.variable') }}'">
  Next =&gt;
</button>




</div>





  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/content.js') }}"></script>

@endsection