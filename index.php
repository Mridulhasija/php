<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Login Dashboard</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />

  <script
    src="https://kit.fontawesome.com/6b4b2f0d79.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="left">
      <div class="logo">
        <i class="fa-solid fa-shield-halved"></i>
        SecureAuth
      </div>

      <h1>Enterprise Authentication Platform</h1>

      <p>
        Securely manage your organization's authentication with
        enterprise-grade security, multi-factor authentication and seamless
        user management.
      </p>

      <div class="features">
        <div class="feature">
          <i class="fa-solid fa-lock"></i>
          <span>End-to-End Encryption</span>
        </div>

        <div class="feature">
          <i class="fa-solid fa-fingerprint"></i>
          <span>Multi-Factor Authentication</span>
        </div>

        <div class="feature">
          <i class="fa-solid fa-cloud"></i>
          <span>Cloud Security</span>
        </div>

        <div class="feature">
          <i class="fa-solid fa-user-shield"></i>
          <span>Role Based Access</span>
        </div>
      </div>
    </div>

    <div class="right">
      <div class="card">
        <h2>Welcome Back</h2>

        <p class="subtitle">Sign in to continue to your dashboard</p>

        <form method="post" action="./connection.php">
          <label>Email Address</label>

          <div class="input-box">
            <i class="fa-solid fa-envelope"></i>
            <input name="email" type="email" placeholder="name@company.com" />
          </div>

          <label>Password</label>

          <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input name="password" type="password" placeholder="••••••••" />
            <i class="fa-solid fa-eye eye"></i>
          </div>

          <div class="options">
            <label class="remember">
              <input type="checkbox" />
              Remember Me
            </label>

            <a href="#">Forgot Password?</a>
          </div>

          <button class="login-btn">Sign In</button>
        </form>

        <div class="signup">
          Don't have an account?
          <a href="#">Create Account</a>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
</script>

</html>