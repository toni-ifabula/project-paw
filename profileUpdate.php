<?php
    include('db.php');

    //$id = $_GET['id'];

    $query = mysqli_query($con, "SELECT * FROM users WHERE id=1");

    while($user_data = mysqli_fetch_assoc($query))
    {
        $nama = $user_data['nama'];
        $tgl = $user_data['tanggal_lahir'];
        $jk = $user_data['jenis_kelamin'];
        $email = $user_data['email'];
        $no_telp = $user_data['no_telp'];
        $provinsi = $user_data['provinsi'];
        $alamat = $user_data['alamat'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile Update</title>
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- AWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/styleToni.css">
</head>

<body>

    <nav class="navbar navbar-custom navbar-expand-sm">
        <img src="asset/logo.png" width="50" height="50" alt="">
        <p class="navbar-brand-custom">Yuk Titip</p>
        <ul class="navbar-nav ml-auto"> 
            <li class="nav-item"> 
                <a class="nav-link" href="#"> 
                  Home 
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="contactUs.php"> 
                  Contact Us
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="aboutUs.php"> 
                  About Us 
                </a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="aboutUs.php"> 
                  <i class="fa fa-user fa-lg" aria-hidden="true" style="color: white;"></i> 
                </a> 
            </li> 
        </ul> 
    </nav>

    <div class="container">

        <h1 style="text-align: center; margin: 3rem 0rem">UPDATE PROFILE</h1>

        <form action="proses/changeProfileProses.php" method="post">
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input name="nama" type="text" class="form-control" id="inputNama"  value=<?php echo $nama; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTgl" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input name="tgl" type="date" class="form-control" id="inputTgl"  value=<?php echo $tgl; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputJK" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <input name="jk" type="text" class="form-control" id="inputJk" value=<?php echo $jk; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="email" class="form-control" id="inputEmail" value=<?php echo $email; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTelp" class="col-sm-3 col-form-label">No. Telp</label>
                <div class="col-sm-9">
                    <input name="no_telp" type="number" class="form-control" id="inputTelp" value=<?php echo $no_telp; ?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputProv" class="col-sm-3 col-form-label">Provinsi</label>
                <div class="wrapper col-sm-9">
                    <select name="provinsi" id="" class="form-control" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                        <option value="-" selected>-- Select Provinsi --</option>
                        <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat ">Sumatera Barat </option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau ">Kepulauan Riau </option>
                        <option value="Jambi">Jambi</option>
                        <option value="Bengkulu">Bengkulu</option>
                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Banten">Banten</option>
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                        <option value="Bali">Bali</option>
                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                        <option value="Gorontalo">Gorontalo</option>
                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Maluku Utara">Maluku Utara</option>
                        <option value="Papua">Papua</option>
                        <option value="Papua Barat">Papua Barat</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <input name="alamat" type="text" class="form-control" id="inputAlamat" value=<?php echo $alamat; ?>>
                </div>
            </div>

            <div class="row" style="margin: 1rem 0rem;">
                <div class="col-sm-12 text-center">
                    <button name="updateProfile" class="btn btn-primary btn-md center-block" Style="width: 100px;">Submit</button>
                    <button type="reset" class="btn btn-danger btn-md center-block" Style="width: 100px; background-color: red;">Reset</button>
                </div>
            </div>
            
        </form>
    </div>  
</body>

</html>