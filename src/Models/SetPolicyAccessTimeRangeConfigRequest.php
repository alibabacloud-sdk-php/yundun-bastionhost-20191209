<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest\accessTimeRangeConfig;
use AlibabaCloud\Tea\Model;

class SetPolicyAccessTimeRangeConfigRequest extends Model
{
    /**
     * @description The logon period limits.
     *
     * This parameter is required.
     * @var accessTimeRangeConfig
     */
    public $accessTimeRangeConfig;

    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The control policy ID.
     *
     * This parameter is required.
     * @example 13
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessTimeRangeConfig' => 'AccessTimeRangeConfig',
        'instanceId'            => 'InstanceId',
        'policyId'              => 'PolicyId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTimeRangeConfig) {
            $res['AccessTimeRangeConfig'] = null !== $this->accessTimeRangeConfig ? $this->accessTimeRangeConfig->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPolicyAccessTimeRangeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTimeRangeConfig'])) {
            $model->accessTimeRangeConfig = accessTimeRangeConfig::fromMap($map['AccessTimeRangeConfig']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
