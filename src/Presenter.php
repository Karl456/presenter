<?php
namespace Karl456\Presenter;

abstract class Presenter
{
	protected mixed $entity;

	public function __construct(mixed $entity)
    {
		$this->entity = $entity;
	}

	public function __get(string $property)
	{
		if (method_exists($this, $property)) {
			return $this->{$property}();
		}

		return $this->entity->{$property};
	}
}
