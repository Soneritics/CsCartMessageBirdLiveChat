<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_soneritics_messagebirdchat_isConfigured()
{
    return fn_soneritics_messagebirdchat_getWidgetId() !== '';
}

function fn_soneritics_messagebirdchat_getWidgetId()
{
    return \Tygh\Registry::get('addons.soneritics_messagebirdchat.widgetid');
}
