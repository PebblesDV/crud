<?php

//functie aanmaken die ons 1 product geeft op basis van een product id.

$products = [
    [
        "id" => "1",
        "category" => "Singlet",
        "title" => "IPF Approved - Red",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletRed.webp",
            "assets\img\products\singletRed2.webp",
            "assets\img\products\singletRed3.webp"
        ]
    ],
    [
        "id" => "2",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Red",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtRed.webp",
            "assets\img\products\shirtRed2.webp",
            "assets\img\products\shirtRed3.webp"
        ]
    ],
    [
        "id" => "3",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Red",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksRed.webp",
            "assets\img\products\socksRed2.webp",
            "assets\img\products\socksRed3.webp"
        ]
    ],
    [
        "id" => "4",
        "category" => "Singlet",
        "title" => "IPF Approved - Light Blue",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletBlue.webp",
            "assets\img\products\singletBlue2.webp",
            "assets\img\products\singletBlue3.webp"
        ]
    ],
    [
        "id" => "5",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Light Blue",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtBlue.webp",
            "assets\img\products\shirtBlue2.webp",
            "assets\img\products\shirtBlue3.webp"
        ]
    ],
    [
        "id" => "6",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Light Blue",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksBlue.webp",
            "assets\img\products\socksBlue2.webp",
            "assets\img\products\socksBlue3.webp"
        ]
    ],
    [
        "id" => "7",
        "category" => "Singlet",
        "title" => "IPF Approved - Pink",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletPink.webp",
            "assets\img\products\singletPink2.webp",
            "assets\img\products\singletPink3.webp"
        ]
    ],
    [
        "id" => "8",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Pink",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtPink.webp",
            "assets\img\products\shirtPink2.webp",
            "assets\img\products\shirtPink3.webp"
        ]
    ],
    [
        "id" => "9",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Pink",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksPink.webp",
            "assets\img\products\socksPink2.webp",
            "assets\img\products\socksPink3.webp"
        ]
    ],
    [
        "id" => "10",
        "category" => "Singlet",
        "title" => "IPF Approved - Black",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletBlack.webp",
            "assets\img\products\singletBlack2.webp",
            "assets\img\products\singletBlack3.webp"
        ]
    ],
    [
        "id" => "11",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Black",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtBlack.webp",
            "assets\img\products\shirtBlack2.webp",
            "assets\img\products\shirtBlack3.webp"
        ]
    ],
    [
        "id" => "12",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Black",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksBlack.webp",
            "assets\img\products\socksBlack2.webp",
            "assets\img\products\socksBlack3.webp"
        ]
    ],
    [
        "id" => "13",
        "category" => "Singlet",
        "title" => "IPF Approved - White",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletWhite.webp",
            "assets\img\products\singletWhite2.webp",
            "assets\img\products\singletWhite3.webp"
        ]
    ],
    [
        "id" => "14",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - White",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtWhite.webp",
            "assets\img\products\shirtWhite2.webp",
            "assets\img\products\shirtWhite3.webp"
        ]
    ],
    [
        "id" => "15",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - White",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksWhite.webp",
            "assets\img\products\socksWhite2.webp",
            "assets\img\products\socksWhite3.webp"
        ]
    ],
    [
        "id" => "16",
        "category" => "Singlet",
        "title" => "IPF Approved - Dark Blue",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletDBlue.webp",
            "assets\img\products\singletDBlue2.webp",
            "assets\img\products\singletDBlue3.webp"
        ]
    ],
    [
        "id" => "17",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Dark Blue",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtDBlue.webp",
            "assets\img\products\shirtDBlue2.webp",
            "assets\img\products\shirtDBlue3.webp"
        ]
    ],
    [
        "id" => "18",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Dark Blue",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksDBlue.webp",
            "assets\img\products\socksDBlue2.webp",
            "assets\img\products\socksDBlue3.webp"
        ]
    ],
    [
        "id" => "19",
        "category" => "Singlet",
        "title" => "IPF Approved - Orange",
        "price" => "€84,99",
        "images" => [
            "assets\img\products\singletOrange.webp",
            "assets\img\products\singletOrange2.webp",
            "assets\img\products\singletOrange3.webp"
        ]
    ],
    [
        "id" => "20",
        "category" => "Meet Shirt",
        "title" => "IPF Approved - Orange",
        "price" => "€37,99",
        "images" => [
            "assets\img\products\shirtOrange.webp",
            "assets\img\products\shirtOrange2.webp",
            "assets\img\products\shirtOrange3.webp"
        ]
    ],
    [
        "id" => "21",
        "category" => "Deadlift Socks",
        "title" => "IPF Approved - Orange",
        "price" => "€19,99",
        "images" => [
            "assets\img\products\socksOrange.webp",
            "assets\img\products\socksOrange2.webp",
            "assets\img\products\socksOrange3.webp"
        ]
    ],
];

function getProductByID($id)
{
    global $products;

    foreach ($products as $product) {
        if ($product["id"] == $id) {
            return $product;
        }
    }
    return [];
}
