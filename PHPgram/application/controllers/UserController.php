<?php
namespace application\controllers;

require_once "application/utils/UrlUtils.php";

class UserController extends Controller {
    public function signin() {
        
        switch(getMethod()) {
            case _GET:
                return "user/signin.php";
            case _POST:
                //아이디, 비번이 하나라도 없거나 틀리면 > redirect => signin.php
                //아이디, 비번이 맞으면 > redirect => feed/index
                
                /*
                $param = [
                    "email" => $_POST['email'],
                    "pw" => $_POST['pw']
                ];

                $dbUser = $this->model->selUser($param);
                if($dbUser === false || !password_verify($param['pw'], $dbUser->pw)) {
                    return "redirect:signin";
                } 

                $this->flash(_LOGINUSER, $dbUser);

                return "redirect:/feed/index";
                */

            //강사님 풀이
                $email = $_POST["email"];
                $pw = $_POST["pw"];
                $param = [ "email" => $email ];
                $dbUser = $this->model->selUser($param);
                if(!$dbUser || !password_verify($pw, $dbUser->pw)) {                                                        
                    return "redirect:signin?email={$email}&err";
                }
                return "redirect:/feed/index";
        
        }
    }

    public function signup() {
        // print getMethod();
        // if(getMethod() === _GET) {
        //     return "user/signup.php";
        // } else if(getMethod() === _POST) {
        //     return "redirect:signin";
        // }

        switch(getMethod()) {
            case _GET:
                return "user/signup.php";
            case _POST:

                $param = [
                    "email" => $_POST['email'],
                    "pw" => $_POST['pw'],
                    "nm" => $_POST['nm']
                ];

                $param["pw"] = password_hash($param["pw"], PASSWORD_BCRYPT);

                $this->model->insUser($param);

                return "redirect:signin";
        }
    }

}