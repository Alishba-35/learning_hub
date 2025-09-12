@extends('layouts.cpp_app')

@section('title', 'Functions in C++')

@section('content')

<header>
    <div class="container">
        <h1>C++ Functions</h1>
        <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px;">
           <iframe width="650" height="335" src="https://www.youtube.com/embed/RFLFX1boGwo?si=40_y0FFUfIRYFa4E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p class="lead">
            Functions help organize code into smaller reusable blocks. Click <strong>Run demo</strong> to see output.
        </p>
    </div>
</header>

<main class="container">
    <div class="grid">

        <!-- What are Functions -->
        <section class="card">
            <h2>Introduction to Functions</h2>
            <div class="sub">
                Functions are reusable blocks of code that perform specific tasks. They improve readability, reusability,
                and maintainability.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

void sayHello() {
    cout &lt;&lt; "Hello, World!";
}

int main() {
    sayHello(); // Calling the function
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Hello, World!', 'output-intro')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-intro')">Clear</button>
            </div>
            <div class="out" id="output-intro"></div>
        </section>

        <!-- Pass by Value -->
        <section class="card">
            <h2>Pass by Value</h2>
            <div class="sub">
                A copy of the variable is passed to the function. Changes do not affect the original variable.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

void changeValue(int x) {
    x = 100;
}

int main() {
    int num = 50;
    changeValue(num);
    cout &lt;&lt; num; // Output: 50
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('50', 'output-value')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-value')">Clear</button>
            </div>
            <div class="out" id="output-value"></div>
        </section>

        <!-- Pass by Reference -->
        <section class="card">
            <h2>Pass by Reference</h2>
            <div class="sub">
                The actual variable memory address is passed. Changes inside the function affect the original variable.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

void changeValue(int &amp;x) {
    x = 100;
}

int main() {
    int num = 50;
    changeValue(num);
    cout &lt;&lt; num; // Output: 100
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('100', 'output-reference')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-reference')">Clear</button>
            </div>
            <div class="out" id="output-reference"></div>
        </section>

        <!-- Function Overloading -->
        <section class="card">
            <h2>Function Overloading</h2>
            <div class="sub">
                Functions can have the same name but different parameter types.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int add(int a, int b) {
    return a + b;
}

double add(double a, double b) {
    return a + b;
}

int main() {
    cout &lt;&lt; add(5, 3) &lt;&lt; endl;
    cout &lt;&lt; add(2.5, 3.5);
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('8\n6.0', 'output-overload')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-overload')">Clear</button>
            </div>
            <div class="out" id="output-overload"></div>
        </section>

        <!-- Recursive Function -->
        <section class="card">
            <h2>Recursive Function</h2>
            <div class="sub">
                A recursive function calls itself until a base condition is met.
            </div>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

int factorial(int n) {
    if (n == 0) return 1;
    return n * factorial(n - 1);
}

int main() {
    cout &lt;&lt; factorial(5); // Output: 120
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('120', 'output-recursion')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-recursion')">Clear</button>
            </div>
            <div class="out" id="output-recursion"></div>
        </section>
    </div>

    <div class="text-center mt-5">
        <h3>Summary of Functions</h3>
        <p>Functions make code modular, reusable, and easy to maintain.</p>
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


<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.array') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.pointer-refer') }}'">Next =&gt;</button>
    </div>
@endsection
