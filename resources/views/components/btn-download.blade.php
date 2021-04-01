@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' class='btn btn-{{ $size }} btn-info'>
    <i class='cil-cloud-download'></i>
    {{ $slot }}
</a>
