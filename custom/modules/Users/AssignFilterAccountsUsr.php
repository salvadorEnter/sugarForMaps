<?php
/**
 * Created by Javier G. Solar, Axel Flores
 * User: tactos
 * Date: 19/12/18
 * Time: 11:51 AM
 */

/**
 * A) Funcionalidad: Genera a nivel Base de datos el Filtro de registros del Modulo de Cuentas
 *    Afectando tambien a quienes Reporta el usuario modificado.
 *    Existen dos listas principales.
 *     1.- filterAccounts_PuestoUsr_list: almacena los Puestos excluyentes de filtro, se toma el id de la lista original
 *         de puesto de usuario.
 *     2.- filterAccounts_RolesUsr_list: contiene el nombre de los Roles excluyentes de filtro, estos nombres deben ser igual
 *         que el listado de roles.
 *
 * B) Recupera al usuario a quien reportaba anteriormente y modifica sus filtros para que ya no puedan compartir registros
 *    afectando a los usuarios a quienes le reportaban.
 *    Despues toma al usuario al que le reportara actualmente y genera sus nuevos filtros afectando tambien a quienes
 *    le reportan.
 *
 * C) La varieble $GLOBALS['fetched_reports_to_id'] almacena el bean antes de ser modificado, este es ejecutado en el
 *    before_save
 */

global $app_list_strings;

$GLOBALS['puestosList'] = $app_list_strings['filterAccounts_PuestoUsr_list'];
$GLOBALS['rolesList'] = $app_list_strings['filterAccounts_RolesUsr_list'];
$GLOBALS['fetched_reports_to_id'] = "";


class AssignFilterAccountsUsr
{

    function AssignFilterAccounts_ByUsr($bean = null, $event = null, $args = null)
    {
        $GLOBALS['log']->fatal("Estado: Actualizando Filtros");
        $puesto = $bean->puestousuario_c;
        $puestosListUsr = $GLOBALS['puestosList'];
        $AplicaFiltro = "";
        $idUsuario = $bean->id;
        $tipoProducto = $bean->tipodeproducto_c;
        $campo = "";

        switch ($tipoProducto) {
            case 1: // Leasing
                $campo = 'user_id_c';
                break;

            case 3 : // Credito A
                $campo = 'user_id2_c';
                break;

            case 4 : // Factoraje
                $campo = 'user_id1_c';
                break;
        }

        if ($this->deleteAllFilterUsr($bean)) {

            $GLOBALS['log']->fatal("Estado: Filtro Eliminado");

            if ($this->validateExcludingRoles($bean)) {
                /* como no hay resultado entre roles, validamos por puesto
                 Recupera el nombre del filtro que se aplicara */
                $AplicaFiltro = $puestosListUsr[$puesto];
            }

            if (!empty($AplicaFiltro) && !empty($campo)) {

                switch ($AplicaFiltro) {
                    case "Propietario":
                        $queryInsertP = <<<SQL
                        
insert into filters(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, team_id, team_set_id, assigned_user_id,filter_definition,filter_template,module_name, acl_team_set_id)
select u.id,
'Mis Cuentas' as name,
'2018-09-29 18:0:00' as date_entered,
'2018-09-29 18:0:00' as date_modified,
u.id as modified_user_id,
u.id as created_by,
null as description,
0 as deleted,
u.default_team as team_id,
u.team_set_id as team_set_id,
null assigned_user_id,
concat('[{"$campo":{"\$in":["$idUsuario"]}}]') as filter_definition,
concat('[{"$campo":{"\$in":["$idUsuario"]}}]') as filter_template,
'Accounts' as module_name,
null as acl_team_set_id
from users u, users_cstm uc
where u.id= uc.id_c and u.id='$idUsuario'
and u.status = 'Active'


SQL;
                        $GLOBALS['db']->query($queryInsertP);
                        $GLOBALS['log']->fatal("Se aplica Filtro Propietario");
                        break;

                    case "ReportanA":

                        $queryInsertR = <<<SQL
insert into filters(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, team_id, team_set_id, assigned_user_id,filter_definition,filter_template,module_name, acl_team_set_id)
select u.id,
'Mis Cuentas' as name,
'2018-09-29 18:0:00' as date_entered,
'2018-09-29 18:0:00' as date_modified,
u.id as modified_user_id,
u.id as created_by,
null as description,
0 as deleted,
u.default_team as team_id,
u.team_set_id as team_set_id,
null assigned_user_id,
concat('[{"$campo":{"\$in":[',(select 
CASE
  WHEN (select GROUP_CONCAT(CONCAT(b.id)) from users b where b.reports_to_id = u.id) is null THEN concat('"',u.id,'"')
  WHEN (select GROUP_CONCAT(CONCAT(b.id)) from users b where b.reports_to_id = u.id) is not null THEN concat('"',u.id,'",',(select GROUP_CONCAT(CONCAT('"',b.id,'"')) from users b where b.reports_to_id = u.id))
END),']}}]') as filter_definition,
concat('[{"$campo":{"\$in":[',(select 
CASE
  WHEN (select GROUP_CONCAT(CONCAT(b.id)) from users b where b.reports_to_id = u.id) is null THEN concat('"',u.id,'"')
  WHEN (select GROUP_CONCAT(CONCAT(b.id)) from users b where b.reports_to_id = u.id) is not null THEN concat('"',u.id,'",',(select GROUP_CONCAT(CONCAT('"',b.id,'"')) from users b where b.reports_to_id = u.id))
END),']}}]') as filter_template,
'Accounts' as module_name,
null as acl_team_set_id
from users u, users_cstm uc
where u.id= uc.id_c and u.id='$idUsuario'
and u.status = 'Active'

SQL;
                        $GLOBALS['db']->query($queryInsertR);
                        $GLOBALS['log']->fatal("Se aplica Filtro Reporta A");
                        break;

                    case "EquipoPromo":

                        $queryInsertEqui = <<<SQL
insert into filters(id, name, date_entered, date_modified, modified_user_id, created_by, description, deleted, team_id, team_set_id, assigned_user_id,filter_definition,filter_template,module_name, acl_team_set_id)
select u.id,
       'Mis Cuentas' as name,
       '2018-09-29 18:0:00' as date_entered,
       '2018-09-29 18:0:00' as date_modified,
       u.id as modified_user_id,
       u.id as created_by,
       null as description,
       0 as deleted,
       u.default_team as team_id,
       u.team_set_id as team_set_id,
       null assigned_user_id,
       concat('[{"unifin_team":{"\$in":[',replace(equipos_c,'^','"') ,']}}]') as filter_definition,
       concat('[{"unifin_team":{"\$in":[',replace(equipos_c,'^','"') ,']}}]') as filter_template,
       'Accounts' as module_name,
       null as acl_team_set_id
from users u, users_cstm uc
where u.id=uc.id_c
  and u.status = 'Active'
  and u.id='$idUsuario'
SQL;

                        $GLOBALS['db']->query($queryInsertEqui);
                        $GLOBALS['log']->fatal("Se aplica Filtro Equipo");
                        break;

                    default:
                        $GLOBALS['log']->fatal("No se aplicara Filtro");
                }
            }

            if ($GLOBALS['fetched_reports_to_id']['reports_to_id'] != $bean->reports_to_id) {
                if (!empty($GLOBALS['fetched_reports_to_id']['reports_to_id'])) {

                    if ($GLOBALS['fetched_reports_to_id']['reports_to_id'] != 'NULL') {
                        $sqlUpdate = "update users set reports_to_id='{$bean->reports_to_id}' where id='{$bean->id}'";
                        $GLOBALS['db']->query($sqlUpdate);

                        $newUser1 = BeanFactory::retrieveBean('Users', $GLOBALS['fetched_reports_to_id']['reports_to_id']);
                        $newUser1->save();
                    }
                }
            }

            if (!empty($bean->reports_to_id)) {

                if ($bean->reports_to_id != 'NULL') {
                    $newUser = BeanFactory::retrieveBean('Users', $bean->reports_to_id);
                    $newUser->save();
                }
            }

        } else {
            // $GLOBALS['log']->fatal("Estado: Fallo al Eliminar Filtro");
        }
    }

    function validateExcludingRoles($usr)
    {
        $banderaRol = false;
        $rolesExclu = $GLOBALS['rolesList'];
        $rolesExcluyentes = array();
        $response = array();
        // Obtiene roles del Usuario Firmado
        $query = <<<SQL
SELECT r.name FROM acl_roles r
INNER JOIN acl_roles_users ru ON ru.role_id = r.id AND ru.deleted = 0
WHERE ru.user_id = '{$usr->id}'
SQL;

        $queryResult = $GLOBALS['db']->query($query);
        // Genera arreglo de Roles
        while ($row = $GLOBALS['db']->fetchByAssoc($queryResult)) {
            array_push($response, $row['name']);
        }
        // Roles Excluyentes de Filtro
        for ($i = 1; $i <= count($rolesExclu); $i++) {
            array_push($rolesExcluyentes, $rolesExclu[$i]);
        }
        // Validamos si el Usuario tiene roles Excluyentes
        $result = array_intersect($rolesExcluyentes, $response);
        if (empty($result)) {
            $banderaRol = true;
           // $GLOBALS['log']->fatal("  nO hay Resultados de interseccion  VALIDA POR PUESTO" . print_r($result, true));
        }


        return $banderaRol;
    }

    function deleteAllFilterUsr($usuario)
    {

        $banderaDelete = true;
        $queryDelete = <<<SQL
DELETE FROM filters
WHERE id = '{$usuario->id}'
SQL;
        try {
            $queryResultDelete = $GLOBALS['db']->query($queryDelete);
        } catch (Exception $e) {
            $GLOBALS['log']->fatal("Error al eliminar el Filtro del usuario" . $usuario->id . "Error: " . $e);
            $banderaDelete = false;
        }


        // $GLOBALS['log']->fatal("voy a eliminar dela tabla filtro al usuario " . $usuario->id);
        // $GLOBALS['log']->fatal("Query " . $queryDelete);

        return $banderaDelete;
        // return true;
    }

    function UpdateReportToUsr($bean = null, $event = null, $args = null)
    {

        $GLOBALS['fetched_reports_to_id'] = "";
        if (!empty($bean->id)) {
            $GLOBALS['fetched_reports_to_id'] = $bean->fetched_row;

        }
    }
}