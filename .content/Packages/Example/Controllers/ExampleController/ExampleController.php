<?php
namespace ExampleAPP\Packages\Example\Controllers;

use Panthera\Classes\BaseExceptions\ValidationException;
use Panthera\Components\Controller\BaseFrameworkController;
use Panthera\Components\Controller\Response;
use Panthera\Components\Controller\ResponseText;

/**
 * Class ExampleController
 *
 * @package ExampleAPP\Packages\Example\Controllers
 */
class ExampleController extends BaseFrameworkController
{
    /**
     * @API
     * @return Response|ResponseText
     */
    public function defaultAction()
    {
        // validate value using regexp
        try
        {
            $bValue = $this->request->get('b', 'regexp@[^0-9,\.]');
        }
        catch (ValidationException $e)
        {
            return new ResponseText('Ouups... something went wrong! Parameter "b" has invalid value...');
        }

        // assign variables, select a template
        $response = new Response([
            'test'                  => 'This is a test variable',
            'testParameter'         => $this->request->params('testParameter', 'regexp@[^[0-9]'),
            'thisIsALikeAnAnarchy'  => $this->request->get('a'),
            'bValue'                => $bValue,
        ], 'Example.tpl');

        // set a response code eg. 404, 200, 500 etc., assign a variable "secondTest"
        $response->setCode(200)->assign('secondTest', 'And second test :-)');
        return $response;
    }
}