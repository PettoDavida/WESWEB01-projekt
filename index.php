<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/Startsida.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <script src="./JavaScript/ModalBox.js"></script>
    <title>Apex Forums</title>
</head>

<body>
    <div id="container">
        <?php
        include "INCLUDE/Head.php";
        ?>


        <main>
            <div id="Flex">
                <div id="bc">
                    <div id="patchheader">
                        <div id="phead">
                            <h1>Patch Notes</h1>
                            <audio controls>
                                <source src="./AUDIO/theme.opus">
                            </audio>
                            <button onclick="toggleModal('.modal')">JS ModalBox</button>
                            <div class="modal">
                                <div class="box">
                                    <div class="close_btn" onclick="toggleModal('.modal')"><i class="fas fa-times"></i>
                                    </div>
                                    <div class="modalContent">
                                        <img src="./IMAGES/Reddit.png" usemap="#image-map" alt="Reddit Icon">

                                        <map name="image-map" id="image-map">
                                            <area target="_blank" alt="Reddit Icon"
                                                title="Stefan nu kan du inte klaga jag har en hotspot i ett javascript"
                                                href="https://www.reddit.com/r/apexlegends"
                                                coords="60,142,50,127,49,114,41,100,50,88,64,91,97,78,104,46,127,51,139,47,143,55,136,63,127,63,111,55,105,80,133,91,148,87,157,99,153,115,142,137,116,149,89,151"
                                                shape="poly">
                                        </map>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="patch">
                            <ul>
                                <br>
                                <h4>G7 Scout/ Triple Take / Longbow DMR</h4>
                                <br>
                                <li> Lowered leg shot damage reduction: 25% -> 10%</li>
                                <li> Reduced base weapon sway by about 33%</li>
                                <li> Reduced base sway speed by about 25%</li>
                                <br>
                                <h4>Longbow DMR</h4>
                                <br>
                                <li> Increased fire rate 1.2 -> 1.6</li>
                                <li> Increased magazine size Base mag increased: 5 -> 6 rounds</li>
                                <li> Common mag extender increased: 6 -> 8 rounds</li>
                                <li> Rare mag extender increased: 8 -> 10 rounds</li>
                                <li> Epic mag extender increased: 10 -> 12 rounds</li>
                                <br>
                                <h4>Havoc</h4>
                                <br>
                                <li> Increased base magazine size: 25 -> 32 rounds</li>
                                Charge Beam:
                                <li> Reduced cost per shot: 5 -> 4</li>
                                <li> Increased close range damage: 55 -> 60</li>
                                <li> Increased damage at range: 45 -> 50</li>
                                <li> Close range damage falloff increased: 35m -> 75m</li>
                                <li> Ranged damage falloff increased: 75m -> 125m</li>
                                <br>
                                <h4>Wingman</h4>
                                <br>
                                <li> Reduced magazine size:</li>
                                <li> Base mag reduced: 6 -> 4 rounds</li>
                                <li> Common mag extender reduced: 8 -> 6 rounds</li>
                                <li> Rare mag extender reduced: 9 -> 8 rounds</li>
                                <li> Epic mag extender reduced: 12 -> 10 rounds</li>
                                <br>
                                <h4>Spitfire</h4>
                                <br>
                                <li> Reduced base damage: 20 -> 18</li>
                                <li> Magazine extender attachments reduced:</li>
                                <li> Common mag extender reduced: 45 -> 40 rounds</li>
                                <li> Rare mag extender reduced: 55 -> 45 rounds</li>
                                <li> Epic mag extender reduced: 60 -> 55 rounds</li>
                                <br>
                                <h4>Adjustments to Gold Weapon Attachments</h4>
                                <br>
                                <li> Gold Havoc now has Turbocharger, 1x-2x variable holo site</li>
                                <li> Gold R301 now has 1x-2x variable holo site</li>
                                <li> Gold Wingman now has digital threat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php 
        include("INCLUDE/footer.php");
        ?>
    </div>
</body>

</html>