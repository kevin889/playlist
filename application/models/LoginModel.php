<?php

class LoginModel extends CI_Model
{
    public function do_login()
    {
            $app_id = "180582";
            $app_secret = "6253bb789d105d4cea1b5f1f97cd18c6";
            $my_url = "http://playdeeze4.me/";

            if(isset($_REQUEST['code'])) { $code = $_REQUEST["code"]; }

            if($this->session->userdata('accessToken')) return redirect('/','refresh');

            if (empty($code)) {
                $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection

                $dialog_url = "https://connect.deezer.com/oauth/auth.php?app_id=" . $app_id
                    . "&redirect_uri=" . urlencode($my_url) . "&perms=email,offline_access"
                    . "&state=" . $_SESSION['state'];

                header("Location: " . $dialog_url);
                exit;

            }

            if ($_REQUEST['state'] == $_SESSION['state']) {
                $token_url = "https://connect.deezer.com/oauth/access_token.php?app_id="
                    . $app_id . "&secret="
                    . $app_secret . "&code=" . $code;

                $response = file_get_contents($token_url);
                $params = null;
                parse_str($response, $params);
                $api_url = "https://api.deezer.com/user/me?access_token="
                    . $params['access_token'];

                $user = json_decode(file_get_contents($api_url), true);
                $userData = array(
                    'accessToken' => $params['access_token']
                );

                $this->session->set_userdata(array_merge($user, $userData));
                var_dump($user);die();
            } else {
                echo("The state does not match. You may be a victim of CSRF.");
            }
        echo("Hello " . $user->name);
    }
    
}