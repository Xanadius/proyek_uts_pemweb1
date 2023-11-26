<div class="card">
  <div class="card-body">
    <h5 class="card-title">
      <span class="badge badge-secondary">Produk</span>
    </h5>
    <table class="table" class="card border-secondary mb-3">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Jenis Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once("./config/koneksi.php");

        if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM produk";
        $result = $connection->query($sql);

        if (!$result) {
          die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
              <td>" . $row["id_produk"] . "</td>
              <td>" . $row["nama_produk"] . "</td>
              <td>" . $row["tipe_produk"] . "</td>
              <td>" . $row["harga"] . "</td>
              <td>" . $row["stok"] . "</td>
              <td>" . $row["keterangan"] . "</td>
            </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>