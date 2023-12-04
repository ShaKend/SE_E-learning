
        <?php include('./staticDashboard/sidebar.php') ?>

        <div class="container mt-5">
            <div class="contentdashAdmin">
            <h2>Lessons</h2>
            <hr>
                <p style="color: #ffffff;">Enter Course ID: </p>
                <input type="number">
                <button style="background-color: #464444;color: #ffffff;">Search</button>
    
                <!-- Middle Section -->
                <div class="middlelessons">
                <p>
                    <div class="judulcardtable">Course ID: <span>17</span>  |  Course Name: <span>Learn Python</span></div> 
                    <a href="./addnewlessons.php" id="addnew">+</a>
                </p>
                </div>
    
                <!-- Table -->
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
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>John Doe@gmail.com</td>
                            <td>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
    
    
                    </tbody>
                </table>
            </div>
        </div>




    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>