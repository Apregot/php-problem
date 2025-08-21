<?
class User
{
	protected int $id;
	protected string $email;
	protected ?string $lastName;
	protected ?string $name;

	public static function createInstance(
		int    $id,
		string $email,
		string $name,
		string $lastName
	): static
	{
		return new static($id, $email, $name, $lastName);
	}

	public function __construct(
		int    $id,
		string $email,
		string $name,
		string $lastName,
	)
	{
		$this->id = $id;
		$this->email = $email;
		$this->name = $name;
		$this->lastName = $lastName;
	}
}