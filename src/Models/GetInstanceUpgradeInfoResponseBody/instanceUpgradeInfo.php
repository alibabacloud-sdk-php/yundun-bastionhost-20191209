<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo\candidatePeriodList;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo\invalidPeriodList;
use AlibabaCloud\Tea\Model;

class instanceUpgradeInfo extends Model
{
    /**
     * @var string
     */
    public $upgradeMode;

    /**
     * @var bool
     */
    public $operable;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $latestStartTime;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $periodInterval;

    /**
     * @var int
     */
    public $upgradeStartTime;

    /**
     * @var int
     */
    public $upgradeEndTime;

    /**
     * @var candidatePeriodList[]
     */
    public $candidatePeriodList;

    /**
     * @var invalidPeriodList[]
     */
    public $invalidPeriodList;
    protected $_name = [
        'upgradeMode'         => 'UpgradeMode',
        'operable'            => 'Operable',
        'aliUid'              => 'AliUid',
        'latestStartTime'     => 'LatestStartTime',
        'imageVersion'        => 'ImageVersion',
        'instanceId'          => 'InstanceId',
        'periodInterval'      => 'PeriodInterval',
        'upgradeStartTime'    => 'UpgradeStartTime',
        'upgradeEndTime'      => 'UpgradeEndTime',
        'candidatePeriodList' => 'CandidatePeriodList',
        'invalidPeriodList'   => 'InvalidPeriodList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }
        if (null !== $this->operable) {
            $res['Operable'] = $this->operable;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->periodInterval) {
            $res['PeriodInterval'] = $this->periodInterval;
        }
        if (null !== $this->upgradeStartTime) {
            $res['UpgradeStartTime'] = $this->upgradeStartTime;
        }
        if (null !== $this->upgradeEndTime) {
            $res['UpgradeEndTime'] = $this->upgradeEndTime;
        }
        if (null !== $this->candidatePeriodList) {
            $res['CandidatePeriodList'] = [];
            if (null !== $this->candidatePeriodList && \is_array($this->candidatePeriodList)) {
                $n = 0;
                foreach ($this->candidatePeriodList as $item) {
                    $res['CandidatePeriodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invalidPeriodList) {
            $res['InvalidPeriodList'] = [];
            if (null !== $this->invalidPeriodList && \is_array($this->invalidPeriodList)) {
                $n = 0;
                foreach ($this->invalidPeriodList as $item) {
                    $res['InvalidPeriodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceUpgradeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }
        if (isset($map['Operable'])) {
            $model->operable = $map['Operable'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PeriodInterval'])) {
            $model->periodInterval = $map['PeriodInterval'];
        }
        if (isset($map['UpgradeStartTime'])) {
            $model->upgradeStartTime = $map['UpgradeStartTime'];
        }
        if (isset($map['UpgradeEndTime'])) {
            $model->upgradeEndTime = $map['UpgradeEndTime'];
        }
        if (isset($map['CandidatePeriodList'])) {
            if (!empty($map['CandidatePeriodList'])) {
                $model->candidatePeriodList = [];
                $n                          = 0;
                foreach ($map['CandidatePeriodList'] as $item) {
                    $model->candidatePeriodList[$n++] = null !== $item ? candidatePeriodList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvalidPeriodList'])) {
            if (!empty($map['InvalidPeriodList'])) {
                $model->invalidPeriodList = [];
                $n                        = 0;
                foreach ($map['InvalidPeriodList'] as $item) {
                    $model->invalidPeriodList[$n++] = null !== $item ? invalidPeriodList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
