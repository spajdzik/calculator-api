<?php

namespace App\Controller;

use App\Service\Calculator\Calculator;
use App\Service\Exception\ExceptionData;
use Nelmio\ApiDocBundle\Model\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/calculator/', name: 'app_api_calculator_')]
class CalculatorController extends AbstractController
{
    public function __construct(private readonly Calculator $calculator) {}

    #[Route('add/{a}/{b}', name: 'add', methods: ['GET'])]
    #[
        OA\Parameter(
            name: 'a',
            description: 'Number 1',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        ),
        OA\Parameter(
            name: 'b',
            description: 'Number 2',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        )
    ]
    #[
        OA\Response(
            response: 200,
            description: 'Result of the equation'
        ),
        OA\Response(
            response: 500,
            description: 'Response in case of error'
        )
    ]
    public function add(float $a, float $b): JsonResponse
    {
        return new JsonResponse($this->calculator->add($a, $b));
    }

    #[Route('subtract/{a}/{b}', name: 'subtract', methods: ['GET'])]
    #[
        OA\Parameter(
            name: 'a',
            description: 'Number 1',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        ),
        OA\Parameter(
            name: 'b',
            description: 'Number 2',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        )
    ]
    #[
        OA\Response(
            response: 200,
            description: 'Result of the equation'
        ),
        OA\Response(
            response: 500,
            description: 'Response in case of error'
        )
    ]
    public function subtract(float $a, float $b): JsonResponse
    {
        return new JsonResponse($this->calculator->subtract($a, $b));
    }

    #[Route('multiply/{a}/{b}', name: 'multiply', methods: ['GET'])]
    #[
        OA\Parameter(
            name: 'a',
            description: 'Number 1',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        ),
        OA\Parameter(
            name: 'b',
            description: 'Number 2',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        )
    ]
    #[
        OA\Response(
            response: 200,
            description: 'Result of the equation'
        ),
        OA\Response(
            response: 500,
            description: 'Response in case of error'
        )
    ]
    public function multiply(float $a, float $b): JsonResponse
    {
        return new JsonResponse($this->calculator->multiply($a, $b));
    }

    #[Route('divide/{a}/{b}', name: 'divide', methods: ['GET'])]
    #[
        OA\Parameter(
            name: 'a',
            description: 'Number 1',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        ),
        OA\Parameter(
            name: 'b',
            description: 'Number 2',
            in: 'path',
            schema: new OA\Schema(type: 'number')
        )
    ]
    #[
        OA\Response(
            response: 200,
            description: 'Result of the equation'
        ),
        OA\Response(
            response: 500,
            description: 'Response in case of error'
        )
    ]
    public function divide(float $a, float $b): JsonResponse
    {
        return new JsonResponse($this->calculator->divide($a, $b));
    }
}