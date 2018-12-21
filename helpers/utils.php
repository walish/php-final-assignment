<?php
    function sanitizeDescription($str) {
        $sanitized = preg_split("(\.|\.\.\.)", $str)[0];
        return $sanitized;
    }

    function sanitizeDateTime($str) {
        $pattern = '/\s*/m';
        $replace = ''; 
        $sanitized = str_replace("Tin tức", $replace, $str); // remove "Tin tức" part
        $sanitized = preg_replace($pattern, $replace, $sanitized); // remove all whitespace and new lines
        $sanitized = str_replace(",", ", ", $sanitized); // replace comma with ", " (comma following by a whitespace) for better view
        return $sanitized;
    }