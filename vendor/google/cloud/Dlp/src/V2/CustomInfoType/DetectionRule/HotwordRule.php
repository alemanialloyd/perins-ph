<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The rule that adjusts the likelihood of findings within a certain
 * proximity of hotwords.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType.DetectionRule.HotwordRule</code>
 */
class HotwordRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Regular expression pattern defining what qualifies as a hotword.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex hotword_regex = 1;</code>
     */
    private $hotword_regex = null;
    /**
     * Proximity of the finding within which the entire hotword must reside.
     * The total length of the window cannot exceed 1000 characters. Note that
     * the finding itself will be included in the window, so that hotwords may
     * be used to match substrings of the finding itself. For example, the
     * certainty of a phone number regex "\(\d{3}\) \d{3}-\d{4}" could be
     * adjusted upwards if the area code is known to be the local area code of
     * a company office using the hotword regex "\(xxx\)", where "xxx"
     * is the area code in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.Proximity proximity = 2;</code>
     */
    private $proximity = null;
    /**
     * Likelihood adjustment to apply to all matching findings.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.LikelihoodAdjustment likelihood_adjustment = 3;</code>
     */
    private $likelihood_adjustment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\Regex $hotword_regex
     *           Regular expression pattern defining what qualifies as a hotword.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\Proximity $proximity
     *           Proximity of the finding within which the entire hotword must reside.
     *           The total length of the window cannot exceed 1000 characters. Note that
     *           the finding itself will be included in the window, so that hotwords may
     *           be used to match substrings of the finding itself. For example, the
     *           certainty of a phone number regex "\(\d{3}\) \d{3}-\d{4}" could be
     *           adjusted upwards if the area code is known to be the local area code of
     *           a company office using the hotword regex "\(xxx\)", where "xxx"
     *           is the area code in question.
     *     @type \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\LikelihoodAdjustment $likelihood_adjustment
     *           Likelihood adjustment to apply to all matching findings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Regular expression pattern defining what qualifies as a hotword.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex hotword_regex = 1;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\Regex|null
     */
    public function getHotwordRegex()
    {
        return $this->hotword_regex;
    }

    public function hasHotwordRegex()
    {
        return isset($this->hotword_regex);
    }

    public function clearHotwordRegex()
    {
        unset($this->hotword_regex);
    }

    /**
     * Regular expression pattern defining what qualifies as a hotword.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.Regex hotword_regex = 1;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\Regex $var
     * @return $this
     */
    public function setHotwordRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\Regex::class);
        $this->hotword_regex = $var;

        return $this;
    }

    /**
     * Proximity of the finding within which the entire hotword must reside.
     * The total length of the window cannot exceed 1000 characters. Note that
     * the finding itself will be included in the window, so that hotwords may
     * be used to match substrings of the finding itself. For example, the
     * certainty of a phone number regex "\(\d{3}\) \d{3}-\d{4}" could be
     * adjusted upwards if the area code is known to be the local area code of
     * a company office using the hotword regex "\(xxx\)", where "xxx"
     * is the area code in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.Proximity proximity = 2;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\Proximity|null
     */
    public function getProximity()
    {
        return $this->proximity;
    }

    public function hasProximity()
    {
        return isset($this->proximity);
    }

    public function clearProximity()
    {
        unset($this->proximity);
    }

    /**
     * Proximity of the finding within which the entire hotword must reside.
     * The total length of the window cannot exceed 1000 characters. Note that
     * the finding itself will be included in the window, so that hotwords may
     * be used to match substrings of the finding itself. For example, the
     * certainty of a phone number regex "\(\d{3}\) \d{3}-\d{4}" could be
     * adjusted upwards if the area code is known to be the local area code of
     * a company office using the hotword regex "\(xxx\)", where "xxx"
     * is the area code in question.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.Proximity proximity = 2;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\Proximity $var
     * @return $this
     */
    public function setProximity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\Proximity::class);
        $this->proximity = $var;

        return $this;
    }

    /**
     * Likelihood adjustment to apply to all matching findings.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.LikelihoodAdjustment likelihood_adjustment = 3;</code>
     * @return \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\LikelihoodAdjustment|null
     */
    public function getLikelihoodAdjustment()
    {
        return $this->likelihood_adjustment;
    }

    public function hasLikelihoodAdjustment()
    {
        return isset($this->likelihood_adjustment);
    }

    public function clearLikelihoodAdjustment()
    {
        unset($this->likelihood_adjustment);
    }

    /**
     * Likelihood adjustment to apply to all matching findings.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CustomInfoType.DetectionRule.LikelihoodAdjustment likelihood_adjustment = 3;</code>
     * @param \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\LikelihoodAdjustment $var
     * @return $this
     */
    public function setLikelihoodAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CustomInfoType\DetectionRule\LikelihoodAdjustment::class);
        $this->likelihood_adjustment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HotwordRule::class, \Google\Cloud\Dlp\V2\CustomInfoType_DetectionRule_HotwordRule::class);

