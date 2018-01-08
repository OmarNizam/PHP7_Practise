<?php

  /**
   * Clss and Object
   *
   * Apple
   * - Class = Apple Blueprint Design
   * - Object = iphones That China Made
   * - Application = Apple store
   *
   */

  class AppleDevice
  {
  // properties
    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16GB';
    public $color = 'Silver';
    public $ownerName;
  // Methods

    public function doubleHomePressed()
    {
      echo "You have pressed the home button twice <br />";
    }

    public function getSpecification()
    {
      echo "This iPhone Ram Is: " . $this->ram . '<br />';
      echo "This iPhone Screen size Is: " . $this->inch . '<br />';
    }

    public function setOwnerName()
    {
      if (strlen($this->ownerName) < 3) {
        echo "Owner Name Canot Be Less Than 3 Chars !!!";
      } else {
        echo "Yor name has been set";
      }
    }
  }


// iphone6plus Object
  $iphone6plus = new AppleDevice();
  $iphone6plus->ram = '2GB';
  $iphone6plus->inch = '5 Inch';
  $iphone6plus->space = '32GB';
  $iphone6plus->color = 'Gold';
  $iphone6plus->ownerName = 'Omar';
  $iphone6plus->doubleHomePressed();   // calling the class method on the object
  $iphone6plus->getSpecification();
  $iphone6plus->setOwnerName();
  echo '<pre>';
    var_dump($iphone6plus);
  echo '</pre>';


  $iphone7plus = new AppleDevice();
  $iphone7plus->ram = '4GB';
  $iphone7plus->inch = '5.5 Inch';
  $iphone7plus->space = '265GB';
  $iphone7plus->color = 'Silver';
  echo '<pre>';
    var_dump($iphone7plus);
  echo '</pre>';

  $iphone = new AppleDevice();

  echo "<pre>";
  var_dump($iphone);
  echo '<pre>';
