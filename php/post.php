<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Latihan Membuat Web Tanpa Reload</title>
    <!-- Bootstrap versi 4 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
  </head>

  <body class="bg-secondary">
    <div class="container-fluid mt-4">
      <!-- navbar bootstrap  -->
      <nav class="navbar navbar-light bg-light mb-4">
        <a class="navbar-brand" href="index.html">
          <img src="../img/logo.png" width="30" height="30" alt="" />
          Artisan Aroma Beans
        </a>
        <a href="./php/post.php">Login</a>
      </nav>
      <!-- form login -->
      <div class="row">
        <div class="col-9">
          <div id="content">
            <form action="./postAct.php" method="post">
              <label for="nama">Nama</label>
              <input type="text" id="nama" name="nama" />

              <label for="email">Email</label>
              <input type="text" name="email" id="email" />

              <input type="submit" value="Login" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
