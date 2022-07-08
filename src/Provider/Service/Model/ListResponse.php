<?php

declare(strict_types=1);

namespace Yurunsoft\Nacos\Provider\Service\Model;

use Yurunsoft\Nacos\Provider\Model\BaseResponse;
use Yurunsoft\Nacos\Provider\Traits\TReturnJson;

class ListResponse extends BaseResponse
{
    use TReturnJson;

    protected int $count = 0;

    /**
     * @var string[]
     */
    protected array $doms = [];

    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return string[]
     */
    public function getDoms(): array
    {
        return $this->doms;
    }
}
