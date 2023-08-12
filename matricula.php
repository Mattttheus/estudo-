<!DOCTYPE html>
<html>

<head>
    <title>Colegio Jhenis</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



</head>

<body>
    <?php
     
     include "menu.php"
    
    ?>
    <div class="card" style=" align-items: center;">

        <span class=" border border-dark">
            <span class="border"></span>
            <h5 class="card-title" style=" text-align: center;">Formulario de Matricula</h5>
            <p class=" card-text">
            </p>
            <span class="border"></span>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-8" style=" text-align: center;">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4" style=" text-align: center;"><label for=" inputPassword4">
                            Senha</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group" style=" text-align: center;">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                </div>
                <div class="form-group" style=" text-align: center;">
                    <label for="inputAddress2">Endereço 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartamento, hotel, casa, etc.">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEstado">Estado</label>
                        <select id="inputEstado" class="form-control">
                            <option selected>Escolher...</option>
                            <option>SP<br>
                            </option>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Clique em mim
                        </label>
                    </div>
                </div>
            </form>
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Presencial</option>
                            <option value="1">EAD</option>
                            <option value="2">Semi Presencial</option>
                            <option value="3">Teorica</option>
                        </select>
                    </div>
                    <div class="col-auto my-1">
                        <div class="custom-control custom-checkbox mr-sm-1">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">Lembrar
                                preferências</label>
                        </div>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
    </div>
    </div>
    </span>
    <?php
     
     include "rodape.php"
    
    ?>
    <script src="ks/bootstrap.min.js"></script>
</body>

</html>