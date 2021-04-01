@props([
    'url' => '#',
    'size' => 'sm',
    'type' => 'primary',
    'icon' => 'cil-pencil'
])

<a href='{{ $url }}' class='btn btn-{{ $size }} btn-{{ $type }}'>
    <i class='{{ $icon }}'></i>
    {{ $slot }}
</a>
