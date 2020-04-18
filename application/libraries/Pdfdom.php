<?php
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Pdfdom extends Dompdf    
{
public function __construct()
    {
    parent::__construct();      
    $dompdf = new Dompdf(); 
    }
}
?>