<?php

return [
    // spec columns
    'columns' => [
        'alpha' => [
            'rows'  => ['description', 'email', 'name', 'slug', 'registration', 'icao', 'iata', 'dpt_airport_id', 'arr_airport_id', 'home_airport_id', 'curr_airport_id', 'airport_id'],
            'class' => 'bi bi-sort-alpha',
        ],
        'amount' => [
            'rows'  => ['amount', 'price', 'cost', 'balance'],
            'class' => 'bi bi-sort',
        ],
        'numeric' => [
            'rows'  => ['created_at', 'updated_at', 'submitted_at', 'level', 'id', 'phone_number', 'mtow', 'zfw', 'distance', 'flight_time', 'score', 'landing_rate'],
            'class' => 'bi bi-sort-numeric',
        ],
    ],

    // whether icons should be enabled
    'enable_icons' => true,

    // defines icon set to use when sorted data is none above (alpha nor amount nor numeric)
    'default_icon_set' => 'bi bi-sort-down',

    // icon that shows when generating sortable link while column is not sorted
    'sortable_icon' => 'bi bi-sort-down',

    // generated icon is clickable non-clickable (default)
    'clickable_icon' => false,

    // icon and text separator (any string), in case of 'clickable_icon' => true; separator creates possibility to style icon and anchor-text properly
    'icon_text_separator' => ' ',

    // suffix class that is appended when ascending direction is applied (FA5 Compatible)
    'asc_suffix' => '-up',

    // suffix class that is appended when descending direction is applied (FA5 Compatible)
    'desc_suffix' => '-down',

    // default anchor class, if value is null none is added
    'anchor_class' => null,

    // default active anchor class, if value is null none is added
    'active_anchor_class' => null,

    // default sort direction anchor class, if value is null none is added
    'direction_anchor_class_prefix' => null,

    // relation - column separator ex: detail.phone_number means relation "detail" and column "phone_number"
    'uri_relation_column_separator' => '.',

    // formatting function applied to name of column, use null to turn formatting off
    'formatting_function' => 'ucfirst',

    // apply formatting function to custom titles as well as column names
    'format_custom_titles' => true,

    // inject title parameter in query strings, use null to turn injection off example: 'inject_title' => 't' will result in ..user/?t="formatted title of sorted column"
    'inject_title_as' => null,

    // allow request modification, when default sorting is set but is not in URI (first load)
    'allow_request_modification' => true,

    // default direction for: $user->sortable('id') usage
    'default_direction' => 'asc',

    // default direction for non-sorted columns
    'default_direction_unsorted' => 'asc',

    // use the first defined sortable column (Model::$sortable) as default also applies if sorting parameters are invalid for example: 'sort' => 'name', 'direction' => ''
    'default_first_column' => false,

    // join type: join vs leftJoin (default leftJoin) for more information see https://github.com/Kyslik/column-sortable/issues/59
    'join_type' => 'leftJoin',
];
