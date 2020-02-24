<?php

namespace Project\Controller;

use Twig\Environment;
use Project\Model;



class BackController
{

    protected $twig = null;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

}