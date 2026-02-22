<?php

namespace Mitsuki\Contracts;

use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Interface ListenerExceptionInterface
 *
 * Defines the contract for classes responsible for intercepting and handling
 * exceptions within the Kernel lifecycle.
 *
 * @package Mitsuki\Contracts
 * @author  Zgenius Matondo <zgeniuscoders@gmail.com>
 */
interface ListenerExceptionInterface
{
    /**
     * Handles the event triggered when a Kernel exception occurs.
     *
     * This method allows for custom logic implementation (such as logging,
     * custom error responses, or monitoring) using the Symfony Event Dispatcher.
     *
     * @param EventDispatcher $dispatcher The Symfony event dispatcher used to
     * dispatch or propagate further events.
     * @return void
     */
    public function onKernelException(EventDispatcher $dispatcher): void;
}