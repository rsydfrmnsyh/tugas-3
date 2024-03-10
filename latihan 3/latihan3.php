<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="login.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">
                    <p>Name</p>
                </div>
                <div class="col-sm-1">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>E-Mail</p>
                </div>
                <div class="col-sm-1">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Password</p>
                </div>
                <div class="col-sm-1">
                    <input type="password" name="password">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Tanggal Lahir</p>
                </div>
                <div class="col-sm-1">
                    <input type="date" name="birthday">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Program Studi</p>
                </div>
                <div class="col-sm-1">
                    <select name="major">
                        <option value="">. . .</option>
                        <option value="manajemen">Manajemen</option>
                        <option value="sistem informasi">Sistem Informasi</option>
                        <option value="ilmu komputer">Ilmu Komputer</option>
                        <option value="teknik industri">Teknik Industri</option>
                        <option value="psikologi">Psikologi</option>
                        <option value="ilmu komunikasi">Ilmu Komunikasi</option>
                        <option value="sastra inggris">Sastra Inggris</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Alamat</p>
                </div>
                <div class="col-sm-1">
                    <textarea type="text" name="address">
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Handphone</p>
                </div>
                <div class="col-sm-1">
                    <input type="number" name="phone">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <p>Jenis Kelamin</p>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="gender" value="male">Laki-Laki
                    <input type="radio" name="gender" value="female">Perempuan
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-1">
                    <input name="submit" type="submit" value="save" onclick="login()">
                    <input name="reset" type="reset" value="cancel">
                </div>
            </div>
        </div>
    </form>
    <script>
        function login(){
            alert("Sign up succesful!");
        }
    </script>
</body>
</html>