<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 p-3 text-white">
        <div class="row">
            <div class="col">
                <form action="content/registerForm.php" method="POST" class="form col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 shadow-lg py-2 px-5">
                    <div class="form-row my-2">
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <label for="productTitle">عنوان کتاب</label>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <input type="text" name="productTitle" id="productTitle" class="form-control" />
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <label for="productAuthor">نام نویسنده</label>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <input type="text" name="productAuthor" id="productTitle" class="form-control" />
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <label for="productPrice">قیمت</label>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <input type="number" name="productPrice" id="productTitle" class="form-control" />
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <label for="productAge">سال نشر</label>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <select name="productAge" id="" class="custom-select">
                                <option value="1380">1380</option>
                                <option value="1381">1381</option>
                                <option value="1382">1382</option>
                                <option value="1383">1383</option>
                                <option value="1384">1384</option>
                                <option value="1385">1385</option>
                                <option value="1386">1386</option>
                                <option value="1387">1387</option>
                                <option value="1388">1388</option>
                                <option value="1389">1389</option>
                                <option value="1390">1390</option>
                                <option value="1391">1391</option>
                                <option value="1392">1392</option>
                                <option value="1393">1393</option>
                                <option value="1394">1394</option>
                                <option value="1395">1395</option>
                                <option value="1396">1396</option>
                                <option value="1397">1397</option>
                                <option value="1398">1398</option>
                                <option value="1399">1399</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row my-2">
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <label for="computer">دسته بندی</label>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6">
                            <div class="form-check-inline">
                                <label for="computer" class="form-check-label">رایانه</label>
                                <input type="radio" name="productCategory" id="computer" class="form-check-input" value="رایانه" />
                            </div>
                            <div class="form-check-inline">
                                <label for="literary" class="form-check-label">ادبی</label>
                                <input type="radio" name="productCategory" id="literary" class="form-check-input" value="ادبی" />
                            </div>
                            <div class="form-check-inline">
                                <label for="medical" class="form-check-label">پزشکی</label>
                                <input type="radio" name="productCategory" id="medical" class="form-check-input" value="پزشکی" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col col-12 col-xl-6 col-lg-6">

                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6 text-center">
                            <input type="submit" class="btn btn-warning col-12" value="ثبت" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
                <form action="content/searching.php" method="post" class="shadow-lg col-12 col-xl-6 col-lg-6 col-md-9 px-3 py-2">
                    <div class="form-row mt-4">
                        <div class="col col-12 col-xl-3 col-lg-3">
                            <label for="searchSelect">جستو بر اساس</label>
                        </div>
                        <div class="col col-12 col-xl-9 col-lg-9">
                            <select name="searchSelect" id="searchSelect" class="custom-select d-inline-block">
                                <option disabled hidden selected>انتخاب کنید</option>
                                <option value="ردیف">ردیف</option>
                                <option value="عنوان کتاب">عنوان کتاب</option>
                                <option value="نام نویسنده">نام نویسنده</option>
                                <option value="قیمت کتاب">قیمت کتاب</option>
                                <option value="سال نشر">سال نشر</option>
                                <option value="دسته بندی کتاب">دسته بندی کتاب</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col col-12 col-xl-3 col-lg-3">
                        </div>
                        <div class="col col-12 col-xl-9 col-lg-9">
                            <input type="search" name="searchBox" id="searchBox" class="form-control" placeholder="نام یا مقدار خود را وارد کنید" />
                        </div>
                    </div>
                    <div class="form-row mt-4 text-center">
                        <div class="col col-xl-3 col-lg-3 d-none d-xl-inline-flex d-lg-inline-flex">
                        </div>
                        <div class="col col-4 col-xl-4 col-lg-4">
                            <button type="submit" class="btn btn-danger">
                                <span class="d-none d-xl-inline-flex d-lg-inline-flex d-md-inline-flex">جستجو</span>
                                <small class="d-xl-none d-lg-none d-md-none">جستجو</small>
                            </button>
                        </div>
                        <div class="col col-8 col-xl-5 col-lg-5">
                            <a href="Content/searching.php?show=all" class="btn btn-dark ">
                                <span class="d-none d-xl-inline-flex d-lg-inline-flex d-md-inline-flex">نمایش تمام محصولات</span>
                                <small class="d-xl-none d-lg-none d-md-none">نمایش تمام محصولات</small>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>