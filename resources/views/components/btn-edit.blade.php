@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' class='btn btn-{{ $size }} btn-warning'>
    <i class="fi-rr-edit"></i>
    {{ $slot }}
</a>
