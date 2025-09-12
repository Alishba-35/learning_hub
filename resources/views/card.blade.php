<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Languages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
  <div class="container">
    <div class="card">
      <img src="{{asset('images/html.png')}}" class="card-img-top" alt="HTML">
      <div class="card-body">
        <p class="card-text">HTML (HyperText Markup Language) is the standard language for creating the structure of web
          pages using elements like headings, paragraphs, links, and images.</p> <button class="btn btn-primary"><a
            style="text-decoration: none; color:whitesmoke"
            href="{{ url('htm_content/introduction') }}">Start</a></button>
      </div>
    </div>
    <div class="card">
      <img src="{{ asset('images/css.png') }}" class="card-img-top" alt="CSS">
      <div class="card-body">
        <p class="card-text">CSS (Cascading Style Sheets) is used to style and design web pages by controlling layout,
          colors, fonts, and responsiveness.</p><button class="btn btn-primary"><a
            style="text-decoration: none; color:whitesmoke"
            href="{{ url('css_content/intro') }}">Start</a></button>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('images/JavaScript-logo.png')}}" class="card-img-top" alt="JavaScript">
      <div class="card-body">
        <p class="card-text">JavaScript is a programming language that makes websites interactive by working with HTML
          and CSS to add animations, forms, and dynamic content.</p> <button class="btn btn-primary"><a
            style="text-decoration: none; color:whitesmoke"
            href="{{ url('js_content/introduction') }}">Start</a></button>
      </div>
    </div>
    <div class="card">
      <img src="{{asset('images/cpp.png')}}" class="card-img-top" alt="C++">
      <div class="card-body">
        <p class="card-text">C++ is a fast and powerful programming language that supports object-oriented programming,
          making it ideal for building software, games, and operating systems.</p>
       <button class="btn btn-primary"><a
            style="text-decoration: none; color:whitesmoke"
            href="{{ url('cpp_content/intro') }}">Start</a></button>
      </div>
    </div>
  </div>
  <script src='{{ asset('js/lang_card.js') }}'></script>

</body>

</html>