@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' class='btn btn-{{ $size }} btn-info'>
    <i class='cil-pencil'></i>
    {{ $slot }}
</a>
