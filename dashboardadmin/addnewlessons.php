
    <?php include('./staticDashboard/sidebar.php'); ?>

    <div class="container mt-5">
        <div class="contentdashAdmin">
        <h2>Add Lesson</h2>
        <hr>


            <form action="" class="formprofile" style="margin-bottom: 20px;" >
                <div class="formgroup" >
                    <div>Course ID</div>
                    <input type="number" placeholder="Course ID" class="formSize">
                </div>

                <div class="formgroup">
                    <div>Course Name</div>
                    <input type="text" placeholder="Course Name" class="formSize">
                </div>

                <div class="formgroup">
                    <div>Description</div>
                    <textarea name="Message" placeholder="Your Message" required class="formSize">

                    </textarea>
                </div>

                <div class="formgroup">
                    <div>Lessons Name</div>
                    <input type="text" placeholder="Lessons Name" class="formSize">
                </div>

                <div class="formgroup">
                    <div>Lessons Video Link</div>
                    <input type="file" accept="video/*" class="formSize">

                </div>

                <div class="formgroup" style="display: flex; flex-direction: row; gap: 10px;">
                    <a class="update-profile" href="">Submit</a>
                    <a class="update-profile" href="./lessonsadmin.php">Close</a>
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