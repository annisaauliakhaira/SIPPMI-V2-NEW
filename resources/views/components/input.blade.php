@props(['disabled' => false, 'type'=>'text'])

@php
    $class = "form-control";
    if($type=='checkbox'){
        $class = "focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded";
    }
@endphp

<input type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $class]) !!}>