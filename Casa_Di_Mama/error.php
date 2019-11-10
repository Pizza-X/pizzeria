<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

<!-- doorloopt alle erros en toont alle erros op het scherm. Het doorloop elke error die geplaatst wordt in $errors. stopt pas als de laatste error is gegeven -->