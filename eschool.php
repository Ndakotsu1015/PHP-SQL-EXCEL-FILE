<?php
//Load the database configuration file
include_once 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="eng-US">
    <head>
        <meta charset="utf-8">
        <title> Export Data to Excel using PHP & SQL</title>
        <!-- Bootstrap libray -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!--link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css"-->

        <!-- Stylesheet file -->
        <!--link rel="stylesheet" href="assets/css/style.css" -->
    </head>
    <body>
        <div class="container">
            <h2> List of Students</h2>
            <div class="row">

                <!-- Exort link-->
                <div class="col-md-12 head">
                    <div class="float-right">
                        <a href="export.php" class="btn btn-success"><i class="dwn"></i>Export</a>
                    </div>
                </div>
                <!-- Data list table-->
                <table class ="table table-striped table-bordered text-md-left text-center text-sm-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Student ID</th>
                            <th>Reg NO</th>
                            <th>Surname</th>
                            <th>Firstname</th>
                            <th>Othername</th>
                            <th>Student Address</th>
                            <th>Guardian Name</th>
                            <th>Guardian Phone</th>
                            <th>Guardian Address</th>
                            <th>Class ID</th>
                            <th>Arm ID</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Guardian Email</th>
                            <th>Image URL</th>
                            <th>Entry Year</th>
                            <th>Entry Class ID</th>
                            <th>Status ID</th>
                            <th>Country ID</th>
                            <th>State ID</th>
                            <th>Local Gov't ID</th>
                            <th>Student Status ID</th>
                            <th>Student Status Date</th>
                            <th>Posted By</th>
                            <th>Posted Date</th>
                            <th>Last Modify Date</th>
                            <th>Last Modify By</th>
                            <th>Club ID</th>
                            <th>House ID</th>
                            <th>Post ID</th>
                            <th>Religion ID</th>
                            <th>Emergency Email</th>
                            <th>Emergency Phone Number</th>
                            <th>Voter's Code</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Fetch records from database
                        $result = $db->query("SELECT * FROM student");
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                     
                                       <td> <?php echo $row['student_id']; ?> </td>
                                        <td><?php echo $row['reg_no']; ?> </td>
                                        <td><?php echo $row['surname']; ?> </td>
                                        <td><?php echo $row['firstname']; ?> </td>
                                        <td><?php echo $row['othername']; ?> </td>
                                        <td><?php echo $row['student_address']; ?> </td>
                                        <td><?php echo $row['guardian_name']; ?> </td>
                                        <td> <?php echo $row['guardian_phone']; ?> </td>
                                        <td><?php echo $row['guardian_address']; ?> </td>
                                        <td><?php echo $row['class_id']; ?> </td>
                                        <td><?php echo $row['arm_id']; ?> </td>
                                        <td><?php echo $row['gender']; ?> </td>
                                        <td><?php echo $row['dob']; ?> </td>
                                        <td><?php echo $row['guardian_email']; ?> </td>
                                        <td><?php echo $row['image_url']; ?> </td>
                                        <td><?php echo $row['entry_year']; ?> </td>
                                        <td><?php echo $row['entry_class_id']; ?> </td>
                                        <td><?php echo $row['statusID']; ?> </td>
                                        <td><?php echo $row['country_id']; ?> </td>
                                        <td><?php echo $row['stateID']; ?> </td>
                                        <td><?php echo $row['LGAID']; ?> </td>
                                        <td><?php echo $row['studentStatusID']; ?> </td>
                                        <td><?php echo $row['studentStatusDate']; ?> </td>
                                        <td><?php echo $row['posted_by']; ?> </td>
                                        <td><?php echo $row['posted_date']; ?> </td>
                                        <td><?php echo $row['last_modify_date']; ?> </td>
                                        <td><?php echo $row['last_modify_by']; ?> </td>
                                        <td><?php echo $row['club_id']; ?> </td>
                                        <td><?php echo $row['house_id']; ?> </td>
                                        <td><?php echo $row['post_id']; ?> </td>
                                        <td><?php echo $row['religion_id']; ?> </td>
                                        <td><?php echo $row['emergency_email']; ?> </td>
                                        <td><?php echo $row['emergency_phone']; ?> </td>
                                        <td><?php echo $row['voter_code']; ?> </td>


                                       <!--td> <--?php echo ($row['status'] == 1)?'Active':'Inactive'; ?--> <!--/td-->

                            </tr>
                            <?php 
                            }
                        }else{
                            ?>
                             ?>
                        <tr><td colspan="7">No Students' found.....<td> </tr>
                        <?php
                        }
                        ?>
                       
                        
                    </tbody>
                    </table>

            </div>

        </div>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        </body>



</html>