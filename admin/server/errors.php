<?php if (isset($errors) && is_array($errors) && count($errors) > 0) : ?>
  <div class="error">
    <?php foreach ($errors as $error) : ?>
      <p><?php echo $error, ENT_QUOTES, 'UTF-8'; ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>