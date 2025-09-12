@extends('layouts.cpp_app')

@section('title', 'C++ Data Types and Variables')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">C++ Data Types and Variables</h1>

    <!-- Introduction -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Introduction</h2>
             <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/zgutFVxOlTY?si=NgIryZa9J4WR7BcF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
        </div>
        <div class="card-body">
            <p>
                In C++, a <strong>data type</strong> defines the type of data that a variable can store, 
                the amount of memory allocated for it, and the operations that can be performed on it.
            </p>
            <p>
                Think of data types as containers:
                <ul>
                    <li>A cup for <code>float</code> (decimal numbers)</li>
                    <li>A bottle for <code>int</code> (whole numbers)</li>
                    <li>A jar for <code>string</code> (text)</li>
                </ul>
            </p>
            <p>
                C++ has three main categories of data types:
            </p>
            <ul>
                <li><strong>Primitive (Basic):</strong> Core built-in types like <code>int</code>, <code>float</code>, <code>char</code>.</li>
                <li><strong>Derived:</strong> Built using basic data types, e.g., Arrays, Pointers, Functions.</li>
                <li><strong>User-defined:</strong> Created by programmers, e.g., Classes, Structures, Enums.</li>
            </ul>
        </div>
    </div>

    <!-- Primitive Data Types Table -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Primitive Data Types</h2>
        </div>
        <div class="card-body">
            <p>These are the most commonly used data types in C++:</p>
            <table >
                <thead>
                    <tr>
                        <th>Data Type</th>
                        <th>Size (Typical)</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>int</code></td>
                        <td>4 bytes</td>
                        <td><code>int age = 25;</code></td>
                        <td>Stores whole numbers</td>
                    </tr>
                    <tr>
                        <td><code>float</code></td>
                        <td>4 bytes</td>
                        <td><code>float pi = 3.14;</code></td>
                        <td>Stores decimal numbers with ~6-7 digits precision</td>
                    </tr>
                    <tr>
                        <td><code>double</code></td>
                        <td>8 bytes</td>
                        <td><code>double salary = 55000.75;</code></td>
                        <td>Stores decimal numbers with high precision (~15 digits)</td>
                    </tr>
                    <tr>
                        <td><code>char</code></td>
                        <td>1 byte</td>
                        <td><code>char grade = 'A';</code></td>
                        <td>Stores a single character using ASCII values</td>
                    </tr>
                    <tr>
                        <td><code>bool</code></td>
                        <td>1 byte</td>
                        <td><code>bool isStudent = true;</code></td>
                        <td>Stores <code>true</code> (1) or <code>false</code> (0)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Derived and User-Defined Data Types -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Derived & User-Defined Data Types</h2>
        </div>
        <div class="card-body">
            <h4>Derived Data Types</h4>
            <ul>
                <li><strong>Array:</strong> <code>int marks[5] = {90, 85, 88, 92, 79};</code></li>
                <li><strong>Pointer:</strong> <code>int x = 10; int* ptr = &x;</code></li>
                <li><strong>Reference:</strong> <code>int num = 5; int &ref = num;</code></li>
                <li><strong>Function:</strong> <code>int add(int a, int b) { return a + b; }</code></li>
            </ul>

            <h4>User-Defined Data Types</h4>
            <ul>
                <li><strong>Structure (struct):</strong> Groups different data types together
                    <pre><code>struct Student {
    string name;
    int age;
    char grade;
};</code></pre>
                </li>
                <li><strong>Class (class):</strong> Encapsulates data and functions
                    <pre><code>class Car {
public:
    string brand;
    void start() {
        cout &lt;&lt; "Car started!";
    }
};</code></pre>
                </li>
                <li><strong>Enumeration (enum):</strong> Represents named constants
                    <pre><code>enum Week { Monday, Tuesday, Wednesday };</code></pre>
                </li>
            </ul>
        </div>
    </div>

    <!-- Variables Section -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Variables in C++</h2>
        </div>
        <div class="card-body">
            <p>
                A <strong>variable</strong> is a named location in memory used to store data. 
                Its value can change during program execution.
            </p>
            <h4>Syntax:</h4>
            <pre><code>datatype variable_name = value;</code></pre>

            <h5>Example:</h5>
            <pre><code>int age = 20;
float pi = 3.14;
char grade = 'A';
bool isStudent = true;</code></pre>

            <h4>Variable Declaration & Initialization</h4>
            <table >
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Declaration Only</td>
                        <td><code>int x;</code></td>
                    </tr>
                    <tr>
                        <td>Initialization Only</td>
                        <td><code>x = 10;</code></td>
                    </tr>
                    <tr>
                        <td>Declaration + Initialization</td>
                        <td><code>int x = 10;</code></td>
                    </tr>
                </tbody>
            </table>

            <h4>Rules for Naming Variables</h4>
            <ul>
                <li>Must start with a letter or underscore (<code>_</code>).</li>
                <li>Can contain letters, digits, and underscores.</li>
                <li>Case-sensitive (<code>Age</code> and <code>age</code> are different).</li>
                <li>Cannot use reserved C++ keywords like <code>int</code>, <code>class</code>, etc.</li>
            </ul>
        </div>
    </div>

    <!-- Live Code Example -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Live Code Example</h2>
        </div>
        <div class="card-body">
            <pre><code>#include &lt;iostream&gt;
using namespace std;

int main() {
    int age = 20;
    float pi = 3.14;
    char grade = 'A';
    bool isStudent = true;
    double salary = 55000.75;

    cout &lt;&lt; "Age: " &lt;&lt; age &lt;&lt; endl;
    cout &lt;&lt; "Pi: " &lt;&lt; pi &lt;&lt; endl;
    cout &lt;&lt; "Grade: " &lt;&lt; grade &lt;&lt; endl;
    cout &lt;&lt; "Is Student: " &lt;&lt; isStudent &lt;&lt; endl;
    cout &lt;&lt; "Salary: " &lt;&lt; salary &lt;&lt; endl;

    return 0;
}</code></pre>

            <h4>Output:</h4>
            <pre><code>Age: 20
Pi: 3.14
Grade: A
Is Student: 1
Salary: 55000.75</code></pre>
        </div>
    </div>

    <!-- Memory Size Example -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Checking Memory Size with sizeof</h2>
        </div>
        <div class="card-body">
            <pre><code>#include &lt;iostream&gt;
using namespace std;

int main() {
    cout &lt;&lt; "Size of int: " &lt;&lt; sizeof(int) &lt;&lt; " bytes" &lt;&lt; endl;
    cout &lt;&lt; "Size of float: " &lt;&lt; sizeof(float) &lt;&lt; " bytes" &lt;&lt; endl;
    cout &lt;&lt; "Size of double: " &lt;&lt; sizeof(double) &lt;&lt; " bytes" &lt;&lt; endl;
    cout &lt;&lt; "Size of char: " &lt;&lt; sizeof(char) &lt;&lt; " byte" &lt;&lt; endl;
    cout &lt;&lt; "Size of bool: " &lt;&lt; sizeof(bool) &lt;&lt; " byte" &lt;&lt; endl;

    return 0;
}</code></pre>

            <h4>Sample Output:</h4>
            <pre><code>Size of int: 4 bytes
Size of float: 4 bytes
Size of double: 8 bytes
Size of char: 1 byte
Size of bool: 1 byte</code></pre>
        </div>
    </div>

    <!-- Summary -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Summary</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Data Types</strong> define what kind of data a variable can store.</li>
                <li><strong>Variables</strong> are named memory locations whose values can change during program execution.</li>
                <li>The <code>sizeof</code> operator helps determine memory usage of data types.</li>
                <li>Use the correct data type to optimize memory and improve program efficiency.</li>
            </ul>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.intro') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.oper-cond') }}'">Next =&gt;</button>
    </div>
</div>
@endsection
