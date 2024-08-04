<?php
$count = (int)shell_exec(getcwd() . '/room.count.sh');
$n = 0;
?>

<?php for ($i = 0; $i < $count; $i++): ?>

  <?php
  $n = escapeshellarg($n + 1);
  $room = (int)shell_exec(getcwd() . "/room.name.sh '" . $n . "'");
  ?>
  <div class="col">
    <div id="room-<?php echo $room; ?>" class="card room" data-room="<?php echo $room; ?>">
      <div class="card-header">
        <div class="d-flex align-items-center">
          <div class="flex-grow-1 ext-name">
            <h5><?php echo $room; ?></h5>
          </div>
          <form class="room-kick" action="room.kick.php" method="post">
            <input type="hidden" name="room" value="<?php echo $room; ?>">
            <button title="<?php echo $i18n['room.kick']; ?>" type="submit" class="btn btn-danger btn-sm">
              <i class="fas fa-xmark fa-fw"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="card-body"></div>
      <div class="card-footer">
        <form class="user-kick" action="user.kick.php" method="post">
          <input type="hidden" name="room" value="<?php echo $room; ?>">
          <div class="input-group">
            <input type="number" class="form-control" name="user" min="0" step="1"
                   placeholder="<?php echo $i18n['user.kick.placeholder']; ?>"
                   aria-label="<?php echo $i18n['user.id']; ?>" required>
            <button title="<?php echo $i18n['user.kick']; ?>" type="submit" class="btn btn-outline-danger">
              <i class="fas fa-user-xmark fa-fw"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endfor; ?>
