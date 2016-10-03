<?php

class newRow
{
	protected $text1;
	protected $text2;
  
  public function setLine($text1, $text2)
  {
    $this->text1 = $text1;
    $this->text2 = $text2;
  }
	
  public function getLine()
	{	
		echo '<div style="top:20px; border: 1px solid green; position: relative; padding: 20px 20px; margin:20px">'.'<p style="color:red; font-size:14px; border: 1px solid black">'.$this->text1;
		echo  '<br>'.'<p style="color:blue; font-size:10px">'.$this->text2.'</div>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$f = new newRow;
$f->setLine('Sweet home Alabama', 'Hello, it\'s me ...');
echo $f->getLine();

$z = new newRow;
$z->setLine('Dahaka is here', 'Just add some more lines, will ya?');
echo $z->getLine();

$k = new newRow;
$k->setLine('Holier than thou', 'The day that never comes');
echo $k->getLine();
?>
</body>
</html>
