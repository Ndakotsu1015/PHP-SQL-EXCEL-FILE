<?php
//Load the datbas configuration file
include_once 'dbconfig.php';

function filterData(&$str) {
    $str =preg_replace("/\t/", "\\t", $str);
    $str =preg_replace("/\r?\n/", "\\n ", $str);
    if(strstr($str, '" ')) $str ='"'.str_replace('"', '""', $str).'"'; 
}

// Excel file name for download
$fileName ="students-data". date('Y-m-d') . "xls";

//Column names
$fields =array('STUDENT ID', 'REG NO', 'SURNAME', 'FIRSTNAME', 'OTHERNAME', 'STUDENT ADDRESSES', 'GUARDIAN NAME', 'GUARDIAN PHONE NUMBER', 'GUARDIAN ADDRESS'
, 'CLASS ID', 'ARM ID', 'GENDER', 'DATE OF BIRTH', 'GUARDIAN EMAIL', 'IMAGE URL', 'ENTRY YEAR', 'ENTRY CLASS ID', 'STATUS ID', 'COUNTRY ID', 'STATE ID', 'LOCAL GOVT ID'
,'STUDENT STATUS ID', 'STUDENT STATUS DATE', 'POSTED BY', 'POSTED DATE', 'LAST MODIFY DATE', 'LAST MODIFY BY', 'CLUB ID', 'HOUSE ID', 'POST ID', 'RELIGION ID', 
'EMERGENCY EMAIL', 'EMERGENCY PHONE NUMBER', 'VOTERS ID');

//Display column names as first row
$excelData = implode("\t", array_values($fields)) . "\n";

//Fetch records form database
$query =$db->query("SELECT * FROM student");
if($query->num_rows > 0){

    //Output each row of the data 
    while($row =$query->fetch_assoc())
    {
        
        $lineData =array($row['student_id'],$row['reg_no'],$row['surname'],$row['firstname'],$row['othername'],
        $row['student_address'],$row['guardian_name'], $row['guardian_phone'],$row['guardian_address'],$row['class_id'],$row['arm_id'],$row['gender'],
        $row['dob'],$row['guardian_email'],$row['image_url'],$row['entry_year'],$row['entry_class_id'],$row['statusID'],$row['country_id'],$row['stateID'],
        $row['LGAID'],$row['studentStatusID'],$row['studentStatusDate'],$row['posted_by'],$row['posted_date'],$row['last_modify_date'],$row['last_modify_by'],
        $row['club_id'],$row['house_id'],$row['post_id'],$row['religion_id'],$row['emergency_email'],$row['emergency_phone'],$row['voter_code']);

        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
}else{
    $excelData .= 'No records found...' . "\n";

    }



    // Headers for download
    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    //Render excel data
    echo $excelData;

    exit;


        ?>