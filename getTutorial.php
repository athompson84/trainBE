<?php
/**
 * Created by PhpStorm.
 * User: Rico
 * Date: 3/25/18
 * Time: 7:27 PM
 */


$response = array();

//creating a key in the response array to insert values
//this key will store an array iteself
$response['tutorials'] = array();

//creating object of class DbOperation
$db = new DbOperation();

//getting the teams using the function we created
$teams = $db->getAllTutorials();

//looping through all the teams.
while($tutorial = $tutorials->fetch_assoc()){
    //creating a temporary array
    $temp = array();

    //inserting the team in the temporary array
    $temp['id'] = $tutorials['id'];
    $temp['tname']=$tutorials['tname'];
    $temp['description']=$tutorials['description'];

    //inserting the temporary array inside response
    array_push($response['tutorials'],$temp);
}

//displaying the array in json format
echo json_encode($response);
