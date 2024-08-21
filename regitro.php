<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/img/thefreeforty_register_icon-icons.com_66338.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - user</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="css/login.css" rel="stylesheet" />
</head>

<body class="bg-info d-flex justify-content-center align-items-center vh-100">
  
  <form action="/proyect_6to_sem/php/register_user.php" method="post">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
          <img
            src="assets/login-icon.svg"
            alt="login-icon"
            style="height: 7rem"
          />
        </div>
        <div class="text-center fs-1 fw-bold">Register</div>
        <div class="input-group mt-4">
            <div class="input-group-text bg-info">
              <img
                src="assets/username-icon.svg"
                alt="username-icon"
                style="height: 1rem"
              />
            </div>
            <input
              class="form-control bg-light"
              type="text"
              placeholder="full name"
              name = "full_name"
            />
          </div><div class="input-group mt-4">
            <div class="input-group-text bg-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
            </div>
            <input
              class="form-control bg-light"
              type="email"
              placeholder="Email"
              name = "Email"
            />
          </div>
        <div class="input-group mt-4">
          <div class="input-group-text bg-info">
            <img
              src="assets/username-icon.svg"
              alt="username-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="text"
            placeholder="Username"
            name = "username"
          />
        </div>
        <br>
        
        <div class="input-group mt-1">
          <div class="input-group-text bg-info">
            <img
              src="assets/password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="password"
            placeholder="Password"
            name = "password"
          />
        </div>
        <div class="d-flex justify-content-around mt-1">
          <div class="d-flex align-items-center gap-1">
            
          </div>
          
        </div>
        <!-- <div class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">-->
          <!--<a href="login.html" style="text-decoration: none;">Register</a>-->
          
            <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Register</button>
          
        <!--</div>-->
        <div class="d-flex gap-1 justify-content-center mt-1">
          <div>You already have an account?</div>
          <a href="login.php" class="text-decoration-none text-info fw-semibold"
            >Login</a
          >
        </div>
  </form>
</body>

</html>