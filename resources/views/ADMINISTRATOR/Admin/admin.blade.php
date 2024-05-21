<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/users/admin/style/admin_style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="d-flex">
  <div calss="left gap-5" style="background-color: #800000; width: 25%; height: 100%;">
    <div class="d-flex gap-3 m-3 justify-content-center">
      <img class="leftlogo" src="images/spc-logo.png" alt="SPC Logo">
      <span class="text-light d-flex align-items-center" >Admin Dashboard</span>
    </div>
    <div class="admin_link d-flex flex-column align-items-center gap-3 mt-5" >
      <!-- <button class="btn bg-light w-100" id="btn_student">Student</button>
      <button class="btn bg-light w-100" id="btn_instructor">Instructor</button>
      <button class="btn bg-light w-100" id="btn_attendance_log">attendancel list</button> -->
      <a class="content d-flex justify-content-center text-decoration-none" id="btn_student" >Student</a>
      <a class="content d-flex justify-content-center text-decoration-none" id="btn_instructor">Instructor</a>
      <a class="content d-flex justify-content-center text-decoration-none" href="attendancelog">Attendance Log</a>
    </div>
    <div class=" gap-3 mt-5 ms-3">
      <a class="logout btn p-1 bg-light" style="font-weight:700;"href="#">Logout</a>
    </div>
    <div class="d-flex flex-column justify-content-end ms-2 h-50">
        <p class="text-secondary">spcregistrar@gmail.com</p>
        <p class="text-secondary" >(+63) 221-6246</p>
        <p class="text-secondary" >my.spc.edu.ph</p>
    </div>
    <!-- <footer class="text-white-50">©College of Computer Studies - 2nd Year - GROUP 1 </footer> -->
  </div>
  <div class="left_content d-flex">
    <div class="logos" id="logos">
      <div class="all_logo d-flex flex-column align-items-center gap-5">
        <img class="spclogo mt-2"src="images/spc-logo.png" alt="SPC Logo">
        <div class="college_logo d-flex justify-content-center gap-5">
          <img src="images/cas.png" alt="CAS Logo">
          <img src="images/cba.png" alt="CBA Logo">
          <img src="images/ccs.png" alt="CCS Logo">
          <img src="images/coe.png" alt="COE Logo">
          <img src="images/ced.png" alt="CED Logo">
          <img src="images/coc.png" alt="COC Logo">
        </div>
      </div>
    </div>
    <div class="college_student" id="college_student"> 
      <div class="colleges d-flex flex-column align-items-center gap-3">
        <h1>STUDENTS</h1>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #efffb2;" href="cba">
          <img src="images/cba.png" alt="Image" class="img-fluid">
          College of Business Administration
          <img src="images/cba.png" alt="Image" class="img-fluid">
        </a>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #edc0c6;" href="coc">
          <img src="images/coc.png" alt="Image" class="img-fluid">
          College of Criminology
          <img src="images/coc.png" alt="Image" class="img-fluid">
        </a>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #b4ccc2;" href="ccs">
          <img src="images/ccs.png" alt="Image" class="img-fluid">
          College of Computer Studies
          <img src="images/ccs.png" alt="Image" class="img-fluid">
        </a>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #d9c7c6;" href="cas">
          <img src="images/cas.png" alt="Image" class="img-fluid">
          College of Arts and Sciences
          <img src="images/cas.png" alt="Image" class="img-fluid">
        </a>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #d3c8df;" href="coe">
          <img src="images/coe.png" alt="Image" class="img-fluid">
          College of Engineering
          <img src="images/coe.png" alt="Image" class="img-fluid">
        </a>
        <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark"  style="background-color: #b2b2d1;" href="ced">
          <img src="images/ced.png" alt="Image" class="img-fluid">
          College of Education
          <img src="images/ced.png" alt="Image" class="img-fluid">
        </a>
      </div>
    </div>
    <div class="instructor" id="instructor">
      <div class="colleges d-flex flex-column align-items-center gap-3">
        <h1>INSTRUCTOR</h1>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #efffb2;" href="instructor_cba">
            <img src="images/cba.png" alt="Image" class="img-fluid">
            College of Business Administration
            <img src="images/cba.png" alt="Image" class="img-fluid">
          </a>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #edc0c6;" href="instructor_coc">
            <img src="images/coc.png" alt="Image" class="img-fluid">
            College of Criminology
            <img src="images/coc.png" alt="Image" class="img-fluid">
          </a>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #b4ccc2;" href="instructor_ccs">
            <img src="images/ccs.png" alt="Image" class="img-fluid">
            College of Computer Studies
            <img src="images/ccs.png" alt="Image" class="img-fluid">
          </a>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #d9c7c6;" href="instructor_cas">
            <img src="images/cas.png" alt="Image" class="img-fluid">
            College of Arts and Sciences
            <img src="images/cas.png" alt="Image" class="img-fluid">
          </a>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark" style="background-color: #d3c8df;" href="instructor_coe">
            <img src="images/coe.png" alt="Image" class="img-fluid">
            College of Engineering
            <img src="images/coe.png" alt="Image" class="img-fluid">
          </a>
          <a class="border text-decoration-none w-75 pt-1 pb-1 d-flex align-items-center justify-content-around text-dark"  style="background-color: #b2b2d1;" href="instructor_ced">
            <img src="images/ced.png" alt="Image" class="img-fluid">
            College of Education
            <img src="images/ced.png" alt="Image" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>
  <script src="js/admin/admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>