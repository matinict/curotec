<?php

namespace Curotec\NoOrderAlert\Cron;

use Curotec\NoOrderAlert\Model\AlertFactory;
//use Curotec\NoOrderAlert\Model\Config;
class AddNewAlert {
    private $alertFactory;
    public function __construct(AlertFactory $alertFactory) {
        $this->alertFactory = $alertFactory;
    }
    public function execute(){
        $this->alertFactory->create()
            ->setTitle('Scheduled Alert')
            ->setSummary('Scheduled Alert setSummary ' . date('Ymd'))
            ->setDescription('Scheduled Alert setDescription ' . date('Ymd'))
            ->save();
    }
}
