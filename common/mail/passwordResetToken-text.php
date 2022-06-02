<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Hola usuario <?= $user->username ?>,

Sigue el siguiente link para resetear tu contraseña:

<?= $resetLink ?>
