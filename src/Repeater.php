<?php

namespace Tanthammar\TallForms;

use Illuminate\Support\Str;
use Tanthammar\TallForms\Traits\IsArrayField;

class Repeater extends BaseField
{
    use IsArrayField;

    public $type = 'array';
    public $array_sortable = false;
    public $align_label_top = true;
    public $allowed_in_repeater = false;
    public $allowed_in_keyval = false;

    public function sortable(): self
    {
        $this->array_sortable = true;
        return $this;
    }
}
