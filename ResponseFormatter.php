<?php

namespace Traits;

trait ResponseFormatter
{
    public function responseFormatter($code, $message, $data = null)
    {
        return json_encode([
            "code" => $code,
            "mesaage" => $message,
            "data" => $data
        ]);
    }
}
?>