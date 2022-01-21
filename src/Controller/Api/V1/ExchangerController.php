<?php declare(strict_types=1);

namespace App\Controller\Api\V1;

use App\Entity\Currency;
use App\Importer\ExchangerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ExchangerController extends AbstractController
{
    public function __construct(private ExchangerInterface $exchanger)
    {

    }

    /**
     * @Route("/api/v1/exchange/{from}/{to}/{sum}", name="v1_exchanger_exchange", methods={"GET"})
     */
    public function exchange(
        Currency $from,
        Currency $to,
        float $sum
    ): JsonResponse {
        //TODO
        //$this->exchanger->calculate();
    }
}
