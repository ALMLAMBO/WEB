<html>
    <body>
        <?php
            function say_hello($authority, $delimiter) {
                echo "Dear Mr./Mrs. " . $authority . $delimiter;
            }

            echo "Today,<br />";
            say_hello("President", "<br>");
            say_hello("Professor ", "<br>");
            say_hello("Chief Editor", "!");
            echo "<br /> ";
            echo " That was it" . "<br />";
            echo "Goodbye!" . "<br />";

            function sum($a, $b) {
                $result = $a + $b;
                return $result;
            }

            echo "5 + 9 = " . sum(5,9) . "<br />";

            function makecoffee($type = "cappuccino") {
                return "Making a cup of $type.\n" . "<br />";
            }

            echo makecoffee() ;
            echo makecoffee(null);
            echo makecoffee("espresso");

            function sum_n(...$numbers) {
                $acc = 0;
                foreach ($numbers as $n) {
                    $acc += $n;
                }
                return $acc;
            }

            echo sum_n(1, 2, 3, 4);

            echo "<br />";

            function makeyogurt($container = "bowl",
                                $flavour = "raspberry", $style = "Greek") {

                return "Making a $container of $flavour $style yogurt.\n";
            }

            echo makeyogurt(style: "natural");
        ?>
    </body>
</html>