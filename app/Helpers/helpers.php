<?php

use App\Helpers\coreui\CoreUIFacades;

if (!function_exists('notify')) {
    function notify($type, $message, $title = null)
    {
        toastr($message, $type);
    }
}
