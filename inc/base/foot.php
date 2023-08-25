<?php
$rl = $_SERVER['REQUEST_URI'];
$scr = "";
switch ($rl) {  
    case '/portfolio-rework/':
        $scr = '<script type="text/javascript" src="/portfolio-rework/js/typeEffect.js"></script>';
        break;
    case '/portfolio-rework/inc/pages/contact.php':
        $scr = '<script type="text/javascript" src="/portfolio-rework/js/formvalidation.js"></script>';
        break;
}
?>
    <!--Scripts-->
    <script type="text/javascript" src="/portfolio-rework/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="/portfolio-rework/js/hamburger.js"></script>
    <?php echo $scr;?>
</body>
</html>