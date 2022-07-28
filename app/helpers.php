<?php

function getCurrentUrlWithLocale(string $locale)
{
    $segments = request()->segments();
    $segments[0] = $locale;

    return implode('/', $segments);
}
