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
    <link rel="stylesheet" href="assets/assets/css/style.css" />
  </head>
  <body>
    <!-- this is the header -->
    <nav
      class="navbar bg-body-tertiary"
      id="nav"
      style="height: 3cm; color: ble"
    >
      <div class="container">
        <a class="navbar-brand" href="#home">
          <img
            src="assets/assets/img/logo.jpg"
            style="height: 2cm; width: auto"
            alt="LAVINIA TSS"
            width="30"
            height="24"
          />
          LAVINIA TSS
        </a>
      </div>
    </nav>
    <form action="login_logics.php" method="post">
      
      <div class="container-fluid" id="container">
        <h1 style="margin-bottom: 1cm;">Welcome On LAVINIA Tss</h1>
        <div class="form-floating mb-3">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            name="un"
            placeholder="name@example.com"
            style="width: 13cm;"
          />
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            name="pw"
            placeholder="Password"
            style="width: 13cm"
          />
          <label for="floatingPassword">Password</label>
        </div>
        
      <button type="submit" name="submit" class="btn btn-outline-primary">Log In</button>

      </div>
    </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
