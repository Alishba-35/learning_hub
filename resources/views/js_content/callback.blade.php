@extends('layouts.appjs')

@section('title', 'callback,promises,async/await')

@section('content')
   


    <div class="container py-5">

        <h1 class="mb-4">JavaScript Asynchronous Concepts</h1>
        <p class="lead">
            Learn how JavaScript handles asynchronous operations using callbacks, promises, and async/await.
        </p>
        <div class="container" style="display: flex; justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/d3jXofmQm44?si=TDSDiM-NPOIknGl0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Callback -->
        <section class="card" id="callback">
            <h2>1. Callback Functions</h2>
            <p>A callback function is a function passed to another function and executed later.</p>
            <pre><code>// Callback Example
function greet(name, callback) {
  console.log("Hello " + name);
  callback();
}

function sayGoodbye() {
  console.log("Goodbye!");
}

greet("Alice", sayGoodbye);
</code></pre>
        </section>

        <!-- Callback Hell -->
        <section class="card" id="callback-hell">
            <h2>2. Callback Hell</h2>
            <p>Nested callbacks can make code messy and hard to maintain.</p>
            <pre><code>doSomething(function(result) {
  doSomethingElse(result, function(newResult) {
    doAnotherThing(newResult, function(finalResult) {
      console.log("Final result: " + finalResult);
    });
  });
});
</code></pre>
        </section>

        <!-- Promises -->
        <section class="card" id="promises">
            <h2>3. Promises</h2>
            <p>A Promise represents the eventual result (success or failure) of an async operation.</p>
            <pre><code>let myPromise = new Promise((resolve, reject) => {
  let success = true;
  if(success) resolve("Task completed!");
  else reject("Task failed!");
});

myPromise.then(result => console.log(result))
         .catch(error => console.log(error));
</code></pre>
        </section>

        <!-- Promise Chain -->
        <section class="card" id="promise-chain">
            <h2>4. Promise Chaining</h2>
            <p>Use <code>.then()</code> multiple times to chain async tasks sequentially.</p>
            <pre><code>new Promise((resolve) => resolve(5))
.then(result => result * 2)
.then(result => result + 3)
.then(result => console.log(result)); // 13
</code></pre>
        </section>

        <!-- Async/Await -->
        <section class="card" id="async-await">
            <h2>5. Async/Await</h2>
            <p>Write asynchronous code like synchronous code using <code>async</code> and <code>await</code>.</p>
            <pre><code>function fetchData() {
  return new Promise(resolve => setTimeout(() => resolve("Data received!"), 2000));
}

async function getData() {
  const result = await fetchData();
  console.log(result);
}

getData();
</code></pre>
        </section>

        <!-- Comparison -->
        <section class="card" id="comparison">
            <h2>6. Which is Better?</h2>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Callback</th>
                        <th>Promise</th>
                        <th>Async/Await</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Readability</td>
                        <td>Poor</td>
                        <td>Good</td>
                        <td>Excellent</td>
                    </tr>
                    <tr>
                        <td>Error Handling</td>
                        <td>Difficult</td>
                        <td>Easy</td>
                        <td>Very Easy</td>
                    </tr>
                    <tr>
                        <td>Maintenance</td>
                        <td>Hard</td>
                        <td>Medium</td>
                        <td>Easy</td>
                    </tr>
                    <tr>
                        <td>Sequential Calls</td>
                        <td>Messy</td>
                        <td>Easy</td>
                        <td>Very Easy</td>
                    </tr>
                </tbody>
            </table>
        </section>
<div class="text-center">
            <!-- <h3>LOOPS</h3> -->
            <img style="" src="{{ asset('images/async.png') }}" alt="async" class="content-image mb-2,">
        </div>
    </div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.class') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.last') }}'">
  Next =&gt;
</button>

    <script src="{{ asset('js/async.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection