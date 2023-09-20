<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <style>
   
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap');

 
 :root{
     --color-primary: #7380ec;
     --color-danger: #ff7782;
     --color-success: #41f1b6;
     --color-warning: #ffbb55;
     --color-white: #fff;
     --color-info: #7d8da1;
     --color-dark: #363949;
     --color-light: rgba(132, 139, 200, 0.18);
     --color-dark-varient: #677483;
     --color-background: #f6f6f9;
     
     --card-border-radius: 2rem;
     --border-radius-1: 0.4rem;
     --border-radius-2: 1.2rem;
 
     --card-padding: 1.8rem;
     --box-shadow: 0 2rem 3rem var(--color-light)    
 }
 
 .dark-theme{
     --color-background: #181a1e;
     --color-white: #202528;
     --color-dark-varient: #000;
     --color-dark-varient: #a3bdcc;
     --color-light: rgba(0,0,0,0.4);
     --box-shadow: 0 2rem 3rem var(--color-light)
 }
 p {
    color: #000; /* Set the color to black or another color */
}
 
 *{
     margin:0;
     font-family: 'Montserrat', sans-serif;
     padding: 0;
     text-decoration: none;
     list-style: none;
     box-sizing: border-box;
 }
 
 html{
     font-size: 14px;
     scroll-behavior: smooth;
 }
 body{
     font-size: .88rem;
     background: var(--color-background);
     user-select: none;
     overflow-x: hidden;
     color: #000000;
 }
 *{
     color: var(--color-dark);
 }
 img{
     display: block;
     width: 100%;
 }
 h1{
     font-weight: 800;
     font-size: 1.8rem;
 }
 h2{font-size: 1.4rem;}
 h3{font-size: .87rem;}
 h4{font-size: .8rem;}
 h5{font-size: .77rem;}
 small{font-size: .75rem;}
 
 .text-muted{color: var(--color-info);}
 
 b{color: var(--color-dark);}
 
 .primary{color: var(--color-primary);}
 .danger{color: var(--color-danger);}
 .success{color: var(--color-success)}
 .warning{color: var(--color-warning);}
 
 .container{
     position: relative;
     display: grid;
     width: 93%;
     margin: 0 3rem;
     gap: 1.8rem;
     grid-template-columns: 14rem auto 23rem;
     padding-top: 4rem;
 }
 header h3{font-weight: 500;} 
 header{
     position: fixed;
     width: 100vw;
     z-index: 1000;
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
     padding: 0 3rem;
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
 
 /* Profile section  */
 aside .profile{
     margin-top: 2rem;
     width: 13rem;
     position: fixed;
 }
 aside .profile .top{
     display: flex;
     align-items: center;
     gap: 1rem;
     border-bottom: 1px solid var(--color-light);
     padding-bottom: 1rem;
 }
 aside .profile .top:hover .profile-photo{
     scale: 1.05;
 }
 aside .profile .top .profile-photo{
     width: 6rem;
     height: 6rem;
     border-radius: 50%;
     overflow: hidden;
     border: 5px solid var(--color-light);
     transition: all 400ms ease;
 }
 aside .profile .about p{
     padding-bottom: 1rem;
 }
 aside .profile .about{
     margin-top: 1rem;
 }
 
 /* Home Section  */
 main{
     position: relative;
     margin-top: 1.4rem;
 }
 main .subjects{
     display: grid;
     grid-template-columns: repeat(5, 1fr);
     gap: 1.6rem;
 }
 
 main .subjects > div{
     background-color: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     margin-top: 1rem;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 main .subjects > div:hover{
     box-shadow: none;
 }
 main .subjects > div span{
     background-color: var(--color-primary);
     padding: .5rem;
     border-radius: 50%;
     color: var(--color-white);
     font-size: 1.5rem;
 }
 main .subjects > div.mth span,main .subjects > div.cg span{background: var(--color-danger);}
 main .subjects > div.cs span{background: var(--color-success);}
 
 main .subjects h3{
     margin: 1rem 0 0.6rem;
     font-size: 1rem;
 }
 main .subjects .progress{
     position: relative;
     width: 89px;
     height: 89px;
     border-radius: 50%;
     margin: auto;
 }
 main .subjects svg circle{
     fill: none;
     stroke: var(--color-primary);
     stroke-width: 8;
     stroke-linecap: round;
     transform: translate(5px, 5px);
     stroke-dasharray: 110;
     stroke-dashoffset: 92;
 }
 main .subjects .eg svg circle{
     stroke-dashoffset: 25;
     stroke-dasharray: 210;
 }
 main .subjects .mth svg circle{
     stroke-dashoffset: 7;
     stroke-dasharray: 210;
 }
 main .subjects .cs svg circle{
     stroke-dashoffset: 35;
     stroke-dasharray: 210;
 }
 main .subjects .cg svg circle{
     stroke-dashoffset: 0;
     stroke-dasharray: 210;
 }
 main .subjects .net svg circle{
     stroke-dashoffset: 5;
     stroke-dasharray: 210;
 }
 main .subjects .progress .number{
     position: absolute;
     top: 0;left: 0;
     height: 100%;
     width: 100%;
     display: flex;
     justify-content: center;
     align-items: center;
 }
 main .subjects small{
     margin-top: 1rem;
     display: block;
 }
 main .timetable{
     margin-top: 2rem;
 }
 main .timetable h2{
     margin-bottom: .8rem;
 }
 main .timetable table{
     background-color: var(--color-white);
     width: 100%;
     border-radius: var(--card-border-radius);
     padding: var(--card-padding);
     text-align: center;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 main .timetable span{display: none;}
 main .timetable table:hover{box-shadow: none;}
 main table tbody td{
     height: 2.8rem;
     border-bottom: 1px solid var(--color-light);
     color: var(--color-dark-varient);
 }
 main table tbody tr:last-child td{border: none;}
 
 main .timetable.active{
     width: 100%;
     height: 100vh;
     position: fixed;
     top: 0;left: 0;
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
 }
 main .timetable.active h2{
     color: var(--color-dark);
 }
 main .timetable.active table{
     width: 90%;
     max-width: 1000px;
     position: relative;
 }
 main .timetable.active span{
     display: block;
     font-size: 2rem;
     color: var(--color-dark);
     cursor: pointer;
 }
 .timetable div{
     position: relative;
     width: 50%;
     display: flex;
     align-items: center;
     justify-content: space-between;
 }
 main .timetable.active .closeBtn{
     position: absolute;
     top: 5%;right: 5%;
 }
 .float{margin-top: 2.2rem;padding-left: 1.5rem;}
 
 
 .float .result .updates{
     background-color: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 
 
 /* Right  */
 .right{margin-top: 2.2rem;padding-left: 1.5rem;}
 
 .right .announcements h2{margin-bottom: .8rem;}
 .right .announcements .updates{
     background-color: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 .right .announcements .updates:hover{box-shadow: none;}
 .right .announcements .updates .message{
     gap: 1rem;
     line-height: 1.5;
     padding: .5rem 0;
 }
 
 
     /* Add these styles for the timetable table */
      .timetable table {
         background-color: var(--color-white);
         width: 100%;
         border-radius: var(--card-border-radius);
         padding: var(--card-padding);
         text-align: center;
         box-shadow: var(--box-shadow);
         transition: all 300ms ease;
         margin-top:20px;
     }
 
      .timetable table:hover {
         box-shadow: none;
     }
 
      .timetable table thead th {
         background-color: #64CCC5;
         padding:2px;
         border-radius:5px;
         color: var(--color-white);
     }
 
      .timetable table tbody td {
         height: 2.8rem;
         border-bottom: 1px solid var(--color-light);
         color: var(--color-dark-varient);
     }
 
      .timetable table tbody tr:last-child td {
         border: none;
     }
 
 
 
 /* Teachers on leave  */
 .right .leaves{margin-top: 2rem;}
 .right .leaves h2{margin-bottom: .8rem;}
 .right .leaves .teacher{
     background: var(--color-white);
     display: flex;
     align-items: center;
     gap: 1rem;
     margin-bottom: .7rem;
     padding: 1.4rem var(--card-padding);
     border-radius: var(--border-radius-2);
     transition: all 300ms ease;
     box-shadow: var(--box-shadow);
 }
 .right .profile-photo{
     width: 2.5rem;
     height: 2.5rem;
     border-radius: 50%;
     overflow: hidden;
 }
 .right .leaves .teacher:hover{box-shadow: none;}
 
 
 
 
 
 /* MEDIA QUERIES  */
 @media screen and (max-width: 1200px) {
     html{font-size: 12px;}
     .container{
         grid-template-columns: 13rem auto 20rem;
     }
     header{position: fixed;}
     .container{padding-top: 4rem;}
     header .logo h2{display: none;}
     header .navbar h3{display: none;}
     header .navbar a{width: 4.5rem; padding: 0 1rem;}
 
     main .subjects{
         grid-template-columns: repeat(2, 1fr);
         gap: 1;
     }
     main .timetable{
         width: 150%;
         position: absolute;
         padding: 4rem 0 0 0;
     }
 }
 
 
 @media screen and (max-width: 768px){
     html{font-size: 10px;}
     header{padding: 0 .8rem;}
     .container{width: 100%; grid-template-columns: 1fr;margin: 0;}
     header #profile-btn{display: inline;}
     header .navbar{padding: 0;}
     header .navbar a{margin: 0 .5rem 0 0;}
     header .theme-toggler{margin: 0;}
     aside{
         position: absolute;
         top: 4rem;left: 0;right: 0;
         background-color: var(--color-white);
         padding-left: 2rem;
         transform: translateX(-100%);
         z-index: 10;
         width:18rem;
         height: 100%;
         box-shadow: 1rem 3rem 4rem var(--color-light);
         transition: all 2s ease;
     }
     aside.active{
         transform: translateX(0);
     }
     main{padding: 0 2rem;}
     main .timetable{
         position: relative;
         margin: 3rem 0 0 0;
         width: 100%;
     }
     main .timetable table{
         width: 100%;
         margin: 0;
     }
     .right{
         width: 100%;
         padding: 2rem;
     }
 }
 </style>
</head>
<body>
     <header style="background:#053B50">
         <div class="logo" title="University Management System">
             <img src="https://png.pngtree.com/png-clipart/20211017/original/pngtree-school-logo-png-image_6851480.png" alt="">
             <h2 style="color:white; text-align:center;">Brilliant School</h2>
         </div>
         <div class="navbar"style="display:flex; flex-direction:row; width:250px; justify-content:center; align-items:center; gap:0px;" >
             <a href="#">
                 <span class="material-icons-sharp" onclick="" style="font-weight:600; text-transform:capitalize; font-size:14px;color:white;">logout</span>
             </a>
             <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/User_icon-cp.svg/1200px-User_icon-cp.svg.png" alt="" style="width:22px; height:25px;"></a>
         </div>   
     </header>
 
 
     <div class="container" >
         <aside style="border-right: 1px solid 	#dcdcdc;">
             <div class="profile" >
                 <div class="top" >
                     <div class="profile-photo" style="height:90px; width:120px;">
                         <img src="https://img.freepik.com/premium-vector/3d-man-avatar-happy-smiling-face-icon-young-businessman-student-freelancer_313242-1219.jpg?w=2000" >
                     </div>
                     <div class="info" style="line-height:1.5; color:black;">
                         <p>Hey, <b>Divya Bandari</b> </p>
                         <small class="text-muted">12115153</small>
                     </div>
                 </div>
                 <div class="about" style="line-height:1.5;">
                     <h5>Class</h5>
                     <p>10th class</p>
                     <h5>DOB</h5>
                     <p>15-Sept-2000</p>
                     <h5>Contact</h5>
                     <p>9984675874</p>
                     <h5>Email</h5>
                     <p>mahsank111@gmail.com</p>
                     <h5>Address</h5>
                     <p>168, Eden Enclave, Kursi Road, Lucknow</p>
                 </div>
             </div>
         </aside>
     <!-- main content -->
         <div>
             <h1 style=" color:#053B50; line-height:2;">Student Dashboard</h1>
         <div class="float">
             <div class="result">
                 <div class="updates" >
                 <div class="message" style="display: flex; flex-direction: row; justify-content: center; height:20%; align-items:center;">
                         <div style="flex: 2; display: flex; flex-direction: column; line-height:2; margin-top:10px;">
                             <strong style="color:#176B87; font-size:14px">Hello Divya</strong>
                             <p>Learning is fun</p>
                             <p>Keep it up and improve your grades to become the best !</p>
                             <a href="{{ route('student-report') }}">
                                 <button class="btn btn-primary" style="background-color: #64CCC5; margin-top: 15px; padding: 5px 5px; border: none; border-radius: 5px; color: #176B87; font-size: 13px; width: 120px; cursor: pointer;">
                                     View Result
                                 </button>
                             </a>
                         </div>
                         <div style="flex: 1; margin-bottom:20px;">
                             <img src="https://img.freepik.com/premium-vector/smiling-young-man-student-freelancer-with-laptop-books-3d-character-thinking-about-education_313242-1595.jpg?size=626&ext=jpg&ga=GA1.1.1056393633.1694788075&semt=ais" alt="" style="width: 100%; height: auto; ">
                         </div>
                     </div>
 
                 </div>
             </div>
         </div>
            
 
             <div class="timetable" id="timetable">
                 <div style=" margin-top:20px;">
                     <h2 style=" color:#053B50;">Today's Timetable</h2>
                 </div>
            <table>
                     <thead>
                         <tr>
                             <th>Serial No.</th>
                             <th>Subject</th>
                             <th>Time</th>
                            
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>Mathematics</td>
                             <td>9:00 AM - 10:00 AM</td>
                            
                         </tr>
                         <tr>
                             <td>2</td>
                             <td>Science</td>
                             <td>10:15 AM - 11:15 AM</td>
                            
                         </tr>
                         <tr>
                             <td>3</td>
                             <td>Social</td>
                             <td>11:30 AM - 12:15 PM</td>
                            
                         </tr>
                         <tr>
                             <td>4</td>
                             <td>English</td>
                             <td>12:15 PM - 01:00 PM</td>
                            
                         </tr>
                         <!-- Add more rows as needed -->
                     </tbody>
          </table>
 
             </div>
 </div>
 
         <div class="right">
             <div class="announcements">
                 <h2>Announcements</h2>
                 <div class="updates">
                     <div class="message">
                         <p> <b>Academic</b> Summer training internship with Live Projects.</p>
                         <small class="text-muted">2 Minutes Ago</small>
                     </div>
                     <div class="message">
                         <p> <b>Co-curricular</b> Global internship oportunity by Student organization.</p>
                         <small class="text-muted">10 Minutes Ago</small>
                     </div>
                     <div class="message">
                         <p> <b>Examination</b> Instructions for Mid Term Examination.</p>
                         <small class="text-muted">Yesterday</small>
                     </div>
                 </div>
             </div>
 
             <div class="leaves">
                 <h2>Assignments</h2>
                 <div class="teacher">
                     <div class="profile-photo"><img src="https://w7.pngwing.com/pngs/54/516/png-transparent-computer-icons-task-check-mark-ico-miscellaneous-text-rectangle.png" alt=""></div>
                     <div class="info">
                         <h3>Learn Capital cities of countries</h3>
                         <small class="text-muted">Due date:tomorrow</small>
                     </div>
                 </div>
                 <div class="teacher">
                     <div class="profile-photo"><img src="https://w7.pngwing.com/pngs/54/516/png-transparent-computer-icons-task-check-mark-ico-miscellaneous-text-rectangle.png" alt=""></div>
                     <div class="info">
                         <h3>Solve Trigonometry Problems</h3>
                         <small class="text-muted">Due date: day after tomorrow </small>
                     </div>
                 </div>
                
 
         </div>
     </div>
 
</body>
</html>