<?php
require_once('../../config.php');
require_once('lib.php');
require_login();
global $USER, $DB,$OUTPUT;

$title = 'Player';
$pagetitle = $title;
$PAGE->set_title($title);
$PAGE->set_heading($title);
$PAGE->set_pagelayout('standard');
echo $OUTPUT->header();
$html='<!DOCTYPE html>
<html>

<head>
    <style>
       .body {
            background-image: url(background.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
            position: relative;
            margin: 0;
        }
        .body:after{
            content: "";
            position: absolute;
            height: 100vh;
            width: 100%;
            background-color: rgb(0 0 0 / 61%);
            top: 0;
            left: 0;
        }

        .flx {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        button {
            background: #00579e;
            border: none;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            margin: 10px 10px;
            position: relative;
            z-index: 999;
            font-size: 15px;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
        <div class="body">
    <audio id="myAudio" loop>
        <source src="test.wav" type="audio/ogg">
        <source src="test2.wav" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="flx">
        <button onclick="playAudio()" type="button">Play Audio</button>
        <button onclick="pauseAudio()" type="button">Pause Audio</button>
        </div>

</div>

        <script>
            var x = document.getElementById("myAudio");

            function playAudio() {
                x.play();
            }

            function pauseAudio() {
                x.pause();
            } 
        </script>

</body>

</html>';
echo $html;
echo $OUTPUT->footer();