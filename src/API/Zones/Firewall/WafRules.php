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

namespace Plients\CloudFlare\API\Zones\Firewall;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class WafRules extends AbstractAPI
{
    public function list(string $zoneIdentifier, string $packageIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules", $parameters);
    }

    public function details(string $zoneIdentifier, string $packageIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules/{$identifier}");
    }

    public function update(string $zoneIdentifier, string $packageIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules/{$identifier}", $parameters);
    }
}
