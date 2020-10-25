<?php include 'menu-array.php'; ?>

<!DOCTYPE html>
<html>
<!--include head section and navbar-->
<?php include('templates/header.php'); ?>


<!--navigation for menu-->
<div class="menu-nav">
    <h1 class=" m-3">Menu</h1>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#sweet">Sweet</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#savory">Savory</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#drinks">Drinks</a>
        </li>
    </ul>
</div>

<!--menu section-->
<div class="container">

    <!--sweet section-->
    <h3 id="sweet" class="section-title">Sweet</h3>
    <div class="row">
        <!--for loop of sweets array, create a card div with info-->
        <?php
        for ($i = 0; $i < count($sweet); $i++) {
            echo "<div class='card mx-4 col-md-4 col-lg-3'>";
            echo "<img src='" . $sweet[$i][0] . "'class='card-img-top' alt=''>";
            echo "<div class='card-body'> <h5 class='card-title'>" . $sweet[$i][1] . "</h5>";
            echo "<p class='card-text'>" . $sweet[$i][2] . "</p></div></div>";
        }
        ?>
    </div>

    <!--savory section-->
    <h3 id="savory" class="section-title">Savory</h3>
    <div class="row">
        <!--for loop of savory array, create a card div with info-->
        <?php
        for ($i = 0; $i < count($savory); $i++) {
            echo "<div class='card mx-4 col-md-4 col-lg-3'>";
            echo "<img src='" . $savory[$i][0] . "'class='card-img-top' alt=''>";
            echo "<div class='card-body'> <h5 class='card-title'>" . $savory[$i][1] . "</h5>";
            echo "<p class='card-text'>" . $savory[$i][2] . "</p></div></div>";
        }
        ?>
    </div>

    <!--drinks section-->
    <h3 id="drinks" class="section-title">Drinks</h3>
    <div class="row">
        <!--for loop of savory array, create a card div with info-->
        <?php
        for ($i = 0; $i < count($drinks); $i++) {
            echo "<div class='card mx-4 col-md-4 col-lg-3'>";
            echo "<img src='" . $drinks[$i][0] . "'class='card-img-top' alt=''>";
            echo "<div class='card-body'> <h5 class='card-title'>" . $drinks[$i][1] . "</h5>";
            echo "<p class='card-text'>" . $drinks[$i][2] . "</p></div></div>";
        }
        ?>
    </div>

</div>

<!--include logo and hours section-->
<?php include('templates/footer.php'); ?>

</html>