<?php 
    $title = 'Home';
    include_once ('./models/head.php');

    // sessão
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['logado'] = true;
    }

    if (!isset($_SESSION['logado'])) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var modal = new bootstrap.Modal(document.getElementById('reg_modal'));
                    modal.show();
                });
              </script>";
    } else {
           
    }
?>

<script>
    Perfil
</script>
    
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    
    <footer class="flex justify-between column">
       <div class="flex fontAss">
            <p>
            Pedro Henrique Teixeira Piao
            </p>
       </div>

       <div>
        <div class="flex justify-space redes">
            <div class="logoRedes">
                <a href="https://www.instagram.com/pedro_htp015/">
                    <img src="./icons/icons8-instagram.svg" alt="Icone do instagram">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://github.com/PedroHTP">
                    <img src="./icons/icons8-github.svg" alt="Icone do Github">
                </a>
            </div>
            <div class="logoRedes">
                <a href="https://x.com/bluefrosthtp">
                    <img src="./icons/icons8-logo-discord.svg" alt="Icone do Discord">
                </a>
            </div>
        </div>
       <div>
        <div class="flex condicoes">
            <div>
                Termos e Condições
            </div>
            <div>
                Política de Privacidade
            </div>
        </div>
        <div class="flex condicoes">
            <p>Copyright &copy; 2025 Pedro Henrique Teixeira Pião. Todos os direitos reservados.</p>
        </div>
       </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></scrip>
    <script src="./scripts/script.js"></script>
</body>
</html>