<?php

if (! function_exists('convertToAsideTitle')) {
    /**
     * Convert string to aside title.
     *
     * @param  string $title
     * @return string
     */
    function convertToAsideTitle(string $title)
    {
        $title = str_replace('-', ' ', $title);

        return ucwords($title);
    }
}
