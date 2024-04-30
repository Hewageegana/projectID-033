<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register&login.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

            <header>Sign Up</header>
            <form action="" method="post">
               

                <div class="field input">
                    <label for="email">E-mail Address</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Re-enter Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Mobile Number</label>
                    <input type="text" name="mobile" id="mobile" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Country</label>
                    <input type="text" name="country" id="country" autocomplete="off" required>
                </div>
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="../html/login.html">Sign In</a>
                </div>
            </form>
        </div>
      
      </div>
</body>
</html>