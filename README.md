菜, 
就多練

有說明寫在這或外連

-----------------------------------------------------------------------

```bash
mysql -u root -p
```
database: veganrace
<br>
## 初始化

進入xampp的shell, 確保你在專案目錄下:
```bash
cd htdocs\vegan-race-
php init_db.php          
php phinx.phar migrate   
php phinx.phar seed:run
```

## 關於sql同步


### 如何使用phinx同步sql:

進入xampp的shell, 確保你在專案目錄下
```bash
cd htdocs\vegan-race-
```
 <br>

更改sql結構
```bash
php phinx.phar create CreateUsersTable -- 描述一下你做了什麼結構性更改, 他會在migrate目錄下創建一個帶有該名稱的migrate檔案, 已經寫了一個範例在該目錄下, 照著寫即可
php phinx.phar migrate                 -- 根據migrate目錄下的檔案做sql結構的更改, 如果要同步直接跑這行
```
 <br>
 
更改sql資料
```bash
php phinx.phar seed:create UserSeeder
php phinx.phar seed:run
```
 <br>
 
這方法保留了版本紀錄應可以回檔
 
當然你也可以用sql dump
<br>
最簡單的方法是進入myphpadmin獲得.sql檔案, 有UI可操作

但如果你進不去(像我), 這是指令:
```bash
"C:\xampp\mysql\bin\mysqldump.exe" -u root -p your_database_name > backup.sql
```


> -u root → MySQL 帳號 <br>
> -p → 提示輸入密碼 <br>
> your_database_name → 要備份的 DB <br>
> \> backup.sql → 匯出檔名 <br>


*用這方法小心覆蓋掉檔案*
