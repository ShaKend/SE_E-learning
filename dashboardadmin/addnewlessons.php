
    <?php 
    // if(!isset($_SESSION)){
    //     session_start();
    // }
    
    include('./staticDashboard/sidebar.php');
    if(isset($_REQUEST['lessonSubmitBtn'])){
        //cek sudah ada course atau blm
        if(($_REQUEST['lessonName'] == '') || ($_REQUEST['lessonDesc'] == '') || ($_REQUEST['course_ID'] == '') || ($_REQUEST['course_name'] == '')){
            $msg = "<span class='text-danger'>fill all forms!</span>";
        }else{
            $lessonName = $_REQUEST['lessonName'];
            $lessonDesc = $_REQUEST['lessonDesc'];
            $course_ID = $_REQUEST['course_ID'];
            $courseName = $_REQUEST['courseName'];
            $lessonLink = $_FILES['lessonLink']['name'];
            $lessonLinkTemp = $_FILES['lessonLink']['temp'];
            //$imgFolder = '../image/courseimg'.$courseImage;  <- part 9 menit 45:00  nama foldernya ubah ajja
            move_uploaded_file($courseImageTemp, $imgFolder);
    
            $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link,  course_ID, course_name) VALUES
                    ('$lesson_name', '$lesson_desc', '$lesson_link',  '$course_ID', '$course_name')";
    
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
        <h2>Add Lesson</h2>
        <hr>


        <form action="" method="POST" class="formprofile mt-4">
                <div class="formgroup">
                    <p>Course Id</p>
                    <input type="text" value="<?php if(isset($_SESSION['course_ID'])){echo $_SESSION['course_ID'];} ?>" class="formSize" name="course_ID" id="course_ID">
                </div>

                <div class="formgroup">
                    <p>Course Name</p>
                    <input type="text" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];} ?>" class="formSize" name="courseName" id="courseName">
                </div>

                <div class="formgroup">
                    <p>Lesson Name</p>
                    <input type="text" value="<?php if(isset($_SESSION['lesson_name'])){echo $_SESSION['lesson_name'];} ?>" class="formSize" name="lessonName" id="lessonName">
                </div>

                <div class="formgroup">
                    <p>Description</p>
                    <textarea name="Message" value="<?php if(isset($_SESSION['lesson_desc'])){echo $_SESSION['lesson_desc'];} ?>" required class="formSize" name="lessonDesc" id="lessonDesc">

                    </textarea>
                </div>

                <div class="formgroup">
                    <p>Link</p>
                    <input type="file" accept="image/jpeg, image/png, image/jpg, video/mp4" name="lessonVid" id="lessonVid">



                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="" name="lessonSubmitBtn" id="lessonSubmitBtn">Submit</a>
                    <a class="update-profile" href="./courses.php">Close</a>
                    <span>
                        <!-- php if(isset($msg)){echo $msg;} -->
                    </span>
                </div>
            </form>
        
        <!-- Akhir Tabel -->

        </div>
    </div>
    
    <!-- <div class="container">

        <div class="profilecontent">

            <form action="" class="formprofile" style="margin-bottom: 20px;" >
                <div class="formgroup" >
                    <p>Course ID</p>
                    <input type="number" placeholder="Course ID">
                </div>
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
                    <p>Lessons Name</p>
                    <input type="text" placeholder="Lessons Name">
                </div>
                <div class="formgroup">
                    <p>Lessons Video Link</p>
                    <input type="file" accept="video/*">

                </div>
                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="">Submit</a>
                    <a class="update-profile" href="./lessonsadmin.php">Close</a>
                </div>
                

            </form>

            
        </div>
        

        
    </div> -->

    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>