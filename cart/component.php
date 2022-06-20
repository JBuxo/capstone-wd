<?php

function component($productname, $productprice, $productimg){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$productimg\" alt=\"image\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-boy\">
                <h5 class=\"card-title\">$productname</h5>
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
                    <span class=\"price\">$$productprice</span>
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

