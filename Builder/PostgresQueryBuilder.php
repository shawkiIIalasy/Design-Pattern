<?php
class PostgresQueryBuilder extends MySqlQueryBuilder
{
    public function limit($start, $offset)
    {
         parent::limit($start, $offset); // TODO: Change the autogenerated stub
        $this->query->limit=" LIMIT ".$start." OFFSET ".$offset;
        return $this;
    }
}