<?php
  // Describe current location
	function lookAround(){
    global $location, $wearing_glasses, $wearing_contacts, $moved_cupboard;

    if ($wearing_glasses xor $wearing_contacts) {
      if ($wearing_glasses) {
        echo "You are wearing glasses";
      } else {
        echo "You are wearing contacts";
      }
    } else {
    echo "It's really hard to make out any details...\n";
    } 

    switch ($location) {
      case "kitchen":
        echo "\nThis kitchen comes with all the tools and ingredients needed to cook mushroom soup--- except the mushrooms!\n\nFrom here, you see the door to the *bathroom* and the backdoor, which leads to the *woods*.\n\n";
        if ($moved_cupboard) {
          echo "The cupboard has been moved aside, and reveals a safe built into the wall.\n";
        } else {
          echo "Also, there's a conspicuously large cupboard against a peculiarly worn piece of the wall.\n";
        }
        break;
      case "bathroom":
        echo "\nNormal bathroom. There's a mirror here. You can get back out to the *kitchen*. You sense a magic presence in the toilet, but you decide to ignore it.\n";
        break;
      case "woods":
        echo "\nThese woods aren't actually that terrifying. Unless you're afraid of mushrooms. There are millions of them here!\nYou see the path leading back to your cabin's *kitchen*.\n";
        break;
    }
}
