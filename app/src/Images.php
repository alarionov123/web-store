<?php

namespace App;

class Images
{
    public $images_dir;
    public $upload_max_size;
    public $allowed_extensions;
    protected $pdo;

    /**
     * @param Database $db The Database instance.
     */
    public function __construct(Database $db)
    {
        $config = require 'config.php';

        $this->upload_max_size = (int) ini_get('upload_max_filesize') * 1048576;
        $this->allowed_extensions = $config['allowed_upload_extensions'];
        $this->images_dir = $config['images_dir'];
        $this->pdo = $db;
    }

    /**
     * Uploads an image.
     *
     * @param array $image_data The data of the image to upload.
     * @return string The path to the uploaded image.
     * @throws \Exception If the image data is invalid or exceeds the maximum upload size, or if the file extension is not allowed.
     */
    public function uploadImage($image_data): string
    {
        if (!$this->isValidImage($image_data)) {
            throw new \Exception("Invalid image data or size exceeds maximum upload size.");
        }
        if (!$this->isExtensionAllowed($image_data['name'])) {
            throw new \Exception("Uploaded file extension is not allowed");
        }

        $image_name = $this->generateUniqueFileName($image_data['name']);

        $project_path = $this->images_dir . $image_name;
        $upload_path = ROOT_PATH . $this->images_dir . $image_name;

        if (!move_uploaded_file($image_data['tmp_name'], $upload_path)) {
            throw new \Exception("Failed to upload image.");
        }

        return $project_path;
    }

    /**
     * Checks if the image data is valid.
     *
     * @param array $image_data The data of the image.
     * @return bool True if the image data is valid, otherwise false.
     */
    private function isValidImage($image_data): bool
    {
        return $image_data && $image_data['size'] <= $this->upload_max_size;
    }

    /**
     * Generates a unique filename for the image.
     *
     * @param string $filename The original filename.
     * @return string The unique filename.
     */
    private function generateUniqueFileName($filename): string
    {
        return uniqid() . '.' . self::getImageExtension($filename);
    }

    /**
     * Checks if the file extension is allowed.
     *
     * @param string $filename The filename.
     * @return bool True if the file extension is allowed, otherwise false.
     */
    private function isExtensionAllowed($filename): bool
    {
        if (!in_array(self::getImageExtension($filename), $this->allowed_extensions)) {
            return false;
        }
        return true;
    }

    /**
     * Retrieves the file extension from the filename.
     *
     * @param string $filename The filename.
     * @return string The file extension.
     */
    private static function getImageExtension($filename): string
    {
        return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    }

    /**
     * Retrieves the image path by product ID.
     *
     * @param int $product_id The ID of the product.
     * @return array|bool An array containing the image path.
     */
    public function getImagePathByProductId(int $product_id): array|bool
    {
        $condition = "WHERE id = ?";
        $result = $this->pdo->query('products', ['image_path'], $condition, [$product_id]);

        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Deletes the image associated with the product.
     *
     * @param int $product_id The ID of the product.
     * @return bool True if the image was deleted successfully, otherwise false.
     */
    public function deleteProductImage(int $product_id): bool
    {
        $image = $this->getImagePathByProductId($product_id);

        $root_path = ROOT_PATH . $image['image_path'];

        $result = false;
        if (file_exists($root_path)) {
            $result = unlink($root_path);
        }
        return $result;
    }
}
