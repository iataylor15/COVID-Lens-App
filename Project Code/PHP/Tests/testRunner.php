<?php

require 'PythonScriptCallerTest.php';
require 'AdminTest.php';
require 'AlertTest.php';
require 'MapLocationsTest.php';
require 'ReportTest.php';
require 'ResourcesTest.php';
require 'UserTest.php';

  //Admin Tests
/*
  $tester1 = new AdminTest();
  $tester1->testAdminCreation();
  $tester1->testAdminSignInRequest();
  $tester1->testAdminSignOutRequest();
  $tester1->testAdminDeletion();
  //--------------------------------------
  //Alert Tests
  $tester2 = new AlertTest();
  $tester2->testAlertCreation();
  $tester2->testAlertUpdate();
  $tester2->testAlertRead();
  $tester2->testAlertDeletion();
  //-------------------------------------
  ////MapLocations Tests
  $tester3 = new MapLocationsTest();
  $tester3->testMapLocationsCreation();
  $tester3->testMapLocationsUpdate();
  $tester3->testMapLocationsRead();
  $tester3->testMapLocationsDeletion();
  //--------------------------------------*/
  //Report Tests
  //$tester4 = new ReportTest();
  //$tester4->testReportCreation();
  //$tester4->testReportUpdate();
  //$tester4->testReportRead();
  //--------------------------------------
  //Resources Tests
  /*$tester5 = new ResourcesTest();
  $tester5->testResourcesCreation();
  $tester5->testResourcesUpdate();
  $tester5->testResourcesRead();
  $tester5->testResourcesDeletion();
  //--------------------------------------
  //User Tests
  $tester6 = new UserTest();
  $tester6->testUserCreation();
  $tester6->testUserSignInRequest();
  $tester6->testUserSignOutRequest();
  $tester6->testUserDeletion();
  //--------------------------------------- 
//PythonScriptCallerAPI Tests
$tester7 = new PythonScriptCallerTest();
// mocking some ID's
$jID = uniqid();
$mendID = uniqid();
$sameConfirmer = uniqid();

// mock data that could be returned from the database to be analyzed

$testData = array("Report" => array(array("timeStamp" => "2020-10-12", "userID" => uniqid(), "locationID" => $jID,
            "residenceHall" => "Jefferson Suites", "reportStatus" => "Confirmed",
            "age" => 21, "phoneNumber" => "123-456-7890", "reportInfo" => "I have been identified "
            . "as a close contact of someone who tested positve.",
            "situationDesc" => "I feel bad. ", "affiliation" => "Student", "confirmerID" => $sameConfirmer),
        array("timeStamp" => "2020-09-12", "userID" => uniqid(), "locationID" => $mendID,
            "residenceHall" => "Mendenhall Residence Hall", "reportStatus" => "Not Confirmed",
            "age" => 22, "phoneNumber" => "121-456-7890", "reportInfo" => "Someone in my household tested positive.",
            "situationDesc" => "I have had a fever all week. ", "affiliation" => "Student", "confirmerID" => ""),
        array("timeStamp" => "2020-08-12", "userID" => uniqid(), "locationID" => uniqid(),
            "residenceHall" => "NA", "reportStatus" => "Confirmed",
            "age" => 42, "phoneNumber" => "123-256-7890", "reportInfo" => "I have tested positve",
            "situationDesc" => "Recently, I lost my sense of smell out of nowhere.", "affiliation" => "Faculty",
            "confirmerID" => uniqid()),
        array("timeStamp" => "2020-07-12", "userID" => uniqid(), "locationID" => $mendID,
            "residenceHall" => "Mendenhall Residence Hall", "reportStatus" => "Not Confirmed",
            "age" => 18, "phoneNumber" => "123-436-7890", "reportInfo" => "I have sypmtoms but have not been tested",
            "situationDesc" => "My friend's daughters, son-in-law was sick, so I think I need to get tested",
            "affiliation" => "Student", "confirmerID" => ""),
        array("timeStamp" => "2020-06-12", "userID" => uniqid(), "locationID" => $jID,
            "residenceHall" => "Jefferson Suites", "reportStatus" => "Confirmed",
            "age" => 19, "phoneNumber" => "123-456-7490", "reportInfo" => "I have been tested but have not received"
            . " results yet.",
            "situationDesc" => "Recently, I have been feeling really bad after attending a gathering."
            . " I got tested and it came back positive.", "affiliation" => "Student", "confirmerID" => uniqid()),
        array("timeStamp" => "2020-06-12", "userID" => uniqid(), "locationID" => uniqid(),
            "residenceHall" => "NA", "reportStatus" => "Confirmed",
            "age" => 30, "phoneNumber" => "123-456-7490", "reportInfo" => "I have tested positive.",
            "situationDesc" => "My son came down with COVID-19, so I am waiting to get tested.",
            "affiliation" => "Staff", "confirmerID" => $sameConfirmer),
        "Map_Locations" => array()));

// not finshed...
$expected = array("Students" => 2, "Faculty" => 1, "Staff" => 1, "Contractors" => 0, "Total" => 4,
    "map_data" => array(array("locationID" => "...", "residenceHall" => "Jefferson Suites", "caseCount" => 2,
            "latitude" => "...", "longitude" => "..."),
        array("Mendenhall Residence Hall" => 0)));
//
//$ctrl = new ReportController();
//$reportData = new Report();
//$reportData->setRequest(Requests::reportReadAll());
//$response = FailOrPass::getFailureArray();
//// ACTUAL DATA FROM DATABASE 
//$response = $ctrl->invokeReport($reportData)['data'];
//$tester7->testScript("/Applications/XAMPP/xamppfiles/htdocs/COVID-Lens-App/Project\ Code/PHP/API/test.py", $response, $expected, "PythonScriptCallerAPI Data Analysis test");
// 

// VS TEST DATA
$tester7->testScript($testData, $expected, "PythonScriptCallerAPI Data Analysis test");
*/