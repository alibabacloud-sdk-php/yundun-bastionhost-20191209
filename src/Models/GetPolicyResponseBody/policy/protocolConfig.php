<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig\RDP;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig\SSH;
use AlibabaCloud\Tea\Model;

class protocolConfig extends Model
{
    /**
     * @description The configuration details of Remote Desktop Protocol (RDP) options.
     *
     * @var RDP
     */
    public $RDP;

    /**
     * @description The configuration details of SSH and SSH File Transfer Protocol (SFTP) options.
     *
     * @var SSH
     */
    public $SSH;
    protected $_name = [
        'RDP' => 'RDP',
        'SSH' => 'SSH',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RDP) {
            $res['RDP'] = null !== $this->RDP ? $this->RDP->toMap() : null;
        }
        if (null !== $this->SSH) {
            $res['SSH'] = null !== $this->SSH ? $this->SSH->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RDP'])) {
            $model->RDP = RDP::fromMap($map['RDP']);
        }
        if (isset($map['SSH'])) {
            $model->SSH = SSH::fromMap($map['SSH']);
        }

        return $model;
    }
}
