@extends('layouts.apphtml')

@section('title', 'Div, span, list')

@section('content')
   




    <!-- Page content -->


<div class="container">
    <div class="container">
        
  
  <header>
    <h1> Div, Span, and Lists </h1>
    <p>The explanations of &lt;div&gt;, &lt;span&gt;, and HTML lists along with their example outputs.</p>
  </header>
<div class="card">
      <div class="container" style=" justify-content: center;">
<iframe width="650" height="400" src="https://www.youtube.com/embed/WbnCll6vvw4?si=YYznkSKIxVtI7ZTS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


</div>
</div>
  <main>
    <div id="div" class="card">
    <section>
      <h2>1. The &lt;div&gt; Tag</h2>
      <p>&lt;div&gt; is a <strong>block-level</strong> element used to group larger sections of content.</p>
      <pre><code>&lt;div class="container"&gt;
  &lt;h2&gt;Section Title&lt;/h2&gt;
  &lt;p&gt;This is a block of content grouped inside a div.&lt;/p&gt;
&lt;/div&gt;</code></pre>
<h3>OUTPUT:</h3>
      <div class="output-block">
        <h2>Section Title</h2>
        <p>This is a block of content grouped inside a div.</p>
      </div>
    </section>
</div>
<div id="span" class="card">
    <section>
      <h2>2. The &lt;span&gt; Tag</h2>
      <p>&lt;span&gt; is an <strong>inline</strong> element used to style small portions of text.</p>
      <pre><code>&lt;p&gt;This is a &lt;span class="highlight"&gt;highlighted text&lt;/span&gt; inside a paragraph.&lt;/p&gt;</code></pre>
      <h3>OUTPUT:</h3>
      <div class="output-block">
        <p>This is a <span class="highlight">highlighted text</span> inside a paragraph.</p>
      </div>
    </section>
</div>
<div id="list" class="card">
    <section>
      <h2>3. HTML Lists</h2>
      <div class="container" style=" justify-content: center;">
<iframe width="600" height="400" src="https://www.youtube.com/embed/-QuK8taGLCs?si=T3BcSv3Pj69o0wwN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>

</div>
      <div class="card">
      <h3>3.1 Ordered List (&lt;ol&gt;)</h3>
      <pre><code>&lt;ol&gt;
  &lt;li&gt;First Item&lt;/li&gt;
  &lt;li&gt;Second Item&lt;/li&gt;
  &lt;li&gt;Third Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<h3>OUTPUT:</h3>
      <div class="output-block">
        <ol>
          <li>First Item</li>
          <li>Second Item</li>
          <li>Third Item</li>
        </ol>
      </div>
</div>
<div class="card">
      <h3>3.2 Unordered List (&lt;ul&gt;)</h3>
      <pre><code>&lt;ul&gt;
  &lt;li&gt;Item A&lt;/li&gt;
  &lt;li&gt;Item B&lt;/li&gt;
  &lt;li&gt;Item C&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<h3>OUTPUT:</h3>
      <div class="output-block">
        <ul>
          <li>Item A</li>
          <li>Item B</li>
          <li>Item C</li>
        </ul>
      </div>
</div>
<div class="card">
      <h3>3.3 Description List (&lt;dl&gt;)</h3>
      <pre><code>&lt;dl&gt;
  &lt;dt&gt;HTML&lt;/dt&gt;
  &lt;dd&gt;HyperText Markup Language&lt;/dd&gt;
  &lt;dt&gt;CSS&lt;/dt&gt;
  &lt;dd&gt;Cascading Style Sheets&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
      <div class="output-block">
        <dl>
          <dt>HTML</dt>
          <dd>HyperText Markup Language</dd>
          <dt>CSS</dt>
          <dd>Cascading Style Sheets</dd>
        </dl>
      </div>
    </section>
    </div> </main>
    <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('htm_content.semantic') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('htm_content.table-form') }}'">
  Next =&gt;
</button>
    </div>
 




</div>


   

  <!-- ==========================
       SCRIPT SECTION
  =========================== -->




   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection