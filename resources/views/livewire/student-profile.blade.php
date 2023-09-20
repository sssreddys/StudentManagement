<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <style>
        body {
            background: #EEEEEE;
        /* fallback for old browsers */
            padding: 0;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            color: #000;
        }
        .student-profile {
            padding: 4rem 0;
        }
        .profile_img {
            width: 100%;
            max-width: 300px;
            height: auto;
        }
        .card {
            border: none;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 2rem;
        }
        .card-header {
            background-color: transparent;
            text-align: center;
        }
        .card-body {
            padding: 0;
        }
        h3 {
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 0.5rem;
            border-bottom: 1px solid #ccc;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="student-profile py-4" >
        <div class="container" style="width:70%;">
            <div class="cloumn" >
                <div class="col-lg-9" style=" margin:0 auto;">
                <div class="card shadow-sm">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" style="border-radius:50%; width:150px; height:150px;"src="https://source.unsplash.com/600x300/?student" alt="student dp">
                            <h3>Divya Bandari</h3>
                        </div>
                        <div class="card-body" style="gap:10px; text-align:center;">
                            <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
                            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
                            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Roll</th>
                                    <td width="2%">:</td>
                                    <td>125</td>
                                </tr>
                                <tr>
                                    <th width="30%">Academic Year</th>
                                    <td width="2%">:</td>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">:</td>
                                    <td >Female</td>
                                </tr>
                                <tr>
                                    <th width="30%">Religion</th>
                                    <td width="2%">:</td>
                                    <td>Hindhu</td>
                                </tr>
                                <tr>
                                    <th width="30%">Blood</th>
                                    <td width="2%">:</td>
                                    <td>B+</td>
                                </tr>
                            </table>
                        </div>

                        <!-- personal information -->
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Personal Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Father's Name</th>
                                    <td width="2%">:</td>
                                    <td>Gangadhar Bandari</td>
                                </tr>
                                <tr>
                                    <th width="30%">Mother's Name</th>
                                    <td width="2%">:</td>
                                    <td>Shoba Bandari</td>
                                </tr>
                                <tr>
                                    <th width="30%">Mother's Occupation</th>
                                    <td width="2%">:</td>
                                    <td >Home maker</td>
                                </tr>
                                <tr>
                                    <th width="30%">Fathers's Occupation</th>
                                    <td width="2%">:</td>
                                    <td>Bussiness</td>
                                </tr>
                                <tr>
                                    <th width="30%">Address</th>
                                    <td width="2%">:</td>
                                    <td>House No. 1-16, Baswannapally,
                                        Kamareddy,
                                        Telangana.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
           
                </div>

        </div>
    </div>
</body>
</html>
