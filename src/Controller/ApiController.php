<?php

namespace App\Controller;

use League\OAuth2\Client\Token\AccessToken;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Ajardin\BlizzardSdkBundle\BlizzardApi\Authentication\Credentials;
use Ajardin\BlizzardSdkBundle\HttpClient\BlizzardHttpClient;
use Ajardin\BlizzardSdkBundle\BlizzardApi\WorldOfWarcraft\RealmApi;
use Ajardin\BlizzardSdkBundle\BlizzardApi\AbstractApi;


class ApiController extends AbstractController
{
    private $realmApi;

    public function __construct(RealmApi $realmApi)
    {
        $this->realmApi = $realmApi;
    }

    #[Route('/api', name: 'app_apitest')]
    public function index(): Response
    {
        //$client = $this->realmApi;
        $response =  $this->realmApi->realmIndex('us');
        $content = $response->toArray();

        return $this->render('apitest/index.html.twig', [
            'controller_name' => 'ApitestController',
            'realms' => $content['realms'],
        ]);
    }
}
