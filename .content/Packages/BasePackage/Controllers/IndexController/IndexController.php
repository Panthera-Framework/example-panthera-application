<?php
namespace ExampleAPP\Packages\BasePackage\Controllers;

use Panthera\Packages\BasePackage\Controllers\IndexController as ParentController;
use Panthera\Components\Controller\ResponseText;

/**
 * RaspAP
 * --
 * Class IndexController
 *
 * @package RaspAP\Packages\BasePackage\Controllers
 */
class IndexController extends ParentController
{
    /**
     * @return ResponseText
     */
    public function defaultAction()
    {
        return new ResponseText('Hello world, change me in /.content/Packages/BasePackage/IndexController/IndexController.php, remember IndexController from BasePackage is specific, does not require routing configuration as it\'s hardcoded to be used at "/" path already');
    }
}