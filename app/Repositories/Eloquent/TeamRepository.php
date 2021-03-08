<?php

namespace App\Repositories\Eloquent

use App\Models\Team;
use App\Repositories\Contracts\TeamRepositoryInterface;

class TeamRepository extends AbstractRepository implements TeamRepositoryInterface
{
	public function __construct(Team $model)
	{
		parent::__construct($model);
	}
}