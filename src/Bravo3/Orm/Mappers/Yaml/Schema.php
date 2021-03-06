<?php
namespace Bravo3\Orm\Mappers\Yaml;

/**
 * Key mappings for the YAML schema
 */
final class Schema
{
    const TABLE_NAME           = 'table';
    const COLUMNS              = 'columns';
    const COLUMN_TYPE          = 'type';
    const COLUMN_CLASS         = 'class';
    const COLUMN_ID            = 'id';
    const COLUMN_PROPERTY      = 'property';
    const GETTER               = 'getter';
    const SETTER               = 'setter';
    const STD_INDICES          = 'indices';
    const SORT_INDICES         = 'sortable';
    const INDEX_COLUMN         = 'column';
    const INDEX_COLUMNS        = 'columns';
    const INDEX_METHODS        = 'methods';
    const INDEX_CONDITIONS     = 'conditions';
    const CONDITION_COLUMN     = 'column';
    const CONDITION_METHOD     = 'method';
    const CONDITION_VALUE      = 'value';
    const CONDITION_COMPARISON = 'comparison';
    const REL_ASSOCIATION      = 'association';
    const REL_INVERSED_BY      = 'inversed_by';
    const REL_TARGET           = 'target';
}
