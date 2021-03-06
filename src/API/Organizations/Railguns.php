<?php

declare(strict_types=1);

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\CloudFlare\API\Organizations;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Railguns extends AbstractAPI
{
    public function create(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/railguns", $parameters);
    }

    public function list(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/railguns", $parameters);
    }

    public function zones(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/railguns/{$identifier}/zones", $parameters);
    }

    public function togggle(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/railguns/{$identifier}", $parameters);
    }

    public function delete(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/railguns/{$identifier}");
    }
}
