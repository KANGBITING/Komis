<?php
include 'config.php'; // sambungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username  = $_POST['username'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = $_POST['password'] ?? '';

    // Validasi sederhana
    if (!empty($username) && !empty($birthdate) && !empty($email) && !empty($password)) {

        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                    alert('Invalid email format');
                    window.location.href='SignIn.html';
                  </script>";
            exit();
        }

        // Validasi panjang password
        if (strlen($password) < 8) {
            echo "<script>
                    alert('Password must be at least 8 characters');
                    window.location.href='SignIn.html';
                  </script>";
            exit();
        }

        // Enkripsi password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah email sudah terdaftar
        $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            echo "<script>
                    alert('Email sudah terdaftar!');
                    window.location.href='Home.php';
                  </script>";
            exit();
        }

        // Simpan user baru ke database
        $stmt = $conn->prepare("INSERT INTO users (username, birthdate, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $birthdate, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo "<script> 
                    alert('Sign in success!\\Welcome, $username');
                    window.location.href='Home.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan saat menyimpan data.');
                    window.location.href='SignIn.html';
                  </script>";
        }

        $stmt->close(); 
        $check->close();

   
   //agar bisa nyambung ke home e
   header("Location: Home.php");
    } else {
        echo "<script>
                alert('Please fill all fields!');
                window.location.href='SignIn.html';
              </script>";
    }
} else {
    header("Location: SignIn.html");
    exit();
}

$conn->close();
?>

