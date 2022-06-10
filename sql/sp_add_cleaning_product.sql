DELIMITER
    //
CREATE PROCEDURE sp_add_cleaning_product(
    
    IN param_name VARCHAR(50),
    IN param_price DECIMAL(10,5),
    IN param_description VARCHAR(1000))

    BEGIN

        INSERT INTO tb_cleaningProduct
            (name, price, description)
        VALUES(param_name, param_price, param_description);

    END //