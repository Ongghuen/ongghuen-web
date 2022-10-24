<body>

  <section class="main">

    <h3>anggap ini home</h3>

    <section>
      <?php
      require '../core/core.php';
      $lists = App::get('db')->selectAll("test");
      foreach ($lists as $list):
      ?>
        <p><?= $list->nama ?></p>
        <p><?= $list->harga ?></p>
      <?php endforeach; ?>
    </section>

    <div>
      <button class="btn btn-default">
        Okay
      </button>
      <a href="../core/process/logout.php" class="link">
        <button class="btn btn-default">Logout</button>
      </a>
    </div>
  </section>

</body>