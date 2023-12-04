<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISchool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboardadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-body-transparent" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="#">Admin Dashboard</a>  
            </div>
          </nav>
    </section>

    <div class="container">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li>
                    <a href="/dashboardadmin/dashboardadmin.html"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Dashboard </a>
                </li>
                <li>
                    <a href="/dashboardadmin/student.html"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Students </a>
                </li>

                <li>
                    <a href="/dashboardadmin/courses.html"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Courses</a>
                </li>
                <li>
                    <a href="/dashboardadmin/lessonsadmin.html"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Lessons </a>
                </li>
                <li>
                    <a href="/dashboardadmin/changepasswordadmin.html"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Change Password</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-book" style="color: #ffffff;"></i>Logout</a>
                </li>
            </ul>
        </nav>

        <div class="contentdashAdmin">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
