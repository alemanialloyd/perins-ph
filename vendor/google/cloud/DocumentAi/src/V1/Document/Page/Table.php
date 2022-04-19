<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A table representation similar to HTML table structure.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Table</code>
 */
class Table extends \Google\Protobuf\Internal\Message
{
    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Table][google.cloud.documentai.v1.Document.Page.Table].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     */
    private $layout = null;
    /**
     * Header rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow header_rows = 2;</code>
     */
    private $header_rows;
    /**
     * Body rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow body_rows = 3;</code>
     */
    private $body_rows;
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 4;</code>
     */
    private $detected_languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Layout $layout
     *           [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Table][google.cloud.documentai.v1.Document.Page.Table].
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow[]|\Google\Protobuf\Internal\RepeatedField $header_rows
     *           Header rows of the table.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow[]|\Google\Protobuf\Internal\RepeatedField $body_rows
     *           Body rows of the table.
     *     @type \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Table][google.cloud.documentai.v1.Document.Page.Table].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document\Page\Layout|null
     */
    public function getLayout()
    {
        return $this->layout;
    }

    public function hasLayout()
    {
        return isset($this->layout);
    }

    public function clearLayout()
    {
        unset($this->layout);
    }

    /**
     * [Layout][google.cloud.documentai.v1.Document.Page.Layout] for [Table][google.cloud.documentai.v1.Document.Page.Table].
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Layout layout = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Layout $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document\Page\Layout::class);
        $this->layout = $var;

        return $this;
    }

    /**
     * Header rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow header_rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaderRows()
    {
        return $this->header_rows;
    }

    /**
     * Header rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow header_rows = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaderRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow::class);
        $this->header_rows = $arr;

        return $this;
    }

    /**
     * Body rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow body_rows = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBodyRows()
    {
        return $this->body_rows;
    }

    /**
     * Body rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.Table.TableRow body_rows = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBodyRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\Table\TableRow::class);
        $this->body_rows = $arr;

        return $this;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Page.DetectedLanguage detected_languages = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Page\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Table::class, \Google\Cloud\DocumentAI\V1\Document_Page_Table::class);

