<?php

use App\Models\Option;

/**
 * @param $variable
 * @param $default
 * @return mixed|null
 */
function SITE_OPTION($variable, $default = null) : ?string
{
    $option = Option::where('variable', $variable)->first();

    if($option != null){
        return $option->value;
    }else{
        return $default == null ? null : $default;
    }
}

/**
 *
 *
 * @param $name
 * @param $description
 * @param $variable
 * @param $value
 * @return mixed
 */
function SITE_ADD_OPTION($name, $description, $variable, $value) {
    $option = Option::firstOrCreate(
        ['name' => $name],
        ['description' => $description],
        ['variable' => $variable],
        ['value' => $value]
    );
    return $option;
}
