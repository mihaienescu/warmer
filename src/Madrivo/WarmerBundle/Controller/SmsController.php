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

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getEntityManager();

        $requestParams = $request->query->all();

        $list = new SmsList();
        $list->setFrom($requestParams['msisdn']);
        $list->setTo($requestParams['to']);
        $list->setMessageText($requestParams['text']);
        $list->setMessageId($requestParams['messageId']);
        $list->setWhen(new \DateTime($requestParams['message-timestamp']));

        $em->persist($list);
        $em->flush();

        return JsonResponse::create('OK');
    }
}
