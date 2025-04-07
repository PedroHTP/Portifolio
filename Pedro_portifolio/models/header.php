<?php 
    echo "<script>
            let logado = false;
        </script>";
    if (isset($_SESSION['logado'])) {
        if ($_SESSION['logado'] === true) {
            echo "<script>
                logado = true;
            </script>";
        }
    } 
?>

<nav
  id="navbar-top"
  class="navbar navbar-expand-lg navbar-light bg-white sticky-top"
>
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold fs-2" href="#" style="color: #3f396d"
      >PEDRO HENRIQUE</a
    >
    <button
      class="nav-menu d-md-none"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
    >
      <i class="bi bi-menu-button-fill"></i>
    </button>
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarNav"
    >
      <ul class="navbar-nav gap-4" style="font-size: 1.1rem">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#service">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonial">Depoimentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog</a>
        </li>
      </ul>
    </div>
    <button class="c-btn ms-4 py-2 px-4 rounded-pill d-none d-md-block">Contato</button>
    <div class="flex justify-end right_side">
  
          <div class="login" hidden>
              <a href="./login.php" class="link" id="registrar">Cadastrar</a>
          </div>
          
          <div class="flex perfil" id="perfil" hidden onclick="window.location.href='./perfil.php'">
              <div><img src="./img/user.png" alt=""></div>
              <div id="usuario">
                  <a ><?=$_SESSION['dados']['usuario'] ?? ''?></a>
              </div>
          </div>
      </div>
  </div>
</nav>