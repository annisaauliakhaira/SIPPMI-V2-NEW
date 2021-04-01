@props([
    'message' => '',
    'url' => '#',
    'id' => '',
    'icon' => 'cil-trash'
])

<form
    action="{{ $url }}"
    style="display:none"
    method="POST"
    id="delete-form-toolbar"
>
    @csrf
    <input type="hidden" name="_method" value="DELETE"/>
    <input type="hidden" name="id" value="{{ $id }}"/>
    <button type="submit" class="btn btn-sm btn-danger">
    </button>
</form>

<button
    class="btn c-subheader-nav-link text-danger"
    href="#"
    onclick="if(confirm('{{ $message }}')){ document.getElementById('delete-form-toolbar').submit(); }">
    <i class="{{ $icon }} mt-0"></i>
    &nbsp; {{ $slot }}
</button>
