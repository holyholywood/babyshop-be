<?php


function APIResponse($statusCode, $msg, $payload)
{

    return [
        "statusCode" => $statusCode,
        "message" => $msg,
        "payload" => $payload
    ];
}
