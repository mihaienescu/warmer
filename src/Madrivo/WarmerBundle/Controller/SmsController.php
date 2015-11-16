<?php

namespace Madrivo\WarmerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Madrivo\WarmerBundle\Entity\SmsList;
use Madrivo\WarmerBundle\Entity\SmsListRepository;

class SmsController extends Controller
{

    public function indexAction($network, $number, Request $request)
    {
        $em = $this->get('doctrine')->getEntityManager();

        $iParams = $request->query->all();

        if (!isset($iParams['msisdn'])) {
          return JsonResponse::create('NO PARAMETERS');
        }

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
	
	public function readAction($network, $number)
	{
		$em = $this->get('doctrine')->getEntityManager();
		
		$result = $em->getRepository('MadrivoWarmerBundle:SmsList')
		->getLastUnreadMessageByNumber($number);
		
		if (null == $result) {
			return JsonResponse::create("EMPTY");
		}
		
		$text = $result->getMessageText();
		
		$result->setParsed(1);
		
		$em->persist($result);
		$em->flush();
		
		return JsonResponse::create($text);
	}
}
