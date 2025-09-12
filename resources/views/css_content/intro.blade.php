@extends('layouts.cssapp')

@section('title', 'Introduction to CSS')

@section('content')
<div class="container ">
    <h1 >Introduction to CSS (Cascading Style Sheets)</h1>
    <div class="card">
    <p>
        <strong>CSS (Cascading Style Sheets)</strong> is a stylesheet language used to describe the presentation 
        of a document written in HTML or XML. While HTML provides the <em>structure and content</em> of a webpage, 
        CSS controls the <em>visual appearance</em> and layout of that content, including 
        <strong>colors, fonts, spacing, positioning, animations, and responsiveness</strong>.
    </p>

    <p>
        CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. 
        It enables web developers and designers to create visually engaging and user-friendly websites.
    </p>

    
</div>
<div class="card">
    <h2>Why CSS is Important</h2>
    <ul>
        <li><strong>Separation of Content and Presentation:</strong> Keeps HTML structure clean and CSS handles design separately.</li>
        <li><strong>Consistency Across Pages:</strong> Apply the same styles to multiple pages for a uniform look.</li>
        <li><strong>Improved Accessibility:</strong> Adjust how content is presented for different devices and users, including those with disabilities.</li>
        <li><strong>Responsive Design:</strong> Make websites adapt to screens like desktops, tablets, and mobile devices.</li>
        <li><strong>Performance:</strong> External CSS files are cached by browsers, improving page load speed.</li>
    </ul>

   </div>
<div class="card">
    <h2>How CSS Works: The Cascade and Specificity</h2>
    <p>
        The term <strong>"Cascading"</strong> in CSS refers to how styles are applied when multiple rules 
        target the same element. The browser determines which style to apply using:
    </p>
    <ul>
        <li><strong>Importance:</strong> Rules with <code>!important</code> override others.</li>
        <li><strong>Specificity:</strong> IDs override classes, which override element selectors.</li>
        <li><strong>Source Order:</strong> If specificity is equal, the last rule in the file wins.</li>
    </ul>
</div>
<div class="card">

    <h2>CSS Syntax</h2>
    <div class="container" style=" justify-content: center;">
<iframe width="650" height="315" src="https://www.youtube.com/embed/G8r00ZNopTE?si=M4-LUMgDmFsahU_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div></div>
    <p>
        A CSS rule consists of two main parts:
    </p>
    <ol>
        <li>
            <strong>Selector:</strong> Specifies which HTML element(s) the rule applies to. Examples:
            <code>p</code>, <code>.class</code>, <code>#id</code>.
        </li>
        <li>
            <strong>Declaration Block:</strong> Enclosed in curly braces <code>{ }</code>, containing property-value pairs.
        </li>
    </ol>

    <h4>Example:</h4>
    <pre><code>h1 {
    color: #333333;
    font-family: Arial, sans-serif;
    font-size: 36px;
    margin-bottom: 20px;
}</code></pre>

    <p>
        This rule styles all <code>&lt;h1&gt;</code> elements with:
    </p>
    <ul>
        <li>Dark gray text color (<code>#333333</code>).</li>
        <li>Arial font, or generic sans-serif if Arial is unavailable.</li>
        <li>Font size of 36px.</li>
        <li>Margin of 20px below the heading.</li>
    </ul>
</div>
    <div class="card">

    <h2>Types of CSS</h2>
    <p>There are three primary ways to include CSS in HTML:</p>

    <h3>1. Inline CSS</h3>
    <p>
        Inline CSS is applied directly to an HTML element using the <code>style</code> attribute.
    </p>
    <pre><code>&lt;p style="color: blue; font-size: 14px;"&gt;This is a blue paragraph.&lt;/p&gt;</code></pre>

    <h4>Output:</h4>
    <p style="color: blue; font-size: 14px;">This is a blue paragraph.</p>

    <hr>

    <h3>2. Internal CSS</h3>
    <p>
        Internal CSS is written inside a <code>&lt;style&gt;</code> tag within the <code>&lt;head&gt;</code> section of an HTML document.
    </p>
    <pre><code>&lt;head&gt;
    &lt;style&gt;
        p {
            color: green;
            font-size: 18px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;p&gt;This paragraph uses internal CSS.&lt;/p&gt;
&lt;/body&gt;</code></pre>

    <h4>Output:</h4>
    <div style="border:1px solid #ccc; padding:10px;">
        <p style="color: green; font-size: 18px;">This paragraph uses internal CSS.</p>
    </div>

    <hr>

    <h3>3. External CSS</h3>
    <p>
        External CSS is stored in a separate <code>.css</code> file and linked to the HTML using 
        the <code>&lt;link&gt;</code> tag.
    </p>
    <pre><code>&lt;head&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;</code></pre>

    <p><strong>styles.css</strong></p>
    <pre><code>p {
    color: red;
    font-size: 20px;
}</code></pre>

    <h4>Output (Simulated):</h4>
    <div >
        <p style="color: red; font-size: 20px;">This paragraph uses external CSS.</p>
    </div>

   
</div>
<div class="text-center my-3">
    <img src="{{ asset('images/integration.png') }}" alt="Integration" class="content-image">
</div>
<div class="card">
    <h2>Common CSS Properties</h2>
    <ul>
        <li><strong>Color and Background:</strong> <code>color</code>, <code>background-color</code>, <code>background-image</code>, <code>background-size</code></li>
        <li><strong>Text and Fonts:</strong> <code>font-family</code>, <code>font-size</code>, <code>font-weight</code>, <code>line-height</code>, <code>text-align</code>, <code>text-decoration</code></li>
        <li><strong>Box Model:</strong> <code>margin</code>, <code>padding</code>, <code>border</code>, <code>width</code>, <code>height</code></li>
        <li><strong>Layout:</strong> <code>display</code>, <code>position</code>, <code>float</code>, <code>top</code>, <code>left</code></li>
        <li><strong>Flexbox:</strong> <code>display: flex</code>, <code>justify-content</code>, <code>align-items</code>, <code>flex-direction</code></li>
    </ul>
</div>
<div class="text-center my-3">
    <img src="{{ asset('images/common-pro.png') }}" alt="common properties" class="content-image">
</div>
<div class="card">

    <h2>Live Example: Styled Card</h2>
    <p>Below is a live example of using CSS to style a card:</p>

    <pre><code>&lt;div class="card"&gt;
    &lt;h3&gt;CSS Card&lt;/h3&gt;
    &lt;p&gt;This is a beautifully styled card using CSS.&lt;/p&gt;
&lt;/div&gt;

&lt;style&gt;
.card {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 10px;
    background-color: #f9f9f9;
    width: 250px;
    text-align: center;
}
.card h3 {
    color: #333;
}
&lt;/style&gt;
</code></pre>

    <h4>Output:</h4>
    <div style="border: 1px solid #595f7bff; padding: 15px; border-radius: 10px; background-color: #383640ff; width: 250px; text-align: center;">
        <h3 style="color: #d0cdcdff;">CSS Card</h3>
        <p>This is a beautifully styled card using CSS.</p>
    </div>
</div>
<div class="card">
    <h2>Summary</h2>
    <p>
        CSS is a powerful tool that brings HTML content to life. By mastering CSS, you can create
        visually appealing, responsive, and accessible websites. Start small, learn the basic
        properties, and gradually move to advanced concepts like Flexbox and Grid.
    </p>
    </div>
</div>
<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('card') }}'">
  &lt;=Back  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.selectors') }}'">
  Next =&gt;
</button>
@endsection
