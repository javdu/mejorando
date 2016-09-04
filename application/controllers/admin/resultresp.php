<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ResultResp extends Ext_Controller
{
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/Factor_model', 'factorModel');
       $this->load->model('admin/Subfactor_model', 'subfactorModel');
       $this->load->model('ResultResp_model', 'resultrespModel');
       $this->load->model('Respuesta_model', 'respuestaModel');
       $this->load->model('Resultado_model', 'resultadoModel');
    }
    
    public function index($idsubfactor = 0, $idencuesta = 0)
    {
        
        $aResultado = $this->resultadoModel->obtenerTodosElementos($idsubfactor);
        $aResultResp = $this->resultrespModel->obtenerTodos($idsubfactor);
        $aAuxList = array();
        $aAuxElem = array();
        
        foreach ($aResultado AS $aResultElem) {
            $aAuxElem = $aResultElem;
            foreach ($aResultResp AS $aResultRespElem) {
                if ($aResultElem['idresultado'] == $aResultRespElem['idresultado']) {
                    $aAuxElem['respuestas'][] = $aResultRespElem;
                }
            }
            $aAuxList[] = $aAuxElem;
            $aAuxElem = array();
        }
        
        $aData = array(
            'idsubfactor' => $idsubfactor,
            'idencuesta' => $idencuesta,
            'aResultResp' => $aAuxList
        );
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/lstresultresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function index2($idsubfactor = 0)
	{
	   
        $aResultResp = $this->resultrespModel->obtenerTodos($idsubfactor);
        $tam = count($aResultResp);
        $aAux = array();
        $aAuxList = array();
        $aElem = $aResultResp[0];
        $idCombinacion = $aElem['idcombinacion'];
        $aResultados = array();
        $aElemResult = array();
        $aElemResult['vcresultinfobt'] = $aElem['vcresultinfobt'];
        $aElemResult['vcresultsugprof'] = $aElem['vcresultsugprof'];
        $aElemResult['vcresultejepot'] = $aElem['vcresultejepot'];
        $aElemResult['idcombinacion'] = $aElem['idcombinacion'];
        $aElemResult['idresultado'] = $aElem['idresultado'];
        foreach($aResultResp AS $aElem) {
            if ($idCombinacion == $aElem['idcombinacion']) {
                $aAux[] = $aElem;
                $aElemResult['opciones'][] = $aElem;
            } else {
                $aAuxList[] = $aAux;
                $aResultados[] = $aElemResult;
                $aAux = array();
                $aElemResult = array();
                $idCombinacion = $aElem['idcombinacion'];
                $aElemResult['vcresultinfobt'] = $aElem['vcresultinfobt'];
                $aElemResult['vcresultsugprof'] = $aElem['vcresultsugprof'];
                $aElemResult['vcresultejepot'] = $aElem['vcresultejepot'];
                $aElemResult['idcombinacion'] = $aElem['idcombinacion'];
                $aElemResult['idresultado'] = $aElem['idresultado'];
                $aElemResult['opciones'][] = $aElem;
            }
        }
        $aResultados[] = $aElemResult;
        
        $aData = array(
            'idsubfactor' => $idsubfactor,
            'aResultResp' => $aAuxList,
            'aResultados' => $aResultados
        );
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $content = $this->load->view('admin/lstresultresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function iniRegResultados()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idresultado' => $this->input->post('idresultado'),
                'vcresultestninio' => $this->input->post('vcresultestninio'),
                'vcresultinfobt' => $this->input->post('vcresultinfobt'),
                'vcresultsugprof' => $this->input->post('vcresultsugprof'),
                'vcresultejepot' => $this->input->post('vcresultejepot'),
                'vcresultorientadult' => $this->input->post('vcresultorientadult'),
                'idsubfactor' => $this->input->post('idsubfactor'),
                'boresultestado' => 1
            );
        } else {
            $this->aReg = array(
                'idresultado' => 0,
                'vcresultestninio' => null,
                'vcresultinfobt' => null,
                'vcresultsugprof' => null,
                'vcresultejepot' => null,
                'vcresultorientadult' => null,
                'idsubfactor' => null,
                'boresultestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function iniRegResultResp()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idresultresp' => $this->input->post('idresultado'),
                'idresultrespcontador' => $this->input->post('vcresultestninio'),
                'idsubfactor' => $this->input->post('vcresultinfobt'),
                'idresultado' => $this->input->post('vcresultejepot'),
                'idrespuesta' => $this->input->post('vcresultorientadult'),
                'idcombinacion' => $this->input->post('idsubfactor'),
                'boresultrespestado' => 1
            );
        } else {
            $this->aReg = array(
                'idresultresp' => $this->input->post('idresultado'),
                'idresultrespcontador' => $this->input->post('vcresultestninio'),
                'idsubfactor' => $this->input->post('vcresultinfobt'),
                'idresultado' => $this->input->post('vcresultejepot'),
                'idrespuesta' => $this->input->post('vcresultorientadult'),
                'idcombinacion' => $this->input->post('idsubfactor'),
                'boresultrespestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function addRespuesta()
    {
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        $aRespuesta = array('' => 'Seleccionar') + $aRespuesta;
        $select =  form_dropdown('idrespuesta[]', $aRespuesta, null, array('class' => 'form-control'));
echo <<<EOT
<div class="box-respuestaa form-group col-xs-12">
    <label for="idresultrespcontador">Contador</label>
    <input type="text" class="form-control" id="idresultrespcontador" name="idresultrespcontador[]" value="" placeholder="Contador">
    <label>Respuesta</label>
    {$select}
    <br />
    <a class="eliminar-respuesta btn btn-default">Eliminar respuesta</a>
    <hr />
</div>
<script type="text/javascript">
	$(document).ready(function(){
        $( ".eliminar-respuesta" ).click(function( event ) {
          event.preventDefault();
          $(this).parent(".box-respuestaa").remove();
        });
    });
</script>
EOT;
    }
    
    public function formulario($idsubfactor = 0, $idresultado = 0, $idencuesta = 0)
    {
        if ($idresultado > 0) {
            $aResultado = $this->resultadoModel->obtenerUno($idresultado);
        } else {
            $aResultado = $this->iniRegResultados();
        }
        
        $aRespuestas = $this->resultrespModel->obtenerRespuestas($idresultado);
        
        $aData = array(
            'aReg' => $aResultado,
            'aRespuestas' => $aRespuestas,
            'accion' => 'Nuevo',
            'idsubfactor' => $idsubfactor,
            'idencuesta' => $idencuesta,
            'aRespuesta' => $this->respuestaModel->obtenerTodos()
        );

        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/frmresultresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function baja($idsubfactor = 0, $idresultado = 0, $idencuesta = 0)
    {
        $aResultado = $this->resultadoModel->obtenerUno($idresultado);
        $aRespuestas = $this->resultrespModel->obtenerRespuestas($idresultado);
        
        $aData = array(
            'aReg' => $aResultado,
            'aRespuestas' => $aRespuestas,
            'accion' => 'Eliminar',
            'idsubfactor' => $idsubfactor,
            'idencuesta' => $idencuesta,
            'aRespuesta' => $this->respuestaModel->obtenerTodos()
        );

        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/eliminarresultresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar($idsubfactor = 0, $idresultado = 0, $idencuesta = 0)
    {
        $aReg = $this->resultadoModel->eliminar($idresultado);
        $aReg = $this->resultrespModel->eliminar($idresultado);
        
        $this->index($idsubfactor, $idencuesta);
    }

	public function index1($idpregunta = 0)
	{
	    $aReg = $this->iniReg();
        $aSubFactor = $this->subfactorModel->obtenerTodos();
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        $aResultado = $this->resultadoModel->obtenerTodos();
        $aCombinacion = $this->resultrespModel->obtenerMaxCombinacion();
        $aReg['idcombinacion'] = $aCombinacion['idcombinacion'] + 1;
        $aData = array(
            'aSubFactor' => $aSubFactor,
            'aResultado' => $aResultado,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg
        );
        $header = '';
        $content = $this->load->view('admin/resultresp_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content));
	}
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idresultrespcontador' => $this->input->post('idresultrespcontador'),
                'idresultrespcontador2' => $this->input->post('idresultrespcontador2'),
                'idsubfactor' => $this->input->post('idsubfactor'),
                'boresultrespestado' => 1,
                'idresultado' => $this->input->post('idresultado'),
                'idrespuesta' => $this->input->post('idrespuesta'),
                'idrespuesta2' => $this->input->post('idrespuesta2'),
                'idcombinacion' => $this->input->post('idcombinacion')
            );
        } else {
            $this->aReg = array(
                'idresultrespcontador' => null,
                'idresultrespcontador2' => null,
                'idsubfactor' => null,
                'boresultrespestado' => 1,
                'idresultado' => null,
                'idrespuesta' => null,
                'idrespuesta2' => null,
                'idcombinacion' => null,
            );
        }
        
        return $this->aReg;
    }
    
    public function guardar()
    {
        $aReg = $this->iniRegResultados(); 
        $aResultRespCont = $this->input->post('idresultrespcontador');
        $aResp = $this->input->post('idrespuesta');
        $idresultado = $this->input->post('idresultado');
        if ($idresultado == 0) {
            $idresultado = $this->resultadoModel->guardar($aReg);
            $tam = count($aResp);
            
            $i = 0;
            while ($i < $tam) {
                $idresultresp = $this->resultrespModel->guardar(
                    array(
                        'idrespuesta' => $aResp[$i],
                        'idresultrespcontador' => $aResultRespCont[$i],
                        'idsubfactor' => $aReg['idsubfactor'],
                        'idresultado' => $idresultado,
                        'idcombinacion' => $this->input->post('idcombinacion'),
                        'boresultrespestado' => 1
                    )
                );
                $i++;
            }
        } else {
            $idresultado = $this->resultadoModel->guardar($aReg);

            $tam = count($aResp);
            $i = 0;

            $this->resultrespModel->eliminarResulResp($idresultado);
            while ($i < $tam) {
                $idresultado = $this->resultrespModel->guardar(
                    array(
                        'idrespuesta' => $aResp[$i],
                        'idresultrespcontador' => $aResultRespCont[$i],
                        'idsubfactor' => $aReg['idsubfactor'],
                        'idresultado' => $aReg['idresultado'],
                        'idcombinacion' => $this->input->post('idcombinacion'),
                        'boresultrespestado' => 1
                    )
                );
                $i++;
                
            }
        }
        
        
        $this->index($aReg['idsubfactor'], $this->input->post('idencuesta'));
    }
    
    public function guardar1()
    {
        $aReg = $this->iniReg();
        $aData = array(
            'idresultrespcontador' => $aReg['idresultrespcontador'],
            'idsubfactor' => $aReg['idsubfactor'],
            'boresultrespestado' => $aReg['boresultrespestado'],
            'idresultado' => $aReg['idresultado'],
            'idrespuesta' => $aReg['idrespuesta'],
            'idcombinacion' => $aReg['idcombinacion']
        );
        $idresultresp = $this->resultrespModel->guardar($aData);
        $aData = array(
            'idresultrespcontador' => $aReg['idresultrespcontador2'],
            'idsubfactor' => $aReg['idsubfactor'],
            'boresultrespestado' => $aReg['boresultrespestado'],
            'idresultado' => $aReg['idresultado'],
            'idrespuesta' => $aReg['idrespuesta2'],
            'idcombinacion' => $aReg['idcombinacion']
        );
        $idresultresp = $this->resultrespModel->guardar($aData);
        
        $aCombinacion = $this->resultrespModel->obtenerMaxCombinacion();
        $aReg['idcombinacion'] = $aCombinacion['idcombinacion'] + 1;
        
        $aSubFactor = $this->subfactorModel->obtenerTodos();
        $aResultado = $this->resultadoModel->obtenerTodos();
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        $aData = array(
            'aSubFactor' => $aSubFactor,
            'aResultado' => $aResultado,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg
        );
        
        $header = '';
        $content = $this->load->view('admin/resultresp_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content));
    }
}