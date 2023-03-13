<html>
    <body>
        <?php
            $d = date("D");
            if ($d == "Fri") {
                echo "Have a nice weekend! <br />";
            }
            elseif($d == "Sun") {
                echo "Have a nice Sunday! <br />";
            }
            else {
                echo "Have a nice day! <br />";
            }
        ?>
    </body>
</html>