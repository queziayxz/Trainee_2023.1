<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, inital-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/listaPostAdmin.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:100,400"
      rel="stylesheet"/>
    <link rel="stylesheet" href="../../../public/css/form_posts_styles.css" />
    <title>Lista de Posts - Radiator Springs Gazette</title>
    <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg" />
  </head>

  <body>
    <div class="table-box">
      <div>
        <h1 class="page-title">Lista de Posts</h1>
        <button  data-modal="modal-add" class="add-button botao-modal" title="Adicionar novo post" id="mybtnAdd"><i class="fa-solid fa-file-circle-plus"></i> Adicionar Post</button>
      </div>
      <table>
        <thead>
          <tr class="table-line" class="table-title">
            <td>#</td>
            <td class="nome-cabecalho">TÍTULO</td>
            <td class="nome-cabecalho">DATA</td>
            <td>OPÇÕES</td>
          </tr>
        </thead>
        <tbody>
          <tr class="table-line animacao-linha">
            <td>1</td>
            <td class="texto">Você sabia?</td>
            <td class="texto">15/09/2023</td>
            <td class="option-button">
              <button data-modal="modal-edita" class="icon-button botao-modal"  title="Editar" id="mybtnEdita"><i class="fa-solid fa-pen-to-square"></i></button></a>
              <button data-modal="modal-visu" class="icon-button botao-modal" title="Visualizar" id="mybtnVisu"><i class="fa-solid fa-file"></i></button></a>
              <button data-modal="modal-excluir" class="icon-button botao-modal" title="Remover" id="mybtnDel"><i class="fa-solid fa-trash"></i></button></a>
            </td>
          </tr>
          <tr class="table-line animacao-linha">
            <td>2</td>
            <td class="texto">Curiosidades</td>
            <td class="texto">06/06/2023</td>
            <td class="option-button">
              <button data-modal="modal-edita" class="icon-button botao-modal" title="Editar" id="mybtnEdita"><i class="fa-solid fa-pen-to-square"></i></button></a>
              <button data-modal="modal-visu" class="icon-button botao-modal" title="Visualizar" id="mybtnVisu"><i class="fa-solid fa-file"></i></button></a>
              <button data-modal="modal-excluir" class="icon-button botao-modal" title="Remover" id="mybtnDel"><i class="fa-solid fa-trash"></i></button></a>
            </td>
          </tr>
          <tr class="table-line animacao-linha">
            <td>3</td>
            <td class="texto">Você sabia?</td>
            <td class="texto">30/01/2023</td>
            <td class="option-button">
              <button data-modal="modal-edita" class="icon-button botao-modal" title="Editar" id="mybtnEdita"><i class="fa-solid fa-pen-to-square"></i></button></a>
              <button data-modal="modal-visu" class="icon-button botao-modal" title="Visualizar"><i class="fa-solid fa-file"></i></button></a>
              <button data-modal="modal-excluir" class="icon-button botao-modal" title="Remover" id="mybtnDel"><i class="fa-solid fa-trash"></i></button></a>
            </td>
          </tr>
          <tr class="table-line animacao-linha">
            <td>4</td>
            <td class="texto">Curiosidades</td>
            <td class="texto">05/10/2023</td>
            <td class="option-button">
              <button data-modal="modal-edita" class="icon-button botao-modal" title="Editar" id="mybtnEdita"><i class="fa-solid fa-pen-to-square"></i></button></a>
              <button data-modal="modal-visu" class="icon-button botao-modal" title="Visualizar" id="mybtnVisu"><i class="fa-solid fa-file"></i></button></a>
              <button data-modal="modal-excluir" class="icon-button botao-modal" title="Remover" id="mybtnDel"><i class="fa-solid fa-trash"></i></button></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal visualizar -->
    <div id="modal-visu" class="modal modal-p">
      <!-- Conteudo Modal Visualizar -->
      <section class="area-vizualizar">
        <form class="formulario-vizualizar">
          <div class="coluna-esquerd">
            <div class="coluna-esquerd-item mb-3"></div>
            <h1>Título do Post</h1>
            <img
              src="../../../public/assets/relampago.jpg"
              class="img"
              alt="imagem post"
            />
            <p class="conteudoo">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
              blanditiis fuga in consectetur, et harum nobis commodi saepe
              placeat porro laboriosam ex? Molestiae beatae explicabo quisquam
              repellat ex ad dolorem.
            </p>
            <div class="coluna-esquerda-item mb-3">
              <p class="dataa">Data: dd/mm/yyyy</p>
            </div>
            <div class="botoes_excluir_cancelar">
            <button type="button" class="btn2 botao-modal fechar-modal" id="myBtn"> Voltar</button>
            </div>  
          </div>

        </form>
      </section>
    </div>

    <!--   Modal Excluir -->
    <div id="modal-excluir" class="modal2 modal-p">
       <!-- Conteudo Modal Excluir -->
        <section class="area-excluir">
        <form action="/admin/delete" method="POST" class="formulario-excluir">
          <div class="coluna-esquerda">
            <p class="titulo">Excluir Posts</p>
            <p class="texto2">Tem certeza que deseja excluir seu post?</p>
            <div class="botoes_excluir_cancelar">
              <button type="button" class="btnVoltarC botao-modal fechar-modal" id="myBtn">Cancelar</button>
              <button type="button" class="btnVoltarC botao-modal fechar-modal">Excluir</button>
            </div>
          </div>
        </form>
      </section>
    </div>

    <!-- Modal Adicionar -->

    <div id="modal-add" class="modal3 modal-p">
      <!-- Conteudo Modal Adicionar -->  
        <section class="area-posts">
            <form class="formulario">
              <div class="coluna-esquerda">
                <h1>Adicionar Post</h1>
                <div class="coluna-esquerda-item mb-3" id="titulo">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Título:</label>
                  <br>
                  <input class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
        
                <div class="coluna-esquerda-item mb-3">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Selecionar Imagem:</label>
                  <br>
                  <label for="arquivo" id="img">Enviar Arquivo</label>
                  <input class="form-control" type="file" name="arquivo" id="arquivo">
        
                </div>
        
        
                <div class="coluna-esquerda-item mb-3 data2" >
                  <form method="post">
        
                    <div class="form-group">
                      <br>
                      <label class="control-label data2" for="date">Data:</label>
                      <br>
                      <input type="date" id="txtDate" name="date" class="meu-input">
        
                    </div>
        
                  
                </div>
        
                <div class="coluna-esquerda-item mb-3 conteudo2">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Conteúdo:</label>
                  <br>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="botoes_excluir_cancelar">
                  <button type="button" class="btn botao-modal fechar-modal">Voltar</button>
                  <button type="button" class="btn botao-modal fechar-modal">Publicar</button>
                </div>
              </form>
        
                
            </div>
            
          </form>
        </section>
    </div>
       

    <!-- Modal Editar -->


    <div  id="modal-edita" class="modal4 modal-p">
         <!-- Conteudo Modal Editar -->
      <section class="area-posts">
  
            <form class="formulario">
              <div class="coluna-esquerda">
                <h1 class="">Editar Post</h1>
                <div class="coluna-esquerda-item mb-3" id="titulo">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Título:</label>
                  <br>
                  <input class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
        
                <div class="coluna-esquerda-item mb-3">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Selecionar Imagem:</label>
                  <br>
                  <label for="arquivo" id="img">Enviar Arquivo</label>
                  <input class="form-control" type="file" name="arquivo" id="arquivo">
                  <br>
                </div>
                <br>
          
                <div class="coluna-esquerda-item mb-3" >
                  <form method="post">
        
                    <div class="form-group data2">
                      <br>
                      <label class="control-label" for="date">Data:</label>
                      <br>
                      <input type="date" id="txtDate" name="date">
        
                    </div>
        
                  </form>
                </div>
        
                <div class="coluna-esquerda-item mb-3 conteudo2">
                  <br>
                  <label for="exampleFormControlInput1" class="form-label">Conteúdo:</label>
                  <br>
                  <input type="text" class="form-control conteudo3" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="botoes_excluir_cancelar">
                  <button type="button" class="btn2 botao-modal fechar-modal">Cancelar</button>
                  <button type="button" class="btn2 botao-modal fechar-modal">Confirmar</button>
                </div>
        
                
            </div>
 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
              crossorigin="anonymous"></script>
          </form>
        </section>
        </div>
            
            
          
                
           

  </body>
    <script type="text/javascript" src="../../../public/js/modal_posts.js"></script>
    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>
</html>


