<?php

namespace Libertyphp\Utils;

class ListByKey
{

    /**
     * @template T
     * @param array<T> $list
     * @return array<T>
     */
    public static function get(string $key, array $list): array
    {
        $listByKey = [];
        foreach ($list as $item) {
            if (is_object($item)) {
                $listByKey[$item->{$key}] = $item;
            } else {
                $listByKey[$item[$key]] = $item;
            }
        }

        return $listByKey;
    }
}
