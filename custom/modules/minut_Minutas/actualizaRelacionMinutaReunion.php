<?php
/**
 * Created by PhpStorm.
 * User: tactos
 * Date: 22/11/18
 * Time: 05:37 PM
 */



class actualizaRelacionMinutaReunionClass
{
 function actualizaRelacion($bean = null, $event = null, $args = null)
 {
     $sql =" update minut_minutas_meetings_c set deleted='0' where minut_minutas_meetingsminut_minutas_ida='{$bean->id}'";
     $result = $GLOBALS['db']->query($sql);
     $GLOBALS['log']->fatal('>>>>>>>Entro Minuta Update: ');
     $GLOBALS['log']->fatal($sql);

 }
}
