<?php
include_once('config.php');

class functions extends configDB
{
    #region PRODUCT
    public function productCreate($name, $price)
    {
        $sql = "INSERT INTO tb_products(product_name, product_price) VALUES ('$name', '$price')";
        return $this->conn->query($sql);
    }
    public function productGetAll()
    {
        $sql = "SELECT * FROM tb_products";
        return $this->conn->query($sql);
    }
    public function productGetById($id)
    {
        $sql = "SELECT * FROM tb_products WHERE product_id = '$id'";
        return $this->conn->query($sql);
    }
    public function productUpdate($id, $name, $price)
    {
        $sql = "UPDATE tb_products SET product_name='$name', product_price=$price WHERE product_id = '$id'";
        return $this->conn->query($sql);
    }
    public function productLast()
    {
        $sql = "SELECT * FROM tb_products ORDER BY product_id DESC LIMIT 1";
        return $this->conn->query($sql);
    }
    #endregion PRODUCT

    public function imageCreate($name, $id_fk)
    {
        $sql = "INSERT INTO tb_images(images_name, product_id_fk) VALUES ('$name', '$id_fk')";
        return $this->conn->query($sql);
    }
}
