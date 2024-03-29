<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


</head>


<body>
  <!--class="navbar navbar-expand-lg navbar-dark bg-dark"-->
    <header class=" navbar navbar-expand-lg navbar navbar-light " style="background: linear-gradient(105deg, rgba(91,104,235,1) 0%, rgba(40,225,253,1) 50%, rgb(219, 68, 224) 100%);" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="row cent">
            <!--<nav class="main-nav">-->
            <a class="navbar-brand cent ml-4" style="color: #ffffff;" href="#">Dados Complementares</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
  </nav>
    <hr><h4 class = "ml-4">Informe os respectivos dados abaixo para posseguir :</h4><hr/>

    
    <form action = "registro_denunciante_endereco.php" method="POST">
      <div>
        <div class="form-row" >
          <div class="form-group col-lg-3 cent" >
            <label for="inputAddress">Rua</label>
            <input type="text" class="form-control" name="rua" id="inputAddress" required>
          </div>
          <div class="form-group col-lg-3 cent" >
            <label for="inputAddress"> Número</label>
            <input type="text" class="form-control" name="numero" id="inputAddress" placeholder="Digite o numero de sua casa, apartemento..." required>
          </div>
          <div class="form-group col-lg-3 cent">
            <label for="inputAddress">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="inputAddress" required>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3 cent">
              <label for="inputCity">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="inputCity" required>
            </div>
            <div class="form-group col-md-3 cent">
              <label for="inputState">Estado</label>
              <select id="inputState" class="form-control" name="estado">
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
            <div class="form-group col-lg-3 cent">
              <label for="inputAddress2">CEP</label>
              <input  type="text" class="form-control" name="cep" id="inputAddress2" required>
            </div>
        </div>
    </div>
    <div>
      <button type="submit" class="btn-primary gradient-button btn ml-4" style="background: linear-gradient(105deg, rgba(91,104,235,1) 0%, rgba(40,225,253,1) 50%, rgb(219, 68, 224) 100%);">Cadastrar</button>
    </div>
    
  </form>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/owl-carousel.js"></script>
   <script src="assets/js/animation.js"></script>
   <script src="assets/js/imagesloaded.js"></script>
   <script src="assets/js/popup.js"></script>
   <script src="assets/js/custom.js"></script>
    
</body>


</html>
