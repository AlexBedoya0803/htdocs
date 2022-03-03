
<main>
    <form action="" method="POST">
        <div class="name">
            <label for="">Name: </label>
            <input type="text" required name="name" id="">
        </div>
        <div class="email">
            <label for="">Email: </label>
            <input type="email" required name="email" id="">
        </div>
        <div class="password">
            <label for="">Password: </label>
            <input type="password" required name="password" id="">
        </div>
        <div class="submit">
            <input type="submit" value="Send">
        </div>

            <?php if($_POST){ ?>
                <h1><?php echo $mensaje;?></h1>
                <a href="?controlador=usuarios&accion=login">Login</a>
            <?php } ?>

    </form>
</main>
