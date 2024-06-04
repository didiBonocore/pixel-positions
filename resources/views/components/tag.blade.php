@props(["size" => "base"])

@php
    $defaultClass = "bg-white/10 hover:bg-white/25 font-bold rounded-xl transition-colors duration-300";

    if ($size === "base") {
        $defaultClass = " px-5 py-1 text-sm";
    }

    if ($size === "small") {
        $defaultClass = " px-3 py-1 text-2xs";
    }
@endphp

<a href="#" class="{{ $defaultClass }}">{{ $slot }}</a>
