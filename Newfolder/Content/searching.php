<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
<link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<?php
require_once('./../db/config.php');

@$searchSelect = $_POST['searchSelect'];
@$searchBox = $_POST['searchBox'];

if ($searchSelect === "ردیف")
    $searchQuery = "SELECT * FROM products WHERE (id = '$searchBox')";
elseif ($searchSelect === "عنوان کتاب")
    $searchQuery = "SELECT * FROM products WHERE (title = '$searchBox')";
elseif ($searchSelect === "نام نویسنده")
    $searchQuery = "SELECT * FROM products WHERE (author = '$searchBox')";
elseif ($searchSelect === "قیمت کتاب")
    $searchQuery = "SELECT * FROM products WHERE (price = '$searchBox')";
elseif ($searchSelect === "سال نشر")
    $searchQuery = "SELECT * FROM products WHERE (age = '$searchBox')";
elseif ($searchSelect === "دسته بندی کتاب")
    $searchQuery = "SELECT * FROM products WHERE (category = '$searchBox')";
else
    $searchQuery = "SELECT * FROM products WHERE 0";

if (@$_GET['show'] === 'all') {
    $searchQuery = "SELECT * FROM products WHERE 1";
};

if ($founded = $conn->query($searchQuery)) {
    if ($founded->num_rows > 0) {
?>
        <div class="container text-right" style="direction:rtl ; font-family: Vazir ; ">
            <table class="table">
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>نام نویسنده</th>
                        <th>قیمت</th>
                        <th>سال نشر</th>
                        <th>دسته بندی</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rows =  $founded->fetch_assoc()) {
                        echo '<tr>'
                            . '<td>'
                            . $rows['id']
                            . '</td>'
                            . '<td>'
                            . $rows['title']
                            . '</td>'
                            . '<td>'
                            . $rows['author']
                            . '</td>'
                            . '<td>'
                            . $rows['price']
                            . '</td>'
                            . '<td>'
                            . $rows['age']
                            . '</td>'
                            . '<td>'
                            . $rows['category']
                            . '</td>'
                            . '</th>';
                    };
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    } else if ($founded->num_rows <= 0) {
    ?>
        <div class="container border text-center text-danger mt-5 p-3" style="direction:rtl ; font-family: Vazir ; ">
            <div class="row my-5">
                <div class="col my-5">
                    <h2>
                        <span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </span>
                        <span>هیچ اطلاعاتی یافت نشد</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="./../index.php" class="text-decoration-none text-success">بازگشت به صفحه قبل</a>
                </div>
            </div>
        </div>
<?php

    };
}
