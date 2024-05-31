<form action="user.kick.sh.php" method="post">
  <input type="hidden" name="room" value="<?php echo $room[$i]; ?>">
  <input type="hidden" name="user" value="<?php echo $user; ?>">
    <button title="Удалить участника" type="submit" class="btn btn-danger btn-sm">
      <i class="fas fa-user-xmark fa-fw"></i>
    </button>
</form>
