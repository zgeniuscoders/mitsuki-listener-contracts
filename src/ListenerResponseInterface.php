<?php

namespace Mitsuki\Contracts;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

/**
 * Interface ListenerResponseInterface
 *
 * Defines the contract for listeners intended to intercept and modify
 * the HTTP response before it is sent to the client.
 *
 * @package Mitsuki\Contracts
 * @author  Zgenius Matondo <zgeniuscoders@gmail.com>
 */
interface ListenerResponseInterface
{
    /**
     * Handles the Kernel response event.
     *
     * This method provides access to the ResponseEvent, allowing for
     * headers manipulation, content modification, or cookie injection
     * during the final stages of the request lifecycle.
     *
     * @param ResponseEvent $event The event object containing the Request and Response.
     * @return void
     */
    public function onKernelResponse(ResponseEvent $event): void;
}