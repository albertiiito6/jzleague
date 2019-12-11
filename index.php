<html>
    <body>
        
        <?php
            echo "The sum is " . 1 | 2; // output: "2". Parentheses needed.
            echo "The sum is ", 1 | 2; // output: "The sum is 3". Fine.
        ?>
        
    </body>
</html>