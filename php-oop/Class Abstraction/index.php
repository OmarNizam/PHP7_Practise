<?php

/*
  Class apstraction
  - Cannot be extantiated [ Cannot create object from ]
  - Made for other classes to inherit Prop & methods from
  - Can has methods and properties
  - Can have abstract and nonabstract // note: abstract mehtod without body
*/

  abstract class MakeDevice
  {

    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);

  }

  class Iphone extends MakeDevice
  {
  // properties
  public $owner;
  // Methods
    public function testPerformance()
    {
      echo "Performance is good 100%";
    }

    public function verifyOwner()
    {
      echo "Owner is verified";
    }

    public function sayWelcome($n)
    {
      $this->owner = $n;
      echo "Welcome " . $n;
    }

  }

  class Ipad extends MakeDevice
  {
    // properties
    public $owner;
    // Methods
    public function testPerformance()
    {
      echo "Performance is good 100%";
    }

    public function verifyOwner()
    {
      echo "Owner is verified";
    }

    public function sayWelcome($s)
    {
      $this->owner = $s;
      echo "Welcome " . $s;
    }
  }

//  Objects
  $iphone = new Iphone();
  $iphone->sayWelcome('Omar');
  echo '<pre>';var_dump($iphone);echo '</pre>';

  $ipad = new Ipad();
  $ipad->sayWelcome('Shahem');
  echo '<pre>';var_dump($ipad);echo '</pre>';
//$abs = new MakeDevice();  // will give error
