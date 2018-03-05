<?php
namespace KittichaiGarden;

class Event {
    private $id;
    private $username;
    private $eventName;
    private $location;
    private $date;
    private $time;
    private $size;
    private $category;
    private $type;
    private $price;
    private $detail;
    private $teaserVDO;
    private $precondition;
    private $postcondition;
    private $organizerName;
    private $contactName;
    private $email;
    private $phone;

    function __construct($id, $username, $eventName, $detail, $teaserVDO, $date, $time, $location, $size, $precondition, $postcondition, $price, $type, $category, $organizerName, $email, $phone) {
        $this->id = $id;
        $this->username = $username;
        $this->eventName = $eventName;
        $this->detail = $detail;
        $this->teaserVDO = $teaserVDO;
        $this->date = $date;
        $this->time = $time;
        $this->location = $location;
        $this->size = $size;
        $this->recondition = $precondition;
        $this->postcondition = $postcondition;
        $this->price = $price;
        $this->type = $type;
        $this->category = $category;
        $this->organizerName = $organizerName;
        $this->email = email;
        $this->phone = phone;
    }

    function getID() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getEventName() {
        return $this->eventName;
    }

    function getDetail() {
        return $this->detail;
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

    function getSize() {
        return $this->size;
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

    function getCategory() {
        return $this->category;
    }

    function getOrganizerName() {
        return $this->organizerName;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEventName($eventName) {
        $this->eventName = $eventName;
    }

    function setDetail($detail) {
        $this->detail = $detail;
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

    function setSize($size) {
        $this->size = $size;
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

    function setCategory($category) {
        $this->category = $category;
    }

    function setOrganizerName($organizerName) {
        $this->organizerName = $organizerName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }
}