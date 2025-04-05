<?php 
    $title = 'Home';
    include_once ('./models/head.php');

    // Sessão
    session_start();
?>

<?php 
    // Dados
    include_once('.//models/dados.php');
?>

<?php

    if (!isset($_SESSION['logado'])) {
      if (!isset($_SESSION['mensagem'])) {
        $_SESSION['mensagem'] = true;
        echo 
        "
          <script>
              document.addEventListener('DOMContentLoaded', function() {
                  var modal = new bootstrap.Modal(document.getElementById('reg_modal'));
                  modal.show();
              });
          </script>";
      }
    }
    
?>

<head>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="reg_modal" tabindex="-1" role="dialog" aria-labelledby="reg_modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal_style">
      <div class="modal-header">
        <h5 class="modal-title" id="reg_modalLabel">Você não está Registrado!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja fazer registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Talvez mais tarde</button>
        <button type="button" class="btn btn-primary" onclick="Logar()">Fazer Login</button>
      </div>
    </div>
  </div>
</div>

    <?php 
    require_once('./models/header.php')
    ?>
    
    <main>
        <div>
            <section>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, at ipsum molestiae necessitatibus aliquam dolorem officia vero beatae, blanditiis numquam vel sequi eius rerum possimus suscipit iste magni. Debitis, magni?
            </section>
        </div>
        <aside>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum laboriosam blanditiis optio cum. Asperiores aliquid odio consequuntur voluptatibus porro itaque quae dolorum minus repellendus perferendis maiores consequatur accusamus, sequi vero?
        </aside>
    </main>
    
    <?php 
    require_once('./models/footer.php')
    ?>

    <button onclick="resetar()">Resetar sessão</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
</body>
</html>