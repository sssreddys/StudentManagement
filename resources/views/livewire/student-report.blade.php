<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Sheet</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <style>
   
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap');

        *{
            font-family: 'Montserrat', sans-serif;
            margin:0;
            padding: 0;
            color:#333;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        header h3{
            font-weight: 600;
            margin-top:10px;
        } 
 header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding:0;
     /* position: fixed;
     width: 100vw;
     z-index: 1000; */
     background-color: var(--color-background);
 }
 header.active{box-shadow: var(--box-shadow);}
 header .logo{
     display: flex;
     gap: .8rem;
     margin-right: auto;
 }
 header .logo img{
     width: 2rem;
     height: 2rem;
 }
 
 header,
 header .navbar{
     display: flex;
     align-items: center;
     justify-content: flex-end;
     padding: 0;
     color: var(--color-info);
 }
 header .navbar a{
     display: flex;
     margin-left: 2rem;
     gap: 1rem;
     align-items: center;
     justify-content: space-between;
     position: relative;
     height: 3.7rem;
     transition: all 300ms ease;
     padding: 0 2rem;
 }
 header .navbar a:hover {
     padding-top: 1.5rem;
 }
 header .navbar a.active{
     background: var(--color-light);
     color: var(--color-primary);
 }
 header .navbar a.active::before{
     content: "";
     background-color: var(--color-primary);
     position: absolute;
     height: 5px;
     width: 100%;
     left: 0;top: 0;
 }
 header #profile-btn{
     display: none;
     font-size: 2rem;
     margin: .5rem 2rem 0 0;
     cursor: pointer;
 }
 header .theme-toggler{
     background: var(--color-light);
     display: flex;
     justify-content: space-between;
     align-items: center;
     height: 1.6rem;
     width: 4.2rem;
     cursor: pointer;
     border-radius: var(--border-radius-1);
     margin-right: 2rem;
 }
 header .theme-toggler span{
     font-size: 1.2rem;
     width: 50%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
 }
 header .theme-toggler span.active{
     background-color: var(--color-primary);
     color: white;
     border-radius: var(--border-radius-1);
 }
 .container .table th,
        .container .table td {
            color: black;
        }
        p, table {
            color: black;
        }
    </style>
</head>
<body>
<header style="background:#053B50; padding:0 10px;">
        <a href="{{ route('teacher-dashboard') }}">
            <div class="logo" title="University Management System">
                <img src="https://png.pngtree.com/png-clipart/20211017/original/pngtree-school-logo-png-image_6851480.png" alt="" style="width:50px; height:50px;">
                <h2 style="color:white; margin-top:15px; font-weight:600; font-size:1.4rem;">Brilliant School</h2>
            </div>
        </a>
         <div class="navbar"style="display:flex; flex-direction:row; width:350px; justify-content:center; align-items:center; gap:0px;" >
             <a href="#">
                 <span class="material-icons-sharp" onclick="" style="font-weight:600; text-transform:capitalize; font-size:14px;color:white;">logout</span>
             </a>
             <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="" style="width:22px; height:25px;"></a>
         </div>   
     </header>
    <div class="container" style="margin-top:60px; background: #f8f8ff; padding:30px; border:1px solid #dcdcdc; box-shadow:10px 15px 15px 0 #f5f5f5;">
            <div class="head-top"  style="display:flex; flex-direction:row;">
                <img src="https://png.pngtree.com/png-clipart/20211017/original/pngtree-school-logo-png-image_6851480.png" alt="logo" style="width:100px; height:120px;margin-right:110px;">
                <div class="heading" style="display:flex; flex-direction:column; text-align:center; margin-left:100px; color:#00008B;">
                    <h2 class="text-center" style=" font-weight:600;">Brilliant School</h2>
                    <p style="color:black;font-weight:500;"> 24, ABCstreet, Road No.12, Hyderabad</p>
                    <div style="display:flex; flex-direction:row; justify-content:center; gap:30px;" >
                        <p>Phone: <span style="font-size:13px;">9878897776</span> </p>
                        <p>Email: <span style="font-size:14px;">admin@sapss.com</span></p>
                    </div>
                </div>
            </div>
            <div>
                <h5 style="background:#C0C0C0; padding:3px; text-transform: capitalize; text-align:center; font-weight:600;">acadamic year 2023-2024</h5>
            </div>
         <div style="display:flex; flex-direction:row; justify-content:space-between;">
         <div style="display:flex; flex-direction:column; justify-content:space-between;">
                <p><span style="font-weight:600;">Admission Number:</span> <span style="font-size:14px;">123455670</span></p>
                <p><span style="font-weight:600;">Student Name:</span> <span style="font-size:14px;">Bandari Divya</span></p>
            </div>
             <div>
              <p><span style="font-weight:600">Class:</span> <span style="font-size:14px;">10-A</span></p>
            </div>
         </div>
        
       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">Subject</th>
                    <th colspan="4" style="text-align:center;">Semester I</th>
                    <th colspan="4" style="text-align:center;">Semester II</th>
                   
                   
                </tr>
                <tr>
                    <th>Total Marks</th>
                    <th>Marks Obtained</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                    <th>Total Marks</th>
                    <th>Marks Obtained</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                    
                </tr>
            </thead>
            <tbody>
                <!-- Subject 1 -->
                <tr>
                    <td>Telugu</td>
                    <td>100</td>
                    <td>75</td>
                    <td>A</td>
                    <td>Good</td>
                    <td>100</td>
                    <td>79</td>
                    <td>A</td>
                    <td>Good</td>
                   
                   <!-- Total Score -->
                </tr>
                <!-- Subject 2 -->
                <tr>
                    <td>Mathematics</td>
                    <td>100</td>
                    <td>90</td>
                    <td>A+</td>
                    <td>Excellent</td>
                    <td>100</td>
                    <td>92</td>
                    <td>Ex</td>
                    <td>Excellent</td>
                 
                </tr>
                <!-- Subject 3 -->
                <tr>
                    <td>English</td>
                    <td>100</td>
                    <td>90</td>
                    <td>A+</td>
                    <td>Excellent</td>
                    <td>100</td>
                    <td>92</td>
                    <td>Ex</td>
                    <td>Excellent</td>
                
                </tr>
                <!-- Subject 4 -->
                <tr>
                    <td>Hindhi</td>
                    <td>100</td>
                    <td>90</td>
                    <td>A+</td>
                    <td>Excellent</td>
                    <td>100</td>
                    <td>92</td>
                    <td>Ex</td>
                    <td>Excellent</td>
                
                </tr>
                <!-- Subject 5 -->
                <tr>
                    <td>Science</td>
                    <td>100</td>
                    <td>90</td>
                    <td>A+</td>
                    <td>Excellent</td>
                    <td>100</td>
                    <td>92</td>
                    <td>Ex</td>
                    <td>Excellent</td>
                  
                </tr>
                <!-- Subject 6 -->
                <tr>
                    <td>Social</td>
                    <td>100</td>
                    <td>90</td>
                    <td>A</td>
                    <td>Excellent</td>
                    <td>100</td>
                    <td>92</td>
                    <td>Ex</td>
                    <td>Excellent</td>
                   
                </tr>
              

                <!-- Total Row -->
                <tr>
                    <td>Total Score</td>
                    <td>600</td>
                    <td>539</td>
                    <td></td>
                    <td></td>
                    <td>600</td>
                    <td>542</td>
                    <td></td>
                    <td></td>
                 
                    
                     <!-- Total Score -->
                </tr>
            </tbody>
        </table>

    <div style="display:flex; flex-direction:row; justify-content:space-between;font-size:14px; width:100%; margin: 50px auto">
        <div>
        <div style="display: flex; flex-direction:row;align-items: center; margin-top:35px;">
                <p style="margin-right: 10px;font-weight:600;">Attendance:</p>
                <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
            </div>
        </div>
        <div style="display:flex; flex-direction:column;">
            <strong style="text-align:center; margin-bottom:10px;">Semester I</strong>
            <div style="display: flex; flex-direction:row;align-items: center;">
                <p style="margin-right: 10px;font-weight:600;">Rank:</p>
                <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
            </div>
            <div style="display: flex; align-items: center;">
                <p style="margin-right: 10px;font-weight:600;">Percentage:</p>
                <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
            </div>
        </div>
        <div style="display:flex; flex-direction:column;">
            <strong style="text-align:center; margin-bottom:10px;">Semester II</strong>
            <div style="display: flex; align-items: center;">
                <p style="margin-right: 10px;font-weight:600;">Rank:</p>
                <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
            </div>
            <div style="display: flex; align-items: center;">
                <p style="margin-right: 10px;font-weight:600;">Percentage:</p>
                <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
            </div>
        </div>
        
    </div>


        <div style="display:flex; flex-direction:row; justify-content:center; margin-top:30px;">
            <table class="table table-bordered" style="width:50%; ">
                <thead>
                    <tr>
                        <th colspan="7" style="text-align:center; font-weight:600;">Grading System</th>
                    </tr>
                </thead>
                <tbody >
                    <!-- Subject 1 -->
                    <tr >
                        <td >100-91</td>
                        <td>90-81</td>
                        <td>80-71</td>
                        <td>70-61</td>
                        <td>60-51</td>
                        <td>50-35</td>
                        <td>34-0</td>
                    </tr>
                    <!-- Subject 2 -->
                    <tr>
                        <td>Ex</td>
                        <td>A+</td>
                        <td>A</td>
                        <td>B+</td>
                        <td>B</td>
                        <td>C</td>
                        <td>Fail</td>

                    </tr>
                </tbody>
            </table>
        </div>

    <div style="display:flex; flex-direction:row; justify-content:space-between; margin-top:50px;">
        <div style="display: flex; align-items: center;">
            <p style="margin-right: 10px;font-weight:600;">Class Teacher's Signature:</p>
            <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
        </div>
        <div style="display: flex; align-items: center;">
            <p style="margin-right: 10px;font-weight:600;">Class Principal's Signature:</p>
            <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
        </div>
        <div style="display: flex; align-items: center;">
            <p style="margin-right: 10px; font-weight:600;">Class Parent's Signature:</p>
            <div class="line" style="height: 0; width: 100px; border: 1px solid #333;"></div>
        </div>
        </div>
        <hr style="margin-top:10px; ">
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
