<?php
require_once './app/models/book-Api-Model.php';
require_once './app/view/ApiView.php';
require_once './app/helper/auth-Api-helper.php';

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
class AuthApiController {
    private $model;
    private $view;
    private $authHelper;

    private $data;

    public function __construct() {
        $this->model = new booksController();
        $this->view = new ApiBooksview();
        $this->authHelper = new AuthApiHelper();
        
        // lee el body del request
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function getToken(){
        //verificar header
        
    }

}



?>