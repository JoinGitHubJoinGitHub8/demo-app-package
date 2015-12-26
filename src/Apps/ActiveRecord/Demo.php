<?php

namespace Apps\ActiveRecord;

use Ffcms\Core\Arch\ActiveModel;

class Demo extends ActiveModel
{

    public function getText()
    {
        return $this->text;
    }
}