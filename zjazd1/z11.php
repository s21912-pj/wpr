<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_10</title>
</head>
<body>
  <form action="<?php echo $URI; ?>" method="post">
    <p>Text: <input type="text" name="txt11" /></p>
    <p><input type="submit" /></p>
  </form>
  <?php 
    $fSend = isset($_POST['txt11']);
    $fIsOk = false;
    if($fSend){
        $text = $_POST['txt11'];
        $fIsOk = !empty($text) && $text > 0;
    }
    if($fSend){
        if($fIsOk){
            $arrLetters = array();
            $addLetters = 0;
            $isPanagram = true;
            for ($i=0; $i < strlen($text); $i++) {
                $char = strtolower($text[$i]);
                if (preg_match("/^[a-z]$/i", $char)) {
                    if(in_array($char, $arrLetters)){
                        $isPanagram = false; 
                        break;
                    } else $arrLetters[$addLetters++] = $char;
                }
            }
            echo $isPanagram ? 'Ten tekst jest panagramem.' : 'Ten tekst nie jest panagramem.';
        } else echo 'BŁĄD'; 
    }
  ?>
</body>
</html>