<?php

if(isset($_GET['id_encuesta']) && isset($_GET['url'])){
    $bean->id=$_GET['id_encuesta'];
    $GLOBALS['site_url']=$_GET['url'];
    $link='';
    $bean_acc->name=$_GET['name'];
}else{
    $bean_acc = BeanFactory::retrieveBean('Accounts', $bean->account_id_c);
    $link='<b>Si la encuesta de arriba no funciona por favor da click <a href="'.$GLOBALS['site_url'].'/custom/Levementum/CustomEntryPoints/encuesta_template.php?id_encuesta='.$bean->id.'&url='.$GLOBALS['site_url'].'&name='. $bean_acc->name.'">aqui</a></b>';
}

$body='<html>
            <head>
            
            </head>
        
            <body>
                <div align="center" style="width: 660px;">
                <img src="https://fotos.subefotos.com/d83bd716402da605745bfa6158d0f376o.png">
                <h2>'.$bean_acc->name.'</h2>
                <h2>Encuesta de Satisfacción</h2>
                  <form target="request" method="POST" action="'.$GLOBALS['site_url'].'/custom/Levementum/CustomEntryPoints/SaveSurvey.php?id_encuesta='.$bean->id.'">
                      <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q1">En términos generales¿Qué tan satisfecho se encuentra con el asesor UNIFIN asignado?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q1-1">1</label></td>
                           <td align="center"><label for="q1-2" >2</label></td>
                           <td align="center"><label for="q1-3" >3</label></td>
                           <td align="center"><label for="q1-4" >4</label></td>
                           <td align="center"><label for="q1-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq1" id="q1-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq1" id="q1-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq1" id="q1-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq1" id="q1-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq1" id="q1-5" value="5" required/></td>
                           </tr>
                        </table>
                    </div><br>
                    <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q2">¿Qué tan satisfecho se encuentra con la atención y el trato brindado por el asesor?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q2-1">1</label></td>
                           <td align="center"><label for="q2-2" >2</label></td>
                           <td align="center"><label for="q2-3" >3</label></td>
                           <td align="center"><label for="q2-4" >4</label></td>
                           <td align="center"><label for="q2-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq2" id="q2-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq2" id="q2-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq2" id="q2-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq2" id="q2-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq2" id="q2-5" value="5" required/></td>
                           </tr>
                        </table>
                    </div><br>
                    <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q3">¿Cómo calificaría al asesor con respecto al dominio del SECTOR al que pertenece su empresa / la empresa para la que trabaja?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q3-1">1</label></td>
                           <td align="center"><label for="q3-2" >2</label></td>
                           <td align="center"><label for="q3-3" >3</label></td>
                           <td align="center"><label for="q3-4" >4</label></td>
                           <td align="center"><label for="q3-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq3" id="q3-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq3" id="q3-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq3" id="q3-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq3" id="q3-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq3" id="q3-5" value="5" required/></td>
                           </tr>
                        </table>
                      </div><br>
                      <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q4">¿Cómo calificaría al asesor con respecto al CONOCIMIENTO al que pertenece su empresa / la empresa para la que trabaja?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q4-1">1</label></td>
                           <td align="center"><label for="q4-2" >2</label></td>
                           <td align="center"><label for="q4-3" >3</label></td>
                           <td align="center"><label for="q4-4" >4</label></td>
                           <td align="center"><label for="q4-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq4" id="q4-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq4" id="q4-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq4" id="q4-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq4" id="q4-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq4" id="q4-5" value="5" required/></td>
                          </tr>
                        </table>
                      </div><br>
                      <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q5">¿Cómo calificaría al asesor con respecto a la comprensión de las necesidades de la empresa?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q5-1">1</label></td>
                           <td align="center"><label for="q5-2" >2</label></td>
                           <td align="center"><label for="q5-3" >3</label></td>
                           <td align="center"><label for="q5-4" >4</label></td>
                           <td align="center"><label for="q5-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq5" id="q5-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq5" id="q5-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq5" id="q5-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq5" id="q5-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq5" id="q5-5" value="5" required/></td>
                           </tr>
                        </table>
                      </div><br>
                      <div> 
                        <table style="width:100%">
                         <tr>
                           <td colspan="5" align="center"><h4 name="question" id="q6">¿Qué tan satisfecho se encuentra con el conocimiento y la capacidad del asesor para resolver sus dudas?</h4></td>
                         </tr>
                         <tr>
                           <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                           <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                         </tr>
                         <tr>
                           <td align="center"><label for="q6-1">1</label></td>
                           <td align="center"><label for="q6-2" >2</label></td>
                           <td align="center"><label for="q6-3" >3</label></td>
                           <td align="center"><label for="q6-4" >4</label></td>
                           <td align="center"><label for="q6-5" >5</label></td>
                         </tr>
                         <tr>
                           <td align="center"><input type="radio" name="rq6" id="q6-1" value="1" /></td>
                           <td align="center"><input type="radio" name="rq6" id="q6-2" value="2" /></td>
                           <td align="center"><input type="radio" name="rq6" id="q6-3" value="3" /></td>
                           <td align="center"><input type="radio" name="rq6" id="q6-4" value="4" /></td>
                           <td align="center"><input type="radio" name="rq6" id="q6-5" value="5" required/></td>
                           </tr>
                        </table>
                      </div><br>
                      <div style="width:60%;">
                        <h4 name="question" id="q7">Después de la cita con el asesor de UNIFIN usted diría que:</h4>
                        <div align="left">
                          <input type="radio" name="rq7" id="q7-1" value="Hace mucho mas probable que considere a UNIFIN" required/>
                          <label for="q7-1">Hace mucho más probable que considere a UNIFIN</label> <br>
                     
                         
                          <input type="radio" name="rq7" id="q7-2" value="Hace mucho mas probable que considere a UNIFIN" />
                           <label for="q7-2" >Hace más probable que considere a UNIFIN</label><br> 
                
                          <input type="radio" name="rq7" id="q7-3" value="No hara ninguna diferencia"  align="left"/>
                          <label for="q7-3" >No hará ninguna diferencia</label><br> 
                
                         <input type="radio" name="rq7" id="q7-4" value="Hace probable que no considere a UNIFIN" />
                         <label for="q7-4" >Hace probable que no considere a UNIFIN</label><br> 
                
                          <input type="radio" name="rq7" id="q7-5" value="Hace mucho mas probable que no considere a UNIFIN"/>
                          <label for="q7-5" >Hace mucho más probable que no considere a UNIFIN</label> <br>
                        </div>
                      </div>
        
                    <br>
                    <input type="submit" value="Enviar encuesta!">
                    <br>
                    <p>'.$link.'</p>
                </form>
                <img src="https://fotos.subefotos.com/21e0681a07a484fedf20d4fbc9817396o.png">
                </div>
            </body>
        </html>
      ';

$bodyv2=<<<EOF
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="assets/jquery-3.3.1.min.js"><\/script>'))
        </script>
    </head>

    <body>
        <div align="center" style="width: 660px;">
        <img src="https://fotos.subefotos.com/d83bd716402da605745bfa6158d0f376o.png">
        <h2>{$bean_acc->name}</h2>
        <h2>Encuesta de Satisfacción</h2>
          <form id="form">
              <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q1">En términos generales¿Qué tan satisfecho se encuentra con el asesor UNIFIN asignado?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q1-1">1</label></td>
                   <td align="center"><label for="q1-2" >2</label></td>
                   <td align="center"><label for="q1-3" >3</label></td>
                   <td align="center"><label for="q1-4" >4</label></td>
                   <td align="center"><label for="q1-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq1" id="q1-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq1" id="q1-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq1" id="q1-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq1" id="q1-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq1" id="q1-5" value="5" required/></td>
                   </tr>
                </table>
            </div><br>
            <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q2">¿Qué tan satisfecho se encuentra con la atención y el trato brindado por el asesor?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q2-1">1</label></td>
                   <td align="center"><label for="q2-2" >2</label></td>
                   <td align="center"><label for="q2-3" >3</label></td>
                   <td align="center"><label for="q2-4" >4</label></td>
                   <td align="center"><label for="q2-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq2" id="q2-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq2" id="q2-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq2" id="q2-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq2" id="q2-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq2" id="q2-5" value="5" required/></td>
                   </tr>
                </table>
            </div><br>
            <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q3">¿Cómo calificaría al asesor con respecto al dominio del SECTOR al que pertenece su empresa / la empresa para la que trabaja?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q3-1">1</label></td>
                   <td align="center"><label for="q3-2" >2</label></td>
                   <td align="center"><label for="q3-3" >3</label></td>
                   <td align="center"><label for="q3-4" >4</label></td>
                   <td align="center"><label for="q3-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq3" id="q3-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq3" id="q3-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq3" id="q3-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq3" id="q3-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq3" id="q3-5" value="5" required/></td>
                   </tr>
                </table>
              </div><br>
              <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q4">¿Cómo calificaría al asesor con respecto al CONOCIMIENTO al que pertenece su empresa / la empresa para la que trabaja?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q4-1">1</label></td>
                   <td align="center"><label for="q4-2" >2</label></td>
                   <td align="center"><label for="q4-3" >3</label></td>
                   <td align="center"><label for="q4-4" >4</label></td>
                   <td align="center"><label for="q4-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq4" id="q4-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq4" id="q4-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq4" id="q4-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq4" id="q4-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq4" id="q4-5" value="5" required/></td>
                  </tr>
                </table>
              </div><br>
              <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q5">¿Cómo calificaría al asesor con respecto a la comprensión de las necesidades de la empresa?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q5-1">1</label></td>
                   <td align="center"><label for="q5-2" >2</label></td>
                   <td align="center"><label for="q5-3" >3</label></td>
                   <td align="center"><label for="q5-4" >4</label></td>
                   <td align="center"><label for="q5-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq5" id="q5-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq5" id="q5-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq5" id="q5-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq5" id="q5-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq5" id="q5-5" value="5" required/></td>
                   </tr>
                </table>
              </div><br>
              <div> 
                <table style="width:100%">
                 <tr>
                   <td colspan="5" align="center"><h4 name="question" id="q6">¿Qué tan satisfecho se encuentra con el conocimiento y la capacidad del asesor para resolver sus dudas?</h4></td>
                 </tr>
                 <tr>
                   <td colspan="3" align="left"><h6  style=";display: inline;">Totalmente Insatisfecho</h6></td>
                   <td colspan="2" align="right"><h6  style="display: inline;">Totalmente Satisfecho</h6></td>
                 </tr>
                 <tr>
                   <td align="center"><label for="q6-1">1</label></td>
                   <td align="center"><label for="q6-2" >2</label></td>
                   <td align="center"><label for="q6-3" >3</label></td>
                   <td align="center"><label for="q6-4" >4</label></td>
                   <td align="center"><label for="q6-5" >5</label></td>
                 </tr>
                 <tr>
                   <td align="center"><input type="radio" name="rq6" id="q6-1" value="1" /></td>
                   <td align="center"><input type="radio" name="rq6" id="q6-2" value="2" /></td>
                   <td align="center"><input type="radio" name="rq6" id="q6-3" value="3" /></td>
                   <td align="center"><input type="radio" name="rq6" id="q6-4" value="4" /></td>
                   <td align="center"><input type="radio" name="rq6" id="q6-5" value="5" required/></td>
                   </tr>
                </table>
              </div><br>
              <div style="width:60%;">
                <h4 name="question" id="q7">Después de la cita con el asesor de UNIFIN usted diría que:</h4>
                <div align="left">
                  <input type="radio" name="rq7" id="q7-1" value="Hace mucho mas probable que considere a UNIFIN" required/>
                  <label for="q7-1">Hace mucho más probable que considere a UNIFIN</label> <br>
             
                 
                  <input type="radio" name="rq7" id="q7-2" value="Hace mucho mas probable que considere a UNIFIN" />
                   <label for="q7-2" >Hace más probable que considere a UNIFIN</label><br> 
        
                  <input type="radio" name="rq7" id="q7-3" value="No hara ninguna diferencia"  align="left"/>
                  <label for="q7-3" >No hará ninguna diferencia</label><br> 
        
                 <input type="radio" name="rq7" id="q7-4" value="Hace probable que no considere a UNIFIN" />
                 <label for="q7-4" >Hace probable que no considere a UNIFIN</label><br> 
        
                  <input type="radio" name="rq7" id="q7-5" value="Hace mucho mas probable que no considere a UNIFIN"/>
                  <label for="q7-5" >Hace mucho más probable que no considere a UNIFIN</label> <br>
                </div>
              </div>
            <br>
            <input type="submit" value="Enviar encuesta!">
            <br>
        </form>
        <img src="https://fotos.subefotos.com/21e0681a07a484fedf20d4fbc9817396o.png">
        </div>
        <script>
                var id="{$_GET["id_encuesta"]}";
                var preguntas=[];
                var respuestas=[];
                var resultado='Resultado de Encuesta:\\n';
                $("[name=question]").each(function(index,elm) {
                  preguntas.push(elm.innerText);
                });
                var isIE = /*@cc_on!@*/false || !!document.documentMode;
                var urlSugar="http://{$_SERVER['SERVER_NAME']}/unifin"; //////Activar esta variable
                //var urlSugar="http://{$_SERVER['SERVER_NAME']}:8888/unifin/rediseno";
    
                if(isIE) {
                    alert("Si se te muestra un mensaje acerca de ActiveX o Scripts, permite su ejecuci\u00F3n para el funcionamiento correcto de la encuesta");
                }
  
            
                $('#form').on('submit', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    for(var i=0;i<preguntas.length;i++){
                        var temp="";
                        if($('input[name=rq'+(i+1)+']:checked').val()==undefined){
                            alert('Favor de contestar todas la preguntas');
                            $('input[name=rq'+(i+1)+']').focus();
                            return false;
                        }else{
                            temp=$('input[name=rq'+(i+1)+']:checked').val();
                        }
                        respuestas.push(temp);
                        resultado+=preguntas[i]+": "+temp+"\\n";    
                    }
 
                    var parametros=[id,preguntas,respuestas,resultado];
                    
                    $.ajax({
                        cache:false,
                        type: "post",
                        url: urlSugar + "/rest/v10/customSurvey",
                        data: {parametros:parametros}
    
                    });
    
                    alert("Encuesta enviada,Gracias!......");
                    var popup = window.open(location, '_self', '');
                    popup.close();


                    
                });
        </script>
    </body>
</html>
EOF;

//echo $body; //version 1 con procesamiento de datos mediante metodo POST, este caso se utiliza si el el cuerpo del mail va la encuesta
echo $bodyv2;

?>
