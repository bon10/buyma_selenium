<?php
require_once "vendor/autoload.php";

use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

// 定数定義
define ('LOGIN_MAIL', 'your mail address');
define ('LOGIN_PASS', 'your password');


run();

function run() {
    // Chromeドライバの環境変数を設定(上がWindows,下がmac)
    //putenv('webdriver.chrome.driver=' . __DIR__ . '\bin\chromedriver.exe');
    putenv('webdriver.chrome.driver=' . __DIR__ . '/bin/chromedriver');

    // ブラウザ起動
    $driver = ChromeDriver::start();

    // ログイン画面
    $driver->get('https://www.buyma.com/login/');

    // メールアドレス入力(HTMLのid要素txtLoginIdに入力)
    $driver->findElement(WebDriverBy::id('txtLoginId'))
      ->sendKeys(LOGIN_MAIL);

    // パスワード入力
    $driver->findElement(WebDriverBy::id('txtLoginPass'))
    ->sendKeys(LOGIN_PASS);

    // ログインボタン押下
    $driver->findElement(WebDriverBy::id('login_do'))
    ->click();

    // HTMLのクラス要素に「fab-icon-dashboard-exhibit」が出現するまで待機(fab-icon-dashboard-exhibitは出品するのアイコン)
    $driver->wait()->until(
        WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::cssSelector('.fab-icon-dashboard-exhibit'))
    );
}
