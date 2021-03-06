<?php
namespace Bravo3\Orm\Query;

use Bravo3\Orm\Enum\Direction;

class SortedTableQuery extends SortedQuery
{
    /**
     * @param string    $class_name Class name of table to query
     * @param string    $sort_by    Sort by column
     * @param Direction $direction  Assumes ascending if omitted
     * @param int       $start      Start index (inclusive), null/0 for beginning of set
     * @param int       $end        Stop index (inclusive), null/-1 for end of set, -2 for penultimate record
     */
    public function __construct(
        $class_name,
        $sort_by,
        Direction $direction = null,
        $start = null,
        $end = null
    ) {
        parent::__construct($class_name, null, $sort_by, $direction, $start, $end);
    }
}
