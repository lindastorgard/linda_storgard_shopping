<?php
//Loops through products and echoes to index-page
foreach($products as $product){
    echo "<div class='form-group col-md-6 appleForm'>";
    echo "<img src='images/apple.jpg' alt='apple'>";
    
    //and shows altered prices for Monday, Wednesday and Friday
    if(date("l") === "Monday"){
         $oldPrice = $product["price"]; //saves old product price
         $product["price"] = ($product["price"] / 2); //new product price
         echo '<label class="appleText" for=' . $product["label"] . '> ' . $product["name"] . ' ' . '
         <strike>' . $oldPrice . '</strike> ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
    }else if(date("l") === "Wednesday"){
         $product["price"] = ($product["price"] * 1.1);
         echo '<label class="appleText" for=' . $product["label"] . '> ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
    }else if(date("l") === "Friday" && ($product["price"] > 200)){
         $oldPrice = $product["price"];
         $product["price"] = ($product["price"] - 20);
         echo '<label class="appleText" for=' . $product["label"] . '> ' . $product["name"] . ' ' . '
         <strike>' . $oldPrice . '</strike> ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
    }else{
          echo '<label class="appleText" for=' . $product["label"] . '> ' . $product["name"] . ' ' . number_format($product["price"], 2) . ' kr/piece</label><br>';
    }     
    echo '<input class="amountInputField" id=' . $product["label"] . ' name="amount[]" type="number" min="0">';
    echo "</div>";
}?>