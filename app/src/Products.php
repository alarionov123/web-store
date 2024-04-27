<?php

namespace App;

class Products
{
    protected $pdo;
    protected $images;

    /**
     * @param Database $db The Database instance.
     * @param Images|null $images The Images instance.
     */
    public function __construct(Database $db, ?Images $images = null)
    {
        $this->pdo = $db;
        $this->images = $images;
    }

    /**
     * Retrieves products from the database.
     *
     * @param int $product_id The ID of the product to retrieve (optional).
     * @return array|bool An array of products.
     */
    public function getProducts(int $product_id = 0): array|bool
    {
        $condition = '';
        $params = [];

        if ($product_id) {
            $condition .= " WHERE id = ?";
            $params[] = $product_id;
        }

        $result = $this->pdo->query('products', ['*'], $condition, $params);

        $method = $product_id ? 'fetch' : 'fetchAll';

        return $result->$method(\PDO::FETCH_ASSOC);
    }

    /**
     * Updates or inserts a product into the database.
     *
     * @param array $data An associative array containing product data.
     * @return int The ID of the updated or inserted product.
     * @throws \Exception If there is an error updating or inserting the product.
     */
    public function updateProduct(array $data): int
    {
        $product_id = $is_update = $data['id'] ?? 0;

        if (isset($data['image_path']) && isset($this->images)) {
            $image_path = $this->images->uploadImage($data['image_path']);
            $data['image_path'] = $image_path;
        }

        $result = $is_update
            ? $this->pdo->updateData('products', $data, "WHERE id = ?", [$product_id])
            : $this->pdo->insertData('products', $data);

        return $is_update ? $product_id : $result;
    }

    /**
     * Deletes a product from the database.
     *
     * @param int $product_id The ID of the product to delete.
     * @return object|bool The result of the delete operation.
     */
    public function deleteProduct(int $product_id): object|bool
    {
        $this->images->deleteProductImage($product_id);

        return $this->pdo->deleteData('products', "WHERE id = ?", [$product_id]);
    }
}
