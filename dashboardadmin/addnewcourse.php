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

if(isset($_REQUEST['newCourse'])){
    //cek sudah ada course atau blm
    if(($_REQUEST['courseName'] == '') || ($_REQUEST['courseDesc'] == '')){
        $msg = "<span class='text-danger'>fill all forms!</span>";
    }else{
        $courseName = $_REQUEST['courseName'];
        $courseDesc = $_REQUEST['courseDesc'];
        $courseAuthor = $_REQUEST['courseAuthor'];
        $courseImage = $_FILES['courseImage']['name'];
        $courseImageTemp = $_FILES['courseImage']['temp'];
        //$imgFolder = '../image/courseimg'.$courseImage;  <- part 9 menit 45:00  nama foldernya ubah ajja
        move_uploaded_file($courseImageTemp, $imgFolder);

        $sql = "INSERT INTO course (course_name, course_desc, course_author, course_image) VALUES
                ('$courseName', '$courseDesc', '$courseAuthor', '$imgFolder')";

        if($conn->query($sql) == true){
            $msg = "<span class='text-success'>added!</span>";
        }else{
            $msg = "<span class='text-danger'>failed</span>";
        }
    }
}
?>

<div class="container mt-5">
    <div class="contentdashAdmin">
    <h2>Add Course</h2>
    <hr>


        <form action="" class="formprofile mt-4">
                <div class="formgroup">
                    <p>Course Name</p>
                    <input type="text" placeholder="Course Name" class="formSize" name="courseName" id="courseName">
                </div>

                <div class="formgroup">
                    <p>Description</p>
                    <textarea name="Message" placeholder="Your Message" required class="formSize" name="courseDesc" id="courseDesc">

                    </textarea>
                </div>

                <div class="formgroup">
                    <p>Author</p>
                    <input type="text" placeholder="Author" class="formSize" name="courseAuthor" id="courseAuthor">
                </div>

                <div class="formgroup">
                    <p>Upload Image</p>
                    <input type="file" accept="image/jpeg, image/png, image/jpg, video/mp4" name="courseImage" id="courseImage">
                </div>

                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="" name="newCourse" id="newCourse">Submit</a>
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


    <!-- <div class="container mt-5">
        <div class="profilecontent">
            <h2>Add Course</h2>
            <hr>

            <form action="" class="formprofile">
                <div class="formgroup">
                    <p>Course Name</p>
                    <input type="text" placeholder="Course Name">
                </div>

                <div class="formgroup">
                    <p>Description</p>
                    <textarea name="Message" placeholder="Your Message" required>

                    </textarea>
                </div>

                <div class="formgroup">
                    <p>Author</p>
                    <input type="text" placeholder="Author">
                </div>

                <div class="formgroup">
                    <p>Upload Image</p>
                    <input type="file" accept="image/jpeg, image/png, image/jpg, video/mp4">
                </div>

                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="">Submit</a>
                    <a class="update-profile" href="./courses.php">Close</a>
                </div>
            </form>

        </div>
        
    </div> -->
