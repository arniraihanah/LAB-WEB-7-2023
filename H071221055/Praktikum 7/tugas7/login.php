<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        .input-group {
            display: flex;
            flex-direction: row;
            margin: 8px 0;
            align-items: center;
        }

        .input-group label {
            display: flex;
            justify-content: space-between;
            min-width: 216px;
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <h1>Login Form</h1>
    <form method="post" action="">
        <div class="input-group">
            <label for="username">Username<span>:</span></label>
            <input type="text" placeholder="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password<span>:</span></label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="role">Peran<span>:</span></label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>
        </div>
        <div class="input-group">
            <button type="submit">Masuk</button>
        </div>
    </form>

    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Your connection failed: " . $conn->connect_error);
        }

        //menjalankan/mengeksekusi query sql
        $sql = "SELECT username, password FROM users WHERE username='$username' AND role='$role'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc(); //Ini digunakan untuk memeriksa apakah hanya ada satu pengguna dengan informasi yang cocok. Jika hanya ada satu pengguna yang cocok, maka kode dalam kurung kurawal akan dijalankan.
            //utk mengambi1 1 baris data dalam query tapi asosiatif
            if (password_verify($password, $row["password"])) { //memeriksa apakah kata sandi yang dimasukkan oleh pengguna cocok dengan kata sandi yang ada di database
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role;

                if ($role == "admin") { // Jika kata sandi cocok, maka pengguna diizinkan masuk ke akun mereka. Tergantung pada peran (role) pengguna, mereka akan diarahkan ke halaman yang sesuai
                    header("Location: halaman_admin.php");
                } elseif ($role == "mahasiswa") {
                    header("Location: halaman_mahasiswa.php");
                } else {
                    echo "Invalid role.";
                }
                exit();
            } else {
                echo "Authentication failed. Please try again.";
            }
        } else {
            echo "Authentication failed. Please try again.";
        }
        //Meskipun bisa menghapus salah satu dari blok else ini, disarankan untuk mempertahankannya agar pengguna mendapatkan pesan kesalahan yang konsisten dan jelas jika autentikasi mereka gagal

        //kode ini digunakan untuk memeriksa apakah seseorang memiliki izin untuk masuk ke akun mereka dan mengalihkan mereka ke halaman yang sesuai berdasarkan peran mereka.

        $conn->close();
    }
    ?>
</body>

</html>