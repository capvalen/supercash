<?php
session_start();
/* Change to the correct path if you copy this example! */
require __DIR__ . '/vendor/mike42/escpos-php/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
/**
 * Assuming your printer is available at LPT1,
 * simpy instantiate a WindowsPrintConnector to it.
 *
 * When troubleshooting, make sure you can send it
 * data from the command-line first:
 *  echo "Hello World" > LPT1
 */
    $connector = new WindowsPrintConnector("smb://perucash-caja/TM-U220");
    /*$connector = new WindowsPrintConnector("smb://127.0.0.1/TM-U220");*/
try {
    
    // A FilePrintConnector will also work, but on non-Windows systems, writes
    // to an actual file called 'LPT1' rather than giving a useful error.
    // $connector = new FilePrintConnector("LPT1");
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("                PeruCash\n");
    $printer -> text("      Casa de Préstamos y Empeños\n");
	$printer -> text("           Articulo retirado\n");
	$printer -> text("28/11/2017 18:33 pm\n");
	$printer -> text("Artículo: Laptop Compaq 1.3ghz Negra\n");
	$printer -> text("Cliente: Machuca Espinoza, Anderson Froilan\n");
	$printer -> text("Monto: S/. 162.90\n");
	
	
    $printer -> text("       Gracias por tu preferencia\n");
    $printer -> cut();
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "No se pudo imprimir en la impresora: " . $e -> getMessage() . "\n";
}