<div class="section py-3 bg-body-secondary">
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-2 small text-body-secondary align-items-center">
      <div class="col text-center text-lg-start">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <?php
            $heart = '<i class="fas fa-heart text-danger"></i>';
            printf("%s %s %s", $i18n['made_with'], $heart, $i18n['by']);
            ?>
            <?php
            $cr = 'PGEgaHJlZj0iaHR0cHM6Ly9kdW5hZXYuZGV2LyIgdGFyZ2V0PSJfYmxhbmsiPll1cmkgRHVuYWV2PC9hPg==';
            echo base64_decode($cr);
            ?>
          </li>
        </ul>
      </div>
      <div class="col text-center text-lg-end">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            &copy; <?php echo date('Y'); ?>
            <?php
            $cr = 'PGEgaHJlZj0iaHR0cHM6Ly9mZG4uaW0vIiB0YXJnZXQ9Il9ibGFuayI+Rm91bmRhdGlvbiBJTTwvYT4=';
            echo base64_decode($cr);
            ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
