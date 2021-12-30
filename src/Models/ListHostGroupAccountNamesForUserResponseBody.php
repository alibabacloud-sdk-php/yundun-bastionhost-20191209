<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupAccountNamesForUserResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $hostAccountNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = $this->hostAccountNames;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupAccountNamesForUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = $map['HostAccountNames'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}