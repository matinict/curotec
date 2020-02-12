define([
    'jquery',
    'jquery/ui',
    'Magento_ConfigurableProduct/js/configurable'
], function($){

    $.widget('silvan.configurable', $.mage.configurable, {
        //code you want to override
    });

    return $.silvan.configurable;
});
