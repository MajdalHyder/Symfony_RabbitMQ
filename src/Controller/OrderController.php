<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Service\OrderService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("order") 
 */

class OrderController
{
    private $orderServivce;

    public function __construct(OrderService $orderService)
    {
        $this->orderServivce = $orderService;
    }

    /**
     * @param Requesy $resquest
     * 
     * @Method({"POST"})
     * @Route("/create")
     * 
     * @return Response
     */
    public function createAction(Request $request): Response
    {
       $result = $this->orderServivce->create(json_decode($request->getContent(), true));

       return new Response($result);
    }
}