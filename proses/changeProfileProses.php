<?php
    if (isset($_POST['updateProfile'])) { 

        include('../db.php'); 
        
        // $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $provinsi = $_POST['provinsi'];
        $alamat = $_POST['alamat']; 

        $query = mysqli_query($con, "UPDATE users SET nama='$nama', tanggal_lahir='$tgl', jenis_kelamin='$jk', 
            email='$email', no_telp='$no_telp', provinsi='$provinsi', alamat='$alamat' WHERE id=1") 
            or die(mysqli_error($con));
        
        if ($query) {
            echo
                '<script>
                    alert("Update Success"); window.location = "../profileUser.php"
                </script>';
        } else {
            echo
                '<script>
                    alert("Update Failed"); window.location = "../profileUser.php"
                </script>';
        }
    } else {
        echo
            '<script>
                window.history.back()
            </script>';
    }

?>