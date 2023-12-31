<?php declare(strict_types=1);

namespace Heptastore\Service;

use FontLib\Table\Type\name;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;

class WriteData{
    private EntityRepository $entityRepository;
    public function __construct(EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }
    public function writingData(Context $context): void
    {
        $this->entityRepository->create([
            [
                'name'=>'admin',
                'technicalName'=>'Custom Entity',
                'fields' => array('name'=>'Test')
            ]
        ], $context);
    }
}