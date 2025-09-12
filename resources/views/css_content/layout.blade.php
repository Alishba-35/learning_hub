@extends('layouts.cssapp')

@section('title', 'CSS Layout - Complete Guide')

@section('content')
<div class="container ">
    <h1 class="text-center">CSS Layout </h1>

    <!-- INTRODUCTION -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Introduction to CSS Layout</h2>
            <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/vHuSz4fRM88?si=R-_rl8RLuW3lsLRH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
        </div>
        <div class="card-body">
            <p>
                CSS Layout defines how elements are displayed, positioned, and structured on a webpage. 
                A good understanding of layout helps you build responsive and user-friendly designs. 
            </p>
            <ul>
                <li>Arrange elements like headers, sidebars, and content areas.</li>
                <li>Control how elements interact with each other.</li>
                <li>Create responsive designs for different screen sizes.</li>
            </ul>
        </div>
    </div>

    <!-- DISPLAY PROPERTY -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>1. Display Property</h2>
        </div>
        <div class="card-body">
            <p>
                The <code>display</code> property determines how an element is shown on the page.
            </p>

            <table >
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><code>block</code></td><td>Starts on a new line and takes full width (e.g., &lt;div&gt;).</td></tr>
                    <tr><td><code>inline</code></td><td>Stays inline with other content without starting a new line (e.g., &lt;span&gt;).</td></tr>
                    <tr><td><code>inline-block</code></td><td>Behaves like inline but allows setting width and height.</td></tr>
                    <tr><td><code>none</code></td><td>Completely hides the element.</td></tr>
                </tbody>
            </table>

            <h5>Example Code:</h5>
            <pre><code>.block-example {
    display: block;
    background: lightblue;
    margin-bottom: 10px;
}

.inline-example {
    display: inline;
    background: lightgreen;
    padding: 5px;
}

.inline-block-example {
    display: inline-block;
    background: lightcoral;
    width: 100px;
    height: 50px;
    text-align: center;
}</code></pre>

            <h5>Live Output:</h5>
            <div style="border:1px solid #ccc; padding:10px;">
                <div style="display:block; background:#25819f; margin-bottom:10px;">Block Element</div>
                <span style="display:inline; background:#447144; padding:5px;">Inline 1</span>
                <span style="display:inline; background:#447144t; padding:5px;">Inline 2</span>
                <div style="display:inline-block; background:lightcoral; width:100px; height:50px; text-align:center; margin-left:10px;">
                    Inline-Block
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-3">
    <img src="{{ asset('images/display-pro.png') }}" alt="Display Properties" class="content-image">
</div>

    <!-- POSITIONING -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>2. Positioning</h2>
        </div>
        <div class="card-body">
            <p>
                The <code>position</code> property controls how an element is placed on the page.  
                There are five main values:
            </p>

            <ul>
                <li><strong>static</strong> - Default behavior, normal document flow.</li>
                <li><strong>relative</strong> - Positioned relative to its normal position.</li>
                <li><strong>absolute</strong> - Positioned relative to the nearest positioned ancestor.</li>
                <li><strong>fixed</strong> - Stays fixed in place even when scrolling.</li>
                <li><strong>sticky</strong> - Switches between relative and fixed depending on scroll position.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>.relative-box {
    position: relative;
    top: 10px;
    left: 20px;
    background: lightyellow;
}

.absolute-box {
    position: absolute;
    top: 30px;
    left: 50px;
    background: lightpink;
}

.fixed-box {
    position: fixed;
    bottom: 10px;
    right: 10px;
    background: lightgreen;
    padding: 5px;
}

.sticky-box {
    position: sticky;
    top: 0;
    background: orange;
}</code></pre>

            <h5>Live Output:</h5>
            <div style="border:1px solid #ccc; padding:20px; position:relative; height:200px;">
                <div style="position:relative; top:10px; left:20px; background:#c5c565; padding:5px;">Relative Box</div>
                <div style="position:absolute; top:30px; left:50px; background:#ff5f77; padding:5px;">Absolute Box</div>
                <div style="position:sticky; top:0; background:orange; padding:5px;">Sticky Header (scroll to test)</div>
            </div>
            <div style="height:200px;"></div>
            <div style="position:fixed; bottom:10px; right:10px; background:#2f6d2f; padding:5px;">
                Fixed Box
            </div>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/position.png') }}" alt="Position" class="content-image">
</div>
    <!-- FLEXBOX BASICS -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>3. Flexbox Basics</h2>
        </div>
        <div class="card-body">
            <p>
                Flexbox is a one-dimensional layout model that helps align and distribute elements
                inside a container efficiently, either horizontally or vertically.
            </p>

            <h4>Important Flexbox Properties:</h4>
            <ul>
                <li><strong>Container Properties:</strong>
                    <ul>
                        <li><code>display: flex;</code> - Enables Flexbox.</li>
                        <li><code>flex-direction</code> - Row or column layout.</li>
                        <li><code>justify-content</code> - Alignment along main axis.</li>
                        <li><code>align-items</code> - Alignment along cross axis.</li>
                        <li><code>gap</code> - Space between flex items.</li>
                    </ul>
                </li>
                <li><strong>Item Properties:</strong>
                    <ul>
                        <li><code>flex</code> - Defines how items grow or shrink.</li>
                        <li><code>align-self</code> - Overrides container alignment for a single item.</li>
                    </ul>
                </li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>.flex-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
}
.flex-item {
    background: lightblue;
    padding: 20px;
    text-align: center;
    flex: 1;
}</code></pre>

            <h5>Live Output:</h5>
            <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; border:1px solid #ccc; padding:10px;">
                <div style="background:#25819f; padding:20px; flex:1;">Item 1</div>
                <div style="background:#25819f; padding:20px; flex:1;">Item 2</div>
                <div style="background:#25819f; padding:20px; flex:1;">Item 3</div>
            </div>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/flex.png') }}" alt="Flex Properties" class="content-image">
</div>
    <!-- GRID BASICS -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>4. Grid Basics</h2>
        </div>
        <div class="card-body">
            <p>
                CSS Grid is a two-dimensional layout system, perfect for designing layouts with rows and columns.
            </p>

            <h4>Important Grid Properties:</h4>
            <ul>
                <li><code>display: grid;</code> - Enables grid layout.</li>
                <li><code>grid-template-columns</code> - Defines number and size of columns.</li>
                <li><code>grid-template-rows</code> - Defines number and size of rows.</li>
                <li><code>gap</code> - Space between grid cells.</li>
                <li><code>grid-column</code> and <code>grid-row</code> - Position individual items.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
.grid-item {
    background: #3498db;
    color: white;
    text-align: center;
    padding: 20px;
}</code></pre>

            <h5>Live Output:</h5>
            <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:10px; border:1px solid #ccc; padding:10px;">
                <div style="background:#3498db; color:white; padding:20px;">1</div>
                <div style="background:#3498db; color:white; padding:20px;">2</div>
                <div style="background:#3498db; color:white; padding:20px;">3</div>
                <div style="background:#3498db; color:white; padding:20px;">4</div>
                <div style="background:#3498db; color:white; padding:20px;">5</div>
                <div style="background:#3498db; color:white; padding:20px;">6</div>
            </div>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/grid.png') }}" alt=" Grid Properties" class="content-image">
</div>
    <!-- SUMMARY -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Summary</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Display Property:</strong> Controls how elements are rendered (block, inline, etc.).</li>
                <li><strong>Positioning:</strong> Precisely controls element placement.</li>
                <li><strong>Flexbox:</strong> One-dimensional layouts (rows or columns).</li>
                <li><strong>Grid:</strong> Two-dimensional layouts (rows and columns).</li>
            </ul>
            <p>
                Mastering these layout techniques allows you to create modern, responsive, and well-structured websites.
            </p>
        </div>
    </div>
</div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.col-back-typo') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.spacing') }}'">
  Next =&gt;
</button>
@endsection
