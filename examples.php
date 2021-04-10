<?php

$a = 10;
$b = 'a';

echo $$b;
echo '<br/><br/>';

$str = 'Hello, world';

echo '$str php'.'<br/>';
echo "$str php".'<br/><br/>';

$array = [1,2,3,4,5,6];

foreach ($array as $elem)
{
    echo "$elem <br/>";
}
echo '<br/>';

$hashArray = ["name"=>"Настя", "surname" => "Спиридонова", "group" => "ТІ-91"];

foreach ($hashArray as $key=>$value):
    echo "$key: $value<br/>";
endforeach;
echo '<br/>';

$splitedString = explode(',',$str);

for ($i = 0; $i < count($splitedString); $i++)
{
    echo $splitedString[$i].'<br/>';
}

echo '<br/>'.implode(',',$splitedString);

if ($b == 'a'):
    echo "<br/>$b<br/>";
endif;

if ($b != null)
{
    echo "<br/>$b<br/>";
}

if (5 == '5')
{
    echo 'true!';
}

if (5 !== '5')
{
    echo 'true!';
}
echo '<br/>';

class base
{
    private static $instance;

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

class derived extends base
{
    private $name;

    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function showName()
    {
        echo '<br/>';
        echo !is_null($this->name) ? $this->name : 'Не определено';
        echo '<br/>';
    }
}

$inst = new derived('Nastya');

$inst->showName();

$singletonInst1 = base::getInstance();
$singletonInst2 = base::getInstance();

if ($singletonInst1 === $singletonInst2)
{
    echo 'Экземпляры одинаковые';
}
