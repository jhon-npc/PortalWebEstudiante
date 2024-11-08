<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="assets/images/insignia.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/estilosLogin.css">
</head>
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Login de usuario</h3>
      
                    <!-- Sign In Form -->
                    <form action="" method="post">
                      <?php 

                        include("controller/login_user.php");
                        
                      ?>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
                        <label for="usuario">Usuario</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                      </div>
                      <div class="d-grid">
                        <input name="btn_login" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" value="ENTRAR">
                        <!--  <div class="text-center">
                          <a class="small" href="registro.php">Registrate aqui!</a>
                        </div>  -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        
</body>
</html>