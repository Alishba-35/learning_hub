@extends('layouts.cpp_app')

@section('title', 'C++ Loops')

@section('content')

<header>
  <div class="container">
    <h1 class="text-center">C++ Loops</h1>
    <div class="text-center my-3">
      <iframe width="650" height="325" src="https://www.youtube.com/embed/a7dfSBrTZtE?si=BylJe0VxhVmdOb9l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <p class="lead text-center">
      Loops allow you to execute a block of code repeatedly.  
      Click <strong>Run demo</strong> to see simulated outputs for each example.
    </p>
  </div>
</header>

<main class="container">

  <!-- FOR LOOP -->
  <section class="card my-4 p-3">
    <h2>For Loop</h2>
    <p class="sub">
      A <strong>for loop</strong> is used when the number of iterations is known in advance.
    </p>
    <div class="code" id="code-forloop">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    for (int i = 1; i <= 5; i++) {
        cout &lt;&lt; "Iteration: " &lt;&lt; i &lt;&lt; endl;
    }
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-forloop','out-forloop')">Run demo</button>
      <button class="btn " onclick="clearOut('out-forloop')">Clear</button>
    </div>
    <pre id="out-forloop" class="output-box"></pre>
  </section>

  <!-- WHILE LOOP -->
  <section class="card my-4 p-3">
    <h2>While Loop</h2>
    <p class="sub">
      A <strong>while loop</strong> is used when the number of iterations is not known in advance.  
      The loop runs as long as the condition is <strong>true</strong>.
    </p>
    <div class="code" id="code-whileloop">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int count = 1;
    while (count <= 5) {
        cout &lt;&lt; "Count: " &lt;&lt; count &lt;&lt; endl;
        count++;
    }
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-whileloop','out-whileloop')">Run demo</button>
      <button class="btn " onclick="clearOut('out-whileloop')">Clear</button>
    </div>
    <pre id="out-whileloop" class="output-box"></pre>
  </section>

  <!-- DO-WHILE LOOP -->
  <section class="card my-4 p-3">
    <h2>Do-While Loop</h2>
    <p class="sub">
      A <strong>do-while loop</strong> is similar to a while loop,  
      but it guarantees that the loop body executes <strong>at least once</strong>.
    </p>
    <div class="code" id="code-dowhileloop">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    int num = 1;
    do {
        cout &lt;&lt; "Number: " &lt;&lt; num &lt;&lt; endl;
        num++;
    } while (num <= 5);
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-dowhileloop','out-dowhileloop')">Run demo</button>
      <button class="btn " onclick="clearOut('out-dowhileloop')">Clear</button>
    </div>
    <pre id="out-dowhileloop" class="output-box"></pre>
  </section>
  <div class="text-center">
   
    <h3>LOOPS</h3>
    <img src="{{ asset('images/cpp-loop.png') }}" alt="LOOP" class="content-image">
  </div>

  <!-- BREAK STATEMENT -->
  <section class="card my-4 p-3">
    <h2>Break and Continue</h2>
    <div class="text-center my-3">
      <iframe width="650" height="325" src="https://www.youtube.com/embed/DJh5NfK7h-U?si=OW8QAdJvuv74OY4v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <h2>Break Statement</h2>
    <p class="sub">
      The <strong>break</strong> statement is used to exit a loop immediately,  
      even if the loop condition is still true.
    </p>
    <div class="code" id="code-break">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    for (int i = 1; i <= 10; i++) {
        if (i == 6) {
            cout &lt;&lt; "Loop stopped at i = " &lt;&lt; i &lt;&lt; endl;
            break;
        }
        cout &lt;&lt; "i = " &lt;&lt; i &lt;&lt; endl;
    }
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-break','out-break')">Run demo</button>
      <button class="btn " onclick="clearOut('out-break')">Clear</button>
    </div>
    <pre id="out-break" class="output-box"></pre>
  </section>

  <!-- CONTINUE STATEMENT -->
  <section class="card my-4 p-3">
    <h2>Continue Statement</h2>
    <p class="sub">
      The <strong>continue</strong> statement skips the current iteration  
      and moves to the next iteration of the loop.
    </p>
    <div class="code" id="code-continue">
<pre>
#include &lt;iostream&gt;
using namespace std;

int main() {
    for (int i = 1; i <= 5; i++) {
        if (i == 3) {
            cout &lt;&lt; "Skipping i = " &lt;&lt; i &lt;&lt; endl;
            continue;
        }
        cout &lt;&lt; "i = " &lt;&lt; i &lt;&lt; endl;
    }
    return 0;
}
</pre>
    </div>
    <div class="btn-row">
      <button class="btn " onclick="runCpp('code-continue','out-continue')">Run demo</button>
      <button class="btn " onclick="clearOut('out-continue')">Clear</button>
    </div>
    <pre id="out-continue" class="output-box"></pre>
  </section>

</main>

<!-- Styling -->
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

<!-- JavaScript for Simulated Outputs -->
<script>
  const sampleOutputs = {
    'code-forloop': `Iteration: 1
Iteration: 2
Iteration: 3
Iteration: 4
Iteration: 5`,

    'code-whileloop': `Count: 1
Count: 2
Count: 3
Count: 4
Count: 5`,

    'code-dowhileloop': `Number: 1
Number: 2
Number: 3
Number: 4
Number: 5`,

    'code-break': `i = 1
i = 2
i = 3
i = 4
i = 5
Loop stopped at i = 6`,

    'code-continue': `i = 1
i = 2
Skipping i = 3
i = 4
i = 5`
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
        <button class="btn " onclick="window.location='{{ route('cpp_content.oper-cond') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.array') }}'">Next =&gt;</button>
    </div>
@endsection
