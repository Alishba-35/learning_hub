@extends('layouts.appjs')

@section('title', 'loop-string')

@section('content')
   

    <!-- Page Content -->




    <!-- Loop -->

    <div id="loop" class="container py-4">
        <h1 class="text-center mb-4">JavaScript Loops and String</h1>
        <div class="container" style="display: flex; justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UmRtFFSDSFo?si=6AC0IFEIbKWUp9wu"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="card">
        <h1 class="text-center mb-4">JavaScript Loops Explained</h1>
        <p class="lead">
            Loops are used to repeat a block of code multiple times until a certain condition is met.
            They help programmers avoid writing repetitive code and make programs more efficient.
            JavaScript offers several types of loops, each serving different purposes.
        </p>
</div>
        <!-- 1. For Loop -->
         <div class="card">
        <div class="loop-section">
            <h2>1. The <code>for</code> Loop</h2>
            <p>
                The <code>for</code> loop is used when you know how many times you want to execute a block of code.
                It consists of three parts:
            </p>
            <ul>
                <li><strong>Initialization:</strong> Runs once before the loop starts (e.g., <code>let i = 0;</code>).
                </li>
                <li><strong>Condition:</strong> Checked before each iteration. If <code>true</code>, the loop runs.</li>
                <li><strong>Increment/Decrement:</strong> Runs after each loop iteration (e.g., <code>i++</code>).</li>
            </ul>

            <pre><code>// Example: Print numbers 1 to 5
for (let i = 1; i <= 5; i++) {
  console.log("Number:", i);
}</code></pre>
        </div>
</div>
<div class="card">
        <!-- 2. While Loop -->
        <div class="loop-section">
            <h2>2. The <code>while</code> Loop</h2>
            <p>
                The <code>while</code> loop is used when you do not know beforehand how many times the loop should run.
                It continues running as long as the condition is <code>true</code>.
            </p>
            <pre><code>// Example: Print numbers 1 to 5
let i = 1;
while (i <= 5) {
  console.log("Number:", i);
  i++;
}</code></pre>
        </div>
</div>
        <!-- 3. Do While Loop -->
         <div class="card">
        <div class="loop-section">
            <h2>3. The <code>do...while</code> Loop</h2>
            <p>
                The <code>do...while</code> loop is similar to <code>while</code>,
                but it guarantees that the block of code will run at least <strong>once</strong> before checking the
                condition.
            </p>
            <pre><code>// Example: Print numbers 1 to 5
let i = 1;
do {
  console.log("Number:", i);
  i++;
} while (i <= 5);</code></pre>
        </div>
</div>
<div class="card">
        <!-- 4. For Of Loop -->
        <div class="loop-section">
            <h2>4. The <code>for...of</code> Loop</h2>
            <p>
                The <code>for...of</code> loop is used to iterate over arrays, strings, and other iterable objects.
                It is best for when you need values directly.
            </p>
            <pre><code>// Example: Loop through an array
const colors = ["Red", "Green", "Blue"];
for (let color of colors) {
  console.log("Color:", color);
}</code></pre>
        </div>
</div>
<div class="card">
        <!-- 5. For In Loop -->
        <div class="loop-section">
            <h2>5. The <code>for...in</code> Loop</h2>
            <p>
                The <code>for...in</code> loop is used to iterate over the <strong>keys (properties)</strong> of an
                object.
            </p>
            <pre><code>// Example: Loop through an object
const person = { name: "Alice", age: 25, city: "New York" };
for (let key in person) {
  console.log(key + ": " + person[key]);
}</code></pre>
        </div>
</div>
        <!-- 6. forEach Loop -->
         <div class="card">
        <div class="loop-section">
            <h2>6. <code>forEach()</code> Method</h2>
            <p>
                The <code>forEach()</code> method is available on arrays and is used to execute a function once for each
                array element.
            </p>
            <pre><code>// Example: Using forEach
const numbers = [1, 2, 3, 4];
numbers.forEach(function(num) {
  console.log("Number:", num);
});</code></pre>
        </div>
</div>
<div class="card">
        <!-- Comparison Table -->
        <div class="loop-section">
            <h2>Loop Comparison Table</h2>
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Loop Type</th>
                        <th>Best Used For</th>
                        <th>Condition Check</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>for</td>
                        <td>When the number of iterations is known</td>
                        <td>Before each iteration</td>
                    </tr>
                    <tr>
                        <td>while</td>
                        <td>When iterations depend on a condition</td>
                        <td>Before each iteration</td>
                    </tr>
                    <tr>
                        <td>do...while</td>
                        <td>When code must run at least once</td>
                        <td>After each iteration</td>
                    </tr>
                    <tr>
                        <td>for...of</td>
                        <td>Iterating over arrays or strings</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>for...in</td>
                        <td>Iterating over object keys</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>forEach</td>
                        <td>Performing operations on each array element</td>
                        <td>N/A</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
<div class="card">
        <!-- Interactive Playground -->
        <div class="loop-section">
            <h2>Try It Yourself</h2>
            <p>Write your own loop code and run it below:</p>
            <textarea id="code-editor">// Example: Play with loops
for (let i = 1; i <= 3; i++) {
  console.log("Iteration:", i);
}</textarea>
            <button class="btn mt-2" onclick="runCode()">Run Code</button>

            <h3 class="mt-3">Console Output:</h3>
            <div id="output" class="output-box">
                Your console messages will appear here...
            </div>
        </div></div>
        <div class="text-center">
            <h3>LOOPS</h3>
            <img style="" src="{{ asset('images/loop.png') }}" alt="Loop" class="content-image mb-2,">
        </div>



        <!-- string -->
      
        <div id="string">

            <div id="strings" class="container py-4">
                   <div class="card">
                <h1 class="text-center mb-4">JavaScript Strings & Methods</h1>
                <p class="lead">
                    Strings in JavaScript are sequences of characters used to represent text.
                    You can create them using <code>'single quotes'</code>, <code>"double quotes"</code>, or
                    <code>`backticks`</code>.
                    Backticks are useful for multi-line strings and embedding variables.
                </p>

                <!-- Section: Creating Strings -->
                <div class="loop-section">
                    <h2>1. Creating Strings</h2>
                    <p>Here are three ways to create a string in JavaScript:</p>
                    <pre><code>// Example of creating strings
let str1 = 'Hello';
let str2 = "World";
let str3 = `Hello, ${str1} ${str2}`;
console.log(str3); // Output: Hello, Hello World</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: String Properties -->
                <div class="loop-section">
                    <h2>2. String Properties</h2>
                    <p><strong>.length</strong> → Returns the total number of characters in a string.</p>
                    <pre><code>let text = "JavaScript";
console.log(text.length); // Output: 10</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Case Conversion -->
                <div class="loop-section">
                    <h2>3. Case Conversion</h2>
                    <p>Convert text to upper or lower case:</p>
                    <pre><code>let name = "hello world";
console.log(name.toUpperCase()); // Output: HELLO WORLD
console.log(name.toLowerCase()); // Output: hello world</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Searching in Strings -->
                <div class="loop-section">
                    <h2>4. Searching Inside Strings</h2>
                    <p>Find positions of text or check existence:</p>
                    <pre><code>let text = "JavaScript is fun";
console.log(text.indexOf("Script")); // Output: 4
console.log(text.includes("fun"));    // Output: true</code></pre>
                </div>
                </div>
                <div class="card">

                <!-- Section: Extracting Strings -->
                <div class="loop-section">
                    <h2>5. Extracting Parts of Strings</h2>
                    <p>Use <code>slice()</code>, <code>substring()</code>, or <code>substr()</code> to extract parts of
                        a
                        string.</p>
                    <pre><code>let text = "JavaScript";
console.log(text.slice(0, 4)); // Output: Java
console.log(text.substring(4, 10)); // Output: Script</code></pre>
                </div></div>
                <div class="card">

                <!-- Section: Replacing Text -->
                <div class="loop-section">
                    <h2>6. Replacing Text</h2>
                    <p>Replace specific parts of a string:</p>
                    <pre><code>let text = "I love JavaScript";
console.log(text.replace("JavaScript", "Python"));
// Output: I love Python

let text2 = "JS is awesome. JS is fun!";
console.log(text2.replaceAll("JS", "JavaScript"));
// Output: JavaScript is awesome. JavaScript is fun!</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Removing Spaces -->
                <div class="loop-section">
                    <h2>7. Removing Extra Spaces</h2>
                    <p>Clean unwanted spaces from the start and end of a string:</p>
                    <pre><code>let text = "   Hello World   ";
console.log(text.trim());     // Output: Hello World
console.log(text.trimStart()); // Output: Hello World
console.log(text.trimEnd());   // Output: Hello World</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Splitting and Joining -->
                <div class="loop-section">
                    <h2>8. Splitting and Joining Strings</h2>
                    <pre><code>let fruits = "Apple, Banana, Mango";
let arr = fruits.split(", ");
console.log(arr); // Output: ["Apple", "Banana", "Mango"]

let hello = "Hello";
let world = "World";
console.log(hello.concat(" ", world)); // Output: Hello World</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Checking Start and End -->
                <div class="loop-section">
                    <h2>9. Checking Start or End of a String</h2>
                    <pre><code>let text = "JavaScript";
console.log(text.startsWith("Java"));   // Output: true
console.log(text.endsWith("Script"));   // Output: true</code></pre>
                </div></div>

                <!-- Section: Repeating Text -->
<div class="card">
                <div class="loop-section">
                    <h2>10. Repeating Text</h2>
                    <pre><code>let text = "Hi! ";
console.log(text.repeat(3)); 
// Output: Hi! Hi! Hi!</code></pre>
                </div>
</div>
<div class="card">
                <!-- Section: Template Literals -->
                <div class="loop-section">
                    <h2>11. Template Literals</h2>
                    <p>Use backticks <code>`</code> for embedding variables and multi-line strings:</p>
                    <pre><code>let name = "Alice";
let age = 25;

let intro = `My name is ${name} and I am ${age} years old.`;
console.log(intro); 
// Output: My name is Alice and I am 25 years old.</code></pre>
                </div>
            </div>
</div>
            <h3>Escape sequences</h3>
            <img style="" src="{{ asset('images/escape.png') }}" alt="Escape" class="content-image mb-2,">
        </div>
<div class="card">
        <!-- Summary Table -->
        <div class="loop-section">
            <h2>Summary Table of String Methods</h2>
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Purpose</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>.length</td>
                        <td>Returns number of characters</td>
                        <td><code>"Hello".length → 5</code></td>
                    </tr>
                    <tr>
                        <td>toUpperCase()</td>
                        <td>Convert to uppercase</td>
                        <td><code>"abc".toUpperCase() → "ABC"</code></td>
                    </tr>
                    <tr>
                        <td>toLowerCase()</td>
                        <td>Convert to lowercase</td>
                        <td><code>"ABC".toLowerCase() → "abc"</code></td>
                    </tr>
                    <tr>
                        <td>indexOf()</td>
                        <td>Find position of first occurrence</td>
                        <td><code>"Hello".indexOf("o") → 4</code></td>
                    </tr>
                    <tr>
                        <td>slice()</td>
                        <td>Extract part of string</td>
                        <td><code>"Hello".slice(1,4) → "ell"</code></td>
                    </tr>
                    <tr>
                        <td>replace()</td>
                        <td>Replace text</td>
                        <td><code>"Hi".replace("H","B") → "Bi"</code></td>
                    </tr>
                    <tr>
                        <td>trim()</td>
                        <td>Remove extra spaces</td>
                        <td><code>"  Hi  ".trim() → "Hi"</code></td>
                    </tr>
                    <tr>
                        <td>split()</td>
                        <td>Convert to array</td>
                        <td><code>"a,b".split(",") → ["a","b"]</code></td>
                    </tr>
                    <tr>
                        <td>startsWith()</td>
                        <td>Check beginning of string</td>
                        <td><code>"Java".startsWith("Ja") → true</code></td>
                    </tr>
                    <tr>
                        <td>endsWith()</td>
                        <td>Check end of string</td>
                        <td><code>"Java".endsWith("va") → true</code></td>
                    </tr>
                    <tr>
                        <td>repeat()</td>
                        <td>Repeat string multiple times</td>
                        <td><code>"Hi".repeat(3) → "HiHiHi"</code></td>
                    </tr>
                </tbody>
            </table>

</div>
        </div>
        <h3>String Methods</h3>
        <img src="{{ asset('images/string-method.png') }}" alt="method" class="content-image mb-2,ms-2">

        <!-- Interactive Playground -->
         <div class="card">
        <div class="loop-section">
            <h2>Try It Yourself</h2>
            <p>Write your own string code and see the result below:</p>
            <textarea id="string-editor">// Example
let name = " JavaScript ";
console.log(name.trim().toUpperCase());</textarea>
            <button class="btn mt-2" onclick="runStringCode()">Run Code</button>

            <h3 class="mt-3">Console Output:</h3>
            <div id="string-output" class="output-box">Your console messages will appear here...</div>
        </div>
      
    </div>

    <script>
        function runStringCode() {
            const userCode = document.getElementById('string-editor').value;
            const outputDiv = document.getElementById('string-output');

            outputDiv.textContent = '';

            const originalLog = console.log;
            console.log = function (...args) {
                outputDiv.textContent += args.join(' ') + '\n';
                originalLog.apply(console, args);
            };

            try {
                new Function(userCode)();
            } catch (error) {
                outputDiv.textContent += 'Error: ' + error.message + '\n';
            }

            console.log = originalLog;
        }
    </script>

    </div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.oper-condition') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.array') }}'">
  Next =&gt;
</button>
    </div>









    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/loop-string.js') }}"></script>

@endsection