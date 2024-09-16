<?php

include('function.php');

function getPersonalinfo(){
    $requesteMthord = $_SERVER["REQUEST_METHOD"];   // GET, POST, PUT, DELETE

    if($requesteMthord !== "GET"){
        $data = [
            'status' => 405,
            'message' => $requesteMthord. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);

    }else{
        $customerList = getPersonalInformation();
        echo $customerList;
    }

}

function getDescritption(){
    $request = $_SERVER["REQUEST_METHOD"];

    if($request !== "GET"){
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    } else{
        $println = getDescription();
        echo $println;
    }
}

function getTheSkills(){
    $request = $_SERVER["REQUEST_METHOD"];
    if($request === 'GET'){
        echo getSkills();
    } else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }
}

function getTheImage(){
    $request = $_SERVER["REQUEST_METHOD"];

    if($request === 'GET'){
        echo getImage();
    } else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}

function getTheProject(){
    $request = $_SERVER["REQUEST_METHOD"];

    if($request === 'GET'){
        echo getProjects();
    }else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}

function getASL(){
    $request = $_SERVER["REQUEST_METHOD"];

    if($request === 'GET'){
        echo ASL();
    } else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }
}

function getHobbies(){
    $request = $_SERVER["REQUEST_METHOD"];

    if($request === 'GET'){
        echo hobbies();
    }else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}

function postTodo(){
    $request = $_SERVER['REQUEST_METHOD'];

    if($request === 'POST'){
            $todo = $_POST['todo1'];
            addToDo($todo);
        echo '<html><head><meta http-equiv="refresh" content="0;url=ToDoList.php"></head><body></body></html>';
        exit(); // Ensure no further code is executed

    }else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}


function Getupdate(){
    $request = $_SERVER['REQUEST_METHOD'];

    if($request === 'POST'){
        $todo = $_POST['todo1'];
        print_r($todo);
        addupdate($todo);

    }else{
        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}

function getTheCurrentList(){
    $request = $_SERVER['REQUEST_METHOD'];
    if($request === 'GET'){
        echo displayToDoList();
    }else{

        $data = [
            'status' => 405,
            'message' => $request. 'Method not allowed',
        ];
        http_response_code(405);
        echo json_encode($data);
    }

}
