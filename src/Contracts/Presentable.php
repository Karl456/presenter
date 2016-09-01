<?php
namespace Karl456\Presenter\Contracts;

interface Presentable
{
	/**
	 * Prepare a new or cached presenter instance
	 *
	 * @return mixed
	 */
	public function present();
}