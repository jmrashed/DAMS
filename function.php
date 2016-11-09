<?php

include("connection.php");

function adminname($id) {
    include("connection.php");
    $sql = "SELECT * FROM superadmin where id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["email"];
        }
    } else {
        return "";
    }
}

function patientname($id) {
    include("connection.php");
    $sql = "SELECT * FROM patient where id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["fullname"];
        }
    } else {
        return "";
    }
}

function doctorname($id) {
    include("connection.php");
    $sql = "SELECT * FROM doctor where id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["doctorname"];
        }
    } else {
        return "";
    }
}

function initial() {

    $puserid = "";
    $duserid = "";
    $suserid = "";
    $fullname = "";
    $username = "";
    $password = "";
    $email = "";
    $username = "Dr. Abu Jafor";



    if (isset($_SESSION["puserid"])) {
        $puserid = $_SESSION['puserid'];
        $fullname = $_SESSION['fullname'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
    }


    if (isset($_SESSION["duserid"])) {
        $puserid = $_SESSION['puserid'];
        $fullname = $_SESSION['fullname'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
    }



    if (isset($_SESSION["suserid"])) {
        $puserid = $_SESSION['puserid'];
        $fullname = $_SESSION['fullname'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
    }
}

function logout() {


    unset($_SESSION['duserid']);
    unset($_SESSION['puserid']);
    unset($_SESSION['suserid']);

    session_unset();
    session_destroy();
}

?>