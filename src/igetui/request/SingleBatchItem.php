<?php
/**
 * Created by PhpStorm.
 * User: snail
 * Date: 2018/10/12
 * Time: 下午4:18
 */

namespace GeTui\igetui\request;

use GeTui\protobuf\PBMessage;
use GeTui\protobuf\type\PBInt;
use GeTui\protobuf\type\PBString;

class SingleBatchItem extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = PBInt::class;
        $this->values["1"] = "";
        $this->fields["2"] = PBString::class;
        $this->values["2"] = "";
    }
    function seqId()
    {
        return $this->_get_value("1");
    }
    function set_seqId($value)
    {
        return $this->_set_value("1", $value);
    }
    function data()
    {
        return $this->_get_value("2");
    }
    function set_data($value)
    {
        return $this->_set_value("2", $value);
    }
}
