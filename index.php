<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Ruff</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <header>

    <nav>
        <a href="index.php">Home</a>
        <a href="html/about.php">About Us</a>

        <?php
        	session_start();
        	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    			
    		echo "  <a href = 'php/customer.php' >Hello ". $_SESSION['firstname'] . "   </a>";
    		
    	} else {
    		echo "<a href='php/registration.php'> Become a Member</a>";
	}      
	?>

        <a href="php/viewOrder.php">Shopping cart</a>
    </nav>

        <div>
            <h1>Pet Ruff</h1>
            <h2>Your pets' favourite place</h2>
        </div>
        
     </header>


     <section>
        <div class="container">
            <h3>Best place for all your pets needs</h3>
            <p>
                All your pet need from food to health care for every need we bring the best quality products and service to your fingertip.
            </p>
        </div>

        <div class="row">
            <div class="column">
              <div class="card">
                <h3>Cat Food</h3>
                <a href="html/catProduct.php"><img src="images/cat_food.jpg" class="imgFood"></a>
                <p>10% all cat food items</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <h3>Dog Food</h3>
                <a href="html/dogProduct.php"><img src="images/dog_food.jpg" class="imgFood"></a>
                <p>20% on selected items</p>
            </div>
            </div>
            
            <div class="column">
              <div class="card">
                <h3>Bird Food</h3>
                <a href="html/birdProduct.php"><img src="images/bird_food.jpg" class="imgFood"></a>
                <p>Buy one Pack and get one free</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <h3>Fish Food</h3>
                <a href="html/fishProduct.php"><img src="images/fish_food.jpg" class="imgFood"></a>
                <p>Discounts over $20 purchases</p>
              </div>
            </div>
          </div>
     </section>

     <footer>
        <br>
        <p>Author: Pudubu Dasun<br>
        <a href="mailto:info@petruff.com">info@petruff.com</a></p>
     </footer>
    
    </body>
</html>
