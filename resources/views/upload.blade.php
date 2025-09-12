
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Video</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ===== Background Styling ===== */
    body {
      background: url("{{ asset('images/background.png') }}") no-repeat center center fixed;
      background-size: cover;
      color: whitesmoke;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    /* ===== Card Container ===== */
    .form-wrapper {
      width: 100%;
      max-width: 480px;
    }

    .form-container {
      background: rgba(19, 13, 65, 0.7);
      padding: 40px 30px;
      border-radius: 20px;
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form-container:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.85);
    }

    /* ===== Header ===== */
    .form-container h3 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 1.6rem;
      color: #00e5ff;
    }

    /* ===== Input Fields ===== */
    .form-control,
    .form-select {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid #aaa;
      color: #f4ebebff;
      transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #00e5ff;
      box-shadow: 0 0 8px #00e5ff;
      color: #1f1b1bff;
    }

    /* ===== Fix Dropdown Colors ===== */
    .form-select {
      background: rgba(19, 13, 65, 0.8); /* Dark background */
      color: #ffffff; /* White text */
      border: 1px solid #00e5ff;
    }

    .form-select option {
      background: #130d41; /* Dark option background */
      color: #ffffff; /* White text for options */
    }

    /* ===== Buttons ===== */
    .btn-light {
      background: linear-gradient(135deg, #00bcd4, #007f8c);
      color: white;
      border: none;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-light:hover {
      background: linear-gradient(135deg, #0097a7, #006e74);
      transform: scale(1.02);
    }

    /* Back button */
    .btn {
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 999px;
      font-weight: 600;
      letter-spacing: 0.2px;
      cursor: pointer;
      box-shadow: 0 4px 14px rgba(124, 156, 255, 0.35);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateY(-2px);
    }

    /* ===== Alert Styling ===== */
    .alert {
      border-radius: 10px;
      backdrop-filter: blur(8px);
      background: rgba(0, 0, 0, 0.4);
      color: #ffffff;
      padding: 12px;
      text-align: center;
      margin-bottom: 15px;
    }

    /* Extra styling for smoothness */
    label {
      font-weight: 500;
      color: #878484ff;
    }

    /* Transition effect for input sections */
    #file_field,
    #url_field {
      transition: all 0.3s ease-in-out;
    }
  </style>
</head>
<body>

<div class="form-wrapper">
  <div class="form-container">
    <h3><i>Upload Your Own Video</i></h3>

    <!-- Success Message from Laravel -->
    @if(session('success'))
      <div class="alert alert-success" id="successAlert">
        {{ session('success') }}
      </div>
    @endif

    <!-- Error Messages -->
    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Upload Form -->
    <form id="uploadForm" method="POST" action="{{ route('videos.upload') }}" enctype="multipart/form-data">
      @csrf

      <!-- Video Title -->
      <div class="mb-3">
        <label for="title" class="form-label">Video Title</label>
        <input 
          type="text" 
          class="form-control" 
          id="title" 
          name="title" 
          placeholder="Enter video title" 
          required>
      </div>

      <!-- Upload Type -->
      <div class="mb-3">
        <label for="upload_type" class="form-label">Upload Type</label>
        <select 
          class="form-select" 
          id="upload_type" 
          name="upload_type" 
          required 
          onchange="toggleUploadFields()">
          <option value="" selected disabled>Select Type</option>
          <option value="file">Upload Video File</option>
          <option value="url">YouTube URL</option>
        </select>
      </div>

      <!-- File Upload Field -->
      <div class="mb-3" id="file_field" style="display: none;">
        <label for="video_file" class="form-label">Upload Video File</label>
        <input 
          type="file" 
          class="form-control" 
          id="video_file" 
          name="video_file" 
          accept="video/*">
      </div>

      <!-- YouTube URL Field -->
      <div class="mb-3" id="url_field" style="display: none;">
        <label for="youtube_url" class="form-label">YouTube URL</label>
        <input 
          type="url" 
          class="form-control" 
          id="youtube_url" 
          name="youtube_url" 
          placeholder="https://www.youtube.com/watch?v=...">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-light w-100">Upload Video</button>
      
      <!-- Back Button -->
      <div class="d-flex mt-3">
        <a href="{{ route('shorts_reels') }}" class="btn">Back</a>
      </div>
    </form>
  </div>
</div>

<script>
  // Toggle between file upload and YouTube URL
  function toggleUploadFields() {
    const uploadType = document.getElementById('upload_type').value;
    const fileField = document.getElementById('file_field');
    const urlField = document.getElementById('url_field');
    const videoFileInput = document.getElementById('video_file');
    const youtubeUrlInput = document.getElementById('youtube_url');

    if (uploadType === 'file') {
      fileField.style.display = 'block';
      videoFileInput.disabled = false;
      urlField.style.display = 'none';
      youtubeUrlInput.disabled = true;
      youtubeUrlInput.value = ''; 
    } else if (uploadType === 'url') {
      urlField.style.display = 'block';
      youtubeUrlInput.disabled = false;
      fileField.style.display = 'none';
      videoFileInput.disabled = true;
      videoFileInput.value = ''; 
    } else {
      fileField.style.display = 'none';
      videoFileInput.disabled = true;
      urlField.style.display = 'none';
      youtubeUrlInput.disabled = true;
    }
  }

  // Auto redirect after success
  document.addEventListener("DOMContentLoaded", function () {
    const successAlert = document.getElementById('successAlert');

    if (successAlert) {
      // Wait 2 seconds then redirect
      setTimeout(function () {
        window.location.href = "{{ route('shorts_reels') }}";
      }, 2000);
    }
  });
</script>

</body>
</html>
