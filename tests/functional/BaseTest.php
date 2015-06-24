<?php

class BaseTest extends WebDriverTestCase {

//    public function testLogin() {
//
//        $this->driver->get($this->getTestPath('index.html'));
//        sleep(5);
//        $this->driver->findElement(WebDriverBy::name('Username'))->sendKeys('swadmin');
//        $this->driver->findElement(WebDriverBy::name('Password'))->sendKeys('P@ssw0rd');
//        $this->driver->findElement(WebDriverBy::linkText('Login'))->click();
//        sleep(5);
//    }

    public function testNewReceiveInventory() {

        $this->driver->get($this->getTestPath('index.html'));
        sleep(5);
        $this->driver->findElement(WebDriverBy::name('Username'))->sendKeys('lnguyen');
        $this->driver->findElement(WebDriverBy::name('Password'))->sendKeys('password');
        $this->driver->findElement(WebDriverBy::linkText('Login'))->click();
        sleep(5);
        $this->driver->findElement(WebDriverBy::linkText('Receiving'))->click();      
        $this->driver->findElement(WebDriverBy::xpath("//span[text()='Receive New']"))->click();
        sleep(5);
        $this->driver->findElement(WebDriverBy::name('Fromlocid'))->click();
        $this->driver->findElement(WebDriverBy::xpath("//li[text()='SJRECVING']"))->click();
        sleep(5);

    }

}
