@if(Astrogoat\Mulberry\Settings\MulberrySettings::isEnabled())
    <script src="{{ settings(Astrogoat\Mulberry\Settings\MulberrySettings::class, 'adapter_url') }}"></script>
    <script src="{{ settings(Astrogoat\Mulberry\Settings\MulberrySettings::class, 'javascript_url') }}"></script>
@endif
