@props([
    'url' => '#',
    'size' => 'sm',
])

<a href='{{ $url }}' {{ $attributes->merge(['class' => 'btn btn-'.$size.' btn-info btn-sm']) }}>
    <i class="fi-rr-eye"></i>
    {{ $slot }}
</a>
