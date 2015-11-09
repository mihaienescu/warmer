<?php

namespace Madrivo\WarmerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Madrivo\WarmerBundle\Entity\SmsList;


class SmsController extends Controller
{

    public function indexAction($network, $number, Request $request)
    {
        $em = $this->get('doctrine')->getEntityManager();

        $iParams = $request->query->all();

        $list = new SmsList();
        $list->setNumberFrom($iParams['msisdn']);
        $list->setNumberTo($iParams['to']);
        $list->setMessageText($iParams['text']);
        $list->setMessageId($iParams['messageId']);
        $list->setNetworkTimestamp(new \DateTime($iParams['message-timestamp']));
        $list->setParsed(0);

        $em->persist($list);
        $em->flush();

        return JsonResponse::create('OK');
    }
}
