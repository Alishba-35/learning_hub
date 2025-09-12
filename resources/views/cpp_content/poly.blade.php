@extends('layouts.cpp_app')

@section('title', 'Polymorphism in C++')

@section('content')

<header>
    <div class="container">
        <h1 class="page-title">Polymorphism in Object-Oriented Programming (OOP)</h1>
        <p class="lead">
            Learn how polymorphism allows objects of different classes to be treated as a common type,
            making your C++ programs more flexible and maintainable.
        </p>
    </div>
     <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px;">
           <iframe width="650" height="325" src="https://www.youtube.com/embed/F5PbnZkHqmg?si=-mVNVt_umvHEalMP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
</header>

<main class="container">
    <div class="grid">

        <!-- Introduction Card -->
        <section class="card">
            <h2>Introduction to Polymorphism</h2>
            <p>
                <strong>Polymorphism</strong> is one of the fundamental concepts in Object-Oriented Programming (OOP).
                The term <em>polymorphism</em> comes from Greek, meaning <em>"many forms"</em>. 
                It allows a single interface to represent different underlying data types or classes.
            </p>
            <p>
                For example, a function named <code>draw()</code> may draw different shapes like
                <code>Circle</code> or <code>Rectangle</code> depending on which object calls it.
            </p>
        </section>

        <!-- Types of Polymorphism -->
        <section class="card">
            <h2>Types of Polymorphism</h2>
            <p>Polymorphism is mainly classified into two types:</p>
            <ol>
                <li><strong>Compile-time Polymorphism (Static Polymorphism)</strong></li>
                <li><strong>Run-time Polymorphism (Dynamic Polymorphism)</strong></li>
            </ol>
        </section>

        <!-- Compile-Time Polymorphism -->
        <section class="card">
            <h3>1. Compile-time Polymorphism</h3>
            <p>
                Resolved during compilation. Achieved through:
            </p>
            <ul>
                <li>Method Overloading</li>
                <li>Operator Overloading</li>
            </ul>

            <h4>Method Overloading</h4>
            <p>
                Multiple methods with the same name but different parameters.
                The compiler chooses which method to call based on arguments.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class MathOperations {
public:
    int add(int a, int b) {
        return a + b;
    }
    double add(double a, double b) {
        return a + b;
    }
    int add(int a, int b, int c) {
        return a + b + c;
    }
};

int main() {
    MathOperations obj;
    cout &lt;&lt; obj.add(5, 10) &lt;&lt; endl;
    cout &lt;&lt; obj.add(2.5, 3.5) &lt;&lt; endl;
    cout &lt;&lt; obj.add(1, 2, 3) &lt;&lt; endl;
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('15\\n6\\n6', 'output-overloading')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-overloading')">Clear</button>
            </div>
            <div class="out" id="output-overloading"></div>
        </section>

        <!-- Operator Overloading -->
        <section class="card">
            <h4>Operator Overloading</h4>
            <p>
                Operator overloading allows redefining operators for custom behavior.
                Example: Adding two complex numbers with the <code>+</code> operator.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Complex {
public:
    int real, imag;

    Complex(int r = 0, int i = 0) : real(r), imag(i) {}

    Complex operator + (const Complex &c) {
        return Complex(real + c.real, imag + c.imag);
    }
};

int main() {
    Complex c1(2, 3), c2(4, 5);
    Complex c3 = c1 + c2;
    cout &lt;&lt; c3.real &lt;&lt; " + " &lt;&lt; c3.imag &lt;&lt; "i" &lt;&lt; endl;
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('6 + 8i', 'output-operator')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-operator')">Clear</button>
            </div>
            <div class="out" id="output-operator"></div>
        </section>

        <!-- Run-Time Polymorphism -->
        <section class="card">
            <h3>2. Run-time Polymorphism</h3>
            <p>
                Resolved at runtime using virtual functions and function overriding.
            </p>
            <h4>Example: Virtual Functions</h4>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Animal {
public:
    virtual void sound() {
        cout &lt;&lt; "Animal sound" &lt;&lt; endl;
    }
};

class Dog : public Animal {
public:
    void sound() override {
        cout &lt;&lt; "Dog barks" &lt;&lt; endl;
    }
};

int main() {
    Animal* a = new Dog();
    a->sound(); // Runtime decision
    delete a;
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Dog barks', 'output-runtime')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-runtime')">Clear</button>
            </div>
            <div class="out" id="output-runtime"></div>
        </section>
<div class="text-center">
   
    
    <img src="{{ asset('images/poly.png') }}" alt="polymorphism" class="content-image">
  </div>
        <!-- Summary Table -->
        <section class="card">
            <h2>Summary Table</h2>
            <table class="summary-table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>How Achieved</th>
                        <th>When Resolved</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Compile-time Polymorphism</td>
                        <td>Method Overloading, Operator Overloading</td>
                        <td>Compile-time</td>
                        <td><code>add(int a, int b)</code>, <code>add(double a, double b)</code></td>
                    </tr>
                    <tr>
                        <td>Run-time Polymorphism</td>
                        <td>Method Overriding, Virtual Functions</td>
                        <td>Run-time</td>
                        <td>Derived class overrides base class method</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Conclusion -->
        <section class="card">
            <h2>Conclusion</h2>
            <p>
                Polymorphism is a cornerstone of OOP, allowing for flexible and scalable code design.
                By leveraging polymorphism, developers can build systems that are easier to extend and maintain.
            </p>
        </section>

    </div>
</main>

<script>
function showOutput(result, id) {
    document.getElementById(id).innerText = "Output:\\n" + result;
}
function clearOut(id) {
    document.getElementById(id).innerText = "";
}
</script>

<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.inheritance') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.friend') }}'">Next =&gt;</button>
    </div>

@endsection
