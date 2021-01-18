<?php
namespace App\Traits;

use App\Components\QueryBuilderWithCache;

trait Cacheable
{
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();
        return new QueryBuilderWithCache(
            $connection,
            $connection->getQueryGramar(),
            $connection->getPostProcessor(),
            $this->cacheTime(),
        );
    }

    protected function cacheTime()
    {
        return property_exists($this, 'cacheTime') ? $this->cacheTime : 0;
    }
}
