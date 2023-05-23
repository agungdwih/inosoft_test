# Voucher app

<!-- ABOUT THE PROJECT -->

## 💻 About The Project

Backend Developer task for join opportunity inosoft as backend developer using laravel

## 💻 Step to run program
clone this repository<br>
create .env like .env.example<br>
be sure to use MongoDB for base database project (also connect to MongoDB)<br>

note: comment the function (_construct) at the controller to run the unit test<br>

## 💻 Api Doc

<div>
  
| Feature User | Endpoint | Param | Function |
| --- | --- | --- | --- |
| POST | api/auth/login  | - | login user |
| POST | api/auth/logout | id | logout current user login |
| GET | api/auth/me | - | show current user login |
| GET | api/kendaraan | - | show all "kendaraan" collection |
| POST | api/kendaraan | - | add item to "kendaraan" collection |
| PUT | api/kendaraan | id | edit item in "kendaraan" collection by id |
| GET | api/kendaraan | id | show item in "kendaraan" collection by id |
| DELETE | api/kendaraan | id | show item in "kendaraan" collection by id |
| GET | api/mobil | - | show all "mobil" collection |
| POST | api/mobil | - | add item to "mobil" collection |
| PUT | api/mobil | id | edit item in "mobil" collection by id |
| GET | api/mobil | id | show item in "mobil" collection by id |
| DELETE | api/mobil | id | show item in "mobil" collection by id |
| GET | api/motor | - | show all "motor" collection |
| POST | api/motor | - | add item to "motor" collection |
| PUT | api/motor | id | edit item in "motor" collection by id |
| GET | api/motor | id | show item in "motor" collection by id |
| DELETE | api/motor | id | show item in "motor" collection by id |
| GET | api/penjualan | - | show all "penjualan" collection |
| POST | api/penjualan | - | add item to "penjualan" collection |
| PUT | api/penjualan | id | edit item in "penjualan" collection by id |
| GET | api/penjualan | id | show item in "penjualan" collection by id |
| DELETE | api/penjualan | id | show item in "penjualan" collection by id |
| GET | api/stok | - | show current "stok" in "motor"/"mobil" collection |



