@extends('layouts.cpp_app')

@section('title', 'Static & Dynamic Memory Management in C++')

@section('content')

<header>
    <div class="container">
        <h1>Static & Dynamic Memory Management in C++</h1>
        <p class="lead">
            Learn how memory is allocated and managed at compile-time and runtime in C++.
        </p>
         <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px;">
           <iframe width="650" height="325" src="https://www.youtube.com/embed/q6_lN-CQN2s?si=gg-8wXB9PreyTMg-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      
    </div>
</header>

<main class="container">
    <div class="grid">

        <!-- Concept Overview -->
        <section class="card">
            <h2>What is Memory Management?</h2>
            <div class="sub">
                Memory management determines how variables and data structures are stored and managed during program execution.
                C++ provides both <strong>static memory allocation</strong> (at compile time) and <strong>dynamic memory allocation</strong> (at runtime).
            </div>
             <div class="text-center">
   
   
    <img src="{{ asset('images/mem-manag.png') }}" alt="memory management" class="content-image">
  </div>
        </section>

        <!-- Static Memory Allocation -->
        <section class="card">
            <h2>Static Memory Allocation</h2>
            <div class="sub">
                Memory is allocated <strong>at compile time</strong>. The size and lifetime of variables are fixed throughout the program.
                <ul>
                    <li>Fast and efficient</li>
                    <li>Less flexible (size cannot change)</li>
                    <li>Memory is automatically freed when the function ends</li>
                </ul>
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int arr[5] = {10, 20, 30, 40, 50};
    for (int i = 0; i &lt; 5; i++) {
        cout &lt;&lt; arr[i] &lt;&lt; " ";
    }
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('10 20 30 40 50', 'output-static')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-static')">Clear</button>
            </div>
            <div class="out" id="output-static"></div>
        </section>

        <!-- Dynamic Memory Allocation -->
        <section class="card">
            <h2>Dynamic Memory Allocation</h2>
            <div class="sub">
                Memory is allocated <strong>at runtime</strong> using <code>new</code> and manually released using <code>delete</code>.
                <ul>
                    <li>Flexible: Memory can be allocated based on user input</li>
                    <li>Efficient for large or unknown data sizes</li>
                    <li>Programmer is responsible for freeing memory</li>
                </ul>
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int *ptr = new int;  // Allocate memory
    *ptr = 42;           // Assign value
    cout &lt;&lt; *ptr;        // Print value
    delete ptr;          // Free memory
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('42', 'output-dynamic')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-dynamic')">Clear</button>
            </div>
            <div class="out" id="output-dynamic"></div>
        </section>

        <!-- Dynamic Array Example -->
        <section class="card">
            <h2>Dynamic Array</h2>
            <div class="sub">
                Create an array dynamically based on user input size using <code>new[]</code> and free it using <code>delete[]</code>.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int size;
    cout &lt;&lt; "Enter size: ";
    cin &gt;&gt; size;

    int *arr = new int[size];  // Allocate dynamic array

    for (int i = 0; i &lt; size; i++) {
        arr[i] = i + 1;
    }

    for (int i = 0; i &lt; size; i++) {
        cout &lt;&lt; arr[i] &lt;&lt; " ";
    }

    delete[] arr;  // Free memory
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Example: 1 2 3 4 5', 'output-dynamic-array')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-dynamic-array')">Clear</button>
            </div>
            <div class="out" id="output-dynamic-array"></div>
        </section>

        <!-- Dynamic 2D Array Example -->
        <section class="card">
            <h2>Dynamic 2D Array</h2>
            <div class="sub">
                Allocate memory for a two-dimensional array at runtime.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int rows = 3, cols = 3;

    // Allocate memory for 2D array
    int **matrix = new int*[rows];
    for (int i = 0; i &lt; rows; i++) {
        matrix[i] = new int[cols];
    }

    // Initialize and print
    for (int i = 0; i &lt; rows; i++) {
        for (int j = 0; j &lt; cols; j++) {
            matrix[i][j] = (i + 1) * (j + 1);
            cout &lt;&lt; matrix[i][j] &lt;&lt; " ";
        }
        cout &lt;&lt; endl;
    }

    // Free memory
    for (int i = 0; i &lt; rows; i++) {
        delete[] matrix[i];
    }
    delete[] matrix;

    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('1 2 3\n2 4 6\n3 6 9', 'output-2d')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-2d')">Clear</button>
            </div>
            <div class="out" id="output-2d"></div>
        </section>

        <!-- Memory Leak Example -->
        <section class="card">
            <h2>Memory Leak Example</h2>
            <div class="sub">
                A <strong>memory leak</strong> occurs when dynamically allocated memory is not freed, causing wasted memory.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

void createLeak() {
    int *ptr = new int(100); // Memory allocated but not freed
}

int main() {
    for (int i = 0; i &lt; 1000; i++) {
        createLeak(); // Memory keeps leaking
    }
    cout &lt;&lt; "Memory leak occurred!";
    return 0;
}
</pre>
            </div>
            <div class="note">
                ❗ **Solution:** Always use <code>delete</code> or smart pointers like <code>unique_ptr</code> or <code>shared_ptr</code>.
            </div>
        </section>

        <!-- Smart Pointer Example -->
        <section class="card">
            <h2>Using Smart Pointers</h2>
            <div class="sub">
                Smart pointers automatically manage memory and prevent leaks.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
#include &lt;memory&gt; // For smart pointers
using namespace std;

int main() {
    unique_ptr&lt;int&gt; ptr = make_unique&lt;int&gt;(42);
    cout &lt;&lt; *ptr;  // Output: 42
    // Memory automatically freed when ptr goes out of scope
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('42', 'output-smart')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-smart')">Clear</button>
            </div>
            <div class="out" id="output-smart"></div>
        </section>
    </div>
</main>

<script>
function showOutput(result, id) {
    document.getElementById(id).innerText = "Output:\n" + result;
}
function clearOut(id) {
    document.getElementById(id).innerText = "";
}
</script>

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
.out {
    background: #0f172a;
    color: #f8fafc;
    padding: 10px;
    border-radius: 6px;
    margin-top: 10px;
    font-family: "Fira Code", monospace;
}
.btn-row {
    margin-top: 10px;
}
.btn {
   
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
.btn.secondary {
    background: #475569;
}
.note {
    background: #39300cff;
    color: #a13b00ff;
    padding: 10px;
    border-left: 4px solid #6b4c17ff;
    border-radius: 6px;
    margin-top: 15px;
}
.diagram img {
    max-width: 100%;
    height: auto;
}
</style>
<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.pointer-refer') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.class-obj') }}'">Next =&gt;</button>
    </div>
@endsection
