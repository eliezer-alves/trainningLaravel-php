<?php

namespace App\Services;

use App\Repositories\Contracts\TeamRepositoryInterface;

class TeamService
{
	protected $teamRepository;

	public function __construct(TeamRepositoryInterface $teamRepository)
	{
		$this->teamRepository = $teamRepository;
	}

	public function all()
	{
		return $this->teamRepository->all();
	}
}