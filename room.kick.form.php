<form action="room.kick.sh.php" method="post">
  <input type="hidden" name="room" value="<?php echo $room[$i]; ?>">
  <button title="Удалить ВСЕХ участников" type="submit" class="btn btn-danger btn-sm">
    <i class="fas fa-xmark fa-fw"></i>
  </button>
</form>
