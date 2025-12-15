@props([
    'variant' => 'info',
])

@php
    $variantClasses = [
        'success' => 'alert alert-success',
        'error' => 'alert alert-error',
        'warning' => 'alert alert-warning',
        'info' => 'alert alert-info',
    ];

    $containerClass = $variantClasses[$variant] ?? $variantClasses['info'];
@endphp

<div class="{{ $containerClass }}">
    {{ $slot }}
</div>
