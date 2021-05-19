@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' {{ $attributes->merge(['class' => 'btn btn-'.$size.' btn-success']) }}>
    <i class="fi-rr-upload"></i>
    {{ $slot }}
</a>