@extends('layouts.cssapp')

@section('title', 'CSS Selectors Guide')

@section('content')
<div class="container ">
    <h1>CSS Selectors </h1>
 <div class="container" style=" justify-content: center;">
<iframe width="650" height="320" src="https://www.youtube.com/embed/sqJ6xZ9mUwE?si=31X9AcnrEKtsCtm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

</div>
    <!-- Introduction Section -->
    <div class="card">
        <p>
            CSS selectors are patterns used to target HTML elements for styling.  
            They allow you to apply styles to specific elements or groups of elements in a webpage.
            Understanding selectors is essential for writing clean, efficient, and scalable CSS.
        </p>
    </div>

    <!-- Types of Selectors Section -->
    <div class="card">
        <h2>Types of CSS Selectors</h2>
        <p>CSS selectors can be grouped into the following main categories:</p>
        <ul>
            <li><strong>Basic Selectors</strong> - Target elements by name, class, or ID.</li>
            <li><strong>Combinator Selectors</strong> - Define relationships between elements.</li>
            <li><strong>Group Selectors</strong> - Apply the same style to multiple elements.</li>
            <li><strong>Pseudo-classes</strong> - Target elements in specific states (e.g., hover).</li>
            <li><strong>Pseudo-elements</strong> - Style specific parts of an element (e.g., first letter).</li>
            <li><strong>Attribute Selectors</strong> - Select elements based on attributes.</li>
        </ul>
    </div>
 </div>
    <div class="text-center my-3">
    <img src="{{ asset('images/selector.png') }}" alt="selector" class="content-image">
</div>
    <!-- =========================
         1. BASIC SELECTORS
    =============================-->
    <div class="card">
        <h2>1. Basic Selectors</h2>
        <p>Basic selectors are the most commonly used in CSS.</p>

        <h4>Example Code:</h4>
        <pre><code>/* Element Selector */
p {
    color: blue;
}

/* Class Selector */
.highlight {
    background-color: yellow;
    font-weight: bold;
}

/* ID Selector */
#unique-title {
    color: red;
    text-decoration: underline;
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box basic-selectors">
            <p>This is a normal paragraph.</p>
            <p class="highlight">This paragraph uses a class selector.</p>
            <h3 id="unique-title">This heading uses an ID selector.</h3>
        </div>
    </div>

    <style>
        .basic-selectors p {
            color: blue;
        }
        .basic-selectors .highlight {
            background-color: yellow;
            font-weight: bold;
        }
        .basic-selectors #unique-title {
            color: red;
            text-decoration: underline;
        }
    </style>

    <!-- =========================
         2. GROUP SELECTORS
    =============================-->
    <div class="card">
        <h2>2. Group Selectors</h2>
        <p>Group selectors allow you to apply the same style to multiple elements by separating them with a comma.</p>

        <pre><code>h2, h3, p {
    color: green;
    font-family: Arial, sans-serif;
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box group-selectors">
            <h2>Heading 2 styled with group selector</h2>
            <h3>Heading 3 styled with group selector</h3>
            <p>Paragraph styled with group selector</p>
        </div>
    </div>

    <style>
        .group-selectors h2,
        .group-selectors h3,
        .group-selectors p {
            color: green;
            font-family: Arial, sans-serif;
        }
    </style>

    <!-- =========================
         3. COMBINATOR SELECTORS
    =============================-->
    <div class="card">
        <h2>3. Combinator Selectors</h2>
        <p>Combinators define relationships between elements.</p>
        <ul>
            <li><strong>Descendant (space):</strong> Targets elements nested inside another.</li>
            <li><strong>Child (>):</strong> Targets direct children only.</li>
            <li><strong>Adjacent (+):</strong> Targets the element immediately after another.</li>
            <li><strong>General sibling (~):</strong> Targets all siblings after another element.</li>
        </ul>

        <pre><code>/* Descendant */
div p {
    color: blue;
}

/* Child */
div > p {
    font-weight: bold;
}

/* Adjacent */
h4 + p {
    color: red;
}

/* General Sibling */
h4 ~ p {
    font-style: italic;
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box combinator-selectors">
            <h4>Title</h4>
            <p>This paragraph is directly after H4 (Adjacent selector applied).</p>
            <p>Another sibling paragraph (General sibling selector applied).</p>
            <div>
                <p>Nested paragraph inside a div (Descendant & Child applied).</p>
            </div>
        </div>
    </div>

    <style>
        .combinator-selectors div p {
            color: blue;
        }
        .combinator-selectors div > p {
            font-weight: bold;
        }
        .combinator-selectors h4 + p {
            color: red;
        }
        .combinator-selectors h4 ~ p {
            font-style: italic;
        }
    </style>

    <!-- =========================
         4. ATTRIBUTE SELECTORS
    =============================-->
    <div class="card">
        <h2>4. Attribute Selectors</h2>
        <p>Attribute selectors target elements based on their attributes or attribute values.</p>

        <pre><code>/* Elements with title attribute */
[title] {
    color: purple;
}

/* Specific attribute value */
[type="text"] {
    border: 2px solid blue;
}

/* Attribute value starts with */
[href^="https"] {
    color: green;
}

/* Attribute value ends with */
[href$=".pdf"] {
    color: red;
}

/* Attribute value contains */
[class*="btn"] {
    background-color: orange;
    color: white;
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box attribute-selectors">
            <p title="info">This paragraph has a title attribute.</p>
            <input type="text" placeholder="Text input styled by attribute selector">
            <p><a href="https://example.com">HTTPS link</a></p>
            <p><a href="document.pdf">PDF link</a></p>
            <button class="btn-primary">Button with 'btn' in class</button>
        </div>
    </div>

    <style>
        .attribute-selectors [title] {
            color: purple;
        }
        .attribute-selectors [type="text"] {
            border: 2px solid blue;
        }
        .attribute-selectors [href^="https"] {
            color: green;
        }
        .attribute-selectors [href$=".pdf"] {
            color: red;
        }
        .attribute-selectors [class*="btn"] {
            background-color: orange;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>

    <!-- =========================
         5. PSEUDO-CLASSES
    =============================-->
    <div class="card">
        <h2>5. Pseudo-classes</h2>
        <p>Pseudo-classes style elements in a specific state like hover or focus.</p>

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
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box pseudo-classes">
            <a href="#">Hover over this link</a>
            <br><br>
            <input type="text" placeholder="Focus on me to see effect">
            <br><br>
            <ul>
                <li>First Item (first-child styled)</li>
                <li>Middle Item</li>
                <li>Last Item (last-child styled)</li>
            </ul>
        </div>
    </div>

    <style>
        .pseudo-classes a:hover {
            color: red;
            text-decoration: underline;
        }
        .pseudo-classes input:focus {
            border: 2px solid green;
        }
        .pseudo-classes li:first-child {
            font-weight: bold;
        }
        .pseudo-classes li:last-child {
            color: blue;
        }
    </style>

    <!-- =========================
         6. PSEUDO-ELEMENTS
    =============================-->
    <div class="card">
        <h2>6. Pseudo-elements</h2>
        <p>Pseudo-elements allow you to style specific parts of an element.</p>

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
}</code></pre>

        <h4>Live Output:</h4>
        <div class="demo-box pseudo-elements">
            <p>Select this text to see the <code>::selection</code> effect. Notice the first letter and first line styling.</p>
        </div>
    </div>

    <style>
        .pseudo-elements p::first-letter {
            font-size: 24px;
            color: red;
        }
        .pseudo-elements p::first-line {
            font-weight: bold;
        }
        .pseudo-elements p::selection {
            background: yellow;
            color: black;
        }
    </style>

    <div class="card">
    <h2>Summary</h2>
    <ul>
        <li><strong>Basic selectors:</strong> Target by element, class, or ID.</li>
        <li><strong>Group selectors:</strong> Apply styles to multiple elements at once.</li>
        <li><strong>Combinators:</strong> Define parent-child or sibling relationships.</li>
        <li><strong>Attribute selectors:</strong> Target elements with specific attributes or values.</li>
        <li><strong>Pseudo-classes:</strong> Style based on states like hover or focus.</li>
        <li><strong>Pseudo-elements:</strong> Style specific parts of an element.</li>
    </ul>
  
</div>
 
    <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.intro') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.boxmodel') }}'">
  Next =&gt;
</button>
@endsection
