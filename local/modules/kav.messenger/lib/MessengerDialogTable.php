<?php
namespace Kav\Messenger\Lib;

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\Validator;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class MessengerDialogTable extends DataManager
{
    public static function getTableName()
    {
        return 'kav_messengerdialog';
    }

    public static function getMap()
    {
        return array(
            new IntegerField('id', array(
                'autocomplete' => true,
                'primary' => true,
                'title' => Loc::getMessage('ID'),
            )),
            new IntegerField('user_id', array(
                'title' => Loc::getMessage('ID'),
            )),
            new StringField('autor', array(
                'required' => false,
                'title' => Loc::getMessage('AUTOR'),
//                'default_value' => function () {
//                    return Loc::getMessage('HOST_DEFAULT_VALUE');
//                },
//                'validation' => function () {
//                    return array(
//                        new Validator\Length(null, 255),
//                    );
//                },
            )),
            new StringField('message', array(
                'required' => false,
                'title' => Loc::getMessage('MESSAGE'),
//                'fetch_data_modification' => function () {
//                    return array(
//                        function ($value) {
//                            if (strlen($value)) {
//                                return explode(',', $value);
//                            }
//                        },
//                    );
//                },
//                'save_data_modification' => function () {
//                    return array(
//                        function ($value) {
//                            if (is_array($value)) {
//                                $value = array_filter($value, 'intval');
//
//                                return implode(',', $value);
//                            }
//                        },
//                    );
//                },
            )),
//            new StringField('USERNAME', array(
//                'required' => false,
//                'title' => Loc::getMessage('USERNAME'),
//            )),
//            new StringField('PASSWORD', array(
//                'required' => false,
//                'title' => Loc::getMessage('PASSWORD'),
//            )),
//            new StringField('SECURE', array(
//                'required' => false,
//                'values' => array('none', 'ssl', 'tls'),
//                'title' => Loc::getMessage('SECURE'),
//                'default_value' => function () {
//                    return Loc::getMessage('SECURE_DEFAULT_VALUE');
//                },
//            )),
//            new IntegerField('PORT', array(
//                'required' => false,
//                'title' => Loc::getMessage('PORT'),
//                'default_value' => function () {
//                    return Loc::getMessage('PORT_DEFAULT_VALUE');
//                },
//            )),
//            new StringField('FROM_MAIL', array(
//                'required' => false,
//                'title' => Loc::getMessage('FROM_MAIL'),
//            )),
//            new StringField('FROM_NAME', array(
//                'required' => false,
//                'title' => Loc::getMessage('FROM_NAME'),
//            )),
        );
    }
}
