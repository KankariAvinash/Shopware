<?php declare(strict_types=1);

namespace Heptastore\Storefront\Controller;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]

class HeptaStorefrontController extends StorefrontController{
    #[Route(
        path: '/example/{name?}',
        name: 'frontend.example.example',
        methods: ['GET']
    )]
    public function index(Request $request, SalesChannelContext $context):Response {
        return $this->renderStorefront('@Heptastore/Storefront/Page/example.html.twig', [
            'name' => $request->attributes->get('name')
        ]);
    }
}
