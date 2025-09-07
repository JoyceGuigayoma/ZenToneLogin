<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create Account</title>
  <style>
    /* Reset default margin/padding */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Georgia', sans-serif;
    
    }

    body, html {
      height: 100%;
      background: linear-gradient(90deg, #5a99eb 0%, #2459c7 100%);
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding-top: 5px;
      color: white;
    }

    .container {
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

    .title {
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 7px;
      text-align: center;
    }

    .subtitle {
      font-weight: 400;
      font-size: 14px;
      text-align: center;
      margin-bottom: 30px;
      opacity: 0.85;
    }

    form {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      gap: 22px;
    }

    label {
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 1.5px;
      margin-bottom: 5px;
      display: block;
      text-transform: uppercase;
      opacity: 0.85;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 15px 20px;
      border-radius: 25px;
      border: none;
      background: rgba(255, 255, 255, 0.3);
      color: white;
      font-size: 14px;
      outline: none;
      transition: background 0.3s ease;
    }

    input[type="text"]::placeholder,
    input[type="email"]::placeholder,
    input[type="password"]::placeholder {
      color: rgba(255, 255, 255, 0.7);
      font-weight: 500;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      background: rgba(255, 255, 255, 0.5);
    }

    .submit-btn {
      margin-top: 20px;
      padding: 15px;
      width: 100%;
      border-radius: 12px;
      background: white;
      color: #2459c7;
      font-weight: 600;
      font-size: 16px;
      border: none;
      cursor: pointer;
      transition: background 0.3s ease, color 0.3s ease;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }

    .submit-btn:hover {
      background: #e6e6e6;
    }

    .footer-text {
      font-size: 13px;
      text-align: center;
      margin-top: auto;
      padding-top: 30px;
      opacity: 0.8;
    }

    .footer-text a {
      font-weight: 700;
      color: white;
      text-decoration: none;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .footer-text a:hover {
      text-decoration: underline;
      color: #d0d0d0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Create new Account</h1>
    <p class="subtitle">Enter your information to create your ZenTone account</p>

    <form action="#" method="POST" autocomplete="off">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" required />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="example@email.com" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your password" required />

      <button type="submit" class="submit-btn">Sign up</button>
    </form>

    <p class="footer-text">
      Already have an account? <a href="login.php">Sign in</a>
    </p>
  </div>
</body>
</html>
