<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Juicy fruit</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fresca|Pacifico&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

    <header>
        <h1>Juicy fruits</h1>
    </header>

    <div class="container">

        <main role="main">

            <form action="show.php" method="post">

                <div class="important-info">

                    <label>Name:<input type="text" name="name" maxlength="12" pattern="[a-zA-Z]+" required="required" /></label>

                    <label>Surname:<input type="text" name="surname" maxlength="12" pattern="[a-zA-Z]+" required="required"/></label>

                    <label>Email:<input type="email" name="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+.+(\.[a-zA-Z0-9-]+)*" maxlength="12" required="required"/></label>

                    <label>Phone number:<input type="tel" name="phone-number" pattern="^\d{9}$"/></label>

                    <fieldset class="gender">

                        <p>Choice gender:</p>

                        <label>Female<input type="radio" name="gender" id="female" value="Female" checked="checked"></label>

                        <label>Male<input type="radio" name="gender" id="male" value="Male"></label>

                    </fieldset>

                    <label>Login:<input type="text" name="login" maxlength="12" required="required"/></label>

                    <label>Password:<input type="password" name="password1" minlength="8" maxlength="12" required="required"/></label>
                    <label>Password again:<input type="password" name="password2" minlength="8" maxlength="12" required="required"/></label>
                    
                    <button type="submit">Register</button>
                </div>

                <div class="optional-info">

                    <img src="image/oranges.jpeg" alt="Image with oranges">

                </div>

            </form>

        </main>

    </div>

    <footer>
        <p>Copyright &copy; 2017 - Łukasz Otowski</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>
