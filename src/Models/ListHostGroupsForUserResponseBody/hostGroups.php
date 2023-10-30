<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostGroupsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @description ListHostGroupsForUser
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description WB662865
     *
     * @example １
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example group
     *
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'comment'       => 'Comment',
        'hostGroupId'   => 'HostGroupId',
        'hostGroupName' => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
