<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
    <div class="logo-container">
        <img class="logo" src="logo-removebg-preview.png" alt="Logo">
        <div class="header">DATAMEX COLLEGE OF ST.ADELINE</div>
      </div>
      <div class="btn-container">

        <button class="btn" id="logout-btn" onclick="redirectToindex()">Log Out</button>
       
      </div>
    </nav>
    

    
  <div class="content">
      <div class="logo">
          <img src="logo.jpg" alt="">
      </div>
      <div class="header">
          DATAMEX COLLEGE OF ST.ADELINE
      </div>
      <p>
          ELECTRONIC SCHOOL PORTAL
          <br>
          FOR STUDENTS
      </p>
 
  </div>
  <footer class="footer">
      <p>&copy;  2024 Datamex College of St. Adeline. All rights reserved.</p>
    </footer>
<script>
    function redirectToindex() {
  window.location.href = "index.php";
}
</script>
</body>
</html>