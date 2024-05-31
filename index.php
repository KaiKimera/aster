<!doctype html>
<html class="h-100" lang="en" data-bs-theme="auto">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content=""/>
  <title>Конференции</title>
  <link rel="stylesheet" href="bootstrap.min.css"/>
  <link rel="stylesheet" href="fonts.min.css"/>
  <link rel="stylesheet" href="main.css"/>
</head>
<body class="d-flex flex-column h-100 bg-body-secondary">
  <header><?php require(getcwd() . '/index.header.php'); ?></header>
  <main class="container py-5">
    <div class="all">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php
          $count = shell_exec(getcwd() . '/room.count.sh');
          $l = 0;
          for ($i = 0; $i < $count; $i++):
            $l = $l + 1;
            $room[$i] = (int)shell_exec(getcwd() . "/room.name.sh $l");
            $users[$i] = (int)shell_exec(getcwd() . "/room.users.sh $room[$i]");
            $users = array_filter(explode("\n", $users[$i]));
          ?>
            <div class="col">
              <div id="room-<?php echo $room[$i]; ?>" class="card room">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <h5><?php echo $room[$i]; ?></h5>
                    </div>
                    <div>
                      <?php if ($users): ?>
                        <?php require(getcwd() . '/room.kick.form.php'); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <?php require(getcwd() . '/room.users.php'); ?>
                </ul>
              </div>
            </div>
          <?php endfor; ?>
      </div>
    </div>
  </main>
  <footer class="mt-auto border-top bg-body-tertiary"><?php require(getcwd() . '/index.footer.php'); ?></footer>
  <script src="main.js" crossorigin="anonymous" defer></script>
</body>
</html>
