<?php
namespace ExampleAPP\Packages\BasePackage\Controllers;

use Panthera\Packages\BasePackage\Controllers\IndexController as ParentController;
use Panthera\Components\Controller\ResponseText;

/**
 * Index Controller of example Panthera Framework application
 * --
 * Class IndexController
 *
 * @package ExampleAPP\Packages\BasePackage\Controllers
 */
class IndexController extends ParentController
{
    /**
     * @return ResponseText
     */
    public function defaultAction()
    {
        return new ResponseText('Hello, World! Change me in /.content/Packages/BasePackage/Controllers/IndexController/IndexController.php. Remember IndexController from BasePackage is specific, does not require routing configuration as it\'s hardcoded to be used at "/" path already.');
    }
}