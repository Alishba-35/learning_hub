@extends('layouts.cssapp')

@section('title', 'CSS Spacing and Responsive Design')

@section('content')
<div class="container ">
    <h1 class="text-center ">CSS Spacing & Responsive Design</h1>

    <!-- INTRODUCTION -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>Introduction</h2>
        </div>
        <div class="card-body">
            <p>
                Spacing and responsive design are essential in creating clean, readable, and user-friendly web layouts.  
                Proper use of <strong>margin</strong>, <strong>padding</strong>, and responsive units ensures that your website looks great on all devices and screen sizes.
            </p>
        </div>
        <div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/o273rdc4yi4?si=kbtA7EhY1Am7dRHC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
    </div>

    <!-- SPACING: MARGIN & PADDING -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>1. Spacing - Margin and Padding</h2>
        </div>
        <div class="card-body">
            <p>
                In CSS, <strong>margin</strong> and <strong>padding</strong> are used to create space around elements.
            </p>

            <ul>
                <li><strong>Margin:</strong> Space <em>outside</em> an element's border.</li>
                <li><strong>Padding:</strong> Space <em>inside</em> an element's border, between the content and the border.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>.box {
    background: lightblue;
    margin: 20px;      /* Adds space outside the box */
    padding: 15px;     /* Adds space inside the box */
}</code></pre>

            <h5>Live Output:</h5>
            <div style="border:1px solid #ccc; padding:10px;">
                <div style="background:#444474; margin:20px; padding:15px;">
                    This box has 20px margin and 15px padding.
                </div>
            </div>
        </div>
    </div>

    <!-- SHORTHAND PROPERTIES -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>2. Shorthand Properties for Margin and Padding</h2>
        </div>
        <div class="card-body">
            <p>
                You can use shorthand syntax for setting margins or padding for all sides of an element in a single line:
            </p>

            <table >
                <thead>
                    <tr>
                        <th>Syntax</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><code>margin: 10px;</code></td><td>All sides are 10px.</td></tr>
                    <tr><td><code>margin: 10px 20px;</code></td><td>Top/Bottom = 10px, Left/Right = 20px.</td></tr>
                    <tr><td><code>margin: 10px 20px 30px;</code></td><td>Top = 10px, Left/Right = 20px, Bottom = 30px.</td></tr>
                    <tr><td><code>margin: 10px 20px 30px 40px;</code></td><td>Top = 10px, Right = 20px, Bottom = 30px, Left = 40px (clockwise).</td></tr>
                </tbody>
            </table>

            <h5>Live Output:</h5>
            <div style="border:1px solid #ccc; padding:10px;">
                <div style="background:#52a752; margin:10px;">margin: 10px;</div>
                <div style="background:#6abcd7; margin:10px 20px;">margin: 10px 20px;</div>
                <div style="background:#d76576; margin:10px 20px 30px;">margin: 10px 20px 30px;</div>
                <div style="background:#b7b759; margin:10px 20px 30px 40px;">margin: 10px 20px 30px 40px;</div>
            </div>
        </div>
    </div>

    <!-- RESPONSIVE DESIGN -->
    <div class="card mb-4">
        <div class="card-header">
            <h2>3. Responsive Design</h2>
        </div>
        <div class="card-body">
            <p>
                Responsive design ensures your website adjusts gracefully to different screen sizes and devices like desktops, tablets, and smartphones.
            </p>
<div class="container" style=" justify-content: center;">
<iframe width="650" height="325" src="https://www.youtube.com/embed/2IV08sP9m3U?si=LTLbPO8NC4zyuhu2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> </div>
            <h4>3.1 Media Queries Basics</h4>
            <p>
                Media queries let you apply styles only when certain conditions (like screen width) are met.
            </p>

            <pre><code>@media (max-width: 600px) {
    body {
        background-color: lightblue;
    }
}</code></pre>

            <p>
                In this example, when the screen width is <strong>600px or less</strong>, the background color will change to light blue.
            </p>

            <h5>Live Demo:</h5>
            <div style="border:1px solid #ccc; padding:10px;">
                <p>Resize the browser window below 600px to see the effect.</p>
            </div>

            <style>
                @media (max-width: 600px) {
                    .responsive-demo {
                        background-color: lightblue !important;
                    }
                }
            </style>

            <div class="responsive-demo" style="border:1px solid #000; padding:15px; margin-top:10px;">
                This box will change color on smaller screens (under 600px width).
            </div>

            <hr>

            <h4>3.2 Relative Units</h4>
            <p>
                Relative units scale elements based on factors like parent size or viewport size:
            </p>

            <ul>
                <li><code>em</code> - Relative to the font size of the element.</li>
                <li><code>rem</code> - Relative to the root font size (usually the <code>&lt;html&gt;</code> element).</li>
                <li><code>%</code> - Percentage relative to the parent element's size.</li>
                <li><code>vh</code> - Relative to 1% of the viewport height.</li>
                <li><code>vw</code> - Relative to 1% of the viewport width.</li>
            </ul>

            <h5>Example Code:</h5>
            <pre><code>.relative-example {
    font-size: 1.5em;   /* 1.5 times the parent font size */
    padding: 2rem;      /* 2 times the root font size */
    width: 50%;         /* 50% of parent width */
    height: 20vh;       /* 20% of the viewport height */
}</code></pre>

            <h5>Live Output:</h5>
            <div style="border:1px solid #ccc; padding:10px; width:100%; height:auto;">
                <div style="font-size:1.5em; padding:2rem; width:50%; height:20vh; background:lightcoral;">
                    Responsive Box using em, rem, %, vh
                </div>
            </div>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/unit_rd.png') }}" alt="units" class="content-image">
</div>
    <!-- SUMMARY -->
    <div class="card mb-4">
        <div class="card-header ">
            <h2>Summary</h2>
        </div>
        <div class="card-body">
            <ul>
                <li><strong>Margin & Padding:</strong> Control spacing outside and inside elements.</li>
                <li><strong>Shorthand Properties:</strong> Set multiple sides' spacing in a single line.</li>
                <li><strong>Media Queries:</strong> Adapt styles for different screen sizes.</li>
                <li><strong>Relative Units:</strong> Make layouts flexible and scalable.</li>
            </ul>
            <p>
                Combining proper spacing with responsive design techniques creates clean, scalable, and mobile-friendly websites.
            </p>
        </div>
    </div>
</div>
 <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.layout') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.pseudo') }}'">
  Next =&gt;
</button>
@endsection




 <!-- <div class="container" style=" justify-content: center;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/sqJ6xZ9mUwE?si=31X9AcnrEKtsCtm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->