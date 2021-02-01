<?php
if (!function_exists('setting')) {
    function setting() {
        return \App\Models\Setting::orderBy('id', 'desc')->first();
    }
}
