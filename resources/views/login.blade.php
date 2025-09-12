<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login/Signup Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to top left, #514754 0, #441535 100%);
      color: whitesmoke;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .form-wrapper {
      position: relative;
      width: 100%;
      max-width: 400px;
      height: 550px;
      overflow: hidden;
    }

    .form-container {
      position: absolute;
      top: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.5);
      padding: 30px;
      border-radius: 20px;
      box-shadow: rgba(244, 233, 233, 0.3);
      transition: transform 0.6s ease, opacity 0.6s ease;
    }

    #login {
      transform: translateX(0);
      opacity: 1;
    }

    #signup {
      transform: translateX(100%);
      opacity: 0;
    }

    .show-login #login {
      transform: translateX(0);
      opacity: 1;
    }

    .show-login #signup {
      transform: translateX(100%);
      opacity: 0;
    }

    .show-signup #login {
      transform: translateX(-100%);
      opacity: 0;
    }

    .show-signup #signup {
      transform: translateX(0);
      opacity: 1;
    }

    h3 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="form-wrapper show-login" id="formWrapper">
    <!-- Login -->
    <div id="login" class="form-container mt-5">
      <h3><i>Login</i></h3>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}" />
          @error('email')
            <div style="color: red;">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3 position-relative">
  <label class="form-label">Password</label>
  <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password" required />
  <button type="button" id="toggleLoginPassword"
      style="position: absolute; right: 10px; top: 70%; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
    👁️
  </button>

    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>


      <!-- Give error if the password or email is wrong -->
        @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
          <div style="color: red; margin-bottom: 1rem;">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <button type="submit" class="btn btn-light w-100">Login</button>
        <hr />
        <button id="signupbtn" type="button" class="btn btn-danger w-100">Sign up</button>
      </form>
    </div>

    <!-- Signup -->
    <div id="signup" class="form-container">
      <h3><i>Signup</i></h3>
      <form method="POST" action="{{ route('signup') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name" required value="{{ old('name') }}" />
          @error('name')
            <div style="color: red;">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}" />
          @error('email')
            <div style="color: red;">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
        <div class="mb-3 position-relative">
  <label class="form-label">Password</label>
  <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password" required />
  <button type="button" id="toggleSignupPassword"
      style="position: absolute; right: 10px; top: 70%; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
    👁️
  </button>

    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>
</div>
        <div class="mb-3">
          <label for="purpose" class="form-label">Purpose</label>
          <select class="form-select" id="purpose" name="purpose">
            <option value="" disabled {{ old('purpose') ? '' : 'selected' }}>Select Purpose</option>
            <option value="Study" {{ old('purpose') == 'Study' ? 'selected' : '' }}>Study</option>
            <option value="Teaching" {{ old('purpose') == 'Teaching' ? 'selected' : '' }}>Teaching</option>
          </select>
          @error('purpose')
            <div style="color: red;">{{ $message }}</div>
          @enderror
        </div>

        {{-- Signup general errors --}}
        @if ($errors->any())
          <div style="color: red;">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <button type="submit" class="btn btn-danger w-100">Sign up</button>
        <button id="loginbtn" type="button" class="btn btn-secondary w-100 mt-2">Back to Login</button>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      let signupbtn = document.querySelector("#signupbtn");
      let loginbtn = document.querySelector("#loginbtn");
      let wrapper = document.querySelector("#formWrapper");

      signupbtn.addEventListener("click", () => {
        wrapper.classList.remove("show-login");
        wrapper.classList.add("show-signup");
      });

      loginbtn.addEventListener("click", () => {
        wrapper.classList.remove("show-signup");
        wrapper.classList.add("show-login");
      });

      // Optional: If there are errors, show the relevant form
      @if ($errors->any())
        @if (request()->routeIs('login'))
          wrapper.classList.remove("show-signup");
          wrapper.classList.add("show-login");
        @elseif (request()->routeIs('signup'))
          wrapper.classList.remove("show-login");
          wrapper.classList.add("show-signup");
        @endif
      @endif
    });
  
function setupPasswordToggle(inputId, btnId) {
    const passwordInput = document.getElementById(inputId);
    const toggleBtn = document.getElementById(btnId);

    toggleBtn.addEventListener('click', function() {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
}

setupPasswordToggle('loginPassword', 'toggleLoginPassword');
setupPasswordToggle('signupPassword', 'toggleSignupPassword');

  </script>
</body>
</html>