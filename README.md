# Laravel 9 應用程式效能監控

引入 sarfraznawaz2005 的 meter 套件來擴增提供快速尋找和修復應用程式問題所需的資訊，透過工具找出延遲情況和效率不佳的程式碼，藉此提升應用程式效能並減少資源消耗。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/meter` 來進行應用程式效能監控，預設的使用者名稱和密碼分別為 __meter__ 和 __meter__ 。

----

## 畫面截圖
![](https://i.imgur.com/EKDdd4b.png)
> 協助快速查看 Laravel 應用程式的運作情形，並採取行動來解決問題