<?php
include "config.php";

if(isset($_POST['RegisterSchool'])){
    $SchoolName =$_POST['SchoolName'];
    $SchoolType =$_POST['SchoolType'];
    $SchoolManager =$_POST['SchoolManager'];
    $SchoolPhone =$_POST['SchoolPhone'];
    $SchoolMobile =$_POST['SchoolMobile'];
    $SchoolWhatsapp =$_POST['SchoolWhatsapp'];
    $SchoolEmail =$_POST['SchoolEmail'];
    $SchoolRegion =$_POST['SchoolRegion'];
    $SchoolCity =$_POST['SchoolCity'];
    $SchoolDistrict =$_POST['SchoolDistrict'];
    $SchoolSpecialty =$_POST['SchoolSpecialty'];
    $SchoolSyllabus =$_POST['SchoolSyllabus'];
    $RegistrationDate =$_POST['RegistrationDate'];
    $StartContract =$_POST['StartContract'];
    $EndContract =$_POST['EndContract'];
   


    // $SchoolName =$_POST['SchoolName'];
    // $SchoolType =$_POST['SchoolType'];
    // $SchoolManager =$_POST['SchoolManager'];
    // $SchoolPhone =$_POST['SchoolPhone'];
    // $SchoolMobile =$_POST['SchoolMobile'];
    // $SchoolWhatsapp =$_POST['SchoolWhatsapp'];
    // $SchoolEmail =$_POST['SchoolEmail'];
    // $SchoolRegion =$_POST['SchoolRegion'];
    // $SchoolCity =$_POST['SchoolCity'];
    // $SchoolDistrict =$_POST['SchoolDistrict'];
    // $SchoolSpecialty =$_POST['SchoolSpecialty'];
    // $SchoolSyllabus =$_POST['SchoolSyllabus'];
    // $RegistrationDate =$_POST['RegistrationDate'];
    // $StartContract =$_POST['StartContract'];
    // $EndContract =$_POST['EndContract'];
    // $SchoolUser =$_POST['SchoolUser'];
    // $SchoolPassword =$_POST['SchoolPassword'];
    // $SchoolSystem =$_POST['SchoolSystem'];
    // $SchoolSystemType =$_POST['SchoolSystemType'];
    // $SchoolStatus =$_POST['SchoolStatus'];
    // $StartSystem =$_POST['StartSystem'];
    // $EndSystem =$_POST['EndSystem'];


    $RegisterSchool = "INSERT INTO `schools`(`SchoolName`, `SchoolType`,
    `SchoolManager`, `SchoolPhone`, `SchoolMobile`, `SchoolWhatsapp`, 
    `SchoolEmail`, `SchoolRegion`, `SchoolCity`, `SchoolDistrict`, 
    `SchoolSpecialty`, `SchoolSyllabus`, `RegistrationDate`, `StartContract`,
     `EndContract`) 
     VALUES ('$SchoolName','$SchoolType','$SchoolManager','$SchoolPhone',
     '$SchoolMobile','$SchoolWhatsapp','$SchoolEmail','$SchoolRegion',
     '$SchoolCity','$SchoolDistrict','$SchoolSpecialty','$SchoolSyllabus',
     '$RegistrationDate','$StartContract','$EndContract')";



    // $query = "INSERT INTO `schools`(`SchoolName`, `SchoolType`,
    //  `SchoolManager`, `SchoolPhone`, `SchoolMobile`, `SchoolWhatsapp`, 
    //  `SchoolEmail`, `SchoolRegion`, `SchoolCity`, `SchoolDistrict`, 
    //  `SchoolSpecialty`, `SchoolSyllabus`, `RegistrationDate`, `StartContract`,
    //   `EndContract`, `SchoolUser`, `SchoolPassword`, `SchoolSystem`, 
    //   `SchoolSystemType`, `SchoolStatus`, `StartSystem`, `EndSystem`) 
    //   VALUES ('$SchoolName','$SchoolType','$SchoolManager','$SchoolPhone',
    //   '$SchoolMobile','$SchoolWhatsapp','$SchoolEmail','$SchoolRegion',
    //   '$SchoolCity','$SchoolDistrict','$SchoolSpecialty','$SchoolSyllabus',
    //   '$RegistrationDate','$StartContract','$EndContract','$SchoolUser',
    //   '$SchoolPassword','$SchoolSystem','$SchoolSystemType','$SchoolStatus',
    //   '$StartSystem','$EndSystem')";

    if ($conn->query($RegisterSchool) === TRUE) {
        // echo "New record created successfully";
        // echo "<script>alert('Record inserted successfully');</script>";
        header("location:schools_institution.php");
        exit;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
}


 



if(isset($_POST['RegisterSystem'])){

   $SchoolId =$_POST['SchoolId'];
    $SchoolName =$_POST['SchoolName'];
    $SchoolType =$_POST['SchoolType'];
    $SchoolManager =$_POST['SchoolManager'];
    $SchoolPhone =$_POST['SchoolPhone'];
    $SchoolMobile =$_POST['SchoolMobile'];
    $SchoolWhatsapp =$_POST['SchoolWhatsapp'];
    $SchoolEmail =$_POST['SchoolEmail'];
    $SchoolRegion =$_POST['SchoolRegion'];
    $SchoolCity =$_POST['SchoolCity'];
    $SchoolDistrict =$_POST['SchoolDistrict'];
    $SchoolSpecialty =$_POST['SchoolSpecialty'];
    $SchoolUser =$_POST['SchoolUser'];
    $SchoolPassword =$_POST['SchoolPassword'];
    $SchoolSystem =$_POST['SchoolSystem'];
    $SchoolSystemType =$_POST['SchoolSystemType'];


    $RegisterSystem = "UPDATE  `schools`SET
     $SchoolName =`SchoolName`, $SchoolType =`SchoolType`,
     $SchoolManager =`SchoolManager`, $SchoolPhone =`SchoolPhone`,
     $SchoolMobile =`SchoolMobile`, $SchoolWhatsapp=`SchoolWhatsapp`, 
     $SchoolEmail =`SchoolEmail`, $SchoolRegion =`SchoolRegion`,
     $SchoolCity =`SchoolCity`, $SchoolDistrict =`SchoolDistrict`, 
     $SchoolSpecialty =`SchoolSpecialty`, $SchoolSyllabus =`SchoolSyllabus`,
     $RegistrationDate =`RegistrationDate`, $StartContract =`StartContract`,
     $EndContract =`EndContract`  WHERE Id = '$SchoolId'";

    if ($conn->query($RegisterSystem) === TRUE) {
      // echo "New record created successfully";
      // echo "<script>alert('Record inserted successfully');</script>";
      header("location:schools_system.php");
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    
}

if(isset($_POST['RegisterActivation'])){
    
    $SchoolName =$_POST['SchoolName'];
    $SchoolType =$_POST['SchoolType'];
    $SchoolManager =$_POST['SchoolManager'];
    $SchoolPhone =$_POST['SchoolPhone'];
    $SchoolMobile =$_POST['SchoolMobile'];
    $SchoolWhatsapp =$_POST['SchoolWhatsapp'];
    $SchoolEmail =$_POST['SchoolEmail'];
    $SchoolRegion =$_POST['SchoolRegion'];
    $SchoolCity =$_POST['SchoolCity'];
    $SchoolDistrict =$_POST['SchoolDistrict'];
    $SchoolSpecialty =$_POST['SchoolSpecialty'];


}

?>