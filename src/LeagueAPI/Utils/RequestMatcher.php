<?php

namespace RiotAPI\LeagueAPI\Utils;

use BenTools\Psr7\RequestMatcherInterface;
use Psr\Http\Message\RequestInterface;

class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @inheritDoc
     */
    public function matchRequest(RequestInterface $request)
    {
        return true;
    }
}
