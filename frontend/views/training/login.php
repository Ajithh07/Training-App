<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;



$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
<div class="login_clss">
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password_hash')->passwordInput() ?>
    

    <div class="form-group">
        <div class="loginclass">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>