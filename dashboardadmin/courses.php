
    <?php include('./staticDashboard/sidebar.php'); ?>

        <div class="contentdashAdmin">
            <!-- Tabel -->
            <div class="middlelessons">
                <p>
                    <div class="judulcardtable">List Of Courses  </div> 
                    <a href="/dashboardadmin/addnewcourse.html" id="addnew">+</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
