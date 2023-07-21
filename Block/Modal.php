<?php
/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

namespace RomanYurkhanov\Modal\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use RomanYurkhanov\Modal\Model\Config;

class Modal extends Template
{
    private Config $config;

    public function __construct(
        Context $context,
        Config  $config,
        array   $data = []
    )
    {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    public function getModalTimeout()
    {
        return $this->config->getModalTimeout();
    }

    public function getModalLogoSrc()
    {
        return $this->config->getModalLogoSrc();
    }

    public function getModalTitle()
    {
        return $this->config->getModalTitle();
    }

    public function getModalMessage()
    {
        return $this->config->getModalMessage();
    }

    public function getModalCtaTitle()
    {
        return $this->config->getModalCtaTitle();
    }

    public function getModalCtaUrl()
    {
        return $this->config->getModalCtaUrl();
    }
}
