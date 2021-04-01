@props([
    'icon' => '',
    'url' => '#'
])

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ $url }}">
        <i class="{{ $icon }} c-sidebar-nav-icon"></i>
        {{ $slot }}
    </a>
</li>
