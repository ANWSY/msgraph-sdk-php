<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ListInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ListInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ListInfo extends Entity
{
    /**
    * Gets the contentTypesEnabled
    *
    * @return bool The contentTypesEnabled
    */
    public function getContentTypesEnabled()
    {
        if (array_key_exists("contentTypesEnabled", $this->_propDict)) {
            return $this->_propDict["contentTypesEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentTypesEnabled
    *
    * @param bool $val The value of the contentTypesEnabled
    *
    * @return ListInfo
    */
    public function setContentTypesEnabled($val)
    {
        $this->_propDict["contentTypesEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the hidden
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidden
    *
    * @param bool $val The value of the hidden
    *
    * @return ListInfo
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = $val;
        return $this;
    }
    /**
    * Gets the template
    *
    * @return string The template
    */
    public function getTemplate()
    {
        if (array_key_exists("template", $this->_propDict)) {
            return $this->_propDict["template"];
        } else {
            return null;
        }
    }

    /**
    * Sets the template
    *
    * @param string $val The value of the template
    *
    * @return ListInfo
    */
    public function setTemplate($val)
    {
        $this->_propDict["template"] = $val;
        return $this;
    }
}
