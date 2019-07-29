<?php
namespace Custom\Logger\Handler;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Custom extends Base
{
    protected $fileName = '/proc/self/fd/2';
    protected $loggerType = Logger::DEBUG;
}
