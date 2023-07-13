<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The compatibility for a single metric.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.MetricCompatibility</code>
 */
class MetricCompatibility extends \Google\Protobuf\Internal\Message
{
    /**
     * The metric metadata contains the API name for this compatibility
     * information. The metric metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.MetricMetadata metric_metadata = 1;</code>
     */
    private $metric_metadata = null;
    /**
     * The compatibility of this metric. If the compatibility is COMPATIBLE,
     * this metric can be successfully added to the report.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     */
    private $compatibility = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\MetricMetadata $metric_metadata
     *           The metric metadata contains the API name for this compatibility
     *           information. The metric metadata also contains other helpful information
     *           like the UI name and description.
     *     @type int $compatibility
     *           The compatibility of this metric. If the compatibility is COMPATIBLE,
     *           this metric can be successfully added to the report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric metadata contains the API name for this compatibility
     * information. The metric metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.MetricMetadata metric_metadata = 1;</code>
     * @return \Google\Analytics\Data\V1beta\MetricMetadata|null
     */
    public function getMetricMetadata()
    {
        return $this->metric_metadata;
    }

    public function hasMetricMetadata()
    {
        return isset($this->metric_metadata);
    }

    public function clearMetricMetadata()
    {
        unset($this->metric_metadata);
    }

    /**
     * The metric metadata contains the API name for this compatibility
     * information. The metric metadata also contains other helpful information
     * like the UI name and description.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.MetricMetadata metric_metadata = 1;</code>
     * @param \Google\Analytics\Data\V1beta\MetricMetadata $var
     * @return $this
     */
    public function setMetricMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\MetricMetadata::class);
        $this->metric_metadata = $var;

        return $this;
    }

    /**
     * The compatibility of this metric. If the compatibility is COMPATIBLE,
     * this metric can be successfully added to the report.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     * @return int
     */
    public function getCompatibility()
    {
        return isset($this->compatibility) ? $this->compatibility : 0;
    }

    public function hasCompatibility()
    {
        return isset($this->compatibility);
    }

    public function clearCompatibility()
    {
        unset($this->compatibility);
    }

    /**
     * The compatibility of this metric. If the compatibility is COMPATIBLE,
     * this metric can be successfully added to the report.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1beta.Compatibility compatibility = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCompatibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1beta\Compatibility::class);
        $this->compatibility = $var;

        return $this;
    }

}

