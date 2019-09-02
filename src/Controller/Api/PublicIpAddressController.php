<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicIpAddressController extends AbstractController
{
    /**
     * @Route(
     *     "/api/public-ipaddress-request/json",
     *     name="api_public_ipaddress_request"
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
