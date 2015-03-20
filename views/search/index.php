
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/buttonstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/hyperlinkstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/labelstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/paragraphstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/dualpanestyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/tablestyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/resultstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/combostyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/checkboxstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/commentpopupstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/commenticonstyle.css">
<link id="zoomcss" rel="stylesheet" href="<?php echo URL; ?>public/css/multizoom.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <!--for the popup-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<style>

    <?php
    if (isset($this->resultList)) {
        foreach ($this->resultList as $key => $value) {
            echo '
.cd-popup' . $value['vehicle_reg_no'] . ' {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(94, 110, 141, 0.9);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
    -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
    transition: opacity 0.3s 0s, visibility 0s 0.3s;
    baseline-shift: super;
}                

.cd-popup' . $value['vehicle_reg_no'] . '.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
        transition: opacity 0.3s 0s, visibility 0s 0s;
        ?>
        }';
        }
    }
    ?>
</style>


</head>
<body>



    <div id = 'frame'>
        <div id = 'body'>

            <div id = 'panel'>
                <div id = "filters" style = "margin-top: 85px;height: 500px;">
                    <div><font style = "color: #2980b9; margin-top: 10px;"> <b> Filter Results</b></font></div>

                    <div style = "margin-top: 20px"><font style = "color: #2980b9;;margin-left: 20px"> Manufacturer | Model</font></div>
                    <div class = "checkbox" style = "padding-left: 40px;padding-top: 20px">
                        <input id = "check1" class = "cbox" type = "checkbox" name = "check" value = "check1">
                        <label for = "check1">Toyota</label>
                        <div id = "subfill1" style = "display: none; padding-left: 30px">
                            <input id = "check1-1" class = "cboxsub" type = "checkbox" name = "check" value = "check1-1">
                            <label for = "check1-1">Prius</label>
                            <br>
                            <input id = "check1-2" class = "cboxsub" type = "checkbox" name = "check" value = "check1-2">
                            <label for = "check1-2">Corolla</label>
                            <br>
                            <input id = "check1-3" class = "cboxsub" type = "checkbox" name = "check" value = "check1-3">
                            <label for = "check1-3">Aqua</label>
                            <br>
                        </div>
                        <br>
                        <input id = "check2" class = "cbox" type = "checkbox" name = "check" value = "check2">
                        <label for = "check2">Micro</label>
                        <div id = "subfill2" style = "display: none; padding-left: 30px">
                            <input id = "check2-1" class = "cboxsub" type = "checkbox" name = "check" value = "check1-1">
                            <label for = "check2-1">Prius</label>
                            <br>
                            <input id = "check2-2" class = "cboxsub" type = "checkbox" name = "check" value = "check1-2">
                            <label for = "check2-2">Corolla</label>
                            <br>
                            <input id = "check2-3" class = "cboxsub" type = "checkbox" name = "check" value = "check1-3">
                            <label for = "check2-3">Aqua</label>
                            <br>
                        </div>
                        <br>
                        <input id = "check3" class = "cbox" type = "checkbox" name = "check" value = "check3">
                        <label for = "check3">Zuzuki</label>
                        <div id = "subfill3" style = "display: none; padding-left: 30px">
                            <input id = "check3-1" class = "cboxsub" type = "checkbox" name = "check" value = "check1-1">
                            <label for = "check3-1">Prius</label>
                            <br>
                            <input id = "check3-2" class = "cboxsub" type = "checkbox" name = "check" value = "check1-2">
                            <label for = "check3-2">Corolla</label>
                            <br>
                            <input id = "check3-3" class = "cboxsub" type = "checkbox" name = "check" value = "check1-3">
                            <label for = "check3-3">Aqua</label>
                            <br>
                        </div>
                        <br>
                    </div>
                    <div style = "margin-top: 20px"><font style = "color: #2980b9;margin-left: 20px"> Availability</font></div>

                    <div>
                        <table border = "0" style = "margin-top: 18px">
                            <tr>
                                <td>
                                    <font style = "margin-left: 40px;font-weight: bold;font-size: 13px;color: #2980b9;font-family: sans-serif">From</font>
                                </td>
                                <td>
                                    <input type = "text" name = "from" class = "fromtoBox" tabindex = "1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <font style = "margin-left: 40px;font-weight: bold;font-size: 13px;color: #2980b9;font-family: sans-serif">To</font>
                                </td>
                                <td>
                                    <input type = "text" name = "to" class = "fromtoBox" tabindex = "1"/>
                                </td>
                            </tr>
                        </table>


                    </div>

                </div>
            </div>

            <div id = 'content'>
                <div id = 'search'>
                    <input type = "text" name = "search" id = "searchBox" tabindex = "1"/>
                    <select name = "search" id = "categoryCombo">
                        <option value = "volvo">Volvo</option>
                        <option value = "saab">Saab</option>
                        <option value = "mercedes">Mercedes</option>
                        <option value = "audi">Audi</option>
                    </select>
                    <input type = "submit" value = "Search" id = "search-button">
                </div>
                <div id = 'categories'>
                    <table id = "category-table">
                        <tr>
                            <td>Car</td>
                            <td>Nano</td>
                            <td>Trishaw</td>
                        </tr>
                    </table>
                </div>
                <div class = 'results'>

                    <div id = "sort-bar">
                        <p style = "margin-left: 820px; display: inline-block">Sort : </p>
                        <select name = "search" id = "sort-combo">
                            <option value = "Best Match">Best Match</option>
                            <option value = "Rating">Rating: highest fisrt</option>
                            <option value = "location">Location: closest first</option>
                        </select>
                    </div>

                    <?php
//                    print_r($this->comments);



                    $count = 0;
                    if (isset($this->resultList)) {
                        foreach ($this->resultList as $key => $value) {
                            $count += 1;
                            echo
                            '<div class="result">
                        <hr>
                        <div style="margin-left: 6px; margin-right: 6px; ">
                            <font style="color: #2980b9; font-weight: bold; font-size: 17px">' . $value['manufacturer'] . '</font><font style="color: #2980b9; font-weight: bold; font-size: 17px"> ' . $value['model'] . '<br></font>
                        </div>
                        <table  style="width: 100%;" >
                            <tr>
                                <td style="width: 25%">
                                    <div width ="225px" style="margin-left: 6px; float: left; height: auto; ">
                                        <img id="' . $count . '" border="0" src="' . URL . 'public/images/' . $value['owner_id'] . "/" . $value['image'] . '" style="width:225px; height:225px; margin-top: 10px">
                                    </div>
                                </td>
                                <td style="vertical-align: top">
                                    <div style="float: left; padding-top: 10px">

                                        <table border="0">
                                            <col width="180">
                                            <col width="800">
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9;">Registration No: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text>' . $value['vehicle_reg_no'] . '</text>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Vehicle type: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text>' . $value['vehicle_type'] . '</text>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Capacity: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text>' . $value['capacity'] . '</text>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Description: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text>' . $value['vehicle_description'] . '</text>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Price without AC: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text style="font-weight: bold "> Rs. ' . $value['non_ac_price'] . ' ' . $value['pricing_category'] . '</text>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Price with AC: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text style="font-weight: bold "> Rs. ' . ($ac_price = ($value['ac_price'] == 'Null' || $value['ac_price'] == '' || $value['ac_price'] == '0.0') ? 'Not available' : $value['ac_price']) . ' ' . $value['pricing_category'] . '</text>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Notes: </font>
                                                </td>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text>' . $value['descrption'] . '</text>
                                                </td>
                                            </tr>';
                            
                            $numbers = array();
                            foreach ($this->phoneNumbers as $index => $pair) {
                                if ($pair['vehicle_reg_no'] == $value['vehicle_reg_no']) {
                                    $numbers[] = $pair['telephone_number'];
                                }
                            }

                            echo '<tr>
                                                <td rowspan="' . count($numbers) . '" style="padding-bottom: 6px" valign="top">
                                                    <font style="color: #2980b9; ">Contact No: </font>
                                                </td>';
                            foreach ($numbers as $index => $number) {

                                if ($index == 0) {
                                    echo '<td style="padding-bottom: 6px" valign="top">
                                                    <text style="font-weight: bold">' . $number . '</text>
                                                </td>
                                            </tr>';
                                } else {
                                    echo '<tr>
                                                <td style="padding-bottom: 6px" valign="top">
                                                    <text style="font-weight: bold">' . $number . '</text>
                                                </td>
                                            </tr>';
                                }
                            }


                            echo '</table>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>

                                    <img href="#0" class="cd-popup-trigger" id="comment-icon' . $value['vehicle_reg_no'] . '" border="0" src="' . URL . 'public/images/comment_icon.png" style="height: 20px;width: 24px; float: right; padding-left: 40px; padding-right: 40px; padding-top: 5px; ">

                                    <div class="cd-popup' . $value['vehicle_reg_no'] . '" role="alert">
                                        <div class="cd-popup-container">
                                            <div style="margin-left: 6px; margin-right: 6px; margin-top: 20px">
                                                <text id="comments-header"><font style="color: #2980b9; cursor: pointer;margin-left: auto;margin-right: auto; font-weight: bold;font-size: larger">Comments</font></text>
                                                <hr>
                                                <div id="comment_panel" style="margin-top: 20px">
                                                    <table border = "0" style="margin: 0 auto;">';
                            
                            foreach ($this->comments as $index => $commentdata) {
                                if ($commentdata['vehicle_reg_no'] == $value['vehicle_reg_no']) {
                                    echo '
                                                        <tr>
                                                            <td>
                                                                <div style="height: auto; padding-top: 10px;padding-bottom: 10px; margin-left: 30px">
                                                                    <font style="color: #2980b9;">'.$commentdata['username'].' wrote :</font><br>'.$commentdata['comment'].'
                                                                    <br><font style="color: #2980b9; font-size: 12px">on '.$commentdata['comment_date'].'</font>
                                                                </div>

                                                            </td>
                                                        </tr>';
                                }
                            }
//                            echo '
//                                                        <tr>
//                                                            <td>
//                                                                <div style="height: auto; padding-top: 10px;padding-bottom: 10px; margin-left: 30px">
//                                                                    <font style="color: #2980b9;">MortalCombat_92</font><br>
//                                                                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
//                                                                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
//                                                                </div>
//
//                                                            </td>
//                                                        </tr>
//                                                        <tr>
//                                                            <td>
//                                                                <div style="height: auto;padding-top: 10px; padding-bottom: 10px; margin-left: 30px">
//                                                                    <div><font style="color: #2980b9; ">Kitana</font></div>
//                                                                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
//                                                                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
//                                                                </div>
//                                                            </td>
//                                                        </tr>
//                                                        <tr>
//                                                            <td>
//                                                                <div style="height: auto;padding-top: 10px; padding-bottom: 10px; margin-left: 30px">
//                                                                    <div><font style="color: #2980b9; ">Sheeva</font></div>
//                                                                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
//                                                                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
//                                                                </div>
//                                                            </td>
//                                                        </tr>';
                            echo '
                                                    </table>
                                                </div>
                                                <hr>
                                            </div>
                                            

                                            <a href="#0" class="cd-popup-close img-replace">Close</a>
                                        </div> <!-- cd-popup-container -->
                                    </div> <!-- cd-popup -->
                                </td>
                            </tr>
                        </table>
                    </div>';
                        }
                    }
                    ?>
                    <br><br><br><br><br><br><br><br><br>




                    <!--                    <div class="result">
                    <hr>
                    <div style="margin-left: 6px; margin-right: 6px; ">
                    <font style="color: #2980b9; font-weight: bold; font-size: 17px">Chevrolet</font><font style="color: #2980b9; font-weight: bold; font-size: 17px"> Cruz<br></font>
                    </div>
                    <table  style="width: 100%;" >
                    <tr>
                    <td style="width: 25%">
                    <div width ="225px" style="margin-left: 6px; float: left; height: auto; ">
                    <img id="cruz" border="0" src="public/images/cruz.jpg" style="width:225px; height:225px; margin-top: 10px">
                    </div>
                    </td>
                    <td style="vertical-align: top">
                    <div style="float: left; padding-top: 10px">
                
                    <table border="0">
                    <col width="180">
                    <col width="800">
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9;">Registration No: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>GA-2345</text>
                    </td>
                    </tr>
                
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Vehicle type: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>Car</text>
                    </td>
                    </tr>
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Capacity: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>4</text>
                    </td>
                    </tr>
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Description: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>The car has an awesome sound system with full AC. Has so much leg space for the passengers to make the journey a comfortable one.</text>
                    </td>
                    </tr>
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">AC Available: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>Yes</text>
                    </td>
                    </tr>
                
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Price: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text style="font-weight: bold ">Rs. 40.00 per km</text>
                    </td>
                    </tr>
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Notes: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text>Safest mode of transport for the cheapest price.</text>
                    </td>
                    </tr>
                    <tr>
                    <td rowspan="2" style="padding-bottom: 6px" valign="top">
                    <font style="color: #2980b9; ">Contact No: </font>
                    </td>
                    <td style="padding-bottom: 6px" valign="top">
                    <text style="font-weight: bold">0779273746</text>
                    </td>
                    </tr>
                    <tr>
                    <td style="padding-bottom: 6px" valign="top">
                    <text style="font-weight: bold">0712273827</text>
                    </td>
                    </tr>
                    </table>
                
                
                    <font id="schemes" style="color: #2980b9; ">Registered Schemes:<br></font>
                    <text>City Taxi</text><br>
                    <text>Tours</text>
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td>
                
                    <img href="#0" class="cd-popup-trigger" id="comment-icon" border="0" src="public/images/comment_icon.png" style="height: 20px;width: 24px; float: right; padding-left: 40px; padding-right: 40px; padding-top: 5px; ">
                
                    <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">
                    <div style="margin-left: 6px; margin-right: 6px; margin-top: 20px">
                    <text id="comments-header"><font style="color: #2980b9; cursor: pointer;margin-left: auto;margin-right: auto; font-weight: bold;font-size: larger">Comments</font></text>
                    <hr>
                    <div id="comment_panel" style="margin-top: 20px">
                    <table border = "0">
                    <tr>
                    <td>
                    <div style="height: auto; padding-top: 10px;padding-bottom: 10px; margin-left: 30px">
                    <font style="color: #2980b9;">MortalCombat_92</font><br>
                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
                    </div>
                
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <div style="height: auto;padding-top: 10px; padding-bottom: 10px; margin-left: 30px">
                    <div><font style="color: #2980b9; ">Kitana</font></div>
                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <div style="height: auto;padding-top: 10px; padding-bottom: 10px; margin-left: 30px">
                    <div><font style="color: #2980b9; ">Sheeva</font></div>
                    A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.
                    <br><font style="color: #2980b9; font-size: 12px">December 17, 2014</font>
                    </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                    <hr>
                    </div>
                    <div>
                    <div id="non_ac_city_taxi">
                    <font style="color: #2980b9; ">Non AC</font><br>
                    <font style="color: #2980b9; ">Price: </font><text>Rs.</text><text>50</text><text> per </text><text> km </text><br>
                    <font style="color: #2980b9; ">Description: </font><div style="margin-left: 40px; margin-right: 20px; text-align: justify">A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.</div><br>
                    </div>
                    <div id="non_ac_city_taxi">
                    <font style="color: #2980b9; ">AC</font><br>
                    <font style="color: #2980b9; ">Price: </font><text>Rs.</text><text>60</text><text> per </text><text> km </text><br>
                    <font style="color: #2980b9; ">Description: </font><div style="margin-left: 40px; margin-right: 20px; text-align: justify">A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.A high fi radio set up is availiable. The windows are shaded so you can ride without pain of sunlight. As the seating capacity is 4, you can go without any trouble.</div><br>
                    </div>
                    <div id="avaliability_city_taxi">
                    <font style="color: #2980b9; ">Availiability</font><br><br>
                    <font style="color: #2980b9; ">mon</font><text style="margin-left: 20px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">tue</font><text style="margin-left: 29px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">wed</font><text style="margin-left: 22px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">thu</font><text style="margin-left: 28px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">fri</font><text style="margin-left: 34px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">sat</font><text style="margin-left: 31px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    <font style="color: #2980b9; ">sun</font><text style="margin-left: 26px">From </text><text>05:00</text><text> To </text><text> 17:00 </text><br>
                    </div>
                    </div>      
                
                    <a href="#0" class="cd-popup-close img-replace">Close</a>
                    </div>  
                    </div> 
                    </td>
                    </tr>
                    </table>
                    </div>
                
                    -->



                    </body>
                    <script>


                        function hidetracker() {
                            document.getElementsByClassName('.zoomtracker').style.display = 'none';
                        }
                        ;


<?php
require 'views/search/js/multizoom.js';

echo "jQuery(document).ready(function($) {\n";

$i = 1;
if (isset($this->resultList)) {
    foreach ($this->resultList as $key => $value) {
        echo "$('#" . $i . "').addimagezoom({
                                        zoomrange: [3, 10],
                                        magnifiersize: [400, 400],
                                        magnifierpos: 'right',
                                        cursorshade: true,
                                        largeimage:'http://localhost/RideSL/public/images/" . $value['owner_id'] . "/" . $value['image'] . "', 
                                        disablewheel: true//<-- No comma after last option!
                                    });\n";
        $i++;
    }
}

echo "});\n";

echo '$(document).ready(function() {

                                    $("#check1").click(function() {
                                        $("#subfill1").slideToggle("slow");
                                    });
                                    $("#check2").click(function() {
                                        $("#subfill2").slideToggle("slow");
                                    });
                                    $("#check3").click(function() {
                                        $("#subfill3").slideToggle("slow");
                                    });
                                });';

echo "jQuery(document).ready(function($) {
                var elements = document.getElementsByClassName('zoomtracker');\n";


if (isset($this->resultList)) {
    foreach ($this->resultList as $key => $value) {
        echo "
                //open popup
                $('#comment-icon" . $value['vehicle_reg_no'] . "').on('click', function(event) {
                    event.preventDefault();
                    $('.cd-popup" . $value['vehicle_reg_no'] . "').addClass('is-visible');
                    disable_scroll();
                    $('body').css('overflow', 'hidden');
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.visibility = 'hidden';
                    }
                });

                //close popup
                $('.cd-popup" . $value['vehicle_reg_no'] . "').on('click', function(event) {
                    if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup" . $value['vehicle_reg_no'] . "')) {
                        event.preventDefault();
                        $(this).removeClass('is-visible');
                        enable_scroll();
                        $('body').css('overflow', 'auto');
                        for (i = 0; i < elements.length; i++) {
                            elements[i].style.visibility = 'visible';
                        }
                    }
                });
                //close popup when clicking the esc keyboard button
                $(document).keyup(function(event) {
                    if (event.which == '27') {
                        $('.cd-popup" . $value['vehicle_reg_no'] . "').removeClass('is-visible');
                        enable_scroll();
                        $('body').css('overflow', 'auto');
                        for (i = 0; i < elements.length; i++) {
                            elements[i].style.visibility = 'visible';
                        }
                    }
                });";
    }
    echo "});";
}
?>
                        var keys = [37, 38, 39, 40];

                        function preventDefault(e) {
                            e = e || window.event;
                            if (e.preventDefault)
                                e.preventDefault();
                            e.returnValue = false;
                        }

                        function keydown(e) {
                            for (var i = keys.length; i--; ) {
                                if (e.keyCode === keys[i]) {
                                    preventDefault(e);
                                    return;
                                }
                            }
                        }

                        function wheel(e) {
                            preventDefault(e);
                        }
                        function disable_scroll() {
                            if (window.addEventListener) {
                                window.addEventListener('DOMMouseScroll', wheel, false);
                            }
                            window.onmousewheel = document.onmousewheel = wheel;
                            document.onkeydown = keydown;
                        }

                        function enable_scroll() {
                            if (window.removeEventListener) {
                                window.removeEventListener('DOMMouseScroll', wheel, false);
                            }
                            window.onmousewheel = document.onmousewheel = document.onkeydown = null;
                        }

                    </script>

                    </html>
