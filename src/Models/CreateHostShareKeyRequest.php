<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateHostShareKeyRequest extends Model
{
    /**
     * @description The name of the shared key that you want to create. The name can be a maximum of 128 characters in length.
     *
     * This parameter is required.
     * @example name
     *
     * @var string
     */
    public $hostShareKeyName;

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
     * @description The password of the private key. The value is a Base64-encoded string.
     *
     * @example *****
     *
     * @var string
     */
    public $passPhrase;

    /**
     * @description The private key. The value is a Base64-encoded string.
     *
     * This parameter is required.
     * @example ****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostShareKeyName' => 'HostShareKeyName',
        'instanceId'       => 'InstanceId',
        'passPhrase'       => 'PassPhrase',
        'privateKey'       => 'PrivateKey',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostShareKeyName) {
            $res['HostShareKeyName'] = $this->hostShareKeyName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHostShareKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostShareKeyName'])) {
            $model->hostShareKeyName = $map['HostShareKeyName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
