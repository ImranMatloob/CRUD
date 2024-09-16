<?php
require '../DBconnection.php';

function getPersonalInformation(){
    global $connect;
    $gettingInformation = "SELECT * FROM Personal_Information";
    $getInformation = mysqli_query($connect, $gettingInformation);


    if($getInformation){
        if(mysqli_num_rows($getInformation) > 0){
            $projectInformation = mysqli_fetch_all($getInformation, MYSQLI_ASSOC);
            $htmlOutput = '<ul class="info-list">';
            foreach($projectInformation as $line){
                $htmlOutput .= '<p class="info-item">';
                $htmlOutput .= '<strong></strong>' . htmlspecialchars($line['Name']). ' '
                    . htmlspecialchars($line['Second Name']). ' '
                    . htmlspecialchars($line['Age']). ' ';
                $htmlOutput .= '</p>';
            }
            return $htmlOutput;

        }else{
            $data = [
                'status' => 404,
                'message' => 'No customer details found',
            ];
            return json_encode($data);
        }

    } else{
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}

function getDescription() {
    global $connect;

    $gettingInformation = "SELECT Description FROM AboutMe";
    $getTheInformation = mysqli_query($connect, $gettingInformation);

    if ($getTheInformation) {
        if (mysqli_num_rows($getTheInformation) > 0) {
            $projectInformation = mysqli_fetch_all($getTheInformation, MYSQLI_ASSOC);
            http_response_code(200);
            $htmlOutput = '<ul class = "description">';
            foreach($projectInformation as $des){
                    $htmlOutput .= '<p class = "Description">';
                    $htmlOutput .= '<strong></strong>' . htmlspecialchars($des['Description']). ' ';
                    $htmlOutput .= '</p>';
                }
            return $htmlOutput;
        } else {
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }
    } else {
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }
}

function getSkills(){
    global $connect;
    $quaryVar = "SELECT * FROM Skills";
    $getTheQueary = mysqli_query($connect,$quaryVar);

    if($getTheQueary){
        if(mysqli_num_rows($getTheQueary) > 0){
            $projectInformation = mysqli_fetch_all($getTheQueary, MYSQLI_ASSOC);
            http_response_code(200);
            $htmlOutput = '<ul class = "skills">';
            foreach($projectInformation as $des){
                $htmlOutput .= '<p class = "skills">';
                $htmlOutput .= '<strong></strong>' . htmlspecialchars($des['HTML']). ' '
                . htmlspecialchars($des['Git']). ' ' . htmlspecialchars($des['Java']). ' '
                . htmlspecialchars($des['PHP']). ' ';
                $htmlOutput .= '</p>';
            }
            return $htmlOutput;
        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }
    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }

}

function getImage(){
    global $connect;
    $query = "SELECT * FROM Image";
    $getQuery = mysqli_query($connect,$query);
    if($getQuery){
        if(mysqli_num_rows($getQuery) >0){
            $row = mysqli_fetch_assoc($getQuery);

            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
            exit(); // Stop further script execution

        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }

    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }

}

function getProjects(){
    global $connect;
    $getTheProject = "SELECT * FROM Projects";
    $getTheQuery = mysqli_query($connect, $getTheProject);

    if($getTheQuery){
        if(mysqli_num_rows($getTheQuery) > 0){
            $projectInformation = mysqli_fetch_all($getTheQuery, MYSQLI_ASSOC);
            http_response_code(200);
            $htmlOutput = '<ul class = "projects">';
            foreach($projectInformation as $des){
                $htmlOutput .= '<p class="projects">';
                $htmlOutput .= '<strong><br>' . htmlspecialchars($des['Name']) . '</strong><br><br>';
                $htmlOutput .= htmlspecialchars($des['Description']);
                $htmlOutput .= '</p>';
            }
            return $htmlOutput;

        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }

    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }

}

function ASL()
{
    global $connect;
    $query = "SELECT * FROM ASL";
    $getQuery = mysqli_query($connect, $query);
    if($getQuery){
        if(mysqli_num_rows($getQuery) >0){
            $projectInformation = mysqli_fetch_all($getQuery, MYSQLI_ASSOC);
            http_response_code(200);
            $htmlOutput = '<ul class = "ASL">';
            foreach($projectInformation as $des){
                $htmlOutput .= '<p class="projects">';
                $htmlOutput .= '<strong><br>' . htmlspecialchars($des['Age']) . '</strong><br><br>';

                $htmlOutput .= htmlspecialchars($des['Sex']) .'</strong><br><br>'. htmlspecialchars($des['Location']);
                $htmlOutput .= '</p>';
            }
            return $htmlOutput;

        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }

    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }
}
function hobbies(){
    global $connect;
    $getHobbies = "SELECT * FROM Hobbies";
    $getQuery = mysqli_query($connect, $getHobbies);

    if($getQuery){
        if(mysqli_num_rows($getQuery)){
            $projectInformation = mysqli_fetch_all($getQuery, MYSQLI_ASSOC);
            http_response_code(200);
            $htmlOutput = '<ul class = "Hobbies">';
            foreach($projectInformation as $des){
                $htmlOutput .= '<p class="hobbies">';
                $htmlOutput .= '<strong><br>' . htmlspecialchars($des['Hobbies']) . ' ';
            }
            return $htmlOutput;

        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }

    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);

    }


}

function addupdate() {
    echo "do we get to here?";
    global $connect;

    $id =$_GET['id'];
    print_r($id);
    $todo = $_POST['todo1'];
    print_r($todo);


    $sql = "UPDATE `ToDoListAdvanced` SET `TodoList`='{$todo}' WHERE `id`='{$id}'";
    $excuteQuery = mysqli_query($connect, $sql);

    if ($excuteQuery) {
        if (mysqli_affected_rows($connect) > 0) {
            http_response_code(200);
            $data = [
                'status' => 200,
                'message' => 'Successfully posted',
            ];
            echo '<html><head><meta http-equiv="refresh" content="0;url=ToDoList.php"></head><body></body></html>';
            exit(); // Ensure no further code is executed
        } else {
            // No rows updated, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }
    } else {
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }
}


function addToDo($todo){

    global $connect;
    //$toString = implode($todo);
    $safeTodo = mysqli_real_escape_string($connect, $todo);
    $sql = "INSERT INTO `ToDoListAdvanced`(`TodoList`) VALUES ('$safeTodo')";
    $excuteQuery = mysqli_query($connect, $sql);

    if($excuteQuery){
        if(mysqli_affected_rows($connect) > 0){
            http_response_code(200);
            $data = [
                'status' => 200,
                'message' => 'successfully posted',
            ];
            return json_encode($data);
        }else{
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }

    }else{
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }
}


function displayToDoList()
{
    global $connect;
    $sql = "SELECT * FROM `ToDoListAdvanced`";
    $getSQL = mysqli_query($connect, $sql);

    if ($getSQL) {
        if (mysqli_num_rows($getSQL) > 0) {
            $htmlOutput = '<ul class="Todo">';
            // Fetch each row and append to HTML output


            while ($rows = mysqli_fetch_assoc($getSQL)){

                echo " 
 <tr>
    <td>{$rows['TodoList']}</td>
   <td>
        <a class='btn btn-primary btn-sm' href='/customer/Edit.php?id={$rows['id']}' role='button'>Edit</a>
        <a class='btn btn-danger btn-sm' href='/customer/delete.php?id={$rows['id']}' role='button'>Delete</a>
  </td>
 </tr>";

                $htmlOutput .= '<li class="Todo">';
                $htmlOutput .= '<strong>' . htmlspecialchars($rows['TodoList']) . '</strong>';
                $htmlOutput .= '</li>';
            }
            $htmlOutput .= '</ul>';
            return $htmlOutput;

        } else {
            // No rows found, handle as 404 Not Found
            $data = [
                'status' => 404,
                'message' => 'No information found',
            ];
            http_response_code(404);
            return json_encode($data);
        }
    } else {
        // Query failed, handle as 500 Internal Server Error
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        http_response_code(500);
        return json_encode($data);
    }
}

function getDelete(){
    global $connect;
    $id = $_GET['id'];
    $sql = "DELETE FROM `ToDoListAdvanced` WHERE `id` = '{$id}'";

    $excutequery = mysqli_query($connect, $sql);
    if($excutequery){
        echo '<html><head><meta http-equiv="refresh" content="0;url=ToDoList.php"></head><body></body></html>';
        exit(); // Ensure no further code is executed
    }else{
        echo "i dunno if you've deleted that";
    }
}