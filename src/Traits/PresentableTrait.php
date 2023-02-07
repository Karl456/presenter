<?php
namespace Karl456\Presenter\Traits;

use Karl456\Presenter\Exceptions\PresenterException;

trait PresentableTrait
{
	protected mixed $presenterInstance = null;

    /**
     * @throws \Karl456\Presenter\Exceptions\PresenterException
     */
    public function present(): mixed
	{
		if (! $this->presenter or ! class_exists($this->presenter)) {
			throw new PresenterException('Please set the $presenter property to your presenter path.');
		}

		if (! $this->presenterInstance) {
			$this->presenterInstance = new $this->presenter($this);
		}

		return $this->presenterInstance;
	}
}
