<?php 
include '../base/head.php';
    include '../modules/navbar.php';
?>
    <main class="contactform-img">
        <div class="projects-container container">
            <h1>Projects</h1>
            <div class="projects-container__holder">
                <div class="projects-card">
                    <div class="projects-card__img">
                        <a class="projects-card__codesample-link" href="https://github.com/Zoltan95/LaravelAssessment" target=”_blank”>Code Sample</a>
                        <a class="projects-card__img-link" href="https://laravel-assessment.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”>
                            <img src="../../img/projects/laravel.png" alt="Picture of My Portfolio Website">
                        </a>
                    </div>
                    <div class="projects-card__text">
                        <a class="link" href="https://laravel-assessment.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”><h3>Laravel Assessment</h3></a>
                        <p>HTML, Bootstrap, JavaScript, PHP (Laravel)</p>
                        <p>Create a website using Laravel where information only can be viewed for a logged in user.
                            The website must contain companies and their employees, an admin should be able to add, edit, remove any companies or employees.
                        </p>
                        <br>
                        <br>
                        <div class="projects-card__text-date">
                            <p>02/10/2023</p>
                        </div>
                    </div>
                </div>
                <div class="projects-card">
                    <div class="projects-card__img">
                        <a class="projects-card__codesample-link" href="https://github.com/Zoltan95/js-array" target=”_blank”>Code Sample</a>
                        <a class="projects-card__img-link" href="https://js-array.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”>
                            <img src="../../img/projects/js-array-page.png" alt="JavaScript Array Project">
                        </a>
                    </div>
                    <div class="projects-card__text">
                        <a class="link" href="https://js-array.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”><h3>JavaScript Array Assessment</h3></a>
                        <p>HTML, CSS (SASS), JavaScript</p>
                        <p>A JavaScript project (using jQuery and/or other frameworks) which loads an image from https://picsum.photos/ and displays it on a web page.</p>
                        <p>It has an interface that is to display all images assigned to each email address, the email address only displays once. On picture addition new picture can be generated using a button.</p>
                        <br>
                        <br>
                        <div class="projects-card__text-date">
                            <p>17/07/2023</p>
                        </div>
                    </div>
                </div>
                <div class="projects-card">
                    <div class="projects-card__img">
                        <a class="projects-card__codesample-link" href="https://github.com/Zoltan95/netmatters" target=”_blank”>Code Sample</a>
                        <a class="projects-card__img-link" href="https://netmatters.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”>
                            <img src="../../img/projects/netmatters-reflection-page.png" alt="Picture of Netmatters Website Reflection Project">
                        </a>
                    </div>
                    <div class="projects-card__text">
                        <a class="link" href="https://netmatters.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”><h3>Netmatters Website Reflection</h3></a>
                        <p>HTML, CSS (SASS), JavaScript</p>
                        <p>Develop the following website page and rebuild it using HTML and SASS.</p>
                        <p>The site should be a mirror of the Netmatters homepage.</p>
                        <a href="https://www.netmatters.co.uk/">https://www.netmatters.co.uk</a>
                        <br>
                        <br>
                        <div class="projects-card__text-date">
                            <p>05/06/2023</p>
                        </div>
                    </div>
                </div>
                <?php
                /*
                foreach (get_projects_list() as $item) {
                echo "<div class='projects-card'>";
                        echo "<div class='projects-card__img'>";
                            echo "<a class='projects-card__codesample-link' href='https://github.com/Zoltan95/netmatters' target='_blank'>Code Sample</a>";
                            echo "<a class='projects-card__img-link' href='https://netmatters.zoltan-urban.netmatters-scs.co.uk/' target='_blank'>";
                                echo "<img src='../../img/projects/netmatters-reflection-page.png' alt='Picture of Netmatters Website Reflection Project'>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div class='projects-card__text'>";
                        echo "<h3>Netmatters Website Reflection</h3>";
                            echo "<p>HTML, CSS (SASS), JS</p>";
                            echo "<p>Develop the following website page and rebuild it using HTML and SASS.</p>";
                            echo "<p>The site should be a mirror of the Netmatters homepage.</p>";
                            echo "<a href='https://www.netmatters.co.uk/'>https://www.netmatters.co.uk</a>";
                            echo "<br>";
                            echo "<br>";
                            echo "<div class='projects-card__text-date'>";
                                echo "<p>05/06/2023</p>";
                                echo "</div>";
                        echo "</div>";
                echo "</div>";
                }
                */        
                ?>
            </div>
        </div>
    </main>
<?php
include '../base/foot.php';
?>