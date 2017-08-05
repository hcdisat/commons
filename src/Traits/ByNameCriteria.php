<?php namespace HcDisat\Commons\Traits;


trait ByNameCriteria
{
    /**
     * get record by name
     * @param string $name
     * @return static
     */
    public static function getByName(string $name)
    {
        if (!self::validateColumn('name')) {
            return new static();
        }

        return self::whereName($name)->first()
            ?? new static();
    }

    /**
     * get record by name
     * @param string $slug
     * @return static
     */
    public static function getBySlug(string $slug)
    {
        if (!self::validateColumn('slug')) {
            return new static();
        }
        
        return self::whereSlug($slug)->first()
            ?? new static();
    }

    /**
     * @param string $column
     * @return bool
     */
    protected static function validateColumn(string $column)
    {
        return column_exists_in_table(
            $column,
            with(new static)->getTable()
        );
    }
}