<?php
namespace Bravo3\Orm\KeySchemes;

use Bravo3\Orm\Mappers\Metadata\Index;
use Bravo3\Orm\Mappers\Metadata\Relationship;

interface KeySchemeInterface
{
    /**
     * Return the key for an entity document
     *
     * @param string $table_name
     * @param string $id
     * @return string
     */
    public function getEntityKey($table_name, $id);

    /**
     * Return the key for an entity ref table
     *
     * @param string $table_name Table name
     * @param string $id         Entity ID
     * @return string
     */
    public function getEntityRefKey($table_name, $id);

    /**
     * Get the key for a foreign relationship
     *
     * @param Relationship $relationship Relationship
     * @param string       $source_table Source table name
     * @param string       $target_table Target table name
     * @param string       $id           Source entity ID
     * @return string
     */
    public function getRelationshipKey(Relationship $relationship, $source_table, $target_table, $id);

    /**
     * Get the key for an standard index
     *
     * @param Index  $index Index belonging to entity
     * @param string $key   Index key
     * @return string
     */
    public function getIndexKey(Index $index, $key);

    /**
     * Get the key for a sort index on a relationship
     *
     * @param Relationship $relationship Relationship
     * @param string       $source_table Source table name
     * @param string       $target_table Target table name
     * @param string       $sort_field   Property name on the inverse entity
     * @param string       $id           Local ID
     * @return string
     */
    public function getSortIndexKey(Relationship $relationship, $source_table, $target_table, $sort_field, $id);

    /**
     * Get the key for a sort index on a table
     *
     * @param string $table_name Name of table containing sorted entity list
     * @param string $sort_field Sortable field on the table
     * @return string
     */
    public function getTableSortKey($table_name, $sort_field);
}
