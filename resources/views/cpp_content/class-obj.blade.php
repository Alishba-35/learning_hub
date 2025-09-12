@extends('layouts.cpp_app')

@section('title', 'OOP in C++ - Classes, Objects, Constructors, and Destructors')

@section('content')

<header>
    <div class="container">
        <div class="card">
        <h1>Object-Oriented Programming (OOP) in C++</h1>
        <p class="lead">A complete guide to understanding OOP concepts, classes, objects, constructors, destructors, and more with examples.</p>
 
     <div class="text-center my-3">
        <h3>OOP in one shot</h3>
      <iframe width="650" height="325" src="https://www.youtube.com/embed/mlIUKyZIUUU?si=D5THailY5b8V4c-u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   </div>
    </div></div>
</header>

<main class="container">
    <div class="grid">

        <!-- Section 1: OOP Introduction -->
        <section class="card">
            <h2>What is OOP?</h2>
            <p>
                Object-Oriented Programming (OOP) is a paradigm that models real-world entities using <strong>classes</strong> and <strong>objects</strong>.
                It helps to build modular, reusable, and maintainable code.
            </p>

            <h3>Four Pillars of OOP:</h3>
            <ul>
                <li><strong>Encapsulation:</strong> Binding data and functions into one unit (class).</li>
                <li><strong>Abstraction:</strong> Hiding unnecessary implementation details.</li>
                <li><strong>Inheritance:</strong> Reusing properties and behaviors from an existing class.</li>
                <li><strong>Polymorphism:</strong> Functions or methods behaving differently based on context.</li>
            </ul>

            <p>Example from real life: A <strong>Car</strong> has properties like <em>brand</em>, <em>speed</em>, and actions like <em>drive</em> and <em>brake</em>. This matches exactly how a class works in C++.</p>
        </section>
<div class="text-center">
   
    
    <img src="{{ asset('images/oop-principle.png') }}" alt="oop principle" class="content-image">
  </div>
        <!-- Section 2: Classes and Objects -->
        <section class="card">
            <h2>Classes and Objects</h2>
            <p>
                A <strong>class</strong> is a blueprint that defines properties (data members) and actions (methods).
                An <strong>object</strong> is a real instance of a class.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Car {
public:
    string brand;
    int speed;

    void showDetails() {
        cout &lt;&lt; "Brand: " &lt;&lt; brand &lt;&lt; endl;
        cout &lt;&lt; "Speed: " &lt;&lt; speed &lt;&lt; " km/h" &lt;&lt; endl;
    }
};

int main() {
    Car car1;
    car1.brand = "BMW";
    car1.speed = 200;

    Car car2;
    car2.brand = "Audi";
    car2.speed = 220;

    car1.showDetails();
    car2.showDetails();

    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Brand: BMW\nSpeed: 200 km/h\nBrand: Audi\nSpeed: 220 km/h', 'output-class')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-class')">Clear</button>
            </div>
            <div class="out" id="output-class"></div>
        </section>

        <!-- Section 3: Access Specifiers -->
        <section class="card">
            <h2>Access Specifiers</h2>
            <p>
                Access specifiers define how class members are accessed from outside the class.
            </p>
            <ul>
                <li><code>public</code>: Accessible from anywhere.</li>
                <li><code>private</code>: Accessible only inside the class.</li>
                <li><code>protected</code>: Accessible in the class and its derived classes.</li>
            </ul>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Student {
private:
    int age;

public:
    string name;

    void setAge(int a) {
        age = a;
    }

    void display() {
        cout &lt;&lt; "Name: " &lt;&lt; name &lt;&lt; ", Age: " &lt;&lt; age &lt;&lt; endl;
    }
};

int main() {
    Student s;
    s.name = "John";
    s.setAge(20);
    s.display();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Name: John, Age: 20', 'output-access')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-access')">Clear</button>
            </div>
            <div class="out" id="output-access"></div>
        </section>
<div class="text-center">
   
    
    <img src="{{ asset('images/specifiers.png') }}" alt="access specifiers" class="content-image">
  </div>
        <!-- Section 4: Constructors -->
        <section class="card">
            <h2>Constructors</h2>
            <p>
                A <strong>constructor</strong> is a special method that automatically runs when an object is created.
                It is used to initialize data members.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Student {
public:
    string name;
    int age;

    // Constructor
    Student(string n, int a) {
        name = n;
        age = a;
    }

    void display() {
        cout &lt;&lt; "Name: " &lt;&lt; name &lt;&lt; ", Age: " &lt;&lt; age &lt;&lt; endl;
    }
};

int main() {
    Student s1("John", 20);
    s1.display();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Name: John, Age: 20', 'output-constructor')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-constructor')">Clear</button>
            </div>
            <div class="out" id="output-constructor"></div>
        </section>

        <!-- Section 5: Destructor -->
        <section class="card">
            <h2>Destructors</h2>
            <p>
                A <strong>destructor</strong> is automatically called when an object goes out of scope.
                It is used for cleanup, like releasing memory or closing files.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Test {
public:
    Test() {
        cout &lt;&lt; "Constructor called!" &lt;&lt; endl;
    }
    ~Test() {
        cout &lt;&lt; "Destructor called!" &lt;&lt; endl;
    }
};

int main() {
    Test obj;
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Constructor called!\nDestructor called!', 'output-destructor')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-destructor')">Clear</button>
            </div>
            <div class="out" id="output-destructor"></div>
        </section>

        <!-- Section 6: Nested Classes -->
        <section class="card">
            <h2>Nested Classes</h2>
            <p>
                C++ allows a class to be defined inside another class. This is useful for grouping related classes together.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Outer {
public:
    class Inner {
    public:
        void display() {
            cout &lt;&lt; "Hello from Inner class!" &lt;&lt; endl;
        }
    };
};

int main() {
    Outer::Inner obj;
    obj.display();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Hello from Inner class!', 'output-nested')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-nested')">Clear</button>
            </div>
            <div class="out" id="output-nested"></div>
        </section>

        <!-- Section 7: Polymorphism -->
        <section class="card">
            <h2>Polymorphism (Method Overriding)</h2>
            <p>
                Polymorphism allows methods to have the same name but behave differently in different contexts.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Animal {
public:
    virtual void sound() {
        cout &lt;&lt; "Animal makes a sound" &lt;&lt; endl;
    }
};

class Dog : public Animal {
public:
    void sound() override {
        cout &lt;&lt; "Dog barks" &lt;&lt; endl;
    }
};

int main() {
    Animal* a;
    Dog d;
    a = &d;
    a->sound(); // Output will be "Dog barks"
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Dog barks', 'output-poly')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-poly')">Clear</button>
            </div>
            <div class="out" id="output-poly"></div>
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
/* Layout Styling */

.grid {
    display: grid;
    gap: 20px;
}



/* Code Block Styling */
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

/* Output Box Styling */
.out {
    background: #0f172a;
    color: #f8fafc;
    padding: 10px;
    border-radius: 6px;
    margin-top: 10px;
    font-family: "Fira Code", monospace;
}

/* Button Styling */
.btn-row {
    margin-top: 10px;
}

.btn.secondary {
    background: #475569;
}
.btn.secondary:hover {
    background: #334155;
}
</style>
<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.static-dynamic') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.encap-abstract') }}'">Next =&gt;</button>
    </div>
@endsection
