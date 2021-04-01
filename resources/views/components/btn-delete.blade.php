@props([
    'url' => '#',
    'message' => '',
    'icon' => 'cil-trash'
])

<form
    action="{{ $url }}"
    style="display: inline-block;"
    method="POST"
    onsubmit='return confirm("{{ $message }}");'
>
    @csrf
    <input type="hidden" name="_method" value="DELETE" />
    <button type="submit" class="btn btn-sm btn-danger">
        <i class="{{ $icon }}"></i> {{ $slot  }}
    </button>
</form>
