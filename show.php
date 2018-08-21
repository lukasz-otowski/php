<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone_number = $_POST['phone-number'];
$gender = $_POST['gender'];
$login = $_POST['login'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Smaczne owoce</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fresca|Pacifico&amp;subset=latin-ext" rel="stylesheet">
    <script src="js/script.js"></script>
    
</head>
<body>
    
    <header><h1>Juicy fruits</h1></header>
    
    <div class="container">
        
        <main role="main">
               
           <form action="show.php" method="post">

                <!--Ważne dane-->
                <div class="important-info show-info">

                    <!--Name-->
                    <p><span>Name:</span> <span><?php echo $name ?></span></p>

                    <!--Surname-->
                    <p><span>Surname:</span> <span><?php echo $surname ?></span></p>

                    <!--Email-->
                    <p><span>Email:</span> <span><?php echo $email ?></span></p>

                    <!--Phone number-->
                    <p><span>Phone number:</span> <span><?php echo $phone_number ?></span></p>

                    <!--Gender-->
                    <p><span>Gender:</span> <span><?php echo $gender ?></span></p>

                    <!--Login-->
                    <p><span>Login:</span> <span><?php echo $login ?></span></p>

                    <!--Password-->
                    <p><span>Password:</span> <span><?php echo $password1 ?></span></p>

                    <!--Zarejestruj się-->
                    <a href="index.php" class="back-btn">back</a>

                </div>

                <!--Opcjonalne dane-->
                <div class="optional-info">
                    
                    <figure></figure>
                    
                    <!--Obraz z pomarańczami-->
                    <img src="image/oranges.jpeg" alt="Zdjęcie z pomarańczami">

                    <!--Miejsce na kmentarz
                    <label>Komentarz<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Podziel się z nami, swoim komentarzem." onfocus="this.placeholder=''" onblur="this.placeholder='Podziel się z nami, swoim komentarzem.'" maxlength="100"></textarea></label>
                    -->
                </div>

            </form>
            
        </main>
        
    </div>
    
    <footer><p>Copyright &copy; 2017 - Łukasz Otowski</p></footer>
    
</body>
</html>