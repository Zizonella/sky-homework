<?php

interface RecordInterface{
    public function createNow();
}

class Listing implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class Agent implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class Admin implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class Customer implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class Region implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class ListingType implements RecordInterface {
    public function loginFirst(){}
    public function createNow(){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class Sale implements RecordInterface {
    public function loginFirst(){}
    public function createNow(
            
            
            ){}
    public function newRecordProcess(){
        $this->loginFirst();
        $this->createNow();
    }
}

class CreateNew {
    public function newRecord(RecordInterface $recordType){
        $recordType->newRecordProcess();
    }
}


$recordType = new Sale();
$createNew = new CreateNew();
$createNew->newRecord($recordType); 