<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
    <style>
        input[type="number"]:focus {
            border-color: #adb5bd;
            box-shadow: none;
            outline: 0 none;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus
         {
            border-color: #198754;
            box-shadow: none;
            outline: 0 none;
        }

        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }

        body {
            font-family: 'Sofia Pro', sans-serif;
        }

        .bg-jogo{
            background-color: rgb(50, 59, 69);
        }
                
    </style>                           
</head>
<body class="bg-dark">
    <nav class="navbar navbar-dark bg-dark border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">Roulette Game</a>
            <form class="d-flex">                
                <button class="btn text-light me-2" type="button" 
                data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</button>
                <button class="btn btn-success" type="button"
                data-bs-toggle="modal" data-bs-target="#registerModal">Cadastra-se</button>
            </form>
        </div>
    </nav> 
                   
    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mt-2">Area de Login</h6>                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="text-center">
                            <img class="mb-4" src="https://avatars.githubusercontent.com/u/97763857?v=4" alt="" width="80px">                                                
                            <h4>Faça login em sua conta</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder=" ">
                                <label for="floatingInput" class="text-muted">Email</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword" class="text-muted">Senha</label>
                            </div>
                            <div class="mb-3">                            
                                <a href="#" class="text-muted">Esqueceu sua senha?</a>                               
                            </div>
                            <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="text-muted" role="button"
                    data-bs-toggle="modal" data-bs-target="#registerModal">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastrar -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mt-2">Area de cadastro</h6>                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="text-center">
                            <img class="mb-4" src="https://avatars.githubusercontent.com/u/97763857?v=4" alt="" width="80px">                                                
                            <h4>Cadastre-se em nossa plataforma</h4>
                        </div>
                        <div class="container">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder=" ">
                                <label for="floatingInput" class="text-muted">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder=" ">
                                <label for="floatingInput" class="text-muted">Email</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder=" ">
                                <label for="floatingPassword" class="text-muted">Senha</label>
                            </div>                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder=" ">
                                <label for="floatingInput" class="text-muted">Data nascimento</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Comece já</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    Ao se cadastrar, você concorda com os <a href="#">Termos e Condições.</a>                                    
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <div class="py-5 border-bottom">
            <div class="container bg-jogo p-2 text-light rounded">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col-md-8">                        
                        <div class="card-header bg-transparent border-bottom">
                            <h6>Giros Anteriores</h6>
                            <div class="d-flex" style="overflow: auto; overflow-x: hidden">                                
                                <?php
                                    for($i = 0; $i < 12; $i++){
                                        $var = '<div class="p-2 mx-1 rounded bg-success">Cor</div>';
                                        echo $var;
                                    }
                                ?>                                
                            </div>                                                
                        </div>
                        <div class="mt-3">
                            <img src="img/responsive-img.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="card-body">
                            <!-- logica do jogo  -->
                            <span id="countdown">Resultado</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" 
                                role="progressbar" style="width: 100%" aria-valuenow="100" 
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>                                                       
                        </div>
                    </div>
                    <div class="col-md-4 border-start">
                        <form>                                                        
                            <div class="container py-2">
                                <label for="exampleInputPassword1" class="form-label">Selecionar cor</label>                                                                                                
                                <div class="row">
                                    <div class="col-4 d-grid gap-2">
                                        <button type="button" class="btn btn-success fs-6">x2</button>
                                    </div>
                                    <div class="col-4 d-grid gap-2">
                                        <button type="button" class="btn btn-light fs-6 text-success">x15</button>                               
                                    </div>
                                    <div class="col-4 d-grid gap-2">
                                        <button type="button" class="btn btn-dark fs-6">x2</button>                            
                                    </div>
                                </div>                                
                                                                                                                         
                                    <div class="form-floating text-muted mt-2">
                                        <input type="number" class="form-control" id="floatingPassword" placeholder="Quantia">
                                        <label for="floatingPassword">R$ Quantia</label>                                                                                
                                    </div>
                                
                                <!-- logica para aguarda a roleta terminar -->
                                <div class="d-grid gap-2 mt-2">
                                    <button class="btn btn-success btn-lg fs-6" type="button">Comece o jogo</button>                                
                                </div>                                                          
                            </div>                                                                                                                                                    
                        </form>                        
                    </div>   
                </div>
            </div>
        </div>

        <div class="py-5 bg-success border-bottom">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="p-3 rounded bg-jogo text-light">
                            <div class="container">
                                <h4>Vitória 2x</h4>
                                <table class="table text-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">Total Apostas</th>
                                            <th scope="col">R$ 00,00</th>
                                        </tr>
                                        <tr class="table-dark">
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Quantia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td>Value</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 rounded bg-jogo text-light">
                            <div class="container">
                                <h4>Vitória 15x</h4>
                                <table class="table text-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">Total Apostas</th>
                                            <th scope="col">R$ 00,00</th>
                                        </tr>
                                        <tr class="table-dark">
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Quantia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td>Value</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 rounded bg-jogo text-light">
                            <div class="container">
                                <h4>Vitória 2x</h4>
                                <table class="table text-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">Total Apostas</th>
                                            <th scope="col">R$ 00,00</th>
                                        </tr>
                                        <tr class="table-dark">
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Quantia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td>Value</td>                                    
                                        </tr>                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Voltar ao topo</a>
            </p>
            <p class="mb-1">Name game &copy; Empresa, breve descrição!</p>            
        </div>
    </footer>

    <script>
        var timeleft = 15;
        var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = "Girando...";
            } else {
                document.getElementById("countdown").innerHTML = "Girando em " + timeleft;
            }
            timeleft -= 1;
        }, 1000);        

        // decrementando progress bar em 15 secundos
        var i = 100;
        var bar = document.querySelector(".progress-bar");
        
        function makeProgress(){
            if(i > 0){
                i--;
                bar.style.width = i + "%";                
            }
            
            setTimeout("makeProgress()", 15 * 1000 / 100); //15 segundos para 100 passos
        }
        makeProgress();
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>