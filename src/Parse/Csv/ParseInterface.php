<?php

namespace Parse\Csv;

/**
 *
 * @interface ParseInterface
 *
 * @autor: Foued Dghaies
 */

interface ParseInterface
{
    public function parse($input = null, $offset = null, $limit = null, $conditions = null);

    public function save($file = null, $data = array(), $append = false, $fields = array());

    public function output($filename = null, $data = array(), $fields = array(), $delimiter = null);
} 