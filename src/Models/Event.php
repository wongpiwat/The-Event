<?php
namespace KittichaiGarden;

class Event {
    private $id;
    private $username;
    private $nameEvent;
    private $detail;
    private $image;
    private $teaserVDO;
    private $date;
    private $time;
    private $location;
    private $capacity;
    private $precondition;
    private $postcondition;
    private $price;
    private $type;
    private $categories;
    private $company;

    function __construct($id, $username, $nameEvent, $detail, $image, $teaserVDO, $date, $time, $location, $capacity, $precondition, $postcondition, $price, $type, $categories, $company) {
        $this->id = $id;
        $this->username = $username;
        $this->nameEvent = $nameEvent;
        $this->detail = $detail;
        $this->image = $image;
        $this->teaserVDO = $teaserVDO;
        $this->date = $date;
        $this->time = $time;
        $this->location = $location;
        $this->capacity = $capacity;
        $this->recondition = $precondition;
        $this->postcondition = $postcondition;
        $this->price = $price;
        $this->type = $type;
        $this->categories = $categories;
        $this->company = $company;
    }

    function getID() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getNameEvent() {
        return $this->nameEvent;
    }

    function getDetail() {
        return $this->detail;
    }

    function getImage() {
        return $this->image;
    }

    function getTeaserVDO() {
        return $this->teaserVDO;
    }

    function getDate() {
        return $this->date;
    }

    function getTime() {
        return $this->time;
    }

    function getLocation() {
        return $this->location;
    }

    function getCapacity() {
        return $this->capacity;
    }

    function getPreCondition() {
        return $this->precondition;
    }

    function getPostCondition() {
        return $this->postcondition;
    }

    function getPrice() {
        return $this->price;
    }

    function getType() {
        return $this->type;
    }

    function getCategories() {
        return $this->categories;
    }

    function getCompany() {
        return $this->company;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setNameEvent($nameEvent) {
        $this->nameEvent = $nameEvent;
    }

    function setDetail($detail) {
        $this->detail = $detail;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setTeaserVDO($teaserVDO) {
        $this->teaserVDO = $teaserVDO;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    function setPreCondition($precondition) {
        $this->precondition = $precondition;
    }

    function setPostCondition($postcondition) {
        $this->postcondition = $postcondition;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setCategories($categories) {
        $this->categories = $categories;
    }

    function setCompany($company) {
        $this->company = $company;
    }
}