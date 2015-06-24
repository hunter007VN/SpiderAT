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
        for ($i = 0; $i < 10; $i++) {
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Receive New']"))->click();
            sleep(5);
            $this->driver->findElement(WebDriverBy::name('Fromlocid'))->click();
            $this->driver->findElement(WebDriverBy::xpath("//li[text()='SJRECVING']"))->click();

            $this->driver->findElement(WebDriverBy::name('Recvtypeid'))->click();
            $this->driver->findElement(WebDriverBy::xpath("//li[text()='NEW INVENTORY']"))->click();

            $this->driver->findElement(WebDriverBy::name('Partnerid'))->click();
            $this->driver->findElement(WebDriverBy::xpath("//li[text()='QUORUM']"))->click();
            sleep(5);
            $this->driver->findElement(WebDriverBy::name('Tolocid'))->click();
            $this->driver->findElement(WebDriverBy::xpath("//div[text()='[QUOR-RAWMAT] QUOR-RAWMAT']"))->click();

            $this->driver->findElement(WebDriverBy::name('Refpo'))->sendKeys('Refpo');
            $this->driver->findElement(WebDriverBy::name('Custpo'))->sendKeys('Custpo');
            $this->driver->findElement(WebDriverBy::name('Comment'))->sendKeys('Comment by Luu');

            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Enter Items']"))->click();
            sleep(1);
            $this->driver->findElement(WebDriverBy::name('addOrderDetail'))->sendKeys(WebDriverKeys::ENTER);

            $this->driver->findElement(WebDriverBy::xpath("//li[text()='ONQ-280-16']"))->click();

            for ($j = 0; $j < 3; $j++) {

                $arr = str_split('ABCDEFGHIJKLMNOP'); // get all the characters into an array
                shuffle($arr); // randomize the array
                $arr2 = array_slice($arr, 0, 6); // get the first six (random) characters out
                $str = implode('', $arr2); // smush them back into a string
                $this->driver->findElement(WebDriverBy::name('Ssn'))->sendKeys($str);
                $this->driver->findElement(WebDriverBy::name('Ssn'))->sendKeys(WebDriverKeys::ENTER);
                sleep(2);
            }

            sleep(2);

            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Complete']"))->click();
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Save']"))->click();

            sleep(2);
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='OK']"))->click();
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Post Batch']"))->click();
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='OK']"))->click();
            sleep(10);
            $this->driver->findElement(WebDriverBy::xpath("//span[text()='Close']"))->click();
            sleep(2);
        }
    }

}
