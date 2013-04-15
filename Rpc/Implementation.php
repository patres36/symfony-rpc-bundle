<?php
/*
 * This file is part of the Symfony bundle Seven/Rpc.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Seven\RpcBundle\Rpc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class Implementation
{
    abstract public function createMethodCall(Request $request);

    //abstract public function createMethodResponse(Response $request);

    /**
     * @param  MethodResponse $response
     * @return Response
     */

    abstract public function createHttpResponse(MethodResponse $response);

    //abstract public function createHttpRequest(MethodCall $call);

}