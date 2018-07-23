## 動作環境について
ChromeをSeleniumで動作させるにはChromeDriverが必要です。
本システムに同封していますが、お使いのPCのChromeのバージョンアップとあわせて、ChromeDriverも最新版にアップデートする必要があります。
ChromeDriverは以下のURLより入手できます。  
http://chromedriver.chromium.org/downloads

## 前提条件

* Javaがインストールされていること
* PHPがインストールされていること
* ChromeとChromeDriverのバージョンが一致していること
* ChromeDriverに実行権限が付与されていること

## 確認環境

OS:      macOS High Sierra 10.13.5
Browser: Chrome 67.0.3396.99
Java: Java(TM) SE Runtime Environment (build 1.8.0_152-b16)
      Java HotSpot(TM) 64-Bit Server VM (build 25.152-b16, mixed mode)
Selenium: ChromeDriver 2.40
          Selenium Standalone 3.4.0

## 手順

```
# 初回のみ依存ライブラリをcomposerを利用してインストール
$ php composer.phar install

# 実行
$ php buyma.php

```
