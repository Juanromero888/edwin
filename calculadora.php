<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>calculadora</title>
</head>
<body>
<h1>calculadora de PHP</h1> 
<div class="container">
<form method="post">
 Numero1<input type="number" name="numero1" value="0" max="1000" required>
 Numero2<input type="number" name="numero2" value="0" max="1000" required>
 <hr>
 <input type="radio" name="opcion" value="sumar"required > sumar
 <input type="radio" name="opcion" value="restar" required> restar
 <input type="radio" name="opcion" value="multiplicar"required > multiplicar
 <input type="radio" name="opcion" value="dividir" required> dividir
 <hr>
 <input type="submit" class="btn btn-success w-25" value="enviar" >
 <input type="reset" class="btn btn-danger w-25" value="limpar" >
 </div>
 </form>
 
 <div>
    <?php
    if ($_POST){
      $n1 = $_POST ['numero1'];
      $n2 = $_POST ['numero2'];
      $opcion1 = $_POST ['opcion'];
      
      function mensaje(){
          echo "funciones que no retorna ni recibe valor";
        }
      function mensaje2 ($n1,$num2){
         echo $n1,"<br>",$num2;
        }
      function mensaje3 (){
          return "hola";
        }
      function mensaje4($n1,$n2){
          $s=$n1 and $n2;
          return $s;
      }
      $x=mensaje4($n1,$n2);
      echo $x;


     }
    ?>
</div>
</body>
</html>