<?php
/**
 * @author F. Javier G. Solar
 * Date: 31/07/2018
 * Time: 09:16 AM
 */


class GetUsersBoss extends SugarApi
{
    /**
     * Registro de todas las rutas para consumir los servicios del API
     *
     */
    public function registerApiRest()
    {
        return array(
            //GET
            'retrieve' => array(
                //request type
                'reqType' => 'GET',
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('GetUsersBoss', '?'),
                //endpoint variables
                'pathVars' => array('module', 'id_cuenta'),
                //method to call
                'method' => 'GetUserHeadByTeam',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Método GET para validar que cumpla con los datos necesarios para crear la solicitud',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),

        );

    }

    /**
     * Obtiene los Jefes y usuarios relacionados con la Cuenta
     *
     * Método que obtiene los jefes y usuarios relacionados con una Cuenta y compara
     * con el usuario firmado para otorgar permisos de visibilidad sonbre el campo correo y teléfonos
     *
     * @param array $api
     * @param array $args Array con los parámetros enviados para su procesamiento
     * @return bander true o false
     * @throws SugarApiExceptionInvalidParameter
     */
    public function GetUserHeadByTeam($api, $args)
    {
        $flag = false;
        $idCuenta = $args['id_cuenta'];
        $beanAccounts = BeanFactory::getBean("Accounts", $idCuenta);
        global $current_user;

        $usrLeasing = $beanAccounts->user_id_c;
        $usrFactoraje = $beanAccounts->user_id1_c;
        $usrCredito = $beanAccounts->user_id2_c;
        $usuarioLog = $current_user->id;

        /*
         * Validamos si el usuario Firmado es igual a credito, factoraje y leasing
        **/

        if ($usuarioLog == $usrLeasing || $usuarioLog == $usrFactoraje || $usuarioLog == $usrCredito) {
            $flag = true;
        }

        if ($flag == false) {
            $query = "SELECT id,reports_to_id from users
                  where id IN ('{$usrLeasing}','{$usrFactoraje}','{$usrCredito}')";
            $result = $GLOBALS['db']->query($query);
            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

                if ($usuarioLog == $row['reports_to_id']) {
                    $flag = true;
                }
            }
        }
        return $flag;

    }


}