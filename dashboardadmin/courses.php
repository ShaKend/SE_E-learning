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

//sql (perlu diconnect ke database dilu)
$sql = "SELECT * FROM course"; //part9 58.30
$result = $conn->query($sql);//tapi gw kerjainnya disini

//jika tombol delete dipencet -> part9 1.11.50
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM course WHERE course_ID = {$_REQUEST['id']}";
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
        <h2>Courses List</h2>
        <hr>
            <!-- Tabel -->
            <div class="middlelessons">
                <p>
                    <div class="judulcardtable">List Of Courses  </div> 
                    <a href="./addnewcourse.php" id="addnew">+</a>
                </p>
            </div>
    
            <!-- data dinamis dari sini -->
            <!-- 100% ERROR JIKA DB BLM CONNECT  -->
            <?php if($result->num_rows > 0){ ?>
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
                    <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['course_ID']; ?></td>
                        <td><?= $row['course_name']; ?></td>
                        <td><?= $row['course_author']; ?></td>
                        <td>
                            <form action="editcourse.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?= $row['course_ID'] ?>">
                                <button type="submit" name="view" id="view"><i class="fa-solid fa-pen-to-square" style="color: #1361e7;"></i></button>
                            </form>
                            <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?= $row['course_ID'] ?>">
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
    </table> -->
