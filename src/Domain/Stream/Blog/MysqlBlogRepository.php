<?php

namespace Jacobemerick\Web\Domain\Stream\Blog;

use Aura\Sql\ConnectionLocator;
use DateTime;

class MysqlBlogRepository implements BlogRepositoryInterface
{

    /** @var  ConnectionLocator */
    protected $connections;

    /**
     * @param ConnectonLocator $connections
     */
    public function __construct(ConnectionLocator $connections)
    {
        $this->connections = $connections;
    }

    public function getBlogByPermalink($permalink)
    {
        $query = "
            SELECT *
            FROM `jpemeric_stream`.`blog`
            WHERE `permalink` = :permalink
            LIMIT 1";
        $bindings = [
            'permalink' => $permalink,
        ];

        return $this
            ->connections
            ->getRead()
            ->fetchOne($query, $bindings);
    }

    public function getBlogs($limit = null, $offset = 0)
    {
        $query = "
            SELECT `id`, `permalink`, `datetime`
            FROM `jpemeric_stream`.`blog`
            ORDER BY `datetime` DESC";
        if (!is_null($limit)) {
            $query .= "
            LIMIT {$limit}, {$offset}";
        }

        return $this
            ->connections
            ->getRead()
            ->fetchAll($query);
    }

    public function getBlogsUpdatedSince(DateTime $datetime)
    {
        $query = "
            SELECT *
            FROM `jpemeric_stream`.`blog`
            WHERE `updated_at` >= :last_update";

        $bindings = [
            'last_update' => $datetime->format('Y-m-d H:i:s'),
        ];

        return $this
            ->connections
            ->getRead()
            ->fetchAll($query, $bindings);
    }

    public function insertBlog($permalink, DateTime $datetime, array $metadata)
    {
        $query = "
            INSERT INTO `jpemeric_stream`.`blog`
                (`permalink`, `datetime`, `metadata`)
            VALUES
                (:permalink, :datetime, :metadata)";

        $bindings = [
            'permalink' => $permalink,
            'datetime' => $datetime->format('Y-m-d H:i:s'),
            'metadata' => json_encode($metadata),
        ];

        return $this
            ->connections
            ->getWrite()
            ->perform($query, $bindings);
    }
}
