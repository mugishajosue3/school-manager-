<?php
require_once "conn.php";

if (isset($_POST['submit_parent'])) {
    $pid = $_POST['pid'];
    $pfn = $_POST['pfn'];
    $psn = $_POST['psn'];
    $pgender = $_POST['pgender'];
    $pnumber = $_POST['pnumber'];
    $district = $_POST['district'];

    $sql = "INSERT INTO parents ( ParentNationalId,  pFirstName, pLastName, pGender, PhoneNumber, District) VALUES ('$pid', '$pfn', '$psn', '$pgender', '$pnumber', '$district')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "connection failed : " . mysqli_errors($conn);
    }
    else{
        echo "Connection succeed" ;
    }

    

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LAVINIA TSS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/assets/css/style.css">
  </head>
  <body>
    <!-- this is the header -->
    <nav 
      class="navbar bg-body-tertiary"
      id="nav"
      style="height: 3cm;"
    >
      <div class="container">
        <a class="navbar-brand" href="#nav">
          <img
            src="assets/assets/img/logo.jpg"
            style="height: 2cm; width: auto"
            alt="LAVINIA TSS"
            width="30"
            height="24"
          />
          LAVINIA TSS
        </a>
        Welcome School Manager On Your dashboard! 
      </div>
    <center>
    <br><br><br>
    <div class="container-fluid">
       <a href="#trainee"><button type="button" class="btn">Trainee</button></a>
       <a href="#trade"><button type="button" class="btn">trade</button></a>
       <a href="#parent"><button type="button" class="btn">Parent</button></a>
       
       </div>
     
  </center>  
    
    <!-- trainee section -->

     <section id="trainee" style="margin-top:3cm; " >

     <h1>TRAINEE </h1>

    <form action="insert.php" method="post">
    <div class="input-group" style="width:26cm; margin-left:5cm;">
  <span class="input-group-text">First and last name</span>
  <input type="text" aria-label="First name" class="form-control" style=" height:1.2cm">
  <input type="text" aria-label="Last name" class="form-control" style=" height:1.2cm">
  <button class="btn btn-outline-secondary" type="button"  name="submit" id="button-addon2" style="background-color: white; height:1.2cm; background-color:black; color:white; width:auto; margin:0;">Button</button>
</div>
</form>

<!-- table -->
<table class="table" style="width:26cm; margin-left:5cm;margin-top:1cm; ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</section>

    <!-- Trade section -->

     <section id="trade">
      <H1>TRADE</H1>
    <form action="insert.php" method="post">
    <div class="input-group" style="width:26cm; margin-left:5cm;">
  <span class="input-group-text">First and last name</span>
  <input type="text" aria-label="First name" class="form-control" style=" height:1.2cm">
  <input type="text" aria-label="Last name" class="form-control" style=" height:1.2cm">
  <button class="btn btn-outline-secondary" type="button"  name="submit" id="button-addon2" style="background-color: white; height:1.2cm; background-color:black; color:white; width:auto; margin:0;">Button</button>
</div>
</form>

<!-- table -->
<table class="table" style="width:26cm; margin-left:5cm;margin-top:1cm; ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</section>
    <!-- Parent section -->

     <section id="parent">
      <H1>PARENTS</H1>
    <form method="post">
    <div class="input-group" style="width:26cm; margin-left:5cm;">
  <span class="input-group-text">First and last name</span>
  <input type="text" name="pid" placeholder="Parent National Id" class="form-control" style=" height:1.2cm">

  <input type="text" name="pfn" placeholder="Parent First Name" class="form-control" style=" height:1.2cm">

  <input type="text" name="psn" placeholder="Parent Second Name" class="form-control" style=" height:1.2cm">

  <input type="text" name="pgender" placeholder="Parent Gender" class="form-control" style=" height:1.2cm">

  <input type="text" name="pnumber" placeholder="Parent Phone Number" class="form-control" style=" height:1.2cm">

  <input type="text" name="district" placeholder="District" class="form-control" style=" height:1.2cm">

  <button class="btn btn-outline-secondary" type="submit"  name="submit_parent" id="button-addon2" style="background-color: white; height:1.2cm; background-color:black; color:white; width:auto; margin:0;">Button</button>

</div>
</form>

<!-- table -->
<table class="table" style="width:26cm; margin-left:5cm;margin-top:1cm; ">
  <thead>
    <tr>
      <th scope="col">Parent ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Tel</th>
      <th scope="col">District</th>
      <th col-span="2">Action</th>
      <th col-span="2"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  // display
  $select = "SELECT * FROM parents";
  $display = mysqli_query($conn, $select);

  if (mysqli_num_rows($display) > 0) {
      while ($row = mysqli_fetch_assoc($display)) {
          echo "<tr><th scope='row'>{$row['ParentNationalId']}</th>";
          $parentid = $row['ParentNationalId'];
          echo "<td>{$row['pFirstName']}</td>";
          echo "<td>{$row['pLastName']}</td>";
          echo "<td>{$row['pGender']}</td>";
          echo "<td>{$row['PhoneNumber']}</td>";
          echo "<td>{$row['District']}</td>";
          echo "<td><a href='admin-update.php?pid=$parentid'>update</a></td>";
          echo "<td><a href='admin.php?pid=$parentid'>delete</a></td>";
          echo "</tr>";
      }
  }
  ?>
</tbody>
</table>

</section>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        /** @format */

$(".form")
  .find("input, textarea")
  .on("keyup blur focus", function (e) {
    var $this = $(this),
      label = $this.prev("label");

    if (e.type === "keyup") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.addClass("active highlight");
      }
    } else if (e.type === "blur") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.removeClass("highlight");
      }
    } else if (e.type === "focus") {
      if ($this.val() === "") {
        label.removeClass("highlight");
      } else if ($this.val() !== "") {
        label.addClass("highlight");
      }
    }
  });

$(".tab a").on("click", function (e) {
  e.preventDefault();

  $(this).parent().addClass("active");
  $(this).parent().siblings().removeClass("active");

  target = $(this).attr("href");

  $(".tab-content > div").not(target).hide();

  $(target).fadeIn(600);
});

    </script>
  </body>
</html>
