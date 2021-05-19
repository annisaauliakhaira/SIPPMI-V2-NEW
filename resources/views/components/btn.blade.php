@props([
    'url' => '#',
    'size' => 'm',
    'type' => 'primary',

])

<a href='{{ $url }}' class='btn btn-{{ $size }} btn-{{ $type }}'>
    {{ $slot }}
</a>
