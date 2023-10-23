<?php

class CategoryModel extends BaseModel
{
    const TABLE = 'category';

    public function getAll($select = ['*'], $orderBys = [], $limit = 15)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function getAllWithCount()
    {
        $sql = "SELECT category.id, category.name, COUNT(product.id) as count, category.status, category.created_at
                FROM category
                LEFT JOIN product ON category_id = category.id
                GROUP BY category.id, category.name, category.status, category.created_at
                HAVING category.status = 1";

        return $this->getByQuery($sql);
    }

    public function getAllWithCountAllStatus()
    {
        $sql = "SELECT category.id, category.name, COUNT(product.id) as count, category.status, category.created_at
                FROM category
                LEFT JOIN product ON category_id = category.id
                GROUP BY category.id, category.name, category.status, category.created_at";

        return $this->getByQuery($sql);
    }

    public function checkNameUnique($name, $nameCheck)
    {
        $sql = "SELECT name FROM " . self::TABLE . " WHERE name = '$name' AND name != '$nameCheck'";
        return $this->getByQuery($sql);
    }

    public function findCategoryById($select = ['*'], $id)
    {
        return $this->find(self::TABLE, $select, $id);
    }

    public function findCategoryByName($name)
    {
        $sql = "SELECT * FROM " . self::TABLE . " WHERE name = '$name'";
        return $this->getByQuery($sql);
    }

    public function countProducts($id)
    {
        $sql = "SELECT COUNT(id) as count FROM product WHERE category_id = $id";
        return $this->getByQuery($sql);
    }

    public function deleteData($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function updateData($id, $data)
    {
        $this->update(self::TABLE, $id, $data);
    }

    public function createData($data)
    {
        $this->create(self::TABLE, $data);
    }

    public function searchCategoryFull($categoryData)
    {
        $sql = "SELECT category.*, COUNT(product.id) as count
                FROM category
                LEFT JOIN product ON category.id = product.category_id
                WHERE category.name LIKE '%" . $categoryData . "%' 
                OR category.id LIKE '%" . $categoryData . "%'
                GROUP BY category.id, category.name, category.status, category.created_at
                ORDER BY category.id DESC";

        return $this->getByQuery($sql);
    }
}
