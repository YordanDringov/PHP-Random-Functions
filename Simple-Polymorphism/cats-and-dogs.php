<?

interface sound
{
	public function makeSound(); 
}


class Dog implements sound
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function makeSound()
	{
		echo "Woof";
	}

}

class Cat implements sound
{
	protected $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function makeSound()
	{
		echo "Meaaaaaaow";
	}

}
