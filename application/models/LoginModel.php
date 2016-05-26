<?php

class LoginModel extends CI_Model
{

    private $app_id = "180582";
    private $app_secret = "6253bb789d105d4cea1b5f1f97cd18c6";
    private $my_url = "http://playdeeze4.me/login/save";

    public function do_login()
    {

        if (!isset($code)) {
            $_SESSION['state'] = md5(uniqid(rand(), true)); //CSRF protection

            $dialog_url = "https://connect.deezer.com/oauth/auth.php?app_id=" . $this->app_id
                . "&redirect_uri=" . urlencode($this->my_url) . "&perms=email,offline_access,manage_library"
                . "&state=" . $_SESSION['state'];

            header("Location: " . $dialog_url);

            exit;

        }

    }

    public function save_login()
    {

        $newdata = array(
            'code' => $_REQUEST['code']
        );

        $this->session->set_userdata($newdata);

        //var_dump($this->session->get_userdata('code'));
    }

    public function get_user()
    {
        if ($_REQUEST['state'] == $_SESSION['state']) {
            $token_url = "https://connect.deezer.com/oauth/access_token.php?app_id="
                . $this->app_id . "&secret="
                . $this->app_secret . "&code=" . $this->session->get_userdata('code')['code'];

            $response = file_get_contents($token_url);
            $params = null;
            parse_str($response, $params);
            $api_url = "https://api.deezer.com/user/me?access_token="
                . $params['access_token'];

            $user = json_decode(file_get_contents($api_url), true);
            $userData = array(
                'accessToken' => $params['access_token']
            );

            $_SESSION['token'] = $params['access_token'];

            return $user;
        } else {
            echo("The state does not match. You may be a victim of CSRF.");
        }
    }

    public function getToken()
    {
        $token_url = "https://connect.deezer.com/oauth/access_token.php?app_id="
            . $this->app_id . "&secret="
            . $this->app_secret . "&code=" . $this->session->get_userdata('code')['code'];

        $response = file_get_contents($token_url);
        $params = null;
        parse_str($response, $params);
        return $params['access_token'];
    }

}