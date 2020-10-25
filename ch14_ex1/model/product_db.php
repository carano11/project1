<?php
class ProductDB {
public function getProductsByCategory($category_id) {
        $db = Database::getDB();

        $categoryDB = new CategoryDB();
        $category = $categoryDB->getCategory($category_id);

        $query = "SELECT * FROM products
                  WHERE categoryID = '$category_id'
                  ORDER BY productID";
        $result = $db->query($query);
        $products = array();
        foreach ($result as $row) {
            $product = new Product();
            $product->setCategory($category);
            $product->setId($row['productID']);
            $product->setCode($row['productCode']);
            $product->setName($row['productName']);
            $product->setPrice($row['listPrice']);

            $products[] = $product;
        }
        return $products;
    }


   public function getProducts() {
        $db = Database::getDB();
        $query = 'SELECT * FROM products
                  INNER JOIN categories
                      ON products.categoryID = categories.categoryID';
        $result = $db->query($query);
        $products = array();
        foreach ($result as $row) {
            // create the Category object
            $category = new Category();
            $category->setID($row['categoryID']);
            $category->setName($row['categoryName']);
            
            // create the Product object
            $product = new Product();
            $product->setCategory($category);
            $product->setId($row['productID']);
            $product->setName($row['productName']);
            $product->setDescription($row['productDescription']);
            $product->setPrice($row['listPrice']);
            $products[] = $product;
        }
        return $products;
    }

    public static function deleteProduct($product_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM products
                  WHERE productID = :product_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    }

   public function addProduct($product) {
        $db = Database::getDB();

        $category_id = $product->getCategory()->getID();
        $code = $product->getCode();
        $name = $product->getName();
        $price = $product->getPrice();

        $query =
            "INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
             VALUES
                 ('$category_id', '$code', '$name', '$price')";

        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>