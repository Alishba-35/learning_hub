@extends('layouts.appjs')

@section('title', 'DOM')

@section('content')
   


    <!-- Page content -->
    
  

  <!-- Main Content -->
  <div class="container"style=" justify-content: center;">
    <h1>JavaScript DOM, Window, and Document</h1>
 <div class="container" style="display: flex; justify-content: center;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/7zcXPCt8Ck0?si=s_AbdFzavflY-h_z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <!-- Section 1: DOM Introduction -->
    <section id="dom" class="card">
      <h2>1. What is the DOM?</h2>
      <p>
        The <strong>DOM (Document Object Model)</strong> is a programming interface provided by the browser. 
        It represents the structure of a webpage as a <em>tree of objects</em>, allowing JavaScript to interact
        with and manipulate HTML and CSS dynamically.
      </p>

      <h4>Analogy:</h4>
      <p>
        Think of a webpage like a <strong>house</strong>:
        <ul>
          <li><strong>HTML</strong> → The structure of the house (walls, doors, windows).</li>
          <li><strong>CSS</strong> → The decoration (colors, furniture).</li>
          <li><strong>DOM</strong> → The <em>blueprint or map</em> of the house that JavaScript can read and change.</li>
          <li><strong>JavaScript</strong> → The <em>worker</em> who uses the blueprint to make changes.</li>
        </ul>
      </p>

      <h4>DOM Tree Example:</h4>
     <div class="text-center">
      <!-- <h5>Function</h5> -->
      <img style="height:40%" src="{{ asset('images/domtree.png') }}" alt="DOM Tree" class="content-image">
    </div>
    </section>

    <!-- Section 2: Window Object -->
    <section id="window" class="card">
      <h2>2. Window Object</h2>
      <p>
        The <strong>window</strong> object is the <em>global object</em> in the browser. 
        It represents the entire browser tab and contains everything, including the <code>document</code> object.
      </p>

      <h4>Example:</h4>
      <pre><code>
// Display an alert
window.alert("Welcome to the page!");

// Open a new tab
window.open("https://www.google.com");

// Log window width
console.log(window.innerWidth);
      </code></pre>

      <h4>Key Properties of window:</h4>
      <table>
        <thead>
          <tr>
            <th>Property</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>innerWidth</td><td>Width of the browser window</td></tr>
          <tr><td>innerHeight</td><td>Height of the browser window</td></tr>
          <tr><td>location</td><td>Current URL and navigation controls</td></tr>
          <tr><td>history</td><td>Access browser history</td></tr>
          <tr><td>localStorage</td><td>Store data permanently</td></tr>
          <tr><td>sessionStorage</td><td>Store data for session only</td></tr>
        </tbody>
      </table>

      <button class="btn-custom" onclick="showWindowInfo()">Show Window Info</button>
     
    </section>
  <div class="text-center">
      <h5>Window Object</h5>
      <img style="height:40%" src="{{ asset('images/window.png') }}" alt="Window Object" class="content-image">
    </div>
    <!-- Section 3: Document Object -->
    <section id="document" class="card">
      <h2>3. Document Object</h2>
      <p>
        The <strong>document</strong> object represents the webpage itself and is a property of the <code>window</code> object.
        It allows you to find and manipulate HTML elements dynamically.
      </p>

      <h4>Common Methods:</h4>
      <table>
        <thead>
          <tr>
            <th>Method</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>getElementById(id)</td><td>Selects element by its ID</td></tr>
          <tr><td>querySelector(selector)</td><td>Selects the first matching element</td></tr>
          <tr><td>createElement(tag)</td><td>Creates a new HTML element</td></tr>
          <tr><td>write(text)</td><td>Writes text directly into the document</td></tr>
        </tbody>
      </table>

      <h4>Example: Change Text</h4>
      <pre><code>
function changeText() {
  const title = document.getElementById("demo-text");
  title.textContent = "Updated Text via JavaScript!";
}
      </code></pre>

      <h4>Live Demo:</h4>
      <h3 id="demo-text">Original Heading</h3>
      <button class="btn-custom" onclick="changeText()">Change Heading</button>
    </section>
      <div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/Dom-mani.png') }}" alt="DOM manipulation" class="content-image">
    </div>

    <!-- Section 4: Summary -->
    <section class="card">
      <h2>4. Summary</h2>
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>Window Object</th>
            <th>Document Object</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Represents</td>
            <td>Entire browser window</td>
            <td>The loaded web page</td>
          </tr>
          <tr>
            <td>Access Level</td>
            <td>Global object, top level</td>
            <td>Child of window</td>
          </tr>
          <tr>
            <td>Example Use</td>
            <td>alert(), setTimeout()</td>
            <td>getElementById(), createElement()</td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>


   <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.function') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.event') }}'">
  Next =&gt;
</button>
  <!-- Custom JS -->
  <script src="{{asset('js/dom.js')}}"></script>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
@endsection