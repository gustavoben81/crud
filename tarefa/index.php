
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
    <title>Tela de Login</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <div class="form_cd">        
    <form action= "processo.php" method="POST">
    <fieldset>
        <legend><b>Formulario de Cadastro</b></legend>
        <div class="inputbox">  <!--Input para Nome -->
            <input type="text" name="Nome" class="inputuser" id="nome" placeholder="Nome">
                <label for="nome" class="labelinput"></br></label>
                    </div>

        <div class="inputbox">  <!--Input para Email -->
            <input type="email" name="Email" class="inputuser" id="email" placeholder="Email">
                <label for="email" class="labelinput"></br></label>
                    </div>

        <div class="inputbox">  <!--Input para Senha -->
            <input type="password" name="Senha" class="inputuser" id="senha" placeholder="Senha">
                <label for="senha" class="labelinput"></br></label>
                    </div>

        <div class="inputbox"> <!--Input para Telefone -->
            <input type="number" name="Telefone" class="inputuser" id="telefone" placeholder="Telefone">
                <label for="telefone" class="labelinput"></br></label>
                    </div>

            <p class="sexo">Sexo</p>     <!--Input para Sexo -->
            <input type="radio" name="Genero" id="feminino" value="feminino">
                <label for="feminino">Feminino</label>
                
            <input type="radio" name="Genero" id="masculino" value="masculino">
                <label for="masculino">Masculino</label>

        <div class="inputbox">  <!--Input Data de Nascimento -->
            <input type="date" name="Nasc" class="inputuser" id="nasc" placeholder="Data Nascimento">
                <label for="nasc"></br></label>
                    </div>

         <div class="inputbox">  <!--Input Cidade -->
            <input type="text" name="Cidade" class="inputuser" id="cidade" placeholder="Cidade">
                <label for="cidade" class="labelinput"></br></label>
                    </div>

        <div class="inputbox">   <!-- Input Estado -->
            <input type="text" name="Estado" class="inputuser" id="estado" placeholder="Estado">
                <label for="estado" class="labelinput"></br></label>
                    </div>

        <div class="inputbox">  <!--Input Endereço -->
            <input type="text" name="Endereco" class="inputuser" id="endereco" placeholder="Endereco">
                <label for="endereco" class="labelinput"></br></label>
                    </div>
        <div>                  <!--Input Enviar -->
            <input type="submit" name="acao" id="acao" value="Cadastrar">
                    </div>
        <div>             
            <input type="hidden" name="form" value="f_form">
                    </div>
    </fieldset>
    </form>
    </div>
</body>
</html>