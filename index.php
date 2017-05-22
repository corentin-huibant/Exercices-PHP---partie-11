<?php 
    $numberRegex = '#^[0-9]{1,}$#';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
      <input type="text" name="chiffre1" value="<?php 
                                                      if(isset($_POST['zero'])){ 
                                                            echo $_POST['chiffre1'] = 0;
                                                      }elseif(isset($_POST['chiffre1'])){ 
                                                            echo $_POST['chiffre1']; 
                                                            
                                                      }else{ 
                                                            echo $_POST['chiffre1'] = 0; 
                                                      } 
                                                      ?>"/>
      <input type="text" name="chiffre2" value="<?php 
                                                      if(isset($_POST['zero'])){ 
                                                             echo $_POST['chiffre2'] = 0;                                                      
                                                      }elseif(isset($_POST['chiffre2'])){
                                                             echo $_POST['chiffre2']; 
                                                      }else{ 
                                                             echo $_POST['chiffre2'] = 0; 
                                                      } 
                                                      ?>"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="zero" value="remise à zéro"/>
    </form>
    <p>Résultat : <?php 
    if(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == true && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == true && isset($_POST['addition'])){
        echo $_POST['chiffre1'] + $_POST['chiffre2'];
    }elseif(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == true && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == true && isset($_POST['soustraction'])){
        echo $_POST['chiffre1'] - $_POST['chiffre2'];
    }elseif(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == true && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == true && isset($_POST['multiplication'])){    
        echo $_POST['chiffre1'] * $_POST['chiffre2'];
    }elseif(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == true && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == true && isset($_POST['division'])){
        echo $_POST['chiffre1'] / $_POST['chiffre2'];
    }elseif(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == true && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == true && isset($_POST['zero'])){
        echo 0;  
    }elseif(isset($_POST['chiffre1']) && preg_match($numberRegex, $_POST['chiffre1']) == false && isset($_POST['chiffre2']) && preg_match($numberRegex, $_POST['chiffre2']) == false){
        echo "veuillez entrer des nombres !";
    }?>
    </p>
  </body>
</html>
