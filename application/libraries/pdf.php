<?php if( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
   


    /*define( __DIR__ , base_url().'application/libraries/tcpdf' );*/
    require_once dirname(__FILE__) .'/tcpdf/tcpdf.php';

    
    class Pdf extends TCPDF
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
            parent::setPrintHeader( false );
            parent::setPrintFooter( false );

            //colocar auto page breaks
            parent::SetAutoPageBreak( true , PDF_MARGIN_BOTTOM );
            
            //colocamos el factor de escala para las imagenes
            parent::setImageScale( PDF_IMAGE_SCALE_RATIO );
            
            //oolocamos 
            //parent::setLanguageArray( $l );
            
            //colocamos fuente
            parent::SetFont( 'helvetica' , '' , 10 );

            // agregamos una pagina
            parent::AddPage();
    	}
    }
/// EOF Pdf