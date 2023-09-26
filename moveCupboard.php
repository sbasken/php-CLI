<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $location, $moved_cupboard;

    $ready_to_work = FALSE;

    if (!$is_hungry && $wearing_contacts &&!$wearing_glasses) {
      $ready_to_work = TRUE;
      if ($location !== "kitchen") {
        echo "You don't see a cupboard here!\n";
      } elseif ($moved_cupboard) {
        echo "You've already moved the cupboard!\n";
      }
      echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
      $moved_cupboard = TRUE;
    } else {
      echo "You're not ready to work! You need to be properly fed, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
  }
