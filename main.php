<html>

<h1>Getting Reviews Form</h1>
<form action="movie.php" method="get">
    Select Movie:
    <select name="film">
        <?php

        $movieDirectories = glob("*",GLOB_ONLYDIR);

        foreach($movieDirectories as $filepath)
        {
            $info= $filepath."/info.txt";
            $movieName =file($info);
            $movie = $filepath;
            print "<option value='$movie'>$movieName[0]</option>";
        }
        ?>
    </select>
    <br>

    <input type="submit" value="submit">
</form>


</html>
