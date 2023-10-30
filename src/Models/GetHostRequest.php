<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class GetHostRequest extends Model
{
    /**
     * @description The protocol that is used to connect to the host. Valid values:
     *
     *   **SSH**
     *   **RDP**
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the host that you want to query. You can specify only one host ID.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostId'     => 'HostId',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
