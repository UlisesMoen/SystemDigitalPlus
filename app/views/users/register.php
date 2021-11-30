<?php require APPROOT . '/views/shared/header2.php'; ?>
    <form class="login" action="<?php echo URLROOT . '/users/register'; ?>" method="post">
        <div>
            <h2 class="h2DR">Digital Plus</h2>
        </div>
        <h2 class="h2C"> Crear una cuenta</h2>
        <p class="pRegistro">Por favor llena los campos para poder registrarse</p>
        <div class="form-group">
            <label for="name" class="textRe">Nombre completo: <sup>*</sup></label>
            <input type="text" name="name" class=" inText form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid':''; ?>" value="<?php echo $data['name'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
        </div>
        <div class="form-group">
            <label for="email" class="textRe">Email: <sup>*</sup></label>
            <input type="email" name="email" class=" inText2 form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid':''; ?>" value="<?php echo $data['email'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
        </div>
        <div class="form-group">
            <label for="password" class="textRe">Contraseña: <sup>*</sup></label>
            <input type="password" name="password" class=" inText3 form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid':''; ?>" value="<?php echo $data['password'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
        </div>
        <div class="form-group">
            <label for="confirm_password" class="textRe">Confirmar contraseña: <sup>*</sup></label>
            <input type="password" name="confirm_password" class=" inText4 form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid':''; ?>" value="<?php echo $data['confirm_password'];?>"><br>
            <span class="invalid-feedback"><?php echo $data['confirm_password_err'];?></span>
        </div>
                <input type="submit" value="Registrar" class="btn"><br><br>
                <a class="textN" href="<?php echo URLROOT . '/users/login'; ?>">¿Ya tienes cuenta?, inicia sesión</a>
        </div>
    </form>
    </body>
</html>