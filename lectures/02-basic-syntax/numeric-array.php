<html>
    <body>
        <?php
            //auto key setting
            $summer_cities = array("Sozopol", "Barcelona", "Santorini", "Chernomoretz", "Thassos");
            //manual key setting
            $summer_cities[0] = "Sozopol";
            $summer_cities[1] = "Barcelona";
            $summer_cities[2] = "Santorini";
            $summer_cities[3] = "Chernomoretz";
            $summer_cities[4] = "Thassos";

            echo "I visited " . $summer_cities[0] . " in june 2014 " . $summer_cities[1] . " and " . $summer_cities[2].
            "in july 2014, and in the end " . $summer_cities[3].
            " and " . $summer_cities[4] . " in august 2014. It was a great summer!";
        ?>
    </body>
</html>
