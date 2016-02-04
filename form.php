<?php
$page = $_SERVER["PHP_SELF"];
$form = <<<FORM

<form action="form.php" method="post">
   <h2>Please enter the quantity of the items you
d like to purchase.</h2>
    <label><input type="checkbox" name="item[Chicken and waffle]" value="10.99"><b>Chicken and a waffle: $10.99</b></label><br>
    <i>Southern Fried Chicken on top of a homemade Cornmeal Waffle with Maple Syrup</i><br>
    <br>
    <label><input type="checkbox" name="item[Croque Madame]" value="6.99" ><b>Croque Madame: $6.99</b></label><br>
    <i>Baked Ham sandwiched between Brioche, smothered in Bechamle sauce and Guyree.</i><br>
    <br>
    <label><input type="checkbox" name="item[BBQ Turkey Leg]" value="5.99" ><b>BBQ Turkey Leg: $5.99</b></label><br>
    <i>Huge Turkey Leg grilled and smothered in BBQ Sauce</i><br>
    <br>
    <label><input type="checkbox" name="item[Bacon Burger]" value="5.99"><b>Bacon Burger: $5.99</b></label><br>
    <i>Painted hills Beef With cheddar cheese and Applewood Smoked Bacon</i><br>
    <br>
    <input name="submit" type="submit">

</form>

FORM;

$items = [];
$total = 0;
$subTotal = 0;
foreach($_POST["item"] as $value){
   $subTotal += $value;
   $total = $subTotal * .1 + $subTotal;

}

if (isset($_POST['submit'])){
    echo $form;
    echo "<b>Your sub total is:  $</b>" . $subTotal;
    echo "<br>";
    echo "<b>Your total is:  $</b>" . $total;
}else {echo $form;}

function displayForm(){
    global $form;
    echo $form;
}