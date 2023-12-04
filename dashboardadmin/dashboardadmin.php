
<!-- navbar and sidebar  -->
<!-- SIDEBAR ada di div container, jadi hati-hati kalo mau edit file  -->
<?php include('./staticDashboard/sidebar.php'); ?>

        <div class="contentdashAdmin">
            <div class="wrappercardinfo">
                <div class="carddashadmin" style="background-color: #be3422e8;">
                        <div class="judulcardadmin">
                            <h3>Courses</h3>
                        </div>
                        <p>9</p>
                        
                </div>
                <div class="carddashadmin" style="background-color: #22ca2be8;">
                        <div class="judulcardadmin">
                            <h3>Students</h3>
                        </div>
                        <p>9</p>
                </div>
                <div class="carddashadmin" style="background-color: rgba(19, 119, 212, 0.91)">
                        <div class="judulcardadmin" >
                            <h3>Sold</h3>
                        </div>
                        <p>9</p>
                </div>

            </div>
            <div class="tableContent">
                <!-- judul tabel -->
                <div class="middlelessons">
                    <p>
                        <div class="judulcardtable">Course Ordered</div> 
                    </p>
                </div>
                <table class="table mb-5">
                    <thead>
                        <tr >
                            <th>Order ID</th>
                            <th>Course ID</th>
                            <th>Student Email</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Jokowi@gmail.com</td>
                            <td>27-02-2023</td>
                            <td>200 <span style="color: green;">$</span></td>
                            <td class>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
     
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Jokowi@gmail.com</td>
                            <td>27-02-2023</td>
                            <td>200 <span style="color: green;">$</span></td>
                            <td class>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
     
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Jokowi@gmail.com</td>
                            <td>27-02-2023</td>
                            <td>200 <span style="color: green;">$</span></td>
                            <td class>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
     
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Jokowi@gmail.com</td>
                            <td>27-02-2023</td>
                            <td>200 <span style="color: green;">$</span></td>
                            <td class>
                                <button><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                                <button><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button> 
                            </td>
                        </tr>
     
    
     
    
                    </tbody>
                </table>
            </div>
            
            <!-- Akhir Tabel -->

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
