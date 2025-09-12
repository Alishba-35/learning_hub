@extends('layouts.cpp_app')

@section('title', 'Friend Function & Friend Class in C++')

@section('content')

<header>
    <div class="container">
        <h1>Friend Function & Friend Class in C++</h1>
        <p class="lead">
            In C++, <strong>friend functions</strong> and <strong>friend classes</strong> allow selective access to private and protected members of a class, enabling controlled flexibility while maintaining encapsulation.
        </p>
        <iframe width="650" height="325" src="https://www.youtube.com/embed/lcrZvDoYaj8?si=6eF6QqChXZXxE22E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</header>

<main class="container">
    <div class="grid">

        <!-- Friend Function -->
        <section class="card">
            <h2>Friend Function</h2>
            <p>
                A <strong>friend function</strong> is a non-member function that can access the private and protected members of a class. It is declared inside the class using the <code>friend</code> keyword.
            </p>

            <h3>Key Points:</h3>
            <ul>
                <li>It is not a member of the class.</li>
                <li>It has access to private and protected members.</li>
                <li>Friendship is one-way: the function can access the class members, but the class cannot access the function’s private members.</li>
                <li>Overuse can break encapsulation, so use only when necessary.</li>
            </ul>

            <h3>Example:</h3>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Box {
private:
    int length;
public:
    Box(int l) { length = l; }
    friend void printLength(Box b); // Friend function declaration
};

void printLength(Box b) {
    cout &lt;&lt; "Length of the box: " &lt;&lt; b.length &lt;&lt; endl;
}

int main() {
    Box b1(10);
    printLength(b1); // Access private member via friend function
    return 0;
}
</pre>
            </div>

            <div class="btn-row">
                <button class="btn" onclick="showOutput('Length of the box: 10', 'output-friend-function')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-friend-function')">Clear</button>
            </div>
            <div class="out" id="output-friend-function"></div>
        </section>

        <!-- Friend Class -->
        <section class="card">
            <h2>Friend Class</h2>
            <p>
                A <strong>friend class</strong> allows all member functions of another class to access its private and protected members.
            </p>

            <h3>Key Points:</h3>
            <ul>
                <li>All methods of the friend class can access private/protected members of the original class.</li>
                <li>Friendship is one-way; the original class members are accessible to the friend class, but not vice versa.</li>
                <li>Used when two classes are closely related and need mutual access to private data.</li>
            </ul>

            <h3>Example:</h3>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Box {
private:
    int width;
public:
    Box(int w) { width = w; }
    friend class Display; // Friend class declaration
};

class Display {
public:
    void show(Box b) {
        cout &lt;&lt; "Width of the box: " &lt;&lt; b.width &lt;&lt; endl;
    }
};

int main() {
    Box b1(15);
    Display d;
    d.show(b1); // Access private member via friend class
    return 0;
}
</pre>
            </div>

            <div class="btn-row">
                <button class="btn" onclick="showOutput('Width of the box: 15', 'output-friend-class')">Run demo</button>
                <button class="btn secondary" onclick="clearOut('output-friend-class')">Clear</button>
            </div>
            <div class="out" id="output-friend-class"></div>
        </section>

        <!-- Summary & Rules -->
        <section class="card">
            <h2>Rules and Important Notes</h2>
            <ul>
                <li>Friendship is <strong>not inherited</strong>: if class B is a friend of class A, derived classes of B are not automatically friends of A.</li>
                <li>Friend functions can be <strong>standalone functions</strong> or <strong>member functions of another class</strong>.</li>
                <li>Friend classes and functions <strong>cannot be called with dot operator</strong> like normal member functions unless they are member functions of another class.</li>
                <li>Use friendship to enable controlled access between related classes, without breaking encapsulation everywhere.</li>
            </ul>
        </section>

        <!-- When to Use Friend Functions and Classes -->
        <section class="card">
            <h2>When to Use</h2>
            <ul>
                <li>Two or more classes are tightly coupled and need access to each other’s private data.</li>
                <li>Helper functions that require access to class internals without being part of the class.</li>
                <li>Overloading operators that need access to private members.</li>
                <li>Implementing controlled access to internal members for performance or design purposes.</li>
            </ul>
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
        <button class="btn " onclick="window.location='{{ route('cpp_content.poly') }}'">&lt;= Previous</button>
        
    </div>

@endsection
