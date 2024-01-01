<?php

namespace Heptastore\Storefront\Controller;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class TestController extends StorefrontController{
    private EntityRepository $entityRepository;

    public function __construct(EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }
    #[Route(path: '/json_stuff', name: 'frontend.example.example', methods: ['GET'])]
    public function index(Request $request,SalesChannelContext $context):JsonResponse{
        return new JsonResponse(array('First name'=>'Avinash','Second name'=>'Kankari'));
    }
    #[Route(path: '/example', name: 'front.example.example', methods: ['GET'])]
    public function print(Request $request,SalesChannelContext $context):Response{
        $product = ($this->entityRepository->search(new Criteria(), $context->getContext()))->count();
        return $this->renderStorefront('@Heptastore/storefront/home.html.twig',[
            'name'=> $product
        ]);
    }
}