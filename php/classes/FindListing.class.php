<?php

interface SearchInterface{
    public function searchNow();
}

interface LoginInterface{
    public function loginFirst();
}


class Region implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Bedrooms implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Bathrooms implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Type implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Garden implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Parking implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Sold implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class AskingPrice implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class Postecode implements SearchInterface, LoginInterface{
    public function loginFirst() {}
    public function searchNow() {}
    public function searchProcess() {
        $this->loginFirst();
        $this->searchNow();
}
}

class ExactSerch implements SearchInterface{
    public function searchNow() {}
    public function searchProcess() {
        $this->searchNow();
}
}

class FindListing {
    public function search(SearchInterface $searchType) {
        $searchType->searchProcess();
    }
}

$searchType = new Bedrooms();
$findListing = new FindListing();
$findListing -> search($searchType);