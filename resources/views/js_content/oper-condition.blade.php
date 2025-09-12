@extends('layouts.appjs')

@section('title', 'operators and conditional statement')

@section('content')
   

  <!-- Page Content -->





  <header>
    <div class="container">
      <div class="container">

        <h1>JavaScript Operators & Conditional Statements</h1>
        <div class="container" style="display: flex; justify-content: center;">
          <iframe width="650" height="325" src="https://www.youtube.com/embed/Zg4-uSjxosE?si=sJYRHxLkjk9zGFNe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <p class="lead">Click <strong>Run demo</strong> in each card to see output. Everything runs right in your
          browser—no setup required.</p>
      </div>
  </header>

  <main class="container">
    <div class="grid">

      <!-- Arithmetic Operators -->
      <section class="card" id="card-arithmetic">
        <h2>Arithmetic Operators</h2>
        <div class="sub"><b>`+`, `-`, `*`, `/`, `%`, `**`, `++`, `--`</b></div>
        <div class="code">
          <pre>let x = 10, y = 5;
[
  ["x + y", x + y],
  ["x - y", x - y],
  ["x * y", x * y],
  ["x / y", x / y],
  ["x % y", x % y],
  ["x ** 2", x ** 2],
  ["x++ (post)", (t=>{let a=t; t++; return `${a} → ${t}`;})(10)],
  ["++y (pre)", (t=>{let a=t; return `${++a}`;})(5)],
]</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runArithmetic()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-arithmetic')">Clear</button>
        </div>
        <div class="out" id="out-arithmetic" aria-live="polite"></div>
      </section>

      <!-- Assignment Operators -->
      <section class="card" id="card-assignment">
        <h2>Assignment Operators</h2>
        <div class="sub"><b>`=`, `+=`, `-=`, `*=`, `/=`, `%=`</b></div>
        <div class="code">
          <pre>let a = 10;
a += 5;   // 15
a -= 3;   // 12
a *= 2;   // 24
a /= 4;   // 6
a %= 5;   // 1</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runAssignment()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-assignment')">Clear</button>
        </div>
        <div class="out" id="out-assignment"></div>
      </section>

      <!-- Comparison Operators -->
      <section class="card" id="card-comparison">
        <h2>Comparison Operators</h2>
        <div class="sub"><b>`==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=` </b>
        </div>
        <div class="code">
          <pre>let x = 10; 
[
  ['x == "10"', x == "10"],      // true (coercion)
  ['x === "10"', x === "10"],    // false (strict)
  ['x != 5', x != 5],
  ['x !== 10', x !== 10],
  ['x > 5', x > 5],
  ['x <= 10', x <= 10],
]</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runComparison()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-comparison')">Clear</button>
        </div>
        <div class="out" id="out-comparison"></div>
      </section>

      <!-- Logical Operators -->
      <section class="card" id="card-logical">
        <h2>Logical Operators</h2>
        <div class="sub"><b>`&&` (AND), `||` (OR), `!` (NOT)</b></div>
        <div class="code">
          <pre>let x = 10, y = 5;
[
  ['x > 5 && y < 10', x > 5 && y < 10],
  ['x > 5 || y > 10', x > 5 || y > 10],
  ['!(x > 5)', !(x > 5)],
]</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runLogical()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-logical')">Clear</button>
        </div>
        <div class="out" id="out-logical"></div>
      </section>

      <!-- Ternary Operator -->
      <section class="card" id="card-ternary">
        <h2>Ternary Operator</h2>
        <div class="sub"><b>`condition ? exprIfTrue : exprIfFalse`</b></div>
        <div class="code">
          <pre>const age = 18;
const msg = (age >= 18) ? 'You are an adult' : 'You are a minor';
msg; // → 'You are an adult'</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runTernary()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-ternary')">Clear</button>
        </div>
        <div class="out" id="out-ternary"></div>
      </section>

      <!-- Type Operators -->
      <section class="card" id="card-typeof">
        <h2>Type Operators</h2>
        <div class="sub"><b>`typeof`, `instanceof`</b></div>
        <div class="code">
          <pre>typeof 42;           // 'number'
typeof 'hi';         // 'string'
typeof null;         // 'object' (quirk)
[1,2,3] instanceof Array; // true</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runTypeof()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-typeof')">Clear</button>
        </div>
        <div class="out" id="out-typeof"></div>
      </section>

      <!-- Nullish Coalescing -->
      <section class="card" id="card-nullish">
        <h2>Nullish Coalescing</h2>
        <div class="sub"><b>`a ?? b` → returns <em>a</em> unless it is <code>null</code> or <code>undefined</code></b>
        </div>
        <div class="code">
          <pre>let user = null;
let name = user ?? 'Guest'; // 'Guest'

let count = 0;
let shown = count ?? 10;    // 0 (because 0 is not null/undefined)
</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runNullish()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-nullish')">Clear</button>
        </div>
        <div class="out" id="out-nullish"></div>
      </section>

      <!-- Conditionals: if / else if / else -->
      <section class="card" id="card-ifelse">
        <h2>Conditional Statements — if / else if / else</h2>
        <div class="sub">Classic branching based on boolean conditions.</div>
        <div class="code">
          <pre>function grade(score) {
  if (score >= 90) return 'A';
  else if (score >= 75) return 'B';
  else if (score >= 60) return 'C';
  else return 'D';
}

grade(85); // 'B'</pre>
        </div>
        <div class="btn-row">
          <input id="score" type="number" placeholder="Enter score" value="85"
            style="background:#0f1735;border:1px solid var(--border);color:wheat;padding:8px 10px;border-radius:10px;" />
          <button class="btn" onclick="runIfElse()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-ifelse')">Clear</button>
        </div>
        <div class="out" id="out-ifelse"></div>
      </section>

      <!-- switch statement -->
      <section class="card" id="card-switch">
        <h2>switch Statement</h2>
        <div class="sub">Choose one of many code paths based on a value.</div>
        <div class="code">
          <pre>function dayName(n) {
  switch (n) {
    case 1: return 'Monday';
    case 2: return 'Tuesday';
    case 3: return 'Wednesday';
    case 4: return 'Thursday';
    case 5: return 'Friday';
    case 6: return 'Saturday';
    case 7: return 'Sunday';
    default: return 'Invalid';
  }
}

dayName(3); // 'Wednesday'</pre>
        </div>
        <div class="btn-row">
          <input id="day" type="number" placeholder="1-7" value="3" min="1" max="7"
            style="background:#0f1735;border:1px solid var(--border);color:wheat;padding:8px 10px;border-radius:10px;" />
          <button class="btn" onclick="runSwitch()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-switch')">Clear</button>
        </div>
        <div class="out" id="out-switch"></div>
      </section>

      <!-- Bonus: Optional Chaining -->
      <section class="card" id="card-optional">
        <h2>Bonus: Optional Chaining</h2>
        <div class="sub">Safely access deep properties: <code>obj?.a?.b</code></div>
        <div class="code">
          <pre>const user = { profile: { name: 'Ava' } };
const good = user?.profile?.name;    // 'Ava'
const safe = user?.address?.street;  // undefined (no error)
</pre>
        </div>
        <div class="btn-row">
          <button class="btn" onclick="runOptional()">Run demo</button>
          <button class="btn secondary" onclick="clearOut('out-optional')">Clear</button>
        </div>
        <div class="out" id="out-optional"></div>
      </section>

      <!-- Reference Table -->
      <section class="card" id="card-ref">
        <h2>Quick Reference</h2>
        <div class="sub">Operators at a glance</div>
        <table>
          <thead>
            <tr>
              <th>Type</th>
              <th>Operators</th>
              <th>Notes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Arithmetic</td>
              <td><code>+ - * / % ** ++ --</code></td>
              <td>Math operations</td>
            </tr>
            <tr>
              <td>Assignment</td>
              <td><code>= += -= *= /= %=</code></td>
              <td>Update variables</td>
            </tr>
            <tr>
              <td>Comparison</td>
              <td><code>== === != !== > < >= <=</code></td>
              <td>Return boolean</td>
            </tr>
            <tr>
              <td>Logical</td>
              <td><code>&& || !</code></td>
              <td>Combine booleans</td>
            </tr>
            <tr>
              <td>Ternary</td>
              <td><code>cond ? a : b</code></td>
              <td>Inline if/else</td>
            </tr>
            <tr>
              <td>Type</td>
              <td><code>typeof, instanceof</code></td>
              <td>Inspect types</td>
            </tr>
            <tr>
              <td>Nullish</td>
              <td><code>??</code></td>
              <td>Defaults for null/undefined</td>
            </tr>
            <tr>
              <td>Optional</td>
              <td><code>?.</code></td>
              <td>Safe deep access</td>
            </tr>
          </tbody>
        </table>
      </section>

    </div>

    <details>
      <summary>How to use this page</summary>
      <div class="sub">Each card shows a snippet and a <em>Run demo</em> button. Click it to execute the code and view
        the output below. Try adjusting inputs where available.</div>
    </details>

  </main>
  <div class="text-center">
    <h3>Operators</h3>
    <img src="{{ asset('images/operators.png') }}" alt="operators" class="content-image">
    <h3>Conditional Statement</h3>
    <img src="{{ asset('images/conditional.png') }}" alt="Conditional statement" class="content-image">
  </div>
  
  </div>


  <footer>
    Built for quick learning & experimentation. Tip: open DevTools Console to see any errors.
  </footer>




 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('js_content.variable') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('js_content.loop-string') }}'">
  Next =&gt;
</button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/content.js') }}"></script>

@endsection