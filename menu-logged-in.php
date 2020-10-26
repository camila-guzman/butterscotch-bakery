<?php
include 'menu-array.php';
include 'cart.php' ?>

<div class="container">
    <div class="row">
        <h1 class="m-3 col-4">You're logged in!</h1>
        <div class="col-4"></div>
        <a class="col-2 log-out" href="log-out.php">Log Out</a>
    </div>
    <h3 class="ml-3">You can now start placing your order.</h3>

    <div class="cart ml-3 my-3">
        <div class="row">
            <div class="col-1">
                <svg viewBox="0 0 16 16" class="bi bi-cart3" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </div>
            <div class="ml-2 mt-1 mb-2 col-6">
                <h3>Your Cart</h3>
            </div>
        </div>
        <div class="ml-3">
            <?php
            $keys = array_keys($cart);
            for ($i = 0; $i < count($cart); $i++) {
                echo "1";
                foreach ($cart[$keys[$i]] as $key => $value) {
                    echo "&nbsp&nbsp&nbsp&nbsp" . $value;
                }
                echo "<br>";
            } ?>
        </div>
        <p class="mt-3">Total: $ 12.00</p>
        <button>Check Out</button>
    </div>

    <!--navigation for menu-->

    <div class=" menu-nav">
        <ul class=" nav">
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
            echo "<p class='card-text'>" . $sweet[$i][2] . "</p></div>";
        ?>
            <!--add and remove buttons-->
            <div class='container'>
                <div class='row'>
                    <div class='col-7'></div> <a class='col-2'><svg viewBox='0 0 16 16' class='bi bi-dash-square-fill' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z' />
                        </svg></a>
                    <a class='col-2 ml-2'><svg viewBox='0 0 16 16' class='bi bi-plus-square-fill' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z' />
                        </svg></a>
                </div>
            </div>
    </div> <?php
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
        echo "<p class='card-text'>" . $savory[$i][2] . "</p></div>";
    ?>
        <!--add and remove buttons-->
        <div class='container'>
            <div class='row'>
                <div class='col-7'></div> <a class='col-2'><svg viewBox='0 0 16 16' class='bi bi-dash-square-fill' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z' />
                    </svg></a>
                <a class='col-2 ml-2'><svg viewBox='0 0 16 16' class='bi bi-plus-square-fill' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z' />
                    </svg></a>
            </div>
        </div>
</div> <?php } ?>
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
        echo "<p class='card-text'>" . $drinks[$i][2] . "</p></div>";
    ?>

        <!--add and remove buttons-->
        <div class='container'>
            <div class='row'>
                <div class='col-7'></div> <a class='col-2'><svg viewBox='0 0 16 16' class='bi bi-dash-square-fill' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z' />
                    </svg></a>
                <a class='col-2 ml-2'><svg viewBox='0 0 16 16' class='bi bi-plus-square-fill' xmlns='http://www.w3.org/2000/svg'>
                        <path fill-rule='evenodd' d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z' />
                    </svg></a>
            </div>
        </div>
</div><?php } ?>
</div>
</div>