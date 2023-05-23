# Voucher app

<!-- ABOUT THE PROJECT -->

## 💻 About The Project

Backend Developer task for join opportunity otto digital as backend developer using golang

## 💻 Step to run program
clone this repository<br>
create database mysql<br>
create .env like .env.example<br>

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


## ERD
<img src="./otto.jpg">
