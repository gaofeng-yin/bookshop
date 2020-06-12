<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var amnah\yii2\user\Module $module
 * @var app\models\User $user
 * @var amnah\yii2\user\models\Profile $profile
 * @var amnah\yii2\user\models\Role $role
 * @var yii\widgets\ActiveForm $form
 */

$module = $this->context->module;
$role = $module->model("Role");
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($user, 'role_id')->dropDownList($role::dropdown()); ?>

    <?= $form->field($user, 'status')->dropDownList($user::statusDropdown()); ?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'newPassword')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($profile, 'full_name'); ?>

    <?= $form->field($user, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'access_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'logged_in_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'logged_in_at')->textInput() ?>

    <?= $form->field($user, 'created_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'created_at')->textInput() ?>

    <?= $form->field($user, 'updated_at')->textInput() ?>

    <?php // use checkbox for banned_at ?>
    <?php // convert `banned_at` to int so that the checkbox gets set properly ?>
    <?php $user->banned_at = $user->banned_at ? 1 : 0 ?>
    <?= Html::activeLabel($user, 'banned_at', ['label' => Yii::t('user', 'Banned')]); ?>
    <?= Html::activeCheckbox($user, 'banned_at'); ?>
    <?= Html::error($user, 'banned_at'); ?>

    <?= $form->field($user, 'banned_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
