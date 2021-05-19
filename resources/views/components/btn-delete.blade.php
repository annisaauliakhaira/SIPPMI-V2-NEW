@props([
    'url' => '#',
    'message' => '',
    'icon' => 'cil-trash'
])

@if ($url=='#')
        <button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-sm btn-danger']) }}>
            <i class="{{ $icon }}"></i> {{ $slot  }}
        </button>
@else
    <a {{ $attributes->merge(['url' => $url, 'class' => 'btn btn-sm btn-danger']) }}>{{ $slot }}</a>
@endif

{{-- <form
    action="{{ $url }}"
    style="display: inline-block;"
    method="POST"
    onsubmit='return confirm("{{ $message }}");'
>
    @csrf
    <input type="hidden" name="_method" value="DELETE" />
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-sm btn-danger']) }}>
        <i class="{{ $icon }}"></i> {{ $slot  }}
    </button>
</form> --}}
