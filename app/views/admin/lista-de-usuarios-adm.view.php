<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/listaUsuariosAdmin.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">
        
        <title>Lista de Usuários - Radiator Springs Gazette</title>
        <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg">
        
        <link rel="stylesheet" href="../../../public/css/styleadduser.css">
    </head>

    <body>
        <div class="table-box">
            <div>
                <h1 class="page-title">Lista de Usuários</h1>
                <button data-modal="modal-add" class="add-button botao-modal"  title="Adicionar novo usuário"><i class="fa-solid fa-user-plus"></i> Adicionar Usuário</button>
            </div>
            <table>
                <thead>
                    <tr class="table-line" class="table-title">
                        <td>#</td>
                        <td class="nome-cabecalho">NOME</td>
                        <td class="email-cabecalho">EMAIL</td>
                        <td>OPÇÕES</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) : ?>
                        <tr class="table-line animacao-linha">
                            <td><?php echo $user->id; ?></td>
                            <td class="email"><?php echo $user->name; ?></td>
                            <td class="email"><?php echo $user->email; ?></td>
                            <td class="option-button">
                                <button data-modal="modal-edit<?php echo $user->id; ?>" class="icon-button botao-modal" id="botao-editar" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button data-modal="modal-visualizar<?php echo $user->id; ?>" class="icon-button botao-modal" title="Visualizar"><i class="fa-solid fa-user"></i></i></button>
                                <button data-modal="modalExcluirUser<?php echo $user->id; ?>" class="icon-button botao-modal" title="Remover"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                            <div id="modal-visualizar<?php echo $user->id ?>" class="modal-visu-user modal-p">
                                <div class="area area-visualizar">
                                    <div class="texto">
                                        <h1>Detalhes do Usuário</h1>
                                    </div>
                                    <div class="campos">
                                        <div class="form-bar">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $user->name ?>" readonly>
                                        </div>
                                        <div class="form-bar">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" value="fulano@gmail.com" readonly>
                                        </div>
                                        <div class="form-bar">
                                            <label for="senha">Senha:</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" value="fluminense123" readonly>
                                        </div>
                                    </div>
                                    <div class="botoes_excluir_cancelar">
                                        <button type="button" class="fechar-modal botao-modal btn2">Voltar</button>
                                    </div>
                                </div>
                            </div>

                            <div id="modal-edit<?php echo $user->id ?>" class="modal-edition modal-p">

                                <div class="area area-visualizar">
                                  <form action="/usuarios/update" method="POST">               
                                    <div class="texto">
                                        <h1>Editar Usuário</h1>
                                    </div>
                                    <div class="campos">
                                        <div class="form-bar">
                                            <label for="nome">Nome:</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $user->name ?>">
                                        </div>
                                        <div class="form-bar">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $user->email ?>">
                                        </div>
                                        <div class="form-bar">
                                            <label for="senha">Senha:</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" value="<?php echo $user->password ?>">
                                        </div>
                                        <div class="botoes_excluir_cancelar">
                                            <button type="button" class="fechar-modal botao-modal btn2">Cancelar</button>
                                            <button type="submit" class="fechar-modal botao-modal btn2">Confirmar</button>
                                        </div>
                                    </div>
                                </form>   
                                </div>
                            </div>

                            <div id="modalExcluirUser<?php echo $user->id ?>" class="modal-excluir-user modal-p">
                                <div class="area area1">
                                  <form action="/usuarios/delete" method="POST">  
                                    <div class="texto">
                                        <h1 class = "excluir">Excluir Usuário</h1>
                                    </div>
                                        <h4>
                                            Tem certeza que deseja excluir o usuário Fulano da Silva?
                                        </h4>
                                        <input type="hidden" name="id" value="<?= $posts->id ?>">
                                            <div class="botoes_excluir_cancelar">
                                                <button type="button" class="btn2 botao-modal fechar-modal">Cancelar</button>
                                                <button type="submit" class="btn2 botao-modal fechar-modal">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>    
                                </div>
                            </div>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class = "main">
            <div id="modal-add" class = "modal-addition modal-p">
                <div class = "area area-visualizar">
                    <form>
                        <div class = texto>
                            <h1>Adicionar Usuário</h1>
                        </div>
                        <div class = "campos">
                            <div class = "form-bar">
                                <label for="nome">Nome:</label>
                                <input  class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class = "form-bar">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
        
                            <div class = "form-bar">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="botoes_excluir_cancelar">
                                <button type="button" class="fechar-modal botao-modal btn2">Voltar</button>
                                <button type="button" class="fechar-modal botao-modal btn2">Adicionar</button>
                            </div>
                        </div>
                  </form>
                </div>
            </div>


    </body>
    
    <script type="text/javascript" src="../../../public/js/modals.js"></script>
    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>
    
</html>