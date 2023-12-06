<?php 
if(!isset($_SESSION)){
    session_start();
}

include('./staticDashboard/sidebar.php');
//ini perlu
include('../query/dbConnection.php');

//jika gak login
if (!isset($_SESSION['isAdmLogin'])) {
    echo "<script>location.href='../index.php'";
} 

//jika tombol delete dipencet -> part10 4.44
if (isset($_REQUEST['view'])) {
    $sql = "SELECT * FROM students WHERE std_ID = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        //gw gtw ini apaan
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    }else{
        echo 'unable to delete data';
    }
}
?>

<div class="container mt-5">
    <div class="contentdashAdmin">
    <h2>Edit Course</h2>
    <hr>


        <form action="" class="formprofile mt-4">
                <div class="formgroup">
                    <p>Course ID</p>
                    <input type="text" class="formSize" name="std_ID" id="std_ID" value="<?php if(isset($row['std_ID'])) {echo $row['std_ID'];} ?>" readonly>
                </div>

                <div class="formgroup">
                    <p>Student Name</p>
                    <input type="text" class="formSize" name="stdName" id="stdName" value="<?php if(isset($row['std_name'])) {echo $row['std_name'];} ?>">
                </div>

                <div class="formgroup">
                    <p>Student Email</p>
                    <input type="text" class="formSize" name="stdEmail" id="stdEmail" value="<?php if(isset($row['std_name'])) {echo $row['std_name'];} ?>">
                </div>

                <div class="formgroup">
                    <p>Student Password</p>
                    <input type="text" class="formSize" name="coursePass" id="coursePass" value="<?php if(isset($row['std_author'])) {echo $row['std_author'];} ?>">
                </div>

                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="" name="reqUpdate" id="reqUpdate">Update</a>
                    <a class="update-profile" href="./courses.php">Close</a>
                    <span>
                        <!-- php if(isset($msg)){echo $msg;} -->
                    </span>
                </div>
            </form>
        
        <!-- Akhir Tabel -->

    </div>
</div>




<?php include('./staticDashboard/footer.php'); ?>  