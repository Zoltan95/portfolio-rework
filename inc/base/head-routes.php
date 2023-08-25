<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}

    $au = "Zoltan Urban";
    $bck = "../";

    $rl = $_SERVER['REQUEST_URI'];
    $t = "";
    $d = "";
    $l = "";
    $a = "";
    switch ($rl) {

        case '/portfolio-rework/':
            $t = "Portfolio | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            break;

        case '/portfolio-rework/inc/pages/contact.php':
            $t = "Contat Me | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/scs.php':
            $t = "SCS | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/projects.php':
            $t = "Projects | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/about.php':
            $t = "About | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/code-ex.php':
            $t = "Coding Examples | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/examples/typescript.php':
            $t = "TypeScript | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/examples/javascriptarray.php':
            $t = "Arrays JS | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck.$bck;
            break;
        
        case '/portfolio-rework/inc/pages/examples/database-assessment.php':
            $t = "Database Assesment | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck.$bck;
            break;
        
    }
?>