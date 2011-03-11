<?php

namespace Acme\ExpensesBundle;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Acme\ExpensesBundle\Twig\Extension\ExpensesExtension;

class ControllerListener
{
    protected $extension;

    public function __construct(ExpensesExtension $extension)
    {
        $this->extension = $extension;
    }

    public function getController(Event $event, $controller)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->get('request_type')) {
            $this->extension->setController($controller);
        }

        return $controller;
    }
}
