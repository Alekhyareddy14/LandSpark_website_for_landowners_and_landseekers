<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="jigelfirst.css">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <input type="text" placeholder="Search data" name="search">
            <button class="btn btn-dark btn-sm" name="submit">Search</button>
        </form>

        <div class="container my-5">
            <!-- ... previous code ... -->

<table class="table">
    <?php
    include 'connection.php'; // Make sure you include the connection file

    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        $sql = "SELECT * FROM sellregister2 WHERE district = '$search'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '<thead>
                        <tr>
                            <th>sl no</th>
                            <th>state</th>
                            <th>district</th>
                            <th>email</th>
                            <th>image</th>
                        </tr>
                    </thead>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tbody>
                            <tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['state'] . '</td>
                                <td>' . $row['district'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td><img src="' . $row['image'] . '"
                                 width="200" height="150"></td>
                            </tr>
                        </tbody>';
                }
            } else {
                echo '<h2 class="text-danger">Data not found</h2>';
            }
        }
    }
    ?>
</table>
    </div>

    <div class='light x1'></div>
    <div class='light x2'></div>
    <div class='light x3'></div>
    <div class='light x4'></div>
    <div class='light x5'></div>
    <div class='light x6'></div>
    <div class='light x7'></div>
    <div class='light x8'></div>
    <div class='light x9'></div>

</body>
</html>
