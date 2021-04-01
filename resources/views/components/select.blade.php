<select {{ $attributes->merge(['class' => "['form-control', 'select2', 'is-invalid' => $errors->has('$name')]"]) }} >
    {{ $slot }}
</select>