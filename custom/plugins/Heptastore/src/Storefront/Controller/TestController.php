<?php


namespace Heptastore\Storefront\Controller;


use Heptastore\Service\WriteData;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;

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

    #[Route(path: '/harley', name: 'frontend.example.example', methods: ['GET'])]
    public function index(Request $request,SalesChannelContext $context):Response{
        $count = ($this->entityRepository->search(new Criteria(), $context->getContext()))->count();
        return $this->renderStorefront('@Heptastore/storefront/page/home.html.twig',[
            'name'=> $count
        ]);
    }
}