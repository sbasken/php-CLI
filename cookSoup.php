<?php
  
function cookSoup(){
  global $location, $has_mushrooms, $has_soup;
  if ($locatio === "kitchen" &&$has_murooms) {
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
  } else {
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
    $has_mushrooms = FALSE;
    $has_soup = TRUE;
}
