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
      <div class="container-fluid" id="container" style="width:25cm; ">
        <h2>UPDATE</h2>
        

        <?php
require_once "conn.php";

$parentEmail = ''; // Initialize the variable to avoid undefined variable notice

if (isset($_GET['pid'])) {
    // Get the parentid from the URL
    $parentid = $_GET['pid'];
    
    // Escape the parentid to prevent SQL injection
    $parentid = mysqli_real_escape_string($conn, $parentid);

    // Construct the SQL query
    $sql = "SELECT * FROM parents WHERE ParentNationalId = '$parentid'";
    $update = mysqli_query($conn, $sql);

    // Check if the query was successful and if any rows were returned
    if ($update && mysqli_num_rows($update) > 0) {
        // Fetch the result
        $roww = mysqli_fetch_assoc($update);
    } else {
        echo "No parent found with ID: $parentid";
    }
} else {
    echo "No parent ID provided in the URL.";
}

if(isset($_POST['update'])){
    // Ensure that the form fields are set before accessing them
    $pid = isset($_POST['ParentNationalId']) ? $_POST['ParentNationalId'] : '';
    $pfn = isset($_POST['pFirstName']) ? $_POST['pFirstName'] : '';
    $pln = isset($_POST['pLastName']) ? $_POST['pLastName'] : '';
    $pg = isset($_POST['pGender']) ? $_POST['pGender'] : '';
    $pn = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : '';
    $district = isset($_POST['District']) ? $_POST['District'] : '';

    // Construct the SQL query
    $sql = "UPDATE parents SET 
            ParentNationalId = '$pid', 
            pFirstName = '$pfn', 
            pLastName = '$pln', 
            pGender = '$pg', 
            PhoneNumber = '$pn', 
            District = '$district' 
            WHERE ParentNationalId = '$pid'";

    // Execute the query
    if(mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Update failed";
}

mysqli_close($conn);
?>

<!-- Add the form around the input fields -->
<form method="post" action="">
    <input type="text" class="form-control" id="floatingInputValue" placeholder="Parent National ID" 
           name="ParentNationalId" value="<?php echo htmlspecialchars($roww['ParentNationalId']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">Parent National ID</label>
  
    <input type="text" class="form-control" id="floatingInputValue" placeholder="First Name" 
           name="pFirstName" value="<?php echo htmlspecialchars($roww['pFirstName']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">First Name</label>
  
    <input type="text" class="form-control" id="floatingInputValue" placeholder="Last Name" 
           name="pLastName" value="<?php echo htmlspecialchars($roww['pLastName']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">Last Name</label>
  
    <input type="text" class="form-control" id="floatingInputValue" placeholder="Gender" 
           name="pGender" value="<?php echo htmlspecialchars($roww['pGender']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">Gender</label>
  
    <input type="text" class="form-control" id="floatingInputValue" placeholder="Phone Number" 
           name="PhoneNumber" value="<?php echo htmlspecialchars($roww['PhoneNumber']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">Phone Number</label>
  
    <input type="text" class="form-control" id="floatingInputValue" placeholder="District" 
           name="District" value="<?php echo htmlspecialchars($roww['District']); ?>" style="margin:0.2cm; width:14cm;">
    <label for="floatingInputValue">District</label>
  
    <input type="submit" value="Update" name="update" style="width:3cm">
</form>

      </div>   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
