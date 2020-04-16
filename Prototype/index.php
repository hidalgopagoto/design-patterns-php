<?php

use Entities\Author;
use Entities\Page;
use Entities\Revision;

require('autoload.php');

$author = new Author();
$author->setName('John Doe');
$author->setEmail('johndoe@gmail.com');

$page = new Page();
$page->setAuthor($author);
$page->setTitle('Test page');
$page->setDescription('This is just a test');

$revision = new Revision($page);
$page->setRevision($revision);

echo 'Primitive<br/>';
echo '<pre>';
print_r($page->toArray());
echo '</pre>';

$newPage = clone $page;
echo 'Copy<br/>';
echo '<pre>';
print_r($newPage->toArray());
echo '</pre>';

echo 'Primitive<br/>';
echo '<pre>';
print_r($page->toArray());
echo '</pre>';

echo 'Copy<br/>';
echo '<pre>';
print_r($newPage->toArray());
echo '</pre>';