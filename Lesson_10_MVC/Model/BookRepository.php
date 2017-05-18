<?php
namespace Model;

use Library\PdoAwareTrait;
use Model\Entity\Book;

class BookRepository
{
    use PdoAwareTrait;

	public function findAllActive($offset, $count)
    {
    	$collection = [];

        $sth = $this->pdo->query("SELECT * FROM book WHERE status = 1 LIMIT {$offset}, {$count}");
        while ($res = $sth->fetch(\PDO::FETCH_ASSOC)){
        	$book = (new Book())
        		->setId($res['id']) 
        		->setTitle($res['title'])
        		->setPrice($res['price'])
        		->setStatus((bool) $res['status'])
        		->setDescription($res['description'])
        		->setStyle($res['style_id'])
        	;

        	$collection[] = $book; 
        }
        
        return $collection;
    }

        public function findAll($offset, $count)
    {
        $collection = [];

        $sth = $this->pdo->query("SELECT * FROM book LIMIT {$offset}, {$count}");
        while ($res = $sth->fetch(\PDO::FETCH_ASSOC)){
            $book = (new Book())
                ->setId($res['id']) 
                ->setTitle($res['title'])
                ->setPrice($res['price'])
                ->setStatus((bool) $res['status'])
                ->setDescription($res['description'])
                ->setStyle($res['style_id'])
            ;

            $collection[] = $book; 
        }
        
        return $collection;
    }

    public function count()
    {
        $sth = $this->pdo->query('SELECT COUNT(*) AS count FROM book WHERE status = 1');
        return $sth->fetchColumn();
    }
}