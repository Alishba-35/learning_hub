@extends('layouts.apphtml')

@section('title', 'Semantic, NON semantic')

@section('content')
   



  <!-- Page content -->


<div class="container">
    <div class="container">

<div class="card">
  <header>
    <h1>Semantic and Non-Semantic HTML Tags</h1>
    <p>Semantic tags in HTML clearly describe the meaning and purpose of the content they contain, making the code more readable, accessible, and SEO-friendly, such as <code>&lt;header&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;nav&gt;</code>, and <code>&lt;footer&gt;</code>. Non-semantic tags, like <code>&lt;div&gt;</code> and <code>&lt;span&gt;</code>, do not provide any inherent meaning and are mainly used for styling or grouping elements without indicating their role in the webpage structure.
</p>
  </header>
</div>
<div class="card">
  <h4>Semantic and Non-Semantic Element</h4>
  <div class="container" style=" justify-content: center;">
  <iframe width="650" height="330" src="https://www.youtube.com/embed/e4Yxc9FPHdc?si=Fg6bb544rpoIMZdh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


</div></div>
  <main>
    <div class="card">
    <section id="sem">
      <h2>1. Semantic Tags</h2>
      <p>Semantic tags clearly describe their meaning in a human and machine-readable way. They improve SEO, accessibility, and code readability by providing context.</p>

      <h3>Examples of Semantic Tags</h3>
      <table>
        <tr>
          <th>Tag</th>
          <th>Description</th>
        </tr>
        <tr><td>&lt;header&gt;</td><td>Represents the header section of a webpage or a section.</td></tr>
        <tr><td>&lt;footer&gt;</td><td>Represents the footer section of a webpage or a section.</td></tr>
        <tr><td>&lt;article&gt;</td><td>Represents self-contained content like a blog post or news article.</td></tr>
        <tr><td>&lt;section&gt;</td><td>Represents a thematic grouping of content.</td></tr>
        <tr><td>&lt;nav&gt;</td><td>Represents a section for navigation links.</td></tr>
        <tr><td>&lt;aside&gt;</td><td>Represents secondary or sidebar content.</td></tr>
        <tr><td>&lt;main&gt;</td><td>Represents the main content of the document.</td></tr>
        <tr><td>&lt;figure&gt;</td><td>Represents self-contained content, such as images with captions.</td></tr>
        <tr><td>&lt;figcaption&gt;</td><td>Provides a caption for a &lt;figure&gt; element.</td></tr>
        <tr><td>&lt;mark&gt;</td><td>Highlights text for reference purposes.</td></tr>
        <tr><td>&lt;time&gt;</td><td>Represents a specific time or date.</td></tr>
        <tr><td>&lt;summary&gt;</td><td>A summary, often used with &lt;details&gt;.</td></tr>
        <tr><td>&lt;details&gt;</td><td>Used to create an expandable content area.</td></tr>
      </table>

      <h3>Example of Semantic HTML</h3>
      <pre><code>&lt;header&gt;
  &lt;h1&gt;My Blog&lt;/h1&gt;
  &lt;nav&gt;
    &lt;a href="#home"&gt;Home&lt;/a&gt;
    &lt;a href="#about"&gt;About&lt;/a&gt;
  &lt;/nav&gt;
&lt;/header&gt;

&lt;main&gt;
  &lt;article&gt;
    &lt;h2&gt;Semantic HTML Importance&lt;/h2&gt;
    &lt;p&gt;Semantic tags make the web more accessible and structured.&lt;/p&gt;
  &lt;/article&gt;

  &lt;aside&gt;
    &lt;h3&gt;Related Articles&lt;/h3&gt;
    &lt;ul&gt;
      &lt;li&gt;&lt;a href="#"&gt;HTML Basics&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;SEO Tips&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/aside&gt;
&lt;/main&gt;

&lt;footer&gt;
  &lt;p&gt;&amp;copy; 2025 My Blog. All Rights Reserved.&lt;/p&gt;
&lt;/footer&gt;
</code></pre>
    </section>
</div>
<div class="text-center">
      
      <img src="{{ asset('images/semantic.png') }}" alt="Semantic tags" class="content-image">
    </div>
<div class="card">
    <section id="non-sem">
      <h2>2. Non-Semantic Tags</h2>
      <p>Non-semantic tags do <strong>not</strong> provide meaning about their content. They are used for styling or layout purposes only.</p>

      <h3>Examples of Non-Semantic Tags</h3>
      <table>
        <tr>
          <th>Tag</th>
          <th>Description</th>
        </tr>
        <tr><td>&lt;div&gt;</td><td>A generic block-level container used to group content.</td></tr>
        <tr><td>&lt;span&gt;</td><td>A generic inline container used to style specific text or content.</td></tr>
      </table>

      <h3>Example of Non-Semantic HTML</h3>
      <pre><code>&lt;div class="header"&gt;
  &lt;div class="logo"&gt;My Blog&lt;/div&gt;
  &lt;div class="menu"&gt;
    &lt;span&gt;Home&lt;/span&gt;
    &lt;span&gt;About&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="content"&gt;
  &lt;div class="post"&gt;
    &lt;span class="title"&gt;Semantic vs Non-Semantic Tags&lt;/span&gt;
    &lt;p&gt;Using semantic tags makes your content more meaningful.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
    </section>
</div>
<div class="text-center">
      
      <img src="{{ asset('images/non-sem.png') }}" alt=" Non_Semantic tag" class="content-image">
    </div>
<div class="card">
    <section>
      <h2>3. Comparison Between Semantic and Non-Semantic Tags</h2>
      <table>
        <tr>
          <th>Aspect</th>
          <th>Semantic Tags</th>
          <th>Non-Semantic Tags</th>
        </tr>
        <tr>
          <td>Definition</td>
          <td>Clearly describe the role and meaning of the content.</td>
          <td>Do not describe the meaning of the content.</td>
        </tr>
        <tr>
          <td>SEO Benefit</td>
          <td><strong>High</strong> — Helps search engines understand structure.</td>
          <td><strong>Low</strong> — No added context for search engines.</td>
        </tr>
        <tr>
          <td>Accessibility</td>
          <td>Improves accessibility for screen readers.</td>
          <td>No special accessibility benefits.</td>
        </tr>
        <tr>
          <td>Readability</td>
          <td>Easier for developers to understand code structure.</td>
          <td>Harder to understand without CSS or comments.</td>
        </tr>
        <tr>
          <td>Examples</td>
          <td>&lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;nav&gt;</td>
          <td>&lt;div&gt;, &lt;span&gt;</td>
        </tr>
        <tr>
          <td>Usage</td>
          <td>For structuring content meaningfully.</td>
          <td>For styling and layout purposes.</td>
        </tr>
      </table>
    </section>
</div>

<div class="card">
    <section>
      <h2>4. Using Both Together</h2>
      <p>Best practice is to use semantic tags for structure and non-semantic tags for styling or grouping when needed.</p>

      <pre><code>&lt;header&gt;
  &lt;h1&gt;My Website&lt;/h1&gt;
  &lt;nav&gt;
    &lt;a href="#home"&gt;Home&lt;/a&gt;
    &lt;a href="#contact"&gt;Contact&lt;/a&gt;
  &lt;/nav&gt;
&lt;/header&gt;

&lt;main&gt;
  &lt;section&gt;
    &lt;article&gt;
      &lt;h2&gt;About Us&lt;/h2&gt;
      &lt;p&gt;We build amazing websites using semantic HTML.&lt;/p&gt;
    &lt;/article&gt;
  &lt;/section&gt;

  &lt;aside&gt;
    &lt;div class="sidebar-box"&gt;
      &lt;span&gt;Advertisement&lt;/span&gt;
    &lt;/div&gt;
  &lt;/aside&gt;
&lt;/main&gt;

&lt;footer&gt;
  &lt;p&gt;&amp;copy; 2025 My Website&lt;/p&gt;
&lt;/footer&gt;
</code></pre>
    </section>
    </div>
  </main>





    </div>
</div>
 


  



  <!-- ==========================
       SCRIPT SECTION
  =========================== -->




<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('htm_content.basictags') }}'">
  &lt;=Previous  
</button>
<button type="button" class="btn " style="float: right;" onclick="window.location='{{ route('htm_content.dls') }}'">
  Next =&gt;
</button>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection