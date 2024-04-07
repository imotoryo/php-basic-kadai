return '<select name="' . $name . '">' . PHP_EOL
    . implode(PHP_EOL, array_map(function ($value, $label) use ($selectedValue) {
        $selected = (intval($value) === intval($selectedValue)) ? ' selected' : '';
        return '<option value="' . $value . '"' . $selected . '>' . $label . '</option>';
    }, $options, array_keys($options)))
    . PHP_EOL . '</select>';
