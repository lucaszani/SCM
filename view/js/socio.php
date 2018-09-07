<?php
  session_start();

  /*Utilizado caso o Diretorio não leia 
  if (!defined('ROOT_PATH')){
    define('ROOT_PATH', "../");
  }
*/

function logo(){

   //$root = ROOT_PATH;

	 echo <<< HTML
    <head>
      <link rel="icon" href="favicon.png" type="image/x-icon" />
      <title>Pagina Inicial Sócio</title>
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="../Comum/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../Comum/estilo.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="../Comum/js/bootstrap.min.js"></script>

    </head>

    <!-- Script para sair fechar o site depois de algum tempo -->
    <script type="text/javascript">

        var t;

        this.t = setInterval("redereciona()",'200000');//segundos

        function redereciona(){
          location.href = "../Comum/Sair.php";
        }
        function acao(){
          clearInterval(this.t);
          //inicia novamente
          this.t = setInterval("redereciona()",'200000');//segundos
        }
        </script>

    <body class="corpo" onmousemove="acao();">
      <header>
        <!-- DIV DO CONTAINER HEADER-->
        <div class="container-fluid" class="col-sm-12" class="col-md-12" class="col-lg-12">
                                  
          <!--DIV DO LOGO DO INSTITUTO-->
          <div id="div da imagem" class="col-sm-4" class="col-md-4" class="col-lg-4">
            <img src="../Comum/sgsp logo.png" class="img-responsive" alt="Responsive image"> 
          </div>
                        
          <!--DIV PARA SEPARAR O LOGO DO FORMULÁRIO DE CONSULTA-->
          <div class="col-sm-3" class="col-md-3" class="col-lg-3"></div>

            <!--DIV DO FORMULÁRIO DE CONSULTA-->
          <form id="busca" name="busca" method="post" action="consultaperfil.php" onSubmit="return validaForm()">
            <div id="pad1" class="col-sm-4" class="col-md-4" class="col-lg-4">
              <div>
                <div class="input-group col-sm-12">
                  <input name="pront" id="borda" type="text" class="form-control" aria-label="..." placeholder="Prontuário...">
                  
                  <div class="input-group-btn"  class="input-group col-lg-4">
                    <select name ="escolhaperfil" id="borda2" class="form-control">
                      
                      <option value="escolha" selected hidden>Escolha</option>
                      <option name="perfilaluno" value="aluno">Aluno</option>
                      <option name="perfilfuncionario" value="professor">Professor</option>
                      
                    </select>
                  </div>
                  <span class="input-group-btn">
                    <button id="borda" class="btn btn-success" type="submit">Consultar</button></span>
                 </span>
              </div>
            </div><!--FIM DA DIV DO FORMULÁRIO DE CONSULTA -->
          </div><!--FIM DA DIV DO CONTAINER HEADER-->
          </header>         
        </form>
        </div>
      </dody>
    
HTML;
}

function menu(){
  echo <<< HTML
          <nav class="navbar navbar-default " style="background-color:white">
            <div class="container-fluid" >
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
              
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="InicioS.php"><b>Inicio</b></a></li>

                  <li><a href="relatarsocio.php">Relatar</a></li>
                  
                  <li class="dropdown">
                  <a id="cor-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agendamentos</a>
                  
                  <ul class="dropdown-menu">
                  
                  <li><a id="cor-dropdown" href="realizaragendamentos.php">Realizar agendamento</a></li>                  
                  <li role="separator" class="divider"></li>                  
                  <li><a id="cor-dropdown" href="VisualizarAgendamentoS.php">Visualizar agendamento</a></li>
                  </ul>
                  
                  <li><a href="RelatosS.php">Relatos</a></li>
                  
                  <li class="dropdown">
                  <a id="cor-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lista de Nomes</a>
                  <ul class="dropdown-menu">

                  <li><a href="ListadeAlunos.php">Aluno</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="ListadeFunc.php">Funcionário</a></li>


                  </ul>

                  <!--Style do icone engrenagem (tentar colocar no arquivo estilo.cs)-->
                  <style>
                  .glyphicon{
                    font-size:25px;
                    color:#0a9b0d; 
                    margin-left: 0%;   
                    }
                    .alinhar{
                      margin-left: 30%
                    }          
                  </style>
  
                  <li  class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span  class="glyphicon glyphicon-cog"> </span></a>
                  <ul class="dropdown-menu alinhar">
                  <li><a data-toggle="modal" href="#myModal3" title="Cadastrar um novo usuário no sistema.">Novo Usuário</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../comum/Sair.php">Sair</a></li> 
                    </li>
                </ul>
              </div>
            </div>
          </nav>

                    <!-- Modal -->
    <!--Modal para fazer um relato sem login-->
    <form method="post" action="relatoexterno.php" name="relatoproprio" onSubmit="return validaForm()">
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Cadastro de Novo Usuário</h4>
                </div>

              <div class="modal-body">
                <br>
                <div class="form-group">
                <div class="col-sm-12">
                  <center><img src="../comum/novousuario.png" width="130px" height="25px" class="img-responsive" alt="Responsive image"></center>
                  <br>
                  <br>
                </div>
              </div>

              <div class="form-group">                
                        <label id="pad" for="nomedorelator" >Nome do Relator</label>
                        <div id="pad">
                            <input  type="text" class="form-control" id="nomedorelator" name="nomerelator" placeholder="Digite o nome do relator">
                        </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="cpf" >CPF</label>
                        <div id="pad">
                            <input  type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="relacaocomaluno" >Relação com Aluno</label>
                            <div id="pad">
                              <input  type="text" class="form-control" id="relacaocomaluno" name="relacaoaluno" placeholder="Digite a relação com aluno">
                            </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="nomedoaluno" >Nome do Aluno</label>
                          <div id="pad">
                            <input  type="text" class="form-control" id="nomedoaluno" name="nomealuno" placeholder="Digite o nome do aluno">
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="curso">Curso</label>
                        <div id="pad">
                            <select class="form-control" name="curso">
                                <option value="" selected hidden>Selecione o Curso</option>
                                <option value="Tecnico integrado ao ensino medio">Técnico integrado ao ensino médio</option>
                                <option value="Tecnico em automacao industrial">Técnico em automação industrial</option>
                              <option value="Tecnico em informatica">Técnico em informática</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="modulo">Módulo</label>
                          <div id="pad">
                            <select class="form-control" name="modulo">
                                <option value="" selected hidden>Selecione o Módulo</option>
                                <option value="1">1º Módulo</option>
                                <option value="2">2º Módulo</option>
                                <option value="3">3º Módulo</option>
                                <option value="4">4º Módulo</option>
                                <option value="5">5º Módulo</option>
                                <option value="6">6º Módulo</option>
                                <option value="7">7º Módulo</option>
                                <option value="8">8º Módulo</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="telefone">Telefone</label>
                        <div id="pad">
                            <input  type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o seu telefone" maxlength="12" onkeypress="formatar('##.####-####', this)">
                        </div>
                      </div>  

                      <div class="form-group">
                        <label id="pad" for="email">E-Mail</label>
                          <div id="pad">
                            <input  type="text" class="form-control"  name="email" id="email" placeholder="Digite o seu e-mail">
                          </div>
                      </div>

                      <div class="form-group">
                        <label id="pad" for="mensagem">Mensagem de Relato</label>
                        <div id="pad">
                            <textarea class="form-control" rows="3" name="msg" placeholder="Digite sua mensagem..."></textarea>
                        </div>
                      </div>
                        <br>  
                
                      <center>
                        <div class="form-group" id="alinhado">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-success">Relatar</button>
                            </div>
                        </div>

                        <div class="form-group" id="alinhado">
                            <div class="col-sm-12">
                              <button type="reset" class="btn btn-success">Limpar</button>
                            </div>
                        </div>
                      </center>
                    </div>
                </div>
            </div>
          </div>
        </form>

                
HTML;

}

function consultaperfilaluno(){
    include ("../comum/conexao.php");
    $pdo = conectar();    

    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
      header("location: ../comum/Login.html");
    } 

    // RECEBE AS VARIÁVEIS VIA POST E TRATA O SQL INJECTION FINALIZANDO COM A CODIFICAÇÃO MD5
    $prontPost = $_POST['pront'];

  //if - se prontPost estiver vazio, informa 'Strong'
  if(empty($prontPost))
  {
    echo<<<html
  <br>
  <br>
  <div class="alert alert-danger">
 <center> <strong>Inválido</strong> - Favor inserir Prontuario...</center>
</div>
html;
$prontPost = 000;
  }

  try{  
    $sql = "SELECT * FROM ALUNO WHERE prontuario = ".$prontPost." limit 1";
    $stmt = $pdo->query($sql);
    $dados = $stmt->fetch();
    
    
  } catch (PDOException $e) {

    echo $e->getMessage();

    }
  
  echo <<< html

  <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
        <div class="container" class="col-sm-12 col-md-12 col-lg-12">
          <center><h3><b>Perfil do Aluno</b></h3></center>

  <head>
      <meta charset = "UTF-8"/>
      
      
        <title>Perfil</title>
        
      <link rel = "stylesheet" type = "text/css" href = "style.css"/>
      
      <link rel="icon" type="image/png" href="if.ico" />
        
    
      <style type="text/css">
    
      </style></br>
      </head>
      <body bgcolor="#DFE7CF">
  <div id = "content">
  <center>
html;

   echo <<<HTML
        
  </br><center>
  <label><b>Prontuário:</b></label>
HTML;
    echo $dados["PRONTUARIO"];
    
      echo <<<HTML
    
  </br><center>
  <label><b>Nome:</b></label>
HTML;
    echo utf8_encode($dados["NOME"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>PAE:</b></label>
HTML;
    echo $dados["PAE"];
    
echo <<<HTML
    
  </br><center>
  <label><b>RG:</b></label>
HTML;
    echo $dados["RG"];

echo <<<HTML
    
  </br><center>
  <label><b>CPF:</b></label>
HTML;
    echo $dados["CPF"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Naturalidade:</b></label>
HTML;
    echo utf8_encode($dados["NATURALIDADE"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>UF:</b></label>
HTML;
    echo utf8_encode($dados["UF"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Estado Civil:</b></label>
HTML;
    echo utf8_encode($dados["ESTADO_CIVIL"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Sexo:</b></label>
HTML;
    echo utf8_encode($dados["SEXO"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Nome do Pai:</b></label>
HTML;
    echo utf8_encode($dados["NOME_PAI"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Nome da Mãe:</b></label>
HTML;
    echo utf8_encode($dados["NOME_MAE"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Endereço:</b></label>
HTML;
    echo utf8_encode($dados["ENDERECO"]);
    
    
echo <<<HTML
    
  </br><center>
  <label><b>Bairro:</b></label>
HTML;
    echo utf8_encode($dados["BAIRRO"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Cep:</b></label>
HTML;
    echo $dados["CEP"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Telefone:</b></label>
HTML;
    echo $dados["TELEFONE_FIXO"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Celular:</b></label>
HTML;
    echo $dados["CELULAR"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Email:</b></label>
HTML;
    echo utf8_encode($dados["EMAIL"]);
    
  echo <<<HTML
    
  </br><center>
  <label><b>Curso:</b></label>
HTML;
    echo utf8_encode($dados["CURSO"]);
    
  echo <<<HTML
    
  </br><center>
  <label><b>Turma:</b></label>
HTML;
    echo utf8_encode($dados["TURMA"]);
    
  echo <<<HTML
    
  </br><center>
  <label><b>Idade:</b></label>
HTML;
    echo $dados["IDADE"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Data de Nascimento:</b></label>
HTML;
    echo $dados["DATA_NASCIMENTO"];
    
    echo <<<HTML
    </center>
    </br>
  </div>  <!--/content-->
  </body>
  
HTML;
echo<<<html
  </div>
  <br>
html;

}

function consultaperfilfuncionario(){
    include ("../comum/conexao.php");
    $pdo = conectar();    

    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
      header("location: ../comum/Login.html");
    } 

    // RECEBE AS VARIÁVEIS VIA POST E TRATA O SQL INJECTION FINALIZANDO COM A CODIFICAÇÃO MD5
    $prontPost = $_POST['pront'];

  if(empty($prontPost))
  {
    echo<<<html
  <br>
  <br>
  <div class="alert alert-danger">
 <center> <strong>Inválido</strong> - Favor inserir Prontuario...</center>
</div>
html;
$prontPost = 000;
  }

  try{  
    $sql = "SELECT * FROM FUNCIONARIOS WHERE prontuario = ".$prontPost." limit 1";
    $stmt = $pdo->query($sql);
    $dados = $stmt->fetch();
    
    
  } catch (PDOException $e) {

    echo $e->getMessage();

    }
  
    echo <<< html

  <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
        <div class="container" class="col-sm-12 col-md-12 col-lg-12">
          <center><h3><b>Perfil do Funcionário</b></h3></center>

  <head>
      <meta charset = "UTF-8"/>
      
      
        <title>Perfil</title>
        
      <link rel = "stylesheet" type = "text/css" href = "style.css"/>
      
      <link rel="icon" type="image/png" href="if.ico" />
        
    
      <style type="text/css">
    
      </style></br>
      </head>
      <body bgcolor="#DFE7CF">
  <div id = "content">
  <center>
html;
    
  echo <<<HTML
  
  <label><b>Prontuário:</b></label>
HTML;
    echo $dados["PRONTUARIO"];
    
      echo <<<HTML
    
  </br><center>
  <label><b>Nome:</b></label>
HTML;
    echo utf8_encode($dados["NOME"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>RG:</b></label>
HTML;
    echo $dados["RG"];

echo <<<HTML
    
  </br><center>
  <label><b>CPF:</b></label>
HTML;
    echo $dados["CPF"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Naturalidade:</b></label>
HTML;
    echo utf8_encode($dados["NATURALIDADE"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>UF:</b></label>
HTML;
    echo utf8_encode($dados["UF"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Estado Civil:</b></label>
HTML;
    echo utf8_encode($dados["ESTADO_CIVIL"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Sexo:</b></label>
HTML;
    echo $dados["SEXO"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Cargo:</b></label>
HTML;
    echo utf8_encode($dados["CARGO"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Email:</b></label>
HTML;
    echo utf8_encode($dados["EMAIL"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Endereço:</b></label>
HTML;
    echo utf8_encode($dados["ENDERECO"]);
    
    
echo <<<HTML
    
  </br><center>
  <label><b>Bairro:</b></label>
HTML;
    echo utf8_encode($dados["BAIRRO"]);
    
echo <<<HTML
    
  </br><center>
  <label><b>Cep:</b></label>
HTML;
    echo $dados["CEP"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Telefone:</b></label>
HTML;
    echo $dados["TELEFONE_FIXO"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Celular:</b></label>
HTML;
    echo $dados["CELULAR"];
    
  echo <<<HTML
    
  </br><center>
  <label><b>Idade:</b></label>
HTML;
    echo $dados["IDADE"];
    
echo <<<HTML
    
  </br><center>
  <label><b>Data de Nascimento:</b></label>
HTML;
    echo $dados["DATA_NASCIMENTO"];
    
    
    
echo <<<HTML
    </center>
    </br>
  </div>  <!--/content-->
  </body>
  
HTML;

echo<<<html
  </div>
  <br>
html;
}


function iniciosocio(){
	echo <<< html
<div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
      <div class="container" class="col-sm-12 col-md-12 col-lg-12">
        <center><h3><b>Por que usar nosso sistema?</b></h3></center>
          <p class="texto-justificado">O novo sistema irá resolver os problemas de excesso de alunos e organizar a agenda dos responsáveis do
            sócio pedagógico. Primeiramente irá ter uma página somente com o acesso a profissionais da área, com isso eles
            irão podem trabalhar com tranquilidade e eficácia. Haverá também a criação de uma página onde qualquer pessoa
            possa realizar um relato sobre o desempenho do aluno. E por final terá uma página para o aluno entrar com seu 
            prontuário e senha, para ver sua atual situação referente ao seu desempenho na escola.
          </p></br>
        <center><img src= "../Comum/if logo.png"/></br></br></center>
      </div>
    </div>
html;
}	



function contatoprofessor(){
  echo <<< html

      <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
        <div class="container" class="col-sm-12 col-md-12 col-lg-12">
          </br><center><img src= "if logo.png"></br></br></center>
          <p>
            <center>
              <b>Nome:</b>Luciana Martins de Souza Caselato Guimarães, <b>Função:</b>Psicóloga, <b>E-mail:</b>lmartins@ifsp.edu.br</br>
              <b>Nome:</b>Claudia Gardinalli Maia, <b>Função:</b>Auxiliar em Administração, <b>E-mail:</b>clau_gardinalli@ifsp.edu.br</br>
              <b>Nome:</b>Edma Elis Mantoni Dias, <b>Função:</b>Intérprete de Libras, <b>E-mail:</b>edma.elis@ifsp.edu.br</br>
              <b>Nome:</b>Williana Angelo da Silva, <b>Função:</b>Assistente Social, <b>E-mail:</b>williana@ifsp.edu.br
            </center>
          </p>
          <p><center>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Salto</br>
            Rua Rio Branco, 1780 - Vila Teixeira - Salto - SP - CEP 13320-271</br>
            Fone: (11) 4602-9191 - Fax: (11) 4602-9181</br> 
            E-mail: salto@ifsp.edu.br</center>
          </p>
             
        </div>
      </div>

html;
}

function relatarsocio(){

 echo <<< html
        <head>
          <script>
          function formatar(mascara, documento)
          {
            var i = documento.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(i)
            
            if (texto.substring(0,1) != saida)
            {
            documento.value += texto.substring(0,1);
            }
            
          }
        </script>

    </head>

<form method="post" action="relatoS.php" name="relatoproprio" onSubmit="return validaForm()">

    <body class="corpo">
      <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">
        <div class="container" class="col-sm-12 col-md-12 col-lg-12">
          <br>
            <div class="form-group">
                <center><h3><b>Ficha de Relato</b></h3></center><br>
                <label id="pad"  for="nomedorelator">Nome do Relator</label>
                <div id="pad">
                  <select name="nomerelator" class="form-control">
                      <option value="" selected hidden>Selecione o Relator</option>
                      <option value="Claudia">Claudia</option>
                      <option value="Edma">Edma</option>
                      <option value="Luciana">Luciana</option>
                      <option value="Williana">Williana</option>
                     </select>
                </div>
            </div>

              <div class="form-group">
                <label id="pad" for="cpf" >CPF</label>
                <div id="pad">
                  <input  type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##'                                                                                                                      , this)">
                </div>
              </div>

              <div class="form-group">
                <label id="pad" for="relacaocomaluno" >Relação com Aluno</label>
                  <div id="pad">
                    <input  type="text" class="form-control" id="relacaocomaluno" name="relacaoaluno" placeholder="Digite a relação com aluno">
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="nomedoaluno" >Nome do Aluno</label>
                  <div id="pad">
                    <input  type="text" class="form-control" id="nomedoaluno" name="nomealuno" placeholder="Digite o nome do aluno">
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="curso">Curso</label>
                  <div id="pad">
                    <select class="form-control" name="curso">
                      <option value="" selected hidden>Selecione o Curso</option>
                      <option value="Tecnico integrado ao ensino medio">Técnico integrado ao ensino médio</option>
                      <option value="Tecnico em automacao industrial">Técnico em automação industrial</option>
                      <option value="Tecnico em informatica">Técnico em informática</option>
                     </select>
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="modulo">Módulo</label>
                  <div id="pad">
                    <select class="form-control" name="modulo">
                      <option value="" selected hidden>Selecione o Módulo</option>
                      <option value="1">1º Módulo</option>
                      <option value="2">2º Módulo</option>
                      <option value="3">3º Módulo</option>
                      <option value="4">4º Módulo</option>
                      <option value="5">5º Módulo</option>
                      <option value="6">6º Módulo</option>
                      <option value="7">7º Módulo</option>
                      <option value="8">8º Módulo</option>
                     </select>
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="telefone">Telefone</label>
                <div id="pad">
                  <input  name="tell" type="text" class="form-control" id="telefone" placeholder="Digite o seu telefone" maxlength="12" onkeypress="formatar('##.####-####', this)">
                </div>
              </div>  

              <div class="form-group">
                <label id="pad" for="email" >E-Mail</label>
                  <div id="pad">
                    <input  name="email" type="text" class="form-control" id="email" placeholder="Digite o seu e-mail">
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="mensagem">Mensagem de Relato</label>
                <div id="pad">
                  <textarea class="form-control" rows="3" name="msg" placeholder="Digite sua mensagem..."></textarea>
                </div>
              </div>
                <br>  
                
              <center>
                <div class="form-group" id="alinhado">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">Relatar</button>
                  </div>
                </div>

                <div class="form-group" id="alinhado">
                  <div class="col-sm-12">
                    <button type="reset" class="btn btn-success">Limpar</button>
                  </div>
                </div>

                   </div></center>
          </div>
        </div>
        </form>
    </body>
     </form>
     

html;

}

function realizaragendamentos() {

  echo<<< html

  <form method="post" name="agendamento" action="agendamentosocio.php" onSubmit="return validaForm()">

 <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">
        <div class="container" class="col-sm-12 col-md-12 col-lg-12">
            <br>
              <div class="form-group">
                  <center><h3><b>Realizar Agendamento</b></h3></center><br>
                  <label id="pad" for="data">Data</label>
                  <div id="pad">
                    <input name="data" type="date" class="form-control" id="data">
                  </div>
              </div>

              <div class="form-group">
                 <label id="pad" for="hora">Hora</label>
                  <div id="pad">
                    <input name="hora"  type="time" class="form-control" id="hora">
                  </div>
              </div>

              <div class="form-group">
                 <label id="pad" for="agendar">Agendar com</label>
                  <div id="pad">
                    <select name="agendarcom" class="form-control">
                        <option value="" selected hidden>Selecione</option>
                        <option value="Claudia">Claudia</option>
                        <option value="Edma">Edma</option>
                        <option value="Luciana">Luciana</option>
                        <option value="Williana">Williana</option>
                       </select>
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="prontuariofuncionario">Prontuário do Funcionário</label>
                  <div id="pad">
                    <input name="prontuariofuncionario" type="text" class="form-control" id="prontuariofuncionario" placeholder="Digite o prontiário do funcionário">
                  </div>
              </div>

              <div class="form-group">
                <label id="pad" for="prontuarioaluno">Prontuário do Aluno</label>
                  <div id="pad">
                    <input name="prontuarioaluno" type="text" class="form-control" id="prontuarioaluno" placeholder="Digite o prontiário do aluno">
                  </div>
              </div>

              <div class="form-group">
                  <label id="pad" for="mensagem">Mensagem de Relato</label>
                  <div id="pad">
                    <textarea name="msg" class="form-control" rows="3" placeholder="Digite sua mensagem..."></textarea>
                  </div>
              </div>

              <br>  
                  
              <center>
                <div class="form-group" id="alinhado">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">Relatar</button>
                  </div>
                </div>

                <div class="form-group" id="alinhado">
                  <div class="col-sm-12">
                    <button type="reset" class="btn btn-success">Limpar</button>
                  </div>
                </div>

               
                </div></center>
        </div>
      </div>
    </body>

html;
}

function visualizaragendamentos() {
    include ("../comum/conexao.php");
    $pdo = conectar();
  
    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
      header("location: ../comum/Login.html");
    } 
    
    // RECEBE AS VARIÁVEIS VIA POST E TRATA O SQL INJECTION FINALIZANDO COM A CODIFICAÇÃO MD5
    
  try{  
    $sql = "SELECT * FROM agendamento";
    $stmt = $pdo->query($sql);
    
    /*$sql = "SELECT * FROM relato ORDER BY ID_RELATO DESC";
    $stmt = $pdo->query($sql);*/


  echo <<<html
  
  <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
    <div class="container" class="col-sm-12 col-md-12 col-lg-12">
      <center><h3><b>Agendamentos</b></h3></center>

         <center>

           <div class="col-sm-12 col-md-12 col-lg-12 btn-success" >
                    <b>
                      <div class="col-sm-2 col-md-2 col-lg-2" >ID Relato</div>
                      <div class="col-sm-3 col-md-3 col-lg-3">Data/Hora</div>
                      <div class="col-sm-2 col-md-2 col-lg-2">Agendado com</div>
                      <div class="col-sm-3 col-md-3 col-lg-3">Prontuário funcionário</div>
                      <div class="col-sm-2 col-md-2 col-lg-2">Relato</div>
                    </b>

            </div>

          </center>
  
   

html;


    $i = 1;      
    while($dados = $stmt->fetch()){

      echo <<<HTML
  <script>
        window.history.forward(1);
      </Script>

      <script>
        $('#myModal').on('shown.bs.modal', function () {
           $('#myInput').focus()
        })
      </script>

HTML;
    echo <<<html
        
html;
    echo <<<HTML
  <center>
        <div class="col-sm-12 col-md-12 col-lg-12 table2" >
          <div class="col-sm-2 col-md-2 col-lg-2" >   

HTML;
            echo $dados["ID_AGENDAMENTO"];

    echo <<<HTML
            </div>            
                <div class="col-sm-3 col-md-3 col-lg-3">      
HTML;
                  $datas = $dados["DATA"];
                  echo date('d/m/Y',  strtotime($datas));
                  echo " ";
                  echo $dados["HORA"];                  
    echo <<<HTML
                </div>
                  <div class="col-sm-2 col-md-2 col-lg-2">      
HTML;
                    echo utf8_encode($dados["AGENDAR_COM"]);
    echo <<<HTML
                  </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">      
HTML;
                      echo $dados["PRONTUARIO_FUNCIONARIO"];
    echo <<<HTML
                  </div>
                    <div class="col-sm-2 col-md-2 col-lg-2"> 

                    <center><label><a data-toggle="modal" href="#myModal$i">Relato</a></label></center> 

              <div class="modal fade" id=myModal$i tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center>
                      <h4 class="modal-title" style="color:black;" id="myModalLabel">RELATO</h4>
                      <div class="modal-body">
                      <div class="form-group" style="color:black;">
         
HTML;
                echo $dados["DEMANDA"];      

            
    echo <<<HTML
                   </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>
      </center>
HTML;

$i++;
    }
      
    
echo <<<HTML
        

  </div>  <!--/content-->
  </body>
    
HTML;
    
  } catch (PDOException $e) {

    echo $e->getMessage();

    }

}  

function ListadeAlunos(){
    include ("../comum/conexao.php");
    $pdo = conectar();

    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
      header("location: ../comum/Login.html");
    } 
    
    $sql = "SELECT * FROM aluno ORDER BY NOME ASC";
    $stmt = $pdo->query($sql);


  echo<<< html
  <div class="container" class="col-sm-12 col-md-12 col-lg-12"> 
  <center><h3><b>Lista de Nomes - Aluno</b></h3></center> 
    <div class="container" class="col-sm-12 col-md-12 col-lg-12">

        <center>

          <div class="col-sm-12 col-md-12 col-lg-12 btn-success" id="dev-table" >
          <b>
            <div class="col-sm-4 col-md-4 col-lg-4">Nome</div>
            <div class="col-sm-4 col-md-4 col-lg-4">Prontuario</div>                   
            <div class="col-sm-4 col-md-4 col-lg-4">Curso</div>            
          </b>

          </center>        

html;


    while($dados = $stmt->fetch()){

    echo <<<HTML
  <center>
        <div class="col-sm-12 col-md-12 col-lg-12 table2" >
          <div class="col-sm-4 col-md-4 col-lg-4" >   

HTML;
            echo utf8_encode($dados["NOME"]);

    echo <<<HTML
      </div>
          <div class="col-sm-4 col-md-4 col-lg-4" >  

HTML;
            echo $dados["PRONTUARIO"];
    echo <<<HTML
      </div>
          <div class="col-sm-4 col-md-4 col-lg-4" >  

HTML;
            echo utf8_encode($dados["CURSO"]);


    echo<<<html
    </div>
    </div>
html;
}
echo <<<HTML
        
  
  </div>  <!--/content-->
  <br>
  </div>
HTML;
}

function ListadeFunc(){
    include ("../comum/conexao.php");
    $pdo = conectar();

    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
    header("location: ../comum/Login.html");
    } 
    
    $sql = "SELECT * FROM funcionarios ORDER BY NOME ASC";
    $stmt = $pdo->query($sql);


  echo<<< html
  <div class="container" class="col-sm-12 col-md-12 col-lg-12"> 
  <center><h3><b>Lista de Nomes - Funcionário</b></h3></center> 
    <div class="container" class="col-sm-12 col-md-12 col-lg-12">

        <center>

          <div class="col-sm-12 col-md-12 col-lg-12 btn-success" id="dev-table" >
          <b>
            <div class="col-sm-4 col-md-4 col-lg-4">Nome</div>
            <div class="col-sm-4 col-md-4 col-lg-4">Prontuario</div>                   
            <div class="col-sm-4 col-md-4 col-lg-4">Cargo</div>            
          </b>

          </center>        

html;


    while($dados = $stmt->fetch()){

    echo <<<HTML
  <center>
        <div class="col-sm-12 col-md-12 col-lg-12 table2" >
          <div class="col-sm-4 col-md-4 col-lg-4" >   

HTML;
            echo utf8_encode($dados["NOME"]);

    echo <<<HTML
      </div>
          <div class="col-sm-4 col-md-4 col-lg-4" >  

HTML;
            echo $dados["PRONTUARIO"];
    echo <<<HTML
      </div>
          <div class="col-sm-4 col-md-4 col-lg-4" >  

HTML;
            echo utf8_encode($dados["CARGO"]);


    echo<<<html
    </div>
    </div>
html;
}
echo <<<HTML
        
  
  </div>  <!--/content-->
  <br>
  </div>
HTML;
}


function relatoss() {
    include ("../comum/conexao.php");
    $pdo = conectar();

    
    if(!isset($_SESSION['IDlogin']) && (!isset($_SESSION['NomeLogin']))){
      header("location: ../comum/Login.html");
    } 
    
    $sql = "SELECT * FROM relato ORDER BY DATA_RELATO DESC";
    $stmt = $pdo->query($sql);
    
    /*$res = $stmt->fetchAll();/*
    /*$res = $stmt->fetch(PDO::FETCH_ASSOC);*/

  echo <<<html
  
  <div class="container-fluid" class="col-sm-12 col-md-12 col-lg-12">  
    <div class="container" class="col-sm-12 col-md-12 col-lg-12">
      <center><h3><b>Relatos</b></h3></center>

         <center>

          <div class="col-sm-12 col-md-12 col-lg-12 btn-success" >
          <b>
            <div class="col-sm-2 col-md-2 col-lg-2">Data Relato</div>
            <div class="col-sm-2 col-md-2 col-lg-2">Nome do Relator</div>
                      
            <div class="col-sm-2 col-md-2 col-lg-2">Nome do Aluno</div>
            <div class="col-sm-3 col-md-3 col-lg-3">Curso</div>
            <div class="col-sm-1 col-md-1 col-lg-1">Modulo</div>
            <div class="col-sm-1 col-md-1 col-lg-1">Dados</div>
            
            <div class="col-sm-1 col-md-1 col-lg-1">Relato</div>
          </b>

          </center>
  
   

html;


    $i = 1;      
    while($dados = $stmt->fetch()){

      echo <<<HTML
  <script>
        window.history.forward(1);
      </Script>

      <script>
        $('#myModal').on('shown.bs.modal', function () {
           $('#myInput').focus()
        })
      </script>

HTML;
    echo <<<html
        
html;
    echo <<<HTML
  <center>
        <div class="col-sm-12 col-md-12 col-lg-12 table2" >
          <div class="col-sm-2 col-md-2 col-lg-2" >   

HTML;
            $datas = $dados["DATA_RELATO"];
                  echo date('d/m/Y h:i:s',  strtotime($datas));
    echo <<<HTML

            </div>            
                <div class="col-sm-2 col-md-2 col-lg-2">      
HTML;
                  echo utf8_encode($dados["NOMERELATOR"]);                  
    
    echo <<<HTML
                  </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">      
HTML;
                      echo utf8_encode($dados["NOMEALUNO"]);
    echo <<<HTML
                  </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">      
HTML;
                      echo utf8_encode($dados["CURSO"]);
    echo <<<HTML
                  </div>
                    <div class="col-sm-1 col-md-1 col-lg-1">      
HTML;
                      echo $dados["MODULO"];


    echo <<<HTML
                  </div>            

                    <div class="col-sm-1 col-md-1 col-lg-1"> 

                    <center><label><a data-toggle="modal" href="#myModal1$i">Detalhes</a></label></center> 

              <div class="modal fade" id=myModal1$i tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center>
                      <h4 class="modal-title" style="color:black;" id="myModalLabel"><b>Dados Detalhados</b></h4>
                      <div class="modal-body">
                      <div class="form-group" style="color:black;">
                      <br>
         
HTML;

echo<<<HTML
<br>
<label><b>Relaçao com o Aluno: </b></label>
HTML;
    echo utf8_encode($dados["RELACAOALUNO"]);

echo<<<HTML
<br>
<br>
<label><b>Telefone Relator: </b></label>
HTML;
    echo utf8_encode($dados["TELEFONE"]);

echo<<<HTML
<br>
<br>
<label><b>CPF Relator: </b></label>
HTML;
     $dados["CPFRELATOR"];

echo<<<HTML
<br>
<br>
<label><b>E-mail Relator: </b></label>
HTML;
    echo utf8_encode($dados["EMAIL"]);



echo<<<HTML
<br>
<br>
<br>
<br>
<br>
</div>
</div>
</div>
</div>
          </div>
        </div>
HTML;


    echo <<<HTML
                  </div>            

                    <div class="col-sm-1 col-md-1 col-lg-1"> 

                    <center><label><a data-toggle="modal" href="#myModal2$i">Relato</a></label></center> 

              <div class="modal fade" id=myModal2$i tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <center>
                      <h4 class="modal-title" style="color:black;" id="myModalLabel"><b>RELATO</b></h4>
                      <div class="modal-body">
                      <div class="form-group" style="color:black;">
                      <br>
         
HTML;

  echo ($dados["MENSAGEM"]);      

echo<<<HTML
<br>
<br>
<br>
<br>
<br>
<center><div class="form-group" id="alinhado">
          <div class="col-sm-12">
            <button class="btn btn-success"><a class="link" href="realizaragendamentos.php"> Realizar Agendamento</a></button>
          </div>
        </div>
HTML;
            
    echo <<<HTML
                   </div>
                  </div>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>
      </center>
HTML;

$i++;
    }
      
    
echo <<<HTML
        

  </div>  <!--/content-->
  </body>
    
HTML;
    
  /**} catch (PDOException $e) {

    echo $e->getMessage();

    }**/
}

function Sair() {
  session_start();
  
  unset($_SESSION['IDlogin']);
  unset($_SESSION['NomeLogin']);
  session_destroy();
  header ("location: ../comum/login.html");
}
?>