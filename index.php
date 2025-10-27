<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/userLogCSS.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="icon" type="image/png" href="../images/ibemFavicon.png" />
  <title>Login</title>
</head>

<body>
  <div class="card">
    <!-- SIGN IN FORM -->
    <div class="container active" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="website/register.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
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
      <form method="post" action="website/register.php">
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
  </div> <!-- END of .card -->

  <script>
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const signInForm = document.getElementById("signIn");
    const signUpForm = document.getElementById("signUp");
    const card = document.querySelector(".card"); // 👈 add this line

    signUpButton.addEventListener("click", () => {
      signInForm.classList.remove("active");
      signUpForm.classList.add("active");
      card.classList.add("flipped"); // 👈 add this
    });

    signInButton.addEventListener("click", () => {
      signUpForm.classList.remove("active");
      signInForm.classList.add("active");
      card.classList.remove("flipped"); // 👈 add this
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
