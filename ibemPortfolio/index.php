<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="userLogCSS.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="icon" type="image/png" href="images/ibemFavicon.png" />
  <title>Login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f2f2f2;
    }

    .container {
      display: none;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 300px;
      text-align: center;
    }

    .container.active {
      display: block;
    }

    .input-group {
      margin: 15px 0;
      display: flex;
      align-items: center;
      border-bottom: 1px solid #ccc;
    }

    .input-group i {
      margin-right: 10px;
    }

    input {
      border: none;
      outline: none;
      flex: 1;
    }

    .btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background: #0056b3;
    }

    .link button {
      border: none;
      background: none;
      color: #007bff;
      cursor: pointer;
      text-decoration: underline;
    }

  </style>
</head>

<body>
  <!-- SIGN IN FORM -->
  <div class="container active" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <p class="recover"><a href="#">Recover Password</a></p>
      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>

    <div class="link">
      <p>Don’t have an account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>

  <!-- SIGN UP FORM -->
  <div class="container" id="signUp">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" placeholder="First Name" required />
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" placeholder="Last Name" required />
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signup" />
    </form>
    <div class="link">
      <p>Already have an account?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <script>
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const signInForm = document.getElementById("signIn");
    const signUpForm = document.getElementById("signUp");

    signUpButton.addEventListener("click", () => {
      signInForm.classList.remove("active");
      signUpForm.classList.add("active");
    });

    signInButton.addEventListener("click", () => {
      signUpForm.classList.remove("active");
      signInForm.classList.add("active");
    });

    // auto switch to sign-in after registration
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("registered") === "success") {
      signUpForm.classList.remove("active");
      signInForm.classList.add("active");
      alert("Registration successful! You can now sign in.");
    }
  </script>
</body>
</html>
