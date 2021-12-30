<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToHostShareKeyResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $hostAccountId;

    /**
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code'           => 'Code',
        'hostAccountId'  => 'HostAccountId',
        'hostShareKeyId' => 'HostShareKeyId',
        'message'        => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->hostAccountId) {
            $res['HostAccountId'] = $this->hostAccountId;
        }
        if (null !== $this->hostShareKeyId) {
            $res['HostShareKeyId'] = $this->hostShareKeyId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HostAccountId'])) {
            $model->hostAccountId = $map['HostAccountId'];
        }
        if (isset($map['HostShareKeyId'])) {
            $model->hostShareKeyId = $map['HostShareKeyId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}