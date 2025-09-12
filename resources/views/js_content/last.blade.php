@extends('layouts.appjs')

@section('title', 'Fetch api')

@section('content')
   

  <!-- Main Content -->
  <div class="container mb-5" >
    <h1 class="mb-4">Fetch API in JavaScript</h1>

    <p class="lead">
      The <strong>Fetch API</strong> is a modern way to make network requests in JavaScript. It is simpler,
      cleaner, and uses <strong>Promises</strong>, making it easier to handle asynchronous code compared to the
      older <code>XMLHttpRequest</code>.
    </p>
<div class="container" style="display: flex; justify-content: center;">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/CyGodpqcid4?si=-FW2nOKCkNyE1KeG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <!-- Section 1: Introduction -->
    <section class="card">
      <h2>1. What is Fetch API?</h2>
      <p>
        The Fetch API lets you send and receive data asynchronously between a browser and a server.
        You can use it to:
      </p>
      <ul>
        <li>Fetch data from APIs.</li>
        <li>Send data to a server.</li>
        <li>Work with JSON, text, images, and more.</li>
      </ul>
    </section>

    <!-- Section 2: Comparison -->
    <section class="card">
      <h2>2. Why Use Fetch API?</h2>
      <table>
        <thead>
          <tr>
            <th>Feature</th>
            <th>XMLHttpRequest (Old Way)</th>
            <th>Fetch API (Modern Way)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Syntax</td>
            <td>Complex and verbose</td>
            <td>Clean and readable</td>
          </tr>
          <tr>
            <td>Returns</td>
            <td>Callbacks</td>
            <td>Promises</td>
          </tr>
          <tr>
            <td>JSON Handling</td>
            <td>Manual parsing required</td>
            <td>Built-in <code>.json()</code></td>
          </tr>
          <tr>
            <td>Error Handling</td>
            <td>Messy</td>
            <td>Simple with <code>.catch()</code></td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Section 3: Basic Syntax -->
    <section class="card">
      <h2>3. Basic Syntax</h2>
      <pre><code>fetch(url, options)
  .then(response =&gt; response.json())
  .then(data =&gt; console.log(data))
  .catch(error =&gt; console.error('Error:', error));</code></pre>
    </section>

    <!-- Section 4: GET Request -->
    <section class="card">
      <h2>4. Making a Simple GET Request</h2>
      <pre><code>fetch('https://jsonplaceholder.typicode.com/posts/1')
  .then(response =&gt; response.json())
  .then(data =&gt; console.log("Fetched Data:", data))
  .catch(error =&gt; console.error("Error fetching data:", error));</code></pre>
    </section>

    <!-- Section 5: POST Request -->
    <section class="card">
      <h2>5. Making a POST Request</h2>
      <pre><code>fetch('https://jsonplaceholder.typicode.com/posts', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    title: 'My New Post',
    body: 'This is the content of the post',
    userId: 1
  })
})
  .then(response =&gt; response.json())
  .then(data =&gt; console.log("Post created:", data))
  .catch(error =&gt; console.error("Error creating post:", error));</code></pre>
    </section>
 <div class="text-center">
            <!-- <h3>LOOPS</h3> -->
            <img style="" src="{{ asset('images/get-post.png') }}" alt="GET_POST" class="content-image mb-2,">
        </div>
    </div>

    <!-- Section 6: Handling Errors -->
     <div class="container">
    <section class="card">
      <h2>6. Handling HTTP Errors</h2>
      <pre><code>fetch('https://jsonplaceholder.typicode.com/invalid-url')
  .then(response =&gt; {
    if (!response.ok) {
      throw new Error('HTTP Error! Status: ' + response.status);
    }
    return response.json();
  })
  .then(data =&gt; console.log("Data received:", data))
  .catch(error =&gt; console.error("Error occurred:", error.message));</code></pre>
    </section>

    <!-- Section 7: Async/Await -->
    <section class="card">
      <h2>7. Using Fetch with Async/Await</h2>
      <pre><code>async function fetchPost() {
  try {
    let response = await fetch('https://jsonplaceholder.typicode.com/posts/1');
    if (!response.ok) {
      throw new Error('HTTP Error: ' + response.status);
    }
    let data = await response.json();
    console.log("Fetched using async/await:", data);
  } catch (error) {
    console.error("Fetch failed:", error);
  }
}
fetchPost();</code></pre>
    </section>

    <!-- Section 8: Fetch and Display Data -->
    <section class="card">
      <h2>8. Displaying Data in HTML</h2>
      <p>Example: Fetch the first 5 posts and display them as a list.</p>
      <pre><code>fetch('https://jsonplaceholder.typicode.com/posts?_limit=5')
  .then(response =&gt; response.json())
  .then(posts =&gt; {
    const list = document.getElementById('post-list');
    posts.forEach(post =&gt; {
      const li = document.createElement('li');
      li.textContent = post.title;
      list.appendChild(li);
    });
  })
  .catch(error =&gt; console.error("Error:", error));</code></pre>

      <ul id="post-list" class="mt-3"></ul>
    </section>

    <!-- Section 9: Best Practices -->
    <section class="card">
      <h2>9. Best Practices with Fetch</h2>
      <ul>
        <li>Always check <code>response.ok</code> to handle HTTP errors.</li>
        <li>Use <strong>async/await</strong> for cleaner code.</li>
        <li>Always handle network failures with <code>.catch()</code>.</li>
        <li>Keep API URLs and keys in separate config files.</li>
        <li>Use <code>try...catch</code> for better error handling.</li>
      </ul>
    </section>
    </div>
  
  </div>


    <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.callback') }}'">
  &lt;=Previous  
</button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection