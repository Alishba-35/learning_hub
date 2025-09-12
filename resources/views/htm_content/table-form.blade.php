@extends('layouts.apphtml')

@section('title', 'Table and Form')

@section('content')
   




  <!-- Page Content -->
  <div class="container my-4">
    <h1 class="mb-4">HTML Tables & Forms</h1>

    <!-- ===================== Table Section ===================== -->
    <div id="table">
      <!-- Intro Card -->
      <div class="card mb-4">
        <div class="card-body">
          <h2>1. HTML Tables</h2>
          <p>Tables display data in rows and columns.</p>
        </div>
      </div>

      <!-- Video Card -->
      <div class="card mb-4">
        <div class="card-body text-center">
          <iframe width="600" height="400" src="https://www.youtube.com/embed/e62D-aayveY?si=nknhT-X3gXs4sHSJ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>

      <!-- Basic Table Example -->
      <div class="card mb-4">
        <div class="card-body">
          <h5>Basic Table Example</h5>
          <pre>&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
    &lt;th&gt;City&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;25&lt;/td&gt;
    &lt;td&gt;New York&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Mary&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
    &lt;td&gt;London&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;</pre>

          <h3>Output:</h3>
          <table >
            <tr><th>Name</th><th>Age</th><th>City</th></tr>
            <tr><td>John</td><td>25</td><td>New York</td></tr>
            <tr><td>Mary</td><td>30</td><td>London</td></tr>
          </table>
        </div>
      </div>

      <!-- Advanced Table Example -->
      <div class="card mb-4">
        <div class="card-body">
          <h5>Advanced Table Example</h5>
          <pre>&lt;table&gt;
  &lt;caption&gt;Student Scores&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Name&lt;/th&gt;
      &lt;th&gt;Math&lt;/th&gt;
      &lt;th&gt;Science&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Alice&lt;/td&gt;
      &lt;td&gt;90&lt;/td&gt;
      &lt;td&gt;85&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Bob&lt;/td&gt;
      &lt;td&gt;80&lt;/td&gt;
      &lt;td&gt;88&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;Total&lt;/td&gt;
      &lt;td&gt;170&lt;/td&gt;
      &lt;td&gt;173&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
&lt;/table&gt;</pre>

          <h3>Output:</h3>
          <table>
            <caption style="color:white;">Student Scores</caption>
            <thead>
              <tr><th>Name</th><th>Math</th><th>Science</th></tr>
            </thead>
            <tbody>
              <tr><td>Alice</td><td>90</td><td>85</td></tr>
              <tr><td>Bob</td><td>80</td><td>88</td></tr>
            </tbody>
            <tfoot>
              <tr><td>Total</td><td>170</td><td>173</td></tr>
            </tfoot>
          </table>
        </div>
      </div>

      <!-- Image Card -->
      <div class="text-center">
       
          <img src="{{ asset('images/table.png') }}" alt="Table element" class="content-image">
        </div>
      
    </div>

    <!-- ===================== Form Section ===================== -->
    <div id="form">
      <!-- Intro Card -->
      <div class="card mb-4">
        <div class="card-body">
          <h2>2. HTML Form</h2>
          <p>
            In HTML, a form is a container that allows users to input data and submit it to a server for processing.
            Forms are essential for tasks like logging in, registering, searching, and submitting feedback. 
            The &lt;form&gt; element wraps all the input fields and defines how the data will be sent.
          </p>
        </div>
      </div>

      <!-- Video Card -->
      <div class="card mb-4">
        <div class="card-body text-center">
          <iframe width="600" height="400" src="https://www.youtube.com/embed/tLBlhp0SA_0?si=hC0ZMTO_Kx9jKc4x"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>

      <!-- Input Types Card -->
      <div class="card mb-4">
        <div class="card-body">
          <h3>HTML Input Types</h3>
          <ul>
            <li><strong>text:</strong> Single-line text input.</li>
            <li><strong>password:</strong> Hidden characters for passwords.</li>
            <li><strong>email:</strong> Email format validation.</li>
            <li><strong>tel:</strong> Telephone number input.</li>
            <li><strong>url:</strong> Website URL input.</li>
            <li><strong>search:</strong> Search field input.</li>
            <li><strong>number:</strong> Numeric input only.</li>
            <li><strong>range:</strong> Slider for numeric values.</li>
            <li><strong>color:</strong> Color picker.</li>
            <li><strong>radio:</strong> Select one from multiple choices.</li>
            <li><strong>checkbox:</strong> Select one or more options.</li>
            <li><strong>file:</strong> Upload files.</li>
            <li><strong>date:</strong> Pick a date.</li>
            <li><strong>datetime-local:</strong> Select date and time.</li>
            <li><strong>month:</strong> Select month and year.</li>
            <li><strong>week:</strong> Select week and year.</li>
            <li><strong>time:</strong> Select time.</li>
            <li><strong>submit:</strong> Submit the form.</li>
            <li><strong>reset:</strong> Reset the form fields.</li>
            <li><strong>button:</strong> Generic button.</li>
            <li><strong>image:</strong> Image as a submit button.</li>
            <li><strong>hidden:</strong> Hidden input (invisible).</li>
          </ul>
        </div>
      </div>

      <!-- Input Image Card -->
      <div class="text-center">
        
          <img src="{{ asset('images/input.png') }}" alt="input type" class="content-image">
        </div>
  

      <!-- Form Example Card -->
      <div class="card mb-4">
        <div class="card-body">
          <h3>Example Form</h3>
          <pre>&lt;form&gt;
  &lt;label for="name"&gt;Name:&lt;/label&gt;
  &lt;input type="text" id="name" name="name"&gt;

  &lt;label for="email"&gt;Email:&lt;/label&gt;
  &lt;input type="email" id="email" name="email"&gt;

  &lt;label&gt;Gender:&lt;/label&gt;
  &lt;input type="radio" name="gender" value="male"&gt; Male
  &lt;input type="radio" name="gender" value="female"&gt; Female

  &lt;label for="country"&gt;Country:&lt;/label&gt;
  &lt;select id="country" name="country"&gt;
    &lt;option&gt;USA&lt;/option&gt;
    &lt;option&gt;UK&lt;/option&gt;
    &lt;option&gt;India&lt;/option&gt;
  &lt;/select&gt;

  &lt;label for="message"&gt;Message:&lt;/label&gt;
  &lt;textarea id="message" name="message"&gt;&lt;/textarea&gt;

  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;</pre>

          <h3>Output:</h3>
          <form onsubmit="alert('Form submitted!'); return false;">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control mb-2">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control mb-2">

            <label>Gender:</label>
            <div class="mb-2">
              <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female"> Female
            </div>

            <label for="country">Country:</label>
            <select id="country" name="country" class="form-select mb-2">
              <option>USA</option>
              <option>UK</option>
              <option>India</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control mb-2" rows="4"></textarea>

            <input type="submit" class="btn " value="Submit">
          </form>
        </div>
      </div>
    </div>
    <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('htm_content.dls') }}'">
  &lt;=Previous  
</button>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection