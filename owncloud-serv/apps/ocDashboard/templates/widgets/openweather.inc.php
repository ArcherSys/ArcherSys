<?php

    $data = $additionalparams['weatherData'];
    $cols = count($data) -1;

?>

<div class='ocDashboard openweather items'>
    <table class='openweatherTable'>
        <thead>
            <tr>
                <td class="center" colspan="<?php print_unescaped($cols+1); ?>"><?php print_unescaped("<h1>".$l->t( $data['name'] )."</h1>"); ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php

                // Date
                print_unescaped("<td class='center width13'><h3>".$l->t( "today" )."</h3></td>");
                print_unescaped("<td class='center width13'><h3>".$l->t( "tomorrow" )."</h3></td>");
                print_unescaped("<td class='center width13'><h3>".$l->t( "in two days" )."</h3></td>");
                print_unescaped("</tr><tr>");

                // icon
                for($i=0; $i < $cols; $i++) {
                    $src = \OCP\image_path("ocDashboard","widgets/openweather/".$data[$i]['symbol']['var'].".png");
                    print_unescaped("<td class='center'><img src='".$src."' /></td>");
                }

            ?>
            </tr>
        </tbody>
    </table>
    <table class='openweatherTable paddingRight'>
        <tbody>
        <?php
            print_unescaped("<tr>");

            // temperature
            print_unescaped("<td colspan='".($cols+1)."'><h2>".$l->t( "Temperature" )."</h2></td></tr><tr>");
            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "day" )."<br>");
            print_unescaped($l->t( "min" )."<br>");
            print_unescaped($l->t( "max" )."<br>");
            //print_unescaped($l->t( "morning" )."<br>");
            //print_unescaped($l->t( "evening" )."<br>");
            print_unescaped($l->t( "night" ));
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped(round($data[$i]['temperature']['day']).$data[$i]['temperature']['unit']."<br>");
                print_unescaped(round($data[$i]['temperature']['min']).$data[$i]['temperature']['unit']."<br>");
                print_unescaped(round($data[$i]['temperature']['max']).$data[$i]['temperature']['unit']."<br>");
                //print_unescaped($data[$i]['temperature']['day'].$data[$i]['temperature']['unit']."<br>");
                //print_unescaped($data[$i]['temperature']['day'].$data[$i]['temperature']['unit']."<br>");
                print_unescaped(round($data[$i]['temperature']['night']).$data[$i]['temperature']['unit']);
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            // wind
            print_unescaped("<td colspan='".($cols+1)."'><h2>".$l->t( "Wind" )."</h2></td></tr><tr>");
            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "Speed" )."<br>");
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped($data[$i]['windSpeed']['mps'].$data[$i]['windSpeed']['unit']."<br>");
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "" )."<br><br>");
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped(str_replace(" ","<br>",$l->t($data[$i]['windSpeed']['name'])."<br>"));
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "Direction" ));
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped($data[$i]['windDirection']['code']);
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            print_unescaped("<td colspan='".($cols+1)."'>&nbsp;</td></tr><tr>");

            // clouds
            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "Cloudiness" ));
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped($data[$i]['clouds']['all'].$data[$i]['clouds']['unit']);
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            // pressure
            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "Pressure" )." (".$data[0]['pressure']['unit'].")");
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped(round($data[$i]['pressure']['value']));
                print_unescaped("</td>");
            }
            print_unescaped("</tr><tr>");

            // humidity
            print_unescaped("<td class='right'>");
            print_unescaped($l->t( "Humidity" ));
            print_unescaped("</td>");

            for($i=0; $i < $cols; $i++) {
                print_unescaped("<td class='right'>");
                print_unescaped(round($data[$i]['humidity']['value']).$data[$i]['humidity']['unit']);
                print_unescaped("</td>");
            }


            print_unescaped("</tr>");

            ?>
        </tbody>
    </table>
</div>