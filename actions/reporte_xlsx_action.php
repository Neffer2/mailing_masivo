<?php 
include '../conexion.php';
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
 		$sql = "SELECT * FROM clientes WHERE 1";
 		DataExcel($conexion,$sql);
	}


	function DataExcel ($conexion,$sql){
 			
 	
 			$spread = new Spreadsheet();

			//Settear todas las columnas en AutoSize
			$spread->getActiveSheet()
	            ->getColumnDimension('A')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('B')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('C')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('D')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('E')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('F')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('G')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('H')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('I')
	            ->setAutoSize(true);
			$spread->getActiveSheet()
	            ->getColumnDimension('J')
	            ->setAutoSize(true);
	        $spread->getActiveSheet()
	            ->getColumnDimension('K')
	            ->setAutoSize(true);
	        $spread->getActiveSheet()
	            ->getColumnDimension('L')
	            ->setAutoSize(true);
	        $spread->getActiveSheet()
	            ->getColumnDimension('M')
	            ->setAutoSize(true);

	        //Alingmnet and font BOLD
            $spread->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('G1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('H1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('I1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('J1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('K1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('L1')->getFont()->setBold(true);
            $spread->getActiveSheet()->getStyle('M1')->getFont()->setBold(true);
        	// Alingment
            $spread->getActiveSheet()->getStyle('A1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('B1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
		    $spread->getActiveSheet()->getStyle('C1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('D1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('E1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
		    $spread->getActiveSheet()->getStyle('F1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('G1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('H1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
		    $spread->getActiveSheet()->getStyle('I1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('J1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('K1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
		    $spread->getActiveSheet()->getStyle('L1')
			    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
		    $spread->getActiveSheet()->getStyle('M1')
		    	->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

	    	// saltos de linea primera fila
		    $spread->setActiveSheetIndex(0)->getStyle('H1')->getAlignment()->setWrapText(true);
		    $spread->setActiveSheetIndex(0)->getStyle('I1')->getAlignment()->setWrapText(true);
		    $spread->setActiveSheetIndex(0)->getStyle('J1')->getAlignment()->setWrapText(true);
		    $spread->setActiveSheetIndex(0)->getStyle('K1')->getAlignment()->setWrapText(true);
		    $spread->setActiveSheetIndex(0)->getStyle('L1')->getAlignment()->setWrapText(true);
		    $spread->setActiveSheetIndex(0)->getStyle('M1')->getAlignment()->setWrapText(true);
	    	// Titulos primera fila 
	    	$spread->setActiveSheetIndex(0)
			    ->setCellValue('A1', 'Codigo')
			    ->setCellValue('B1', 'Nombre')
			    ->setCellValue('C1', 'Identificacion')
			    ->setCellValue('D1', 'Email')
			    ->setCellValue('E1', 'Telefono')
			    ->setCellValue('F1', 'Sector')
			    ->setCellValue('G1', 'Barrio')
			    ->setCellValue('H1', 'Direccion')
			    ->setCellValue('I1', "Codigo_usuario")
			    ->setCellValue('J1', "Envio_factura")
			    ->setCellValue('K1', "Solicitud")
			    ->setCellValue('L1', "Fecha_creacion")
			    ->setCellValue('M1', "Ultima_modificacion");


	    		$currentContenRow = 2;
			if ($conexion->query($sql) == TRUE){
					foreach($conexion-> query($sql) as $row){

						//content aling
						$spread->getActiveSheet()->getStyle('A'.$currentContenRow)
					    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
					    $spread->getActiveSheet()->getStyle('B'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('C'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('D'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('E'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
					    $spread->getActiveSheet()->getStyle('F'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('G'.$currentContenRow)
					    	->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
						$spread->getActiveSheet()->getStyle('H'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
					    $spread->getActiveSheet()->getStyle('I'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('J'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('K'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
					    $spread->getActiveSheet()->getStyle('L'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	
					    $spread->getActiveSheet()->getStyle('M'.$currentContenRow)
						    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
						
						//inserta un fila depues de la fila actual (currentContenRow + 1)
						$spread->getActiveSheet()->insertNewRowBefore($currentContenRow + 1,1);
						$spread->getActiveSheet()
						    ->setCellValue('A'.$currentContenRow, $row['id'])
						    ->setCellValue('B'.$currentContenRow, $row['nombre'])
						    ->setCellValue('C'.$currentContenRow, $row['identificacion'])
						    ->setCellValue('D'.$currentContenRow, $row['email'])
						    ->setCellValue('E'.$currentContenRow, $row['telefono'])
						    ->setCellValue('F'.$currentContenRow, $row['sector'])
						    ->setCellValue('G'.$currentContenRow, $row['barrio'])
						    ->setCellValue('H'.$currentContenRow, $row['direccion'])
						    ->setCellValue('I'.$currentContenRow, $row['codigo_usuario'])
						    ->setCellValue('J'.$currentContenRow, $row['envio_factura'])
						    ->setCellValue('K'.$currentContenRow, $row['solicitud'])
						    ->setCellValue('L'.$currentContenRow, $row['fecha_creacion'])
						    ->setCellValue('M'.$currentContenRow, $row['ultima_modificacion']);
	    					$currentContenRow++;   
					}
			}else {echo "Error: " . $sql . "<br>" . $conexion->error;}

		    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="Reporte.Xlsx"');
			header('Cache-Control: max-age=0');
	 
			$writer = IOFactory::createWriter($spread, 'Xlsx');
			$writer->save('php://output');
			exit;
 		}
?>
