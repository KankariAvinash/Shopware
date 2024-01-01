<?php declare(strict_types=1);

namespace Heptastore;

use Shopware\Core\Defaults;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\DataAbstractionLayer\Search\IdSearchResult;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\UpdateContext;
use Shopware\Core\System\CustomField\CustomFieldTypes;

class Heptastore extends Plugin
{
    const Repository_name = "custom_field_set.repository";
    const CustomField = "Product_bike_list";
    public function install(InstallContext $installContext): void
    {
        $context = $installContext->getContext();
        $customEntity = $this->container->get(self::Repository_name);
        if($this->CheckifCustomFieldisNotInstalled($customEntity,$context))
        {
            $customEntity->create([[
                'name'=>self::CustomField,
                'relations'=>[
                    ['entityName' =>'product',]
                ],
                'config'=>[
                    'label'=>'custom_field_set',
                ],
                'customFields' => [
                    [
                        'name' => 'HeptaStore_Product',
                        'type' => CustomFieldTypes::TEXT,
                        'config' => [
                            'label' => [
                                'en-GB' => 'Product Name',
                                'de-DE' => 'Produkt Name',
                            ],
                            'customFieldPosition' => 1
                        ]
                    ],
                    [
                        'name' => 'HeptaStore_Product_owner',
                        'type' => CustomFieldTypes::TEXT,
                        'config' => [
                            'label' => [
                                'en-GB' => 'Product Name Owner',
                                'de-DE' => 'Produkt Name Owner',
                            ],
                            'customFieldPosition' => 1
                        ]
                    ],
                ]
            ]
            ],$context);
        }
        // Do stuff such as creating a new payment method
    }
    private function CheckifCustomFieldisNotInstalled($customEntity,Context $context):bool{
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('name',self::CustomField));
        if(($customEntity->search($criteria,$context))->getTotal() == 0){
            return true;
        }

        return false;

    }
    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);
        if ($uninstallContext->keepUserData()) {
            return;
        }
        $this->removeCustomFields($uninstallContext);
        // Remove or deactivate the data created by the plugin
    }
    private function removeCustomFields(UninstallContext $uninstallContext):void{
        $customEntity = $this->container->get(self::Repository_name);
        $context = $uninstallContext->getContext();
        $customSet = $this->customFieldsExists($context,self::CustomField);

        if($customSet){
            $customEntity->delete(array_values($customSet->getData()),$context);
        }
    }

    private function customFieldsExists(Context $context,string $name):?IdSearchResult{
        $criteria = new Criteria();
        $customFieldRepo = $this->container->get(self::Repository_name);

        $criteria->addFilter(new EqualsFilter('name',$name));
        $ids = $customFieldRepo->searchIds($criteria,$context);
        return $ids->getTotal() > 0 ? $ids:NULL;

    }
    public function activate(ActivateContext $activateContext): void
    {
        // Activate entities, such as a new payment method
        // Or create new entities here, because now your plugin is installed and active for sure
    }

    public function deactivate(DeactivateContext $deactivateContext): void
    {
        // Deactivate entities, such as a new payment method
        // Or remove previously created entities
    }

    public function update(UpdateContext $updateContext): void
    {
        // Update necessary stuff, mostly non-database related
    }

    public function postInstall(InstallContext $installContext): void
    {
    }

    public function postUpdate(UpdateContext $updateContext): void
    {
    }
}
