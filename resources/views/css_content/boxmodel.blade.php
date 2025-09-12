@extends('layouts.cssapp')

@section('title', 'CSS Box Model Explained')

@section('content')
<div class="container ">
    <h1> CSS Box Model</h1>
    <div class="card">
        
  <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/qvx2SZzoqqQ?si=T2TkxAeFIOItNAf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


</div>
    </div>
    <p>
        The CSS Box Model is a crucial concept for web design and layout. It defines how every element on a webpage
        is structured in terms of <strong>content, padding, border, and margin</strong>. 
        By understanding it, you can control spacing, alignment, and sizing effectively.
    </p>

    <div class="card p-3">
        <h2>Box Model Breakdown</h2>
        <p>Each HTML element can be thought of as a box consisting of the following layers:</p>
        <ul>
            <li><strong>Content:</strong> The actual content like text or images.</li>
            <li><strong>Padding:</strong> Space between the content and border.</li>
            <li><strong>Border:</strong> A visible edge surrounding the padding.</li>
            <li><strong>Margin:</strong> Space outside the border, separating this element from others.</li>
        </ul>
    </div>

    <!-- Example Box Model Demo -->
    <div class="card mt-4 p-3">
        <h3>Live Demo of Box Model</h3>
        <p>Hover over the box below to visualize each part of the box model clearly.</p>

        <div class="boxmodel-demo">
            <div class="box-content">Content Area</div>
        </div>

        <div class="mt-3">
            <p><strong>Explanation:</strong></p>
            <ul>
                <li><strong>Content (white area):</strong> Text "Content Area".</li>
                <li><strong>Padding (light blue):</strong> Space around the text inside the box.</li>
                <li><strong>Border (dark blue):</strong> The thick outline around the padding.</li>
                <li><strong>Margin (orange):</strong> Space outside the border separating this box from surrounding elements.</li>
            </ul>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/boxmodel.png') }}" alt="Box model" class="content-image">
</div>
    <!-- Example Code -->
    <div class="card mt-4 p-3">
        <h3>Example Code</h3>
        <pre><code>
.box-content {
    padding: 20px;            /* Padding: space between content and border */
    border: 5px solid #0056b3; /* Border: outline of the box */
    margin: 30px;              /* Margin: space outside the border */
    background-color: #ffffff; /* Background for content area */
}
        </code></pre>
    </div>

    <!-- Box Sizing Section -->
    <div class="card mt-4 p-3">
        <h3>Box Sizing Property</h3>
        <p>
            By default, width and height only include the <strong>content area</strong>.  
            Padding and border are added on top, making the final box larger.
        </p>
        <p>
            The <code>box-sizing</code> property changes this behavior:
        </p>
        <ul>
            <li><code>content-box</code> (default): width = content only.</li>
            <li><code>border-box</code>: width includes content, padding, and border.</li>
        </ul>

        <div class="box-sizing-example">
            <div class="content-box">Content-Box</div>
            <div class="border-box">Border-Box</div>
        </div>

        <pre><code>
/* Default box-sizing */
.content-box {
    box-sizing: content-box;
    width: 200px;
    padding: 20px;
    border: 5px solid blue;
}

/* Border-box sizing */
.border-box {
    box-sizing: border-box;
    width: 200px;
    padding: 20px;
    border: 5px solid green;
}
        </code></pre>
    </div>
</div>

<!-- Inline CSS to limit styles to this page -->
<style>
/* Box Model Demo */
.boxmodel-demo {
    margin: 30px;
    background-color: orange; /* Margin area visualization */
    padding: 20px;
}

.box-content {
    padding: 20px;
    border: 5px solid #201c39ff;
    background-color: #00085dff;
    text-align: center;
    font-weight: bold;
    color: #fbfbffff;
    transition: 0.3s ease;
}

.box-content:hover {
    background-color: #77aad2ff;
    border-color: #003f80;
}

/* Box Sizing Example */
.box-sizing-example {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.content-box,
.border-box {
    padding: 20px;
    border: 5px solid;
    text-align: center;
    background-color: #040145ff;
}

.content-box {
    box-sizing: content-box;
    border-color: blue;
}

.border-box {
    box-sizing: border-box;
    border-color: green;
}
</style>
<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.selectors') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.col-back-typo') }}'">
  Next =&gt;
</button>
@endsection
