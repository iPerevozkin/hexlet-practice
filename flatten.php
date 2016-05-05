<?php
function flatten ($item) {
  if (!is_array($item)) {
      return false;
    }
    $result = array();
    foreach ($item as $key => $value) {
      if (is_array($value)) {
        $result = array_merge($result, flatten($value));
      } else {
        $result[] = $value;
      }
    }
    return $result;
}
print_r(flatten([1, [2, 3], [[3], ['key' => ['key' => 'value']]]]));
