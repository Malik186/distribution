<?php
$site = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
  <?php include "$site/modules/html.header/header.php"; ?>
  </head>
  <body>
    <main class="main-content  mt-0">
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold">Dashboard</h1>
                    <p class="fw-light mb-0">welcome to the Projects Dashboard</p>
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                <form class="login-form py-5 w-100" method="get" action="index.html">
                <div class="sign_up pre-hide">
                <div class="input-material-group mb-3">
                <input class="input-material" id="login-username" type="text" name="loginUsername" autocomplete="off" required data-validate-field="loginUsername">
                <label class="label-material" for="login-username">Username</label>
                </div>
                </div>
                <div class="sign_up_in">
                <div class="input-material-group mb-3">
                <input class="input-material" id="login-email" type="email" name="loginEmail" autocomplete="off" required data-validate-field="loginEmail">
                <label class="label-material" for="login-email">Email</label>
                </div>
                </div>
                <div class="sign_up_in">
                <div class="input-material-group mb-4">
                <input class="input-material" id="login-password" type="password" name="loginPassword" required data-validate-field="loginPassword">
                <label class="label-material" for="login-password">Password</label>
                </div>
                </div>
                <div class="sign_in">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                </div>
                <div class="sign_in">
                  <div class="text-center">
                    <input type="button" id="btn_signin" class="btn btn-primary w-100 mt-4 mb-0" value="Sign in"></input>
                  </div>
                </div>
                <div class="sign_up pre-hide">
                  <div class="text-center">
                    <input type="button" id="btn_signup" class="btn btn-primary w-100 mt-4 mb-0" value="Sign up"></input>
                  </div>
                </div>
                </form>

                </div>
                <div class="sign_up pre-hide">
                  <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                    <a href="javascript:;" class="text-primary font-weight-bold"><span id="swtch_to_signin">Sign in instead</span></a>
                  </p>
                  </div>
                  <div class="sign_in">
                  <p class="mb-4 text-sm mx-auto">
                    Already have an account?
                    <a href="javascript:;" class="text-primary font-weight-bold"><span id="swtch_to_signup">Sign up instead</span></a>
                  </p>
                </div>
              </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="login-footer text-center position-absolute bottom-0 start-0 w-100">
        <p class="text-white">Design by <a class="external" href="https://bootstrapious.com/p/admin-template">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
      <script src="pages/authentication/SignInup/SigninUp.js"></script>
      <script src="pages/authentication/SignInup/SignIn.handler.js"></script>
      <script src="pages/authentication/SignInup/SignUphandler.js"></script>

    </div>
    </main>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>