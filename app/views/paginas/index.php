<?php require APPROOT . '/views/shared/header2.php'; ?>

<form class="login" action="<?php echo URLROOT . '/users/login'; ?>" method="post">
        <div>
            <h2 class="h2D">Digital Plus</h2>
        </div>
        <div class="form-group">
            <i class="fas fa-user"></i>
            <!-- <input type="text" name="admin" placeholder="Usuario"><br> -->
            <input type="email" name="email" class="form-control <?php echo ( !empty( $data['email_err'] ) ) ? 'is-invalid':''; ?>" placeholder="Ingrese su Correo" value="<?php echo  !empty( $data['email'] ) ?  $data['email']: '';?>"><br>
            <span class="error"><?php echo !empty( $data['email_err'] ) ? $data['email_err'] : '' ;?></span>
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i>
            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid':''; ?>" placeholder="Ingrese su Contraseña" value="<?php echo !empty( $data['password'] ) ? $data['password'] : '' ;?>"><br>
            <span class="error"><?php echo !empty( $data['password_err'] ) ? $data['password_err'] : '';?></span>
        </div>

        <br><button type="submit"> Entrar </button><br><br><br>
        <a  class="textN" href="<?php echo URLROOT . '/users/register'; ?>">¿No tienes cuenta?, Regístrese</a>
    </form>

</body>

</html>