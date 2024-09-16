<?php
include('read.php');
if($_POST){
    echo "ello";
    addupdate();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h2>Todo List</h2>
    <a class="btn btn-primary" href="/customer/CreateNewTodo.php" role="button">New Objective</a>
    <br>
    <table class="table">
        <thead>
        <td>
        <th>Todo</th>
        </td>
        </thead>
        <tbody>
        <?php
        displayToDoList();
        ?>
        </tbody>
    </table>

    <form method="post">
        <label for="fname">Todo:</label><br>
        <input type="text" id="todo" name="todo1" value=""><br>
        <br>
        <input type="submit" value="Update">
    </form>
</div>

</body>
</html>