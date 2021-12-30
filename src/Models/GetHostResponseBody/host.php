<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host\protocols;
use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @var string
     */
    public $activeAddressType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hostPrivateAddress;

    /**
     * @var string
     */
    public $hostPublicAddress;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var protocols[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourceInstanceState;
    protected $_name = [
        'activeAddressType'   => 'ActiveAddressType',
        'comment'             => 'Comment',
        'hostId'              => 'HostId',
        'hostName'            => 'HostName',
        'hostPrivateAddress'  => 'HostPrivateAddress',
        'hostPublicAddress'   => 'HostPublicAddress',
        'OSType'              => 'OSType',
        'protocols'           => 'Protocols',
        'source'              => 'Source',
        'sourceInstanceId'    => 'SourceInstanceId',
        'sourceInstanceState' => 'SourceInstanceState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddressType) {
            $res['ActiveAddressType'] = $this->activeAddressType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostPrivateAddress) {
            $res['HostPrivateAddress'] = $this->hostPrivateAddress;
        }
        if (null !== $this->hostPublicAddress) {
            $res['HostPublicAddress'] = $this->hostPublicAddress;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = [];
            if (null !== $this->protocols && \is_array($this->protocols)) {
                $n = 0;
                foreach ($this->protocols as $item) {
                    $res['Protocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceState) {
            $res['SourceInstanceState'] = $this->sourceInstanceState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddressType'])) {
            $model->activeAddressType = $map['ActiveAddressType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostPrivateAddress'])) {
            $model->hostPrivateAddress = $map['HostPrivateAddress'];
        }
        if (isset($map['HostPublicAddress'])) {
            $model->hostPublicAddress = $map['HostPublicAddress'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n                = 0;
                foreach ($map['Protocols'] as $item) {
                    $model->protocols[$n++] = null !== $item ? protocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceState'])) {
            $model->sourceInstanceState = $map['SourceInstanceState'];
        }

        return $model;
    }
}