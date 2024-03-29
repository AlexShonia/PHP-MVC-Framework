<?php
use app\core\form\TextareaField;

/** @var  $this \app\core\View */
/** @var  $model \app\models\ContactForm */

$this->title = 'Contact';
?>
<h1>Contact Us</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>