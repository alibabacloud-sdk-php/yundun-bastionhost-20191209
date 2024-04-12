<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserGroupResponseBody\results;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 8
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code'              => 'Code',
        'databaseAccountId' => 'DatabaseAccountId',
        'message'           => 'Message',
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
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
