//php
<?php
session_start();

if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}
?>


//doctype

<!DOCTYPE html>

<html>

//head

<head>
    <meta charset="utf-8">

    <title>Main</title>


    //stylesheet
    <link rel="stylesheet" href="../css/Main.css">


    //javascript
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


//body

<body>

    //menu
    <button id="openModal">Menu</button>

    <section id="modalArea" class="modalArea">
        <div id="modalBg" class="modalBg"></div>
        <div class="modalWrapper">
            <div class="modalContents">

                <p>ようこそ<u>
                        <?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>

                <fieldset>
                    <legend>Logout</legend>
                    <a href="Logout.php"><input type="submit" id="logout" name="logout" value="Logout"></a>
                </fieldset>

                <br>

                <fieldset>
                    <legend>Unsubscribe</legend>
                    <input type="submit" id="unsubscribe" name="unsubscribe" value="Unsubscribe">
                </fieldset>

                <br>

                <fieldset>
                    <legend>ChangePassword</legend>
                    <input type="submit" id="change password" name="changepassword" value="ChangePassword">
                </fieldset>


            </div>
            <div id="closeModal" class="closeModal">
                ×
            </div>
        </div>
    </section>

    //canvas
    <canvas id="starfield"></canvas>

    //main
    <section id="wrapper">
        <div class="brand clearfix">
            <svg x="0" y="0" viewBox="0 0 1440px 164px">

                <g class="word word-digital">
                    <g class="letter h">
                        //hの左
                        <g>
                            <rect x="21" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="21" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="21" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="21" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="21" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="21" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="21" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="21" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="21" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="21" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="35" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //hの真ん中
                        <g>
                            <rect x="49" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="63" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="49" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="63" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //hの右
                        <g>
                            <rect x="77" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="77" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="77" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="77" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="77" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="77" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="77" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="77" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="77" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="77" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="91" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>

                    <g class="letter a-1">
                        //a-1の左
                        <g>
                            <rect x="133" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="133" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="133" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="133" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="133" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="133" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="133" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="133" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="147" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-1の真ん中
                        <g>
                            <rect x="161" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="175" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="161" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="175" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="161" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="175" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="161" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="175" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-1の右
                        <g>
                            <rect x="189" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="189" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="189" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="189" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="189" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="189" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="189" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="189" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="203" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter s-1">
                        //s-1の左
                        <g>
                            <rect x="245" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="245" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="245" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="245" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="245" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="245" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="245" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="245" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="259" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //s-1の真ん中
                        <g>
                            <rect x="273" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="273" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="273" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="273" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="273" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="273" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="287" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //S-1の右
                        <g>
                            <rect x="301" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="301" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="301" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="301" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="301" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="301" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="301" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="301" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="315" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter s-2">
                        //s-2の左
                        <g>
                            <rect x="357" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="357" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="357" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="357" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="357" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="357" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="357" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="357" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="371" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //s-2の真ん中
                        <g>
                            <rect x="385" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="385" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="385" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="385" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="385" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="385" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="399" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //S-2の右
                        <g>
                            <rect x="413" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="413" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="413" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="413" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="413" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="413" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="413" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="413" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="427" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter y">
                        //yの左
                        <g>
                            <rect x="469" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="469" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="14" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="469" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="469" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="42" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="469" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="469" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="483" y="70" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        //yの真ん中
                        <g>
                            <rect x="497" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="497" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="70" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="497" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="497" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="98" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="497" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="497" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="511" y="126" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        //yの右
                        <g>
                            <rect x="525" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="525" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="14" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="525" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="525" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="42" fill="2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="525" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="525" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="539" y="70" fill="2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter a-2">
                        //a-2の左
                        <g>
                            <rect x="581" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="581" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="581" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="581" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="581" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="581" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="581" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="581" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="595" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-2の真ん中
                        <g>
                            <rect x="609" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="623" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="609" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="623" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="609" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="623" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="609" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="623" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-2の右
                        <g>
                            <rect x="637" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="637" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="637" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="637" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="637" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="637" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="637" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="637" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="651" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter d">
                        //dの左
                        <g>
                            <rect x="693" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="693" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="693" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="693" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="693" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="693" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="693" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="693" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="693" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="693" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="707" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //dの真ん中
                        <g>
                            <rect x="721" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="735" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="721" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="735" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="721" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="735" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="721" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="735" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //dの右
                        <g>
                            <rect x="749" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="749" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="749" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="749" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="749" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="749" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="763" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter a-3">
                        //a-3の左
                        <g>
                            <rect x="805" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="805" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="805" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="805" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="805" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="805" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="805" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="805" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="819" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-3の真ん中
                        <g>
                            <rect x="833" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="847" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="833" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="847" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="833" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="847" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="833" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="847" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //a-3の右
                        <g>
                            <rect x="861" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="861" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="861" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="861" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="861" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="861" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="861" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="861" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="875" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>
                    <g class="letter i">
                        //iの左
                        <g>
                            <rect x="917" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="931" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="917" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="931" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="917" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="931" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="917" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="931" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //iの真ん中
                        <g>
                            <rect x="945" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="945" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="945" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="28" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="945" y="42" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="42" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="945" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="56" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="945" y="70" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="70" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="945" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="84" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="945" y="98" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="98" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="945" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="945" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="959" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        //iの右
                        <g>
                            <rect x="973" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="987" y="0" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="973" y="14" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="987" y="14" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                        <g>
                            <rect x="973" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="987" y="112" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="973" y="126" fill="#2B282D" width="14" height="14"></rect>
                            <rect x="987" y="126" fill="#2B282D" width="14" height="14"></rect>
                        </g>
                    </g>

                </g>
            </svg>


            <div class="hover-blocks">
                <span class="hover-block h" data-color="#E60012" data-letter="h"></span>
                <span class="hover-block a-1" data-color="#E60012" data-letter="a-1"></span>
                <span class="hover-block s-1" data-color="#F39800" data-letter="s-1"></span>
                <span class="hover-block s-2" data-color="#FFF100" data-letter="s-2"></span>
                <span class="hover-block y" data-color="#009944" data-letter="y"></span>
                <span class="hover-block a-2" data-color="#0068B7" data-letter="a-2"></span>
                <span class="hover-block d" data-color="#12D088" data-letter="d"></span>
                <span class="hover-block a-3" data-color="#920783" data-letter="a-3"></span>
                <span class="hover-block i" data-color="#920783" data-letter="i"></span>
            </div>

        </div>

    </section>

    <script>
        $(function() {
            $('#openModal').click(function() {
                $('#modalArea').fadeIn();
            });
            $('#closeModal , #modalBg').click(function() {
                $('#modalArea').fadeOut();
            });
        });

    </script>

    <script>
        $('.hover-block').hover(
            function() {
                explodeLetter($(this).parents('section').attr('id'), $(this).data('letter'), $(this).data('color'));
            },
            function() {
                implodeLetter($(this).parents('section').attr('id'), $(this).data('letter'), $(this).data('color'));
            }
        );
        introStuff();

        function explodeLetter(parentID, letter, fillColor) {
            $('#' + parentID + ' .word-digital .letter.' + letter).find('rect').each(function() {
                $(this).css({
                    'fill': fillColor,
                    '-webkit-transform': 'translate3d(' + randomIntFromInterval(-200, 200) + 'px, ' + randomIntFromInterval(-200, 200) + 'px, 0)',
                    '-moz-transform': 'translate3d(' + randomIntFromInterval(-200, 200) + 'px, ' + randomIntFromInterval(-200, 200) + 'px, 0)',
                    '-ms-transform': 'translate3d(' + randomIntFromInterval(-200, 200) + 'px, ' + randomIntFromInterval(-200, 200) + 'px, 0)',
                    '-o-transform': 'translate3d(' + randomIntFromInterval(-200, 200) + 'px, ' + randomIntFromInterval(-200, 200) + 'px, 0)',
                    'transform': 'translate3d(' + randomIntFromInterval(-200, 200) + 'px, ' + randomIntFromInterval(-200, 200) + 'px, 0)'
                });
            });
        }

        function implodeLetter(parentID, letter) {
            $('#' + parentID + ' .word-digital .letter.' + letter).find('rect').css({
                'fill': '#fff',
                '-webkit-transform': 'translate3d(0, 0, 0)',
                '-moz-transform': 'translate3d(0, 0, 0)',
                '-ms-transform': 'translate3d(0, 0, 0)',
                '-o-transform': 'translate3d(0, 0, 0)',
                'transform': 'translate3d(0, 0, 0)'
            });
        }

        function randomIntFromInterval(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        function introStuff() {
            $('body').addClass('show-background');
            setTimeout(function() {
                $('body').addClass('show-stars');

                $('.hover-block.h').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.h').trigger("mouseout");
                }, 700);


                $('.hover-block.a-1').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.a-1').trigger("mouseout");
                }, 700);

                $('.hover-block.s-1').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.s-1').trigger("mouseout");
                }, 700);


                $('.hover-block.s-2').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.s-2').trigger("mouseout");
                }, 700);

                $('.hover-block.y').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.y').trigger("mouseout");
                }, 700);

                $('.hover-block.a-2').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.a-2').trigger("mouseout");
                }, 700);

                $('.hover-block.d').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.d').trigger("mouseout");
                }, 700);

                $('.hover-block.a-3').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.a-3').trigger("mouseout");
                }, 700);

                $('.hover-block.i').trigger("mouseover");
                setTimeout(function() {
                    $('.hover-block.i').trigger("mouseout");
                }, 700);

            }, 500);
        }

    </script>

    <script>
        function $i(t) {
            return document.getElementById(t)
        }

        function $r(t, r) {
            document.getElementById(t).removeChild(document.getElementById(r))
        }

        function $t(t) {
            return document.getElementsByTagName(t)
        }

        function $c(t) {
            return String.fromCharCode(t)
        }

        function $h(t) {
            return ("0" + Math.max(0, Math.min(255, Math.round(t))).toString(16)).slice(-2)
        }

        function _i(t, r) {
            $t("div")[t].innerHTML += r
        }

        function _h(t) {
            return hires ? Math.round(t / 2) : t
        }

        function get_screen_size() {
            var t = document.documentElement.clientWidth,
                r = document.documentElement.clientHeight;
            return Array(t, r)
        }

        function init() {
            for (var t = 0; n > t; t++) star[t] = new Array(5), star[t][0] = Math.random() * w * 2 - 2 * x, star[t][1] = Math.random() * h * 2 - 2 * y, star[t][2] = Math.round(Math.random() * z), star[t][3] = 0, star[t][4] = 0;
            var r = $i("starfield");
            r.style.position = "absolute", r.width = w, r.height = h, context = r.getContext("2d"), context.fillStyle = "rgb(0,0,0)", context.strokeStyle = "rgb(255,255,255)"
        }

        function anim() {
            mouse_x = cursor_x - x, mouse_y = cursor_y - y, context.fillRect(0, 0, w, h);
            for (var t = 0; n > t; t++) test = !0, star_x_save = star[t][3], star_y_save = star[t][4], star[t][0] += mouse_x >> 4, star[t][0] > x << 1 && (star[t][0] -= w << 1, test = !1), star[t][0] < -x << 1 && (star[t][0] += w << 1, test = !1), star[t][1] += mouse_y >> 4, star[t][1] > y << 1 && (star[t][1] -= h << 1, test = !1), star[t][1] < -y << 1 && (star[t][1] += h << 1, test = !1), star[t][2] -= star_speed, star[t][2] > z && (star[t][2] -= z, test = !1), star[t][2] < 0 && (star[t][2] += z, test = !1), star[t][3] = x + star[t][0] / star[t][2] * star_ratio, star[t][4] = y + star[t][1] / star[t][2] * star_ratio, star_x_save > 0 && w > star_x_save && star_y_save > 0 && h > star_y_save && test && (context.lineWidth = 2 * (1 - star_color_ratio * star[t][2]), context.beginPath(), context.moveTo(star_x_save, star_y_save), context.lineTo(star[t][3], star[t][4]), context.stroke(), context.closePath());
            timeout = setTimeout("anim()", fps)
        }

        function start() {
            resize(), anim()
        }

        function resize() {
            w = parseInt(-1 != url.indexOf("w=") ? url.substring(url.indexOf("w=") + 2, -1 != url.substring(url.indexOf("w=") + 2, url.length).indexOf("&") ? url.indexOf("w=") + 2 + url.substring(url.indexOf("w=") + 2, url.length).indexOf("&") : url.length) : get_screen_size()[0]), h = parseInt(-1 != url.indexOf("h=") ? url.substring(url.indexOf("h=") + 2, -1 != url.substring(url.indexOf("h=") + 2, url.length).indexOf("&") ? url.indexOf("h=") + 2 + url.substring(url.indexOf("h=") + 2, url.length).indexOf("&") : url.length) : get_screen_size()[1]), x = Math.round(w / 2), y = Math.round(h / 2), z = (w + h) / 2, star_color_ratio = 1 / z, cursor_x = x, cursor_y = y, init()
        }
        var url = document.location.href,
            flag = !0,
            test = !0,
            n = parseInt(-1 != url.indexOf("n=") ? url.substring(url.indexOf("n=") + 2, -1 != url.substring(url.indexOf("n=") + 2, url.length).indexOf("&") ? url.indexOf("n=") + 2 + url.substring(url.indexOf("n=") + 2, url.length).indexOf("&") : url.length) : 812),
            w = 0,
            h = 0,
            x = 0,
            y = 0,
            z = 0,
            star_color_ratio = 0,
            star_x_save, star_y_save, star_ratio = 115,
            star_speed = 5,
            star_speed_save = 0,
            star = new Array(n),
            color, opacity = .1,
            cursor_x = 0,
            cursor_y = 0,
            mouse_x = 0,
            mouse_y = 0,
            canvas_x = 0,
            canvas_y = 0,
            canvas_w = 0,
            canvas_h = 0,
            context, key, ctrl, timeout, fps = 0;
        start();

    </script>

</body>

</html>
