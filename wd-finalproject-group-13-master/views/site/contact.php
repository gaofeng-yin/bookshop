<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>
       <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.399017040153!2d-6.768693885138051!3d41.79816397839283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3a4a1e68dc77cf%3A0x747061f50b2ff984!2sInstituto%20Politecnico%20De%20Braganca%2C%205300-252%20Bragan%C3%A7a!5e0!3m2!1spt-PT!2spt!4v1590000537056!5m2!1spt-PT!2spt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <!-- Contact Details Column -->
      <div class="col-lg-4 ">
        <h3 class="h3-responsive font-weight-bold blue-text">Contact Details</h3>
        <p>
          Portugal
          <br>Instituto Politecnico De Braganca, 5300-252 Bragança
          <br>
        </p>
        <p>
          <abbr title="Phone">Phone</abbr>: (+351) 932222222
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:projetodwgrupo13@gmail.com">projetodwgrupo13@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Working time</abbr>: Monday - Friday: 8:30 AM to 00:00 PM
        </p>
      </div>
    </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us if you have any question:</h4>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="row">
                      <div class="col-lg-6">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                      </div>
                      <div class="col-lg-6">
                    <?= $form->field($model, 'email') ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                    <?= $form->field($model, 'subject') ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                      </div>
                      <div class="col-lg-6">
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-3">{input}</div></div>',
                    ]) ?>
                      </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
