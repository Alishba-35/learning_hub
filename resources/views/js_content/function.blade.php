@extends('layouts.appjs')

@section('title', 'functions')

@section('content')
   



    <!-- Page content -->
    <div id="function" class="container py-5">

  <h1 class="mb-4">JavaScript Functions and Methods</h1>
  
  <p class="lead">
    Functions and methods are the heart of JavaScript programming. 
    They allow us to write clean, reusable, and modular code that can solve complex problems efficiently.
  </p>
   <div class="container" style="display: flex; justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/P0XMXqDGttU?si=e5q4oZrPKr8aaEhe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

  <!-- Section 1: Introduction -->
  <section class="card">
    <h2>1. What is a Function?</h2>
    <p>
      A function is a block of code designed to perform a specific task. 
      It runs only when you <strong>call</strong> or <strong>invoke</strong> it. 
      Functions are like <em>recipes</em> — you define the steps once, and you can execute them as many times as needed.
    </p>
    <pre><code>// Basic Function
function greet() {
  console.log("Hello, welcome to JavaScript!");
}

greet(); // Output: Hello, welcome to JavaScript!
</code></pre>
  </section>

  <!-- Section 2: Why Use Functions -->
  <section class="card">
    <h2>2. Why Use Functions?</h2>
    <ul>
      <li>To avoid writing the same code repeatedly.</li>
      <li>To organize code into logical blocks.</li>
      <li>To improve code reusability.</li>
      <li>To make programs easier to test and debug.</li>
    </ul>
  </section>

  <!-- Section 3: Types of Functions -->
  <section class="card">
    <h2>3. Types of Functions</h2>
    
    <h4>A) Function Declaration</h4>
    <p>Defined using the <code>function</code> keyword and can be called before or after it's declared because of <strong>hoisting</strong>.</p>
    <pre><code>function add(a, b) {
  return a + b;
}
console.log(add(5, 3)); // Output: 8
</code></pre>

    <h4>B) Function Expression</h4>
    <p>Stored inside a variable. It is <strong>not hoisted</strong>, so it must be defined before calling.</p>
    <pre><code>const subtract = function(a, b) {
  return a - b;
};
console.log(subtract(10, 4)); // Output: 6
</code></pre>

    <h4>C) Arrow Function (ES6)</h4>
    <p>Shorter syntax introduced in ES6. Ideal for callbacks and concise code.</p>
    <pre><code>const multiply = (a, b) => a * b;
console.log(multiply(3, 4)); // Output: 12
</code></pre>

    <h4>D) Default Parameters</h4>
    <pre><code>function greetUser(name = "Guest") {
  console.log("Hello, " + name);
}
greetUser(); // Hello, Guest
greetUser("Alice"); // Hello, Alice
</code></pre>

    <h4>E) Rest Parameters</h4>
    <p>Used when the number of arguments is unknown.</p>
    <pre><code>function sum(...nums) {
  return nums.reduce((total, num) => total + num, 0);
}
console.log(sum(1, 2, 3, 4)); // Output: 10
</code></pre>
  </section>
  <div class="text-center">
      <h5>Function</h5>
      <img src="{{ asset('images/function.png') }}" alt="Type of Function" class="content-image">
    </div>


  <!-- Section 4: Methods -->
  <section class="card">
    <h2>4. Methods in JavaScript</h2>
    <p>A method is simply a function that belongs to an object.</p>
    <pre><code>const student = {
  name: "John",
  greet: function() {
    console.log("Hello, my name is " + this.name);
  }
};

student.greet(); // Output: Hello, my name is John
</code></pre>

    <h4>Real-World Example:</h4>
    <pre><code>const calculator = {
  add: function(a, b) { return a + b; },
  subtract: function(a, b) { return a - b; },
  multiply: function(a, b) { return a * b; },
  divide: function(a, b) { return a / b; }
};

console.log(calculator.add(5, 3)); // 8
</code></pre>
  </section>

  <!-- Section 5: Built-in Methods -->
  <section class="card">
    <h2>5. Common Built-in Methods</h2>
    <table>
      <thead>
        <tr>
          <th>Category</th>
          <th>Method</th>
          <th>Example</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>String</td>
          <td>toUpperCase()</td>
          <td><code>"hello".toUpperCase()</code> → HELLO</td>
        </tr>
        <tr>
          <td>Array</td>
          <td>map()</td>
          <td><code>[1,2,3].map(x => x*2)</code> → [2,4,6]</td>
        </tr>
        <tr>
          <td>Object</td>
          <td>Object.keys()</td>
          <td><code>Object.keys({a:1, b:2})</code> → ["a", "b"]</td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Section 6: Try It Yourself -->
  <section class="card">
    <h2>6. Try It Yourself</h2>
    <p>Type your own function and run it below:</p>
    <textarea id="code-editor">function sayHello() {
  console.log("Hello, student!");
}
sayHello();</textarea>
    <button class="run-btn" onclick="runCode()">Run Code</button>
    <h3 class="mt-3">Console Output:</h3>
    <div id="output" >Output show here.....</div>
  </section>
</div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.array') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.dom') }}'">
  Next =&gt;
</button>
<script>
  function runCode() {
    const userCode = document.getElementById('code-editor').value;
    const outputDiv = document.getElementById('output');
    outputDiv.textContent = '';

    const originalLog = console.log;
    console.log = function(...args) {
      outputDiv.textContent += args.join(' ') + '\n';
      originalLog.apply(console, args);
    };

    try {
      new Function(userCode)();
    } catch (error) {
      outputDiv.textContent += 'Error: ' + error.message + '\n';
    }

    console.log = originalLog;
  }   </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
@endsection