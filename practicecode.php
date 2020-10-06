<html>
  <head>
    <title>PHP Practice code</title>
  </head>
  <body>
    <?php 
    
        echo "<p>Hello World</p>"; 

    $x = 6; // This is the integer.
    $y = 8; 

    $z = $x + $y; // Calculates the integer variables above with an addition logical operator.
    
    // Outputs the result for $z
        echo $z;

    // Adds an "html" linebreak in the document.
        echo"<br />";


    $z = $x * $y; // Calculates the integer variables above with a multiply logical operator.

    // Outputs the results with text.
        echo "<p>Multiplied: The result is now: $z</p>";

        echo "<br />";

    // $firstName is the variable for 'Jamil'.
    $firstName = 'Jamil';

    // Outputs the firstName variable.
        echo $firstName;
   
        echo "<br />";

    // Also outputs the print statement and firstName variable.
        echo "Hello, my name is: " . $firstName . "!";

    $b = true;

        echo "<br />";

    //echo $smoothie[0];

    $bank = 100;

    if($bank < 1000){

        echo "<br /> You need more money!";
     }

    else{

        echo "Can I borrow some money?";
     }

        echo "<br />";

    while($bank > 0){

       echo $bank . "Brandon spends money... <br />";
        //$bank = $bank - 1;
        //$bank -= 1;
        $bank--;

     }

        echo "Brandon is broke... <br />";

        echo "<br />";

        //The for loop
        echo "The wheels on the bus go...";

    for($j = 0; $j < 3; $j++)
      {
        echo "round and round...";
      }

    ?> 
  </body>
</html>
