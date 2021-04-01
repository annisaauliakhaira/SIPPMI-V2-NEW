@props([
    'image' => '#',
    'alt' => 'user@email.com',
    'desc' => '',
])

<div class="row mb-4">
    <div class="col-sm-auto text-center">
        <div>
            <img class="c-avatar-img c-avatar-lg"
                 src="{{ $image }}"
                 alt="{{ $alt }}"
            >
            @if(isset($type))
                <span class="c-avatar-status bg-{{ $type }}"></span>
            @endif
        </div>
    </div>
    <div class="col-sm-8 text-left align">
        {{ $slot }}
        <div class="small text-muted">{{ $desc }}</div>
    </div>
</div>



