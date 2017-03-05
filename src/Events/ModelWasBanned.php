<?php

/*
 * This file is part of Laravel Ban.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Ban\Events;

use Cog\Ban\Contracts\Ban as BanContract;
use Cog\Ban\Contracts\CanBeBanned as CanBeBannedContract;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class ModelWasBanned.
 *
 * @package Cog\Ban\Events
 */
class ModelWasBanned implements ShouldQueue
{
    /**
     * @var \Cog\Ban\Contracts\CanBeBanned
     */
    private $model;

    /**
     * @var \Cog\Ban\Contracts\Ban
     */
    private $ban;

    /**
     * @param \Cog\Ban\Contracts\CanBeBanned $model
     * @param \Cog\Ban\Contracts\Ban $ban
     */
    public function __construct(CanBeBannedContract $model, BanContract $ban)
    {
        $this->model = $model;
        $this->ban = $ban;
    }
}