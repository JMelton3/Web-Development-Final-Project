<?php

    //success form from vehicle info app needs to be reworked to work for contact/feedback form.



    include('dbconnection.php');

    $dbh = new Dbconnection();
    $conn = $dbh->getConnection();

    //Variable declaration
    $vin = $_POST['vin']; //VIN Number
    $isNew = isset($_POST['isNew']);
    $isAutoTran = isset($_POST['isAutoTran']);
    $vehicleMake = $_POST['vehicleMake'];
    $vehicleModel = $_POST['vehicleModel'];
    $yearOfVehicle = $_POST['yearOfVehicle'];
    $numberOfOwners = $_POST['numberOfOwners'];
    $numberOfDoors = $_POST['numberOfDoors'];
    $vehicleTypeId = $_POST['vehicleTypeId'];
    $mileage_hours = $_POST['mileage_hours'];
    $vehicleColor = $_POST['vehicleColor'];



    $sql = 'INSERT INTO `vehicleinfo`(vin,make,model,year,numOfOwners,isNew,color,doors,isAutoTran,vehicleTypeId,mileage_hours) VALUES (
        :vin, :vehicleMake, :vehicleModel, :vehicleYear, :numOfOwners, :isNew, :vehicleColor, :numOfDoors, :isAutoTran, :vehicleTypeId, :mileage_hours
    )';
        



    $stmnt = $conn->prepare($sql); //Prepare our query for submission
    
    //Match up the placeholders with the actual submitted values for execution
    $stmnt->execute([
        'vin' => $vin,
        'vehicleMake' => $vehicleMake,
        'vehicleModel' => $vehicleModel,
        'vehicleYear' => $yearOfVehicle,
        'numOfOwners' => $numberOfOwners,
        'isNew' => $isNew,
        'vehicleColor' => $vehicleColor,
        'numOfDoors' => $numberOfDoors,
        'isAutoTran' => $isAutoTran,
        'vehicleTypeId' => $vehicleTypeId,
        'mileage_hours' => $mileage_hours
    ]); // Query is executed 

    $stmnt->closeCursor(); // Close/End the cursor from the Db Query
    $conn = null; // Close/Release the Db connection when complete


    header('location: ../index.php');