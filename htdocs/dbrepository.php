<?php
    $conn = mysqli_connect("localhost","root","","dane");

    function getUserList()
    {
        if (isset($_POST['filteredat'])) 
        {
            $filteredat = $_POST['filteredat']; 
        }
        else
        {
            $filteredat = null;
        };
        
    
        if ($filteredat != null)
        {
            $zapytanie = "SELECT * FROM users WHERE firstname like \"$filteredat%\" or surname like \"$filteredat%\" ";
        }
        else
        {
            $zapytanie = "SELECT * FROM users ";
        }
        global $conn;
        return mysqli_query($conn, $zapytanie);
    }

    function addUser()
    { 
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $pesel = $_POST['pesel'];
            $sql = "INSERT INTO users (firstname,surname,pesel)
            VALUES ('$firstname','$surname','$pesel')";
            global $conn;
            mysqli_query($conn, $sql);
    }

    if(isset($_POST['method']) and $_POST['method'] == "addUser")
    {
        addUser();
    }

    function getUser($id_user)
    {
        global $conn;
        $sql = "SELECT * FROM users WHERE id = $id_user";
        $ret = mysqli_query($conn, $sql);
        return $ret->fetch_assoc();
    }

    function editUser($id_user)
    {

            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $pesel = $_POST['pesel'];
            $sql = "UPDATE users SET firstname = '$firstname', surname = '$surname' , pesel = '$pesel' WHERE id = $id_user";
            global $conn;
            mysqli_query($conn, $sql);
    }

    if(isset($_POST['method']) and $_POST['method'] == "editUser")
    {
        editUser($_POST['user_id']);
    }

    function deleteUser($id_user)
    {
        $sql = "DELETE FROM users WHERE id = $id_user";
        global $conn;
        mysqli_query($conn, $sql);
    }

    if(isset($_GET['deleteUser']))
    {
        deleteUser($_GET['deleteUser']);
    }


?>