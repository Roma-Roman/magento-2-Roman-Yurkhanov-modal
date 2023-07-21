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

namespace RomanYurkhanov\Modal\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\UrlInterface;

class Config
{
    private ScopeConfigInterface $scopeConfig;
    private UrlInterface $urlBuilder;
    private const CONFIG_MODAL_TIMEOUT = 'romanyurkhanov_modal/general/modal_timeout';
    private const CONFIG_MODAL_LOGO_SRC = 'romanyurkhanov_modal/general/modal_logo_src';
    private const CONFIG_MODAL_TITLE = 'romanyurkhanov_modal/general/modal_title';
    private const CONFIG_MODAL_MESSAGE = 'romanyurkhanov_modal/general/modal_message';
    private const CONFIG_MODAL_CTA_TITLE = 'romanyurkhanov_modal/general/modal_cta_title';
    private const CONFIG_MODAL_CTA_URL = 'romanyurkhanov_modal/general/modal_cta_url';

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        UrlInterface         $urlBuilder
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->urlBuilder = $urlBuilder;
    }

    public function getModalTimeout()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MODAL_TIMEOUT,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getModalLogoSrc()
    {
        $folderName = \RomanYurkhanov\Modal\Model\Config\Backend\Image\Logo::UPLOAD_DIR;
        $storeLogoPath = $this->scopeConfig->getValue(
            self::CONFIG_MODAL_LOGO_SRC,
            ScopeInterface::SCOPE_STORE
        );
        if (empty($storeLogoPath)) {
            $logoUrl = '';
        } else {
            $path = $folderName . '/' . $storeLogoPath;
            $logoUrl = $this->urlBuilder
                    ->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $path;
        }
        return $logoUrl;
    }

    public function getModalTitle()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MODAL_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getModalMessage()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MODAL_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getModalCtaTitle()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MODAL_CTA_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getModalCtaUrl()
    {
        return $this->scopeConfig->getValue(
            self::CONFIG_MODAL_CTA_URL,
            ScopeInterface::SCOPE_STORE
        );
    }
}
