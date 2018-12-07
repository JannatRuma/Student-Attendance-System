<?php include 'header.php';
    
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Student Attendance System </title>
    <link rel="stylesheet" href="bootstrap.min.css" media="screen" title="no title"/>
    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.css"></script>
</head>
    
<body>
    <div class="container">
        <div class="well text-center">
            <h2>Student Attendance (Roll Call) System PHP</h2>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a class="btn btn-success" href="add.php">Add Student</a>
                    <a class="btn btn-into pull-right" href="add.php">View All</a>
                </h2>
            </div>
            
            <div class="panel-body">
                <div class="well text-center" style="font-size:20px">
                    <strong>Date: </strong> 
                    
                    <?php
                        $cur_date =date("D,m/d/y");
                    echo $cur_date;
                    
                    ?>
                    
                </div>
                
                <form action="" method="post">
                    <table class="table table-striped">
                        <tr>
                            <th width="25%">Serial</th>
                            <th width="25%">Student Name</th>
                            <th width="25%">Student Roll</th>
                            <th width="25%">Attendance</th>
                        </tr>
                        
                        <tr>
                            <td>01</td>
                            <td>Sayed</td>
                            <td>001</td>   
                            <td>
                                <input type="radio" name="attend" value="present">P
                                <input type="radio" name="attend" value="absent">A
                            </td>
                        </tr>
                        
                        <tr>
                            <td>02</td>
                            <td>Sayed</td>
                            <td>002</td>   
                            <td>
                                <input type="radio" name="attend" value="present">P
                                <input type="radio" name="attend" value="absent">A
                            </td>
                        </tr>
                        
                        <tr>
                            <td>03</td>
                            <td>Sayed</td>
                            <td>003</td>   
                            <td>
                                <input type="radio" name="attend" value="present">P
                                <input type="radio" name="attend" value="absent">A
                            </td>
                        </tr>
                            
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </td>
                       </tr>
                    </table>
                </form>           
            </div>
            
        
        </div>
        
        
        
        <div class="well">
            <h3>
                Website: www.janalam.xyz 
                <span class="pull-right"> Like us: www.facebook.com/jannat.ruma.7</span>
            </h3>
        </div>
        
    </div>
	
</body>
</html>