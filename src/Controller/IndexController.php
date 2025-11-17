<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    //шаблонизатор twig
    #[Route('/')]
    public  function invoke()
    {
        return $this->render('index.html.twig', [
            'num' => 33,
            'obj' => new class
            {
                public $x = 'fff';
                public function GetFoo()
                {
                    return 'qqq';
                }
            },
            'arr' => [1,2,3,4]
        ]);
    }
}
