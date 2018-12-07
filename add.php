<?php 
    include 'header.php';
?>


        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    <a class="btn btn-success" href="add.php">Add Student</a>
                    <a class="btn btn-into pull-right" href="index.php">Back</a>
                </h2>
            </div>
            
            <div class="panel-body">
                
                
                <form action="" method="post">
                    <div class="form=group">
                        <label for="name">Student Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="">
                    </div>
                    <br><br>
                    <div class="form=group">
                        <label for="name">Student Roll</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="Your Roll" required="">
                    </div>
                    <br>
                    <div class="form=group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Student">
                    </div>
                </form>           
            </div>
            
        
        </div>
        
<?php include 'footer.php';?>    
        
       