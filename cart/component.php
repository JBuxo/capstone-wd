<?php

function component(){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"images-php5/logo++.jpg\" alt=\"image\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-boy\">
                <h5 class=\"card-title\">cookies</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                    Theme:xxxxxxx
                </p>
                <h5>
                    <small><s class=\"text-secondary\">$9.99</s></small>
                    <span class=\"price\">$5.99</span>
                </h5>

                <button type=\"submit\" class=\"btn btn-warning my-3\"name=\"add\">Add To Cart<i class=\"fas fa-shopping-cart\"></i></button>

            </div>
        </div>
    </form>
</div>
";
echo $element;
}
?>

