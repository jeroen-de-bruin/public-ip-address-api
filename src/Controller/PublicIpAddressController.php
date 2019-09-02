<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicIpAddressController extends AbstractController
{
    /**
     * @Route(
     *     "/api/ip-address-request/json"
     * )
     */
    public function getPublicIpAddressRequest(
        Request $request
    ): Response {
        return new JsonResponse([
            'status' => 'OK',
            'data' => [
                'ipAddress' => $request->getClientIp(),
            ],
        ]);
    }
}
