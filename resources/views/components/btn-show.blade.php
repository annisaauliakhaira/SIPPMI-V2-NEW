@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' {{ $attributes->merge(['class' => 'btn btn-'.$size.' btn-info']) }}>
    <i class='cil-zoom'></i>
    {{ $slot }}
</a>
