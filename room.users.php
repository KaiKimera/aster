<?php foreach ($users as $user): ?>
  <li class="list-group-item phone">
    <div class="d-flex align-items-center">
      <div><i class="fas fa-phone fa-fw me-1"></i></div>
      <div class="flex-grow-1"><?php echo $user; ?></div>
      <div>
        <?php // require(getcwd() . '/user.kick.form.php'); ?>
      </div>
    </div>
  </li>
<?php endforeach; unset($user); ?>
