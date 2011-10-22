<?php

namespace Soul\Handler;

class Beat extends Simple implements \Soul\Handler
{

    /**
     * @internal
     * @param array $res
     * @return void
     */
    function _handle_response(array $res)
    {
        array_unshift($res[1], "HTTP/1.1 {$res[0]} {$this->_status_code[$res[0]]}");
        foreach ($res[1] as $header) {
            print("$header\r\n");
        }
        print "\r\n";

        $body = $res[2];
        if (is_string($body)) {
            print $body;
        } elseif (is_array($body)) {
            foreach ($body as $string) {
                print $string;
            }
        }
    }
}
