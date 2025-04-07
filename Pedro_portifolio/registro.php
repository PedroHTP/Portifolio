<?php 
session_start();
if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado'] === true) {
        header("Location: ./index.php");
        exit;
    }
}

  include_once ("./models/head-registro.php");

?>

  <body>
    <div class="container">
      <!-- Navbar -->
      <nav>
        <h1></h1>
        <div class="link-group">
          <a
            id="github"
            href="https://github.com/PedroHTP"
            ><i class="ri-github-fill"></i
          ></a>
        </div>
      </nav>

      <!-- Fomulario de Registro-->
      <section class="signup-form">
        <div class="card">
          <h1>Cadastre-se</h1>
          <div class="input-group">
            <div class="username-input">
              <div class="input-box">
                <input
                  type="text"
                  id="username"
                  class="input"
                  placeholder=" "
                  maxlength="25"
                />
                <label for="username" class="input-label">Nome de Usuário</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="username_error"></p>
              </span>
            </div>
            <div class="email-input">
              <div class="input-box">
                <input type="text" id="email" class="input" placeholder=" " />
                <label for="email" class="input-label">Email</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="email_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="reg_password"
                  class="input"
                  placeholder=" "
                />
                <label for="reg_password" class="input-label">Senha</label>
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="reg_password_error"></p>
              </span>
            </div>
            <div class="password-input">
              <div class="input-box">
                <input
                  type="password"
                  id="conreg_password"
                  class="input"
                  placeholder=" "
                />
                <label for="conreg_password" class="input-label"
                  >Confirme sua Senha</label
                >
              </div>
              <span>
                <p class="mark">!</p>
                <p class="error-text" id="conreg_password_error"></p>
              </span>
            </div>
          </div>
          <div class="check-element">
            <input type="checkbox" name="reg-check" id="reg_check" />
            <label for="reg_check"
              >Esta conta só pode ser usada neste dispositivo.</label
            >
          </div>
          <button type="submit" id="signup_submit" class="btn" disabled>
            Cadastrar-se
          </button>
        </div>
      </section>


    <!-- Script JavaScript bem bacana -->
    <script src="./js/script-registro.js"></script>
  </body>
</html>