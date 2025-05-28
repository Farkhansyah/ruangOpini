<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ruang Opini</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="/berita/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      min-height: 100vh;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .form-login {
      background: #ffffff;
      padding: 40px 30px;
      border-radius: 10px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(30, 60, 114, 0.1);
    }

    .welcome-text {
      color: #1e3c72;
      margin-bottom: 30px;
      font-weight: 600;
      font-size: 28px;
      text-align: center;
      letter-spacing: 1px;
    }

    .welcome-text::after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background: #2a5298;
      margin: 15px auto 0;
      border-radius: 3px;
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-control {
      width: 100%;
      padding: 15px 15px 15px 50px;
      border: 2px solid #e1e5e9;
      border-radius: 8px;
      font-size: 16px;
      color: #2c3e50;
      background: #f8f9fa;
      transition: all 0.3s ease;
      font-weight: 400;
      box-sizing: border-box;
    }

    .form-control:focus {
      outline: none;
      border-color: #2a5298;
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
    }

    .form-control::placeholder {
      color: #7f8c8d;
      font-weight: 400;
    }

    .icon-container {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 15px;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #2a5298;
      font-size: 16px;
    }

    .login-btn {
      background: #2a5298;
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: 600;
      padding: 15px;
      width: 100%;
      font-size: 16px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }

    .login-btn:hover {
      background: #1e3c72;
    }

    .login-btn:active {
      background: #1a3569;
    }

    .login-btn i {
      margin-right: 8px;
      font-size: 16px;
    }

    .error-message {
      background: #dc3545;
      color: white;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      text-align: center;
      font-weight: 500;
    }

    .error-message i {
      margin-right: 8px;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
      .login-container {
        max-width: 95%;
        padding: 0 15px;
      }
      
      .form-login {
        padding: 30px 20px;
      }
      
      .welcome-text {
        font-size: 24px;
      }

      .form-control {
        padding: 12px 12px 12px 45px;
        font-size: 14px;
      }

      .icon-container {
        left: 12px;
        font-size: 14px;
      }

      .login-btn {
        padding: 12px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
    <div class="login-container">
      <form method="post" action="" class="form-login">
        <h1 class="welcome-text">Welcome</h1>
        
        <?php
          if(isset($_POST['btnSubmit'])){
            include 'koneksi.php';
            $pass  = md5($_POST['pass']);

            $cek=mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$_POST[username]'AND password='$pass'");

            $data = mysqli_fetch_array($cek);
            $result = mysqli_num_rows($cek);
            if($result==1){
              session_start();
              $_SESSION['user']=$data['username'];
              $_SESSION['iduser']=$data['id'];
              $_SESSION['level']=$data['level'];

              header('location:index.php');
            }
            else {
              echo "<div class='error-message'>
                    <i class='fas fa-exclamation-triangle'></i>
                    Username dan password Invalid
                  </div>";
            }
          }
        ?>
        
        <div class="form-group">
          <div class="icon-container">
            <i class="fas fa-user"></i>
          </div>
          <input type="text" name="username" class="form-control" autofocus required placeholder="Email/Username">
        </div>
        
        <div class="form-group">
          <div class="icon-container">
            <i class="fas fa-lock"></i>
          </div>
          <input type="password" name="pass" class="form-control" placeholder="Password" required>
        </div>
        
        <button type="submit" name="btnSubmit" class="login-btn">
          <i class="fas fa-sign-in-alt"></i>Login
        </button>
      </form>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>