<?php
/**
 * Created by Salvador Lopez.
 * salvador.lopez@tactos.com.mx
 * Date: 15/05/18
 */

$hook_array['after_login'][] = Array(
    1,
    'after_login set platform',
    'custom/modules/Users/SetPlatform.php',
    'SetPlatform',
    'setUserPlatform'
);

?>
