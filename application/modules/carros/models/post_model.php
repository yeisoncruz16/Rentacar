<?php

class Post_model extends MY_Model
{
    protected $table_name   = 'posts';
    protected $key          = 'posts_id';
    protected $set_created  = true;
    protected $set_modified = true;
    protected $soft_deletes = true;
    protected $date_format  = 'datetime';

}