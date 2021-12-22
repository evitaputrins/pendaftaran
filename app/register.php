<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css" type="text/css">
    <title>Halaman Register</title>
</head>

<body>
<div class="box">
        <div class="container">
            <div class="title">
             <h2>Sign up</h2>
            </div>
            <div class="form">  
                <div class="form-input">
                <form action="proses/user-input.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label class="label" for="nama">Nama</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label class="label" for="username">Username</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="password">Password</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="roles">Roles</label></td>
                         <td class="equal"> : </td>
                         <td>
                            <select class="form-select" id="roles" placeholder="roles" name='roles'>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="back">
                    <button type="submit" name="submit" value="Submit" id="submit-btn">Simpan</button>
                </div>
                 </form>
                 <div class="form-submit">
                <h4><a href="login.php">Kembali</a></h4>
                 </div>
            
        </div>
</body>
</html>