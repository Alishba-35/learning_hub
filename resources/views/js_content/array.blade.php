@extends('layouts.appjs')

@section('title', 'Array')

@section('content')
   

  <!-- Main Content -->
  <div class="container py-5">
    <h1 class="mb-4">JavaScript Arrays </h1>
    <div class="container" style="display: flex; justify-content: center;">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/gFWhbjzowrM?si=OwBL36h6u2aHr2xP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
    <p class="lead">
        
      Arrays are a fundamental data structure in JavaScript. They store multiple values in a single variable
      and provide powerful built-in methods for manipulation and iteration. Below, we'll cover everything
      from basic arrays to advanced iteration techniques, including 2D arrays.
    </p>

    <!-- 1. What is an Array -->
    <section class="card ">
      <h2>1. What is an Array?</h2>
      <p>
        An array is an ordered collection of elements, indexed starting from <code>0</code>.
        You can store numbers, strings, objects, or even other arrays.
      </p>
      <pre><code>// Creating arrays
let numbers = [1, 2, 3, 4];
let mixed = ["Hello", 42, true, { name: "Alice" }];
let fruits = new Array("Apple", "Banana", "Mango");

console.log(numbers[0]); // 1
console.log(mixed[3].name); // Alice
</code></pre>
    </section>

    <!-- 2. Array Properties -->
    <section class="card">
      <h2>2. Array Properties</h2>
      <p>The most commonly used property is <code>length</code>, which returns the number of elements in the array.</p>
      <pre><code>let fruits = ["Apple", "Banana", "Mango"];
console.log(fruits.length); // 3
</code></pre>
    </section>

    <!-- 3. Array Methods -->
    <section class="card ">
      <h2>3. Common Array Methods</h2>

      <h4>A) Adding & Removing Elements</h4>
      <ul>
        <li><code>push()</code> - Add to the end</li>
        <li><code>pop()</code> - Remove from the end</li>
        <li><code>unshift()</code> - Add to the start</li>
        <li><code>shift()</code> - Remove from the start</li>
      </ul>
      <pre><code>let fruits = ["Apple", "Banana"];
fruits.push("Mango");
console.log(fruits); // ["Apple", "Banana", "Mango"]

fruits.pop();
console.log(fruits); // ["Apple", "Banana"]
</code></pre>

      <h4>B) Finding and Searching</h4>
      <ul>
        <li><code>indexOf()</code> - Returns index of first match</li>
        <li><code>lastIndexOf()</code> - Returns index of last match</li>
        <li><code>includes()</code> - Checks if value exists</li>
      </ul>
      <pre><code>let fruits = ["Apple", "Banana", "Mango"];
console.log(fruits.indexOf("Banana")); // 1
console.log(fruits.includes("Mango")); // true
</code></pre>

      <h4>C) Extracting & Combining</h4>
      <ul>
        <li><code>slice()</code> - Extract part of an array (non-destructive)</li>
        <li><code>splice()</code> - Add or remove elements (modifies original array)</li>
        <li><code>concat()</code> - Merge arrays</li>
      </ul>
      <pre><code>let fruits = ["Apple", "Banana", "Mango"];
let citrus = fruits.slice(1, 3);
console.log(citrus); // ["Banana", "Mango"]
</code></pre>
    </section>

    <!-- 4. Iteration Methods -->
    <section class="card">
      <h2>4. Iteration Methods</h2>
      <p>Modern ways to iterate through arrays:</p>

      <h4>A) forEach()</h4>
      <pre><code>let numbers = [1, 2, 3];
numbers.forEach(num => console.log(num));
// Output: 1, 2, 3
</code></pre>

      <h4>B) map()</h4>
      <pre><code>let doubled = numbers.map(num => num * 2);
console.log(doubled); // [2, 4, 6]
</code></pre>

      <h4>C) filter()</h4>
      <pre><code>let evens = numbers.filter(num => num % 2 === 0);
console.log(evens); // [2]
</code></pre>

      <h4>D) reduce()</h4>
      <pre><code>let total = numbers.reduce((sum, num) => sum + num, 0);
console.log(total); // 6
</code></pre>

      <h4>E) for...of Loop</h4>
      <p>
        The <code>for...of</code> loop is a clean and simple way to iterate over array elements.
      </p>
      <pre><code>let fruits = ["Apple", "Banana", "Mango"];
for (let fruit of fruits) {
  console.log(fruit);
}
// Output: Apple, Banana, Mango
</code></pre>
    </section>

    <!-- 5. Traditional Loops -->
    <section class="card ">
      <h2>5. Traditional Loops</h2>

      <h4>A) for Loop</h4>
      <pre><code>for (let i = 0; i < 5; i++) {
  console.log(i);
}
// Output: 0, 1, 2, 3, 4
</code></pre>

      <h4>B) while Loop</h4>
      <pre><code>let i = 0;
while (i < 5) {
  console.log(i);
  i++;
}
// Output: 0, 1, 2, 3, 4
</code></pre>

      <h4>C) do...while Loop</h4>
      <pre><code>let j = 0;
do {
  console.log(j);
  j++;
} while (j < 5);
// Output: 0, 1, 2, 3, 4
</code></pre>
    </section>
     <div class="text-center">
      <h5>Array Iteration</h5>
      <img src="{{ asset('images/iteration-array.png') }}" alt="Array Iteration" class="content-image">
    </div>

    <!-- 6. 2D Arrays -->
    <section class="card mb-4">
      <h2>6. Two-Dimensional (2D) Arrays</h2>
      <p>
        A 2D array is an array of arrays, useful for grids, tables, and matrices.
      </p>
      <pre><code>// Creating a 2D array
let matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

// Accessing elements
console.log(matrix[0][1]); // 2

// Iterating through a 2D array
for (let row of matrix) {
  for (let value of row) {
    console.log(value);
  }
}
// Output: 1 2 3 4 5 6 7 8 9
</code></pre>
    </section>

    <!-- 7. Try It Yourself -->
    <section class="card mb-4">
      <h2>7. Try It Yourself</h2>
      <textarea id="code-editor">let numbers = [1, 2, 3, 4, 5];
console.log("Original:", numbers);

numbers.push(6);
console.log("After Push:", numbers);

numbers.pop();
console.log("After Pop:", numbers);</textarea>
      <button class="run-btn mt-2" onclick="runCode()">Run Code</button>
      <div id="output" class="mt-3"></div>
    </section>

    <!-- 8. Summary Table -->
    <section class="card mb-4">
      <h2>8. Summary Table of Array Methods</h2>
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>Method</th>
              <th>Purpose</th>
              <th>Example</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>push()</td>
              <td>Add to end</td>
              <td><code>arr.push(5)</code></td>
            </tr>
            <tr>
              <td>pop()</td>
              <td>Remove last</td>
              <td><code>arr.pop()</code></td>
            </tr>
            <tr>
              <td>for...of</td>
              <td>Loop through elements</td>
              <td><code>for (let el of arr)</code></td>
            </tr>
            <tr>
              <td>map()</td>
              <td>Transform array</td>
              <td><code>arr.map(x => x * 2)</code></td>
            </tr>
            <tr>
              <td>filter()</td>
              <td>Filter array</td>
              <td><code>arr.filter(x => x > 2)</code></td>
            </tr>
            <tr>
              <td>reduce()</td>
              <td>Accumulate to single value</td>
              <td><code>arr.reduce((a, b) => a + b)</code></td>
            </tr>
            <tr>
              <td>2D Array Loop</td>
              <td>Iterate nested arrays</td>
              <td><code>for (let row of matrix) {...}</code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <div class="text-center">
      <h5>Array Methods</h5>
      <img src="{{ asset('images/method-array.png') }}" alt="Array Methods" class="content-image">
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Run Code Script -->
  <script>
    function runCode() {
      const userCode = document.getElementById('code-editor').value;
      const outputDiv = document.getElementById('output');
      outputDiv.textContent = '';

      const originalLog = console.log;
      console.log = function (...args) {
        outputDiv.textContent += args.join(' ') + '\n';
        originalLog.apply(console, args);
      };

      try {
        new Function(userCode)();
      } catch (error) {
        outputDiv.classList.add('error');
        outputDiv.textContent += 'Error: ' + error.message + '\n';
      }

      console.log = originalLog;
    }
  </script>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.loop-string') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.function') }}'">
  Next =&gt;
</button>

@endsection