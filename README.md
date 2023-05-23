+--------+----------+--------------------+------+--------------------------------------------------+------------+
| Domain | Method   | URI                | Name | Action                                           | Middleware |
+--------+----------+--------------------+------+--------------------------------------------------+------------+
|        | GET|HEAD | /                  |      | Closure                                          | web        |
|        | POST     | api/auth/login     |      | App\Http\Controllers\AuthController@login        | api        |
|        | POST     | api/auth/logout    |      | App\Http\Controllers\AuthController@logout       | api        |
|        |          |                    |      |                                                  | auth:api   |
|        | GET|HEAD | api/auth/me        |      | App\Http\Controllers\AuthController@me           | api        |
|        |          |                    |      |                                                  | auth:api   |
|        | POST     | api/auth/refresh   |      | App\Http\Controllers\AuthController@refresh      | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | POST     | api/auth/register  |      | App\Http\Controllers\AuthController@register     | api        | 
|        | GET|HEAD | api/kendaraan      |      | App\Http\Controllers\KendaraanController@index   | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | POST     | api/kendaraan      |      | App\Http\Controllers\KendaraanController@store   | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | DELETE   | api/kendaraan/{id} |      | App\Http\Controllers\KendaraanController@destroy | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/kendaraan/{id} |      | App\Http\Controllers\KendaraanController@show    | api        | 
|        |          |                    |      |                                                  | auth:api   |
|        | PUT      | api/kendaraan/{id} |      | App\Http\Controllers\KendaraanController@update  | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | POST     | api/mobil          |      | App\Http\Controllers\MobilController@store       | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/mobil          |      | App\Http\Controllers\MobilController@index       | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/mobil/{id}     |      | App\Http\Controllers\MobilController@show        | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | DELETE   | api/mobil/{id}     |      | App\Http\Controllers\MobilController@destroy     | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | PUT      | api/mobil/{id}     |      | App\Http\Controllers\MobilController@update      | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/motor          |      | App\Http\Controllers\MotorController@index       | api        |
|        |          |                    |      |                                                  | auth:api   | 
|        | POST     | api/motor          |      | App\Http\Controllers\MotorController@store       | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/motor/{id}     |      | App\Http\Controllers\MotorController@show        | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | DELETE   | api/motor/{id}     |      | App\Http\Controllers\MotorController@destroy     | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | PUT      | api/motor/{id}     |      | App\Http\Controllers\MotorController@update      | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/penjualan      |      | App\Http\Controllers\PenjualanController@index   | api        |
|        |          |                    |      |                                                  | auth:api   | 
|        | POST     | api/penjualan      |      | App\Http\Controllers\PenjualanController@store   | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/penjualan/{id} |      | App\Http\Controllers\PenjualanController@show    | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | PUT      | api/penjualan/{id} |      | App\Http\Controllers\PenjualanController@update  | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | DELETE   | api/penjualan/{id} |      | App\Http\Controllers\PenjualanController@destroy | api        | 
|        |          |                    |      |                                                  | auth:api   | 
|        | GET|HEAD | api/stok           |      | App\Http\Controllers\StokController@index        | api        | 
|        |          |                    |      |                                                  | auth:api   | 
+--------+----------+--------------------+------+--------------------------------------------------+------------+