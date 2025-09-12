@extends('layouts.apphtml')

@section('title', 'Basic Tags in HTML')

@section('content')
 <h1>Basic HTML Tags </h1>
  <div class="container">
   
     

<div class="card">
 
  <div class="container" style=" justify-content: center;">
<iframe width="600" height="315" src="https://www.youtube.com/embed/bUEykHfMMnc?si=qOYE4mtJ2By90BME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


</div></div>
<div class="card">
  <table>
    <tr>
      <th>Tag</th>
      <th>Description</th>
      <th>Example</th>
    </tr>
    <tr>
      <td>&lt;!DOCTYPE html&gt;</td>
      <td>Declares the document type and version of HTML.</td>
      <td>&lt;!DOCTYPE html&gt;</td>
    </tr>
    <tr>
      <td>&lt;html&gt;</td>
      <td>Root element of the HTML document.</td>
      <td>&lt;html&gt; ... &lt;/html&gt;</td>
    </tr>
    <tr>
      <td>&lt;head&gt;</td>
      <td>Contains metadata and links to resources.</td>
      <td>&lt;head&gt; ... &lt;/head&gt;</td>
    </tr>
    <tr>
      <td>&lt;title&gt;</td>
      <td>Sets the title of the webpage.</td>
      <td>&lt;title&gt;My Page&lt;/title&gt;</td>
    </tr>
    <tr>
      <td>&lt;meta&gt;</td>
      <td>Provides metadata like charset or viewport settings.</td>
      <td>&lt;meta charset="UTF-8"&gt;</td>
    </tr>
    <tr>
      <td>&lt;link&gt;</td>
      <td>Links external resources like CSS files.</td>
      <td>&lt;link rel="stylesheet" href="style.css"&gt;</td>
    </tr>
    <tr>
      <td>&lt;style&gt;</td>
      <td>Defines internal CSS styles.</td>
      <td>&lt;style&gt; body { background: #fff; } &lt;/style&gt;</td>
    </tr>
    <tr>
      <td>&lt;body&gt;</td>
      <td>Contains all the visible page content.</td>
      <td>&lt;body&gt; ... &lt;/body&gt;</td>
    </tr>
    <tr>
      <td>&lt;h1&gt; - &lt;h6&gt;</td>
      <td>Headings, with &lt;h1&gt; being the largest and &lt;h6&gt; the smallest.</td>
      <td>&lt;h1&gt;Heading&lt;/h1&gt;</td>
    </tr>
    <tr>
      <td>&lt;p&gt;</td>
      <td>Defines a paragraph.</td>
      <td>&lt;p&gt;This is a paragraph.&lt;/p&gt;</td>
    </tr>
    <tr>
      <td>&lt;br&gt;</td>
      <td>Inserts a line break.</td>
      <td>Line 1&lt;br&gt;Line 2</td>
    </tr>
    <tr>
      <td>&lt;hr&gt;</td>
      <td>Inserts a horizontal rule.</td>
      <td>&lt;hr&gt;</td>
    </tr>
    <tr>
      <td>&lt;a&gt;</td>
      <td>Defines a hyperlink.</td>
      <td>&lt;a href="https://example.com"&gt;Link&lt;/a&gt;</td>
    </tr>
    <tr>
      <td>&lt;img&gt;</td>
      <td>Embeds an image.</td>
      <td>&lt;img src="image.jpg" alt="Example"&gt;</td>
    </tr>
    <tr>
      <td>&lt;ul&gt; &amp; &lt;li&gt;</td>
      <td>Defines an unordered list and list items.</td>
      <td>&lt;ul&gt;&lt;li&gt;Item&lt;/li&gt;&lt;/ul&gt;</td>
    </tr>
    <tr>
      <td>&lt;ol&gt; &amp; &lt;li&gt;</td>
      <td>Defines an ordered list and list items.</td>
      <td>&lt;ol&gt;&lt;li&gt;First&lt;/li&gt;&lt;/ol&gt;</td>
    </tr>
    <tr>
      <td>&lt;div&gt;</td>
      <td>A block-level container for grouping content.</td>
      <td>&lt;div&gt;Content&lt;/div&gt;</td>
    </tr>
    <tr>
      <td>&lt;span&gt;</td>
      <td>An inline container for styling text.</td>
      <td>&lt;span&gt;Highlighted text&lt;/span&gt;</td>
    </tr>
    <tr>
      <td>&lt;strong&gt;</td>
      <td>Represents strong importance (bold).</td>
      <td>&lt;strong&gt;Important&lt;/strong&gt;</td>
    </tr>
    <tr>
      <td>&lt;em&gt;</td>
      <td>Emphasizes text (italic).</td>
      <td>&lt;em&gt;Emphasized&lt;/em&gt;</td>
    </tr>
    <tr>
      <td>&lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;</td>
      <td>Creates a table, rows, and cells.</td>
      <td>
        &lt;table&gt;
          &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;/tr&gt;
          &lt;tr&gt;&lt;td&gt;John&lt;/td&gt;&lt;/tr&gt;
        &lt;/table&gt;
      </td>
    </tr>
    <tr>
      <td>&lt;form&gt;</td>
      <td>Creates a form for user input.</td>
      <td>&lt;form action="#" method="post"&gt;...&lt;/form&gt;</td>
    </tr>
    <tr>
      <td>&lt;input&gt;</td>
      <td>Defines an input field.</td>
      <td>&lt;input type="text"&gt;</td>
    </tr>
    <tr>
      <td>&lt;textarea&gt;</td>
      <td>Multi-line text input field.</td>
      <td>&lt;textarea&gt;Text&lt;/textarea&gt;</td>
    </tr>
    <tr>
      <td>&lt;button&gt;</td>
      <td>Clickable button.</td>
      <td>&lt;button&gt;Click Me&lt;/button&gt;</td>
    </tr>
    <tr>
      <td>&lt;label&gt;</td>
      <td>Label for form elements.</td>
      <td>&lt;label for="name"&gt;Name:&lt;/label&gt;</td>
    </tr>
    <tr>
      <td>&lt;select&gt; &amp; &lt;option&gt;</td>
      <td>Dropdown menu with selectable options.</td>
      <td>&lt;select&gt;&lt;option&gt;Option&lt;/option&gt;&lt;/select&gt;</td>
    </tr>
    <tr>
      <td>&lt;script&gt;</td>
      <td>Embeds or links JavaScript.</td>
      <td>&lt;script&gt;console.log('Hello');&lt;/script&gt;</td>
    </tr>
    <tr>
      <td>&lt;header&gt;</td>
      <td>Defines a header section.</td>
      <td>&lt;header&gt;Site Header&lt;/header&gt;</td>
    </tr>
    <tr>
      <td>&lt;footer&gt;</td>
      <td>Defines a footer section.</td>
      <td>&lt;footer&gt;Site Footer&lt;/footer&gt;</td>
    </tr>
    <tr>
      <td>&lt;nav&gt;</td>
      <td>Defines a navigation section.</td>
      <td>&lt;nav&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/nav&gt;</td>
    </tr>
    <tr>
      <td>&lt;section&gt;</td>
      <td>Groups related content together.</td>
      <td>&lt;section&gt;Content Section&lt;/section&gt;</td>
    </tr>
    <tr>
      <td>&lt;article&gt;</td>
      <td>Independent self-contained content.</td>
      <td>&lt;article&gt;Article Content&lt;/article&gt;</td>
    </tr>
    <tr>
      <td>&lt;aside&gt;</td>
      <td>Side content related to main content.</td>
      <td>&lt;aside&gt;Related Info&lt;/aside&gt;</td>
    </tr>
  </table>

      </div>
      </div>
      <div class="card">
      <h2>1. HTML Document Structure</h2>
      <p>The basic structure of an HTML document includes <code>&lt;!DOCTYPE html&gt;</code>, <code>&lt;html&gt;</code>,
        <code>&lt;head&gt;</code>, and <code>&lt;body&gt;</code> tags.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My First Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Hello World!&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <p>Hello World!</p>
        </div>
      </div>

</div>
<div class="card">
      <!-- 2. Headings -->
      <h2>2. Headings</h2>
      <p>HTML has six heading levels, from <code>&lt;h1&gt;</code> (most important) to <code>&lt;h6&gt;</code> (least
        important).</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>
        </div>
      </div>

     </div>
<div class="card">
      <!-- 3. Paragraphs -->
      <h2>3. Paragraphs</h2>
      <p>Paragraphs are created using the <code>&lt;p&gt;</code> tag.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;p&gt;This is a paragraph of text.&lt;/p&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <p>This is a paragraph of text.</p>
        </div>
      </div>
</div>
<div class="card">
      <!-- 4. Line Break and Horizontal Rule -->
      <h2>4. Line Break &amp; Horizontal Rule</h2>
      <p>
        Use <code>&lt;br&gt;</code> for line breaks and <code>&lt;hr&gt;</code> for a horizontal separator line.
      </p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;p&gt;First line&lt;br&gt;Second line&lt;/p&gt;
&lt;hr&gt;
&lt;p&gt;After horizontal rule&lt;/p&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <p>First line<br>Second line</p>
          <hr>
          <p>After horizontal rule</p>
        </div>
      </div>

  

</div>
<div class="card">
      <!-- 5. Text Formatting -->
      <h2>5. Text Formatting</h2>
      <p>HTML provides tags for styling text.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;b&gt;Bold&lt;/b&gt;
&lt;strong&gt;Important&lt;/strong&gt;
&lt;i&gt;Italic&lt;/i&gt;
&lt;em&gt;Emphasized&lt;/em&gt;
&lt;u&gt;Underlined&lt;/u&gt;
&lt;mark&gt;Highlighted&lt;/mark&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <b>Bold</b> <br>
          <strong>Important</strong> <br>
          <i>Italic</i> <br>
          <em>Emphasized</em> <br>
          <u>Underlined</u> <br>
          <mark>Highlighted</mark>
        </div>
      </div>

   
</div>
<div class="card">
      <!-- 6. Links -->
      <h2>6. Links</h2>
      <p>Links are created using the <code>&lt;a&gt;</code> tag.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;a href="https://www.example.com" target="_blank"&gt;
Visit Example&lt;/a&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <a href="https://www.example.com" target="_blank">Visit Example</a>
        </div>
      </div>

   
</div>
<div class="card">
      <!-- 7. Images -->
      <h2>7. Images</h2>
      <p>Images are displayed using the <code>&lt;img&gt;</code> tag.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;img src="html.png" alt="Sample Image"&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <img style="width:40%" src="{{ asset('images/html.png') }}" alt="Sample Image">
        </div>
      </div>

      </div>
<div class="card">
      <!-- 8. Lists -->
      <h2>8. Lists</h2>
      <p>There are three main types of lists.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;ul&gt;
  &lt;li&gt;Apple&lt;/li&gt;
  &lt;li&gt;Banana&lt;/li&gt;
&lt;/ul&gt;

&lt;ol&gt;
  &lt;li&gt;First&lt;/li&gt;
  &lt;li&gt;Second&lt;/li&gt;
&lt;/ol&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <ul>
            <li>Apple</li>
            <li>Banana</li>
          </ul>
          <ol>
            <li>First</li>
            <li>Second</li>
          </ol>
        </div>
      </div>

</div>
<div class="card">
      <!-- 9. Table -->
      <h2>9. Table</h2>
      <p>Tables organize data into rows and columns.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Alice&lt;/td&gt;
    &lt;td&gt;22&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <table >
            <tr>
              <th>Name</th>
              <th>Age</th>
            </tr>
            <tr>
              <td>Alice</td>
              <td>22</td>
            </tr>
          </table>
        </div>
      </div>

      </div>
      <div class="card">

      <!-- 10. Form -->
      <h2>10. Form</h2>
      <p>Forms are used to collect user data.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;form&gt;
  &lt;label&gt;Name:&lt;/label&gt;
  &lt;input type="text"&gt;
  &lt;br&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <form>
            <label>Name:</label>
            <input style="background-color:#334155 ; color:white; border:none" type="text">
            <br><br>
            <input class="btn " type="submit" value="Submit">
          </form>
        </div>
      </div>

    </div>
    <div class="card">

      <!-- 11. Multimedia -->
      <h2>11. Multimedia</h2>
      <p>HTML supports embedding video and audio.</p>

      <div class="example">
        <div class="code-block">
          <pre>
<code>&lt;video controls width="200"&gt;
  &lt;source src="sample.mp4" type="video/mp4"&gt;
&lt;/video&gt;

&lt;audio controls&gt;
  &lt;source src="sample.mp3" type="audio/mpeg"&gt;
&lt;/audio&gt;</code>
</pre>
        </div>
        <div class="output-block">
          <video controls width="100%">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
          </video>
          <br><br>
          <audio>
            <source src="https://www.w3shttpschools.com/html/horse.ogg" type="audio/ogg">
          </audio>
        </div>
      </div>
    </div>
  
<button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('htm_content.introduction') }}'">
  &lt;=previous 
</button>
<button type="button" class="btn" style="float: right;" onclick="window.location='{{ route('htm_content.semantic') }}'">
  Next =&gt;
</button>
</div>




  <!-- ==========================
       SCRIPT SECTION
  =========================== -->








  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection