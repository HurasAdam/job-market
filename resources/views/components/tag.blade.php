@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

@endphp

<a href="#" class="{{ $classes }}">{{ $tag->name }}</a>
