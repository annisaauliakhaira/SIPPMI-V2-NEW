@props([
    'url' => '#',
    'icon' => 'cil-library-add'
])

<a href="{{ $url }}" class="card-header-action">
    <i class="{{ $icon }}"></i>
    {{ $slot }}
</a>
