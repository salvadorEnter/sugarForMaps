<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetAccountsMeetings extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyGetEndpoint' => array(
                //request type
                'reqType' => 'GET',
                //set authentication
                'noLoginRequired' => false,
                //endpoint path
                'path' => array('GetAccountsMeetings', '?'),
                //endpoint variables
                'pathVars' => array('Metodo','idReunion'),
                //method to call
                'method' => 'getAccountsMehtod',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Metodo para obtener la cuenta relacionada a una reunion',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
        );
    }
    //
    public function getAccountsMehtod($api, $args){
        $idReunion=$args['idReunion'];
        $datos="select a.id idCuenta, a.name nombreCuenta, ac.id_c,ac.tipodepersona_c TipoPersona, 
            ac.tipo_registro_c TipoRegistro, m.id idReunion,m.name NombreReunion,m.assigned_user_id, 
            m.parent_id, u.id idUsuario,u.first_name UserFirst,u.last_name UserLast 
                from accounts a,accounts_cstm ac,meetings m,users u
                where m.assigned_user_id=u.id
                    AND m.parent_id=a.id
                    AND a.id=ac.id_c
                    AND m.id='{$idReunion}'";
                    //913bca5e-9796-11e9-989c-c976b1ccd26c
        $result = $GLOBALS['db']->query($datos);
        $arreglo=array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $arreglo['idReunion']=$row['idReunion'];
            $arreglo['NombreReunion']=$row['NombreReunion'];
            $arreglo['idCuenta']=$row['idCuenta'];
            $arreglo['nombreCuenta']=$row['nombreCuenta'];
            $arreglo['TipoPersona']=$row['TipoPersona'];
            $arreglo['TipoRegistro']=$row['TipoRegistro'];
            $arreglo['idUsuario']=$row['idUsuario'];
            $arreglo['UserFirst']=$row['UserFirst'];
            $arreglo['UserLast']=$row['UserLast'];
        }
        return $arreglo;    
    }   
}