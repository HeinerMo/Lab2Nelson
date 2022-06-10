CREATE TABLE tb_cleaningProduct(
    product_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(60) NOT NULL,
    price NUMERIC(10, 5) NOT NULL,
    description VARCHAR(1000),
    PRIMARY KEY(product_id)
)