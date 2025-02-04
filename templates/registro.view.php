<!DOCTYPE html>
<html lang="en">
<!--start:Intro -->
<?php require_once __DIR__ . '/intro.part.php'; ?>
<!--end:Intro -->

<body>
    <!--start: Navigation -->
    <?php require_once __DIR__ . '/navigation.part.php'; ?>
    <!--end:Navigation -->
<div id="login">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>¡Regístrate!</h1>
            <hr>
            <?php include __DIR__ . '/show-error.part.view.php' ?>
            <form clas="form-horizontal" action="/check-registro" method="post">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Nombre</label>
                        <input class="form-control" type="text" name="username" value="<?= $username ?? '' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Contraseña</label>
                        <input class="form-control" name="password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Repite la contraseña</label>
                        <input class="form-control" name="re-password" type="password">
                        <label class="label-control">Verificando que eres humano <img style="border: 1px solid #D3D0D0" src="/app/utils/captcha.php" id='captcha'></label>
                        <input class="form-control" name="captcha" type="text">
                        <button class="pull-right btn btn-lg sr-button">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--start:footer-->
<?php require_once __DIR__ . '/footer.part.php'; ?>
<!--end:footer-->
</body>

</html>