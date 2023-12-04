
        
    <?php include('./staticDashboard/sidebar.php'); ?>

<div class="container mt-5">
    <div class="contentdashAdmin">
    <h2>Add Course</h2>
    <hr>


        <form action="" class="formprofile mt-4">
                <div class="formgroup">
                    <p>Course Name</p>
                    <input type="text" placeholder="Course Name" class="formSize">
                </div>

                <div class="formgroup">
                    <p>Description</p>
                    <textarea name="Message" placeholder="Your Message" required class="formSize">

                    </textarea>
                </div>

                <div class="formgroup">
                    <p>Author</p>
                    <input type="text" placeholder="Author" class="formSize">
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
