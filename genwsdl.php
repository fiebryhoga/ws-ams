<?php

require 'SalaryService.php';
require "vendor/autoload.php";

$class = 'SalaryService';

$serviceURL = "http://localhost/wsams/server.php";

$outputWSDLFile = "salary.wsdl";

$wsdlGenerator = new \PHP2WSDL\PHPClass2WSDL($class, $serviceURL);
$wsdlGenerator->generateWSDL();
$wsdlContent = $wsdlGenerator->dump();

file_put_contents($outputWSDLFile, $wsdlContent);

echo "Done";
