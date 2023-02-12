<?php
include('conexao.php');

session_start();

$cpf = $_SESSION['cpf'];

$usuario = "SELECT * FROM agente_publico where cpf = '$cpf'";
$consulta = $conexao->query($usuario) or die ($mysqli->error);
$usuario_endereco = "SELECT * FROM endereco_agente_publico where cpf = '$cpf'";
$consulta_endereco = $conexao->query($usuario_endereco) or die ($mysqli->error);
$denuncia = "SELECT * FROM denuncia";
$consulta_denuncia = $conexao->query($denuncia) or die ($mysqli->error);

while ($dados = $consulta_denuncia->fetch_array())

$cpf_D = $dados["cpf"];

$usuario_D = "SELECT * FROM denunciante where cpf = '$cpf_D'";
$consulta_D = $conexao->query($usuario_D) or die ($mysqli->error);
$usuario_endereco_D = "SELECT * FROM endereco where cpf = '$cpf_D'";
$consulta_endereco_D = $conexao->query($usuario_endereco_D) or die ($mysqli->error);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina Principal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/assets/images/por+vidas-1.png" rel="imagem"

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <br/>
        <h1 class="text-light"><a href="index.html">Por+Vidas</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Perfil</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Area de Denuncia</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Conta</span></a></li>
          <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Feedbacks</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Perfil</h2>
        </div>
        <br/>

        <div class="row">
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-6">
              <?php while ($dados = $consulta->fetch_array()) { ?>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nome:</strong><?php echo $dados["nome"]; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>CPF:</strong><?php echo $dados["cpf"]; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefone:</strong><?php echo $dados["telefone"]; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong><?php echo $dados["email"]; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cargo:</strong><?php echo $dados["cargo"]; ?></li>
                </ul>
                <?php } ?>
              </div>
              <div class="col-lg-6">
              <?php while ($dados = $consulta_endereco->fetch_array()) { ?>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Rua:</strong><?php echo $dados["rua"]; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Número:</strong><?php echo $dados["numero"]; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Bairro:</strong><?php echo $dados["bairro"]; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Cidade:</strong><?php echo $dados["cidade"]; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Estado:</strong><?php echo $dados["estado"]; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>CEP:</strong><?php echo $dados["cep"]; ?></li>
                </ul>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Denuncias</h2>
          <form action="atualizar_pagina_agente.php">
                <button type="submit">Atualizar</button>
          </form>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
          <?php while ($dados = $consulta_denuncia && $dados_D = $consulta_D && $dados_endereco_D = $consulta_endereco_D ->fetch_array()){ ?>
            <h3 ><?php echo $dados["protocolo"]; ?></h3>
            <div class="resume-item pb-0">
              <h3><?php echo $dados_D["nome"]; ?></h2>
              <li>Denúncia : <em><?php echo $dados["denuncia"]; ?></em></li>
                <li>Cidade : <?php echo $dados_endereco_D["cidade"]; ?></li>
                <li>Bairro : <?php echo $dados_endereco_D[ "bairro"]; ?></li>
                <li>Número : <?php echo $dados_endereco_D[ "numero"]; ?></li>
                <li>Estado : <?php echo $dados_D[ "estado"]; ?></li>
                <li>Telefone : <?php echo $dados[ "telefone"]; ?></li>
                <hr></hr>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Atualização cadastral</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="atualizar_dados_agente.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="name">Nome completo</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState">Cargo</label>
                  <select id="inputState" class="form-control" type = "text" name = "cargo" required>
                    <option selected>Selecione seu Cargo</option>
                    <option>Servidores públicos</option>
                    <option>Empregados públicos</option>
                    <option>Contratados temporários</option>
                    <option>Agentes delegados</option>
                    <option>Agentes credenciados</option>
                  </select>
                </div>
              </div>
            <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group col-md-3">
                <label for="name">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" required>
              </div>
              <div class="form-group col-md-3">
                <label for="name">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" required>
              </div>
            </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Atualizar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Atualização do Endereço</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="atualizar_dados_agente2.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="name">Rua</label>
                  <input type="text" name="rua" class="form-control" id="rua" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="name">N°</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder="casa, apartemento..." required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="name">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="name">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="name">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" name="estado" id="estado" required>
                      <option selected>Selecione sua Região</option>
                      <option>Acre (AC)</option>
                      <option>Alagoas (AL)</option>
                      <option>Amapá (AP)</option>
                      <option>Amazonas (AM)</option>
                      <option>Bahia (BA)</option>
                      <option>Ceará (CE)</option>
                      <option>Distrito Federal (DF)</option>
                      <option>Espírito Santo (ES)</option>
                      <option>Goiás (GO)</option>
                      <option>Maranhão (MA)</option>
                      <option>Mato Grosso (MT)</option>
                      <option>Mato Grosso do Sul (MS)</option>
                      <option>Minas Gerais (MG)</option>
                      <option>Pará (PA)</option>
                      <option>Paraíba (PB)</option>
                      <option>Paraná (PR)</option>
                      <option>Pernambuco (PE)</option>
                      <option>Piauí (PI)</option>
                      <option>Rio de Janeiro (RJ)</option>
                      <option>Rio Grande do Sul (RS)</option>
                      <option>Rio Grande do Norte (RN)</option>
                      <option>Rondônia (RO)</option>
                      <option>Roraima (RR)</option>
                      <option>Santa Catarina (SC)</option>
                      <option>São Paulo (SP)</option>
                      <option>Sergipe (SE)</option>
                      <option>Tocantins (TO)</option>
                    </select>
                  </div>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Atualizar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

    <section id="facts" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Feedback</h2>
          </div>
          
  
          <div class="row" data-aos="fade-in">
  
            <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="analise.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                        <div class="form-group col-md-5">
                          <label for="name">Protocolo</label>
                          <input type="text" name="protocolo" class="form-control" id="protocolo" placeholder="informe o protocolo referente a denuncia" required>
                        </div>
                        <div class="form-group col-md-10">
                          <label for="name">Parecer</label>
                          <textarea class="form-control" name="parecer" rows="10" id="parecer" required></textarea>
                        </div>
                        <div class="my-3">
                          <div class="loading">Enviando</div>
                          <div class="sent-message">Enviado com sucesso!</div>
                          <div class="error-message sent-message">Enviado com sucesso!</div>
                        </div>
                        <div><button class="text-start" type="submit">Enviar</button></div>
                   </div>
               </form>
            </div>
          </div>
        </div>
      </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">
        <a href="logout.php">Sair</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>