<?php

namespace Websecret\LaravelGoogleApi\Provider\Plus;

use Websecret\LaravelGoogleApi\AbstractProvider;

class People extends AbstractProvider
{

    protected $url = 'https://www.googleapis.com/plus/v1/people';

    /**
     * @param $userId
     * @return mixed
     */
    public function getUserIdRequest($userId)
    {
        return $this->getComputedRequest('GET', $this->buildQuery($this->url . '/' . $userId));
    }
}