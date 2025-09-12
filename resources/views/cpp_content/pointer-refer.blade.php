@extends('layouts.cpp_app')

@section('title', 'C++ Pointers')

@section('content')

<header>
  <div class="container">
    <h1 class="text-center">C++ Pointers</h1>
    <div class="text-center my-3">
      <iframe width="650" height="325" src="https://www.youtube.com/embed/qYEjR6M0wSk?si=jF2ijZq5bwszACex" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <p class="lead text-center">
      A <strong>pointer</strong> in C++ is a variable that stores the <strong>memory address</strong> of another variable.  
      They are essential for dynamic memory allocation, working with arrays, and passing data efficiently to functions.
    </p>
  </div>
</header>

<main class="container">

  <!-- INTRODUCTION -->
  <section class="card my-4 p-3">
    <h2>Introduction to Pointers</h2>
    <p>
      Pointers allow direct access to memory addresses, making programs more flexible and powerful.
      <br>Key concepts:
    </p>
    <ul>
      <li>Pointers store <strong>addresses</strong> instead of actual values.</li>
      <li>The <code>&amp;</code> operator is used to get the address of a variable.</li>
      <li>The <code>*</code> operator (dereference) is used to access the value at that address.</li>
    </ul>

    <div class="code" id="code-intro">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int a = 10;
    int* ptr = &amp;a;

    cout &lt;&lt; "Value of a: " &lt;&lt; a &lt;&lt; endl;
    cout &lt;&lt; "Address of a: " &lt;&lt; &amp;a &lt;&lt; endl;
    cout &lt;&lt; "Pointer ptr holds: " &lt;&lt; ptr &lt;&lt; endl;
    cout &lt;&lt; "Value at pointer: " &lt;&lt; *ptr &lt;&lt; endl;

    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-intro','out-intro')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-intro')">Clear</button>
    </div>
    <pre id="out-intro" class="output-box"></pre>
  </section>

  <!-- DECLARATION AND DEREFERENCING -->
  <section class="card my-4 p-3">
    <h2>Declaring and Using Pointers</h2>
    <p>
      To declare a pointer, use the <code>*</code> symbol:
    </p>
    <ul>
      <li><code>int *ptr;</code> → A pointer to an integer.</li>
      <li><code>char *cptr;</code> → A pointer to a character.</li>
    </ul>

    <div class="code" id="code-declare">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int num = 42;
    int* p = &amp;num;  // Pointer holds the address of num

    cout &lt;&lt; "Value of num: " &lt;&lt; num &lt;&lt; endl;
    cout &lt;&lt; "Pointer stores address: " &lt;&lt; p &lt;&lt; endl;
    cout &lt;&lt; "Value using pointer: " &lt;&lt; *p &lt;&lt; endl;

    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-declare','out-declare')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-declare')">Clear</button>
    </div>
    <pre id="out-declare" class="output-box"></pre>
  </section>

  <!-- POINTER ARITHMETIC -->
  <section class="card my-4 p-3">
    <h2>Pointer Arithmetic</h2>
    <p>
      Pointers can be incremented or decremented to move between memory locations.
      This is especially useful when working with arrays.
    </p>

    <div class="code" id="code-arithmetic">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int arr[3] = {10, 20, 30};
    int* p = arr; // Points to arr[0]

    cout &lt;&lt; *p &lt;&lt; endl;   // 10
    cout &lt;&lt; *(p + 1) &lt;&lt; endl; // 20
    cout &lt;&lt; *(p + 2) &lt;&lt; endl; // 30

    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-arithmetic','out-arithmetic')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-arithmetic')">Clear</button>
    </div>
    <pre id="out-arithmetic" class="output-box"></pre>
  </section>

  <!-- POINTER TO POINTER -->
  <section class="card my-4 p-3">
    <h2>Pointer to Pointer (Double Pointer)</h2>
    <p>
      A pointer to a pointer is a variable that stores the address of another pointer.
      It is often used in dynamic memory and multidimensional arrays.
    </p>

    <div class="code" id="code-double-pointer">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int a = 5;
    int* p = &amp;a;      // Pointer to int
    int** pp = &amp;p;     // Pointer to pointer

    cout &lt;&lt; "Value of a: " &lt;&lt; a &lt;&lt; endl;
    cout &lt;&lt; "Value using single pointer: " &lt;&lt; *p &lt;&lt; endl;
    cout &lt;&lt; "Value using double pointer: " &lt;&lt; **pp &lt;&lt; endl;

    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn" onclick="runCpp('code-double-pointer','out-double-pointer')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-double-pointer')">Clear</button>
    </div>
    <pre id="out-double-pointer" class="output-box"></pre>
  </section>

  <!-- POINTER AND FUNCTION -->
  <section class="card my-4 p-3">
    <h2>Pointers with Functions</h2>
    <p>
      Pointers are used to pass data by reference to functions, allowing the function to modify the original variable.
    </p>

    <div class="code" id="code-function">
<pre>
#include &lt;iostream&gt;
using namespace std;

void update(int* x) {
    *x = *x + 10;
}

int main() {
    int num = 5;
    cout &lt;&lt; "Before update: " &lt;&lt; num &lt;&lt; endl;

    update(&amp;num);

    cout &lt;&lt; "After update: " &lt;&lt; num &lt;&lt; endl;

    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-function','out-function')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-function')">Clear</button>
    </div>
    <pre id="out-function" class="output-box"></pre>
  </section>

  <!-- DYNAMIC MEMORY -->
  <section class="card my-4 p-3">
    <h2>Dynamic Memory Allocation</h2>
    <p>
      Using <code>new</code> and <code>delete</code>, we can allocate and free memory dynamically at runtime.
    </p>

    <div class="code" id="code-dynamic">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int* p = new int;  // Allocate memory
    *p = 50;
    cout &lt;&lt; "Value at dynamically allocated memory: " &lt;&lt; *p &lt;&lt; endl;

    delete p;          // Free memory
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-dynamic','out-dynamic')">Run demo</button>
      <button class="btn btn-secondary" onclick="clearOut('out-dynamic')">Clear</button>
    </div>
    <pre id="out-dynamic" class="output-box"></pre>
  </section>

</main>

<!-- Styles -->
<style>
  .code {
    background: #1e293b;
    padding: 15px;
    border-radius: 6px;
    overflow-x: auto;
    font-family: "Fira Code", monospace;
    color: #e2e8f0;
    border: 1px solid #334155;
    margin-bottom: 20px;
  }

  .output-box {
    background: #0f172a;
    padding: 10px;
    border-radius: 6px;
    color: #10b981;
    border: 1px solid #334155;
    font-family: "Fira Code", monospace;
    margin-top: 10px;
    white-space: pre-wrap;
  }

  .btn-row {
    margin-top: 10px;
    display: flex;
    gap: 10px;
  }

  
</style>

<!-- JavaScript -->
<script>
  const sampleOutputs = {
    'code-intro': `Value of a: 10
Address of a: 0x7ffd1234
Pointer ptr holds: 0x7ffd1234
Value at pointer: 10`,

    'code-declare': `Value of num: 42
Pointer stores address: 0x7ffd5678
Value using pointer: 42`,

    'code-arithmetic': `10
20
30`,

    'code-double-pointer': `Value of a: 5
Value using single pointer: 5
Value using double pointer: 5`,

    'code-function': `Before update: 5
After update: 15`,

    'code-dynamic': `Value at dynamically allocated memory: 50`
  };

  function runCpp(codeId, outputId) {
    const outEl = document.getElementById(outputId);
    outEl.textContent = 'Running...';
    setTimeout(() => {
      outEl.textContent = sampleOutputs[codeId] || 'No output available for this code.';
    }, 300);
  }

  function clearOut(outputId) {
    document.getElementById(outputId).textContent = '';
  }
</script>
<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.function') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.static-dynamic') }}'">Next =&gt;</button>
    </div>
@endsection
