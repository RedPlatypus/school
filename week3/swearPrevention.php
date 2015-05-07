<?php
    include_once("src/CensorWords.php");
//    include_once("src/fpdf.php");
//    include_once("../includes/bootstrap.html");
    $weHaveAWord = false;
    if(isset($_POST["swearWord"])){
        $weHaveAWord = true;
        $word = $_POST["swearWord"];
        $censor = new Snipe\BanBuilder\CensorWords();
        $censor->setReplaceChar("X");

        $string = $censor->censorString($word);
        $cleanWord = ($string['clean']);
    }

?>

<HTML>
    <head>
        <title>No Swearing</title>
    </head>
    <div class="main">
        <br>
        <form action="swearPrevention.php" method="post">
            Enter UserName: <input type="text" name="swearWord"><br>
            <input type="submit">
        </form>

        <?php
            if($weHaveAWord){
                $pdfString = "Your UserName Is: <strong> " . $cleanWord . "</strong>";
                echo($pdfString);
            }
        ?>
    </div>

</HTML>



