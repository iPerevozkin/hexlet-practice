<?php

function sortGraph ($graph) {

  
  $add = function ($acc, $node) use ($graph, &$add) {
        return array_merge(
            $acc,
            isset($graph[$node]) ? array_reduce($graph[$node], $add, $acc) : [],
            [$node => true]
        );
    };

    return array_keys(array_reduce(array_keys($graph), $add, []));
}

$array = [
            'mongo' => [],
            'tzinfo' => ['thread_safe'],
            'uglifier' => ['execjs'],
            'execjs' => ['thread_safe', 'json'],
            'redis' => [],
        ];
sortGraph($array);
