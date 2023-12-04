
    <?php include('./staticDashboard/sidebar.php'); ?>

    <div class="container mt-5">
        <div class="contentdashAdmin">
        <h2>Courses List</h2>
        <hr>
            <!-- Tabel -->
            <div class="middlelessons">
                <p>
                    <div class="judulcardtable">List Of Courses  </div> 
                    <a href="./addnewcourse.php" id="addnew">+</a>
                </p>
            </div>
    
    
            <table class="table">
                <thead>
                    <tr >
                        <th>Course Id</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Python</td>
                        <td>Jokowi</td>
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
