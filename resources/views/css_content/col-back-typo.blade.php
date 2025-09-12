@extends('layouts.cssapp')

@section('title', 'CSS Colors, Backgrounds, and Typography')

@section('content')
<div class="container">
    <h1 class="mb-4">CSS Colors, Backgrounds, and Typography</h1>
    <div class="card">
    <p>
        These three concepts are the foundation of visually engaging web design.
        They control how a website looks, how readable the text is, and how the overall user experience feels.
    </p></div>

    <!-- =========================
         COLORS SECTION
    =============================-->
    <div class="card ">
        <h2>1. CSS Colors</h2>
        <p>
            CSS colors define how text, backgrounds, borders, and other elements appear visually.
            You can define colors in different ways such as <strong>Named Colors</strong>, <strong>HEX Codes</strong>, 
            <strong>RGB</strong>, <strong>RGBA</strong>, <strong>HSL</strong>, and <strong>HSLA</strong>.
        </p>

        <h4>Different Ways to Define Colors:</h4>
        <ul>
            <li><strong>Named Colors:</strong> e.g., <code>color: red;</code></li>
            <li><strong>HEX Codes:</strong> e.g., <code>color: #ff0000;</code></li>
            <li><strong>RGB:</strong> e.g., <code>color: rgb(255,0,0);</code></li>
            <li><strong>RGBA:</strong> e.g., <code>color: rgba(255,0,0,0.5);</code> (with transparency)</li>
            <li><strong>HSL:</strong> e.g., <code>color: hsl(0,100%,50%);</code></li>
            <li><strong>HSLA:</strong> e.g., <code>color: hsla(0,100%,50%,0.5);</code></li>
        </ul>

        <h4 class="mt-3">Live Demo:</h4>
        <div class="text-colors-demo demo-box">
            <p>This text uses a <strong>named color</strong> (red).</p>
            <p class="hex">This text uses a <strong>HEX color</strong> (#3498db).</p>
            <p class="rgb">This text uses an <strong>RGB color</strong>.</p>
            <p class="rgba">This text uses <strong>RGBA color</strong> (semi-transparent red).</p>
            <p class="hsl">This text uses an <strong>HSL color</strong>.</p>
        </div>
    </div>
<div class="text-center my-3">
    <img src="{{ asset('images/color.png') }}" alt="Color" class="content-image">
</div>
    <!-- =========================
         BACKGROUNDS SECTION
    =============================-->
    <div class="card ">
        <h2>2. CSS Backgrounds</h2>
        <p>
            Backgrounds improve the visual depth of web elements. You can set solid colors, images, or gradient backgrounds.
        </p>
        
  
  
  
  <div class="container " style=" justify-content: center;"></div>
<iframe width="650" height="325" src="https://www.youtube.com/embed/-itttmX6HX0?si=NRp46p4Gnpnq3oGQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
        <h4>Background Properties:</h4>
        <ul>
            <li><code>background-color</code> - Sets a solid color.</li>
            <li><code>background-image</code> - Adds a background image.</li>
            <li><code>background-repeat</code> - Controls repetition of background images.</li>
            <li><code>background-size</code> - `cover`, `contain`, or custom dimensions.</li>
            <li><code>background-position</code> - Defines image placement.</li>
            <li><code>background-attachment</code> - `scroll` or `fixed` for parallax effects.</li>
            <li><code>linear-gradient</code> - Creates smooth color transitions.</li>
        </ul>

        <h4 class="mt-3">Live Demo:</h4>
        <div class="background-demo">
            <div class="bg-solid demo-box">Solid Color Background</div>
            <div class="bg-image demo-box">Image Background</div>
            <div class="bg-gradient demo-box">Gradient Background</div>
        </div>
    </div>

    <!-- =========================
         TYPOGRAPHY SECTION
    =============================-->
    <div class="card ">
        <h2>3. CSS Typography</h2>
        <p>
            Typography controls how text looks and feels on a webpage. 
            It impacts readability, aesthetics, and user engagement.
        </p>
<div class="container " style=" justify-content: center;"></div>
<iframe width="650" height="325" src="https://www.youtube.com/embed/jggV5PucL1A?si=zGX1D11FrtXiRy5r" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
        <h4>Common Typography Properties:</h4>
        <ul>
            <li><code>font-family</code> - Defines the font style.</li>
            <li><code>font-size</code> - Sets text size.</li>
            <li><code>font-weight</code> - `normal`, `bold`, `lighter`, or numeric (100-900).</li>
            <li><code>font-style</code> - `normal`, `italic`, or `oblique`.</li>
            <li><code>text-align</code> - Aligns text (`left`, `center`, `right`, `justify`).</li>
            <li><code>text-transform</code> - `uppercase`, `lowercase`, `capitalize`.</li>
            <li><code>line-height</code> - Vertical spacing between lines.</li>
            <li><code>letter-spacing</code> - Horizontal spacing between letters.</li>
            <li><code>word-spacing</code> - Horizontal spacing between words.</li>
            <li><code>text-decoration</code> - `underline`, `line-through`, `none`.</li>
        </ul>

        <h4 class="mt-3">Live Demo:</h4>
        <div class="typography-demo">
            <p class="font-family-demo">This text uses a custom font family with fallbacks.</p>
            <p class="font-size-demo">This text demonstrates different <strong>font sizes</strong>.</p>
            <p class="font-weight-demo">This text is bold using <code>font-weight</code>.</p>
            <p class="italic-demo">This text is italic using <code>font-style</code>.</p>
            <p class="uppercase-demo">this text is transformed to uppercase.</p>
            <p class="spacing-demo">This text has extra letter and word spacing.</p>
        </div>
    </div>

    <!-- =========================
         SUMMARY CARD
    =============================-->
    <div class="card ">
        <h2>Summary</h2>
        <ul>
            <li><strong>Colors:</strong> Control the visual mood and hierarchy of elements.</li>
            <li><strong>Backgrounds:</strong> Enhance depth using images, colors, and gradients.</li>
            <li><strong>Typography:</strong> Ensures readability, clarity, and aesthetic harmony.</li>
        </ul>
        <p>
            By mastering these concepts, you can create visually appealing and accessible web pages that engage users and improve the overall design.
        </p>
    </div>
</div>

<!-- Scoped Styles -->
<style>
/* Generic card and demo styling */
.demo-box {
    padding: 15px;
    margin: 10px 0;
    text-align: center;
    border-radius: 8px;
    color: white;
    font-weight: bold;
}

/* COLORS */
.text-colors-demo p {
    font-size: 16px;
    margin: 8px 0;
    color: red; /* Default color */
}
.text-colors-demo .hex { color: #3498db; }
.text-colors-demo .rgb { color: rgb(34, 193, 195); }
.text-colors-demo .rgba { color: rgba(255, 0, 0, 0.6); }
.text-colors-demo .hsl { color: hsl(120, 100%, 30%); }

/* BACKGROUNDS */
.bg-solid {
    background-color: lightblue;
    color: #000;
}
.bg-image {
    background-image: url('https://via.placeholder.com/300x150');
    background-size: cover;
    background-position: center;
}
.bg-gradient {
    background: linear-gradient(to right, #ff7e5f, #feb47b);
}

.background-demo {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}
.background-demo .demo-box {
    flex: 1 1 30%;
    min-width: 150px;
}

/* TYPOGRAPHY */
.font-family-demo {
    font-family: 'Roboto', Arial, sans-serif;
}
.font-size-demo {
    font-size: 24px;
}
.font-weight-demo {
    font-weight: bold;
}
.italic-demo {
    font-style: italic;
}
.uppercase-demo {
    text-transform: uppercase;
}
.spacing-demo {
    letter-spacing: 2px;
    word-spacing: 10px;
}

/* Ensure demo styles only affect demo areas */
.typography-demo p {
    padding: 5px 0;
}
</style>
<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('css_content.boxmodel') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('css_content.layout') }}'">
  Next =&gt;
</button>
@endsection
