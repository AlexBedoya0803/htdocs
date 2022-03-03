<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro</title>
</head>
<body>
    <style>
        td{
            width: 20px;
            text-align: center;
        }
        body {
            display: flex;
            width: 100vw;
        }
        main {
            margin: auto;
        }
        input[type=text]{
            width: 30px;
        }
        p{
            width: 70%;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <main>
        <table border="">
            <tr>
                <th colspan="6">
                    ESCENARIO
                </th>
            </tr>
            <tr>
                <td>F\C</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <?php for ($i=1; $i < 6; $i++) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td> <?php echo $_POST['fila']; ?></td>
                    <td>L</td>
                    <td>L</td>
                    <td>L</td>
                    <td>L</td>
                </tr>
            <?php } ?>
        </table>
        <form action="index.php" method="POST">
            <p>
                <label for="">Fila</label></span>
                <input type="text" name="fila" id="">
            </p>
            <p>
                <span><label for="">Puesto</label></span>
                <input type="text" name="puesto" id="">
            </p>
            <p>
                <span><label for="">Reservar</label></span>
                <input type="radio" name="accion" value="reservar">
            </p>
            <p>
                <span><label for="">Comprar</label></span>
                <input type="radio" name="accion" value="comprar">
            </p>
            <p>
                <span><label for="">Liberar</label></span>
                <input type="radio" name="accion" value="liberar">
            </p>
            <p>
                <input type="submit" value="Enviar" class="btn">
                <input type="reset" value="Borrar" class="btn">
            </p>
            <p>
                <textarea name="cadena" id="" cols="30" rows="10">
                    <?php print_r($_POST); ?>
                </textarea>
            </p>
        </form>
    </main>
</body>
</html>