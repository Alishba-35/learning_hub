@extends('layouts.cpp_app')

@section('title', 'C++ Inheritance and Types')

@section('content')

<header>
    <div class="container">
        <h1>C++ Inheritance & Types</h1>
        <p class="lead">
            Learn about inheritance in C++, why it is important, and explore different types with real-life examples and outputs.
        </p>
         <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px;">
          <iframe width="650" height="325" src="https://www.youtube.com/embed/7ZfEp71tIec?si=K_yXHDlxaj-r51rM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</header>

<main class="container">
    <div class="grid">

        <!-- What is Inheritance -->
        <section class="card">
            <h2>What is Inheritance?</h2>
            <p>
                <strong>Inheritance</strong> is an important feature of Object-Oriented Programming (OOP).  
                It allows a <strong>derived class</strong> (child) to acquire properties and behaviors from a 
                <strong>base class</strong> (parent).
            </p>
            <p>
                It helps in:
            </p>
            <ul>
                <li><strong>Code Reusability</strong> – Write common code once and reuse it.</li>
                <li><strong>Better Maintainability</strong> – Easy to maintain and update.</li>
                <li><strong>Logical Structure</strong> – Represents real-world relationships like <em>Car is a Vehicle</em>.</li>
            </ul>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Vehicle {
public:
    void start() {
        cout &lt;&lt; "Vehicle started" &lt;&lt; endl;
    }
};

class Car : public Vehicle {
public:
    void drive() {
        cout &lt;&lt; "Car is driving" &lt;&lt; endl;
    }
};

int main() {
    Car myCar;
    myCar.start();  // Inherited from Vehicle
    myCar.drive();  // Defined in Car
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Vehicle started\nCar is driving', 'output-intro')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-intro')">Clear</button>
            </div>
            <div class="out" id="output-intro"></div>
        </section>

        <!-- Types of Inheritance -->
        <section class="card">
            <h2>Types of Inheritance</h2>
            <p>
                There are <strong>five main types of inheritance</strong> in C++:
            </p>
            <ul>
                <li>Single Inheritance</li>
                <li>Multiple Inheritance</li>
                <li>Multilevel Inheritance</li>
                <li>Hierarchical Inheritance</li>
                <li>Hybrid Inheritance</li>
            </ul>
        </section>

        <!-- Single Inheritance -->
        <section class="card">
            <h2>1. Single Inheritance</h2>
            <p>
                A derived class inherits from a <strong>single base class</strong>.  
                <em>Example:</em> A <strong>Car</strong> inherits features from a <strong>Vehicle</strong>.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Vehicle {
public:
    void start() {
        cout &lt;&lt; "Vehicle started" &lt;&lt; endl;
    }
};

class Car : public Vehicle {
public:
    void drive() {
        cout &lt;&lt; "Car is driving" &lt;&lt; endl;
    }
};

int main() {
    Car myCar;
    myCar.start(); // Inherited method
    myCar.drive(); // Derived class method
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Vehicle started\nCar is driving', 'output-single')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-single')">Clear</button>
            </div>
            <div class="out" id="output-single"></div>
            <div class="text-center">
   
    
    <img src="{{ asset('images/single.png') }}" alt="single" class="content-image">
  </div>
        </section>

        <!-- Multiple Inheritance -->
        <section class="card">
            <h2>2. Multiple Inheritance</h2>
            <p>
                A derived class inherits from <strong>more than one base class</strong>.
            </p>
            <p>
                <em>Example:</em> A <strong>FlyingCar</strong> inherits from both <strong>Car</strong> and <strong>Airplane</strong>.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Car {
public:
    void drive() {
        cout &lt;&lt; "Driving on road" &lt;&lt; endl;
    }
};

class Airplane {
public:
    void fly() {
        cout &lt;&lt; "Flying in the air" &lt;&lt; endl;
    }
};

class FlyingCar : public Car, public Airplane {
public:
    void transform() {
        cout &lt;&lt; "Transforming between car and airplane mode" &lt;&lt; endl;
    }
};

int main() {
    FlyingCar myFlyingCar;
    myFlyingCar.drive();
    myFlyingCar.fly();
    myFlyingCar.transform();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Driving on road\nFlying in the air\nTransforming between car and airplane mode', 'output-multiple')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-multiple')">Clear</button>
            </div>
            <div class="out" id="output-multiple"></div>
            <div class="text-center">
   
    
    <img src="{{ asset('images/multi.png') }}" alt="oop principle" class="content-image">
  </div>
        </section>

        <!-- Multilevel Inheritance -->
        <section class="card">
            <h2>3. Multilevel Inheritance</h2>
            <p>
                A derived class inherits from another derived class, forming a <strong>chain-like hierarchy</strong>.  
                <em>Example:</em> SportsCar → Car → Vehicle
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Vehicle {
public:
    void start() {
        cout &lt;&lt; "Vehicle started" &lt;&lt; endl;
    }
};

class Car : public Vehicle {
public:
    void honk() {
        cout &lt;&lt; "Car horn!" &lt;&lt; endl;
    }
};

class SportsCar : public Car {
public:
    void turboBoost() {
        cout &lt;&lt; "Turbo Boost Activated!" &lt;&lt; endl;
    }
};

int main() {
    SportsCar myCar;
    myCar.start();
    myCar.honk();
    myCar.turboBoost();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Vehicle started\nCar horn!\nTurbo Boost Activated!', 'output-multilevel')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-multilevel')">Clear</button>
            </div>
            <div class="out" id="output-multilevel"></div>
            <div class="text-center">
   
    
    <img src="{{ asset('images/multilevel.png') }}" alt="multilevel" class="content-image">
  </div>
        </section>

        <!-- Hierarchical Inheritance -->
        <section class="card">
            <h2>4. Hierarchical Inheritance</h2>
            <p>
                In this type, <strong>multiple derived classes inherit from the same base class</strong>.  
                <em>Example:</em> Both Car and Bike inherit from Vehicle.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class Vehicle {
public:
    void start() {
        cout &lt;&lt; "Vehicle started" &lt;&lt; endl;
    }
};

class Car : public Vehicle {
public:
    void drive() {
        cout &lt;&lt; "Car is driving" &lt;&lt; endl;
    }
};

class Bike : public Vehicle {
public:
    void ride() {
        cout &lt;&lt; "Bike is riding" &lt;&lt; endl;
    }
};

int main() {
    Car myCar;
    Bike myBike;
    myCar.start();
    myCar.drive();
    myBike.start();
    myBike.ride();
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Vehicle started\nCar is driving\nVehicle started\nBike is riding', 'output-hierarchical')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-hierarchical')">Clear</button>
            </div>
            <div class="out" id="output-hierarchical"></div>
            <div class="text-center">
   
    
    <img src="{{ asset('images/hier.png') }}" alt="oop principle" class="content-image">
  </div>
        </section>

        <!-- Hybrid Inheritance -->
        <section class="card">
            <h2>5. Hybrid Inheritance</h2>
            <p>
                A combination of two or more inheritance types.  
                It may cause the <strong>Diamond Problem</strong>, which can be solved using <code>virtual</code> inheritance.
            </p>
            <div class="code">
<pre>
#include &lt;iostream&gt;
using namespace std;

class A {
public:
    void display() {
        cout &lt;&lt; "Class A" &lt;&lt; endl;
    }
};

class B : virtual public A {};
class C : virtual public A {};

class D : public B, public C {};

int main() {
    D obj;
    obj.display(); // No ambiguity due to virtual inheritance
    return 0;
}
</pre>
            </div>
            <div class="btn-row">
                <button class="btn" onclick="showOutput('Class A', 'output-hybrid')">Run Demo</button>
                <button class="btn secondary" onclick="clearOut('output-hybrid')">Clear</button>
            </div>
            <div class="out" id="output-hybrid"></div>
            <div class="text-center">
   
    
    <img src="{{ asset('images/hybrid.png') }}" alt="oop principle" class="content-image">
  </div>
        </section>

        <!-- Summary Table -->
        <section class="card">
            <h2>Summary Table</h2>
            <table class="comparison">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Single</td>
                        <td>One derived class from one base class.</td>
                        <td>Car → Vehicle</td>
                    </tr>
                    <tr>
                        <td>Multiple</td>
                        <td>One derived class from multiple base classes.</td>
                        <td>FlyingCar → Car + Airplane</td>
                    </tr>
                    <tr>
                        <td>Multilevel</td>
                        <td>Chain-like inheritance relationship.</td>
                        <td>SportsCar → Car → Vehicle</td>
                    </tr>
                    <tr>
                        <td>Hierarchical</td>
                        <td>Multiple derived classes from one base class.</td>
                        <td>Car, Bike → Vehicle</td>
                    </tr>
                    <tr>
                        <td>Hybrid</td>
                        <td>Combination of two or more inheritance types.</td>
                        <td>Diamond structure example</td>
                    </tr>
                </tbody>
            </table>
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

<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.encap-abstract') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.poly') }}'">Next =&gt;</button>
    </div>
@endsection
