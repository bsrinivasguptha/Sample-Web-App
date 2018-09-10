<!DOCTYPE html>
<html id="html">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Angular app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="js/angular.min.js"></script>
    <script src="js/angular-sanitize.js"></script>
    <script src="js/main.js"></script>
</head>
<body id="body" ng-app="myApp" ng-controller="myCtrl">
    
<header class="w3-row">
    <div class="logo w3-col m2 w3-display-container">
        <div class="w3-display-middle">
            App Name
        </div>
    </div>
    <div class="middle-section w3-col m8 w3-center">
        <input type="text" class="search-input" placeholder="Search">
    </div>
    <div class="right-section w3-col m2 w3-display-container">
        <div class="w3-display-middle">
            <div class="action" onclick="openFullscreen()" title="Enter Fullscreen">
                <i class="material-icons">fullscreen</i>
            </div>
        </div>
    </div>
</header>

<div id="body-row" class="w3-row">
    <div class="w3-col m2" id="sidenav">
        <div class="w3-ul w3-hoverable">
            <li class="active">
                <i class="material-icons">
                    check_circle
                </i>
                Page 1
            </li>
            <li>
                <i class="material-icons">
                    check_circle
                </i>
                Page 2
            </li>
            <li>
                <i class="material-icons">
                    check_circle
                </i>
                Page 3
            </li>
            <li>
                <i class="material-icons">
                    check_circle
                </i>
                Page 4
            </li>
        </div>
    </div>

    <div class="w3-col m10 w3-row-padding" id="page">

            <div ng-show="!users" class="w3-col s12 m6 l4">

                <div ng-bind-html="loadingCard"></div>

            </div>

            <div ng-repeat="user in users" class="w3-col s12 m6 l4 w3-animate-bottom">
                <div class="w3-card simple">
                    <B ng-show="users">{{user.name}}</B>
                    <div ng-show="!users" class="loading-bar big short">
                        <div class="loading-block"></div>
                    </div>
                    <br>
                    <span ng-show="users">{{user.email}}</span>
                    <div ng-show="!users" class="loading-bar">
                        <div class="loading-block"></div>
                    </div>
                </div>
            </div>

            <div ng-repeat="user in users" class="w3-col s12 m6 l4 w3-animate-bottom">
                <div class="w3-card simple">
                    <B ng-show="users">{{user.name}}</B>
                    <div ng-show="!users" class="loading-bar big short">
                        <div class="loading-block"></div>
                    </div>
                    <br>
                    <span ng-show="users">{{user.email}}</span>
                    <div ng-show="!users" class="loading-bar">
                        <div class="loading-block"></div>
                    </div>
                </div>
            </div>


            <div ng-repeat="user in users" class="w3-col s12 m6 l4 w3-animate-bottom">
                <div class="w3-card simple">
                    <B ng-show="users">{{user.name}}</B>
                    <div ng-show="!users" class="loading-bar big short">
                        <div class="loading-block"></div>
                    </div>
                    <br>
                    <span ng-show="users">{{user.email}}</span>
                    <div ng-show="!users" class="loading-bar">
                        <div class="loading-block"></div>
                    </div>
                </div>
            </div>


            <!-- <div ng-repeat="user in users" class="w3-col s12 m6 l4">
                <div class="w3-card simple">
                    <B>{{user.name}}</B>
                    <br>
                    {{user.email}}

                </div>
            </div> -->

            
            
    </div>
</div>

<script>
    var app = angular.module("myApp", ['ngSanitize']);
    app.controller("myCtrl", function($scope, $http){
        $scope.author = "Srinivas Batchu";
        $scope.loadingCard = "<div class='w3-card simple'>\
                            <div class='loading-bar big short'>\
                                <div class='loading-block'></div>\
                            </div>\
                            <br>\
                            <div class='loading-bar'>\
                                <div class='loading-block'></div>\
                            </div>\
                            <br>\
                            <div class='loading-bar'>\
                                <div class='loading-block'></div>\
                            </div>\
                        </div>";
        

        $scope.users = null;

        $http.get("https://jsonplaceholder.typicode.com/users")
            .then(function(response) {
                $scope.users = response.data;
                $scope.data = true;
            });
    });

    /* Get the element you want displayed in fullscreen mode (a video in this example): */
    var elem = document.getElementById("html"); 

    /* When the openFullscreen() function is executed, open the video in fullscreen.
    Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
    function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem.msRequestFullscreen();
    }
    }


</script>
</body>
</html>



