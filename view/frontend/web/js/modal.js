/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

define([
    'jquery',
    'Magento_Ui/js/modal/modal',
    'mage/url'
], function($, modal, url) {
    'use strict';
    return function () {
        // Modal
        if ($('#modal-block').length) {
            if (localStorage.getItem('romanyurkhanov_modal_shown') != 'hidden') {
                const modal_timeout = $('#modal-block').attr('data-timeout');
                const modal_cta_title = $('#modal-block').attr('data-cta-title');
                url.setBaseUrl(BASE_URL);
                const modal_cta_url = url.build($('#modal-block').attr('data-cta-url'));

                const options = {
                    type: 'popup',
                    responsive: false,
                    modalClass: 'modal-block',
                    buttons: [
                        {
                            text: $.mage.__('Don\'t show again'),
                            class: 'btn action secondary button-close-hide',
                            click: function () {
                                this.closeModal();
                                hideModal();
                            }
                        },
                        {
                            text: $.mage.__(modal_cta_title),
                            class: 'btn action primary button-cta',
                            click: function () {
                                window.location.href = modal_cta_url;
                                hideModal();
                            }
                        }
                    ]
                };

                const popup = modal(options, $('#modal-block'));

                // open modal after some time
                setTimeout(function(){
                    $('#modal-block').modal('openModal');
                },modal_timeout);

                // close modal for user
                function hideModal() {
                    localStorage.setItem('romanyurkhanov_modal_shown', 'hidden');
                }
            }
        }
    }
});
