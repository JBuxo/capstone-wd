<header id="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a href="cart.php" class="navbar-brand">
    <h3 class="px-5">
        <i class="fas fa-shopping-cart"></i> Shopping Cart
    </h3>
</a>
<button class="navbar-toggler"
type="button"
data-toggle="cpllapse"
data-target="#navbarNavAltMarkup"
aria-controls="navbarNavAltMarkup"
aria-expanded="false"
aria-label="Toggle navigation">

<span class="navbar-toggle-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="mr-auto"></div>
    <div class="navbar-nav">
        <a href="mycart.php" class="nav-item active nav-link">
            <h5 class="px-5 cart">
                <i class="fas fa-shopping-basket"></i> Basket :
                
                <?php
                if(isset($_SESSION['cart'])){
                    $count=count($_SESSION['cart']);
                    echo"<span id=\"basket_count\">$count</span>";
                }else{
                    echo"<span id=\"basket_count\">0</span>";
                }
                ?>
            </h5>
        </a>
    </div>
</div>

</nav>
</header>