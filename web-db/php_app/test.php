<!DOCTYPE html>
<html>
    <head>
        <title>Student registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <div class="container bg-dark text-white">
                <h1>Student registration</h1>
            </div>
            <div class="container">
                <table class="table table-dark text-white">
                    <thead>
                        <tr>
                            <th>
                                First name
                            </th>
                            <th>
                                Last name
                            </th>
                            <th>
                                Semester
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conn = new mysqli("web-db-service", "example_user", "mysql", "example", "8306");
                        $res = $conn->query("SELECT id, first_name, last_name, semester FROM student");
                        
                        while ($row = $res->fetch_assoc()):
                    ?>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['first_name'] ?>
                        </td>
                        <td>
                            <?= $row['last_name'] ?>
                        </td>
                        <td>
                            <?= $row['semester'] ?>
                        </td>
                    <?php
                        endwhile;
                        $conn->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </body>
</html>
