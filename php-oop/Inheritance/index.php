<?php



  class AppleDevice    // super class | perant class
  {
  // properties
    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16GB';
    public $color = 'Silver';
    public $screen = 'LCD';
    public $name;

// Methods
    public function changeSpac($ra, $in, $sp, $co)
    {
      $this->ram = $ra;
      $this->inch = $in;
      $this->space = $sp;
      $this->color = $co;
    }

    final public function sayHello($n)    //can't override final method anywhere
    {
      $this->name = $n;
      echo "Welcom to " . $n;
    }

  }

  class Sony extends AppleDevice    // sub class | child class
  {
  // properties

    public $camera = '25MB';

// Methods
  // public function sayHello($n)
  // {
  //   $this->name = $n;
  //   echo "Welcom " . $n;
  //   // echo "Welcom to " . $n . ' this phone has ' . $this->ram . ' Ram.';
  // }

  }


// iphone6plus Object
  $iphone6plus = new AppleDevice();
  $iphone6plus->changeSpac('2GB', '5 Inch', '32GB', 'Gold');
  $iphone6plus->sayHello('iPhone');
  echo '<pre>';
    var_dump($iphone6plus);
  echo '</pre>';

  // sony Object
    $sony = new Sony();
    $sony->changeSpac('2GB', '5 Inch', '32GB', 'Gold');
    $sony->sayHello('Sony');
    echo '<pre>';
      var_dump($sony);
    echo '</pre>';
