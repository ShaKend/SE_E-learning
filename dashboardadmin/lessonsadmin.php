
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
    }else{
        $admEmail = $_SESSION['admEmail'];
    }


?>

        <div class="container mt-5">
            <div class="contentdashAdmin">
            <h2>Lessons</h2>
            <hr>
            <form action="">
                <p style="color: #ffffff;">Enter Course ID: </p>
                <input type="text" id="checkid" name="checkid">
                <button style="background-color: #464444;color: #ffffff;">Search</button>
            </form>
    
                <!-- Middle Section -->
                <div class="middlelessons">
                <p>
                    <div class="judulcardtable">Course ID: <span>17</span>  |  Course Name: <span>Learn Python</span></div> 
                    <a href="./addnewlessons.php" id="addnew">+</a>
                </p>
                </div>
    
                <!-- Table MENIT 34 -->
                <?php
                //part 11 menit 14.35
                    $sql = "SELECT course_ID FROM course";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_ID']){                            
                            $sql = "SELECT * FROM lesson WHERE course_ID = {$_REQUEST['checkid']}";
                            $result = $conn->query($sql);

                            if(($row['course_id'] == $_REQUEST['checkid'])){



                ?>
                <table class="table">
                    <thead>
                        <tr >
                            <th>Lessons ID</th>
                            <th>Lessons Name</th>
                            <th>Lessons Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php if(isset($row['lesson_ID'])){echo $row['lesson_ID'];} ?></td>
                            <td><?php if(isset($row['lesson_name'])){echo $row['lesson_name'];} ?></td>
                            <td><?php if(isset($row['lesson_link'])){echo $row['lesson_link'];} ?></td>
                            <td>
                            <!-- ini bakal pergi ke halama editcourse.php  -->
                            <form action="editcourse.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php if(isset($row['lesson_ID'])) {echo $row['lesson_ID'];} ?>">
                                <button type="submit" name="view" id="view"><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                            </form>
                            <!-- ini stay disini -->
                            <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php if(isset($row['lesson_ID'])) {echo $row['lesson_ID'];} ?>">
                                <button type="submit" name="delete" id="delete"><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button>
                            </form>
                            </td>
                        </tr>
                        <?php 
                                                    }
                                                }
                                            }
                                        }
                        ?>


                    </tbody>

                </table>
            </div>
        </div>




    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>