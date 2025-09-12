@extends('layouts.apphtml')

@section('title', 'Introduction to HTML')

@section('content')
    <h1>Introduction to HTML</h1>

    <div class="card p-3 mb-4">
        <h4>One Shot Lecture Basic to Advance</h4>
        <div class="text-center">
            <iframe width="600" height="315" src="https://www.youtube.com/embed/HcOc7P5BMi4?si=sdHtvXAcfuxZhDkD"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container">
        <h2>What is HTML?</h2>
        <p>
            <strong>HTML</strong> stands for <strong>HyperText Markup Language</strong>.
            It is the standard language used to <strong>create and structure web pages</strong>.
            HTML is <em>not a programming language</em>, but a <strong>markup language</strong> that uses
            <strong>tags</strong> to define content.
        </p>
    </div>

    <div class="card p-3 mb-3">
        <h3>Why HTML is Important</h3>
        <ul>
            <li>Every website you visit is built using HTML.</li>
            <li>It defines <strong>what appears on the page</strong>:
                <ul>
                    <li>Text</li>
                    <li>Images</li>
                    <li>Videos</li>
                    <li>Links</li>
                    <li>Forms</li>
                </ul>
            </li>
            <li>HTML works together with:
                <ul>
                    <li><strong>CSS</strong> → Styling</li>
                    <li><strong>JavaScript</strong> → Interactivity</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="card p-3 mb-3">
        <h3>How HTML Works</h3>
        <ol>
            <li>HTML code is written in a <code>.html</code> file.</li>
            <li>A web browser reads this code.</li>
            <li>The browser <strong>renders</strong> the page visually for the user.</li>
        </ol>
    </div>

    <div class="card p-3 mb-3">
        <h3>Self-Closing Tags</h3>
        <p>Some HTML tags <strong>do not need a closing tag</strong> because they do not have content inside.</p>
        <ul>
            <li><code>&lt;br&gt;</code> → Line break</li>
            <li><code>&lt;hr&gt;</code> → Horizontal rule</li>
            <li><code>&lt;img&gt;</code> → Image</li>
        </ul>
        <pre><code>&lt;img src="photo.jpg" alt="Sample Image"&gt;</code></pre>
    </div>

    <div class="card p-3 mb-3">
        <h1>Basic Structure of an HTML Document</h1>
        <p>
            Every HTML document follows a <strong>standard structure</strong> so that browsers can read and display it
            correctly.
        </p>
        <pre><code>&lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            &lt;head&gt;
              &lt;meta charset="UTF-8"&gt;
              &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
              &lt;title&gt;My First Web Page&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
              &lt;h1&gt;Hello World!&lt;/h1&gt;
              &lt;p&gt;This is my very first webpage.&lt;/p&gt;
            &lt;/body&gt;
            &lt;/html&gt;
            </code></pre>
    </div>

    <div class="card p-3 mb-3">
        <h2>Summary</h2>
        <table>
            <tr>
                <th>Concept</th>
                <th>Purpose</th>
            </tr>
            <tr>
                <td>HTML</td>
                <td>Creates structure and content of web pages.</td>
            </tr>
            <tr>
                <td>Tags</td>
                <td>Define specific elements (text, images, links, etc.).</td>
            </tr>
            <tr>
                <td>Doctype</td>
                <td>Tells browser the version of HTML being used.</td>
            </tr>
            <tr>
                <td>Head</td>
                <td>Metadata and configuration (not visible on page).</td>
            </tr>
            <tr>
                <td>Body</td>
                <td>All visible content like text, images, and videos.</td>
            </tr>
        </table>
    </div>

    <div class="text-center my-3">
        <img src="{{ asset('images/strhtml.png') }}" alt="Structure of HTML" class="content-image">
    </div>
    <button type="button" class="btn" style="float: left;" onclick="window.location='{{ route('card') }}'">
        &lt;=Back
    </button>
    <button type="button" class="btn " style="float: right;"
        onclick="window.location='{{ route('htm_content.basictags') }}'">
        Next =&gt;
    </button>
@endsection