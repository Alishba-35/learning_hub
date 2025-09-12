@extends('layouts.appjs')

@section('title', 'variables')

@section('content')
  <!-- Page Content -->
  <div id="variables" class="container my-4">
    <h1 class="mb-3 text-center">JavaScript Variables & Data Types</h1>
<div class="card">
    <!-- Introduction -->
    <section>
      <p class="lead">
        Variables in JavaScript are used to <strong>store data</strong> that can be used and manipulated throughout your
        program.
        JavaScript is <strong>dynamically typed</strong>, meaning you don't need to explicitly declare the type of a
        variable — it’s determined at runtime.
      </p>
    </section>
<div class="container" style="display: flex; justify-content: center;">
  <iframe 
    width="600" 
    height="315" 
    src="https://www.youtube.com/embed/ajdRvxDWH4w?rel=0&modestbranding=1&fs=0&disablekb=1&controls=1" 
    title="YouTube video player" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    referrerpolicy="strict-origin-when-cross-origin"
    allowfullscreen>
  </iframe>
</div>
</div>
    <!-- Declaring Variables -->
     <div class="card">
    <section>
      <h2 class="mt-4">1. Declaring Variables</h2>
      <p>There are three ways to declare variables in JavaScript:</p>
      <table class="table table-dark table-striped table-bordered">
        <thead>
          <tr>
            <th>Keyword</th>
            <th>Scope</th>
            <th>Reassignment</th>
            <th>Hoisting</th>
            <th>Use Case</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>var</code></td>
            <td>Global-scoped</td>
            <td>Yes</td>
            <td>Hoisted with <code>undefined</code></td>
            <td>Legacy code (avoid in modern JS)</td>
          </tr>
          <tr>
            <td><code>let</code></td>
            <td>Block-scoped</td>
            <td>Yes</td>
            <td>Hoisted but not initialized</td>
            <td>For variables that need to change</td>
          </tr>
          <tr>
            <td><code>const</code></td>
            <td>Block-scoped</td>
            <td>No</td>
            <td>Hoisted but not initialized</td>
            <td>For variables that should not change</td>
          </tr>
        </tbody>
      </table>

      <pre><code>// Example
var name = "Alice";   // Old way
let age = 25;         // Modern way
const country = "USA"; // Cannot be reassigned

age = 26; // ✅ Works
// country = "Canada"; ❌ Error
      </code></pre>
    </section>
</div>
    <!-- Primitive Data Types Image -->
    <div class="text-center">
      <img src="{{ asset('images/pri-var.png') }}" alt="Primitive Data Type" class="content-image">
    </div>

    <div class="card">
    <!-- Data Types Section -->
    <section id="data-types">
      <h2 class="mt-4">2. JavaScript Data Types</h2>
      <p>JavaScript data types are divided into two main categories:</p>
      <ul>
        <li><strong>Primitive Data Types:</strong> These hold a single value and are immutable.</li>
        <li><strong>Non-Primitive Data Types:</strong> These are mutable and can hold multiple values or complex
          structures.</li>
      </ul>

      <h3 class="mt-3" id="primitive">Primitive Data Types</h3>
      <ul>
        <li><strong>String</strong> - Represents textual data. Example: <code>"Hello"</code></li>
        <li><strong>Number</strong> - Represents numbers (integer or floating-point). Example: <code>42</code></li>
        <li><strong>Boolean</strong> - Represents logical values: <code>true</code> or <code>false</code></li>
        <li><strong>Undefined</strong> - A variable declared but not assigned a value.</li>
        <li><strong>Null</strong> - Represents intentional absence of any value.</li>
        <li><strong>Symbol</strong> - Represents unique identifiers (ES6).</li>
        <li><strong>BigInt</strong> - Represents very large integers beyond safe limits.</li>
      </ul>

      <pre><code>// Primitive Examples
let name = "Alice";         // String
let age = 25;               // Number
let isStudent = true;       // Boolean
let score;                  // Undefined
let emptyValue = null;      // Null
let uniqueId = Symbol("id");// Symbol
let bigNumber = 9007199254740991n; // BigInt
      </code></pre>

      <h3 id="non-primitive" class="mt-3">Non-Primitive Data Types</h3>
      <ul>
        <li><strong>Object</strong> - Collection of key-value pairs. Example: <code>{name: "John", age: 30}</code></li>
        <li><strong>Array</strong> - Ordered list of values. Example: <code>[1, 2, 3]</code></li>
        <li><strong>Function</strong> - A block of code designed to perform a particular task.</li>
      </ul>

      <pre><code>// Non-Primitive Examples
let person = { name: "Alice", age: 25 }; // Object
let colors = ["Red", "Green", "Blue"];   // Array
function greet() {                        // Function
  return "Hello!";
}
      </code></pre>
</div>
      <!-- Non-Primitive Data Types Image -->
      <div class="text-center">
        <img src="{{ asset('images/non-pri-var.png') }}" alt="Non-Primitive Data Type" class="content-image">
      </div>
    </section>

    <!-- typeof operator -->
     <div class="card">
    <section>
      <h2 class="mt-4">3. Checking Data Types</h2>
      <p>Use the <code>typeof</code> operator to check the type of a variable:</p>
      <pre><code>
console.log(typeof "Hello");   // string
console.log(typeof 42);        // number
console.log(typeof true);      // boolean
console.log(typeof undefined); // undefined
console.log(typeof null);      // object (historical quirk)
console.log(typeof []);        // object
console.log(typeof greet);     // function
      </code></pre>
    </section>
</div>

    <!-- Interactive Playground -->
     <div class="card">
    <section>
      <h2 class="mt-4">4. Try It Yourself!</h2>
      <p>Write your code below and click <strong>Run Code</strong> to see the output:</p>
      <textarea id="code-editor" class="w-100 p-2  text-light rounded" rows="8" style="background-color:#343a40">// Example: Play with variables
let username = "John";
let age = 30;

console.log("Name:", username);
console.log("Age:", age);

age = 31;
console.log("Updated Age:", age);
      </textarea>
      <br>
      <button class="btn btn-success mt-2" onclick="runCode_var()">Run Code</button>
      <h3 class="mt-3">Console Output:</h3>
      <div id="output" class="bg-dark  p-3 rounded" style="height:150px; overflow-y:auto; color:white;">
        Your console messages will appear here...
      </div>
    </section>
    </div>
   
  </div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.introduction') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.oper-condition') }}'">
  Next =&gt;
</button>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/content.js') }}"></script>

@endsection