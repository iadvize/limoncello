<?php namespace Neomerx\Limoncello\JsonApi\Decoder;

/**
 * Copyright 2015-2016 info@neomerx.com (www.neomerx.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @package Neomerx\Limoncello
 */
class DocumentObject
{
    /**
     * @var ResourceObject|ResourceObject[]|null
     */
    private $data;

    /**
     * Constructor.
     *
     * @param ResourceObject|ResourceObject[]|null $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return ResourceObject|ResourceObject[]|null
     */
    public function getData()
    {
        return $this->data;
    }
}