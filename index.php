<?php 
    include 'header.php';
    include 'config.php';
    include 'student.php';
    
?>

<?php
    $stu = new Student();
    $cur_date = date("D,m/d/y");
?>


        
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
                        
                    
                    <?php
                        
                      $get_student = $stu->getStudents();
                        if($get_student) {
                            $i=0;
                        while ($value = $get_student->fetch_assoc()){
                            $i++;
                    
                    ?>
                        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['roll']; ?></td>   
                            <td>
                                <input type="radio" name="attend[<?php echo $value['roll'];?>]" value="present">P
                                <input type="radio" name="attend[<?php echo $value['roll'];?>]" value="absent">A
                            </td>
                        </tr>
                        
                <?php }
                    } ?>
                        
                        
                            
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </td>
                       </tr>
                    </table>
                </form>           
            </div>
            
        
        </div>
        
<?php include 'footer.php';?>    
        
       