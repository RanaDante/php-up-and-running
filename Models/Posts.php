<?php

namespace Models;
use Core\Database;

class Posts extends Database {
    public $attributes = [
        'id' => null,
        'title' => null,
        'body' => null,
        'user_id' => null
    ];

    public function __construct($config, $args) {
        parent::__construct($config);
        $this->attributes['id'] = isset($args['id']) ? $args['id'] : null;
        $this->attributes['title'] = isset($args['title']) ? $args['title'] : null;
        $this->attributes['body'] = isset($args['body']) ? $args['body'] : null;
        $this->attributes['user_id'] = isset($args['user_id']) ? $args['user_id'] : null;
    }

    public function All() {
        $this->query('SELECT * FROM posts;');
        return $this->fetchAllOrAbort();
    }

    public function get($post_id) {
        $this->query("SELECT * FROM posts WHERE id=:post_id", [
            'post_id' => $post_id
        ]);
        return $this->fetchOrAbort();
    }

}