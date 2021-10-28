<?php

namespace Astrogoat\Mulberry\Settings;

use Helix\Lego\Settings\AppSettings;

class MulberrySettings extends AppSettings
{
    public string $adapter_url;
    public string $javascript_url;

    protected array $rules = [
        'adapter_url' => ['required', 'url'],
        'javascript_url' => ['required', 'url'],
    ];

    public function description(): string
    {
        return 'Don’t let the price tag win. The new way to pay, for everyday people.';
    }
}
