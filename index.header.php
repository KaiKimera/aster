<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?php echo $i18n['asterisk']; ?> <code><?php echo $srvIp; ?></code> / <?php echo $i18n['conferences']; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navTopBar"
            aria-controls="navTopBar" aria-expanded="false" aria-label="Переключить навигацию">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navTopBar">
      <ul class="navbar-nav ms-auto">
        <?php if ($_SERVER['PHP_AUTH_USER'] == 'root'): ?>
          <?php require 'index.menu.power.php'; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
