<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Mcp\Types\Message;

class Request implements MessageInterface
{
    public function __construct(public mixed $id, public string $jsonrpc, public string $method, public ?array $params = null)
    {
    }
}
