<?php

// Danh sách sản phẩm khởi tạo
$products = [];

/**
 * Thêm sản phẩm mới vào danh sách sản phẩm
 * @param array $products Danh sách sản phẩm hiện tại
 * @param int $id ID của sản phẩm mới
 * @param string $name Tên của sản phẩm mới
 * @param float $price Giá của sản phẩm mới
 * @return void
 */
function addProduct(&$products, $id, $name, $price) {
    $products[] = [
        'id' => $id,
        'name' => $name,
        'price' => $price
    ];
}

/**
 * Xóa sản phẩm theo ID
 * @param array $products Danh sách sản phẩm hiện tại
 * @param int $id ID của sản phẩm cần xóa
 * @return void
 */
function deleteProductById(&$products, $id) {

    foreach ($products as $key => $product) {

        if ($product['id'] == $id) {

            unset($products[$key]);

            break;
        }

    }

    // Sắp xếp lại chỉ số mảng sau khi xóa
    $products = array_values($products);
}

/**
 * Tìm sản phẩm theo tên
 * @param array $products Danh sách sản phẩm hiện tại
 * @param string $name Tên của sản phẩm cần tìm
 * @return array|null Sản phẩm tìm thấy hoặc null nếu không có
 */
function findProductByName($products, $name) {

    foreach ($products as $product) {

        if (strcasecmp($product['name'], $name) == 0) {

            return $product;

        }
    }

    return null;
}

/**
 * Trả về danh sách sản phẩm có giá trị price lớn hơn giá trị cho trước
 * @param array $products Danh sách sản phẩm hiện tại
 * @param float $minPrice Giá trị price tối thiểu
 * @return array Danh sách sản phẩm có giá trị price lớn hơn giá trị cho trước
 */
function getProductsByMinPrice($products, $minPrice) {
    $result = [];

    foreach ($products as $product) {

        if ($product['price'] > $minPrice) {

            $result[] = $product;

        }
    }

    return $result;
}

/**
 * Trả về danh sách tên các sản phẩm
 * @param array $products Danh sách sản phẩm hiện tại
 * @return array Danh sách tên của các sản phẩm
 */
function getProductNames($products) {
    return array_column($products, 'name');
}

// Ví dụ sử dụng các hàm
addProduct($products, 1, 'Laptop', 1000);
addProduct($products, 2, 'Smartphone', 800);
addProduct($products, 3, 'Tablet', 600);

echo "<pre>"; // Định hình hiển thị mảng cho rõ ràng hơn

echo "Danh sách sản phẩm ban đầu:\n";
print_r($products);

// deleteProductById($products, 2);

// echo "Danh sách sản phẩm sau khi xóa sản phẩm có ID 2:\n";
// print_r($products);

// $product = findProductByName($products, 'tablet');

// echo "Sản phẩm tìm thấy với tên 'Tablet':\n";
// print_r($product);

// $expensiveProducts = getProductsByMinPrice($products, 700);

// echo "Danh sách sản phẩm có giá lớn hơn 700:\n";
// print_r($expensiveProducts);

$productNames = getProductNames($products);

echo "Danh sách tên các sản phẩm:\n";
print_r($productNames);


