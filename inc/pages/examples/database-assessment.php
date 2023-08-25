<?php 
include '../../base/head.php';
    include '../../modules/navbar.php';
?>
    <main class="contactform-img">
        <div class="examples container">
            <h1>Database Assessment</h1>

            <div class="examples__box1">
                <p>
                    I had to select one of the following databases <a href="https://www.w3resource.com/sql-exercises/movie-database-exercise/subqueries-exercises-on-movie-database.php">Movie Database</a>, <a href="https://www.w3resource.com/sql-exercises/soccer-database-exercise/subqueries-exercises-on-soccer-database.php">Soccer Database</a>, <a href="https://www.w3resource.com/sql-exercises/employee-database-exercise/subqueries-exercises-on-employee-database.php">Employee Database</a>.
                    Following that I had to create a query that includes a sub query with formatted outputs that are sorted by a value.
                </p>

                <p>
                    <span>Objective</span>: I got a task from my Boss, we currently manage a huge movie database for a Client and he asked me: Using the "Movies Database" create a list of Directors betweeen the dates of 1990 and 2000 whos rating is higher than 7.0. We will be sending a customised award for each of these people. Please include in the list the movie they worked on the date it has been released and the genre of it.
                </p>
                <div class="examples__code">
                    <script src="https://gist.github.com/Zoltan95/584f76af8974a80bcf92d31fa0d54b67.js"></script>
                </div>
            </div>

            <div class="examples__box1">
                <p>
                    <span>Explanation of the Querry</span>: This query will first join on to the movie_genres table where "movie.mov_id" is assigned to "movie_genres.mov_id" to find out what is the actual "genre_id". After that we join on to the genres table to find out what genre_id means which genre. When we have the genre, I join onto the "movie_direction" table where I can get the id for each director that is assigned to the movie they worked on. Now that all the information is in one table, I have created a clause that checks which movie has a "rev_stars" higher than 7 and which movie has been released between 1990 and 2000. Now that all information is on it's place, I have formated the column names so that they are easily readable, also concatinated the first and last name of the directors into one column.
                </p>

                <table>
                    <tr>
                        <th>Director</th>
                        <th>Movie Title</th>
                        <th>Release Date</th>
                        <th>Genre</th>
                    </tr>
                    <tr>
                        <td>Bryan Singer</td>
                        <td>The Usual Suspects</td>
                        <td>1995</td>
                        <td>Crime</td>
                    </tr>
                    <tr>
                        <td>Hayao Miyazaki</td>
                        <td>Princess Mononoke</td>
                        <td>1995</td>
                        <td>Animation</td>
                    </tr>
                </table>

                <p class="examples__lang">Project completed using: </p>
            </div>

            <div>
                <a href="../code-ex.php">Back</a>
            </div>
        </div>
    </main>
<?php
include '../../base/foot.php';
?>