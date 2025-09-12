@extends('layouts.cpp_app')

@section('title', 'Introduction to C++ Programming')

@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">Introduction to C++ Programming</h1>

    <!-- INTRODUCTION -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>What is C++?</h2>
            <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/MNeX4EGtR5Y?si=batZByNr8h9Lz_iP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
        </div>
        <div class="card-body">
            <p>
                C++ is a <strong>general-purpose, object-oriented programming language</strong> developed by 
                <strong>Bjarne Stroustrup</strong> in <strong>1979</strong> as an extension of the C programming language.
                It combines the <strong>power of C (procedural programming)</strong> with <strong>object-oriented programming (OOP)</strong> features,
                making it highly versatile and powerful for building a wide range of applications.
            </p>
            <p>Common applications of C++ include:</p>
            <ul>
                <li>Operating Systems (e.g., Windows, macOS components)</li>
                <li>Game Engines (e.g., Unreal Engine)</li>
                <li>Web Browsers (e.g., Chrome, Firefox)</li>
                <li>Embedded Systems and IoT devices</li>
                <li>High-performance software like financial modeling tools</li>
            </ul>

            <h4>Key Features of C++</h4>
            <ul>
                <li><strong>Object-Oriented Programming:</strong> Supports classes, objects, inheritance, polymorphism, and encapsulation.</li>
                <li><strong>Portability:</strong> Write once, run anywhere with little modification.</li>
                <li><strong>Performance:</strong> Close to low-level hardware like C, but with modern features.</li>
                <li><strong>Standard Template Library (STL):</strong> Built-in templates for data structures and algorithms.</li>
                <li><strong>Multi-Paradigm:</strong> Supports procedural, object-oriented, and generic programming.</li>
            </ul>
        </div>
    </div>

    <!-- BASIC STRUCTURE -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Basic Structure of a C++ Program</h2>
        </div>
        <div class="card-body">
            <pre><code>#include &lt;iostream&gt;  // Header file for input and output
using namespace std; // Allows usage of standard names directly

int main() {         // Main function: starting point of execution
    cout &lt;&lt; "Hello, World!";  // Print text to the screen
    return 0;        // Indicate successful program termination
}
</code></pre>
        </div>
    </div>

    <!-- SYNTAX BREAKDOWN -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Understanding C++ Syntax and Its Components</h2>
        </div>
        <div class="card-body">
            <h4>1. Preprocessor Directive</h4>
            <p>
                <code>#include &lt;iostream&gt;</code><br>
                The <code>#include</code> directive tells the compiler to include a library before compilation. 
                The <code>&lt;iostream&gt;</code> library enables input and output operations:
                <ul>
                    <li><code>cout</code> → Output to screen</li>
                    <li><code>cin</code> → Input from user</li>
                </ul>
            </p>

            <h4>2. Namespace Declaration</h4>
            <pre><code>using namespace std;</code></pre>
            <p>
                This line allows direct access to standard library names like <code>cout</code> and <code>cin</code>.
                Without it, you'd need to write <code>std::cout</code> every time.
            </p>

            <h4>3. Main Function</h4>
            <pre><code>int main() {
    // Code goes here
    return 0;
}</code></pre>
            <p>
                Every C++ program starts from the <code>main()</code> function.  
                <ul>
                    <li><code>int</code> → The function returns an integer.</li>
                    <li><code>return 0;</code> → Indicates successful program execution.</li>
                </ul>
            </p>

            <h4>4. Statements</h4>
            <pre><code>cout &lt;&lt; "Hello, World!";</code></pre>
            <p>
                The <code>cout</code> object is used to display output to the screen.  
                The <code>&lt;&lt;</code> operator inserts data into the output stream.
                <br>Every statement must end with a semicolon (<code>;</code>).
            </p>

            <h4>5. Comments</h4>
            <pre><code>// This is a single-line comment

/* 
   This is a 
   multi-line comment 
*/</code></pre>

            <h4>6. Return Statement</h4>
            <pre><code>return 0;</code></pre>
            <p>
                Ends the <code>main()</code> function and returns a value to the operating system.
                <br><strong>0</strong> means the program ran successfully.
            </p>
        </div>
    </div>
       <div class="text-center my-3">
    <img style="height:100" src="{{ asset('images/syntaxcpp.png') }}" alt="Integration" class="content-image">
</div>

    <!-- PROGRAM EXECUTION FLOW -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Flow of a C++ Program Execution</h2>
        </div>
        <div class="card-body">
            <ol>
                <li><strong>Preprocessor Stage:</strong> Handles <code>#include</code> and other directives.</li>
                <li><strong>Compilation:</strong> Converts source code into object code.</li>
                <li><strong>Linking:</strong> Combines object code with libraries like <code>iostream</code>.</li>
                <li><strong>Execution:</strong> Runs the final program.</li>
            </ol>

      
        </div>
           <div class="text-center my-3">
    <img src="{{ asset('images/cpp-flowchart.png') }}" alt="Integration" class="content-image">
</div>
    </div>
    

    <!-- EXAMPLE: USER INPUT -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Example: Taking User Input</h2>
        </div>
        <div class="card-body">
            <pre><code>#include &lt;iostream&gt;
using namespace std;

int main() {
    int age;
    cout &lt;&lt; "Enter your age: ";   // Output message
    cin &gt;&gt; age;                   // Take user input
    cout &lt;&lt; "You are " &lt;&lt; age &lt;&lt; " years old." &lt;&lt; endl;
    return 0;
}
</code></pre>

            <h5>New Concepts:</h5>
            <ul>
                <li><code>cin</code> → Reads input from the user.</li>
                <li><code>&gt;&gt;</code> → Extraction operator (opposite of <code>&lt;&lt;</code>).</li>
                <li><code>endl</code> → Ends the line and moves output to a new line.</li>
            </ul>
        </div>
    </div>

    <!-- SUMMARY -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Summary Table</h2>
        </div>
        <div class="card-body">
            <table >
                <thead >
                    <tr>
                        <th>Component</th>
                        <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>#include</code></td>
                        <td>Includes libraries for functions like input/output.</td>
                    </tr>
                    <tr>
                        <td><code>using namespace std;</code></td>
                        <td>Eliminates the need to write <code>std::</code> repeatedly.</td>
                    </tr>
                    <tr>
                        <td><code>main()</code></td>
                        <td>Starting point of program execution.</td>
                    </tr>
                    <tr>
                        <td><code>cout</code></td>
                        <td>Displays output to the screen.</td>
                    </tr>
                    <tr>
                        <td><code>cin</code></td>
                        <td>Takes input from the user.</td>
                    </tr>
                    <tr>
                        <td><code>//</code> or <code>/* */</code></td>
                        <td>Used to write comments in code.</td>
                    </tr>
                    <tr>
                        <td><code>;</code> (semicolon)</td>
                        <td>Marks the end of a statement.</td>
                    </tr>
                    <tr>
                        <td><code>return 0;</code></td>
                        <td>Signals successful program execution.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- NAVIGATION BUTTONS -->
    <div class="d-flex justify-content-between my-3">
        <button type="button" class="btn " onclick="window.location='{{ route('card') }}'">
            &lt;= Back
        </button>
        <button type="button" class="btn " onclick="window.location='{{ route('cpp_content.datatypevariable') }}'">
            Next =&gt;
        </button>
    </div>
</div>
@endsection
