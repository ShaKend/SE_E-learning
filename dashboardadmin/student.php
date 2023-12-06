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

//jika tombol delete dipencet -> part10 4.44
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM students WHERE std_ID = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        //gw gtw ini apaan
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    }else{
        echo 'unable to delete data';
    }
}
?>
    <div class="container mt-5">

        <div class="contentdashAdmin">
            <h2>Students List</h2>
            <hr>

                <!-- Tabel -->
                <div class="middlestudent">
                    <p style="margin-left: 10px;">List Of Student : </p>
                </div>
    
            <?php if($result->num_rows > 0){ ?>
            <table class="table">
                <thead>
                    <tr >
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['std_ID']; ?></td>
                        <td><?= $row['std_name']; ?></td>
                        <td><?= $row['std_email']; ?></td>
                        <td>
                            <!-- hanya delete saja yg perlu -->
                            <!-- editstudent g perlu kali lah ya -->
                            <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php if(isset($row['course_ID'])) {echo $row['course_ID'];} ?>">
                                <button type="submit" name="delete" id="delete"><i class="fa-solid fa-trash" style="color: #ff0019;"></i></button>
                            </form>
                        </td>
                    </tr>
    
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{echo "0 result";} ?>
                
                <!-- Akhir Tabel -->

        </div>
    </div>

    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>

    <!-- <table class="table">
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
                </table> -->