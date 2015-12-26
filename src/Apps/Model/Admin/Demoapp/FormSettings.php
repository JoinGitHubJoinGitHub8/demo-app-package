<?php

namespace Apps\Model\Admin\Demoapp;

use Ffcms\Core\Arch\Model;

class FormSettings extends Model
{
    public $textCfg;
    public $intCfg;
    public $boolCfg;

    private $_configs;

    /**
     * FormSettings constructor. Pass configs from controller to local property
     * @param array $configs
     */
    public function __construct(array $configs)
    {
        $this->_configs = $configs;
        parent::__construct();
    }

    /**
     * Parse defaults configs to model properties
     */
    public function before()
    {
        foreach ($this->_configs as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    /**
     * Some validation rules
     * @return array
     */
    public function rules()
    {
        return [
            [['textCfg', 'intCfg'], 'required'],
            ['boolCfg', 'used'],
            ['intCfg', 'int'],
            ['boolCfg', 'boolean']
        ];
    }

    /**
     * Labels for display
     * @return array
     */
    public function labels()
    {
        return [
            'textCfg' => 'Text config',
            'intCfg' => 'Integer config',
            'boolCfg' => 'Boolean config'
        ];
    }


}