<?php 
    $title = 'Pedro\'s Portfolio';
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

<!-- INCIO DA BARRA DE NAVEGAÇÃO -->
    <?php 
    require_once('./models/header.php')
    ?>
<!-- fim da navbar -->

<!-- inicio da home  -->
<section class="home pt-5 pb-5" id="home">
  <div class="row justify-content-evenly align-middle">
    <!-- adição da aos animação  -->
    <div class="col-10 col-md-6 text-center text-md-start" data-aos="slide-right">
      <h2 style="color: #3f396d">
        Olá Me chamo <br /><span class="c-orange">Pedro Henrique</span>
      </h2>
      <p class="text-muted">
        Sou estudante do 2º ano do Ensino Médio no curso de Informática. Tenho experiência na criação de sites responsivos e também no desenvolvimento full-stack.
      </p>
      <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
        Me Contrate
      </button>
      <a href="" class="link ms-4 d-none">Veja meus trabalhos</a>
    </div>
    <div class="col-10 col-md-4 d-none d-md-block">
      <img src="images/banner-01.png" class="img-fluid" alt="" />
    </div>
  </div>
</section>
<!-- fim da seção home -->

<!-- fim da seção de especialização -->
<section class="expertise mt-5" id="service">
  <div class="heading text-center">
    <small>Minhas Habilidades Técnicas</small>
    <h3>
      Ofereço Uma Ampla Variedade De  <br />
      Serviços Digitais
    </h3>
  </div>
  <div class="row justify-content-evenly mt-5">
    <div class="col-10 col-md-4" data-aos="fade-up">
      <div class="service-card">
        <div class="img">
          <img
            src="images/service-icon1.png"
            class="w-25 img-fluid img"
            alt=""
          />
        </div>
        <div class="content mt-3">
          <h4>Web Design</h4>
          <p class="text-muted">
            Criação de interfaces modernas, intuitivas e responsivas que oferecem a melhor experiência ao usuário.
          </p>
          <a href="" class="link">Leia Mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-10" data-aos="fade-up">
      <div class="service-card">
        <div class="img">
          <img
            src="images/service-icon2.png"
            class="w-25 img-fluid img"
            alt=""
          />
        </div>
        <div class="content mt-3">
          <h4>Desenvolvimento Web</h4>
          <p class="text-muted">
            Desenvolvimento de sites completos, com foco em performance, funcionalidade e integração com sistemas.
          </p>
          <a href="" class="link">Leia Mais</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-10" data-aos="fade-up">
      <div class="service-card">
        <div class="img">
          <img
            src="images/service-icon3.png"
            class="w-25 img-fluid img"
            alt=""
          />
        </div>
        <div class="content mt-3">
          <h4>Debugging</h4>
          <p class="text-muted">
            Identificação e correção de erros em sites e aplicações, garantindo o bom funcionamento de cada funcionalidade.
          </p>
          <a href="" class="link">Leia Mais</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- seção das especializações -->

<!-- inicio seção das habiilidades -->
<section class="skill mt-5 py-5" id="about">
  <div class="row justify-content-evenly">
    <div class="col-10 col-md-5 skill-with-progress" data-aos="slide-right">
      <div class="row justify-content-evenly">
        <div class="col-10 col-md-6">
          <div class="progress-card ms-3 ms-md-0">
            <div class="circular-progress html-css">
              <span class="progress-value html-progress">0%</span>
            </div>
            <br />
            <span class="text">HTML</span>
          </div>
        </div>
        <div class="col-10 col-md-6 mt-4 mt-md-0">
          <div class="progress-card ms-3 ms-md-0">
            <div class="circular-progress javascript">
              <span class="progress-value javascript-progress">0%</span>
            </div>
            <br />
            <span class="text">CSS</span>
          </div>
        </div>
      </div>
      <div class="row justify-content-evenly mt-4">
        <div class="col-10 col-md-6">
          <div class="progress-card ms-3 ms-md-0">
            <div class="circular-progress php">
              <span class="progress-value php-progress">0%</span>
            </div>
            <br />
            <span class="text">PHP</span>
          </div>
        </div>
        <div class="col-10 col-md-6 mt-4 mt-md-0">
          <div class="progress-card ms-3  ms-md-0">
            <div class="circular-progress reactjs">
              <span class="progress-value reactjs-progress">0%</span>
            </div>
            <br>
            <span class="text">JavaScript</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-10 col-md-5 skill-detail" data-aos="slide-left">
      <div class="heading mt-5 mt-md-3">
        <small>Experiências</small>
        <h3>Experiências Digitais Inovadoras e Memoráveis</h3>
        <p class="text-muted">
          Crio soluções digitais que unem design criativo, tecnologia moderna e foco total no usuário. Cada projeto é pensado para ser único, funcional e marcante.
        </p>
        <p class="text-muted">
          Da ideia à entrega final, me dedico a transformar experiências online em algo realmente especial — com estética, performance e inovação lado a lado.
        </p>
        <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
          <a
            href="Entry Level Web Developer Resume.pdf"
            download="SampleCV"
            style="text-decoration: none;color: #fff;"
            >Download CV</a
          >
        </button>
      </div>
    </div>
  </div>
</section>
<!-- fim da seção de habilidades -->

<!-- seção do portifolio -->
<section class="portfolio" id="portfolio">
  <div class="heading text-center pt-5">
    <small>Trabalhos Criativos</small>
    <h3>Confira meu Portifólio</h3>
  </div>

  <div id="myBtnContainer" class="text-center mt-4">
    <button class="filter-item" data-filter="all">Tudo</button>
    <button class="filter-item" data-filter="game">Jogos</button>
    <button class="filter-item" data-filter="webapp">Banco de Dados</button>
    <button class="filter-item" data-filter="website">Website</button>
    <button class="filter-item" data-filter="brand">Marca</button>
  </div>
  <div class="portfolio-body">
    <div class="row justify-content-evenly px-4">
      <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img src="images/game-development.jpeg" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h4 class="card-title">Game Development</h4>
            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
            <span class="badge bg-secondary badge-pill">C++</span>
            <span class="badge bg-secondary badge-pill mb-2">Game</span
            ><br />
            <a href="#" class="link">Leia Mais</a>
          </div>
        </div>
      </div>
      <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img
            src="images/site-de-musica.jpeg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body text-center">
            <h4 class="card-title">Site de Música</h4>
            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
            <span class="badge bg-secondary badge-pill">JavaScript</span>
            <span class="badge bg-secondary badge-pill mb-2">Website</span
            ><br />
            <a href="#" class="read-more-btn link">Leia Mais</a>
          </div>
        </div>
      </div>
      <div class="post col-md-4 webapp all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img src="images/banco-de-dados.jpeg" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h4 class="card-title">CRUD de clientes</h4>
            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
            <span class="badge bg-secondary badge-pill">Banco de Dados</span>
            <span class="badge bg-secondary badge-pill mb-2">PHP</span
            ><br />
            <a href="#" class="read-more-btn link">Leia Mais</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-evenly mt-4 px-4">
      <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img src="images/tempo-real.jpeg" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h4 class="card-title">Tempo Real</h4>
            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
            <span class="badge bg-secondary badge-pill">JavaScript</span>
            <span class="badge bg-secondary badge-pill mb-2">Interatividade</span
            ><br />
            <a href="#" class="read-more-btn link">Leia Mais</a>
          </div>
        </div>
      </div>
      <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img src="images/codificacao.jpeg" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h4 class="card-title">Codificação</h4>
            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
            <span class="badge bg-secondary badge-pill">C++</span>
            <span class="badge bg-secondary badge-pill mb-2">Programação</span
            ><br />
            <a href="#" class="read-more-btn link">Leia Mais</a>
          </div>
        </div>
      </div>
      <div class="post col-md-4 all col-10 mt-3 mt-md-0" data-aos="fade-up">
        <div class="card">
          <img
            src="images/interface-educacional.jpeg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body text-center">
            <h4 class="card-title">Interface Web Institucional</h4>
            <span class="badge bg-secondary badge-pill">HTML</span>
            <span class="badge bg-secondary badge-pill">CSS</span>
            <span class="badge bg-secondary badge-pill mb-2">Web Site</span
            ><br />
            <a href="#" class="read-more-btn link">Leia Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- seção do portifolio fim -->

<!-- testemunhas xingando peddro  -->
<section class="testimonial mt-5 pt-5" id="testimonial">
  <div class="row justify-content-evenly">
    <div class="col-md-4 col-10" data-aos="slide-right">
      <img src="images/tastimonials-img.png" class="img-fluid" alt="" />
    </div>
    <div class="col-md-6 col-10 mt-5" data-aos="slide-left">
      <div class="heading">
        <small>Depoimentos</small>
        <h3>Quem usou, aprovou!!</h3>
        <!-- carrossel bootstrap -->
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-evenly">
                <div class="col-2 text-center">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="col-10">
                  <p class="text-muted">
                    Pedro é um homem com um ego maior que o próprio sol, sendo grosso até quando pede desculpas, Narciso tinha inveja de Pedro, que acha que o mundo gira em torno do R que ele não consegue pronunciar. 
                  </p>
                  <h4>Enzo Braga</h4>
                  <small class="fs-6 text-muted">"Amigo" dele</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-evenly">
                <div class="col-2 text-center">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="col-10">
                  <p class="text-muted">
                    Dificuldades: problema com português<br>
                    Lingua desconhecida: fonte startrac<br>
                    nota: Tentando pegar a druida de baldurs Gate
                  </p>
                  <h4>Diogo Vittório</h4>
                  <small class="fs-6 text-muted">"Amigo" dele</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-evenly">
                <div class="col-2 text-center">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="col-10">
                  <p class="text-muted">
                    Pedro faz piada com os outros chamando de pobre por não ter ar condicionado mas a casa dele é menor que casinha de cachorro.
                  </p>
                  <h4>Helen Vieira</h4>
                  <small class="fs-6 text-muted">Amiga dele</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-evenly">
                <div class="col-2 text-center">
                  <i class="bi bi-quote"></i>
                </div>
                <div class="col-10">
                  <p class="text-muted">
                    Babaca, mandão  e narcizista
                  </p>
                  <h4>Anônimo (Ítalo)</h4>
                  <small class="fs-6 text-muted">Inimigo dele</small>
                </div>
              </div>
            </div>
          </div>
          <button
            class="nextprev-btn rounded-pill prev-btn"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <i class="bi bi-arrow-left-circle-fill prev"></i>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button
            class="nextprev-btn rounded-pill next-btn"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <i class="bi bi-arrow-right-circle-fill next"></i>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- fim das testemunhas -->

<!-- blog section starts -->
<section class="blog mt-5 pb-5" id="blog">
  <div class="heading text-center pt-5">
    <small>Últimas Notícias</small>
    <h3>Blog & Artigos</h3>
  </div>
  <div class="row justify-content-evenly px-4 mt-4" data-aos="fade-up">
    <div class="blogpost col-md-4 col-10 mt-2 mt-md-0 game all">
      <div class="card">
        <img
          src="images/fisica-quadrao.jpg"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body px-4">
          <small>Por Pedro Henrique</small
          ><span class="ms-3">Mar 01,2025</span>
          <h4 class="card-title">
            <a href="">Monitor de Física</a>
          </h4>
          <p class="text-muted">
            Durante o ano letivo, tive a honra de atuar como monitor de Física, auxiliando estudantes em dúvidas e reforçando o conteúdo em sala. Foi uma oportunidade de aprofundar meus conhecimentos, desenvolver habilidades de comunicação e contribuir para o aprendizado coletivo.
          </p>
          <a href="#" class="read-more-btn link" data-bs-toggle="modal" data-bs-target="#exampleModal1">Leia Mais</a>
        </div>
      </div>
    </div>
    <div class="blogpost col-md-4 col-10 mt-5 mt-md-0 website all">
      <div class="card">
        <img
          src="images/oba.jpeg"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body px-4">
          <small>Por Pedro Henrique</small
          ><span class="ms-3">Mar 01,2025</span>
          <h4 class="card-title">
            <a href="">Certificado Menção Honrosa – OBA</a>
          </h4>
          <p class="text-muted">
            Fui premiado com Menção Honrosa por minha participação na 27ª Olimpíada Brasileira de Astronáutica (OBA). A experiência foi incrível, unindo desafios teóricos e práticos sobre o universo, tecnologia espacial e exploração. Um passo importante para minha paixão pelas ciências exatas!
          </p>
          <a href="#" class="read-more-btn link" data-bs-toggle="modal" data-bs-target="#exampleModal2">Leia Mais</a>
        </div>
      </div>
    </div>
    <div class="blogpost col-md-4 col-10 mt-5 mt-md-0 webapp all">
      <div class="card">
        <img
          src="images/mobfog.jpeg"
          class="card-img-top rounded-4"
          alt="..."
        />
        <div class="card-body px-4">
          <small>Por Pedro Henrique</small
          ><span class="ms-3">Mar 01,2025</span>
          <h4 class="card-title">
            <a href="">Certificado da 18ª Mostra de Foguetes (MOBFOG)</a>
          </h4>
          <p class="text-muted">
            Participei da 18ª Mostra Brasileira de Foguetes, onde pude construir e lançar um foguete como parte de um projeto prático de ciências. A atividade envolveu cálculos, física e muito trabalho em equipe, resultando em uma experiência inesquecível e educativa.
          </p>
          <a href="#" class="read-more-btn link" data-bs-toggle="modal" data-bs-target="#exampleModal3">Leia Mais</a>
        </div>
      </div>
    </div>

    <!-- é tipo um pop up-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
            <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
          
          <div class="modal-body px-4">
            <div class="img">
              <img src="images/fisica-quadrao.jpg" class="img-fluid" alt="">
            </div>
            <div class="content mt-3">
              <small>Por Pedro Henrique</small
                ><span class="text-muted ms-2">Mar 1,2025</span>
              <h4 class="card-title mt-3">Meu Papel como Monitor de Física</h4>
              <div class="social-links mt-4">
                  <button href="" class="rounded-pill instagram">
                    <i class="bi bi-instagram"></i>
                  </button>
                  <button href="" class="rounded-pill whatsapp">
                    <i class="bi bi-whatsapp"></i>
                  </button>
                  <button href="" class="rounded-pill discord">
                    <i class="bi bi-discord"></i>
                  </button>
              </div>
              <p class="text-muted mt-3">Ser monitor de Física foi mais do que uma função — foi um aprendizado constante. A cada explicação que eu dava, reforçava meu próprio entendimento e crescia como estudante. Ajudar outros colegas a entender conceitos complexos tornou-se uma experiência gratificante e desafiadora, que levarei para a vida.</p>
            </div>
          </div>
          <div class="heading px-2">
            <h3 class="fs-3 ms-3">Deixe um comentário</h3>
          </div>
          <div class="contact-form ms-3 mt-3 pb-4 px-2">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Nome"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="E-mail"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Número de Telefone"
              />
            </div>
            <div class="mb-3">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                placeholder="Mensagem"
                rows="5"
              ></textarea>
            </div>
            <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
              Enviar
            </button>
          </div>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
            <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
          
          <div class="modal-body px-4">
            <div class="img">
              <img src="images/oba.jpeg" class="img-fluid" alt="">
            </div>
            <div class="content mt-3">
              <small>Por Pedro Henrique</small
                ><span class="text-muted ms-2 ms-md-0">Mar 1,2025</span>
              <h4 class="card-title mt-3">Menção Honrosa na Olimpíada de Astronáutica</h4>
              <div class="social-links mt-4">
                  <button href="" class="rounded-pill instagram">
                    <i class="bi bi-instagram"></i>
                  </button>
                  <button href="" class="rounded-pill whatsapp">
                    <i class="bi bi-whatsapp"></i>
                  </button>
                  <button href="" class="rounded-pill discord">
                    <i class="bi bi-discord"></i>
                  </button>
              </div>
              <p class="text-muted mt-3">Participar da OBA foi uma verdadeira viagem pelo espaço do conhecimento. Receber uma menção honrosa nessa competição nacional foi o reconhecimento de semanas de estudo e dedicação. Foi uma oportunidade de me conectar com temas como astronomia, foguetes e o futuro da exploração espacial.</p>
            </div>
          </div>
          <div class="heading px-2">
            <h3 class="fs-3 ms-3">Deixe um comentário</h3>
          </div>
          <div class="contact-form ms-3 mt-3 pb-4 px-2">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Nome"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="E-mail"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Número de Telefone"
              />
            </div>
            <div class="mb-3">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                placeholder="Mensagem"
                rows="5"
              ></textarea>
            </div>
            <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
              Enviar
            </button>
          </div>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
            <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i></button>
          
          <div class="modal-body px-4">
            <div class="img">
              <img src="images/mobfog.jpeg" class="img-fluid" alt="">
            </div>
            <div class="content mt-3">
              <small>Por Pedro Henrique</small
                ><span class="text-muted ms-2 ms-md-0">Mar 1,2025</span>
              <h4 class="card-title mt-3">Meu Projeto na Mostra Brasileira de Foguetes</h4>
              <div class="social-links mt-4">
                  <button href="" class="rounded-pill instagram">
                    <i class="bi bi-instagram"></i>
                  </button>
                  <button href="" class="rounded-pill whatsapp">
                    <i class="bi bi-whatsapp"></i>
                  </button>
                  <button href="" class="rounded-pill discord">
                    <i class="bi bi-discord"></i>
                  </button>
              </div>
              <p class="text-muted mt-3">Na 18ª MOBFOG, pude aplicar na prática os conceitos de Física e Engenharia construindo um foguete artesanal. O lançamento foi o ponto alto de uma experiência que misturou teoria, trabalho em equipe e muita empolgação. Um projeto que acendeu ainda mais minha curiosidade científica.</p>
            </div>
          </div>
          <div class="heading px-2">
            <h3 class="fs-3 ms-3">Deixe um Comentário</h3>
          </div>
          <div class="contact-form ms-3 mt-3 pb-4 px-2">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Nome"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="E-mail"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Número de Telefone"
              />
            </div>
            <div class="mb-3">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                placeholder="Mensagem"
                rows="5"
              ></textarea>
            </div>
            <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
              Enviar
            </button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- blog section ends here -->

<!-- seção de contato -->
<section class="contact py-5" id="contact">
  <div class="heading text-center">
    <small>Entre em contato</small>
    <h3>Alguma dúvida? Fique à vontade para entrar em contato</h3>
  </div>
  <div class="row justify-content-evenly mt-5">
    <div class="col-md-5 col-10 contact-details" data-aos="slide-right">
      <div class="row justify-content-evenly">
        <div class="col-1">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <div class="col-11">
          <p>casinha do governo de guanambi-Bahia, no Brasil</p>
        </div>
      </div>
      <div class="row justify-content-evenly">
        <div class="col-1">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="col-11">
          <p>77 9903-4680</p>
        </div>
      </div>
      <div class="row justify-content-evenly">
        <div class="col-1">
          <i class="bi bi-send-fill"></i>
        </div>
        <div class="col-11">
          <p>pedrohtpgbi2007@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-10 mt-3 mt-md-0" data-aos="slide-left">
      <div class="contact-form">
        <div class="mb-3">
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Nome"
          />
        </div>
        <div class="mb-3">
          <input
            type="email"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="E-mail"
          />
        </div>
        <div class="mb-3">
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Número de Celular"
          />
        </div>
        <div class="mb-3">
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            placeholder="Mensagem"
            rows="5"
          ></textarea>
        </div>
        <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
          Enviar
        </button>
      </div>
    </div>
  </div>
</section>
<!-- fim da seção de comentarios -->

  <!-- butãozinho foda para voltar pro topo da página muito pica, foi dificil, muito tutorial  -->
<button
  type="button"
  class="btn btn-floating btn-lg rounded-pill"
  id="btn-back-to-top"
>
  <i class="bi bi-arrow-up"></i>
</button>

<!-- seção footer basicão  -->
<footer class="text-center text-muted py-4">
  <h3 class="text-white pt-4" data-aos="fade-up">Portfolio</h3>
  <div class="link-group mt-5" data-aos="fade-up">
    <a href="#home">Home</a>
    <div class="vr"></div>
    <a href="#about">Serviços</a>
    <div class="vr"></div>
    <a href="#service">Experiências
    <div class="vr"></div>
    <a href="#portfolio">Portfolio</a>
    <div class="vr"></div>
    <a href="#blog">Blog</a>
    <div class="vr"></div>
    <a href="#contact">Contato</a>
  </div>
  <div class="social-links mt-5" data-aos="fade-up">
    <button href="" class="rounded-pill instagram">
      <i class="bi bi-instagram"></i>
    </button>
    <button href="" class="rounded-pill whatsapp">
      <i class="bi bi-whatsapp"></i>
    </button>
    <button href="" class="rounded-pill discord">
      <i class="bi bi-discord"></i>
    </button>
  </div>
  <hr class="text-muted my-4" />

  <p>Copyright 2025 Portifólio | Todos os direitos reservados à Pedro Henrique Ribeiro e Marina Prado Amorim.</p>
</footer>
<!-- FIM DO FOOTER -->

  <!-- bootstrap javascript -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"
></script>

<!--LINK DA LIVRARIA AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  // INICIAR O BAGUKLJP
  AOS.init({
    duration: 1000,
    offset: 50,
  });
</script>

<!-- cJAVASCRIPT LINK -->
<script src="js/script.js"></script>

</body>
</html>