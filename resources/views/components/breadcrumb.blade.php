<ol class="breadcrumb border-0 m-0 px-0 px-md-3">
    @foreach($items as $label => $url)
        @if($url != '#')
            <li class="breadcrumb-item">
                <a href="{{ $url }}">
                    {{ $label }}
                </a>
            </li>
        @else
            <li class="breadcrumb-item active">
                {{ $label }}
            </li>
        @endif
    @endforeach
</ol>
