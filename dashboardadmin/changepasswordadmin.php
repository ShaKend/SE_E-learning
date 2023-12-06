
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
    
    //cek sessiom
    if(isset($_REQUEST['adminPassUpdateBtn'])){
        if($_REQUEST['admPass'] == ""){
            $passMsg = '<div class="text-danger">Fill all fields!</div>';
        }else{
            $sql = "SELECT * FROM admins WHERE adm_email = '$admEmail'";
            $result = $conn->query($ql);
            if($result->num_rows == 1){
                $admPass = $_REQUEST['admPass'];
                $sql = "UPDATE admins SET adm_password = '$admPass' WHERE adm_email = '$admEmail'";

                if($conn->query($sql) == true){
                    $passMsg = '<div class="text-success">Updated!</div>';
                }else{
                    $passMsg = '<div class="text-danger">Failed!</div>';
                }
            }
        }
    }
?>

    <div class="container mt-5">

        <div class="contentdashAdmin">

            <h3>Change Password</h3>
            <hr>
            <div class="formSize">
                <form action="" class="formprofile">
                    <div class="formgroup">
                        <div>Email</div>
                        <input type="text" value="<?= $admEmail ?>" class="formSize">
                    </div>
                    <div class="formgroup mt-3">
                        <div>New Password</div>
                        <input type="email" value="New Password" class="formSize">
                    </div>
                    <div class="formgroup">
                        <a class="update-profile" href="">Change</a>
                        <?php if(isset($passMsg)){echo $passMsg;} ?>
                    </div>
                </form>
            </div>

            
        </div>


    </div>

    
    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>