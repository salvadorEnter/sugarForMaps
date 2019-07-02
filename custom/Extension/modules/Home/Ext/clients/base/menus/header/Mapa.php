<?php
/**
 * Created by Victor Martinez Lopez.
 * User: victor.martinez@tactos.com.mx
 * Date: 10/06/2019
 * Time: 11:24 AM
 */
$viewdefs['Home']['base']['menu']['header'][] = array(
    'route'=>'#Home/layout/dashlet-mapa',
    'label' =>'Mapa',
    'acl_module'=>'Home',
    'icon' => 'fa-map-marker',
);