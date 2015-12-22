<?php if( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
   
require_once dirname(__FILE__) .'/tcpdf/tcpdf.php';

class Reporte extends TCPDF
{
    function __construct()
	  {
        parent::__construct( PDF_PAGE_ORIENTATION , PDF_UNIT , PDF_PAGE_FORMAT , true , 'UTF-8' , false );
        
        // poner la informacion del documento
        parent::SetCreator( PDF_CREATOR );
        parent::SetAuthor( 'MENTES MEJORANDO' );
        parent::SetTitle( 'IMPRESION PUBLICACION' );
        parent::SetSubject( 'IMPRESION DE PUBLICACION' );
        parent::SetKeywords( 'PDF' );
		
        parent::setPrintHeader( true );
        parent::setPrintFooter( true );
        
        // colocamos datos encezado por defecto
        parent::SetHeaderData( );//PDF_HEADER_LOGO , PDF_HEADER_LOGO_WIDTH , PDF_HEADER_TITLE , PDF_HEADER_STRING );
        
        
        // colocar fuente de cabecera y pie 
        parent::setHeaderFont( Array( PDF_FONT_NAME_MAIN , '' , 8 ) );
        parent::setFooterFont( Array( PDF_FONT_NAME_DATA , '' , PDF_FONT_SIZE_DATA ) );
        
        //colocar por defecto la fuente monospaced
        parent::SetDefaultMonospacedFont( PDF_FONT_MONOSPACED );
        parent::SetDisplayMode( 'real' );
        parent::setPageFormat( 'A4' );
        
        //colocar los margenes
        parent::SetMargins( PDF_MARGIN_LEFT , PDF_MARGIN_TOP , PDF_MARGIN_RIGHT );
        /*parent::SetHeaderMargin( PDF_MARGIN_HEADER );
        parent::SetFooterMargin( PDF_MARGIN_FOOTER );*/
        
        //colocar auto page breaks
        parent::SetAutoPageBreak( true , PDF_MARGIN_BOTTOM );
        
        //colocamos el factor de escala para las imagenes
        parent::setImageScale( PDF_IMAGE_SCALE_RATIO );
        
        //oolocamos 
        //parent::setLanguageArray( $l );
        
        //colocamos fuente
        parent::SetFont( 'helvetica' , '' , 10 );
        
        $tagvs = array('div' => array(0 => array('h' => '0', 'n' => 0), 1 => array('h' => 0, 'n' => 0)));
        parent::setHtmlVSpace($tagvs);	
        
        // agregamos una pagina
        //parent::AddPage();
	}
    
    //Page header
    public function Header() {
        // Set font
        $this->SetFont('helvetica', 'B', 12);
        // Title
        $this->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
        $this->Cell(0, 0, '', 0, 1, 'C', 0, '', 0);
        $this->Cell(0, 0, 'INFORME MENTES MEJORANDO', 0, 1, 'C', 0, '', 0);
        $this->Cell(0, 0, 'Programa de Potenciamiento Infantil Personalizado', 0, 1, 'C', 0, '', 1);
        // Logo
        $this->Image('./assets/img/logofundacionpass.jpg', 170, 5, 20, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }
    // Page footer
    public function Footer() {
        // Set font
        $this->SetFont('helvetica', 'I', 7);
        // Position at 15 mm from bottom
         
        $this->SetY(-20);
        $this->Cell(0, 0, '* MENTES MEJORANDO PREVENTIVO 1.3 no se responsabiliza del uso inapropiado o daños y/ o perjuicios a terceros, los resultados obtenidos', 0, 1, 'J', 0, '', 0);
        $this->Cell(0, 0, 'son de entera responsabilidad de quién ingresa los datos del alumno.', 0, 1, 'J', 0, '', 0);
        $this->Cell(0, 0, '* MENTES MEJORANDO TERAPEUTICO y MENTES MEJORANDO PREVENTIVO 1.3  son marcas registradas de FUNDACION P.A.S.S. Res. 211/13', 0, 1, 'J', 0, '', 0);
        $this->Cell(0, 0, 'protegidas por la Ley 24.481 de Patentes. Prohibida  la reproducción total o parcial. Todos los derechos reservados. 2015', 0, 1, 'J', 0, '', 0);
        // Position at 15 mm from bottom
        $this->SetY(-10);
        // Page number
        $this->Cell(0, 10, 'Pag '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
/// EOF Pdf