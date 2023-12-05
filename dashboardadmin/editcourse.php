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


include('./staticDashboard/sidebar.php');
//include('../query/dbConnection.php');

//jika tombol delete dipencet -> part9 1.11.50
if (isset($_REQUEST['view'])) {
    $sql = "SELECT * FROM course WHERE course_ID = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

//QUERY UNTUK MENGUBAH DETAIL COURSE
if(isset($_REQUEST['reqUpdate'])){
    //cek sudah ada course atau blm
    if(($_REQUEST['course_ID'] == '') || ($_REQUEST['courseDesc'] == '') || ($_REQUEST['courseDesc'] == '') || ($_REQUEST['courseAuthor'] == '')){
        $msg = "<span class='text-danger'>fill all forms!</span>";
    }else{
        $courseID = $_REQUEST['courseID'];
        $courseName = $_REQUEST['courseName'];
        $courseDesc = $_REQUEST['courseDesc'];
        $courseAuthor = $_REQUEST['courseAuthor'];
        $courseImage = $_FILES['courseImage']['name'];
        $courseImageTemp = $_FILES['courseImage']['temp'];
        //$imgFolder = '../image/courseimg'.$courseImage;  <- part 9 menit 45:00  nama foldernya ubah ajja
    
        $sql = "UPDATE course SET course_ID = '$courseID', course_name = '$courseName', course_desc = '$courseDesc',
                course_author = '$courseAuthor', course_image = '$courseImage' WHERE course_ID = '$courseID'";
    
        if($conn->query($sql) == true){
            $msg = '<span class="text-success">updated!</span>';
        }else{
            $msg = "<span class='text-danger'>failed</span>";
        }
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
                    <input type="text" class="formSize" name="course_ID" id="course_ID" value="<?php if(isset($row['course_ID'])) {echo $row['course_ID'];} ?>" readonly>
                </div>

                <div class="formgroup">
                    <p>Course Name</p>
                    <input type="text" class="formSize" name="courseName" id="courseName" value="<?php if(isset($row['course_name'])) {echo $row['course_name'];} ?>">
                </div>

                <div class="formgroup">
                    <p>Description</p>
                    <textarea name="Message" required class="formSize" name="courseDesc" id="courseDesc" >
                        <?php if(isset($row['course_desc'])) {echo $row['course_desc'];} ?>
                    </textarea>
                </div>

                <div class="formgroup">
                    <p>Author</p>
                    <input type="text" class="formSize" name="courseAuthor" id="courseAuthor" value="<?php if(isset($row['course_author'])) {echo $row['course_author'];} ?>">
                </div>

                <div class="formgroup">
                    <p>Course Image</p>
                    <img src="<?php if(isset($row['course_image'])) {echo $row['course_image'];} ?>" alt=".." class="img-thumbnail">
                    <input type="file" accept="image/jpeg, image/png, image/jpg, video/mp4" name="courseImage" id="courseImage">
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


<!-- footer  -->
<?php include('./staticDashboard/footer.php') ?>