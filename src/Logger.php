<?php

namespace NetSuite;

class Logger
{
    private $path;

    /**
     * Logger constructor.
     *
     * @param null $path
     */
    public function __construct($path = null)
    {
        $this->path = $path ?: __DIR__.'/../logs';
    }

    /**
     * Log the request body to a file
     *
     * @param string $message   The xml body to log
     * @param string $operation The operation being logged
     */
    public function logRequest($message, $operation)
    {
        $this->doLog($message, $operation, 'request');
    }

    /**
     * Log the response body to a file
     *
     * @param string $message   The xml body to log
     * @param string $operation The operation being logged
     */
    public function logResponse($message, $operation)
    {
        $this->doLog($message, $operation, 'response');
    }

    /**
     * @param string $message   The xml body to log
     * @param string $operation The operation being logged
     * @param string $type      Either request or response
     */
    protected function doLog($message, $operation, $type)
    {
        if (file_exists($this->path)) {
            $fullPath = "%s/ryanwinchester-netsuite-php-%s-%s-%s.xml";
            $fullPath = sprintf($fullPath, $this->path, date("Ymd.His"), $operation, $type);
            $handle   = fopen($fullPath, 'w');
            fwrite($handle, $message);
            fclose($handle);
        }
    }

    /**
     * Log the last soap call as request and response XML files.
     *
     * @param \SoapClient $client
     * @param string $operation
     */
    public function logSoapCall($client, $operation)
    {
        if (file_exists($this->path)) {
            $fileName = "ryanwinchester-netsuite-php-" . date("Ymd.His") . "-" . $operation;
            $logFile = $this->path ."/". $fileName;

            // REQUEST
            $request = $logFile . "-request.xml";
            $Handle = fopen($request, 'w');
            $Data = $client->__getLastRequest();
            $Data = cleanUpNamespaces($Data);

            $xml = simplexml_load_string($Data, 'SimpleXMLElement', LIBXML_NOCDATA);

            $privateFieldXpaths = array(
                '//password',
                '//password2',
                '//currentPassword',
                '//newPassword',
                '//newPassword2',
                '//ccNumber',
                '//ccSecurityCode',
                '//socialSecurityNumber',
            );

            $privateFields = $xml->xpath(implode(" | ", $privateFieldXpaths));

            foreach ($privateFields as &$field) {
                $field[0] = "[Content Removed for Security Reasons]";
            }

            $stringCustomFields = $xml->xpath("//customField[@xsitype='StringCustomFieldRef']");

            foreach ($stringCustomFields as $field) {
                $field->value = "[Content Removed for Security Reasons]";
            }

            $xml_string = str_replace('xsitype', 'xsi:type', $xml->asXML());

            fwrite($Handle, $xml_string);
            fclose($Handle);

            // RESPONSE
            $response = $logFile . "-response.xml";
            $Handle = fopen($response, 'w');
            $Data = $client->__getLastResponse();

            fwrite($Handle, $Data);
            fclose($Handle);
        }
    }
}
