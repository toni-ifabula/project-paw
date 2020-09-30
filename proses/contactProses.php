<?php
    if (isset($_POST['submitMessage'])) { 

        include('../db.php'); 
        
        // $id = $_POST['id'];
        
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $message = $_POST['message'];

        $query = mysqli_query($con, "INSERT INTO contact(nama_depan, nama_belakang, email, no_telp, txt_message) 
            VALUES ('$nama_depan', '$nama_belakang', '$email', '$no_telp', '$message')")
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