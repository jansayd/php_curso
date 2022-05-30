<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Upload de arquivos</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form method="post" enctype="multipart/form-data" class="m-3">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo" aria-describedby="arquivo"
                    aria-label="Upload" required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['enviar'])){
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";

        //VALIDAÇÕES
        $tamanhoMax = 2097152; //2MB 
        $permitido = array("jpg","png","jpeg","mp4");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        //VERIFICAR SE TEM TAMANHO PERMITIDO
        if ($_FILES['arquivo']['size'] >= $tamanhoMax){
           echo '<div class="alert alert-danger" role="alert">
            Tamanho máximo de 2 MB. Não foi possivel fazer upload! 
          </div>';
        }else{
            //VERIFICAR SE EXTENSAO É PERMITIDA
            if(in_array($extensao, $permitido)){
                //echo "Permitido";
                $pasta = "imagens/";
                if(!is_dir($pasta)){
                    mkdir($pasta,0755);
                }

                $tmp = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($tmp,$pasta.$novoNome)){
                     echo '<div class="alert alert-success" role="alert">
                    Upload realizado com sucesso!
          </div>';
                }else{                   
                    echo '<div class="alert alert-danger" role="alert">
                    Erro: Não foi possível fazer upload!! 
          </div>';
                }

            }else{
                echo '<div class="alert alert-danger" role="alert">
                Erro: Extensão ('.$extensao.') não permitida!
      </div>';
               
            }       
        }

    }    

    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>