
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tugas Lintang</title>
  </head>
  <body>
  
  <div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Form Tugas</h4>
      <form class="needs-validation" method="POST" action="aksi.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName" >Nama</label>
            <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">NIM</label>
            <input type="number" name="nim" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
      
            <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <!-- <select class="form-control" id="exampleFormControlSelect1">
            <option name="jenis_kelamin" value="Laki-Laki">Laki-laki</option>
            <option name="jenis_kelamin" value="Perempuan">Perempuan</option>
          </select> -->

          <select name="jenis_kelamin" id="jenis_kelamin">
            <option type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</option>
            <option type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</option>
          </select>
          </div>

          <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select name="status" id="status">
            <option type="radio" name="status" value="Menikah"> Menikah</option>
            <option type="radio" name="status" value="Belum Menikah"> Belum Menikah</option>
          </select>
          </div>

         
          <div class="">
            <label for="lastName">Nomer telepon</label>
            <input type="number" name="no_hp" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Alamat</label>
  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea5" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
