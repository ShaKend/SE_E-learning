
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
    

    include('./staticDashboard/sidebar.php'); 
    ?>

    <div class="container mt-5">

        <div class="contentdashAdmin">

            <h3>Change Password</h3>
            <hr>
            <div class="formSize">
                <form action="" class="formprofile">
                    <div class="formgroup">
                        <div>Email</div>
                        <input type="text" placeholder="Email" class="formSize">
                    </div>
                    <div class="formgroup mt-3">
                        <div>New Password</div>
                        <input type="email" placeholder="New Password" class="formSize">
                    </div>
                    <div class="formgroup">
                        <a class="update-profile" href="">Change</a>
                    </div>
                </form>
            </div>

            
        </div>


    </div>

    
    <!-- footer  -->
    <?php include('./staticDashboard/footer.php') ?>