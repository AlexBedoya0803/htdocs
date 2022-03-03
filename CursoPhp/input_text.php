<?php 

    $txtNombre = "";
    $radioSexo = "";
    $chkPhp="";
    $chkHtml="";
    $chkCss="";

    $lsAnime = "";

    if($_POST){
        $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
        $radioSexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : "";

        //Recepcionando valores de checkbox
        $chkPhp = (isset($_POST['chkPhp'])=='si') ? 'checked':'';
        $chkHtml = (isset($_POST['chkHtml'])=='si') ? 'checked':'';
        $chkCss = (isset($_POST['chkCss'])=='si') ? 'checked':'';

        //Recepcionando valores de un select

        $lsAnime = ( isset($_POST['lsAnime']) ) ? $_POST['lsAnime']:'';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST) { ?>
        <strong>Hola, soy <?php echo $txtNombre." y mi sexo es ".$radioSexo."."; ?></strong>
    <?php } ?>

    <form action="input_text.php" method="post">

        <label for="">Nombre: </label>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id=""><br>

        <label for="">Sexo: </label><br>

        <label for="">Masculino: </label>
        <input type="radio" <?php echo ($radioSexo=="masculino")?"checked":""; ?> name="sexo" value="masculino" id=""><br>

        <label for="">Femenino: </label>
        <input type="radio" <?php echo ($radioSexo=="femenino")?"checked":""; ?> name="sexo" value="femenino" id=""><br>

        <label for="">Estás aprendiendo...</label>
        <br>Php<input type="checkbox" <?php echo $chkPhp; ?> name="chkPhp" value="si" id="">
        <br>Html<input type="checkbox" <?php echo $chkHtml; ?> name="chkHtml" value="si" id="">
        <br>Css<input type="checkbox" <?php echo $chkCss; ?> name="chkCss" value="si" id="">
        <br>

        Anime favorito... <br>
        <select name="lsAnime" id="">

            <option value="ninguna">Ninguna serie</option>
            <option value="naruto" <?php echo ( $lsAnime=='naruto' ) ? 'selected' : ''; ?> >Naruto</option>
            <option value="bleach" <?php echo ( $lsAnime=='bleach' ) ? 'selected' : ''; ?>>Bleach</option>
            <option value="dragon" <?php echo ( $lsAnime=='dragon' ) ? 'selected' : ''; ?>>Dragon ball</option>
            <option value="one" <?php echo ( $lsAnime=='one' ) ? 'selected' : ''; ?>>One piece</option>

        </select>

        <br><input type="submit" value="Enviar">

    </form>

</body>
</html>