<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SiteController extends Controller{
    /**
     * {@inheritdoc}
     */
    public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }
	
	/**
	 * Displays test 1.
	 *
	 * @return string
	 */
	public function actionTest1(){
        $client = new Client();

        $url = 'https://jsonplaceholder.typicode.com/posts';

        try {
            $response = $client->request('GET', $url);
        } catch (RequestException $e) {
            echo "La petición no ha sido satisfactoria: " . $e->getMessage();
            exit();
        }

        if ($response->getStatusCode() === 200) {
            $responseData = json_decode($response->getBody()->getContents(), true);            
        } else {
            $responseData = "[Error]: Código HTTP " . $response->getStatusCode();
        }

        $posts = [];
        if (is_array($responseData)) {            
            foreach($responseData as $data) {
                $tempPost = new Post();
                $tempPost->id = $data["id"];
                $tempPost->userId = $data["userId"];
                $tempPost->title = $data["title"];
                $tempPost->body = $data["body"];

                $posts[] = $tempPost;
            }
        }
		return $this->render('test1', ["posts" => $posts]);
	}
}
