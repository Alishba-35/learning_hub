@extends('layouts.cssapp')

@section('title', 'CSS Specificity & Inheritance Guide')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">CSS Specificity & Inheritance</h1>

    <!-- INTRODUCTION -->
    <div class="card">
        <div class="card-header">
            <h2>Introduction to CSS Specificity</h2>
        </div>
        <div class="card-body">
            <p>
                CSS <strong>specificity</strong> determines <em>which CSS rule is applied</em> when multiple rules target the same element.
                It is an essential concept in CSS because when you write styles, sometimes two or more rules may conflict.
            </p>
            <p>
                The browser uses specificity to <strong>resolve conflicts</strong> and decide which style takes precedence.
            </p>
        </div>
        <div class="container text-center my-3">
            <iframe width="650" height="325" src="https://www.youtube.com/embed/uTcpbPMZlFE?si=TrzVQV7TFg3Qlv8b" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                    encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- WHY SPECIFICITY MATTERS -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Why Specificity is Important</h2>
        </div>
        <div class="card-body">
            <ul>
                <li>Helps you <strong>predict which style will be applied</strong> to an element.</li>
                <li>Prevents confusion and unexpected styling issues.</li>
                <li>Encourages writing <strong>cleaner and maintainable code</strong>.</li>
                <li>Avoids overusing <code>!important</code>, which can make CSS hard to manage.</li>
            </ul>
        </div>
    </div>

    <!-- SPECIFICITY CALCULATION -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>How Specificity is Calculated</h2>
        </div>
        <div class="card-body">
            <p>
                Specificity is calculated based on <strong>four levels of selectors</strong>. You can think of them like a scoring system:
            </p>

            <table >
                <thead >
                    <tr>
                        <th>Selector Type</th>
                        <th>Example</th>
                        <th>Weight</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Inline Styles</strong></td>
                        <td><code>&lt;h1 style="color: red;"&gt;</code></td>
                        <td>1000</td>
                        <td>Highest priority - styles written directly on the element.</td>
                    </tr>
                    <tr>
                        <td><strong>ID Selectors</strong></td>
                        <td><code>#header { }</code></td>
                        <td>100</td>
                        <td>Each ID in a selector adds 100 points.</td>
                    </tr>
                    <tr>
                        <td><strong>Class, Pseudo-class, Attribute Selectors</strong></td>
                        <td><code>.title { }</code> or <code>:hover</code></td>
                        <td>10</td>
                        <td>Each class or pseudo-class adds 10 points.</td>
                    </tr>
                    <tr>
                        <td><strong>Element Selectors</strong></td>
                        <td><code>div { }</code>, <code>p { }</code></td>
                        <td>1</td>
                        <td>Each HTML tag adds 1 point.</td>
                    </tr>
                    <tr>
                        <td><strong>Universal Selector & Combinators</strong></td>
                        <td><code>*</code>, <code>+</code>, <code>></code></td>
                        <td>0</td>
                        <td>Do not add any points to specificity.</td>
                    </tr>
                </tbody>
            </table>

            <p>
                When comparing rules, the <strong>rule with the higher score wins</strong>. If two rules have the same score,
                the <strong>later rule in the CSS file takes precedence</strong>.
            </p>
        </div>
    </div>

    <div class="text-center my-3">
        <img src="{{ asset('images/selectorType.png') }}" alt="Selector Types" class="content-image">
    </div>

    <!-- EXAMPLE DEMONSTRATION -->
    <div class="card">
        <div class="card-header">
            <h2>Specificity Example</h2>
        </div>
        <div class="card-body">
            <p>Let's consider this HTML:</p>
            <pre><code>&lt;p class="highlight" id="special"&gt;This is a paragraph&lt;/p&gt;</code></pre>

            <p>CSS Rules:</p>
            <pre><code>p {
    color: blue;           /* Score = 1 */
}

.highlight {
    color: green;          /* Score = 10 */
}

#special {
    color: red;            /* Score = 100 */
}

p#special {
    color: orange;         /* Score = 101 */
}</code></pre>

            <p>
                The final color of the paragraph will be <strong>orange</strong> because <code>p#special</code> has the highest specificity score.
            </p>

            <h5>Live Output:</h5>
            <div class="specificity-demo">
                <p class="highlight" id="special">This is a paragraph styled with different specificity levels.</p>
            </div>

            <style>
                .specificity-demo p {
                    color: blue;
                }
                .specificity-demo .highlight {
                    color: green;
                }
                .specificity-demo #special {
                    color: red;
                }
                .specificity-demo p#special {
                    color: orange;
                }
            </style>
        </div>
    </div>

    <!-- !IMPORTANT -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>The !important Rule</h2>
        </div>
        <div class="card-body">
            <p>
                The <code>!important</code> rule <strong>overrides all other rules</strong>, regardless of specificity.
                It should be used <strong>sparingly</strong> because it can make your CSS harder to debug and maintain.
            </p>

            <pre><code>p {
    color: blue !important;
}

#special {
    color: red;
}</code></pre>

            <p>
                In this case, the paragraph will be <strong>blue</strong>, even though the ID selector is usually stronger.
            </p>

            <div class="important-demo ">
                <p id="special">This paragraph is styled with !important.</p>
            </div>

            <style>
                .important-demo p {
                    color: blue !important;
                }
                .important-demo #special {
                    color: red;
                }
            </style>
        </div>
    </div>

    <!-- CSS INHERITANCE -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>CSS Inheritance</h2>
        </div>
        <div class="card-body">
            <p>
                <strong>CSS Inheritance</strong> is the mechanism by which some CSS properties are
                automatically passed from parent elements to their child elements. This behavior helps maintain
                consistency and reduces repetitive code.
            </p>

            <h4>How Inheritance Works:</h4>
            <ul>
                <li>Child elements automatically inherit certain styles from their parent, such as <code>color</code>, <code>font-family</code>, and <code>line-height</code>.</li>
                <li>Other properties, like <code>margin</code>, <code>padding</code>, <code>border</code>, and <code>background</code>, do <strong>not</strong> inherit by default.</li>
            </ul>

            <h5>Example:</h5>
            <pre><code>&lt;div class="parent"&gt;
    &lt;p&gt;This is a child paragraph&lt;/p&gt;
    &lt;span&gt;This is a child span&lt;/span&gt;
&lt;/div&gt;</code></pre>

            <p>CSS:</p>
            <pre><code>.parent {
    color: green;
    font-family: Arial, sans-serif;
}

p {
    font-size: 18px;
}</code></pre>

            <p>
                In this example:
                <ul>
                    <li>The text color of both the paragraph and span will be <strong>green</strong> because <code>color</code> is inheritable.</li>
                    <li>The <code>font-size</code> only applies to the paragraph because it is explicitly set there.</li>
                </ul>
            </p>

            <h5>Live Output:</h5>
            <div class="inheritance-demo border p-3">
                <div class="parent">
                    <p>This is a child paragraph</p>
                    <span>This is a child span</span>
                </div>
            </div>

            <style>
                .inheritance-demo .parent {
                    color: green;
                    font-family: Arial, sans-serif;
                }
                .inheritance-demo p {
                    font-size: 18px;
                }
            </style>

            <h4>Controlling Inheritance with Keywords:</h4>
            <ul>
                <li><strong>inherit</strong> → Forces a property to inherit from its parent.</li>
                <li><strong>initial</strong> → Resets a property to its default value.</li>
                <li><strong>unset</strong> → Acts as inherit if the property is normally inheritable; otherwise, it acts as initial.</li>
            </ul>

            <pre><code>p {
    color: inherit; /* Force color to be inherited */
    background-color: initial; /* Reset background to default */
}</code></pre>
        </div>
    </div>

    <!-- BEST PRACTICES -->
    <div class="card">
        <div class="card-header">
            <h2>Best Practices for Specificity & Inheritance</h2>
        </div>
        <div class="card-body">
            <ul>
                <li>Keep your CSS as <strong>flat</strong> as possible. Avoid deeply nested selectors.</li>
                <li>Use <strong>classes</strong> for styling instead of IDs for flexibility and reuse.</li>
                <li>Only use <code>!important</code> when absolutely necessary.</li>
                <li>Understand which properties are <strong>inheritable</strong> to reduce repetitive code.</li>
                <li>Organize stylesheets so more specific rules are written <strong>later</strong>.</li>
            </ul>
        </div>
    </div>

    <!-- SUMMARY -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Summary</h2>
        </div>
        <div class="card-body">
            <ul>
                <li>Specificity decides which CSS rule is applied when multiple rules target the same element.</li>
                <li>Inline styles &gt; IDs &gt; Classes &gt; Elements.</li>
                <li>Universal selectors and combinators do not add specificity weight.</li>
                <li>Inheritance allows certain styles to flow from parent to child automatically.</li>
                <li><code>!important</code> overrides all specificity calculations.</li>
                <li>Use inheritance wisely to keep your CSS clean and efficient.</li>
            </ul>
        </div>
    </div>
     <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.spacing') }}'">
  &lt;=Previous  
</button>

</div>
@endsection
