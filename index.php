<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 28-Jul-15
 * Time: 14:28 PM
 */

$cert1 = array(
    array(
        "CertificateId"=>"1",
        "IsTest"=>true,
        "NotAfter"=>"/Date(1464944879000)/",
        "NotBefore"=>"/Date(1433321879000)/",
        "Organization"=>"Такснет",
        "Email"=>"test1@test.com",
        "SubjectName"=>"Иванов",
        "HasPIN"=>false
    ),
    array(
        "CertificateId"=>"2",
        "IsTest"=>true,
        "NotAfter"=>"/Date(1433321879000)/",
        "NotBefore"=>"/Date(1433321879000)/",
        "Organization"=>"Такснет",
        "Email"=>"test2@test.com",
        "SubjectName"=>"Петров",
        "HasPIN"=>false
    ),
    array(
        "CertificateId"=>"3",
        "IsTest"=>false,
        "NotAfter"=>"/Date(1464944879000)/",
        "NotBefore"=>"/Date(1433321879000)/",
        "Organization"=>"Такснет",
        "Email"=>"test3@test.com",
        "SubjectName"=>"Сидоров",
    ),
    array(
        "CertificateId"=>"4",
        "IsTest"=>false,
        "NotAfter"=>"/Date(1464944879000)/",
        "NotBefore"=>"/Date(1433321879000)/",
        "Organization"=>"Такснет",
        "Email"=>"test4@test.com",
        "SubjectName"=>"Козявкин",
        "HasPIN"=>false
    ),

);

$cert2 = array(
    array(
        "CreationTime"=> '/Date(1437608924837)/',
        "ID"=>"1",
        "ExtensionData"=> array(
            "Passport"=>null,
            "SNILS"=>"222",
            "Email"=>"test1@test.com"
        ),
        "StatusCode"=>1
    ),
    array(
        "CreationTime"=> '/Date(1437408924837)/',
        "ID"=>"2",
        "ExtensionData"=> array(
            "Passport"=>null,
            "SNILS"=>"333",
            "Email"=>"test2@test.com"
        ),
        "StatusCode"=>1
    ),
    array(
        "CreationTime"=> '/Date(1437508924837)/',
        "ID"=>"3",
        "ExtensionData"=> array(
            "Passport"=>null,
            "SNILS"=>"444",
            "Email"=>"test3@test.com"
        ),
        "StatusCode"=>1
    ),
    array(
        "CreationTime"=> '/Date(1437208924837)/',
        "ID"=>"4",
        "ExtensionData"=> array(
            "Passport"=>null,
            "SNILS"=>"555",
            "Email"=>"test4@test.com"
        ),
        "StatusCode"=>1
    ),

);

$action = $_GET['action'] ?  $_GET['action'] : false;

$r = new stdClass();
if ($action == 'list') {
    $r->certificates = $cert1;
    $r->requests = $cert2;
    echo json_encode($r);
}

if ($action == 'deleteCertificate') {
    $r->success = true;
    echo json_encode($r);
    die();
}
if ($action == 'addCertificate') {
    $r->success = true;
    echo json_encode($r);
    die();
}

?>

<html>
<head>
    <title>Test</title>
</head>
<body>
<script>
    var certificates = '<? echo json_encode($cert1) ?>';
    var requests = '<? echo json_encode($cert2) ?>';
</script>


</body>
</html>


