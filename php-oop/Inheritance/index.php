<?php



  class AppleDevice
  {
  // properties
    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16GB';
    public $color = 'Silver';

// Methods
    public function changeSpac($ra, $in, $sp, $co)
    {
      $this->ram = $ra;
      $this->inch = $in;
      $this->space = $sp;
      $this->color = $co;
    }

  }

  class Sony extends AppleDevice
  {
  // properties

    public $camera = '25MB';

// Methods

  }


// iphone6plus Object
  $iphone6plus = new AppleDevice();
  $iphone6plus->changeSpac('2GB', '5 Inch', '32GB', 'Gold');
  echo '<pre>';
    var_dump($iphone6plus);
  echo '</pre>';

  // sony Object
    $sony = new Sony();
    $sony->changeSpac('2GB', '5 Inch', '32GB', 'Gold');
    echo '<pre>';
      var_dump($sony);
    echo '</pre>';
