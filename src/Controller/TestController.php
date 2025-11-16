<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route(path: '/test/{id<\d+>}', name: 'test')] //в атрибуте, именнованый аргумент +  с параметром(+ регулярка должны быть цифры), имя
    public function test($id)
    {
        //метод от базового контроллера
        return $this->json([
            'id' => $id
        ]);
    }

}
