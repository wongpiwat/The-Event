<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styleMap.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd1xMYT1bt99qtFWQEzXiRBvORDWHgPtk&libraries=places"></script>
	<title></title>
</head>
<body>
	<div class="container" ng-app="myApp" ng-controller="newPlaceCtrl">
    

    

    
    <form name="searchForm" novalidate 
    ng-submit="search()">
        <div class="input-group">
            <input name="place" type="text" class="form-control" 
            ng-model="searchPlace" required autofocus />
            <span class="input-group-btn">
                <button class="btn btn-primary" 
                ng-disabled="searchForm.$invalid">Search</button>
            </span>
        </div>
    </form>
        
    <div id="map"></div>
      
    <form name="resForm" class="form-horizontal" novalidate 
    ng-submit="send()">
        <div class="form-group">
            <label for="resName" class="col-xs-2 control-label">Name</label>
            <div class="col-xs-10">
                <input name="resName" type="text" class="form-control" 
                ng-model="place.name" required />
            </div>
        </div>
        <div class="form-group">
            <label for="resLat" class="col-xs-2 control-label">Latitude</label>
            <div class="col-xs-10">
                <input name="resLat" type="number" class="form-control" 
                ng-model="place.lat" required />
            </div>
        </div>
        <div class="form-group">
            <label for="resLng" class="col-xs-2 control-label">Longitude</label>
            <div class="col-xs-10">
                <input name="resLng" type="number" class="form-control" 
                ng-model="place.lng" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-success" 
                ng-disabled="resForm.$invalid">Confirm</button>
            </div>
        </div>
    </form>
    
</div>
<script type="text/javascript">
	var app = angular.module('myApp', []);

app.service('Map', function($q) {
    
    this.init = function() {
        var options = {
            center: new google.maps.LatLng(13.7563, 100.5018),
            zoom: 13,
            disableDefaultUI: true    
        }
        this.map = new google.maps.Map(
            document.getElementById("map"), options
        );
        this.places = new google.maps.places.PlacesService(this.map);
    }
    
    this.search = function(str) {
        var d = $q.defer();
        this.places.textSearch({query: str}, function(results, status) {
            if (status == 'OK') {
                d.resolve(results[0]);
            }
            else d.reject(status);
        });
        return d.promise;
    }
    
    this.addMarker = function(res) {
        if(this.marker) this.marker.setMap(null);
        this.marker = new google.maps.Marker({
            map: this.map,
            position: res.geometry.location,
            animation: google.maps.Animation.DROP
        });
        this.map.setCenter(res.geometry.location);
    }
    
});

app.controller('newPlaceCtrl', function($scope, Map) {
    
    $scope.place = {};
    
    $scope.search = function() {
        $scope.apiError = false;
        Map.search($scope.searchPlace)
        .then(
            function(res) { // success
                Map.addMarker(res);
                $scope.place.name = res.name;
                $scope.place.lat = res.geometry.location.lat();
                $scope.place.lng = res.geometry.location.lng();
            },
            function(status) { // error
                $scope.apiError = true;
                $scope.apiStatus = status;
            }
        );
    }
    
    $scope.send = function() {
        alert($scope.place.name + ' : ' + $scope.place.lat + ', ' + $scope.place.lng);    
    }
    
    Map.init();
});

</script>

</body>
</html>