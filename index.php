<?php
include "connect.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary m-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tableName = "crud";
                $sql = "Select * from $tableName";
                $result = mysqli_query($connect, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $mobile = $row["mobile"];
                        $password = $row["password"];

                        echo
                        '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $password . '</td>
                        
                            <td>
                                <button class = "btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                                <button class = "btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class = "text-light">Delete</a></button>
                            </td>
                        </tr> ';
                    }
                }

                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>