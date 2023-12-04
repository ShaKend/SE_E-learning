
        <?php include('./staticDashboard/sidebar.php'); ?>
    <div class="container mt-5">

        <div class="contentdashAdmin">
            <h2>Students List</h2>
            <hr>

                <!-- Tabel -->
                <div class="middlestudent">
                    <p style="margin-left: 10px;">List Of Student : </p>
                </div>
    
                <table class="table">
                    <thead>
                        <tr >
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
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
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>John Doe@gmail.com</td>
                            <td>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
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
                
                <!-- Akhir Tabel -->

        </div>
    </div>

    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>
