<?
class GroupProvider
{
	protected Workgroup $workgroup;
	
	protected int $groupId;

	public function __construct(int $groupId)
	{
		$this->groupId = $groupId;
	}
	
	public function fillGroup(): void
	{
		$this->workgroup = Workgroup::getById($this->groupId);
	}
	
	public function getGroup(): Workgroup
	{
		return $this->workgroup;
	}
}

$provider = new GroupProvider(1);
$provider->fillGroup();

$group = $provider->getGroup();