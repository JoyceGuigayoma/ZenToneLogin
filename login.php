<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Form</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

  
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Georgia', sans-serif;
    background: linear-gradient(90deg, #5a99eb 0%, #2459c7 100%);
  }

  .container {
    max-width: 400px;
    margin: 40px auto;
    text-align: center;
    background: linear-gradient(90deg, #6f9de3 0%, #2f58c3 100%);
      border-top-left-radius: 60px;
      border-bottom-left-radius: 60px;
      width: 350px;
      padding: 40px 30px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      min-height: 600px;
      display: flex;
      flex-direction: column;
  }

  /* Logo (now picture) */
  .logo {
    width: 120px;
    height: 120px;
    margin: 0 auto 30px;
    border-radius: 50%;       /* makes it circular */
    overflow: hidden;         /* keeps image inside circle */
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2); /* optional shadow */
  }

  .logo img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ensures the picture fills the circle */
  }

  /* Form container with gradient & rounded corners */
  .form-box {
    background: linear-gradient(135deg, #4a90e2, #1a4bb8);
    border-radius: 60px 60px 0 0;
    padding: 40px 30px 50px;
    color: white;
  }

  .form-box h1 {
  font-family: 'Georgia', sans-serif;
  font-weight: 700; /* makes it bold */
  font-size: 2.4rem;
  margin-bottom: 10px;
}


  .form-box p.instructions {
    font-family: 'Georgia', sans-serif;
    font-weight: 400;
    font-size: 0.85rem;
    margin-bottom: 30px;
  }

  .form-group {
    text-align: left;
    margin-bottom: 25px;
    
  }

  .form-group label {
    font-family: 'Georgia', sans-serif;
    display: block;
    font-weight: 400;
    font-size: 0.8rem;
    letter-spacing: 0.1em;
    margin-bottom: 8px;
   
  }

  input[type="text"],
  input[type="password"] {
    font-family: 'Georgia', sans-serif;
    width: 90%;
    padding: 12px 20px;
    border-radius: 20px;
    border: none;
    background: rgba(255 255 255 / 0.3);
    font-size: 1rem;
    color: white;
    outline: none;
    transition: background 0.3s ease;
  }

  input[type="text"]::placeholder,
  input[type="password"]::placeholder {
    color: rgba(255 255 255 / 0.7);
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    background: rgba(255 255 255 / 0.5);
  }

  button.login-btn {
    font-family: 'Georgia', sans-serif;
    width: 100%;
    padding: 12px 0;
    background: white;
    color: #1a4bb8;
    font-weight: 700;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s ease;
  }

  button.login-btn:hover {
    background: #d3d3d3;
  }

  .form-footer {
    margin-top: 25px;
    font-size: 0.9rem;
    font-weight: 400;
    color: #d0d0d0;
  }

  .form-footer a {
    color: white;
    text-decoration: none;
    font-weight: 700;
    margin-left: 5px;
  }

  .form-footer a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="container">
    <!-- Logo -->
    <div class="logo" aria-label="Login logo">
      <img src="images/logo.jpg" alt="Logo" />
    </div>

    <!-- Login Form -->
    <div class="form-box">
      <h1>Login</h1>
      <p class="instructions">Enter your credentials to access your account</p>

      <form action="#" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="name">NAME</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required />
        </div>
        <div class="form-group">
          <label for="password">PASSWORD</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required />
        </div>
        <button class="login-btn" type="submit">Log in</button>
      </form>

      <div class="form-footer" style="margin-top: 20px;">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="form-footer" style="margin-top: 6px;">
        Don't have an account? <a href="register.php">Sign up</a>
      </div>
    </div>
  </div>
</body>
</html>

