DELIMITER
    //
CREATE PROCEDURE sp_show_cleaning_product(IN param_name VARCHAR(50))

    BEGIN
       	SELECT (name, price, description) FROM `tb_cleaningProduct` WHERE name LIKE CONCAT('%', param_name, '%');
    END //
