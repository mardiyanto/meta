<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>BELAJAR MOBILE PROGRAMING MATEMATIKA</h1>
  <p>KELAS MOZILA 4</p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>FORM PENJUMLAHAN</h3>
      <form action="proses.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">ANGKA 1</label>
                <input type="text" class="form-control"  placeholder="MASUKAN ANGKA" name="a">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">ANGKA 2</label>
                <input type="text" class="form-control"  placeholder="MASUKAN ANGKA" name="b">
            </div>
           
            <button type="submit" class="btn btn-primary">PROSES</button>
      </form>
    </div>
    <div class="col-sm-4">
      <h3>FORM PENGURANGAN</h3>
      <form action="pengurangan.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">ANGKA 1</label>
                <input type="text" class="form-control"  placeholder="MASUKAN ANGKA" name="a">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">ANGKA 2</label>
                <input type="text" class="form-control"  placeholder="MASUKAN ANGKA" name="b">
            </div>
           
            <button type="submit" class="btn btn-primary">PROSES</button>
      </form>
    </div>
  </div>
</div>