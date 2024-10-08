<?php

require '../Modelos/Composer/vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

class ComprobarMail {
    public static function VerificarSiMailExiste($email) {
        $email     = $email;
        $validator = new SmtpEmailValidator($email);
        $results   = $validator->validate();

        $Existe = $results[$email];
        return $Existe;
    }
}

/*$Existe = ComprobarMail::VerificarSiMailExiste("jadvid3mon@gmail.com");
echo $Existe?"Si":"No"; */

?>
