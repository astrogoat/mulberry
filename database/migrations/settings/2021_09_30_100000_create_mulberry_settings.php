<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateMulberrySettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('mulberry.enabled', false);
        $this->migrator->add('mulberry.adapter_url', '');
        $this->migrator->add('mulberry.javascript_url', '');
    }

    public function down()
    {
        $this->migrator->delete('mulberry.enabled');
        $this->migrator->delete('mulberry.adapter_url');
        $this->migrator->delete('mulberry.javascript_url');
    }
}
