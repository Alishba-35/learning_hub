@extends('layouts.cpp_app')

@section('title', 'C++ Operators and Conditional Statements')

@section('content')

<header>
  <div class="container">
    <h1 class="text-center">C++ Operators & Conditional Statements</h1>

    <div class="text-center my-3">
      <iframe width="650" height="325" src="https://www.youtube.com/embed/JBgZxnAj4hg?si=xV3r8A0w0nJUTr4Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <p class="lead text-center">
      Click <strong>Run demo</strong> to see example outputs.
      You can also edit the code and re-run it for practice.
    </p>
  </div>
</header>

<main class="container">
  <div class="grid">

    <!-- Arithmetic Operators -->
    <section class="card my-4 p-3">
      <h2>Arithmetic Operators</h2>
      <p class="sub"><strong>+</strong>, <strong>-</strong>, <strong>*</strong>, <strong>/</strong>, <strong>%</strong>, <strong>++</strong>, <strong>--</strong></p>
      
      <div class="code" id="code-arithmetic">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int a = 10, b = 5;
    cout &lt;&lt; "Addition: " &lt;&lt; (a + b) &lt;&lt; endl;
    cout &lt;&lt; "Subtraction: " &lt;&lt; (a - b) &lt;&lt; endl;
    cout &lt;&lt; "Multiplication: " &lt;&lt; (a * b) &lt;&lt; endl;
    cout &lt;&lt; "Division: " &lt;&lt; (a / b) &lt;&lt; endl;
    cout &lt;&lt; "Modulus: " &lt;&lt; (a % b) &lt;&lt; endl;
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-arithmetic','out-arithmetic')">Run demo</button>
        <button class="btn " onclick="clearOut('out-arithmetic')">Clear</button>
      </div>
      <pre id="out-arithmetic" class="output-box"></pre>
    </section>

    <!-- Relational Operators -->
    <section class="card my-4 p-3">
      <h2>Relational Operators</h2>
      <p class="sub"><strong>==</strong>, <strong>!=</strong>, <strong>&gt;</strong>, <strong>&lt;</strong>, <strong>&gt;=</strong>, <strong>&lt;=</strong></p>
      
      <div class="code" id="code-relational">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int x = 5, y = 10;
    cout &lt;&lt; (x == y) &lt;&lt; endl;
    cout &lt;&lt; (x != y) &lt;&lt; endl;
    cout &lt;&lt; (x > y) &lt;&lt; endl;
    cout &lt;&lt; (x < y) &lt;&lt; endl;
    cout &lt;&lt; (x >= y) &lt;&lt; endl;
    cout &lt;&lt; (x <= y) &lt;&lt; endl;
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-relational','out-relational')">Run demo</button>
        <button class="btn " onclick="clearOut('out-relational')">Clear</button>
      </div>
      <pre id="out-relational" class="output-box"></pre>
    </section>

    <!-- Logical Operators -->
    <section class="card my-4 p-3">
      <h2>Logical Operators</h2>
      <p class="sub"><strong>&amp;&amp;</strong> (AND), <strong>||</strong> (OR), <strong>!</strong> (NOT)</p>
      
      <div class="code" id="code-logical">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int a = 10, b = 20;
    cout &lt;&lt; (a > 5 && b < 30) &lt;&lt; endl;
    cout &lt;&lt; (a > 15 || b < 30) &lt;&lt; endl;
    cout &lt;&lt; !(a > 5) &lt;&lt; endl;
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-logical','out-logical')">Run demo</button>
        <button class="btn " onclick="clearOut('out-logical')">Clear</button>
      </div>
      <pre id="out-logical" class="output-box"></pre>
    </section>
<div class="text-center">
    <!-- <h3>Operators</h3>
    <img src="{{ asset('images/operators.png') }}" alt="operators" class="content-image"> -->
    <h3>Operator</h3>
    <img src="{{ asset('images/cppoper.png') }}" alt="operator" class="content-image">
  </div>
    <!-- If Else Example -->
    <section class="card my-4 p-3">
        <h2>Conditional Statements</h2>
         <div class="text-center my-3">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/fjCyOjGFfU0?si=_klnyzjZZb_O97Dx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

      <h2>If / Else If / Else</h2>
      <p class="sub">Classic branching based on conditions.</p>
      
      <div class="code" id="code-ifelse">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int marks;
    cout &lt;&lt; "Enter marks: ";
    cin &gt;&gt; marks;

    if (marks >= 90) {
        cout &lt;&lt; "Grade A";
    } else if (marks >= 75) {
        cout &lt;&lt; "Grade B";
    } else if (marks >= 50) {
        cout &lt;&lt; "Grade C";
    } else {
        cout &lt;&lt; "Fail";
    }
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-ifelse','out-ifelse')">Run demo</button>
        <button class="btn " onclick="clearOut('out-ifelse')">Clear</button>
      </div>
      <pre id="out-ifelse" class="output-box"></pre>
    </section>

    <!-- Switch Example -->
    <section class="card my-4 p-3">
      <h2>Switch Statement</h2>
      
      <div class="code" id="code-switch">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int day;
    cout &lt;&lt; "Enter day number (1-7): ";
    cin &gt;&gt; day;

    switch(day) {
        case 1: cout &lt;&lt; "Monday"; break;
        case 2: cout &lt;&lt; "Tuesday"; break;
        case 3: cout &lt;&lt; "Wednesday"; break;
        case 4: cout &lt;&lt; "Thursday"; break;
        case 5: cout &lt;&lt; "Friday"; break;
        case 6: cout &lt;&lt; "Saturday"; break;
        case 7: cout &lt;&lt; "Sunday"; break;
        default: cout &lt;&lt; "Invalid day";
    }
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-switch','out-switch')">Run demo</button>
        <button class="btn " onclick="clearOut('out-switch')">Clear</button>
      </div>
      <pre id="out-switch" class="output-box"></pre>
    </section>

    <!-- Ternary Example -->
    <section class="card my-4 p-3">
      <h2>Ternary Operator</h2>
      
      <div class="code" id="code-ternary">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int age;
    cout &lt;&lt; "Enter your age: ";
    cin &gt;&gt; age;

    string result = (age >= 18) ? "Adult" : "Minor";
    cout &lt;&lt; "You are: " &lt;&lt; result;
    return 0;
}
</pre>
      </div>
      <div class="btn-row">
        <button class="btn " onclick="runCpp('code-ternary','out-ternary')">Run demo</button>
        <button class="btn " onclick="clearOut('out-ternary')">Clear</button>
      </div>
      <pre id="out-ternary" class="output-box"></pre>
    </section>

  </div>
</main>
<div class="text-center">
    <!-- <h3>Operators</h3>
    <img src="{{ asset('images/operators.png') }}" alt="operators" class="content-image"> -->
    <h3>Conditional Statement</h3>
    <img src="{{ asset('images/conditional.png') }}" alt="Conditional statement" class="content-image">
  </div>
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

  .sub {
    margin-bottom: 10px;
    color: #94a3b8;
  }
</style>

<script>
  const sampleOutputs = {
    'code-arithmetic': `Addition: 15
Subtraction: 5
Multiplication: 50
Division: 2
Modulus: 0`,
    'code-relational': `0
1
0
1
0
1`,
    'code-logical': `1
1
0`,
    'code-ifelse': `Enter marks: 80
Grade B`,
    'code-switch': `Enter day number (1-7): 5
Friday`,
    'code-ternary': `Enter your age: 20
You are: Adult`
  };

  function runCpp(codeId, outputId) {
    const outEl = document.getElementById(outputId);
    outEl.textContent = 'Running...';
    setTimeout(() => {
      if (sampleOutputs.hasOwnProperty(codeId)) {
        outEl.textContent = sampleOutputs[codeId];
      } else {
        outEl.textContent = 'No output available for this snippet.';
      }
    }, 300);
  }

  function clearOut(outputId) {
    document.getElementById(outputId).textContent = '';
  }
</script>
  <div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.datatypevariable') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.loops') }}'">Next =&gt;</button>
    </div>
@endsection
