<?php
use App\db\models\PostData;
use App\db\components\QueryBuilder;
$postData = new PostData(new QueryBuilder());
$postData ->getAllPosts();