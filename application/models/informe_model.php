<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Informe_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->insert('tinforme', $data);
            
            return $this->db->insert_id();
        }
        
        public function actualizar($data)
        {
            $idinforme = $data['idinforme'];
            unset($data['idinforme']);
            
            $this->db->where('idinforme', $idinforme);
            $this->db->update('tinforme', $data); 
            
            return $this->db->affected_rows();
        }
        
        public function obtener($aData)
        {
            $this->db->select('*');
            $this->db->from('tinforme');
            $this->db->where($aData);
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
        
        public function obtenerResultados()
        {   
            $this->db->select_max('idinforme');
            $this->db->from('tinforme');
            $this->db->where('idalumno', $this->session->userdata('idalumno'));
            $aResult = $this->db->get()->result_array();
            $aResult = array_shift($aResult);
            
            $maxIdInforme = $aResult['idinforme'];
            /*
            $this->db->select('
                tsubfactor.idsubfactor,
                tinfresp.idrespuesta,
                count(tinfresp.idrespuesta) as contador
            ');
            $this->db->from('tinfresp');
            $this->db->join('tpregunta', 'tpregunta.idpregunta = tinfresp.idpregunta', 'right');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tpregunta.idsubfactor');
            $this->db->where('tinfresp.idinforme', $maxIdInforme);
            $this->db->group_by(array("tsubfactor.idsubfactor","tinfresp.idrespuesta"));
            $this->db->order_by('idsubfactor, idrespuesta');
            
            $aResult = $this->db->get()->result_array();
            */
            //var_dump($aResult);
            //die;
            /*
            $this->db->select('
                tpregresp.idpregunta,
                tpregresp.idrespuesta,
                tpregunta.idsubfactor,
                (select count(*) 
                 from tinfresp 
                 where tinfresp.idpregunta = tpregresp.idpregunta 
                    and tinfresp.idrespuesta = tpregresp.idrespuesta
                    and tinfresp.idinforme ='.$maxIdInforme.'
                 ) as contador
            ');
            $this->db->from('tpregresp');
            $this->db->join('tpregunta', 'tpregunta.idpregunta = tpregresp.idpregunta');
            $this->db->order_by('idsubfactor');
            
            $aResult = $this->db->get()->result_array();
            */
            $this->db->select('
                tpregunta.idsubfactor,
                tpregresp.idrespuesta,
                (select count(*) 
                 from tinfresp 
                 join tpregunta as tpreg on tpreg.idpregunta = tinfresp.idpregunta
                 where tpreg.idsubfactor = tpregunta.idsubfactor 
                    and tinfresp.idrespuesta = tpregresp.idrespuesta
                    and tinfresp.idinforme ='.$maxIdInforme.'
                 ) as contador
            ');
            $this->db->from('tpregresp');
            $this->db->join('tpregunta', 'tpregunta.idpregunta = tpregresp.idpregunta');
            $this->db->group_by(array("tpregunta.idsubfactor","tpregresp.idrespuesta"));
            $this->db->order_by('idsubfactor, idrespuesta');
            
            $aResult = $this->db->get()->result_array();
            /*var_dump($aResult);
            var_dump(count($aResult));
            die;
            */
            $this->db->select('
           	    idsubfactor,
                idrespuesta,
                idresultrespcontador,
                idcombinacion,
                idresultado
            ');
            $this->db->from('tresultresp');
            $this->db->order_by('idsubfactor, idrespuesta');
            $aResultado = $this->db->get()->result_array();
            
            $aAux = array();
            foreach($aResultado as $aElem) {
                $aAux[$aElem['idcombinacion']][] = array(
                    'idsubfactor' => $aElem['idsubfactor'],
                    'idrespuesta' => $aElem['idrespuesta'],
                    'idresultrespcontador' => $aElem['idresultrespcontador'],
                    'idresultado' => $aElem['idresultado']
                );
            }
            
            $aAux2 = array();
            foreach($aAux as $aElem) {
                $aAux2[$aElem[0]['idsubfactor'].$aElem[0]['idrespuesta'].$aElem[0]['idresultrespcontador'].$aElem[1]['idrespuesta'].$aElem[1]['idresultrespcontador']] = $aElem[0]['idresultado'];
            }
            
            $aResultadosFinales = array();
            
            for ($i = 0; $i < count($aResult); $i += 3) {
                $var = $aResult[$i]['idsubfactor'].$aResult[$i]['idrespuesta'].$aResult[$i]['contador'].$aResult[$i+2]['idrespuesta'].$aResult[$i+2]['contador'];
                $aResultadosFinales[] = $aAux2[$var];
            }
            
            //var_dump($aResultadosFinales);
            //die;
            $this->db->select('
           	    idfactor,
                vcfactnombre
            ');
            $this->db->from('tfactor');
            $this->db->order_by('idfactor');
            $aFactor = $this->db->get()->result_array();
  
            $this->db->select('
                tresultado.idresultado,
           	    tresultado.vcresultinfobt,
                tresultado.vcresultsugprof,
                tresultado.vcresultejepot,
                tsubfactor.idsubfactor,
                tsubfactor.idfactor,
                tsubfactor.vcsubfactnombre
            ');
            $this->db->from('tresultado');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tresultado.idsubfactor');
            $this->db->order_by('idfactor', 'idsubfactor');
            $aDetalleResultado = $this->db->get()->result_array();
            
            $aSalida = array();
            foreach($aFactor as $elemFactor) {
                $aAux1 = array();
                $aAux1['titulo'] = $elemFactor['vcfactnombre'];
                $idFactor = $elemFactor['idfactor'];
                foreach($aResultadosFinales as $elemResultadosFinales) {
                    $aAux = array();
                    foreach($aDetalleResultado as $elemDetalleResultado){
                        if($elemResultadosFinales == $elemDetalleResultado['idresultado'] and $idFactor == $elemDetalleResultado['idfactor']) {
                            $aAux[] = $elemDetalleResultado;
                        }
                    }
                    if ((bool)$aAux) {
                        $aAux1['resultado'][] = $aAux;    
                    }
                }
                if ((bool)$aAux1) {
                    $aSalida[] = $aAux1;    
                }
            }
            //var_dump($aSalida[0]);
            //die;
            return $aSalida;
        }
    }
// EOF parentesco_model.php