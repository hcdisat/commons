<?php
/**
 * Created by PhpStorm.
 * User: hcdisat
 * Date: 8/4/17
 * Time: 11:28
 */

if (!function_exists('column_exists_in_table')) {

    /**
     * @param string $column
     * @param string $table
     * @return bool
     */
    function column_exists_in_table(string $column, string $table)
    {
        return Schema::hasColumn($table, $column);
    }
}