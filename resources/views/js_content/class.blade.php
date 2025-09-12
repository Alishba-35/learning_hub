@extends('layouts.appjs')

@section('title', 'class')

@section('content')
   


    <!-- Page content -->



<div class="container " style=" justify-content: center;">
  <h1>Classes and Objects in JavaScript</h1>
  <p>
    In JavaScript, classes and objects are essential concepts for building structured, reusable, and organized code. 
    Objects represent real-world entities, while classes act as blueprints for creating those objects. 
    Let's explore them step by step with examples.
  </p>
  <div class="container" style="display: flex; justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N-O4w6PynGY?si=4OZY_MMmgBmfhRDN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
  <!-- 1. What is an Object -->
  <h2>1. What is an Object?</h2>
  <p>
    An <strong>object</strong> in JavaScript is a collection of key-value pairs that store related data and functions (methods) together.
  </p>
  <pre><code>
const student = {
  name: "Ali",
  age: 20,
  course: "JavaScript",
  greet: function() {
    console.log(`Hello, my name is ${this.name} and I am learning ${this.course}`);
  }
};

console.log(student.name); // Output: Ali
student.greet(); // Output: Hello, my name is Ali and I am learning JavaScript
  </code></pre>

  <ul>
    <li><strong>Properties:</strong> Variables inside the object (e.g., <code>name</code>, <code>age</code>).</li>
    <li><strong>Methods:</strong> Functions inside the object (e.g., <code>greet()</code>).</li>
    <li><strong>this:</strong> Refers to the current object.</li>
  </ul>

  <!-- 2. What is a Class -->
  <h2>2. What is a Class?</h2>
  <p>
    A <strong>class</strong> is like a blueprint for creating objects. It defines how an object should look and behave,
    but it doesn't hold data itself. Classes were introduced in <strong>ES6</strong> for easier object-oriented programming.
  </p>

  <pre><code>
class ClassName {
  constructor() {
    // Initialize properties
  }

  methodName() {
    // Define methods
  }
}
  </code></pre>

  <!-- 3. Creating a Class and Object -->
  <h2>3. Creating a Class and Object</h2>
  <p>Let's create a <code>Student</code> class and make objects from it.</p>
  <pre><code>
class Student {
  constructor(name, age, course) {
    this.name = name;
    this.age = age;
    this.course = course;
  }

  greet() {
    console.log(`Hello, my name is ${this.name} and I am learning ${this.course}`);
  }
}

// Creating Objects
const student1 = new Student("Ali", 20, "JavaScript");
const student2 = new Student("Sara", 22, "Python");

student1.greet();
student2.greet();
  </code></pre>
<div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/object.png') }}" alt="object" class="content-image">
    </div>
  <!-- 4. Difference Between Class and Object -->
  <h2>4. Difference Between Class and Object</h2>
  <table>
    <thead>
      <tr>
        <th>Feature</th>
        <th>Class</th>
        <th>Object</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Definition</td>
        <td>A blueprint/template for creating objects</td>
        <td>A real instance created from a class</td>
      </tr>
      <tr>
        <td>Purpose</td>
        <td>Defines properties and methods</td>
        <td>Stores actual data and behavior</td>
      </tr>
      <tr>
        <td>Example</td>
        <td><code>class Student {}</code></td>
        <td><code>const s1 = new Student("Ali", 20)</code></td>
      </tr>
      <tr>
        <td>Memory Usage</td>
        <td>Does not take memory until instantiated</td>
        <td>Takes memory because it stores actual values</td>
      </tr>
    </tbody>
  </table>

  <!-- 5. Adding Methods -->
  <h2>5. Adding Methods in a Class</h2>
  <p>
    Methods are functions defined inside a class. There are two types: 
    <strong>Instance Methods</strong> and <strong>Static Methods</strong>.
  </p>

  <h3>a) Instance Method</h3>
  <pre><code>
class Student {
  constructor(name) {
    this.name = name;
  }

  greet() {
    console.log(`Hello, ${this.name}`);
  }
}

const student = new Student("Ali");
student.greet();
  </code></pre>

  <h3>b) Static Method</h3>
  <p>
    Static methods belong to the class itself, not to individual objects.
  </p>
  <pre><code>
class MathHelper {
  static add(a, b) {
    return a + b;
  }
}

console.log(MathHelper.add(5, 3)); // Output: 8
  </code></pre>

  <!-- 6. Inheritance -->
  <h2>6. Inheritance in Classes</h2>
  <p>
    Inheritance allows a class to reuse properties and methods from another class using the 
    <code>extends</code> keyword.
  </p>
  <pre><code>
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hi, I'm ${this.name} and I am ${this.age} years old.`);
  }
}

class Student extends Person {
  constructor(name, age, course) {
    super(name, age); // Call parent constructor
    this.course = course;
  }

  study() {
    console.log(`${this.name} is studying ${this.course}`);
  }
}

const student = new Student("Sara", 22, "Python");
student.greet();
student.study();
  </code></pre>
  <div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/inheritance.png') }}" alt="object" class="content-image">
    </div>

  <!-- 7. Encapsulation -->
  <h2>7. Encapsulation (Private Properties)</h2>
  <p>
    JavaScript allows private properties using the <code>#</code> symbol. 
    These properties cannot be accessed directly outside the class.
  </p>
  <pre><code>
class BankAccount {
  #balance = 0; // Private variable

  deposit(amount) {
    this.#balance += amount;
    console.log(`Deposited: $${amount}`);
  }

  getBalance() {
    return this.#balance;
  }
}

const account = new BankAccount();
account.deposit(500); // Deposited: $500
console.log(account.getBalance()); // 500
// console.log(account.#balance); ❌ Error: Private field cannot be accessed
  </code></pre>
<div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/encap.png') }}" alt="encapsulatiion" class="content-image">
    </div>
  <!-- 8. Real Life Example -->
  <h2>8. Real-Life Example: Car Class</h2>
  <pre><code>
class Car {
  constructor(brand, model, year) {
    this.brand = brand;
    this.model = model;
    this.year = year;
  }

  start() {
    console.log(`${this.brand} ${this.model} is starting...`);
  }

  stop() {
    console.log(`${this.brand} ${this.model} has stopped.`);
  }
}

const car1 = new Car("Toyota", "Corolla", 2022);
car1.start();
car1.stop();
  </code></pre>
<div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/car.png') }}" alt="car" class="content-image">
    </div>
  <!-- 9. Summary Table -->
  <h2>9. Summary</h2>
  <table>
    <thead>
      <tr>
        <th>Concept</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Class</td>
        <td>A blueprint/template for creating objects</td>
      </tr>
      <tr>
        <td>Object</td>
        <td>A real instance created from a class</td>
      </tr>
      <tr>
        <td>Constructor</td>
        <td>Special method to initialize object data</td>
      </tr>
      <tr>
        <td>Method</td>
        <td>Function defined inside a class</td>
      </tr>
      <tr>
        <td>Static Method</td>
        <td>Belongs to the class itself, not the object</td>
      </tr>
      <tr>
        <td>Inheritance</td>
        <td>One class inherits properties and methods of another</td>
      </tr>
      <tr>
        <td>Encapsulation</td>
        <td>Hiding internal data using private fields</td>
      </tr>
    </tbody>
  </table>

  <!-- 10. Final Example -->
  <h2>10. Final Code Example</h2>
  <p>This example shows everything combined.</p>
  <pre><code>
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hello, I'm ${this.name}, and I'm ${this.age} years old.`);
  }
}

class Student extends Person {
  constructor(name, age, course) {
    super(name, age);
    this.course = course;
  }

  study() {
    console.log(`${this.name} is studying ${this.course}.`);
  }

  static welcome() {
    console.log("Welcome to the Student Management System!");
  }
}

// Using the classes
Student.welcome();

const student1 = new Student("Ali", 20, "JavaScript");
student1.greet();
student1.study();
  </code></pre>
<div class="text-center">
      <!-- <h5>Window Object</h5> -->
      <img style="height:40%" src="{{ asset('images/exampleclass.png') }}" alt="class" class="content-image">
    </div>
  <!-- Why Use Classes -->
  <h2>11. Why Use Classes?</h2>
  <ul>
    <li><strong>Organized Code:</strong> Keeps related data and functions together.</li>
    <li><strong>Reusability:</strong> Create multiple objects from one blueprint.</li>
    <li><strong>Inheritance:</strong> Avoid rewriting similar code.</li>
    <li><strong>Clean Structure:</strong> Easier to maintain and debug.</li>
    <li><strong>Scalable Apps:</strong> Helps in building large, complex projects.</li>
  </ul>
</div>






  

 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.event') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.callback') }}'">
  Next =&gt;
</button>

  



    <!-- Custom JS -->
    <script src="{{asset('js/class.js')}}"></script>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection