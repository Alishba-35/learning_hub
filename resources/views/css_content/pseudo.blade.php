@extends('layouts.cssapp')

@section('title', 'CSS Pseudo-Classes and Pseudo-Elements Full Guide')

@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">CSS Pseudo-Classes & Pseudo-Elements </h1>

    <!-- INTRODUCTION -->
    <div class="card ">
        <div class="card-header ">
            <h2>Introduction</h2>
        </div>
        <div class="card-body">
            <p>
                CSS <strong>pseudo-classes</strong> and <strong>pseudo-elements</strong> are special selectors that allow you to style elements
                based on their state, position, or specific parts of their content without needing extra HTML elements.
            </p>
            <p>
                They are incredibly useful for creating dynamic and interactive user interfaces.  
                With pseudo-classes, you can style elements when a user <em>hovers</em>, <em>clicks</em>, or when an element is in a specific state.  
                Pseudo-elements allow you to style <em>specific parts</em> of elements or even insert content dynamically.
            </p>
        </div>
           <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/x0prF61CpHY?si=Zq32c8setOcaXOU3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    </div>

    <!-- DIFFERENCE -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header ">
            <h2>Difference Between Pseudo-Classes and Pseudo-Elements</h2>
        </div>
        <div class="card-body">
            <table >
                <thead >
                    <tr>
                        <th>Aspect</th>
                        <th>Pseudo-Class</th>
                        <th>Pseudo-Element</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Definition</strong></td>
                        <td>Defines a <strong>state or condition</strong> of an element.</td>
                        <td>Styles a <strong>specific part of an element</strong> or adds content.</td>
                    </tr>
                    <tr>
                        <td><strong>Syntax</strong></td>
                        <td>Uses a <code>:</code> (single colon) → Example: <code>:hover</code></td>
                        <td>Uses <code>::</code> (double colon) → Example: <code>::before</code></td>
                    </tr>
                    <tr>
                        <td><strong>Example</strong></td>
                        <td>Change button color on hover → <code>button:hover</code></td>
                        <td>Add an icon before text → <code>p::before</code></td>
                    </tr>
                    <tr>
                        <td><strong>Purpose</strong></td>
                        <td>Interactivity and conditional styling</td>
                        <td>Content manipulation and fine-grained styling</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- PSEUDO-CLASSES -->
    <div class="card ">
        <div class="card-header">
            <h2>1. CSS Pseudo-Classes</h2>
        </div>
        <div class="card-body">
            <p>
                A <strong>pseudo-class</strong> targets elements based on their **state** or **relationship with other elements**.  
                It does not change the DOM structure; it just applies styles conditionally.
            </p>

            <h4>Common Pseudo-Classes:</h4>
            <ul>
                <li><code>:hover</code> - When the user hovers over an element.</li>
                <li><code>:focus</code> - When an element is focused (e.g., an input field).</li>
                <li><code>:active</code> - When an element is actively being clicked.</li>
                <li><code>:first-child</code> - Targets the first child inside a parent.</li>
                <li><code>:last-child</code> - Targets the last child inside a parent.</li>
                <li><code>:nth-child(n)</code> - Targets specific children based on position.</li>
                <li><code>:not(selector)</code> - Selects everything except the specified selector.</li>
                <li><code>:checked</code> - When a checkbox or radio button is selected.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>a:hover {
    color: red;
    text-decoration: underline;
}

input:focus {
    border: 2px solid green;
}

li:first-child {
    font-weight: bold;
}

li:last-child {
    color: blue;
}

li:nth-child(2) {
    background-color: lightyellow;
}</code></pre>

            <h5>Live Output:</h5>
            <div class="pseudo-class-demo ">
                <a href="#">Hover over this link</a><br><br>
                <input type="text" placeholder="Click here to focus"><br><br>
                <ul>
                    <li>First Item</li>
                    <li>Second Item</li>
                    <li>Third Item</li>
                </ul>
            </div>

            <!-- Scoped Styles -->
            <style>
                .pseudo-class-demo a:hover {
                    color: red;
                    text-decoration: underline;
                }
                .pseudo-class-demo input:focus {
                    border: 2px solid green;
                }
                .pseudo-class-demo li:first-child {
                    font-weight: bold;
                }
                .pseudo-class-demo li:last-child {
                    color: blue;
                }
                .pseudo-class-demo li:nth-child(2) {
                    background-color: #696923;
                }
            </style>
        </div>
    </div>

<div class="text-center my-3">
<img src="{{ asset('images/pseudoClass.png') }}" alt="Pseudo-Class" class="content-image">


</div>

    <!-- PSEUDO-ELEMENTS -->
    <div class="card ">
        <div class="card-header ">
            <h2>2. CSS Pseudo-Elements</h2>
        </div>
        <div class="card-body">
            <p>
                A <strong>pseudo-element</strong> styles **specific parts** of an element or adds **virtual elements**
                without changing the actual HTML.  
                Think of it as creating a sub-element purely with CSS.
            </p>

            <h4>Common Pseudo-Elements:</h4>
            <ul>
                <li><code>::first-letter</code> - Styles the first letter of a text block.</li>
                <li><code>::first-line</code> - Styles the first line of a text block.</li>
                <li><code>::before</code> - Inserts content before an element.</li>
                <li><code>::after</code> - Inserts content after an element.</li>
                <li><code>::selection</code> - Styles text when the user highlights it.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>p::first-letter {
    font-size: 24px;
    color: red;
}

p::first-line {
    font-weight: bold;
}

p::selection {
    background: yellow;
    color: black;
}

.box::before {
    content: "Start - ";
    color: green;
}

.box::after {
    content: " - End";
    color: blue;
}</code></pre>

            <h5>Live Output:</h5>
            <div class="pseudo-element-demo ">
                <p>Select this text to see the <code>::selection</code> effect. Notice the first letter and first line styling.</p>
                <div class="box mt-2">This is a div with ::before and ::after applied.</div>
            </div>

            <!-- Scoped Styles -->
            <style>
                .pseudo-element-demo p::first-letter {
                    font-size: 24px;
                    color: red;
                }
                .pseudo-element-demo p::first-line {
                    font-weight: bold;
                }
                .pseudo-element-demo p::selection {
                    background: yellow;
                    color: black;
                }
                .pseudo-element-demo .box::before {
                    content: "Start - ";
                    color: green;
                }
                .pseudo-element-demo .box::after {
                    content: " - End";
                    color: blue;
                }
            </style>
        </div>
    </div>

    <!-- COMBINED EXAMPLE -->
    <div class="card mb-4 ">
        <div class="card-header ">
            <h2>3. Combining Pseudo-Classes and Pseudo-Elements</h2>
        </div>
        <div class="card-body">
            <p>
                You can combine both pseudo-classes and pseudo-elements to create **interactive and styled elements**.
                Here, we create a button that changes color on hover and adds an arrow dynamically.
            </p>

            <h5>Example Code:</h5>
            <pre><code>.button {
    position: relative;
    padding: 10px 20px;
    background: #07284dff;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

.button:hover {
    background: #162d46ff;
}

.button::after {
    content: " →";
    position: absolute;
    right: 10px;
}</code></pre>

            <h5>Live Output:</h5>
            <div class="pseudo-combined-demo ">
                <button class="button">Hover Me</button>
            </div>

            <!-- Scoped Styles -->
            <style>
                .pseudo-combined-demo .button {
                    position: relative;
                    padding: 10px 20px;
                    background: #07284dff;
                    color: white;
                    border: none;
                    cursor: pointer;
                    font-size: 16px;
                    border-radius: 5px;
                    transition: background 0.3s ease;
                }
                .pseudo-combined-demo .button:hover {
                    background: #162d46ff;
                }
                .pseudo-combined-demo .button::after {
                    content: " →";
                    position: absolute;
                    right: 10px;
                }
            </style>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/pseudo-ele.png') }}" alt=" Pseudo-Class" class="content-image">
</div>
    <!-- BEST PRACTICES -->
    <div class="card mb-4 ">
        <div class="card-header">
            <h2>Best Practices</h2>
        </div>
        <div class="card-body">
            <ul>
                <li>Use <strong>pseudo-classes</strong> for interaction states like hover, focus, and active.</li>
                <li>Use <strong>pseudo-elements</strong> to insert decorative content or highlight specific text parts.</li>
                <li>Keep content meaningful. Do not insert important information with pseudo-elements, as it won't be accessible to screen readers.</li>
                <li>Scope your styles to prevent affecting other parts of your site.</li>
                <li>Remember that <code>::before</code> and <code>::after</code> require the <code>content</code> property, even if it's empty.</li>
            </ul>
        </div>
    </div>

    <!-- SUMMARY -->
    <div class="card mb-4 ">
        <div class="card-header">
            <h2>Summary</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Pseudo-Classes</strong> style elements based on their state or position, like <code>:hover</code> or <code>:first-child</code>.</li>
                <li><strong>Pseudo-Elements</strong> style specific parts of elements or add content dynamically, like <code>::before</code> and <code>::after</code>.</li>
                <li>Together, they provide a powerful, flexible system for designing interactive, user-friendly websites.</li>
            </ul>
        </div>
    </div>
     <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.spacing') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.specificity') }}'">
  Next =&gt;
</button>
</div>
@endsection
