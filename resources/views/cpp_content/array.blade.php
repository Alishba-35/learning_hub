@extends('layouts.cpp_app')

@section('title', 'C++ Arrays')

@section('content')

    <header>
        <div class="container">
            <h1 class="text-center">C++ Arrays</h1>
            <div class="text-center my-3">
                <iframe width="650" height="335" src="https://www.youtube.com/embed/ePJxpxsnkGw?si=tEmUHtDcP425KJEe"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <p class="lead text-center">
                Arrays allow storing multiple values of the <strong>same data type</strong> under one variable name.
                They are fundamental for handling lists of data efficiently in C++.
            </p>
        </div>
    </header>

    <main class="container">

        <!-- INTRODUCTION -->
        <section class="card my-4 p-3">
            <h2>Introduction to Arrays</h2>
            <p>
                An array is a collection of variables of the same type stored at contiguous memory locations.
                <br>They are useful for:
            </p>
            <ul>
                <li>Storing multiple values together</li>
                <li>Accessing values using an index</li>
                <li>Efficiently performing operations like search, sort, etc.</li>
            </ul>
            <div class="code" id="code-intro">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int numbers[5] = {10, 20, 30, 40, 50};

        cout &lt;&lt; "First element: " &lt;&lt; numbers[0] &lt;&lt; endl;
        cout &lt;&lt; "Last element: " &lt;&lt; numbers[4] &lt;&lt; endl;

        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-intro','out-intro')">Run demo</button>
                <button class="btn " onclick="clearOut('out-intro')">Clear</button>
            </div>
            <pre id="out-intro" class="output-box"></pre>
        </section>

        <!-- 1D ARRAY -->
        <section class="card my-4 p-3">
            <h2>1D Arrays</h2>
            <p>
                A 1D array is a simple list of elements. Each element can be accessed using its index.
            </p>
            <div class="code" id="code-1d">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int arr[5] = {1, 2, 3, 4, 5};

        cout &lt;&lt; "Array elements: ";
        for (int i = 0; i &lt; 5; i++) {
            cout &lt;&lt; arr[i] &lt;&lt; " ";
        }
        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-1d','out-1d')">Run demo</button>
                <button class="btn " onclick="clearOut('out-1d')">Clear</button>
            </div>
            <pre id="out-1d" class="output-box"></pre>
        </section>

        <!-- 2D ARRAY -->
        <section class="card my-4 p-3">
            <h2>2D Arrays</h2>
            <p>
                A 2D array is like a table with rows and columns. It is often used to represent matrices.
            </p>
            <div class="code" id="code-2d">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int matrix[2][3] = {
            {1, 2, 3},
            {4, 5, 6}
        };

        cout &lt;&lt; "Matrix:" &lt;&lt; endl;
        for (int i = 0; i &lt; 2; i++) {
            for (int j = 0; j &lt; 3; j++) {
                cout &lt;&lt; matrix[i][j] &lt;&lt; " ";
            }
            cout &lt;&lt; endl;
        }
        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn b" onclick="runCpp('code-2d','out-2d')">Run demo</button>
                <button class="btn " onclick="clearOut('out-2d')">Clear</button>
            </div>
            <pre id="out-2d" class="output-box"></pre>
        </section>
<div class="text-center my-3">
    <img style="height:100" src="{{ asset('images/cpp-array.png') }}" alt="Integration" class="content-image">
</div>
        <!-- COMMON ARRAY PROBLEMS -->
        <section class="card my-4 p-3">
            <h2>Common Array Problems</h2>
            <p>Below are common array operations with code and output.</p>

            <!-- MAXIMUM ELEMENT -->
            <h4>Find Maximum Element</h4>
            <div class="code" id="code-max">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int arr[5] = {10, 25, 5, 40, 15};
        int max = arr[0];

        for (int i = 1; i &lt; 5; i++) {
            if (arr[i] &gt; max) {
                max = arr[i];
            }
        }

        cout &lt;&lt; "Maximum element: " &lt;&lt; max;
        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-max','out-max')">Run demo</button>
                <button class="btn " onclick="clearOut('out-max')">Clear</button>
            </div>
            <pre id="out-max" class="output-box"></pre>

            <!-- MINIMUM ELEMENT -->
            <h4 class="mt-4">Find Minimum Element</h4>
            <div class="code" id="code-min">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int arr[5] = {10, 25, 5, 40, 15};
        int min = arr[0];

        for (int i = 1; i &lt; 5; i++) {
            if (arr[i] &lt; min) {
                min = arr[i];
            }
        }

        cout &lt;&lt; "Minimum element: " &lt;&lt; min;
        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-min','out-min')">Run demo</button>
                <button class="btn" onclick="clearOut('out-min')">Clear</button>
            </div>
            <pre id="out-min" class="output-box"></pre>

            <!-- SUM OF ELEMENTS -->
            <h4 class="mt-4">Find Sum of Array Elements</h4>
            <div class="code" id="code-sum">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int arr[5] = {1, 2, 3, 4, 5};
        int sum = 0;

        for (int i = 0; i &lt; 5; i++) {
            sum += arr[i];
        }

        cout &lt;&lt; "Sum of elements: " &lt;&lt; sum;
        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-sum','out-sum')">Run demo</button>
                <button class="btn " onclick="clearOut('out-sum')">Clear</button>
            </div>
            <pre id="out-sum" class="output-box"></pre>

            <!-- REVERSE ARRAY -->
            <h4 class="mt-4">Reverse an Array</h4>
            <div class="code" id="code-reverse">
                <pre>
    #include &lt;iostream&gt;
    using namespace std;

    int main() {
        int arr[5] = {1, 2, 3, 4, 5};

        cout &lt;&lt; "Original array: ";
        for (int i = 0; i &lt; 5; i++) {
            cout &lt;&lt; arr[i] &lt;&lt; " ";
        }

        cout &lt;&lt; "\nReversed array: ";
        for (int i = 4; i >= 0; i--) {
            cout &lt;&lt; arr[i] &lt;&lt; " ";
        }

        return 0;
    }
    </pre>
            </div>
            <div class="btn-row">
                <button class="btn " onclick="runCpp('code-reverse','out-reverse')">Run demo</button>
                <button class="btn " onclick="clearOut('out-reverse')">Clear</button>
            </div>
            <pre id="out-reverse" class="output-box"></pre>

        </section>

    </main>

    <!-- Styles -->
    <style>
        .code {
            background: #1e293b;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            font-family: "Fira Code", monospace;
            color: #e2e8f0;
            border: 1px solid #334155;
            margin-bottom: 20px;
        }

        .output-box {
            background: #0f172a;
            padding: 10px;
            border-radius: 6px;
            color: #10b981;
            border: 1px solid #334155;
            font-family: "Fira Code", monospace;
            margin-top: 10px;
            white-space: pre-wrap;
        }

        .btn-row {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .sub {
            margin-bottom: 10px;
            color: #94a3b8;
        }
    </style>

    <!-- JavaScript -->
    <script>
        const sampleOutputs = {
            'code-intro': `First element: 10
    Last element: 50`,

            'code-1d': `Array elements: 1 2 3 4 5`,

            'code-2d': `Matrix:
    1 2 3 
    4 5 6`,

            'code-max': `Maximum element: 40`,

            'code-min': `Minimum element: 5`,

            'code-sum': `Sum of elements: 15`,

            'code-reverse': `Original array: 1 2 3 4 5 
    Reversed array: 5 4 3 2 1`
        };

        function runCpp(codeId, outputId) {
            const outEl = document.getElementById(outputId);
            outEl.textContent = 'Running...';
            setTimeout(() => {
                outEl.textContent = sampleOutputs[codeId] || 'No output available for this code.';
            }, 300);
        }

        function clearOut(outputId) {
            document.getElementById(outputId).textContent = '';
        }
    </script>
<div class="d-flex justify-content-between">
        <button class="btn " onclick="window.location='{{ route('cpp_content.loops') }}'">&lt;= Previous</button>
        <button class="btn " onclick="window.location='{{ route('cpp_content.function') }}'">Next =&gt;</button>
    </div>
@endsection